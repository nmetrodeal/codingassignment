<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		load_page("home");
	}

	public function submit(){
		$this->load->model("Tbl_Contacts");

		$contact_id	=	$this->input->post("contact_id");
		$firstname	=	$this->input->post("firstname");
		$lastname	=	$this->input->post("lastname");
		$address	=	$this->input->post("address");
		$city		=	$this->input->post("city");
		$state		=	$this->input->post("state");
		$zip		=	$this->input->post("zip");

		$obj			=	new StdClass();
		$obj->firstname	=	$firstname;
		$obj->lastname	=	$lastname;
		$obj->address 	=	$address;
		$obj->city 		=	$city;
		$obj->state 	=	$state;
		$obj->zip 		=	$zip;

		$data = array(
			'contact'	=>	$obj
		);

		$rules = $this->Tbl_Contacts->getValidationRules();
		$this->form_validation->set_rules($rules);
		$validated = $this->form_validation->run();

		if($validated){
			if($contact_id != '' && is_numeric($contact_id)){ // update
				$updateArray				=	array();
				$updateArray['firstname']	=	$firstname;
				$updateArray['lastname']	=	$lastname;
				$updateArray['address']		=	$address;
				$updateArray['city']		=	$city;
				$updateArray['state']		=	$state;
				$updateArray['zip']			=	$zip;

				$this->Tbl_Contacts->update($contact_id, $updateArray);
			}
			else{ // insert
				$insertArray				=	array();
				$insertArray['firstname']	=	$firstname;
				$insertArray['lastname']	=	$lastname;
				$insertArray['address']		=	$address;
				$insertArray['city']		=	$city;
				$insertArray['state']		=	$state;
				$insertArray['zip']			=	$zip;

				$this->Tbl_Contacts->insert($insertArray);
			}
			redirect("home");
		}
		else{
			load_page("home",$data);
		}
	}

	public function getAll(){
		$this->load->model("Tbl_Contacts");

		$rp			=	$this->input->post("rp");
		$page 		=	$this->input->post("page");
		$sortname 	=	$this->input->post("sortname");
		$sortorder	=	$this->input->post("sortorder");	
		$qtype		=	$this->input->post("qtype");
		$query		=	trim($this->input->post("query"));

		if($qtype != "" && $query != ""){
			$all 	=	$this->Tbl_Contacts->getAllWithFilter($qtype. " LIKE '%" . $query . "%'");
			$contacts 	=	$this->Tbl_Contacts->getAllWithFilter($qtype. " LIKE '%" . $query . "%'",($page-1)*$rp,$rp,$sortname,$sortorder);
		}
		else{
			$all 	=	$this->Tbl_Contacts->getAll();
			$contacts 	=	$this->Tbl_Contacts->getAll(($page-1)*$rp,$rp,$sortname,$sortorder);
		}
		// Return JSON data
		$data 			=	 array();
		$data['page'] 	= 	$page;//$page;
		$data['total']	= 	count($all);//$total;
		$data['rows'] 	= 	array();

		
		foreach($contacts as $contact){
			$data['rows'][] = array(
				'id'	=>	$contact->contact_id,
				'cell'	=>	array(
					$contact->contact_id,
					$contact->contact_name,
					$contact->address,
					$contact->city,
					$contact->state,
					$contact->zip,
				)
			);
		}

		echo json_encode($data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */