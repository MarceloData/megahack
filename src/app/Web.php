<?php

/**
 * 
 */

namespace src\app;

use League\Plates\Engine;

/**
 * Undocumented class
 */
class Web
{
    /**
     * Undocumented function
     */
    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../../themes", "php");
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function home(): void
    {
        echo $this->view->render("home", [
            "title" => "Home | ". SITE,
        ]);
    }

    public function admin(): void 
    {
        echo $this->view->render("admin", [
            "title"=> "Admin | ". SITE,
        ]);
    }

    public function novousuario(): void 
    {
        echo $this->view->render("novousuario", [
            "title"=> "NovoUsuario | ". SITE,
        ]);
    }

    public function novolojista(): void 
    {
        echo $this->view->render("novolojista", [
            "title"=> "Novolojista | ". SITE,
        ]);
    }
    
    public function usuarios(): void 
    {
        echo $this->view->render("usuarios", [
            "title"=> "Usuarios | ". SITE,
        ]);
    }

    public function formseguranca(): void
    {
        echo $this->view->render("formseguranca", [
            "title"=> "Formulário de Segurança | ". SITE,
        ]);
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function contato(): void 
    {
        echo $this->view->render("contato", [
            "title" => "Contato | ". SITE,
        ]);
    }

    /**
     * Undocumented function
     *
     * @param array $data
     * @return void
     */
    public function error(array $data): void 
    {
        echo $this->view->render("error", [
            "title" => "Error {$data['errcode']} | ". SITE,
            "erro" => $data["errcode"]
        ]);
    }
}

