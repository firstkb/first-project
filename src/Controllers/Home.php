<?php
namespace App\controllers;

use Firstkb\FrameworkBundle\Controller\AbstractController;

class Home extends AbstractController
{

    /**
     * @Route(path="/", methods="GET", name="home")
     */
    public function home()
    {
       return $this->render('base');
    }

    public function pageNotFound()
    {
        return $this->render('404');
    }

}