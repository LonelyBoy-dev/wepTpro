<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Resources\Datatable\OrderCollection;
use App\Models\Order;
use App\Models\Price;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Order::class, 'order');
    }

    public function index()
    {
        return view('back.orders.index');
    }

    public function apiIndex(Request $request)
    {
        $this->authorize('orders.index');

        $orders = Order::filter($request);

        $orders = datatable($request, $orders);

        return new OrderCollection($orders);
    }

    public function show(Order $order)
    {
        return view('back.orders.show', compact('order'));
    }

    public function destroy(Order $order)
    {
        $order->items()->delete();
        $order->transactions()->delete();

        $order->delete();
        toastr()->success('سفارش با موفقیت حذف شد.');

        return redirect()->route('admin.orders.index');
    }

    public function multipleDestroy(Request $request)
    {
        $this->authorize('orders.delete');

        $request->validate([
            'ids'   => 'required|array',
            'ids.*' => 'exists:orders,id',
        ]);

        foreach ($request->ids as $id) {
            $order = Order::find($id);
            $this->destroy($order);
        }

        return response('success');
    }

    public function shipping_status(Order $order, Request $request)
    {
        $this->authorize('orders.update');

        $this->validate($request, [
            'status' => 'required',
        ]);

        $order->update([
            'shipping_status' => $request->status
        ]);

        return response('success');
    }

    public function notCompleted()
    {
        $this->authorize('orders.index');

        $prices = Price::whereHas('orderItems', function ($q) {
            $q->whereHas('order', function ($q2) {
                $q2->notCompleted();
            })->whereHas('product', function ($q3) {
                $q3->physical();
            });
        })->paginate(20);

        return view('back.orders.not-completed', compact('prices'));
    }
}
