<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/TemplateController.php';

return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->load('getTemplatingService.php')) && false ?: '_'});
