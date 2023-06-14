<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    public function index(): Response
    {
        return new Response("Hello Guys");
    }

    /**
     * @return Response
     */
    public function user(Request $request): Response
    {
        $age = $request->get('age', 0);
        return new Response("user age: $age");
    }

    public function test(): Response
    {
        return new Response("test page");
    }

    /**
     * @Route("/home", name="homepage")
     */
    public function home()
    {
        return new Response("home page");
    }

    public function mario()
    {
        return new Response("mario page");
    }

}