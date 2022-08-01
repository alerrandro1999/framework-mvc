<?php

$this->get('/', function(){
    echo 'estou na home';
});

$this->get('/home/', function(){
    echo 'estou na home';
});


$this->get('/about/test', function(){
    echo 'estou na about test';
});

