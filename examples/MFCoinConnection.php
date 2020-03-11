<?php
  require_once __DIR__ . '/../vendor/autoload.php';

  //for example
  $rpc_user = 'admin';
  $rpc_pass = 'passqt';
  $rpc_host = 'localhost';
  $rpc_port = 22825;

  $mfcoin = new MFCoin\Client($rpc_user, $rpc_pass, $rpc_host, $rpc_port);
  if($mfcoin->error) {
    exit('error: ' . $mfcoin->error);
  }

  $info = $mfcoin->getinfo();
  if($info == false) {
    exit('Something went wrong');
  }

  print_r($info);
