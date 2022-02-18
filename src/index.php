<?php
include_once  'kuna.php';

$servers = array('app.fastfen.me' => 80 , 'ubuntusrv.cryptopup.site' => 81,  'unixmedia.cryptopup.site' => 82);
$adapters = array();

foreach($servers as $server => $port) {
    $cur =     new BtcRelax\KunaAdapter($server, $port);
    if ($cur->getKunaId() !== null) {
        array_push($adapters,$cur);
    };
}

?>
