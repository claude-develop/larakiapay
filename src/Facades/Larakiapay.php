<?php
/**
 * This file is facde for kkiapay write by Claude Fassinou
 * 
 */
namespace Larakiapay\Facades;

use Illuminate\Support\Facades\Facade;
/**
 * @author Claude Fassinou <dev.claudy@gmail.com>
 * 
 * @license MIT
 * @method static \Larakiapay\Utils\Payment verifyTransaction($transactionId)
 * @method static \Larakiapay\Utils\PaymentForm create() initiate kkiapay form
 */
class Larakiapay extends Facade{
    
    protected static function getFacadeAccessor()
    {
        return 'larakiapay';
    }
}