<div class="col-md-12 table-responsive">
    
    <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
        <thead>
            <tr>
            	<td>
            		Les Opérations

            	</td>

            	

            	<td>
            		Profile complet des ceo et leurs entreprises

            	</td>

            	<td>
            		logo startu-up
            	</td>
            	
            	<td>
            		Montant
            	</td>
            	<td>
            		Mobile
            	</td>
            	<td>
            		Token de transation
            	</td>

            	<td>
            		Imprimer
            	</td>
            	
            	
            </tr>

        </thead>
        <tbody>

        	<?php 
        	if ($padding->num_rows() <=  0) {
        		
        		?>
        		<td colspan="6">Aucun paiement n'est à présent disponible</td>
        		<?php
        	}
        	else{

        		foreach ($padding->result_array() as $key ) {
        			# code...
        			?>
        			 <tr role="row" class="odd">
                	    <td>
                	    	<?php 
                	    	if ($key['etat_paiement'] ==0) {
                	    		
                	    		?>
                	    		<div class="table-actions">

                                   <input type="checkbox" name="delete_checkbox" value="<?php echo($key['idp']) ?>" class="delete_checkbox">
                                   &nbsp;
                                    <a href="javascript:void(0);" idp="<?php echo($key['idp']) ?>" class="btn btn-danger btn-circle invvalider_liste btn-sm"><i class="fa fa-trash"></i></a>
                                </div>
                	    		<?php
                	    	}
                	    	else{
                	    		?>
                	    		<div class="table-actions">

                                   <input type="checkbox" name="delete_checkbox" value="<?php echo($key['idp']) ?>" class="delete_checkbox">
                                   &nbsp;
                                    <a href="javascript:void(0);" idp="<?php echo($key['idp']) ?>" class="btn btn-secondary btn-circle btn-sm"><i class="fa fa-eye text-white"></i></a>
                                </div>
                	    		<?php

                	    	}

                	    	 ?>
                	    	

                            
                	    	
                	    </td>
                        
                        <td>

                        	<div class="col-md-12">
                        		<div class="row">

                        			<div class="col-md-4">
                        				<img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" class="table-user-thumb img img-thumbnail" alt="" style="height: 40px;width: 50px;">
                        				
                        			</div>



                        			<div class="col-md-8">
                        				
                                	    <div class="col-md-12">
                                			<?php echo($key['first_name']) ?>
                                			<?php echo($key['last_name']) ?>
                                		</div>
                                		<div class="col-md-12">
                                			<a href="tel:<?php echo($key['telephone']) ?>" class="text-primary">
                                				<i class="fa fa-phone"></i>
                                				&nbsp;&nbsp;<?php echo($key['telephone']) ?>
                                			</a>
                                		</div>
                                		<div class="col-md-12 text-success">
                                			<?php echo($key['nom']) ?>
                                		</div>
                        			</div>
                        		</div>
                        	</div>
                        	
                        </td>

                        <td>

                        	<div class="col-md-12">
                        		<div class="row">

                        			<div class="col-md-12">
                        				
                        				<img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['logo']) ?>" class="table-user-thumb img img-thumbnail" alt="" style="height: 40px; width: 50px; border-radius: 50%;">
                        			</div>
                        		</div>
                        	</div>
                        	
                        </td>

                        <td class="sorting_1"><?php echo($key['montant']) ?> $</td>
                        <td>
                            
                            <?php 
                            if ($key['motif'] == "m-pesa") {
                            	?>
                            	<img src="<?php echo(base_url()) ?>upload/module/m-pesa.com.png" class="img-thumbnail img-responsive" style="height: 20px; width: 50px;">
                            	<?php
                            }
                            else if ($key['motif'] == "airtel money") {
                            	?>
                            	<img src="<?php echo(base_url()) ?>upload/module/airtel.jpg" class="img-thumbnail img-responsive" style="height: 20px; width: 50px;">
                            	<?php
                            }
                            else{
                            	echo("module de paiement inconu");
                            }
                            ?>
                        </td>
                         <td class="sorting_1">
                         	
                         	<div class="table-actions">
                               <i class="fa fa-key"></i> &nbsp;<?php echo($key['token']) ?>&nbsp;
                                
                            </div>

                            

                         </td>

                          <td class="sorting_1">
                         	
                         	<div class="table-actions">
                              
                                <a href="<?php echo(base_url()) ?>admin/facture/<?php echo($key['codeFacture']) ?>"  class="btn btn-primary btn-circle btn-sm"><i class="fa fa-print text-white"></i></a>
                            </div>

                            

                         </td>
                        
                    </tr>
        			<?php
        		}

        	}

        	 ?>
            
            
           

        </tbody>
        <tfoot role="row" class="odd">
            <tr>
            	<td>
            		Les opérations
            	</td>
            	<td>
            		Profile complet des ceo et leurs entreprises
            	</td>

            	<td>
            		logo startu-up
            	</td>
            	
            	<td>
            		Montant
            	</td>
            	<td>
            		Mobile
            	</td>
            	<td>
            		Token de transation
            	</td>

            	<td>
            		Imprimer
            	</td>
            	
            	
            </tr>

        </tfoot>
    </table>
</div>