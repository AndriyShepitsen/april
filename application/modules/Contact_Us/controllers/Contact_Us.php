<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_Us extends MX_Controller {

	//LOCATION: april/

		 function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$data['module'] = 'Contact_Us';
		$data['view'] = 'vw-Contact_Us';
		$data['test'] = 'Hi to your, Mom';

		$this->load->module('template');
		$this->template->index($data);
		
	}

}
