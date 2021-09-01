<?php 

	if ($infos_news->num_rows() <= 0) {
		# code...
	}
	else{

		foreach ($infos_news->result_array() as $row) {

				?>

				<!-- Big Gallery Start -->
				<div class="col-md-12">
					<?php echo(html_entity_decode($row['apropos_text'])) ?>
				</div>
				<!-- Big Gallery End -->
				
				<?php
			
			# code...
		}
	}


?>
