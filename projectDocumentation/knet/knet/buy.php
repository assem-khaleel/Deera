<!--
This merchant demo is published by Knet as a demonstration of the process
of Online Knet Payment Gateway Transactions. Note however that this is not
a fully running demo and there are parts that the merchant has to build him self.
Also, this demo is not tested for security or stability, and Knet does not intend to recommend
this for production purposes. Merchants should build their own web pages based on their needs. 
This demo is just a guide as to what the whole process will look like.
/*Developed by saqib 18-08-2009*/
-->
<?php 



ini_set("display_errors", "1");
error_reporting(E_ALL);

  require_once "com/aciworldwide/commerce/gateway/plugins/e24PaymentPipe.inc.php" ;
   function dopayment($data){


$carancy=$data['currency'];
$Action=$data['action'];
$language=$data['language'];    
$amount=$data['amount'];
$alias=$data['alias'];
$track_id=$data['track_id'];

$data1 = array();
   $Pipe = new e24PaymentPipe;
   $Pipe->setAction($Action);
   $Pipe->setCurrency($carancy);
   $Pipe->setLanguage($language); //change it to "ARA" for arabic language
   $Pipe->setResponseURL("http://localhost/knet/knet/response.php"); // set your respone page URL
   $Pipe->setErrorURL("http://localhost/knet/knet/error.php"); //set your error page URL
   $Pipe->setAmt($amount); //set the amount for the transaction
   //$Pipe->setResourcePath("/Applications/MAMP/htdocs/php-toolkit/resource/");
   $Pipe->setResourcePath("knet\\"); //change the path where your resource file is
   $Pipe->setAlias($alias); //set your alias name here
   $Pipe->setTrackId($track_id);//generate the random number here
 
   $Pipe->setUdf1("UDF 1"); //set User defined value
   $Pipe->setUdf2("UDF 2"); //set User defined value
   $Pipe->setUdf3("UDF 3"); //set User defined value
   $Pipe->setUdf4("UDF 4"); //set User defined value
   $Pipe->setUdf5("UDF 5"); //set User defined value
   
            //get results
      if($Pipe->performPaymentInitialization()!=$Pipe->SUCCESS){
            echo "Result=".$Pipe->SUCCESS;
            echo "<br>".$Pipe->getErrorMsg();
            echo "<br>".$Pipe->getDebugMsg();
          
            $date1['PaymentID'] = '';
            $date1['location'] = 'https://www.yourURL.com/error.php';
         //header("location: https://www.yourURL.com/error.php");
      }else{
         print_r($Pipe);
         $payID = $Pipe->getPaymentId();
         $payURL = $Pipe->getPaymentPage();
         $date1['PaymentID'] = $payID;
         $date1['location'] = $payURL;

        // header("location:".$payURL."?PaymentID=".$payID);
      }  
return $date1;
   }
  
?>