<?php
namespace Wework\Client;
/*
 * 在企业微信里，AccessToken是有访问次数限制，需要缓存的，
    可以使用accessToken生成实例保存
 * 
 */

/**
 * 获取以及保存 AccessToken
 * 
 *
 * @author nobody1986
 * 
 */
class AccessToken {
    /**
     * 授权后获取的accesstoken
     * 
     */
    protected $_accessToken;
    protected $_corpid;
    protected $_secret;
    protected $_expire;
    const RET_SUCC = 0;
    const AUTH_URL = "https://qyapi.weixin.qq.com/cgi-bin/gettoken";
    public function __construct($corpid,$secret) {
        $this->_corpid = $corpid;
        $this->_secret = $secret;
    }
    
    protected function _auth(){
        $params = [
            'corpid' => $this->_corpid,
            'corpsecret' => $this->_secret
        ];
        $authInfo = Wework\Http\Client::getJson(self::AUTH_URL,$params);
        if(empty($authInfo) || $authInfo['errcode'] !=RET_SUCC){
            throw new Wework\Exception\BussinessException($authInfo['errcode'],$authInfo['errmsg']);
        }
        return $authInfo;
    }

    public function auth(){
        $authInfo = $this->_auth();
        $this->_accessToken = $authInfo['access_token'];
        $this->_expire = \time()+ $authInfo['expire_in'];
    }

    public function getToken(){
        return $_accessToken;
    }
}
