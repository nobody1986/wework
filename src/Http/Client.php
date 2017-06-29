<<<<<<< HEAD
<?php

namespace Wework\Http;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * http客户端
 *
 * @author nobody1986
 */
class Client {

    protected static $_httpClient;

    const GET = 1;
    const POST = 1;

    protected static function _getHttpClient() {
        if (!empty(self::$_httpClient)) {
            return self::$_httpClient;
        }
        self::$_httpClient = new \GuzzleHttp\Client();
        return self::$_httpClient;
    }

    protected static function _request($method, $url, $data = []) {
        switch ($method) {
            case self::GET:
                $client->request('GET',$url,$data);
                echo $res->getStatusCode();
                return  $res->getBody();
                break;
            case self::POST:
                $client->request('POST',$url,$data);
                echo $res->getStatusCode();
                return  $res->getBody();
                break;
            default:
                throw new \Wework\Exception\HttpException(\Wework\Exception\HttpException::ERR_WRONG_METHOD);
                break;
        }
    }

    public static function get($url, $data = []) {
        return self::_request(self::GET, $url, $data);
    }

    public static function post($url, $data = []) {
        return self::_request(self::POST, $url, $data);
    }

}
=======
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
>>>>>>> fb3ba8fa333103f1198dfc9cbc46fffe81b62df2
