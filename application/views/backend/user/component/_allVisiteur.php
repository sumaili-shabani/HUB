<div class="col-md-12">
    <div class="row">

        <div class="col-md-12">


            <div class="col-md-12 mb-2">
                <div class="text-center" align="center">
                    <?php
                    if($this->session->flashdata('message'))
                    {
                        echo '
                        <div class="alert alert-success">
                        <button class="close" data-dismiss="alert">x</button>
                            '.$this->session->flashdata("message").'
                        </div>
                        ';
                    }
                    elseif ($this->session->flashdata('message2')) {
                      echo '
                        <div class="alert alert-danger">
                        <button class="close" data-dismiss="alert">x</button>
                            '.$this->session->flashdata("message2").'
                        </div>
                        ';
                    }
                    else{

                    }
                    ?>
                </div>
            </div>


            <div class="colmd-12 table-responsive">
                <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
                    <thead>
                        <tr>
                            <td>
                                Les Opérations

                            </td>

                            <td>
                                Avatar
                            </td>

                            

                            <td>
                                Profile complet des visiteurs

                            </td>

                            <td>
                                email
                            </td>

                           
                            
                            <td>
                                mise à jour
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
                            <td colspan="6">Aucun visiteur n'est à présent disponible</td>
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
                                                <a onclick="return confirm('êtes-vous sûre de vouloire  l\'accepter d\'integrer l\'incubateur?');" href="<?php echo(base_url()) ?>user/valider_visiteur/<?php echo($key['id']) ?>" class="btn btn-success btn-circle invvalider_liste btn-sm"><i class="fa fa-check"></i></a>

                                                
                                            </div>
                                            <?php
                                        }
                                        else{
                                            ?>
                                            <div class="table-actions">

                                               
                                                <a  href="javascript:void(0);" email="<?php echo($key['email']) ?>" class="btn btn-secondary btn-circle btn-sm"><i class="fa fa-eye text-white"></i></a>
                                            </div>
                                            <?php

                                        }

                                         ?>
                                        

                                        
                                        
                                    </td>

                                    <td>
                                        <img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" class="table-user-thumb img img-thumbnail" alt="" style="height: 40px;width: 50px;">
                                    </td>
                                    
                                    <td>

                                        <div class="col-md-12">
                                            <div class="row">


                                                <div class="col-md-12">
                                                    
                                                    <div class="col-md-12">
                                                        <?php echo($key['first_name']) ?>
                                                        <?php echo($key['last_name']) ?>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </td>

                                   

                                    <td class="sorting_1"><?php echo(nl2br(substr($key['email'], 0,70))) ?>...</td>

                                    <td class="sorting_1"><?php echo(nl2br(substr(date(DATE_RFC822, strtotime($key['created_at'])), 0, 23))) ?></td>
                                    
                                   

                                      <td class="sorting_1">
                                        
                                        <a onclick="return confirm('êtes-vous sûre de vouloire  rejeter sa demande?');" href="<?php echo(base_url()) ?>user/delete_visiteur/<?php echo($key['id']) ?>"  class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash text-white"></i></a>

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
                                Avatar
                            </td>

                            

                            <td>
                                Profile complet des visiteurs

                            </td>

                            <td>
                                email
                            </td>

                           
                            
                            <td>
                                mise à jour
                            </td>

                            <td>
                                supprimer
                            </td>
                        
                        </tr>

                    </tfoot>
                </table>
            </div>

            
        </div>
    </div>
</div>              