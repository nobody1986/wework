<?php
namespace Wework\Http\Client;

class Client{
    protected static $_httpClient;
    protected static function _getHttpClient(){
        if(!empty($this->_httpClient)){
            return $this->_httpClient;
        }
        $this->_httpClient = new \GuzzleHttp\Client();
        return $this->_httpClient;
    }
    protected static function _request($url,$method){

    }
    public static get(){}
    public static post(){}
}
