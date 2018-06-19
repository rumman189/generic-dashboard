<?php
require '../controller/tank_database.php';
$obj_tank = new Tank_database();
$query_result=$obj_tank->select_all_tank_info();
$notification_query=$obj_tank->select_all_notifications();
?>

<?php
include './menu_left.php';
?>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">Tank Details</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="material-icons">dashboard</i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>
                            <?php
                                include './notification_list.php';
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="material-icons">person</i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Tank List</h4>
                                    <p class="card-category"> This Table contains Tank ID and Last Status of the Tank</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th style="text-align:center">
                                                    ID
                                                </th>
                                                <th style="text-align:center">
                                                    Last Status
                                                </th>
                                                <th style="text-align:center">
                                                    Graphical view
                                                </th>
                                                <th style="text-align:center">
                                                    Informations
                                                </th>
                                                
                                            </thead>
                                            <tbody>
                                                <?php while ($tank_info = mysqli_fetch_assoc($query_result)) { ?>
                                                <tr>
                                                <td style="text-align:center">
                                                    <?php echo $tank_info['device_id']; ?>
                                                    </td>
                                                    <td>
                                                        <?php if($tank_info['tank_status']==1){
                                                                ?>
                                                                    <div class="alert alert-success">
                                                                        <span style="text-align:center"><b><?php echo 'Tank is Full'?></b></span>
                                                                    </div>
                                                                <?php
                                                                }
                                                                else{
                                                                ?>
                                                                <div class="alert alert-danger">
                                                                        <span style="text-align:center"><b><?php echo 'Tank is Empty'?></b></span>
                                                                    </div>
                                                                
                                                                <?php
                                                                }
                                                            ?>
                                                    </td>
                                                    <td style="text-align:center">
                                                    <?php if($tank_info['tank_status']==1){
                                                                ?>
                                                                <i class="material-icons">battery_full</i>
                                                                <?php
                                                                }
                                                                else{
                                                                ?>
                                                                <i class="material-icons">battery_alert</i>
                                                                <?php
                                                                }
                                                            ?>
                                                        
                                                        
                                                    </td>
                                                    <td style="text-align:left">
                                                    <b>Owner: </b><?php echo $tank_info['owner']; ?></br>
                                                    <b>Location: </b><?php echo $tank_info['location']; ?></br>
                                                    <b>Expected Time: </b><?php echo $tank_info['expected_time_empty']; ?> Hours
                                                    </td>
                                                
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <footer class="footer ">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="http://presentation.creative-tim.com">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/license">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with love by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/bootstrap-material-design.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!-- Library for adding dinamically elements -->
<script src="../assets/js/plugins/arrive.min.js" type="text/javascript"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="../assets/js/material-dashboard.js?v=2.0.0"></script>
<!-- demo init -->
<script src="../assets/js/plugins/demo.js"></script>
<!--

































 -->

</html>