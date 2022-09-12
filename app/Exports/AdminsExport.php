<?php

namespace App\Exports;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AdminsExport implements FromView
{
    public function view(): View
    {
        return view('back.exports.admins', [
            'admins' => Admin::where('level', '!=', 'creator')->get()
        ]);
    }
}
