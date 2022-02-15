<?php
namespace BtcRelax;

use GuzzleHttp\Client;

final class KunaAdapter {

    private $client;

    function __construct( $server, $port = 80 ) {
      $this->client = new Client([ 'base_uri' => \sprintf("http://%s:%s/api/", $server, $port ), 'timeout'  => 2.0,]);
      $response = $this->client->request('GET', 'kuna/me');
      if ($response->getStatusCode() === 200 )
        {

        } else {
          throw new \Exception("Error init kuna adapter");
        };
      }

    
    // Check are kunacode is active,
    // if so, return amount of money
    function checkKunacode($kunacode) {

    }

    // Activate kunacode. Return amount of money in success
    function activateKunacode($kunacode) {

    }

    // Find with regexp if input data have kunacode's inside?
    // If exists, return array of founded codes
    function isKunaCodeExists($rawinput) {

    }
}
