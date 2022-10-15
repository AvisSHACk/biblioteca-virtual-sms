
<?php 
    session_start()
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ingreso Biblioteca</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="view/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="view/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="view/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="view/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="view/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="view/plugins/daterangepicker/daterangepicker.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="view/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="view/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="view/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!--===============================================================================================-->
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php 


        // require_once "paginas/login.php";

        if(isset($_GET['pagina'])) {
            if($_GET['pagina'] === "dashboard-inicio" ||
                $_GET['pagina'] === "dashboard-autor" ||
                $_GET['pagina'] === "dashboard-libro" ||
                $_GET['pagina'] === "dashboard-autor" ||
                $_GET['pagina'] === "dashboard-estudiantes" ||
                $_GET['pagina'] === "dashboard-administradores" ||
                $_GET['pagina'] === "dashboard-estanteria" ||
                $_GET['pagina'] === "dashboard-categoria" ||
                $_GET['pagina'] === "dashboard-prestamos" ||
                $_GET['pagina'] === "salir") {
                    include "paginas/" . $_GET["pagina"] . ".php";
                } else {
                    // include "paginas/error404.php"; 
                }
        } else {
            /*include "paginas/login.php";*/
        }

     ?>

<!-- jQuery -->
<script src="view/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="view/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- <script>
  $.widget.bridge('uibutton', $.ui.button)
</script> -->
<!-- Bootstrap 4 -->
<script src="view/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- daterangepicker -->
<script src="view/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="view/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- overlayScrollbars -->
<script src="view/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="view/dist/js/adminlte.js"></script>
<!-- DataTables  & Plugins -->
<script src="view/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="view/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="view/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="view/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="view/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="view/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="view/plugins/jszip/jszip.min.js"></script>
<script src="view/plugins/pdfmake/pdfmake.min.js"></script>
<script src="view/plugins/pdfmake/vfs_fonts.js"></script>
<script src="view/dist/js/tablefunction.js"></script>
</body>
</html>