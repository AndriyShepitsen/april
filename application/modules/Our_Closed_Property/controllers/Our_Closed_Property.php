<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Our_Closed_Property extends MX_Controller {

	//LOCATION: april/

		 function __construct()
    {
        parent::__construct();
    }

	public function index()
	{

		$data['module'] = 'Our_Closed_Property';
		$data['view'] = 'vw-Our_Closed_Property';
		$data['test'] = 'Hi to your, Mom';

		$this->load->module('template');
		$this->template->index($data);
		
	}

}
