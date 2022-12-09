<?php
/**
 * Configuration file for kkiapay
 */
return [
    /**
     * Public key
     */
    "public"=>env("LARAKIAPAY_PUBLIC"),
    /**
     * Private api key
     */
    "private"=>env("LARAKIAPAY_PRIVATE"),
    /**
     * Secret api key
     */
    "secret"=>env("LARAKIAPAY_SECRET"),
    /**
     * Environment
     */
    "env"=>env("LARAKIAPAY_ENV", "sandbox")
];