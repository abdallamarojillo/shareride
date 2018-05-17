<?php
require_once("../incs/conn.php");
require_once("../incs/authenticator.php");
$today = date('Y-m-d');
$month = date('F');
$month = strtoupper($month);

$sql = "SELECT * FROM rides WHERE date='".$today."'";
if($query = mysqli_query($dbc,$sql))
{
    $num = mysqli_num_rows($query);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>ShareRide</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <link href='../../assets/icons/MaterialIcons.css' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="green">
            <div class="">
                <a href="" class="simple-text">
                    <h2 class="text-gray text-center">ShareRide</h2>
                </a>
                
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="../rides">
                            <i class="material-icons">time_to_leave</i>
                            <p>Rides</p>
                        </a>
                    </li>
                    <li>
                        <a href="../functions/logout.php">
                            <i class="material-icons">power_settings_new</i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Dashboard</a>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">event_available</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Today's Rides :<br/> <?php echo $today; ?></p>
                                    <h3 class="title"><?php echo $num; ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">today</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">This Week's Rides : <br/> </p>
                                    <h3 class="title">33</h3> <!-- to add -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">date_range</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">This Month's Rides :<br/> <?php echo $month; ?></p>
                                    <h3 class="title">45</h3> <!-- to add -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Available Rides</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <?php
                                    $sql = "SELECT * FROM rides ORDER BY id DESC LIMIT 5";
                                    $query = mysqli_query($dbc,$sql) or die ("Failed to execute");
                                    $num = 1;
                                    ?>
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>No</th>
                                            <th>Origin</th>
                                            <th>Destination</th>
                                            <th>Vehicle Capacity</th>
                                        </thead>
                                        <?php
                                        while($row = mysqli_fetch_array($query))
                                        {
                                            ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $num++ ;?></td>
                                                <td><?php echo $row['origin'];?></td>
                                                <td><?php echo $row['destination'];?></td>
                                                <td><?php echo $row['capacity'];?></td>
                                            </tr>
                                        </tbody>
                                            <?php
                                        }
                                        ?>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h4 class="title">Rides Requested</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <?php
                                    $sql = "SELECT * FROM riders WHERE rider='".$_SESSION['username']."' ORDER BY id DESC LIMIT 5";
                                    $query = mysqli_query($dbc,$sql) or die ("Failed to execute");
                                    $num = 1;
                                    ?>
                                    <table class="table table-hover">
                                        <thead class="text-success">
                                            <th>No</th>
                                            <th>Origin</th>
                                            <th>Destination</th>
                                            <th>Date</th>
                                        </thead>
                                        <?php
                                        while($row = mysqli_fetch_array($query))
                                        {
                                            ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $num++ ;?></td>
                                                <td><?php echo $row['origin'];?></td>
                                                <td><?php echo $row['destination'];?></td>
                                                <td><?php echo $row['date'];?></td>
                                            </tr>
                                        </tbody>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../../assets/js/jquery.min.js" type="text/javascript"></script>
<script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/js/material.min.js" type="text/javascript"></script>

<!--  Dynamic Elements plugin -->
<script src="../../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../../assets/js/bootstrap-notify.js"></script>

<!-- Material Dashboard javascript methods -->
<script src="../../assets/js/material-dashboard.js?v=1.2.0"></script>


</html>