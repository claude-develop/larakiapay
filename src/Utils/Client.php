<?php
namespace Larakiapay\Utils;


use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;

class Client {
    use Notifiable ;
    public $fullname ;
    public $country;
    public $phone ;
    public $email;
    public $account;
    public $person = null;

    public function __construct($client)
    {
        jsonTo($client, $this);
    }

}