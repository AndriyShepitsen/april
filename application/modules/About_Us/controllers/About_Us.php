<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_Us extends MX_Controller {

	//LOCATION: april/About-Us

	 function __construct()
    {
        parent::__construct();
    }


	public function index()
	{
		$data['module'] = 'About_Us';
		$data['view'] = 'vw-About_Us';
		$data['test'] = 'Hi to your, Mom';

		$this->load->module('template');
		$this->template->index($data);
		
	}

}
