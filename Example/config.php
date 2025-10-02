<?php

class cConfig {};

// Multichain-API
$cfg = new cConfig();
$cfg->rpcHost = '192.168.10.42';
$cfg->rpcPort = 7770;
$cfg->rpcUser = 'multichainrpc';
$cfg->rpcPass = '---ENTER---PASSPHRASE---HERE---';
$cfg->rpcPath = null; // e.g. when using a proxy
$cfg->connectTimeout = 3; // default: 5 [s]
$cfg->timeout = 10; // default: 30 [s]

// Used stream
$cfg->stream = 'playground';

?>