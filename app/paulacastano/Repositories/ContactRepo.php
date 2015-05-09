<?php

class ContactRepo {

	public function formProcess($params)
	{
		extract($params);
		
		if (
			empty($email) ||
			empty($message) ||
			empty($name)
		){
			$result = [
				'success' => false,
				'error'   => 'Incomplete data for this request.'
			];
			return $result;
		}
		
		$messageText = Inflector::cleanInputString($message);
		$name        = Inflector::cleanInputString($name);
		$email       = Inflector::cleanInputEmail($email);

		$arrEmail = [
			[ 'email' => 'contactenos@paulacastano.com', 'name' => 'Contactenos paulacastano.com' ],
			[ 'email' => 'fas0980@gmail.com', 'name' => 'Fabian Siatama' ],
		];

		$subject = 'Contactenos PaulaCastano.com';
		$message = file_get_contents(PATH_RAIZ.'lib/templates/contact.html');
		$message = str_replace('%name%', $name, $message);
		$message = str_replace('%email%', $email, $message);
		$message = str_replace('%message%', $messageText, $message);

		$result = Helpers::sendEmail($arrEmail, $message, $subject);
		if (!$result['success']) {
			return $result;
		}

		$result = [
			'success' => true,
			'url' => URL_RAIZ,
			'msg' => 'Gracias por comunicarte, pronto me pondré en contacto contigo'
		];

		return $result;

	}

}
