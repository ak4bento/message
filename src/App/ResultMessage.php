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
            'result' => $result,
            'message' => config('message.'.$this->code),
            'payload' => ''
        ], $this->code);
        return $this;
    }
}