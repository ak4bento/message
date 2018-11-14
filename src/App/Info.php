<?php
namespace Akill\Message\App;

class Info extends ResultMessage {

	public function __construct($code){
		$this->code = $code;
		$this->getMessage('Info');
	}
}