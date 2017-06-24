<?php
/**
 * @copyright Copyright (c) 2017 Vladimir Tarkhanov.
 * @author    Vladimir Tarkhanov <shu-de@kekx.ru>
 * Date: 24.06.2017
 * Time: 21:39
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    /**
     * @return Response
     * @Route("/test", name="test")
     */
    public function test()
    {
        return new Response('It works!');
    }
}