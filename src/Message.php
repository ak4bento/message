<?php
namespace Akill\Message;

use Akill\Message\App\Success;
use Akill\Message\App\Info;
use Akill\Message\App\Error;
use Akill\Message\App\Warning;

class Message {
    public static function success($code){
        return new Success($code);
    }

    public static function info($code){
        return new Info($code);   
    }

    public static function error($code){
        return new Error($code);
    }

    public static function warning($code){
        return new Warning($code);
    }
}