<?php
/*Date: Jan,10,2019
*Author:Rabab Shalan
*Description: The page is designed to adminstrator to create a service
*/
// echo $page_name;
function create_service_form(){
	echo validation_errors();
	echo form_open_multipart('services_c/create_service');//send data to services_c controller class ?>
 	<div class="form-group">
	 	<?php
	 	 	echo form_label('Title');
			$input_arr=array(
				'type'			=>	'text',
				'name'			=>	's_title',
				'placeholder'	=>	'Add Title',
				'class'			=>	'form-control'
				);
			echo form_input($input_arr);
		?>
  	</div>
  	<div class="form-group">
  		<?php
	  		echo form_label('Category');
	  		$options_arr=array(
	  			'Select..'	=>	'Select..',
	  			'children'	=>	'Children',
	  			'Beauty'	=>	'Beauty',
	  			'Community'	=>	'Community'
	  			);
	  		$css=array('class'=>'form-control');
	  		echo form_dropdown('s_category',$options_arr,'Select..',$css);
  		?>	 
  	</div>
  	<div class="form-group">
  		<?php
	  		echo form_label('Description');
	  		$textarea_arr=array(
				'type'			=>	'textarea',
				'name'			=>	's_description',
				'placeholder'	=>	'Add Description',
				'class'			=>	'form-control',
				'rows'			=>	'3'
				);
	  		echo form_textarea($textarea_arr);
  		?>
  	</div>
  	<div class="form-group">
  		<?php
	  		echo form_label('Image');
	  		$file_arr=array(
	  			'type'	=>	'file',
	  			'name'	=>	's_img',
	  			'class'	=>	'form-control-file'
	  			);  		
	  		echo form_upload($file_arr);
  		?>
  	</div>
  	<button type="submit" class="btn btn-primary">Create Service</button>
	<?php 
	echo br(1);
	echo form_close();
}//end create_service_form function
create_service_form();
echo br(2);
?>

