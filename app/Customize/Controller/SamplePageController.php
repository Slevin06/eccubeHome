<?php

namespace Customize\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class SamplePageController
{
    /**
     * @Method("GET")
     * @Route("/sample/{id}")
     * @Template("Sample/index.twig")
     */
    public function testMethod($id)
    {
//        return ['name' => 'EC-CUBE'];
        dump($id);
        return new Response('Parameter is ' . $id);
    }
}