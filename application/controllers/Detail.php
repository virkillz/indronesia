<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function index()
	{
		$this->load->model('ModelPeta');
		$id=$this->input->get('id');
		if ($id==NULL) {$id=4;}
		$random=$this->ModelPeta->get_random(5);
		$get_detail=$this->ModelPeta->get_detail($id);
		$get_detail->code=$this->getYoutubeEmbedUrl($get_detail->url);
		$get_detail->random=$random;
		// var_dump($get_detail);
		// echo $get_detailurl->url;
		$head['pagetitle']=$get_detail->title;
		$head['pageimage']=$get_detail->image;
		$head['pagedescription']=$get_detail->description;
		$head['pagetype']="video";		
		$this->load->view('frontpage-head',$head);
		$this->load->view('detail',$get_detail);				
	}


	public function cobamodal()
	{
		$this->load->model('ModelPeta');
		$id=$this->input->post('id');
		// $id=7;
		$detail['item']=$this->ModelPeta->get_detail($id);
		$detail['kode']=$this->getYoutubeEmbedUrl($detail['item']->url);		
		$this->load->view('modal',$detail);
		// var_dump($detail);
	}



		function getYoutubeEmbedUrl($url)
	{
	    $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
	    $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(\w+)/i';

	    if (preg_match($longUrlRegex, $url, $matches)) {
	        $youtube_id = $matches[count($matches) - 1];
	    }

	    if (preg_match($shortUrlRegex, $url, $matches)) {
	        $youtube_id = $matches[count($matches) - 1];
	    }
	    return $youtube_id;
	}




	
}
