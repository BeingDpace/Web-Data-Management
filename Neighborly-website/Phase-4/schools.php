<?php
session_start();
require '_includes/connect.php';

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
            <a href="continents.php" class="nav-link">
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
            <a href="schools.php" class="nav-link active">
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
            <h1 class="m-0">Manage Schools</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Manage Schools</li>
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
              <h3 class="card-title">List of Schools</h3>
              <a href="school-form.php" class="btn btn-primary float-right"> Add School
              </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S.N</th>
                  <th>School</th>
                  <th>City</th>
                  <th>Country</th>
                  <th>Action</th>
                </tr>
                </thead>
                  <?php
                  if(isset($_GET['did'])){
                      $did = $_GET['did'];
                      $delete_query = mysqli_query($conn, "delete from school where school_id = '{$did}'") or die(mysqli_error($conn));
                      if ($delete_query){
                          echo "<script> alert('Record Deleted'); </script>";
                      }
                  }

                  $query = mysqli_query($conn, "select * from school") or die(mysqli_error($conn));
                  $i = 0;
                  while($school_row = mysqli_fetch_array($query)){
                      $i++;
                      echo "<tr>";
                      echo "<td>$i</td>";
                      echo "<td>{$school_row["school_name"]} </td>";
                      echo "<td>{$school_row["city_name"]} </td>";
                      echo "<td>{$school_row["country_name"]} </td>";
                      echo "<td>
                        <a href='edit-schools.php?eid={$school_row['school_id']}' class='btn btn-primary'> Edit </a>
                        <a href='schools.php?did={$school_row['school_id']}' class='btn btn-danger'> Delete</a>
                        </td>";
                      echo"</tr>";
                  }
                  ?>

              </table>
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

</body>
</html>
