<?php 






include 'buy.php';
$data = array();
$data['currency']=414;
$data['action']=1;
$data['language']="ENG";     
$data['amount']="10";
$data['alias']="rose";
$data['track_id']="3434";
	  
$data_return = dopayment($data);

//print_r($data_return);
if($data_return['PaymentID']!='')
header("location:".$data_return['location']."?PaymentID=".$data_return['PaymentID']);
else
header("location:".$data_return['location']);









?>