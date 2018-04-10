<?php
/**
 * Vedic Rishi Client for consuming Vedic Rishi Astro Web APIs
 * http://www.vedicrishiastro.com/astro-api/
 * Author: Chandan Tiwari
 * Date: 06/12/14
 * Time: 5:42 PM
 */

class VedicRishiClient
{
    private $userId = null;
    private $apiKey = null;
    private $apiEndPoint = "http://api.vedicrishiastro.com/v1";

    /**
     * @param $uid userId for Vedic Rishi Astro API
     * @param $key api key for Vedic Rishi Astro API access
     */
    public function __construct($uid, $key)
    {
        $this->userId = $uid;
        $this->apiKey = $key;
    }

    private function getCurlReponse($resource, array $data)
    {
        $serviceUrl = $this->apiEndPoint.$resource;
        $authData = $this->userId.":".$this->apiKey;

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $serviceUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        $header[] = 'Authorization: Basic '. base64_encode($authData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    public function call($resourceName, $data)
    {
        $resData = $this->getCurlReponse($resourceName, $data);
        return $resData;
    }

}