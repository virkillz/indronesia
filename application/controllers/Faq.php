<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

	public function index()
	{
		$this->load->model('ModelPeta');
		$random=$this->ModelPeta->get_random(5);
		$get_detail['random']=$random;
		$head['pagetitle']="Ingin tau objek menarik di daerahmu dari udara?";
		$head['pageimage']=base_url().'assets/assets/img/calonpageimage.jpg';
		$head['pagedescription']="Berbagi video drone dari objek menarik di seluruh Indonesia. Disini kamu bisa temukan video udara dari objek2 wisata menarik dari seluruh penjuru Indonesia yang sudah diabadikan sebalumnya. Kamu juga bisa memamerkan hasil karyamu. ";
		$head['pagetype']="website";
		$this->load->view('frontpage-head',$head);
		$this->load->view('faq',$get_detail);
		$this->load->view('static-footer');		
	}
}
