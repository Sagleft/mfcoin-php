<?php
  require_once __DIR__ . '/../vendor/autoload.php';

  //for example
  $rpc_user = 'admin';
  $rpc_pass = 'passqt';

  $mfcoin = new MFCoin\Client($rpc_user, $rpc_pass);
  if($mfcoin->error) {
    exit('error: ' . $mfcoin->error);
  }

  $info = $mfcoin->getinfo();
  if($info == false) {
    exit('Something went wrong');
  }

  echo print_r($info);
