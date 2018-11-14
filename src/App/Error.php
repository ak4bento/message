<?php
namespace Akill\Message\App;

class Error extends ResultMessage {

	public function __construct($code){
		$this->code = $code;
		$this->getMessage('Error');
	}
}