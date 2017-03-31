<?php
class token {
	public function __construct() {

	}

	public function make($name) {
		if(isset($_SESSION['token'][$name])) {
			$token = $_SESSION['token'][$name];
		}
		else {
			$token = md5(uniqid(rand(), true));
			$_SESSION['token'][$name] = $token;
		}

		return $token;
	}

	public function verify($name, $value) {
		if(isset($_SESSION['token'][$name])) {
			if($_SESSION['token'][$name] === $value) {
				return true;
			}
			else {
				return false;
			}
		}
		else {
			return false;
		}
	}
}
?>