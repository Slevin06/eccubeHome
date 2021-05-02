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
     * @Route("/sample")
     * @Template("Sample/index.twig")
     */
    public function testMethod()
    {
        return ['name' => 'EC-CUBE'];
    }

    /**
     * @Method("GET")
     * @Route("/sample/{id}")
     * @Template("Sample/showParameter.twig")
     */
    public function testMethodParameter($id)
    {
//        return ['name' => 'EC-CUBE'];
//        dump($id);
        return new Response('Parameter is ' . $id);
    }

    /**
     * @Method("GET")
     * @Route("/sample/{id}", name="sample_page")
     * @Template("Sample/showParameter.twig")
     */
    public function testShowMethodParameter($id)
    {
//        return ['name' => 'EC-CUBE'];
//        dump($id);
        return new Response('Parameter is ' . $id);
    }
}

