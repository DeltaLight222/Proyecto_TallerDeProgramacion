<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        
        echo view('front/header');
        echo view('front/menu');
        echo view('front/principal');
        echo view('front/footer');
    }

  
    public function quienessomos()
    {
        
        echo view('front/header');
        echo view('front/menu');
        echo view('front/quienessomos');
        echo view('front/footer');
    }
    public function contacto()
    {
        
        echo view('front/header');
        echo view('front/menu');
        echo view('front/contacto');
        echo view('front/footer');
    }

    public function terminos()
    {
        
        echo view('front/header');
        echo view('front/menu');
        echo view('front/terminos');
        echo view('front/footer');
    }
    public function comercializacion()
    {
        
        echo view('front/header');
        echo view('front/menu');
        echo view('front/comercializacion');
        echo view('front/footer');
    }
    public function productos()
    {
        
        echo view('front/header');
        echo view('front/menu');
        echo view('front/productos');
        echo view('front/footer');
    }
    public function registrarse()
    {
        
        echo view('front/header');
        echo view('front/menu');
        echo view('back/registrarse');
        echo view('front/footer');
    }
    public function sesion()
    {
        
        echo view('front/header');
        echo view('front/menu');
        echo view('front/sesion');
        echo view('front/footer');
    }
}