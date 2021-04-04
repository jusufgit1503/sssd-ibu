<?php

/*curl -X "POST" "https://rest.nexmo.com/sms/json" \
  -d "from=Jusuf" \
  -d "text="https://github.com/jusufgit1503" \
  -d "to=38762407368" \
  -d "api_key=49420900" \
  -d "api_secret=ZMvQVBxtcc40CiKO"*/

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"https://rest.nexmo.com/sms/json");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
  "from=Jusuf&text=https://github.com/jusufgit1503&to=38762407368&api_key=49420900&api_secret=ZMvQVBxtcc40CiKO");

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS,
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close ($ch);

?>
