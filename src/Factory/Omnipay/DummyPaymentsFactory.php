<?php
declare(strict_types=1);

namespace Xaddax\Factory\Omnipay;

use Omnipay\Dummy\Gateway;
use Omnipay\Omnipay;

final class DummyPaymentsFactory
{
    public function __invoke(array $config): Gateway
    {

        /** @var Gateway $gateway */
        $gateway = Omnipay::create('Dummy');
        $gateway->initialize(array(
               'testMode' => true,
               'amount' => 0  // dummy gateway has mandatory amount parameter.
           ));

        return $gateway;
    }
}