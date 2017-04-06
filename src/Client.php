<?php

namespace Wework;

/**
 * 所有请求的入口
 *
 * @author nobody1986
 */
class Client {

    /**
     * @access protected
     */
    protected $_accessToken;

    public function __construct(Client\AccessToken $accessToken) {
        $this->_accessToken = $accessToken;
    }
    
    
    
    

}
