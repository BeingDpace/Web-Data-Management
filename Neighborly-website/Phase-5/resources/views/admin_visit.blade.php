<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "testdb";
$conn = mysqli_connect($host, $username, $password, $database);
if(!$conn){
    echo "DB CONNECTION ERROR";
    die();
}

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
  <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
@extends('layouts.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('images/admin.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('admin_dashboard') }}" class="d-block">Admin</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class

             with font-awesome or any other icon font library -->

             <li class="nav-item menu-open">
               <a href="{{ url('admin_dashboard') }}" class="nav-link">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                   Dashboard
                   <i class="right fas fa-angle-left"></i>
                 </p>
               </a>
             </li>
          <li class="nav-item menu-open">
            <a href="{{ url('admin_countries') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Countries
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="{{ url('admin_schools') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Schools
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ url('admin_hospitals') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Hospitals
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ url('admin_visit') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Places to Visit
              </p>
            </a>
          </li>
            <li class="nav-item menu-open">
                <a href="{{ url('admin_users') }}" class="nav-link">
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
            <h1 class="m-0">Manage Places to Visit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Manage Places to Visit</li>
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
              <h3 class="card-title">List of Places</h3>
              <a href="{{url('admin-visit-form')}}" class="btn btn-primary float-right"> Add Place
              </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Place's Name</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <?php
                    if(isset($_GET['did'])){
                        $did = $_GET['did'];
                        $delete_query = mysqli_query($conn, "delete from place where place_id = '{$did}'") or die(mysqli_error($conn));
                        if ($delete_query){
                            echo "<script> alert('Record Deleted'); </script>";
                        }
                    }

                    $query = mysqli_query($conn, "select * from place") or die(mysqli_error($conn));
                    $i = 0;
                    while($place_row = mysqli_fetch_array($query)){
                        $i++;
                        echo "<tr>";
                        echo "<td>$i</td>";
                        echo "<td>{$place_row["place_name"]} </td>";
                        echo "<td>{$place_row["city_name"]} </td>";
                        echo "<td>{$place_row["country_name"]} </td>";
                        echo "<td>
                        <a href='edit_admin_visit.php?eid={$place_row['place_id']}' class='btn btn-primary'> Edit </a>
                        <a href='admin_visit.php?did={$place_row['place_id']}' class='btn btn-danger'> Delete</a>
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
@extends('layouts.footer')<!-- /.main-footer -->
</div>

</body>
</html>
