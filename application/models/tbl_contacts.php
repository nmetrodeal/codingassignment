<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tbl_Contacts extends CI_Model {

	protected $tableName    =  "tbl_contacts";

	function __construct()
    {
        parent::__construct();
    }

    function insert($insertArray){
        $query = $this->db->insert($this->tableName,$insertArray);
        if($query){
            return $this->db->insert_id();
        }
        else{
            return false;
        }
    }

    function update($id,$updateArray){
        $this->db->where("user_id",$id);
        $query = $this->db->update($this->tableName,$updateArray);
        return $query;
    }

    function getById($user_id){
        $this->db->select("*")
            ->from($this->tableName)
            ->where("user_id = " . $user_id);
        $query = $this->db->get();
        return $query->row();
    }

    function getAll($offset=0,$limit='',$sortname='',$sortorder='asc'){
        $this->db->select("a.*, CONCAT(IFNULL(a.lastname,''),', ',IFNULL(a.firstname,'')) as contact_name ", FALSE)
            ->from($this->tableName . " a");
        if($limit != '')
            $this->db->limit($limit,$offset);
        if($sortname != '')
            $this->db->order_by($sortname, $sortorder);
        $query = $this->db->get();
        return $query->result();
    }

    function getAllWithFilter($filter='',$offset=0,$limit='',$sortname='',$sortorder='asc'){
        $this->db->select("a.*, CONCAT(IFNULL(a.lastname,''),', ',IFNULL(a.firstname,'')) as contact_name ", FALSE)
            ->from($this->tableName . " a");
        if($filter != ''){
            $this->db->where($filter);
        }
        if($limit != '')
            $this->db->limit($limit,$offset);
        if($sortname != '')
            $this->db->order_by($sortname, $sortorder);
        $query = $this->db->get();
        return $query->result();
    }

    function getValidationRules(){
    	$rules = array(
    		array(
                'field' =>  'firstname',
                'label' =>  'Firstname',
                'rules' =>  'required'
            ),
            array(
                'field' =>  'lastname',
                'label' =>  'Lastname',
                'rules' =>  'required'
            ),
            array(
                'field' =>  'address',
                'label' =>  'Address',
                'rules' =>  'required'
            ),
            array(
                'field' =>  'city',
                'label' =>  'City',
                'rules' =>  'required'
            ),
            array(
                'field' =>  'state',
                'label' =>  'State',
                'rules' =>  'required'
            ),
            array(
                'field' =>  'zip',
                'label' =>  'Zip',
                'rules' =>  'required'
            ),
    	);

    	return $rules;
    }
}

/* End of file tbl_contacts.php */
/* Location: ./application/models/tbl_contacts.php */