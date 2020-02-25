<?php


namespace App\Data\Resources\External\TMDb;

class Call
{
    private $curl;

    public function __construct($url)
    {
        $this->curl = curl_init($url);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
    }

    public function __destruct()
    {
        curl_close($this->curl);
    }

    public static function call(string $url)
    {
        $call = new Call($url);
        $result = curl_exec($call->curl);

        return json_decode($result);
    }
}
