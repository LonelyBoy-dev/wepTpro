<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Models\Gateway;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function showInformation()
    {
        $this->authorize('settings.information');

        $provinces = Province::all();

        $info_province = option('info_province_id');

        if ($info_province) {
            $cities = Province::find($info_province)->cities;
        } else {
            $cities = [];
        }

        return view('back.settings.information', compact('provinces', 'cities'));
    }

    public function updateInformation(Request $request)
    {
        $this->authorize('settings.information');

        //$informations = $request->except(['info_icon', 'info_logo']);

        $this->validate($request, [
            'info_site_title' => 'required',
            'info_city_id' => 'exists:cities,id',
            'info_province_id' => 'exists:provinces,id',
        ]);

        $admin_route_prefix_changed = env('ADMIN_ROUTE_PREFIX') != $request->admin_route_prefix ? true : false;
        $admin_route_prefix = $request->admin_route_prefix;

        if ($admin_route_prefix_changed) {
            change_env('ADMIN_ROUTE_PREFIX', $request->admin_route_prefix);
            Artisan::call('route:cache');
        }

       /* option_update('info_icon', $request->info_icon);
        option_update('info_logo', $request->info_logo);
        option_update('info_logo_dark', $request->info_logo_dark);*/
        foreach ($request->all() as $information => $value) {
            option_update($information, $value);
        }

        return response()->json([
            'admin_route_prefix'         => $admin_route_prefix,
            'admin_route_prefix_changed' => $admin_route_prefix_changed
        ]);
    }

    public function showSocials()
    {
        $this->authorize('settings.socials');

        return view('back.settings.socials');
    }

    public function updateSocials(Request $request)
    {
        $this->authorize('settings.socials');

        $socials = $request->all();

        foreach ($socials as $social => $value) {
            option_update($social, $value);
        }

        return response('success');
    }

    public function showGateways()
    {
        $this->authorize('settings.gateway');

        foreach (config('general.supported_gateways') as $key => $name) {
            Gateway::firstOrCreate(
                [
                    'key' => $key
                ],
                [
                    'name' => $name
                ]
            );
        }

        $gateways = Gateway::get();

        return view('back.settings.gateways', compact('gateways'));
    }

    public function updateGateways(Request $request)
    {
        $this->authorize('settings.gateway');

        $active_ids = [];

        if ($request->gateways) {
            foreach ($request->gateways as $id => $request_gateway) {
                if (!isset($request_gateway['is_active'])) {
                    continue;
                }

                $active_ids[] = $id;

                $gateway = Gateway::find($id);

                $gateway->update([
                    'name'        => $request_gateway['name'],
                    'ordering'    => $request_gateway['ordering'],
                    'is_active'   => true,
                ]);

                foreach ($request_gateway['configs'] as $key => $value) {
                    $gateway->configs()->updateOrCreate(
                        [
                            'key' => $key
                        ],
                        [
                            'value' => $value
                        ]
                    );
                }
            }
        }

        Gateway::whereNotIn('id', $active_ids)->update([
            'is_active' => false
        ]);

        return response('success');
    }

    public function showOthers()
    {
        $this->authorize('settings.others');

        $currencies = Currency::latest()->get();

        return view('back.settings.others', compact('currencies'));
    }

    public function updateOthers(Request $request)
    {
        $this->authorize('settings.others');

        $env_options = [
            'PUSHER_APP_ID',
            'PUSHER_APP_KEY',
            'PUSHER_APP_SECRET',
            'PUSHER_APP_CLUSTER',
        ];

        $env = $request->only($env_options);

        change_env('BROADCAST_DRIVER', 'pusher');

        foreach ($env as $key => $value) {
            change_env($key, $value);
        }

        $others = $request->except($env_options);

        foreach ($others as $key => $value) {
            option_update($key, $value);
        }

        return response('success');
    }

    public function showSms()
    {
        $this->authorize('settings.sms');

        return view('back.settings.sms');
    }

    public function updateSms(Request $request)
    {
        $this->authorize('settings.sms');

        $except = [
            'sms_on_user_register',
            'sms_to_verify_user',
            'forgot_password_link',
            'sms_on_order_paid',
        ];

        $sms = $request->except($except);

        foreach ($sms as $key => $value) {
            option_update($key, $value);
        }

        foreach ($except as $option) {
            if ($request->$option) {
                option_update($option, 'on');
            } else {
                option_update($option, 'off');
            }
        }

        return response('success');
    }
}
