<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'eccube.purchase.flow.cart' shared service.

include_once $this->targetDirs[3].'/src/Eccube/Service/PurchaseFlow/PurchaseFlow.php';
include_once $this->targetDirs[3].'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Collection.php';
include_once $this->targetDirs[3].'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/ArrayCollection.php';

$this->services['eccube.purchase.flow.cart'] = $instance = new \Eccube\Service\PurchaseFlow\PurchaseFlow();

$instance->setFlowType('cart');
$instance->setItemValidators(${($_ = isset($this->services['eccube.purchase.flow.cart.item_validators']) ? $this->services['eccube.purchase.flow.cart.item_validators'] : $this->load('getEccube_Purchase_Flow_Cart_ItemValidatorsService.php')) && false ?: '_'});
$instance->setItemHolderValidators(${($_ = isset($this->services['eccube.purchase.flow.cart.holder_validators']) ? $this->services['eccube.purchase.flow.cart.holder_validators'] : $this->load('getEccube_Purchase_Flow_Cart_HolderValidatorsService.php')) && false ?: '_'});
$instance->setItemPreprocessors(${($_ = isset($this->services['eccube.purchase.flow.cart.item_preprocessors']) ? $this->services['eccube.purchase.flow.cart.item_preprocessors'] : ($this->services['eccube.purchase.flow.cart.item_preprocessors'] = new \Doctrine\Common\Collections\ArrayCollection())) && false ?: '_'});
$instance->setItemHolderPreprocessors(${($_ = isset($this->services['eccube.purchase.flow.cart.holder_preprocessors']) ? $this->services['eccube.purchase.flow.cart.holder_preprocessors'] : ($this->services['eccube.purchase.flow.cart.holder_preprocessors'] = new \Doctrine\Common\Collections\ArrayCollection())) && false ?: '_'});
$instance->setItemHolderPostValidators(${($_ = isset($this->services['eccube.purchase.flow.cart.holder_post_validators']) ? $this->services['eccube.purchase.flow.cart.holder_post_validators'] : $this->load('getEccube_Purchase_Flow_Cart_HolderPostValidatorsService.php')) && false ?: '_'});

return $instance;
