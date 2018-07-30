<?php
namespace App\Controller;
class HomeController extends AppController
{
    public function index()
    {
        $this->set('title', 'Welcome to cakephp');
        // $this->render('home');
    }
}
