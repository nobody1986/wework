<?php
namespace Wework\Media;

/*
* To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
* Description of Media
 *
 * @author Administrator
 */
class Media {
	protected $_accessToken;
	const UPDATE_URL = "https://qyapi.weixin.qq.com/cgi-bin/media/upload";
	const GET_URL='https://qyapi.weixin.qq.com/cgi-bin/media/get';
	const TYPE_IMAGE = 'image';
	const TYPE_VOICE = 'voice';
	const TYPE_VIDEO = 'video';
	const TYPE_FILE = 'file';
	function __construct($accessToken){
		$this->_accessToken = $accessToken;
	}
	
	public function update($type,$mediaFile){
		$params = [
		            'media' => fopen($mediaFile,'r')
		        ];
		return Wework\Http\Client::postJson(
		            self::CREATE_URL.'?access_token='.$this->_accessToken->getToken().'&type='.$type,
		            $params);
	}
	public function get($mediaId,$callback){
		
	}
}
