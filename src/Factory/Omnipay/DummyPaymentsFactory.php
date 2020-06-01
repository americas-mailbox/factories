<?php
declare(strict_types=1);

namespace Xaddax\Factory\Omnipay;

use Omnipay\Dummy\Gateway;
use Omnipay\Omnipay;

final class DummyPaymentsFactory
{
    public function __invoke(array $config): Gateway
    {
        $username = getenv('OMNIPAY_USERNAME');
        $password = getenv('OMNIPAY_PASSWORD');

        /** @var Gateway $gateway */
        $gateway = Omnipay::create('Dummy');
        $gateway
            ->setPassword($password)
            ->setUsername($username);

        return $gateway;
    }
}