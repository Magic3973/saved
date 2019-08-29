<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        

        return new Response(
            '<html><body>Coucou les amis</body></html>'
        );
    }
    /**
    * @Route("/about", name="à-propos")
    */
    public function about()
    {
        return new Response(
        '<html><body>Page about</body></html>'
        );
    }
    
}
