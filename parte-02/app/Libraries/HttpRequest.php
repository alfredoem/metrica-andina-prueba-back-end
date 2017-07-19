<?php

namespace App\Libraries;

class HttpRequest
{
    protected $host = '';
    protected $endpoint = '';

    public $url = '';
    public $errno = '';
    public $error = '';
    public $http_status = 0;
    public $response;
    public $responseRaw = '';

    public function __construct($host, $endpoint = '')
    {
        $this->host = $host;
        $this->endpoint = $endpoint;
    }

    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
    }

    public function get($parameters = array())
    {
        $this->url = $this->host . '/' . $this->endpoint . '?' . http_build_query($parameters);
        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => $this->url
        ]);

        $this->responseRaw = curl_exec($ch);

        if (is_null($this->responseRaw) === false) {
            $this->response = [
                'data' => json_decode($this->responseRaw)
            ];
        }

        $this->errno = curl_errno($ch);
        $this->error = curl_error($ch);
        $this->http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        return $this;
    }
}