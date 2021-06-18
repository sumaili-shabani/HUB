<div class="col-md-12 table-responsive">
    
    <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
        <thead>
            <tr>
            	<td>
            		Les Opérations

            	</td>

            	<td>
            		Profile complet de l'agent

            	</td>

            	
            	<td>
            		titre du compte rendu
            	</td>
            	<td>
            		milieu du terrain
            	</td>
                <td>
                    Commentaire
                </td>
            	<td>
            		mise à jour
            	</td>

                <td>
                    Télécharger
                </td>

            	<td>
            		supprimer
            	</td>
            
            </tr>

        </thead>
        <tbody>

        	<?php 
        	if ($padding->num_rows() <=  0) {
        		
        		?>
        		<td colspan="8">Aucun projet n'est à présent disponible</td>
        		<?php
        	}
        	else{

        		foreach ($padding->result_array() as $key ) {
        			# code...
        			?>
        			 <tr role="row" class="odd">
                	    <td>
                	    	<?php 
                	    	if ($key['email'] !=='') {
                	    		
                	    		?>
                	    		<div class="table-actions">

                                   <input type="checkbox" name="delete_checkbox" value="<?php echo($key['email']) ?>" class="delete_checkbox">
                                   &nbsp;
                                    <a href="<?php echo(base_url()) ?>admin/operationCompteRendu/detail/<?php echo($key['codeP'])?>" email="<?php echo($key['email']) ?>" class="btn btn-hub btn-circle btn-sm"><i class="fa fa-edit"></i></a>

                                    <!--  &nbsp;
                                    <a onclick="return confirm('êtes-vous sûre de vouloire supprimer ce projet?');"
                                    href="<?php echo(base_url()) ?>user/operationProjet/suppression/<?php echo($key['codeP'])?>" class="btn btn-danger btn-circle  btn-sm"><i class="fa fa-trash"></i></a> -->
                                </div>
                	    		<?php
                	    	}
                	    	else{
                	    		?>
                	    		<div class="table-actions">

                                   
                                    <a href="javascript:void(0);" email="<?php echo($key['email']) ?>" class="btn btn-secondary btn-circle btn-sm"><i class="fa fa-eye text-white"></i></a>
                                </div>
                	    		<?php

                	    	}

                	    	 ?>
                	    
                	    </td>
                        
                        <td>

                        	<div class="col-md-12">
                        		<div class="row">

                        			<div class="col-md-4" style="margin-top: 15px;">
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
                                				&nbsp;&nbsp;<?php echo(substr($key['telephone'], 0,10)) ?>
                                			</a>
                                		</div>
                                		
                        			</div>
                        		</div>
                        	</div>
                        	
                        </td>

                        <td class="sorting_1"><?php echo(nl2br(substr($key['titre'], 0,10))) ?>...</td>
                        <td class="sorting_1"><?php echo(nl2br(substr($key['milieu'], 0,15))) ?>...</td>
                        <td class="sorting_1"><?php echo(nl2br(substr($key['commentaire'], 0,55))) ?>...</td>
                        <td class="sorting_1"><?php echo(nl2br(substr(date(DATE_RFC822, strtotime($key['created_at'])), 0, 23))) ?></td>

                        <td>

                            <div class="col-md-12">
                                <div class="row">

                                    <div class="col-md-12">
                                        
                                        <a target="_black" href="<?php echo(base_url()) ?>upload/compte/<?php echo($key['fichier']) ?>" class="text-primary"><i class="fa fa-download mr-1"></i> télécharcher le fichier</a>
                                    </div>
                                </div>
                            </div>
                            
                        </td>

                       
                        
                       

                          <td class="sorting_1">
                         	
                         	<div class="table-actions">
                              
                                <a onclick="return confirm('êtes-vous sûre de vouloire le supprimer?');"
                                href="<?php echo(base_url()) ?>admin/operationCompteRendu/suppression/<?php echo($key['codeP'])?>"  class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash text-white"></i></a>
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
                    Les Opérations

                </td>

                <td>
                    Profile complet de l'agent

                </td>

                
                <td>
                    titre du compte rendu
                </td>
                <td>
                    milieu du terrain
                </td>
                <td>
                    Commentaire
                </td>
                <td>
                    mise à jour
                </td>

                <td>
                    Télécharger
                </td>

                <td>
                    supprimer
                </td>
            
            </tr>

        </tfoot>
    </table>
</div>