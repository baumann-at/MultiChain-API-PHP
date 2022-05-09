<?php

class cConfig{};

$cfg = new cConfig();
$cfg->rpcHost = '192.168.10.42';
$cfg->rpcPort = 7770;
$cfg->rpcUser = 'multichainrpc';
$cfg->rpcPass = '---ENTER---PASSPHRASE---HERE---';
$cfg->rpcPath = null; // e.g. when using a proxy
$cfg->timeout = 5; // default: 10 [s]

$cfg->stream = 'playground';

?>