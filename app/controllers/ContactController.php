<?php

require PATH_MODELS.'Repositories/ContactRepo.php';

class ContactController {

	public function indexAction($urlParams, $postParams) {

	}

	public function formAction($urlParams, $postParams)
	{
		$contactRepo = new ContactRepo;

		return $contactRepo->formProcess($postParams);
	}

}
