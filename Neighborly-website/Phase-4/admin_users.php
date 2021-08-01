<?php
session_start();
require '_includes/connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="_css/admin.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <?php
    include "_includes/navbar.php";

    ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="_images/admin.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="dashboard.php" class="d-block">Admin</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class

                       with font-awesome or any other icon font library -->

                    <li class="nav-item menu-open">
                        <a href="admin_dashboard.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="admin_countries.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Countries
                            </p>
                        </a>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="admin_schools.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Schools
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="admin_hospitals.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Hospitals
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="admin_visit.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Places to Visit
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="admin_users.php" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Users
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Users</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">

                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Users Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Country</th>
                                        <th>Reason For Leaving</th>
                                    </tr>
                                    </thead>
                                    <?php
                                    $query = mysqli_query($conn, "select * from user") or die(mysqli_error($conn));
                                    $i = 0;
                                    while($place_row = mysqli_fetch_array($query)){
                                        $i++;
                                        echo "<tr>";
                                        echo "<td>$i</td>";
                                        echo "<td>{$place_row["fname"]} </td>";
                                        echo "<td>{$place_row["lname"]} </td>";
                                        echo "<td>{$place_row["country"]} </td>";
                                        echo "<td>{$place_row["reason_for_leaving"]} </td>";
                                        echo"</tr>";
                                    }
                                    ?>
                                </table>
                                <br>
                                <button onclick="exportTableToCSV('users.csv')" class='btn btn-primary'>Export To CSV File</button>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <?php
    include "_includes/footer.php";

    ?><!-- /.main-footer -->
</div>
<script >
    function exportTableToCSV(filename) {
        var csv = [];
        var rows = document.querySelectorAll("table tr");
        for (var i = 0; i < rows.length; i++) {
            var row = [], cols = rows[i].querySelectorAll("td, th");
            for (var j = 0; j < cols.length; j++)
                row.push(cols[j].innerText);
            csv.push(row.join(","));
        }
        // Download CSV file
        downloadCSV(csv.join("\n"), filename);
    }
    function downloadCSV(csv, filename) {
        var csvFile;
        var downloadLink;
        // CSV file
        csvFile = new Blob([csv], {type: "text/csv"});
        // Download link
        downloadLink = document.createElement("a");
        // File name
        downloadLink.download = filename;
        // Create a link to the file
        downloadLink.href = window.URL.createObjectURL(csvFile);
        // Hide download link
        downloadLink.style.display = "none";
        // Add the link to DOM
        document.body.appendChild(downloadLink);
        // Click download link
        downloadLink.click();
    }
</script>
</body>
</html>


