<?php

namespace Wework;

use App;
use Media;
use Department;
use Member;
use Menu;
use Message;
use Js;

/**
 * 所有请求的入口
 *
 * @author nobody1986
 */
class Application {

    /**
     * @access protected
     */
    protected $_accessToken;
    protected $_opinions;
    protected $_bussinesses;
    protected $_bussinessInstances;

    public function __construct(Client\AccessToken $accessToken) {
        $this->_accessToken = $accessToken;
        $this->_bussinesses = [
            'app' => 'App',
            'media' => 'Media',
            'member' => 'Member',
            'menu' => 'Menu',
            'message' => 'Message',
            'department' => 'Department',
            'js' => 'Js',
        ];
        $this->_bussinessInstances = [];

    }
    
    public function __get($name){
        if(isset($this->_bussinesses[$name])){
            if(empty($this->_bussinessInstances[$name])){
                $this->_bussinessInstances[$name] = new $this->_bussinesses[$name]($this->_accessToken);
            }
            return $this->_bussinessInstances[$name];
        }else{
            //todo 
        }
    }
    
    
    

}
