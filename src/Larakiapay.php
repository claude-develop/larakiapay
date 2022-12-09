<?php

namespace Larakiapay;

use Kkiapay\Kkiapay;
use Larakiapay\Utils\Payment;
use Larakiapay\Utils\PaymentForm;

class Larakiapay extends Kkiapay
{
    protected $env = 'sandbox';

    public function __construct(
        $public_key,
        $private_key,
        $secret = null,
        $sandbox = false
    ) {
        $this->env = $sandbox;
        parent::__construct($public_key, $private_key, $secret, $sandbox);
    }

    public function inSandbox()
    {
        return $this->env == 'sandbox';
    }

    public function verifyTransaction($transactionId)
    {
        return new Payment(parent::verifyTransaction($transactionId));
    }
    /**
     * Create kkiapay form
     *
     * @return PaymentForm
     */
    public function create()
    {
        return (new PaymentForm())
            ->publicKey(
                $this->getPublicKey()
            );
    }
}
