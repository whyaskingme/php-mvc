<?php

namespace ngt\mvc;


class HomeController {
    function index(): void
    {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat Belajar PHP MVC dari Programmer Zaman Now"
        ];
        
        require_once __DIR__ . '/../view/home/index.php';
    }

    function hello():void
    {
        echo "HomeController.hello()";
    }

    function world(): void
    {
        echo "homeController.world()";
    }

    function about(): void
    {
        $request = [
            "username" => $_POST['username'],
            "password" => $_POST['password']
        ];

        $response = [
            "titel" => "login sukses"
        ];
    }

}