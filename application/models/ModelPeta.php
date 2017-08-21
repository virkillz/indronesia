<?php
Class ModelPeta extends CI_Model
{


 function insert_video($data)
 {
	$this->db->insert('footage',$data);
	if ($this->db->affected_rows() > 0) { 
		$insert_id = $this->db->insert_id();
	   	return  $insert_id;
   } else {return false;}
 }

function count_all()
{
	return $this->db->count_all_results('footage');
}



  function get_detail($id)
 {
	$this->db->select('u.*, c.ikon', false);
	$this->db->from('footage as u');
	$this->db->join('kategori as c', 'u.kategori = c.nama');  	
   $this->db->where('u.id',$id);
   $this->db->limit(1);
   $query = $this ->db->get('footage');
   if($query -> num_rows() == 1)
   {
     $result= $query->result();
     return $result[0];
   }
   else
   {
     return false;
   }
 }

  function get_random($limit)
 {
	$this->db->select('u.*, c.ikon', false);
	$this->db->from('footage as u');
	$this->db->join('kategori as c', 'u.kategori = c.nama'); 	
   $this->db->order_by('id','RANDOM');
   $this->db->limit($limit);
   $query = $this ->db->get('footage');
     $result= $query->result();
     return $result;

 }

   function get_prov($prov)
 {
 	$this->db->where('provinsi',$prov);
   	$this->db->order_by('id','RANDOM');
   	$query = $this ->db->get('footage');

   if($query -> num_rows() > 0)
   {
     $result= $query->result();
     return $result;
   }
   else
   {
    $this->db->where('provinsi','DI Yogyakarta');
   	$this->db->order_by('id','RANDOM');
   	$query2 = $this ->db->get('footage');
   	return $query2->result();

   }
 }


   function get_all()
 {
	$this->db->select('u.*, c.ikon', false);
	$this->db->from('footage as u');
	$this->db->join('kategori as c', 'u.kategori = c.nama');
	$query = $this->db->get();
     $result= $query->result();
     return $result;
 }

   function get_to_update($limit=20)
 {
 	$this->db->order_by('last_update');
 	$this->db->limit($limit);
	$query = $this->db->get('footage');
     $result= $query->result();
     return $result;
 }

function update_data($data,$id)
{
$this->db->where('id',$id);
$this->db->update('footage',$data);
}


   function get_featured($limit)
 {
 	$this->db->where('is_featured','1');
 	$this->db->join('kategori', 'footage.kategori = kategori.nama');
 	$this->db->order_by('footage.id','DESC');
 	$this->db->limit($limit);
   	$query = $this ->db->get('footage');
     $result= $query->result();
     return $result;
 }

   function get_kategori()
 {
 	$this->db->order_by('nama','ASC');
   	$query = $this ->db->get('kategori');
     $result= $query->result();
     return $result;
 }

   function get_prov_longlat($prov)
 {
 	$this->db->where('nama',$prov);
   	$query = $this ->db->get('provinsi');

   if($query -> num_rows() > 0)
   {
     $result= $query->result();
     return $result;
   }
   else
   {
    $this->db->where('nama','DI Yogyakarta');
   	$query2 = $this ->db->get('provinsi');
   	return $query2->result();

   }
 }


}