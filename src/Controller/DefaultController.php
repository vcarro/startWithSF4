<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function index()
    {
        return new Response('
            <html>
                <body>
                    <h1>First controller with symfony 4</h1>
                </body>
            </html>
        ');
    }
}
