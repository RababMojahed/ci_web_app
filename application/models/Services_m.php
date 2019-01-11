<?php
/*Date: Jan,10,2019
*Author:Rabab Shalan
*Description: The class designed to manipulate with data of service table
*/
class Services_m extends CI_Model{
	public function __construct(){
		parent::__construct();
	}//end __construct function

	public function get_services($service_chosen=FALSE){
		if($service_chosen===FALSE){
			$this->db->order_by('s_id','DESC');
			$query=$this->db->get('service');
			return $query->result_array();
		}//end if
		
		$service=array('s_id'=>$service_chosen); 
		$query=$this->db->get_where('service',$service);
		return $query->row_array();
	}//end get_services function


	public function insert_services(){
		$data=array(
			's_title'=>$this->input->post('s_title'),
			's_description'=>$this->input->post('s_description')
			);
		return $this->db->insert('service',$data);

	}//end insert_services function

	public function update_service(){
		$data=array(
			's_title'=>$this->input->post('s_title'),
			's_description'=>$this->input->post('s_description')
			);
		$this->db->where('s_id',$this->input->post('s_id'));
		return $this->db->update('service',$data);

	}//end update_service function

	public function delete_service($s_id){
		$this->db->where('s_id',$s_id);
		$this->db->delete('service');
		return true;
		

	}//end insert_services function
}//end Services_m class 
?>