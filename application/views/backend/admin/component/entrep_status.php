 <div class="card-body">
    <div class="row">
        <div class="col-md-3 col-6"> <strong>Nom complet</strong>
            <br>
            <p class="text-muted"><?php echo($first_name) ?> <?php echo($last_name) ?></p>
        </div>
        <div class="col-md-3 col-6"> <strong>Téléphone</strong>
            <br>
            <p class="text-muted"><a href="tel:<?php echo($telephone) ?>" class="link"><?php echo($telephone) ?></a></p>
        </div>
        <div class="col-md-3 col-6"> <strong>Adresse mail</strong>
            <br>
            <p class="text-muted"><a href="mailto:<?php echo($email) ?>" class="link"><?php echo($email) ?></a></p>
        </div>
        <div class="col-md-3 col-6"> <strong>Adresse domicile</strong>
            <br>
            <p class="text-muted"><?php echo($nomp) ?> <?php echo($nomv) ?></p>
        </div>
    </div>
    <hr>


   <!-- competences -->
    <h5 class="mt-30"><i class="fa fa-tag"></i> Information Basiques De L'entreprise</h5>
    <hr>

    <div class="jf-jobdetailinfo">
		
		<ul class="list-group">
			<li class="list-group-item"><b >type d'entreprise:</b>    &nbsp;&nbsp; <span class="text-muted"><?php echo($typeEntrepE) ?></span></li>
			<li class="list-group-item"><b >mombre d'employés:</b>&nbsp;&nbsp; <span class="text-muted"><?php echo($nombreEmployeE) ?> personnes</span></li>
			<li class="list-group-item"><b >catégorie d'entreprise:</b>&nbsp;&nbsp; <span class="text-muted"><?php echo($nomcatE) ?></span></li>
			<li class="list-group-item"><b >emplacement domicile:</b> 
				&nbsp;&nbsp; <span class="text-muted"><?php echo($nompaysE) ?></span>
			</li>
			<li class="list-group-item"><b >Localisation:</b>
				&nbsp;&nbsp; <span class="text-muted"><?php echo($nompE) ?> <?php echo($nomvE) ?></span>
			</li>
			<li class="list-group-item"><b >site web:</b><strong><a href="<?php echo($sitewebE) ?>" class="text-info" target="_blank">&nbsp;&nbsp; <?php echo($sitewebE) ?></a></strong></li>
			<li class="list-group-item"><b >suivez l'entreprise sur :</b>
				<em>
				<a class="text-info text-center" href="<?php echo($facebookE) ?>" target="_blank">
					<i class="fa fa-facebook"></i> facebook
				</a> |

				<a class="text-info" href="<?php echo($twitterE) ?>" target="_blank">
					<i class="fa fa-twitter"></i> twitter
				</a> |

				<a class="text-info" href="<?php echo($linkedinE) ?>" target="_blank">
					<i class="fa fa-linkedin"></i> linkedin
				</a>

				</em>
			</li>
			
		</ul>
	</div>

   
    
</div>