<?php

namespace Akill\Message\App;

abstract class ResultMessage {

    protected $code;
    protected $message;
    protected $bool;

    public function get(){
        return $this->message;
    }

    public function getMessage($result){
        $this->message = response()->json([
            'code' => $this->code,
            'result' => $result,
            'message' => config('message.'.$this->code)
        ], $this->code);
        return $this;
    }

    public function payload($result){
        $this->message = response()->json([
            'code' => $this->code,
            'result' => $this->getBool($this->code),
            'message' => config('message.'.$this->code),
            'payload' => $result
        ], $this->code);
        return $this;
    }

    public function getResult($value){
        if ($value < 200) {
            return 100;
        }
        if ($value < 300) {
            return 200;
        }
        if ($value < 400) {
            return 300;
        }
        if ($value < 500) {
            return 400;
        }
        if ($value >= 500) {
            return 500;
        }
    }

    public function getBool($value){
        switch($value){
            case($this->getResult($value)):
                return "Informational";
            case($this->getResult($value)):
                return "Success";
            case($this->getResult($value)):
                return "Redirection";
            case($this->getResult($value)):
                return "Client Error";
            case($this->getResult($value)):
                return "Server Error";
        }
    }
}