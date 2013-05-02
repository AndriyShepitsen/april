	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Information_Buyers extends MX_Controller {

	//LOCATION: april/

	function __construct()
    {
    parent::__construct();
    }

	
	public function Short_Sale_Buyer_Adviser()
	{
		$data['module'] = 'Information_Buyers';
		$data['view'] = 'vw-Short_Sale_General';

		$data['test'] = 'Hi to your, Mom';

		$this->load->module('template');
		$this->template->index($data);
		
	}


	public function Closing()
	{
		$data['module'] = 'Information_Buyers';
		$data['view'] = 'vw-Closing';
		$data['test'] = 'Hi to your, Mom';

		$this->load->module('template');
		$this->template->index($data);
		
	}


		public function Finance_Mortgage()
	{
		$data['module'] = 'Information_Buyers';
		$data['view'] = 'vw-Finance_Mortgage';
		$data['test'] = 'Hi to your, Mom';
		$this->load->module('template');
		$this->template->index($data);
		
	}

		public function Things_To_Remember()
	{
		$data['module'] = 'Information_Buyers';
		$data['view'] = 'vw-Things_To_Remember';
		$data['test'] = 'Hi to your, Mom';

		$this->load->module('template');
		$this->template->index($data);
		
	}

		public function House_Hunting()
	{
		$data['module'] = 'Information_Buyers';
		$data['view'] = 'vw-House_Hunting';
		$data['test'] = 'Hi to your, Mom';

		$this->load->module('template');
		$this->template->index($data);
		
	}


}
