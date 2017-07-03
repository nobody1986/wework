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
    const POST = 2;

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

    public static function getRaw($url, $data = []) {
        return self::_request(self::GET, $url, $data);
    }

    public static function postRaw($url, $data = []) {
        return self::_request(self::POST, $url, $data);
    }

    public static function getJson($url, $data = []){
        $ret = self::getRaw($url,$data);
        return \json_decode($ret,true);
    }

    public static function postJson($url, $data = []){
        $ret = self::postRaw($url,$data);
        return \json_decode($ret,true);
    }

}
