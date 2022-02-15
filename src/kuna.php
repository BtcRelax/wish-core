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

}
?>
