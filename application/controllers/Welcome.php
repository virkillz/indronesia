<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('ModelPeta');
		$prov = $this->input->get('prov');
		if ($prov==NULL) {$prov='DI Yogyakarta';}
		$get_prov=$this->ModelPeta->get_prov($prov);
		$prov_longlat=$this->ModelPeta->get_prov_longlat($prov);

		$get_prov['feature']=$this->ModelPeta->get_featured(4);
		$get_prov['count']=$this->ModelPeta->count_all();
		$get_prov['prov']=$prov;
		$get_prov['zoom']=$prov_longlat[0]->zoom;
		$get_prov['longitude']=$prov_longlat[0]->longitude;
		$get_prov['latitude']=$prov_longlat[0]->latitude;

		// var_dump($get_prov);
		// echo json_encode($get_prov);
		$head['pagetitle']="Ingin tau objek menarik di daerahmu dari udara?";
		$head['pageimage']=base_url().'assets/assets/img/calonpageimage.jpg';
		$head['pagedescription']="Berbagi video drone dari objek menarik di seluruh Indonesia. Disini kamu bisa temukan video udara dari objek2 wisata menarik dari seluruh penjuru Indonesia yang sudah diabadikan sebalumnya. Kamu juga bisa memamerkan hasil karyamu. ";
		$head['pagetype']="website";

		$this->load->view('frontpage-head',$head);
		$this->load->view('frontpage',$get_prov);	
		$this->load->view('frontpage-tail',$get_prov);

	}
}
