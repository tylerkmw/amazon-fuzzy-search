<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../includes/config.inc.php';

class AmazonQuery {

    protected $accessKey;
    protected $secretKey;
    protected $sellerId;
    protected $signatureMethod;
    protected $signatureVersion;
    protected $timestamp;
    protected $version;
    protected $marketplaceId;

    // URL for the request:
    protected $url;

    public function __construct() {
        // Set the object's paramaters to those in the includes/config.inc.php file
        $this->secretKey = $GLOBALS['config']['secret_key'];
        $this->accessKey = $GLOBALS['config']['access_key'];
        $this->sellerId = $GLOBALS['config']['seller_id'];
        $this->signatureMethod = $GLOBALS['config']['signature_method'];
        $this->signatureVersion = $GLOBALS['config']['signature_version'];
        $this->marketplaceId = $GLOBALS['config']['marketplace_id'];
        $this->version = $GLOBALS['config']['version'];
    }

    // Manually set a different marketplace ID than the one defined in config
    public function setMarketplace($marketplace) {
        $this->marketplaceId = $marketplace;
    }

}

$query = new AmazonQuery;