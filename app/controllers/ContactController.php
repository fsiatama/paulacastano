<?php

require PATH_MODELS.'Repositories/ContactRepo.php';

class ContactController {

	public function indexAction($urlParams, $postParams) {

		$is_template = false;

		return new View('contact', compact('is_template'));

	}

	public function formAction($urlParams, $postParams)
	{
		$contactRepo = new ContactRepo;

		return $contactRepo->formProcess($postParams);
	}

}
