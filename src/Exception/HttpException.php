<?php
namespace Wework\Exception;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HttpException
 *
 * @author nobody1986
 */
class HttpException extends Exception{
    const ERR_WRONG_METHOD=1;
    const ERR_NETWORK=2;
    const ERR_TIMEOUT=3;
}
