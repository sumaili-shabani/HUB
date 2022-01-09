


<!-- debut de mes scripts -->
	<div class="col-md-12">
	 <div class="row">
	   <div class="col-md-12">

	   	 <!-- <a class="btn btn-dim btn-sm btn-outline-light pull-left  mb-4" href="<?php echo(base_url()) ?>admin/pdf_tranche"><i class="fa fa-print"></i>PDF écheancier</a> -->

	     <button class="btn btn-hub btn-sm pull-right  mb-4" id="add_button" data-toggle="modal" data-target="#userModal"><i class="fa fa-plus"></i>Effectuer l'opération</button>
	   </div>
	 </div>
	</div>
	<!-- insertion de tableau -->
	<div class="col-md-12 post_data" >
		<div class="table-responsive">
		    <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
		        <thead>  
		            <tr> 
		            	<th width="5%">
		            		<button type="button" name="delete_all" id="delete_all" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> &nbsp;supprimer</button>
		            	</th>  
		            	<th width="30%">Nom de la question</th>
		            	<th width="20%">Réponse</th> 
		            	<th width="15%">Nom de rubrique</th>
		               
		                <th width="20%">Mise à jour</th>  
		                
		                <th width="5%">Modifier</th> 
		                <th width="5%">Supprimer</th>  
		            </tr>  
		       </thead>
		       <tbody>
		       	<?php 
		       	if ($reponses->num_rows() > 0) {
		       		# code...
		       		foreach ($reponses->result() as $row) {
		       			# code...

		       			

		                $btn_a = '<input type="checkbox" class="delete_checkbox" value="'.$row->idrep.'" /> &nbsp;&nbsp;&nbsp; <a href="'.base_url().'user/pdf_reponse/'.$row->idr.'" class="btn btn-primary btn-sm print"><i class="fa fa-print"></i></a>'; 

		                $nomq = nl2br(substr($row->nomq  , 0,50)).' ...';
		                $valeur = nl2br(substr($row->valeur  , 0,20)).' ...';
		                $nomr = nl2br(substr($row->nomr  , 0,25)).' ...'; 
		                
		                $created_at = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

		                $btn1 = '<button type="button" name="update" idrep="'.$row->idrep.'" class="btn btn-warning btn-sm update"><i class="fa fa-edit"></i></button>';  
		                $btn2 = '<button type="button" name="delete" idrep="'.$row->idrep.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>';  

		                ?>
		                <tr>
		                	<td><?php echo($btn_a) ?></td>
		                	<td><?php echo($nomq) ?></td>
		                	<td><?php echo($valeur) ?></td>
		                	<td><?php echo($nomr) ?></td>
		                	<td><?php echo($created_at) ?></td>
		                	<td><?php echo($btn1) ?></td>
		                	<td><?php echo($btn2) ?></td>
		                </tr>
		                <?php


		       		}
		       	}
		       	else{

		       	}


		       	?>
		       </tbody>

		       <tfoot>  
		            <tr>  
		                <th width="5%">Imprimmer</th>  
		            	<th width="30%">Nom de la question</th>
		            	<th width="20%">Réponse</th> 
		            	<th width="15%">Nom de rubrique</th>
		               
		                <th width="20%">Mise à jour</th>  
		                
		                <th width="5%">Modifier</th> 
		                <th width="5%">Supprimer</th>         
		            </tr>  
		       </tfoot>    
		        
		    </table>
		</div>
	</div>

	<div class="col-md-12 mb-2">
  	  <div class="row">
  	    <div class="col-md-4"></div>
  	    <div class="col-md-4">
  	      <nav class="pagination" id="pagination_link">
  	    
  	      </nav>
  	    </div>
  	    <div class="col-md-4"></div>
  	  </div>
  	</div>
	<!-- fin insertion tableau -->
<!-- fin de mes scripts