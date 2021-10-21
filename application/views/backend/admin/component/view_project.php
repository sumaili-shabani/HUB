<div class="col-md-12">
	<div class="row">
		<!-- info personnel -->
		
		<div class="col-md-8 form-group">
			<label class="text-dark"><font class="text-danger">Nom du projet</font>: <font class="text-justify text-info"><?php echo(nl2br($key['nomP'])) ?></font></label>
			
			<label class="text-dark">Les fichiers attachés expliquant clairement le dossier complet exigé de l'entreprise au compte du projet <?php echo(nl2br($key['nomP'])) ?>

				<a download="<?php echo(base_url()) ?>upload/projet/zip/<?php echo($key['fichierzip']) ?>" href="<?php echo(base_url()) ?>upload/projet/zip/<?php echo($key['fichierzip']) ?>" class="text-primary"><i class="fa fa-download mr-1"></i> Télécharger le document</a>

			</label>
			
			
		</div>
		<div class="col-md-4 form-group">
			<img src="<?php echo(base_url()) ?>upload/projet/logo/<?php echo($key['logoP']) ?>" class="img-thumbnail img-responsive">
		</div>

		
		<!-- fin info personnel -->

		<!-- detail n1 -->
		<?php// include('_inst1.php') ?>
		<!-- fin detail n1 -->

		

		<div class="col-md-12">
			<h4>Votre idée</h4>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">Comment pourriez-vous définir votre idée(1 phrase)?</label>
			
			<div class="col-md-12">
				<?php echo(nl2br($key['idee1'])) ?>
			</div>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">Que ce qui est à l'origine de votre idée?</label>
			<div class="col-md-12">
				<?php echo(nl2br($key['idee2'])) ?>
			</div>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">Quels sont vos objectifs?</label>
			<div class="col-md-12">
				<?php echo(nl2br($key['idee3'])) ?>
			</div>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">Que pourraient être les principales fonctions de votre entreprise?</label>
			<div class="col-md-12">
				<?php echo(nl2br($key['idee4'])) ?>
			</div>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">Quelle est la date probable du démarrage de vos activités?</label>
			<div class="col-md-12">
				<?php echo(nl2br($key['idee5'])) ?>
			</div>
		</div>

		<div class="col-md-12">
			<h4>Vos produits et/ou services</h4>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">Quels sont vos principaux produits et/ou services que vous proposez?</label>
			
			<div class="col-md-12">
				<?php echo(nl2br($key['produit1'])) ?>
			</div>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">Quel est le caractère innovant du produit, du service, que vous proposez?</label>
			<div class="col-md-12">
				<?php echo(nl2br($key['produit2'])) ?>
			</div>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">A quel besoin du marché allez-vous répondre?</label>
			<div class="col-md-12">
				<?php echo(nl2br($key['produit3'])) ?>
			</div>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">Les produis que vous allez proposer seront-ils brevetables ou déjà brevetés?</label>
			<div class="col-md-12">
				<?php echo(nl2br($key['produit4'])) ?>
			</div>
		</div>

		<div class="col-md-12">
			<h4>Vos clients</h4>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">Qui sont vos clients potentiels?</label>
			
			<div class="col-md-12">
				<?php echo(nl2br($key['client1'])) ?>
			</div>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">leurs pratiques en matière d'utilisation des produits que vous allez proposer</label>
			<div class="col-md-12">
				<?php echo(nl2br($key['client2'])) ?>
			</div>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">S'intéressent-ils au produit ou aux services du vendeur?</label>
			<div class="col-md-12">
				<?php echo(nl2br($key['client3'])) ?>
			</div>
		</div>

		<div class="col-md-12">
			<h4>Votre marché</h4>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">Quel marché ciblez-vous et pourquoi?</label>
			
			<div class="col-md-12">
				<?php echo(nl2br($key['marche1'])) ?>
			</div>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">La taille du marché sur lequel vous comptez développer vos activités</label>
			<div class="col-md-12">
				<?php echo(nl2br($key['marche2'])) ?>
			</div>
		</div>

		<div class="col-md-12">
			<h4>Vos concurrents</h4>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">Quels sont les produits et/ou les services concurents(directs et indirects) déjà proposés sur le marché?</label>
			
			<div class="col-md-12">
				<?php echo(nl2br($key['concurrence1'])) ?>
			</div>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">Comment vos produits et/ou services se différencient-ils de ceux existants sur le marché?</label>
			<div class="col-md-12">
				<?php echo(nl2br($key['concurrence2'])) ?>
			</div>
		</div>

		<div class="col-md-12">
			<h4>Vos moyens</h4>
		</div>
		<div class="col-md-12">
			<h5>moyens matériels</h5> 
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">Quels sont les moyens matériels dont vous disposez déjà?</label>
			
			<div class="col-md-12">
				<?php echo(nl2br($key['moyen1'])) ?>
			</div>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">De quels moyens avez vous besoins pour mettre en oeuvre votre projet?</label>
			<div class="col-md-12">
				<?php echo(nl2br($key['moyen2'])) ?>
			</div>
		</div>

		<div class="col-md-12">
			<h5>moyens fincanciers</h5> 
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">Quels sont les financements et les ressources financement dont vous disposez actuellement?</label>
			<div class="col-md-12">
				<?php echo(nl2br($key['moyen3'])) ?>
			</div>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">Quels sont vos ressources financières personnelles pendant la période d'incubation  ?</label>
			<div class="col-md-12">
				<?php echo(nl2br($key['moyen4'])) ?>
			</div>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">Quels sont les différents types de financements dont vous pourriez avoir besoin?</label>
			<div class="col-md-12">
				<?php echo(nl2br($key['moyen5'])) ?>
			</div>
		</div>

		<div class="col-md-12">
			<h4>Le partenariat</h4> 
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">Souhaitez-vous travailler en partenariat avec d'autre entreprises du même secteur d'activité?</label>
			
			<div class="col-md-12">
				<?php echo(nl2br($key['partenaire1'])) ?>
			</div>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">Avez-vous déjà identifier certains partenaires potentiels? si oui, les quels?</label>
			<div class="col-md-12">
				<?php echo(nl2br($key['partenaire2'])) ?>
			</div>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">Quelle opinion sur le travail en réseautage?</label>
			<div class="col-md-12">
				<?php echo(nl2br($key['partenaire3'])) ?>
			</div>
		</div>

		<div class="col-md-12">
			<h4>Forces et faiblesses de votre projet</h4> 
		</div>	

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">
				les difficultés potentielles qui sont obstacles pour votre entreprise
			</label>
			
			<div class="col-md-12">
				<?php echo(nl2br($key['faiblesse1'])) ?>
			</div>
		</div>

		<div class="col-md-12 form-group">
			<label class="text-dark" style="font-size:17px;">Quels sont les point fort de votre idée d'entreprise?<br></label>
			<div class="col-md-12">
				<?php echo(nl2br($key['faiblesse2'])) ?>
			</div>
		</div>

		
		<!-- detaille deux -->
		<?php //include('_inst2.php') ?>
		<!-- fin détail deux -->

		<?php

			$url = base_url()."admin/operationProjet/detail/".$key['codeP'];

		?>

		<div class="col-md-12">
			<div class="row">

				<div class="col-md-12">
					<a href="<?= $url ?>" 
					class="btn btn-hub btn-sm btn-block"><i class="fa fa-edit mr-1"></i> Modifier le projet</a>
				</div>
				
			</div>
		</div>
		
		
	</div>
</div>