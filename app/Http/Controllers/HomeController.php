<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     /**METODOS DA MINHAS ROTAS */

    public function home5()
    {
        return view('Site.principal');
    }

    public function profile()
    {
        return view('Site.perfil');
    }

    public function turismo()
    {
        return view('Site.turismo');
    }

    public function hotelaria()
    {
        return view('Site.hotelaria');
    }

    public function galeria()
    {
        return view('Site.galeria');
    }

    public function permissao()
    {
        return view('Site.permissao');
    }

    public function sms_entrada()
    {
        return view('Site.sms_entrada');
    }

    public function sms_nova()
    {
        return view('Site.sms_nova');
    }

    public function sms_ler()
    {
        return view('Site.sms_ler');
    }

    public function cadastro()
    {
        return view('Site.cadastro');
    }


    public function login()
    {
        return view('Site.logar');
    }
}
