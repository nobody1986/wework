<?php
namespace Wework\Department;

/*
* To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
* Description of Department
 *
 * @author Administrator
 */
class Department {
	protected $_accessToken;
	const CREATE_URL = "https://qyapi.weixin.qq.com/cgi-bin/department/create";
	const UPDATE_URL='https://qyapi.weixin.qq.com/cgi-bin/department/update';
	const DELETE_URL='https://qyapi.weixin.qq.com/cgi-bin/department/delete';
	const LIST_URL = 'https://qyapi.weixin.qq.com/cgi-bin/department/list';
	function __construct($accessToken){
		$this->_accessToken = $accessToken;
	}
	
	
	/**
	{
		"name": "广州研发中心",
		    "parentid": 1,
		    "order": 1,//
		"id": 2//
	}
	*/
	public function create($info){
		$params = [
		            'name'=>$info['name'],
		            'parentid'=>$info['parentid'],
		        ];
		if(!empty($info['order'])){
			$params['order'] = $info['order'];
		}
		if(!empty($info['id'])){
			$params['id'] = $info['id'];
		}
		return Wework\Http\Client::postJson(self::CREATE_URL.'?access_token='.$this->_accessToken->getToken(),$params);
	}
	public function update($id,$info){
		$params = [
		            'id' => $id
		        ];
		if(!empty($info['order'])){
			$params['order'] = $info['order'];
		}
		if(!empty($info['id'])){
			$params['id'] = $info['id'];
		}
		if(!empty($info['name'])){
			$params['name'] = $info['name'];
		}
		return Wework\Http\Client::postJson(self::UPDATE_URL.'?access_token='.$this->_accessToken->getToken(),$params);
	}
	public function delete($id){
		return Wework\Http\Client::getJson(self::DELETE_URL.'?access_token='.$this->_accessToken->getToken()."&id=".$id);
	}
	public function list($id,$info){
		return Wework\Http\Client::getJson(self::LIST_URL.'?access_token='.$this->_accessToken->getToken()."&id=".$id);
	}
}
