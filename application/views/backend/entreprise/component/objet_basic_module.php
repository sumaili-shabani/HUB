<div class="col-md-12">
	<div class="row mb-2">
      <div class="col-md-6 form-inline">
           <select class="form-control" id="limit">
              <option value="">Filtrage</option>
              <option value="2">2</option>
              <option value="10">10</option>
              <option value="25">25</option>
              <option value="50">50</option>
              <option value="100">100</option>
            </select>
            &nbsp;&nbsp;
            <a href="" class="btn btn-outline-warning mr-2"><i class="fa fa-refresh"></i></a>
           
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-4">
       <div class="col-md-12">
         <div class="row">
           <div class="col-md-12">
              <div class="form-group">
                <div class="input-group mt-3">
                  
                   <input type="text" name="search_text" id="search_text" placeholder="Rechercher un module..." class="form-control mt-2 mr-1" value="<?php
                    if(isset($token)){
                      echo($token);
                    }
                    else{

                    }
                    ?>" />
                    <span class="input-group-addon  btn btn-hub mr-1" style="margin-top: 5px;"><i class="fa fa-search"></i> </span>
                </div>
              </div>
           </div>
         </div>
       </div>
      </div>
    </div>

    <div class="table-responsive" id="country_table" style="margin-top: 10px;">
		                            
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


</div>

