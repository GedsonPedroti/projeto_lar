<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    /***
     * Login
     */
    public function login()
    {
        return view('auth/login_frm');
    }
    public function login_submit()
    {
        echo "Login Submit";
    }
    /***
     * Nova Conta
     */
    public function new_account()
    {
        return view('auth/new_account_frm');
    }
    public function new_account_submit()
    {
        echo "Nova Conta Submit";
    }
    /***
     * Esqueci a Senha
     */
    public function forgot_password()
    {
        return view('auth/forgot_password_frm');
    }
    public function forgot_password_submit()
    {
        echo "Esqueci a Senha Submit";
    }
}
