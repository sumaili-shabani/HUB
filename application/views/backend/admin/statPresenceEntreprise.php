<!DOCTYPE html>
<html lang="fr">

<head>

   <?php include('_meta.php') ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      <?php include('_navigation.php') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('_menuheader.php') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid mb-4">

                   <div class="col-md-12 card">
                       <div class="row card-body">
                           <!-- mes script commencent -->
                            <?php include("__stat_filtrePresence_users_.php") ?>
                            <!-- fin de mes scripts -->
                       </div>
                   </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('_footer.php') ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

   
   <?php include('_script.php') ?>

  <script type="text/javascript">
    var chart = new CanvasJS.Chart("chartContainer", {
        theme: "theme2",
        animationEnabled: true,
        title: {
            text: ""
        },
        data: [
          {
              type: "column",
              toolTipContent: "<span style=\"color:#4F81BC\"></span> {y} <strong>{name} </strong>",
                name: "Personne(s)",
              showInLegend: true,
                legendText: "{indexLabel}",                
              dataPoints: [<?php echo $chart_data; ?>]
          }
        ]
    });
    chart.render();

    var chart = new CanvasJS.Chart("chartContainer2", {
        theme: "theme2",
        animationEnabled: true,
        title: {
            text: ""
        },
        data: [
          {
              type: "pie",
              toolTipContent: "<span style=\"color:#4F81BC\"></span> {y} <strong>{name} </strong>",
                name: "Personne(s)",
              showInLegend: true,
                legendText: "{indexLabel}",                
              dataPoints: [<?php echo $chart_data; ?>]
          }
        ]
    });
    chart.render();

 </script>

</body>

</html>