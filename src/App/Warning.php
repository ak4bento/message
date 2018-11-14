<?php
namespace Akill\Message\App;

class Warning extends ResultMessage {

	public function __construct($code){
		$this->code = $code;
		$this->getMessage('Warning');
	}
}