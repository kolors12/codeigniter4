<?php

namespace App\Models;
use CodeIgniter\Model;

class MultideleteModel extends Model {
	
	protected $product = 'students';
	
	function get_product_list() {        
		$query = $this->db->table($this->product)->get();
        
		return $query->getResult();
    }
	
	function delete_products_by_ids($ids) {		
		if($this->db->table($this->product)->whereIn('id', $ids)->delete()) {
			return true;
		} else {
			return false;
		}
	}

	function delete_product($id) {		
		if($this->db->table($this->product)->where('id', $id)->delete()) {
			return true;
		} else {
			return false;
		}
	}

  
	
}