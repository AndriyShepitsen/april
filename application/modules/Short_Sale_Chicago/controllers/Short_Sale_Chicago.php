<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Short_Sale_Chicago extends MX_Controller {

	//LOCATION: april/

		 function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		
		$data['module'] = 'Short_Sale_Chicago';
		$data['view'] = 'vw-Short_Sale_Chicago';

		$data['test'] = 'Hi to your, Mom';

		$this->load->module('template');
		$this->template->index($data);
		
	}

}
