<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submit extends CI_Controller {

	public function index()
	{
		$this->load->model('ModelPeta');

		//header
		$head['pagetitle']="Kirim video drone kamu";
		$head['pageimage']=base_url().'assets/assets/img/calonpageimage.jpg';
		$head['pagedescription']="Bergabung untuk mempromosikan karyamu dan objek pariwisata di seluruh Indonesia.";
		$head['pagetype']="website";

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('url', 'Youtube URL', 'callback_url_check');
		$this->form_validation->set_rules('longlat', 'Longitude Latitude', 'callback_longlat_check');
		$data['kategori']=$this->ModelPeta->get_kategori();
		if ($this->form_validation->run() == FALSE)
                {
						$this->load->view('frontpage-head',$head);
						$this->load->view('submit',$data);                        
                }
                else
                {
                		$url=$this->input->post('url');
                		$longlat=$this->input->post('longlat');
                		$longlat=substr($longlat, 1, -1);
                		$longlat=explode(',',$longlat);
                		$youtube_stats=$this->getYoutubeStats($url['twitter:url']);
                		$data = array (
                			'url' =>$url['twitter:url'],
                			'title' =>$url['twitter:title'],
                			'description' =>$url['twitter:description'],
                			'tags' =>$url['keywords'],
                			'image' => $url['twitter:image'],
                			'nama_lokasi' =>$this->input->post('namalokasi'),
                			'longitude'=>$longlat[0],
                			'latitude'=>$longlat[1],
                			'provinsi' =>$this->input->post('provinsi'),
                			'kota' =>$this->input->post('kota'),
                			'video_owner' =>$youtube_stats['uploader'],
                			'kategori' =>$this->input->post('kategori'),
                			'likes'=>$youtube_stats['likes'],
                			'comments'=>$youtube_stats['comments'],
                			'views'=>$youtube_stats['views']
                			);
                		$insert=$this->ModelPeta->insert_video($data);
                		if ($insert) {
      //           		echo '<pre>';
						// print_r($data);
						// echo '</pre>';

                			redirect(base_url().'Detail?id='.$insert,'refresh');


						}
                		//tampilin summary dan notifikasi sudah dimasukkan

                		
                }					
	}

	public function url_check($url)
	{
		if (strpos($url, 'youtu') != true) {return false;}
		$meta = get_meta_tags($url);
		if ($meta && isset($meta['twitter:image'])) {
			return $meta;
		} else {
			$this->form_validation->set_message('url_check', 'URL yang anda masukkan salah atau tidak bisa diakses.');
			return false;
		}

	}


	public function longlat_check($longlat)
	{
		if ($longlat==''){
			$this->form_validation->set_message('longlat_check', 'Anda belum menunjukkan lokasi pada peta.');
			return false;			
		}
	}

	public function coba()
	{
			$meta = get_meta_tags('https://www.youtube.com/watch?v=d6FoBVSUBlo');
			echo '<pre>';
			print_r($meta);
			echo '</pre>';
	}

	function fetchUrl($url) {
    $allowUrlFopen = preg_match('/1|yes|on|true/i', ini_get('allow_url_fopen'));
    if ($allowUrlFopen) {
        return file_get_contents($url);
    } elseif (function_exists('curl_init')) {
        $c = curl_init($url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        $contents = curl_exec($c);
        curl_close($c);
        if (is_string($contents)) {
            return $contents;
        }
    }
    return false;
}


		function getYoutubeStats($url)
	{
	    $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
	    $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(\w+)/i';

	    if (preg_match($longUrlRegex, $url, $matches)) {
	        $youtube_id = $matches[count($matches) - 1];
	    } elseif (preg_match($shortUrlRegex, $url, $matches)) {
	        $youtube_id = $matches[count($matches) - 1];
	    } else {$youtube_id=false;}


	    if ($youtube_id) {
	    //get stats by calling API V3 Youtube Data
		$url='https://www.googleapis.com/youtube/v3/videos?part=statistics&id='.$youtube_id.'&key=AIzaSyAMdRyScryIw4K4J7WWKSYNq8bpmXHrHMc';
		$json = file_get_contents($url);
	    $obj = json_decode($json,true);


	    //get channel title. WHY I CANNOT GET IT IN SINGLE API CALL??! STOOPID YOUTUBE
		$url2='https://www.googleapis.com/youtube/v3/videos?part=snippet&id='.$youtube_id.'&key=AIzaSyAMdRyScryIw4K4J7WWKSYNq8bpmXHrHMc';
		$json2 = file_get_contents($url2);
	    $obj2 = json_decode($json2,true);	    


		// echo '<pre>';print_r($obj);echo '</pre>';
		$data['views']=$obj['items'][0]['statistics']['viewCount'];
		if (isset($obj['items'][0]['statistics']['commentCount'])) {
			$data['comments']=$obj['items'][0]['statistics']['commentCount'];
		} else 
		{
			$data['comments']=0;
		}

		$data['likes']=$obj['items'][0]['statistics']['likeCount'];
		$data['uploader']=$obj2['items'][0]['snippet']['channelTitle'];
	    } else {
	    	$data['views']=0;
	    	$data['comments']=0;
	    	$data['likes']=0;
	    }

	    return $data;

	}


	//This one only do 1 API call without need to know the uploader
		function getYoutubeStatsOnly($url)
	{
	    $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
	    $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(\w+)/i';

	    if (preg_match($longUrlRegex, $url, $matches)) {
	        $youtube_id = $matches[count($matches) - 1];
	    } elseif (preg_match($shortUrlRegex, $url, $matches)) {
	        $youtube_id = $matches[count($matches) - 1];
	    } else {$youtube_id=false;}


	    if ($youtube_id) {
	    //get stats by calling API V3 Youtube Data
		$url='https://www.googleapis.com/youtube/v3/videos?part=statistics&id='.$youtube_id.'&key=AIzaSyAMdRyScryIw4K4J7WWKSYNq8bpmXHrHMc';
		$json = file_get_contents($url);
	    $obj = json_decode($json,true);    


		// echo '<pre>';print_r($obj);echo '</pre>';
		$data['views']=$obj['items'][0]['statistics']['viewCount'];

		if (isset($obj['items'][0]['statistics']['commentCount'])) {
			$data['comments']=$obj['items'][0]['statistics']['commentCount'];
		} else 
		{
			$data['comments']=0;
		}

		$data['likes']=$obj['items'][0]['statistics']['likeCount'];
	    } else {
	    	$data['views']=0;
	    	$data['comments']=0;
	    	$data['likes']=0;
	    }
	    return $data;
	}


	function update_stats($limit=10)
	{
		$this->load->model('ModelPeta');
		//get all data
		$getall=$this->ModelPeta->get_to_update($limit);
		foreach ($getall as $item) {
			$data=$this->getYoutubeStatsOnly($item->url);

			//update
			$update_data=array('views'=>$data['views'],'comments'=>$data['comments'],'likes'=>$data['likes']);
			$updater=$this->ModelPeta->update_data($update_data,$item->id);
			echo $item->title.'<br>';
			echo $item->id.'<br>';			
			var_dump($data);
			echo '<br><br>';
		}
		//cycle it
		//update the data
	}
	
}
