<?php

namespace Larakiapay\Tests\Feature;

use Larakiapay\Facades\Larakiapay as FacadesLarakiapay;
use Larakiapay\Larakiapay;
use Larakiapay\Tests\Unit\TestCase;
use Larakiapay\Utils\Payment;

class LarakiapayTest extends TestCase
{

    public function testLarakiapayInstance()
    {
        return $this->assertInstanceOf(Larakiapay::class, app('larakiapay'));
    }

    public function testLarakiapayFacade()
    {
        // larakiapay()->inSandbox(); can use helper for testing
        return $this->assertIsBool(FacadesLarakiapay::inSandbox());
    }

    public function testPayementFillable(){
        $p =  new Payment(
            (object) ['example'=>"Example"]
        ) ;
       return  $this->assertTrue($p->example == 'Example');
    }
}
