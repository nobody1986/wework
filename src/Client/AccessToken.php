<?php
namespace Wework\Client;
/*
 * 在企业微信里，AccessToken是有访问次数限制，需要缓存的，所以可以使用accessToken生成实例
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
    public function __construct() {
     
    }
    
    public function auth(){}
}
