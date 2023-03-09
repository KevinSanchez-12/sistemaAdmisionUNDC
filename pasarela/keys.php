<?php
/**
 * Get the client
 */
require_once __DIR__ . '/vendor/autoload.php';

/**
 * Define configuration
 */

/* Username, password and endpoint used for server to server web-service calls */
Lyra\Client::setDefaultUsername("");
Lyra\Client::setDefaultPassword("");
Lyra\Client::setDefaultEndpoint("https://api.micuentaweb.pe");

/* publicKey and used by the javascript client */
Lyra\Client::setDefaultPublicKey("");

/* SHA256 key */
Lyra\Client::setDefaultSHA256Key("");