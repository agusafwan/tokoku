<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kasir_model extends CI_Model{

	private $primary_key = 'product_id';
	private $table_name	= 'products';

	public function __construct()
	{
	
		parent::__construct();
	
	}

	public function get() 
	{
	  	
	  	$this->db->select('product_id,name,price');

		return $this->db->get($this->table_name)->result();
	
	}


	public function getById($id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }

}