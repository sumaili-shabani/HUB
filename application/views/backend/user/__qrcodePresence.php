<div class="col-md-12">
	<div class="row">
		<div class="col-md-12 mb-2">
			<!-- <div class="alert alert-success text-center" id="qrcode_success" style="display: none;">
				<button class="close" data-dismiss="alert">x</button>
				présence ajoutée avec succès!!!
			</div> -->
		</div>
		<!-- script par default qrcode -->
		<div class="col-md-12 mb-2">


	        <div id="QR-Code" class="container" style="width:100%">
	            <div class="panel panel-primary">
	                <div class="panel-heading bg-hub" style="display: inline-block;width: 100%;">
	                    
	                    <div style="width:50%;float:right;margin-top: 5px;margin-bottom: 5px;text-align: right;">
	                    <select id="cameraId" class="form-control" style="display: inline-block;width: auto;"></select>
	                    <button id="save" data-toggle="tooltip" title="Image shoot" type="button" class="btn btn-info btn-sm disabled"><span class="glyphicon glyphicon-picture"><i class="fa fa-camera"></i></span></button>
	                    <button id="play" data-toggle="tooltip" title="Play" type="button" class="btn btn-success btn-sm play"><span class="glyphicon glyphicon-play"><i class="fa fa-play"></i></span></button>
	                    <button id="stop" data-toggle="tooltip" title="Stop" type="button" class="btn btn-warning btn-sm pause mr-4"><span class="glyphicon glyphicon-stop"><i class="fa fa-stop"></i></span></button>
	                    
	                </div>
	            </div>
	            <div class="panel-body">
	                <div class="col-md-12">

	                	<div class="row">

	                		<!-- scan -->
	                		<div class="col-md-6 my_webcame" style="text-align: center;">
			                    <div class="well" style="position: relative;display: inline-block;">
			                        <canvas id="qr-canvas" width="320" height="240"></canvas>
			                        <!-- <canvas></canvas> -->
			                        <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
			                        <div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
			                        <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
			                        <div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
			                    </div>

			                     <div class="caption">
		                            <h6 class="text-muted">Résultat scanné</h6>
		                            <div class="col-md-12 text-center qrcode_success">
		                            	<p id="scanned-QR"></p>
		                            </div>
		                        </div>
			                  
			                </div>
	                		<!-- fin scan -->

	                		<!-- resultat sur tableau -->
	                		<div class="col-md-6 mb-2">
			
								<div class="col-md-12 table-responsive">
									<table id="my_table" class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" role="grid" aria-describedby="DataTables_Table_1_info" style="display: none;">
										<thead>
											<tr>  
					                             <th width="5%">Téléphone</th>  
					                             <th width="15%">Image</th> 
					                             <th width="30%">Nom complet </th>  
					                             <th width="5%">Sexe</th> 
					                             <th width="45%">Mise à jour</th> 
					                        </tr>  
										</thead>
										<tbody>
											
										</tbody>
										<tfoot>
											<tr>  
					                             <th width="5%">Téléphone</th>  
					                             <th width="15%">Image</th> 
					                             <th width="30%">Nom complet </th>  
					                             <th width="5%">Sexe</th> 
					                             <th width="45%">Mise à jour</th>  
					                        </tr>  
										</tfoot>
									</table>
								</div>
					        
							</div>
	                		<!-- fin resultat -->
	                		

	                	</div>
	                	
	                </div>
	                
	            </div>
	            <div class="panel-footer">
	            </div>
	        </div>
	    </div>
			
		</div>
		<!-- fin de script -->


		
		
	</div>
</div>