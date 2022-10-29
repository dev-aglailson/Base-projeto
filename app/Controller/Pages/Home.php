<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Home extends Page{

    /**
    * Método responsavel por retornar o conteudo(view) da página home
    * @return string
    */
    public static function getHome(){
        //VIEW DA HOME
        $content =  View::render('pages/home',[
            'name'=>'Zé Aglailson',
            'description'=>'Projeto mvc',
            'site'=>'www.google.com'
        ]);

        //RETORNA A VIEW DA PAGE GENERICA
        return parent::getPage('Sitema - Home', $content);
    }

}