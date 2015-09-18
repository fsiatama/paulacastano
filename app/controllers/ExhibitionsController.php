<?php

class ExhibitionsController {

	public function indexAction($urlParams, $postParams) {
        
        $is_template = false;

        return new View('exhibitions', compact('is_template'));
    }
    
}
