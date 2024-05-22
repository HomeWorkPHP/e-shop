<?php

namespace Modules\Admin\App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Admin\AuthService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class AuthController extends Controller
{
    private $authService; // chua ro bieen thuoc kieu nao

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login()
    {
        try {
            if(auth()->guard('admin')->check()) {
                return redirect()->route('admin.product.index');
            }
            return view('admin::pages.auth.login');
        }
        catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
    public function forgotPassword()
    {
        try {
            return view('admin::pages.auth.forgot_password');
        }
        catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function loginPost(Request $request)
    {
        try {
            if($this->authService->login($request->all())){
                return redirect()->route('admin.product.index');
            } else{
                $errors = new MessageBag([
                    'login_failed' => "Please"
                ]);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }
        catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
