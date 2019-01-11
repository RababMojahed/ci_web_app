<?php
/*Date: Jan,10,2019
*Author:Rabab Shalan
*Description: The page designed to display the service's details
*/
function display_service_dtls($service){
	?>
	<h2><?php echo $service['s_title'];?></h2>
	<div><?php echo $service['s_description'];?></div>
	<?php echo br(2);?>
<?php
}//end display_service_dtls
function delete_service($service){	
	echo form_open('services_c/delete_service/'.$service['s_id']);?>
	<input type="submit" value="Delete" class="btn btn-danger pull-left">
<?php echo form_close();

}//end display_service_dtls
function edit_service($service){	
	?>
	<a class="btn btn-secondary pull-left" href="<?php echo base_url();?>services_c/edit_service/<?php echo $service['s_id'];?>">Edit</a>	
<?php 

}//end 

display_service_dtls($service);
edit_service($service);
delete_service($service);


?>