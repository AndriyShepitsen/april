<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Foreclosure extends MX_Controller {

	//LOCATION: april/

	function __construct()
    {
        parent::__construct();
    }

	

		
	public function Foreclosure_Facts()
	{
		$data['module'] = 'Foreclosure';
		$data['view'] = 'vw-Forecloser_Facts';

		$data['test'] = 'Hi to your, Mom';

		$this->load->module('template');
		$this->template->index($data);
		
	}

	public function Foreclosure_Process()
	{
		$data['module'] = 'Foreclosure';
		$data['view'] = 'vw-Forecloser_Process';

		$data['test'] = 'Hi to your, Mom';

		$this->load->module('template');
		$this->template->index($data);
		
	}
}
