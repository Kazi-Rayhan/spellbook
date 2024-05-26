<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ScreenLockController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function lock(Request $request)
    {

        session()->put('lock', true);
        session()->put('last_url', url()->previous());
        return redirect()->back();
    }

    public function unlock(Request $request)
    {
        if (Hash::check($request->password, auth()->user()->password)) {
            session()->forget('lock');
            return redirect(session('last_url') ?? auth()->user()->getDashboardUrl() ?? url('/'));
        };
        return redirect()->back();
    }

    public function lockScreen()
    {
        return view('auth.lockscreen');
    }
}
