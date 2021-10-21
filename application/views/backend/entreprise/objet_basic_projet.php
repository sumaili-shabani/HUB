<div class="col-md-12">

    <?php 

    if ($projects->num_rows() > 0) {

        foreach ($projects->result_array() as $key) {
            include('component/view_project.php');
        }
        # code...
    }
    else{

        echo('<div class="col-md-12">
            <h1>Pas de projet</h1>

        </div>');

    }

    ?>

	
</div>