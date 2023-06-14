<?php

class Pages extends Controller
{

    public function index()
    {
        $data = [
             'tituloPagina' => 'Pagina Inicial'
        ];
        $this->view('pages/home', $data);
    }

    public function info(){
        $data =[
            'tituloPagina' => APP_NOME
        ];
        $this->view('pages/info', $data);
    }

    
}