<?php
    include("../Class/ClassCrud.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>S.A.S Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../frameworks/dashboard/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../frameworks/dashboard/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../frameworks/dashboard/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../frameworks/dashboard/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../frameworks/dashboard/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../frameworks/dashboard/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>

                <!-- TABLE: LATEST ORDERS -->
                <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Banco</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table class="table no-margin">
                  <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Email recuperação</th>
                        <th>Senha</th>
                        <th>Nivel</th>
                        <th>Logado</th>
                        <th>Img</th>
                      </tr>
                    </thead>
                    <tbody> 
                            
                    <?php
                         $Crud = new ClassCrud();
                        $BFetch=$Crud ->selectDB(
                        "*",
                        "tb_login",
                        "",
                        array()
                        );
                        while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
                    ?>
                      <tr>
                        <th><?php echo $Fetch['Id'];?></th>
                        <th><?php echo $Fetch['Nome'];?></th>
                        <th><?php echo $Fetch['Email'];?></th>
                        <th><?php echo $Fetch['Email_rec'];?></th>  
                        <th><?php echo $Fetch['Senha'];?></th>
                        <th><?php echo $Fetch['Nivel'];?></th>  
                        <th><?php echo $Fetch['Logado'];?></th>  
                        <th><?php echo $Fetch['Img'];?></th>      
                        <th>
                            <a href="EditarUsuario.php?id={$Fetch['Id']}"><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:24px;color:black"></i></a>
                            <a class="Deletar" href="<?php echo "Controllers/ControllerDeletar.php?id={$Fetch['Id']}"; ?>"><i class="fa fa-trash-o" style="font-size:24px;color:black"></i></a>
                        </th>   
                      </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
              </div>
              <!-- /.box-footer -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->

           <script src="../frameworks/dashboard/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../frameworks/dashboard/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="../frameworks/dashboard/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="../frameworks/dashboard/dist/js/adminlte.min.js"></script>
  <!-- Sparkline -->
  <script src="../frameworks/dashboard/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap  -->
  <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- SlimScroll -->
  <script src="../frameworks/dashboard/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- ChartJS -->
  <script src="../frameworks/dashboard/chart.js/Chart.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../frameworks/dashboard/dist/js/pages/dashboard2.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../frameworks/dashboard/dist/js/demo.js"></script>
  <script>
    $(document).ready(function () {
      $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myList li").filter(function () {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
</body>