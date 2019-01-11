<?php
/*Date: Jan,10,2019
*Author:Rabab Shalan
*Description: The class designed to display the services of clinc
*/
class Services_c extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Services_m');
	}//end __construct function
	public function show_general($page_title,$target_page,$data){

		$data['page_name']=$page_title;		
		$this->load->view('templates/header');
		$this->load->view('pages/'.$target_page,$data);
		$this->load->view('templates/footer');

	}//end show_general function

	public function index(){		
		$data['services']=$this->Services_m->get_services();//data returned form DB by Model
		$this->show_general('Services','services',$data);

	}
	public function display_service_details($service_chosen=NULL){
		$data['service']=$this->Services_m->get_services($service_chosen);
		if(empty($data['service'])){
			show_404();
		}//end if
		$this->show_general($data['service']['s_title'],'service_detail',$data);

	}//end display_service_details function

	public function check_data(){

	}//end check_data function

	public function create_service(){

		$this->form_validation->set_rules('s_title','Title','required');
		$this->form_validation->set_rules('s_category','Category','required');
		$this->form_validation->set_rules('s_description','Description','required');

		if($this->form_validation->run()===FALSE){
		$data['page_name']='create service';		
		$this->load->view('templates/header');
		$this->load->view('pages/create_service',$data);
		$this->load->view('templates/footer');
			//$this->show_general('create service','create_service','');
		}//end if
		else{
			$this->services_m->insert_services();
			redirect('services_c/index');
			//redirect('services_c/index');
		}	

	}//end create_service function

	public function edit_service($s_id){	
		$data['service']=$this->services_m->get_services($s_id);
		if(empty($data['service'])){
			show_404();
		}//end if	

		if($this->form_validation->run()===FALSE){
			$this->show_general('edit service','edit_service',$data);
		}//end if
		else{
			$this->services_m->insert_services();
			redirect('services_c/index');
			//redirect('services_c/index');
		}	

	}//end create_service function
	public function update_service(){
			$this->form_validation->set_rules('s_title','Title','required');
			$this->form_validation->set_rules('s_category','Category','required');
			$this->form_validation->set_rules('s_description','Description','required');

			if($this->form_validation->run()===FALSE){
				$this->show_general('update service','edit_service','');
			}//end if
			else{
				$this->services_m->update_service();
				redirect('services_c/index');
			//redirect('services_c/index');
		}
	}//end update_service function

	public function delete_service($s_id){		
		$this->services_m->delete_service($s_id);
		redirect('/services_c/index');
	}//end delete_service function
}//end Services_c class
?>