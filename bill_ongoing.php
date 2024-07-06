<?php
include 'dbconnection.php';
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Super Mart</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .table td,
        .table th {
            padding: 0;
        }
    </style>
</head>

<body id="page-top">

    <?php
    include 'header.php';
    ?>


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-2">
            <h1 class="h3 mb-0 text-gray-800">Ongoing Bills</h1>
        </div>

        <!-- Content Row -->
        <div class="row" id="showbill">
        </div>
        <?php
        include 'footer.php';
        ?>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <script>
            function showbill() {
                let showbill = "showbill";
                $.ajax({
                    url: "bill_ongoing_backend.php",
                    type: "POST",
                    data: {
                        showbill: showbill,
                    },
                    success: function(data, status) {
                        document.getElementById("showbill").innerHTML = data;
                    }
                });
            }
            showbill();
            setInterval(function() {
                showbill();
            }, 5000);
        </script>
</body>

</html>