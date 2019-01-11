<?php 
/*Date: Jan,10,2019
*Author:Rabab Shalan
*Description: The view is designed to display the services of clinc
*/
 echo "$page_name of clinic";
 function display_services($services){

	 foreach ($services as $service) :?>
		<h3><?php echo $service['s_title'];?></h3>
		<?php 
		echo $service['s_description'];
		echo br(2);?>
		<p><a href="<?php echo site_url('services_c/display_service_details/'.$service['s_id']);?>" class='btn btn-primary'>Read More</a></p>
	 <?php
	 echo br(2); 
	 endforeach; 
}//end display_services function

display_services($services);
?>
