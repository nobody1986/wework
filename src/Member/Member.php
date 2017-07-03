<?php
namespace Wework\Member;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Member
 *
 * @author Administrator
 */
class Member {
    const CREATE_URL = 'https://qyapi.weixin.qq.com/cgi-bin/user/create';
    const GET_URL = 'https://qyapi.weixin.qq.com/cgi-bin/user/get';
    const UPDATE_URL = 'https://qyapi.weixin.qq.com/cgi-bin/user/update';
    const DELETE_URL = 'https://qyapi.weixin.qq.com/cgi-bin/user/delete';
    const BATCHDELETE_URL = 'https://qyapi.weixin.qq.com/cgi-bin/user/batchdelete';
    const SIMPLELIST_URL = 'https://qyapi.weixin.qq.com/cgi-bin/user/simplelist';
    const LIST_URL = 'https://qyapi.weixin.qq.com/cgi-bin/user/list';
    const OPENID_TO_USERID_URL = 'https://qyapi.weixin.qq.com/cgi-bin/user/convert_to_userid';
    const USERID_TO_OPENID_URL = 'https://qyapi.weixin.qq.com/cgi-bin/user/convert_to_openid';
    const AUTHSUCC_URL='https://qyapi.weixin.qq.com/cgi-bin/user/authsucc';
}
