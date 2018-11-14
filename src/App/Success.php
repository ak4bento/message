<?php
namespace Akill\Message\App;

class Success extends ResultMessage {

	public function __construct($code){
		$this->code = $code;
		$this->getMessage('Success');
	}
}