<?php
namespace Larakiapay\Utils;

use Carbon\Carbon;
use stdClass;
class Payment extends stdClass{
    /**
     * Payement status
     *
     * @var string
     */
    public $status ;

    /**
     * The amount
     *
     * @var float
     */
    public $amount ;

    /**
     * Client
     * 
     * @var \Larakiapay\Utils\Client
     */
    public $client ;

    /**
     * Performed at
     *
     * @var string
     */
    public $performed_at ;

    /**
     * @var string
     */
    public $received_at ;

    /**
     * Payement source
     *
     * @var string
     */
    public $source = '';

    public $transactionId = '';

    public function __construct($data)
    {
        jsonTo($data, $this);
    }
    /**
     * Check if payment is proced
     *
     * @return boolean
     */
    public function isPaid(){
        return $this->status == "SUCCESS";
    }

    public function getClient(){
        return new Client($this->client) ;
    }

    /**
     * Performed date
     *
     * @return Carbon
     */
    public function paidAt(){
        return new Carbon($this->performed_at);
    }
    /**
     * Received date
     *
     * @return Carbon
     */
    public function receivedAt(){
        return new Carbon($this->received_at);
    }

    public function isMomo(){
        return $this->source =='MOBILE_MONEY'; 
    }

    public function getTransaction(){
        return $this->transactionId ;
    }
}