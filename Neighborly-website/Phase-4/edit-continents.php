<?php
session_start();
require '_includes/connect.php';
$editid = $_GET['eid'];
if(!isset($_GET['eid']) || empty($_GET['eid'])){
    header("location:continents.php");
}
$selectq = mysqli_query($conn, "select * from continents where continent_id = '{$editid}'") or die(mysqli_error($conn));
$selectrow = mysqli_fetch_array($selectq);

if($_POST) {
    $continent_id = $_POST['continent_id'];
    $continent_name = $_POST ['continent_name'];
    $get_continent=mysqli_query($conn,"select * from continents where continent_name='$continent_name'");
    if(mysqli_num_rows($get_continent)>0)
    {
        echo "Details Are Already Submitted / Duplicates found";
    }
    else {
        $updateq = mysqli_query($conn, "update continents set continent_name = '{$continent_name}' where continent_id = '{$editid}' ") or die(mysqli_error($conn));
        if ($updateq){
            echo "<script> alert('Record Updated'); </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Super Admin</title>

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
                    <a href="dashboard.php" class="d-block">Super Admin</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class

                       with font-awesome or any other icon font library -->

                    <li class="nav-item menu-open">
                        <a href="dashboard.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="continents.php" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Continents
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="countries.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Countries
                            </p>
                        </a>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="schools.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Schools
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="hospitals.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Hospitals
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="visit.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Places to Visit
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="users.php" class="nav-link">
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
                        <h1 class="m-0">Manage Continents</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Manage Continents</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Continent</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post">
                                <input type = "hidden" name = "continent_id" value="<?php echo $selectrow['continent_id'] ?>">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="continentnameinput">Select Continent</label>
                                        <select required type="text" class="form-control" value="<?php echo $selectrow['continent_name'] ?>" name="continent_name">
                                            <option value="" selected>Select Continent</option>
                                            <option value="AF">Africa</option>
                                            <option value="AN">Antarctica</option>
                                            <option value="AS">Asia</option>
                                            <option value="OC">Oceania</option>
                                            <option value="EU">Europe</option>
                                            <option value="NA">North America</option>
                                            <option value="SA">South America</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
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

</body>
</html>

