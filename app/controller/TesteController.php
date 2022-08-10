<?php

namespace Alerr\MiniFramework\controller;

use Alerr\MiniFramework\core\Controller;

class TesteController extends Controller
{
    public function index(){
        $this->load('home/main', [
            'nome' => 'alerrandro'
        ]);
    }
}