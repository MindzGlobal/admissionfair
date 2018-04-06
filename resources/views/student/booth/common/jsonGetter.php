<?php
    $dns=array("8.8.8.8","8.8.4.4");
    var_export (dns_get_record ( "host.name.tld" ,  DNS_ALL , $dns ));
    $data = file_get_contents('https://www.jobmindz.com/api/BigJobDay/company-name?CompanyName=');
    $data = json_decode($data,true);
    //var_dump($data);
    $data["all_Company"][0]["compName"];
    foreach($data["all_Company"] as $value)
    {
        //echo $value['compName'].'<br>';
        foreach($value as $k)
            echo $k.'<br>';
    }
?>