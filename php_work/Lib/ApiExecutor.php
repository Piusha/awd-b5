<?php
//sudo apt-get install php-curl
namespace Lib;
use Lib\ApiExecutor;

class ApiExecutor{

    public function execute($url,$method,$data = null){
        $curl = \curl_init();

        switch ($method)
        {
            case "POST":
                \curl_setopt($curl, CURLOPT_POST, 1);

                if ($data != null)
                    \curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                \curl_setopt($curl, CURLOPT_PUT, 1);
                break;
            default:
                if ($data)
                    $url = \sprintf("%s?%s", $url, \http_build_query($data));
        }

        // Optional Authentication:
        \curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        //curl_setopt($curl, CURLOPT_USERPWD, "username:password");

        \curl_setopt($curl, CURLOPT_URL, $url);
        \curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = \curl_exec($curl);

        \curl_close($curl);

        
        return json_decode($result, TRUE);
    }
}