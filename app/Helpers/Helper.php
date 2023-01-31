<?php

namespace App\Helpers;

class Helper
{
    public static function create()
    {
       $token = "JnPYbs6FkC1tiVLREAABoAAAkgA";
       
       $url = "http://centrodainteligencia.com.br/api/index.php/create";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, 1);


        $headers = array(
            "X-Custom-Header: header-value",
            "Content-Type: application/json",
            "token: $token"
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_HEADER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        echo $response;
    }

    public static function connect()
    {
        $token = "JnPYbs6FkC1tiVLREAABoAAAkgA";
       
       $url = "http://centrodainteligencia.com.br/api/index.php/connect";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, 1);


        $headers = array(
            "X-Custom-Header: header-value",
            "Content-Type: application/json",
            "token: $token"
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_HEADER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        echo $response;
    }

    public static function sendText(int $number, string $text)
    {
  
        if(empty($number) or empty($text)){
            $alert = 'Parametro Number e Text obrigatorio';
            echo json_encode($alert);
            exit; 
        }

        $token = "JnPYbs6FkC1tiVLREAABoAAAkgA";
       
        $url = "http://centrodainteligencia.com.br/api/index.php/sendText";
 
        $data = array(
            'number' => "$number",
            'text' => "$text"
        );
        
        $corpo = json_encode($data);

         $curl = curl_init($url);
         curl_setopt($curl, CURLOPT_URL, $url);
         curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($curl, CURLOPT_POST, 1);
         curl_setopt($curl, CURLOPT_POSTFIELDS, $corpo);
         curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));


 
 
         $headers = array(
             "X-Custom-Header: header-value",
             "Content-Type: application/json",
             "token: $token"
         );
         curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
         curl_setopt($curl, CURLOPT_HEADER, true);
         $response = curl_exec($curl);
         curl_close($curl);
         echo $response;


    }
}
