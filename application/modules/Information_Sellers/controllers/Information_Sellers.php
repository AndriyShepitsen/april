<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Information_Sellers extends MX_Controller {

	//LOCATION: april/

	function __construct()
    {
        parent::__construct();
    }
	
	public function What_is_Shortsale()
	{
		$data['module'] = 'Information_Sellers';
		$data['view'] = 'vw-What_is_Shortsale';
		$data['test'] = 'Hi to your, Mom';

		$this->load->module('template');
		$this->template->index($data);
		
	}

		public function Short_Sale_Process()
	{
		$data['module'] = 'Information_Sellers';
		$data['view'] = 'vw-Short_Sale_Process';
		$data['test'] = 'Hi to your, Mom';

		$this->load->module('template');
		$this->template->index($data);
		
	}

	public function Short_Sale_Terms()
	{
		$data['module'] = 'Information_Sellers';
		$data['view'] = 'vw-Short_Sale_Terms';
		$data['test'] = 'Hi to your, Mom';

		$this->load->module('template');
		$this->template->index($data);
		
	}


	public function Short_Sale_vs_Foreclosure()
	{
		$data['module'] = 'Information_Sellers';
		$data['view'] = 'vw-Short_Sale_vs_Forecloser';
		$data['test'] = 'Hi to your, Mom';

		$this->load->module('template');
		$this->template->index($data);
		
	}

			public function Seller_Benefits()
	{
		$data['module'] = 'Information_Sellers';
		$data['view'] = 'vw-Seller_Benefits';
		$data['test'] = 'Hi to your, Mom';

		$this->load->module('template');
		$this->template->index($data);
		
	}

			public function Choosing_Right_Realtor()
	{
		$data['module'] = 'Information_Sellers';
		$data['view'] = 'vw-Choosing_Right_Rieltor';
		$data['test'] = 'Hi to your, Mom';

		$this->load->module('template');
		$this->template->index($data);
		
	}

			public function Deed_in_Lieu()
	{
		$data['module'] = 'Information_Sellers';
		$data['view'] = 'vw-Deed_in_Lieu';
		$data['test'] = 'Hi to your, Mom';

		$this->load->module('template');
		$this->template->index($data);
		
	}

			public function Debt_Relief_Act_2007()
	{
		$data['module'] = 'Information_Sellers';
		$data['view'] = 'vw-Debt_Relief_Act_2007';
		$data['test'] = 'Hi to your, Mom';

		$this->load->module('template');
		$this->template->index($data);
		
	}
}
