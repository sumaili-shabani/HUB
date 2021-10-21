<div class="col-md-12">
	<form class="row" method="post" enctype="multipart/form-data" action="<?= base_url(); ?>user/operationCompteRendu/modification/<?php echo(nl2br($key['codeP'])) ?>">
		<div class="col-md-12">
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

        <div class="col-md-6 mb-2">
        	<label>Titre de compte rendu</label>
        	<input type="text" name="titre" class="form-control" placeholder="titre" value="<?php echo(nl2br($key['titre'])) ?>">
        </div>

        <div class="col-md-6 mb-2">
        	<label>Milieu du terrain</label>
        	<input type="text" name="milieu" class="form-control" placeholder="Milieu du terrain descendu" value="<?php echo(nl2br($key['milieu'])) ?>">
        </div>

        <div class="col-md-6 mb-2">
        	<label>Date mise à jour</label>
        	<input type="date" name="jour" class="form-control" value="<?php echo(nl2br($key['jour'])) ?>">
        </div>

        <div class="col-md-6 mb-2">
        	<label>Atacher un fichier d'exécution pour l'explication</label>
        	<input type="file" name="fichier" id="fichier" class="form-control">
        </div>

        <div class="col-md-12 mb-2 form-group">
			<label>Entrez un commentaire pour une petite description du compte rendu</label>
			<textarea name="commentaire" id="commentaire" class="form-control textarea" placeholder="Entrez une petite description du compte rendu">
                <?php echo(nl2br($key['commentaire'])) ?>
				
			</textarea>
		</div>

		<div class="col-md-12 mb-2">
            <input type="hidden" name="id_user" value="<?php echo(nl2br($key['id_user'])) ?>">
        	
        	<button type="submit" name="valider" class="btn btn-hub btn-block"><i class="fa fa-edit mr-1"></i> Modifier</button>
        </div>



		
	</form>
</div>