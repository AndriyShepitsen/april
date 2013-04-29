<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FAQ extends MX_Controller {

	//LOCATION: april/

	function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$data['module'] = 'FAQ';
		$data['view'] = 'vw-FAQ';
		$data['test'] = 'Hi to your, Mom';

		$this->load->module('template');
		$this->template->index($data);
		
	}

}
