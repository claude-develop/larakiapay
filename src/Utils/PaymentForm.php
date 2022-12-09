<?php

namespace Larakiapay\Utils;

class PaymentForm
{
    private $src = "https://cdn.kkiapay.me/k.js";
    protected $amount = 0;

    protected $callback = '';

    protected $data = "";

    protected $url ="";

    protected $position = "right";

    protected $theme = "green";

    protected $sandbox = 'true';

    protected $key = "";

    protected $paymentmethod = "";

    protected $phone = "";

    /**
     * Amount
     *
     * @param integer $amount
     * @return $this
     */
    public function amount(int $amount)
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Callback url
     *
     * @param string $callback
     * @return $this
     */
    public function callback(string $callback)
    {
        $this->callback = $callback;
        return $this;
    }
    /**
     * Additional data
     *
     * @param array $data
     * @return $this
     */
    public function data(array $data)
    {
        $this->data  = json_encode($data);
        return $this;
    }

    /**
     * 
     * @param string $logo_src
     * @return $this
     */
    public function logo(string $logo_src)
    {
        $this->url = $logo_src;
        return $this;
    }

    /**
     * Kkiapay box payment position
     *
     * @param string $position
     * @return $this
     */
    public function position(string $position)
    {
        $this->position = $position;
        return $this;
    }
    /**
     *
     * @param string $theme
     * @return $this
     */
    public function theme(string $theme)
    {
        $this->theme = $theme;

        return $this;
    }
    /**
     *
     * @param boolean $sandbox
     * @return $this
     */
    public function sandbox(bool $sandbox)
    {
        $this->sandbox = (string) $sandbox;

        return $this;
    }
    /**
     *
     * @param string $key
     * @return $this
     */
    public function publicKey(string $key)
    {
        $this->key = $key;

        return  $this;
    }

    public function toString()
    {
        $attrs = collect(get_object_vars($this));
        $attrs = $attrs->map(function ($v, $attr) {
            return $this->{$attr};
        })->map(function ($v, $attr) {
            return sprintf("%s='%s'", $attr, $v);
        });
        $arrays = $attrs->toArray();
        return sprintf("<script %s></script>", implode(" ", $arrays));
    }

    /**
     * 
     * @param string $method
     * $this
     */
    public function method(string $method)
    {
        $this->paymentmethod = $method;

        return $this;
    }
    /**
     * 
     * @param string $phone
     * @return $this
     */
    public function phone(string $phone)
    {
        $this->phone = $phone;

        return $this;
    }
    /**
     * 
     * @param string $name
     * @return $this
     */
    public function name(string $name)
    {
        $this->name = $name;

        return $this;
    }
    public function __toString()
    {
        return $this->toString();
    }
}
