<?php
namespace BtcRelax;

//require '../vendor/autoload.php';
use GuzzleHttp\Client;

final class KunaAdapter {

    private $client;
    private $kunaid = null;
    private $error = null;
    private $server = null;

    function __construct( $server, $port = 80 ) {
      $this->server = $server;
      $this->client = new Client([ 'http_errors' => false, 'base_uri' => \sprintf("http://%s:%s/api/", $server, $port ), 'timeout'  => 2.0,]);
      try {
        $response = $this->client->request('GET', 'kuna/me');
        if ($response->getStatusCode() === 200 )
          {
            $body = $response->getBody();
            $data = \json_decode($body, true)['me'];
            $this->kunaid = $data['kunaid'];
          } else {
            $this->error = \sprintf("Error result from method me:%s", $response->getStatusCode() );
          }
        }
      catch (\Exception $ex) {
        $this->error = \sprintf("Error:%s", $ex->getMessage());
      } 
}


public function getKunaId()
{
    return $this->kunaid;
}

public function getError()
{
    return $this->error;
}

public function getServer()
{
    return $this->server;
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
