<?php
$access_token = 'b+/rHcPbqhi0nobGrSc2GFwJwjiDkT75ypwUeZqVmnlMAo5BB3TckEiNuESWAjIcr+j4s7sGoL/6SLW8F7WTZ6URQicyQ4LEzfOOy9OFNLvhUDOof2YjCIHREOn5qsnT7tSnPRuhMxt761gn+rjKgQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
