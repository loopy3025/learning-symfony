<?php
// src/Controller/HelloController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function greeting()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body><h1>Hello, World!</h1><p>Here is your lucky number: '.$number.'</p></body></html>'
        );
    }
}