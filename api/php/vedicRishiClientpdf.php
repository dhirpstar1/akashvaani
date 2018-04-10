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
		$this->userId = ($uid) ? $uid : '600204';
        $this->apiKey = ($key) ? $key : 'c0f09edcfa187c6ddd0677b1a8074eb1';	
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


  private function packageHoroData($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone)
    {
        return array(
            'day' => $date,
            'month' => $month,
            'year' => $year,
            'hour' => $hour,
            'min' => $minute,
            'lat' => $latitude,
            'lon' => $longitude,
            'tzone' => $timezone,
            'name' => 'chandan'
        );
    }

    private function packageNumeroData($date, $month, $year, $name)
    {
        return array(
            'day' => $date,
            'month' => $month,
            'year' => $year,
            'name' => $name
        );
    }

    private function packageMatchMakingData($maleBirthData, $femaleBirthData)
    {
        $mData = array(
            'm_day' => $maleBirthData['date'],
            'm_month' => $maleBirthData['month'],
            'm_year' => $maleBirthData['year'],
            'm_hour' => $maleBirthData['hour'],
            'm_min' => $maleBirthData['minute'],
            'm_lat' => $maleBirthData['latitude'],
            'm_lon' => $maleBirthData['longitude'],
            'm_tzone' => $maleBirthData['timezone']
        );
		
        $fData = array(
            'f_day' => $femaleBirthData['date'],
            'f_month' => $femaleBirthData['month'],
            'f_year' => $femaleBirthData['year'],
            'f_hour' => $femaleBirthData['hour'],
            'f_min' => $femaleBirthData['minute'],
            'f_lat' => $femaleBirthData['latitude'],
            'f_lon' => $femaleBirthData['longitude'],
            'f_tzone' => $femaleBirthData['timezone']
        );

        return array_merge($mData, $fData);
    }

    private function dataSanityCheck($data)
    {

    }

    /**
     * @param $resourceName string apiName name of an api without any begining and end slashes (ex 'birth_details')
     * @param $date date
     * @param $month month
     * @param $year year
     * @param $hour hour
     * @param $minute minute
     * @param $latitude latitude
     * @param $longitude longitude
     * @param $timezone timezone
     * @return array response data decoded in PHP associative array format
     */
    public function astroCall($resourceName, $date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone)
    {

        $data = $this->packageHoroData($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
		
        $resData = $this->getCurlReponse($resourceName, $data);
        return $resData;

    }

    /**
     * @param $resourceName string apiName name of numerological api (numero_table and numero_report)
     * @param $date int date of birth
     * @param $month int month of birth
     * @param $year int year of birth
     * @param $name string name
     * @return array response data decoded in PHP associative array format
     */

    public function numeroCall($resourceName, $date, $month, $year, $name)
    {
        $data = $this->packageNumeroData($date, $month, $year, $name);
        $resData = $this->getCurlReponse($resourceName, $data);
        return $resData;
    }

    /**
     * @param $resourceName apiName name of an api along without any begining and end slashes (ex match_birth_details)
     * @param array $maleBirthData  array maleBirthdata associative array format
     * @param array $femaleBirthData array femaleBirthdata associative array format
     * @return array response data decoded in PHP associative array format
     */
    public function matchMakingCall($resourceName, array $maleBirthData, array $femaleBirthData)
    {
        //TODO:  needs to validate male and female birth data against expected keys
        //$this->dataSanityCheck($maleBirthData);
        //$this->dataSanityCheck($femaleBirthData);

        $data = $this->packageMatchMakingData($maleBirthData, $femaleBirthData);
        $response = $this->getCurlReponse($resourceName, $data);
        return $response;
    }
  private function getPdfCurlReponse($resource, array $data)
    {

        $serviceUrl = 'https://pdf.astrologyapi.com/v1/'.$resource;
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

 public function pdfCall($resourceName, $data)
    {
       return $this->getPdfCurlReponse($resourceName, $data);
    }


}