<?php

namespace app\controllers;
use li3_bank\models\accounts;

class BankTestController extends \lithium\action\Controller {

	public function index() {
		var_dump('hello!');
                $result = Accounts::find('all');
                var_dump($result);
	}

}
?>