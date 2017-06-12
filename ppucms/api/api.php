<?php
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, 'http://www.0335haibo.com/api.php?'.$_SERVER["QUERY_STRING"]); 
curl_setopt($curl, CURLOPT_REFERER, 'http://www.0335haibo.com/vip.php'); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec($curl); 
$result=str_replace('﻿<?xml version="1.0" encoding="utf-8"?>','<?xml version="1.0" encoding="utf-8"?>',$result);
curl_close($curl); 
echo $result;
?>
