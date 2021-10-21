<div class="col-md-12">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<a href="<?= base_url() ?>admin/detail_entreprise/<?php echo($key['student_id']) ?>" class="text-muted pull-right">
				<i class="fa fa-refresh"> retourner en arrière!</i>
			</a>
		</div>
	</div>
	<form class="row" method="post" enctype="multipart/form-data" action="<?= base_url(); ?>admin/operationProjet/modification/<?php echo($codeP) ?>">

		<!-- detail n1 -->
		<?php //include('_inst1.php') ?>
		<!-- fin detail n1 -->

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

		

		<div class="col-md-12">
			<h4>Votre idée</h4>
		</div>

		<div class="col-md-6 form-group">
			<label>Comment pourriez-vous définir votre idée(1 phrase)?</label>
			<textarea name="idee1" id="idee1" class="form-control" placeholder="définir votre idée(1 phrase)">
				<?php echo(nl2br($key['idee1'])) ?>
			</textarea>
		</div>

		<div class="col-md-6 form-group">
			<label>Que ce qui est à l'origine de votre idée?</label>
			<textarea name="idee2" id="idee2" class="form-control" placeholder="origine de votre idée">
				<?php echo(nl2br($key['idee2'])) ?>
			</textarea>
		</div>

		<div class="col-md-6 form-group">
			<label>Quels sont vos objectifs?</label>
			<textarea name="idee3" id="idee3" class="form-control" placeholder="Vos objectifs">
				<?php echo(nl2br($key['idee3'])) ?>
			</textarea>
		</div>

		<div class="col-md-6 form-group">
			<label>Que pourraient être les principales fonctions de votre entreprise?</label>
			<textarea name="idee4" id="idee4" class="form-control" placeholder="Les principales fonctions">
				<?php echo(nl2br($key['idee4'])) ?>
			</textarea>
		</div>

		<div class="col-md-12 form-group">
			<label>Quelle est la date probable du démarrage de vos activités?</label>
			<textarea name="idee5" id="idee5" class="form-control" placeholder="La date probable du démarrage ">
				<?php echo(nl2br($key['idee5'])) ?>
			</textarea>
		</div>

		<div class="col-md-12">
			<h4>Vos produits et/ou services</h4>
		</div>

		<div class="col-md-6 form-group">
			<label>Quels sont vos principaux produits et/ou services que vous proposez?</label>
			<textarea name="produit1" id="produit1" class="form-control" placeholder="principaux produits et/ou services ">
				<?php echo(nl2br($key['produit1'])) ?>
			</textarea>
		</div>

		<div class="col-md-6 form-group">
			<label>Quel est le caractère innovant du produit, du service, que vous proposez?</label>
			<textarea name="produit2" id="produit2" class="form-control" placeholder="le caractère innovant ">
				<?php echo(nl2br($key['produit2'])) ?>
			</textarea>
		</div>

		<div class="col-md-6 form-group">
			<label>A quel besoin du marché allez-vous répondre?</label>
			<textarea name="produit3" id="produit3" class="form-control" placeholder="le besoin du marché ">
				<?php echo(nl2br($key['produit3'])) ?>
			</textarea>
		</div>

		<div class="col-md-6 form-group">
			<label>Les produis seront-ils brevetables ou déjà brevetés?</label>
			<textarea name="produit4" id="produit4" class="form-control" placeholder="Les produis que vous allez proposer seront-ils brevetables ou déjà brevetés?">
				<?php echo(nl2br($key['produit4'])) ?>
			</textarea>
		</div>

		<div class="col-md-12">
			<h4>Vos clients</h4>
		</div>

		<div class="col-md-6 form-group">
			<label>Qui sont vos clients potentiels?</label>
			<textarea name="client1" id="client1" class="form-control" placeholder="vos clients potentiels">
				<?php echo(nl2br($key['client1'])) ?>
			</textarea>
		</div>

		<div class="col-md-6 form-group">
			<label>leurs pratiques en matière d'utilisation des produits que vous allez proposer</label>
			<textarea name="client2" id="client2" class="form-control" placeholder="Quelles sont leurs pratiques en matière d'utilisation des produits ou services que vous allez proposer?">
				<?php echo(nl2br($key['client2'])) ?>
			</textarea>
		</div>

		<div class="col-md-12 form-group">
			<label>S'intéressent-ils au produit ou aux services du vendeur?</label>
			<textarea name="client3" id="client3" class="form-control" placeholder="S'intéressent-ils au produit ou aux services du vendeur?">
				<?php echo(nl2br($key['client3'])) ?>
			</textarea>
		</div>

		<div class="col-md-12">
			<h4>Votre marché</h4>
		</div>

		<div class="col-md-6 form-group">
			<label>Quel marché ciblez-vous et pourquoi?</label>
			<textarea name="marche1" id="marche1" class="form-control" placeholder="le pourquoi de votre marché ciblé">
				<?php echo(nl2br($key['marche1'])) ?>
			</textarea>
		</div>

		<div class="col-md-6 form-group">
			<label>La taille du marché sur lequel vous comptez développer vos activités</label>
			<textarea name="marche2" id="marche2" class="form-control" placeholder="Quelle est la taille du marché sur lequel vous comptez développer vos activités commerciales?">
				<?php echo(nl2br($key['marche2'])) ?>
			</textarea>
		</div>

		<div class="col-md-12">
			<h4>Vos concurrents</h4>
		</div>

		<div class="col-md-6 form-group">
			<label>Quels sont les produits et/ou les services concurents(directs et indirects) déjà proposés sur le marché?</label>
			<textarea name="concurrence1" id="concurrence1" class="form-control" placeholder="Quels sont les produits et/ou les services concurents déjà proposés sur le marché?">
				<?php echo(nl2br($key['concurrence1'])) ?>
			</textarea>
		</div>

		<div class="col-md-6 form-group">
			<label>Comment vos produits et/ou services se différencient-ils de ceux existants sur le marché?</label>
			<textarea name="concurrence2" id="concurrence2" class="form-control" placeholder="Différence de vos produits sur le marché parraport aux produits de vos concurrents">
				<?php echo(nl2br($key['concurrence2'])) ?>
			</textarea>
		</div>

		<div class="col-md-12">
			<h4>Vos moyens</h4>
		</div>
		<div class="col-md-12">
			<h5>moyens matériels</h5> 
		</div>

		<div class="col-md-6 form-group">
			<label>Quels sont les moyens matériels dont vous disposez déjà?</label>
			<textarea name="moyen1" id="moyen1" class="form-control" placeholder="Quels sont les moyens matériels dont vous disposez déjà?">
				<?php echo(nl2br($key['moyen1'])) ?>
			</textarea>
		</div>

		<div class="col-md-6 form-group">
			<label>De quels moyens avez vous besoins pour mettre en oeuvre votre projet?</label>
			<textarea name="moyen2" id="moyen2" class="form-control" placeholder="De quels moyens avez vous besoins pour mettre en oeuvre votre projet( études à réaliser, formation du porteur de projet, matériels, locaux, moyens humains conseils, besoins et protections financières, etc)?">
				<?php echo(nl2br($key['moyen2'])) ?>
			</textarea>
		</div>

		<div class="col-md-12">
			<h5>moyens fincanciers</h5> 
		</div>

		<div class="col-md-6 form-group">
			<label>Quels sont les financements et les ressources financement dont vous disposez actuellement?</label>
			<textarea name="moyen3" id="moyen3" class="form-control" placeholder="Quels sont les financements et les ressources financement dont vous disposez actuellement?">
				<?php echo(nl2br($key['moyen3'])) ?>
			</textarea>
		</div>

		<div class="col-md-6 form-group">
			<label>Quels sont vos ressources financières personnelles pendant la période d'incubation  ?</label>
			<textarea name="moyen4" id="moyen4" class="form-control" placeholder="Quels sont vos ressources financières personnelles pendant la période d'incubation  ?">
				<?php echo(nl2br($key['moyen4'])) ?>
			</textarea>
		</div>

		<div class="col-md-12 form-group">
			<label>Quels sont les différents types de financements dont vous pourriez avoir besoin?</label>
			<textarea name="moyen5" id="moyen5" class="form-control" placeholder="Quels sont les différents types de financements dont vous pourriez avoir besoin?">
				<?php echo(nl2br($key['moyen5'])) ?>
			</textarea>
		</div>

		<div class="col-md-12">
			<h4>Le partenariat</h4> 
		</div>

		<div class="col-md-12 form-group">
			<label>Souhaitez-vous travailler en partenariat avec d'autre entreprises du même secteur d'activité?</label>
			<label class="form-check-label"><input type="radio" name="partenaire1" selected value="oui"
				<?php 

					if ($key['partenaire1'] == "oui") {
						# code...
						echo("selected");
					}
				 ?>
				 > oui</label>
			<label class="form-check-label"><input type="radio" name="partenaire1"  value="non"
				<?php 

					if ($key['partenaire1']=="non") {
						# code...
						echo("selected");
					}
				 ?>
				> non</label>
		</div>

		<div class="col-md-6 form-group">
			<label>Avez-vous déjà identifier certains partenaires potentiels? si oui, les quels?</label>
			<textarea name="partenaire2" id="partenaire2" class="form-control" placeholder="Avez-vous déjà identifier certains partenaires potentiels?">
				<?php echo(nl2br($key['partenaire2'])) ?>
			</textarea>
		</div>

		<div class="col-md-6 form-group">
			<label>Quelle opinion sur le travail en réseautage?</label>
			<textarea name="partenaire3" id="partenaire3" class="form-control" placeholder="Quelle opinion sur le travail en réseautage?">
				<?php echo(nl2br($key['partenaire3'])) ?>
			</textarea>
		</div>

		<div class="col-md-12">
			<h4>Forces et faiblesses de votre projet</h4> 
		</div>	

		<div class="col-md-6 form-group">
			<label>
				les difficultés potentielles qui sont obstacles pour votre entreprise
			</label>
			<textarea name="faiblesse1" id="faiblesse1" class="form-control" placeholder="Quelles sont les difficultés potentielles que vous pouvez rencontrer pour développer votre entreprise?">
				<?php echo(nl2br($key['faiblesse1'])) ?>
			</textarea>
		</div>

		<div class="col-md-6 form-group">
			<label>Quels sont les point fort de votre idée d'entreprise?<br></label>
			<textarea name="faiblesse2" id="faiblesse2" class="form-control" placeholder="Quels sont les point fort de votre idée d'entreprise?">
				<?php echo(nl2br($key['faiblesse2'])) ?>
			</textarea>
		</div>

		<div class="col-md-12">
			<h4>Information basique</h4> 
		</div>		

		<div class="col-md-3 form-group">
			<label>Entrez le nom de votre projet</label>
			<input type="text" name="nomP" id="nomP" class="form-control" placeholder="Nom du projet" required value="<?php echo(nl2br($key['nomP'])) ?>">
		</div>
		<div class="col-md-3 form-group">
			<label>Selectionner le logo du projet</label>
			<input type="file" name="logoP" id="logoP" class="form-control">
		</div>

		<div class="col-md-6 form-group">
			<label>Attacher tous le dossier.zib qui contient tous vos documents exigés ci-bas!</label>
			<input type="file" name="fichierzip" id="fichierzip" class="form-control">
		</div>

		<div class="col-md-12 mb-4">

			<input type="hidden" name="student_id" value="<?php echo(nl2br($key['student_id'])) ?>">

			<input type="submit" name="valider" id="valider" value="Editer votre projet" class="btn btn-hub btn-block">
			<hr>
		</div>

		<div class="col-md-8 form-group">
			
			<label class="text-dark">Les fichiers attachés expliquant clairement le dossier complet exigé de l'entreprise au compte du projet <?php echo(nl2br($key['nomP'])) ?>
				
				
				<a download="<?php echo(base_url()) ?>upload/projet/zip/<?php echo($key['fichierzip']) ?>" href="<?php echo(base_url()) ?>upload/projet/zip/<?php echo($key['fichierzip']) ?>" class="text-primary"><i class="fa fa-download mr-1"></i> Télécharger le document</a>
			</label>
		</div>
		<div class="col-md-4 form-group">
			<img src="<?php echo(base_url()) ?>upload/projet/logo/<?php echo($key['logoP']) ?>" class="img-thumbnail img-responsive">
		</div>

		


		<!-- detaille deux -->
		<?php //include('_inst2.php') ?>
		<!-- fin détail deux -->
		


		






		
	</form>
</div>