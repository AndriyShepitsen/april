<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_Us extends MX_Controller {

	//LOCATION: april/Contact-us 

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


	public function send_mail()
	{
	 $this->form_validation->set_rules('firstName', 'First Name', 'trim|required');
	 $this->form_validation->set_rules('lastName', 'Last Name', 'trim|required');
	 $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
	 $this->form_validation->set_rules('subject', 'Message Subject', 'trim|required');
	 $this->form_validation->set_rules('cPh', 'Cell Phone', 'trim');
	 $this->form_validation->set_rules('phone', 'Phone', 'trim');


	 if (!$this->form_validation->run()){
	 	$data['module'] = 'Contact_Us';
		$data['view'] = 'vw-Contact_Us';
		$data['validation_errors'] = validation_errors();

		$this->load->module('template');
		$this->template->index($data);
	 } else {

	 	$rootEmail = 'drivanbohun@gmail.com';

	 	$firstName = $this->input->post('firstName');
	 	$lastName = $this->input->post('lastName');
	 	$email = $this->input->post('email');
	 	$phone = $this->input->post('phone');
	 	$cellPhone = $this->input->post('cPh');
	 	$subject = $this->input->post('subject');
	 	$message = $this->input->post('mTextArea');


	 	$config = array();

		
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.googlemail.com';
		$config['smtp_port'] = 465;
		$config['smtp_user'] = 'shortsalewebsitemail@gmail.com';
		$config['smtp_pass'] = 'GM76egGR';

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		
		$this->email->from('shortsalewebsitemail@gmail.com', 'Short Sale Website Contact form');
		$this->email->to($rootEmail);		
		$this->email->subject('Message from Short Sale Website');
		
		$messageBody = ''.PHP_EOL;
		$messageBody .='Sender Name: ' . $firstName . ' '.$lastName.PHP_EOL;
		$messageBody .='Sender e-mail: '. $email.PHP_EOL;
		$messageBody .='Sender phone: '. $phone.PHP_EOL;
		$messageBody .='Sender cell phone: '. $cellPhone.PHP_EOL;	
		$messageBody .='Subject: '. $subject.PHP_EOL;
		$messageBody .='Message: '.PHP_EOL;
		$messageBody .=$message.PHP_EOL;	
			


		$this->email->message($messageBody);
		
				
		if($this->email->send())
		{
		$datum = array('thankYouMessage'=>'TRUE');

		$data['module'] = 'Contact_Us';
		$data['view'] = 'vw-Thank_you';
		$data['datum'] = $datum;
		$data['thankYouMessage'] = TRUE;

		$this->load->module('template');
		$this->template->index($data);
		}
		
		else
		{
			show_error($this->email->print_debugger());
		}




	 }


	}

}
