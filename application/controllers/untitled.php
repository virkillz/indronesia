<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_List extends CI_Controller {

	public function random()
	{
		$this->load->model('ModelPeta');
		$getrandom=$this->ModelPeta->random(10);				
	}
}
