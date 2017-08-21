<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getlist extends CI_Controller {


	public function index()
	{
		$this->load->model('ModelPeta');
		$getrandom=$this->ModelPeta->get_all();

		$data['data']=array();
		foreach ($getrandom as $item) {
			$data['data'][]=array(
				'id'=>$item->id,
				'category' =>$item->kategori,
				'title' =>$item->title,
				'location' =>$item->nama_lokasi,
				'latitude' =>$item->longitude,
				'longitude' =>$item->latitude,
				'url' =>$item->url,
				'type' =>$item->kategori,
				'type_icon' =>"assets/assets/icons/nature/natural-marvels/canyon-2.png",
				'rating' => '4',
				'gallery' =>array($item->image),
				'features' =>array('ahoy'),
				'date_created' => 'x',
				'pricex' => 'x',
				'featured' => 'x',
				'color' => 'x',
				'person_id'=>1,
				'year'=>'x',
				'special_offer'=>'x',
				'item_specific'=>array('likes'=>$item->likes,'views'=>$item->views,'comments'=>$item->comments),
				'description'=>'x',
				'last_review'=>'x',
				'last_review_rating'=>5
				);
		}

		echo json_encode($data);

		// echo json_encode($get_prov);		
	}

	public function footage($id=7)
	{
		$this->load->model('ModelPeta');
		$item=$this->ModelPeta->get_detail($id);
			$data['data'][]=array(
				'id'=>$item->id,
				'category' =>$item->kategori,
				'title' =>$item->title,
				'location' =>$item->nama_lokasi,
				'latitude' =>$item->longitude,
				'longitude' =>$item->latitude,
				'url' =>$item->url,
				'type' =>$item->kategori,
				'type_icon' =>"assets/assets/icons/nature/natural-marvels/canyon-2.png",
				'rating' => '4',
				'gallery' =>array($item->image),
				'features' =>array('ahoy'),
				'date_created' => 'x',
				'price' => 'x',
				'featured' => 'x',
				'color' => 'x',
				'person_id'=>1,
				'year'=>'x',
				'special_offer'=>'x',
				'item_specific'=>array('likes'=>$item->likes,'views'=>$item->views,'comments'=>$item->comments),
				'description'=>'x',
				'last_review'=>'x',
				'last_review_rating'=>5
				);


		echo json_encode($data);

		// echo json_encode($get_prov);		
	}

	public function prov($prov="DI Yogyakarta")
	{
		$this->load->model('ModelPeta');
		$getrandom=$this->ModelPeta->get_prov($prov);

		$data['data']=array();
		foreach ($getrandom as $item) {
			$data['data'][]=array(
				'id'=>$item->id,
				'category' =>$item->kategori,
				'title' =>$item->title,
				'location' =>$item->nama_lokasi,
				'latitude' =>$item->longitude,
				'longitude' =>$item->latitude,
				'url' =>$item->url,
				'type' =>$item->kategori,
				'type_icon' =>"assets/assets/icons/nature/natural-marvels/canyon-2.png",
				'rating' => '4',
				'gallery' =>array($item->image),
				'features' =>array('ahoy'),
				'date_created' => 'x',
				'price' => 'x',
				'featured' => 'x',
				'color' => 'x',
				'person_id'=>1,
				'year'=>'x',
				'special_offer'=>'x',
				'item_spesific'=>array('bedroomx'=>1),
				'description'=>'x',
				'last_review'=>'x',
				'last_review_rating'=>5
				);
		}

		echo json_encode($data);

		// echo json_encode($get_prov);		
	}


	public function random($limit=5)
	{
		$this->load->model('ModelPeta');
		$getrandom=$this->ModelPeta->get_random($limit);

		$data['data']=array();
		foreach ($getrandom as $item) {
			$data['data'][]=array(
				'id'=>$item->id,
				'category' =>$item->kategori,
				'title' =>$item->title,
				'location' =>$item->nama_lokasi,
				'latitude' =>$item->latitude,
				'longitude' =>$item->longitude,
				'url' =>$item->url,
				'type' =>$item->kategori,
				'type_icon' =>"assets/assets/icons/nature/natural-marvels/canyon-2.png",
				'rating' => '4',
				'gallery' =>array($item->image),
				);
		}

		echo json_encode($data);

	}

	public function get_youtube_stats($code)
	{
		$url='https://www.googleapis.com/youtube/v3/videos?part=snippet&id='.$code.'&key=AIzaSyAMdRyScryIw4K4J7WWKSYNq8bpmXHrHMc';
		$json = file_get_contents($url);
		$obj = json_decode($json,true);
		// echo '<pre>';print_r($obj);echo '</pre>';
		echo $obj['items'][0]['snippet']['channelTitle'];
	}


}
