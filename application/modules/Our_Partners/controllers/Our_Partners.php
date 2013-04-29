<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Our_Partners extends MX_Controller {

	//LOCATION: april/

		 function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$data['module'] = 'Our_Partners';
		$data['view'] = 'vw-Our_Partners';
		$data['test'] = 'Hi to your, Mom';

		$this->load->module('template');
		$this->template->index($data);
		
	}

}
