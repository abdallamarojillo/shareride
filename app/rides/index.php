<?php
require_once("../incs/conn.php");
require_once("../incs/authenticator.php");
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
	<link href="../../assets/css/main.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <link href='../../assets/icons/MaterialIcons.css' rel='stylesheet' type='text/css'>
    <link  href="../../assets/libs/sweet/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection"/>
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
                    <li>
                        <a href="../dashboard">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li  class="active">
                        <a href="">
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
                        <a class="navbar-brand" href="#"> Rides</a>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="green">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="active">
                                                    <a href="#gv-ride" data-toggle="tab">
                                                        <i class="material-icons">local_taxi</i> GIVE A RIDE
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#gt-ride" data-toggle="tab">
                                                        <i class="material-icons">transfer_within_a_station</i> GET A RIDE
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="gv-ride">
                                            <form id="gv-ride-Form">
                                                <div id="gv-ride-loader"></div>
                                                <div id="gv-success"></div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group label-floating">
                                                            <i class="material-icons">my_location</i>
                                                            <label class="control-label">Ride Origin</label>
                                                            <input type="text" class="form-control" id="gv-rideOrigin" name="gv-rideOrigin" required>
                                                            <div id="suggestion-box"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group label-floating">
                                                            <i class="material-icons">add_location</i>
                                                            <label class="control-label">Ride Destination</label>
                                                            <input type="text" class="form-control" id="gv-rideDestination" name="gv-rideDestination" required>
                                                            <div id="suggestion-box"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group label-floating">
                                                            <i class="material-icons">airline_seat_legroom_extra</i>
                                                            <label class="control-label">Vehicle Capacity (seats)</label>
                                                            <input type="text" class="form-control" id="gv-vehicleCapacity" name="gv-vehicleCapacity" required>
                                                            <div id="suggestion-box"></div>
                                                        </div>
                                                    </div>
                                                </div>                                               
                                                <div id="gv-ride-button">
                                                <button type="submit" class="btn btn-info pull-center">GIVE A RIDE</button>
                                                </div>
                                                <div class="clearfix"></div>
                                            </form>

                                        </div>
                                        <div class="tab-pane" id="gt-ride">
                                            <?php
                                            $sql = mysqli_query($dbc,"SELECT * FROM rides") or die ("Failed to execute");
                                            $num = mysqli_num_rows($sql);
                                            echo $num ." rides available";
                                            while($row = mysqli_fetch_array($sql))
                                            {
                                                ?>
                                          <div class="panel-group">
                                                <div class="panel panel-default">
                                                  <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                      <a data-toggle="collapse" href="#collapse-<?php echo $row['id']; ?>"><?php echo $row['origin'];?></a>
                                                    </h4>
                                                  </div>
                                                  <div id="collapse-<?php echo $row['id']; ?>" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                         <div class="row">
                                                            <div class="col-md-3">
                                                                <p><span class="text-info">Ride Origin:</span><br/><?php echo $row['origin'] ;?></p>
                                                            </div>
                                                             <div class="col-md-3">
                                                                <p><span class="text-info">Ride Destination:</span><br/><?php echo $row['destination'] ;?></p>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <p><span class="text-info">Username:</span><br/><?php echo $row['username'] ;?></p>
                                                            </div>
                                                             <div class="col-md-3">
                                                                <p><span class="text-info">Vehicle Capacity:</span><br/><?php echo $row['capacity'] ;?></p>
                                                            </div>
                                                             <div class="col-md-3">
                                                                <p><span class="text-info">Status:</span><br/><?php echo $row['status'] ;?></p>
                                                            </div>
                                                             <div class="col-md-3">
                                                                <p><span class="text-info">Date Added:</span><br/><?php echo $row['date'] ;?></p>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#book-<?php echo $row['id'];?>">
                                                                  Book Ride
                                                                </button>
                                                            </div>
                                                            <!-- Book Ride Modal Structure -->
                                                            <div id="book-<?php echo $row['id'];?>" class="modal fade" role="dialog">
                                                                <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                  <div class="modal-body">
                                                                     <form id="book-<?php echo $row['id'];?>">
                                                                     <h5>Confirm your booking</h5>
                                                                       <div class="form-group">
                                                                          <input type="hidden" id="<?php echo $row['id'];?>">
                                                                          <div class="col-md-3">
                                                                                <label>Ride Origin</label>
                                                                                <input id="origin-<?php echo $row['id'];?>" class="form-control" disabled type="text" name="origin"  value="<?php echo $row['origin'];?>">   
                                                                          </div>
                                                                          <div class="col-md-3">
                                                                                <label>Ride Destination</label>
                                                                                <input id="destination-<?php echo $row['id'];?>" class="form-control" disabled type="text" name="destination"  value="<?php echo $row['destination'];?>">   
                                                                          </div>
                                                                          <div class="col-md-3">
                                                                                <label>Ride Driver</label>
                                                                                <input id="user-<?php echo $row['username'];?>" class="form-control" disabled type="text" name="user"  value="<?php echo $row['username'];?>">   
                                                                          </div>
                                                                          
                                                                      </div><br/>
                                                                      <div class="modal-footer">
                                                                        <button onclick="bookRide(<?php echo $row['id'];?>)" class="btn btn-default" type="submit" name="update">BOOK THIS RIDE
                                                                           <i class="material-icons">send</i>
                                                                        </button>
                                                                      </div>
                                                                    </form>
                                                                     </div>
                                                                   </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                                                                                                                          
                                                <?php
                                            }
                                            ?>

                                        </div>
                                    </div>
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
<script src="../../assets/libs/sweet/sweetalert.min.js"></script>

<!-- Material Dashboard javascript methods -->
<script src="../../assets/js/material-dashboard.js?v=1.2.0"></script>
<script src="../functions/giveride.js"></script>
<script src="../functions/bookride.js"></script>


</html>