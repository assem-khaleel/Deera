<?php
function ios($devecd_id,$Message,$title)
{



    $ctx = stream_context_create();

    stream_context_set_option($ctx, 'ssl', 'local_cert', 'cofe-distri.pem');
    stream_context_set_option($ctx, 'ssl', 'passphrase', 1234);
//$message='2dad390b1e231370feb8e9d906cb92ff1217a488450e6be96c14f85f57279865';
    $title=$title;
    $message=$devecd_id;
    // Create the payload body
    $body['aps'] = array(
        'alert' => array('title'=>$title,'body' => $Message, 'Test' => 'Show'),
        'sound' => 'default'
    );

    // Encode the payload as JSON
    $payload = json_encode($body);

    // Open a connection to the APNS server
    $apns = stream_socket_client(
        'ssl://gateway.push.apple.com:2195', $err,
        $errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);

    if (!$apns)
    {
        echo "Failed to connect: $err $errstr" . PHP_EOL;
    }

    echo 'Connected to APNS' . PHP_EOL;

    $imsg = chr(0) . pack('n', 32) . pack('H*', $message) . pack('n', strlen($payload)) . $payload;

    // Send it to the server
    $res = fwrite($apns, $imsg, strlen($imsg));

    if (!$res)
    {
        echo 'Message not delivered' . PHP_EOL;
    }
    else
    {
        echo 'Message successfully delivered' . PHP_EOL;
    }
    fclose($apns);

}







ios('ded17cfca6bee47a9e318ab78aa1fed7bba9c9eaa41d7f5ffb76728f4a19ad18','Test','title');









?>













