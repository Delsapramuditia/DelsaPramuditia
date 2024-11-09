<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Delsa</title>
    <!-- CSS Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Datatables -->
    <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8d3d3;
            color: #333;
        }
        .navbar {
            background-color: #f1a7a7;
        }
        footer {
            background-color: #f1a7a7;
        }
    </style>
</head>

<body>
    <header>
        <h1 class="text-center p-3">Selamat Datang!</h1>
    </header>

    <!-- menu -->
    <?php include "includes/navbar.php"; ?>
    <!-- menu -->

    <!-- konten -->
    <div class="container mt-3">
        <?php include "konten.php"; ?>
    </div>
    <!-- konten -->

    <footer class="text-bg-dark p-3 text-center mt-5">
        Pemrograman Web 1 @ <?= date("Y") ?>
    </footer>

    <!-- CDN jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="assets/datatables/dataTables.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    
    <script>
        new DataTable('#example');
    </script>
</body>
</html>