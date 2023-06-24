<?php
// PHP program to pop an alert
// message box on the screen
// 

class  myInputs {
	static $errors = true;

static function str($val) {
	if (!is_string($val)) {
		self::throwError('Invalid String', 902);
	}
	$val = trim(htmlspecialchars($val));
	return $val;
}
}
?>
