<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='principal';
        echo view('front/header',$data);
        echo view('front/navbar');
        echo view('front/principal');
        echo view('front/footer');
    }

    public function registro(){
        $data['titulo']='registrarse';
        echo view('front/header',$data);
        echo view('front/navbar');
        echo view('front/register');
        echo view('front/footer');
    }

    public function logearse(){
        $data['titulo']='logearse';
        echo view('front/header',$data);
        echo view('front/navbar');
        echo view('front/login');
        echo view('front/footer');
    }

}
