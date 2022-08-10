<?php

$this->get('/', function(){
    (new \Alerr\MiniFramework\controller\TesteController)->index();
});

$this->get('/home', function(){
    echo 'estou na home';
});


$this->get('/about/test', function(){
    echo 'estou na about test';
});

