

<?php
include './menu_left.php';
?>
<div class="main-panel">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Profile</a>
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
                <li class="nav-item dropdown">
                    <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">notifications</i>
                        <span class="notification">5</span>
                        <p>
                            <span class="d-lg-none d-md-block">Some Actions</span>
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Mike John responded to your email</a>
                        <a class="dropdown-item" href="#">You have 5 new tasks</a>
                        <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                        <a class="dropdown-item" href="#">Another Notification</a>
                        <a class="dropdown-item" href="#">Another One</a>
                    </div>
                </li>
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
<div class="content ">
        <div class="container-fluid">
                <div class="card">
                        <div class="card-header card-header-primary">
                                <h4 class="card-title">Invoice</h4>
                                <p class="card-category">Created using Roboto Font Family</p>
                            </div>
                            <div class="card-body">
    <div class="ebody">
    <header class="clearfix">
        <div id="logo">
          <img src="../assets/img/logo.png">
        </div>
        <div id="company">
          <h2 class="name">Company Name</h2>
          <div>455 Foggy Heights, AZ 85004, US</div>
          <div>(602) 519-0450</div>
          <div><a href="mailto:company@example.com">company@example.com</a></div>
        </div>
        
      </header>
      <main>
        <div id="details" class="clearfix">
          <div id="client">
            <div class="to">INVOICE TO:</div>
            <h2 class="name">John Doe</h2>
            <div class="address">796 Silver Harbour, TX 79273, US</div>
            <div class="email"><a href="mailto:john@example.com">john@example.com</a></div>
          </div>
          <div id="invoice">
            <h1>INVOICE 3-2-1</h1>
            <div class="date">Date of Invoice: 01/06/2014</div>
            <div class="date">Due Date: 30/06/2014</div>
          </div>
        </div>
        <table border="0" cellspacing="0" cellpadding="0">
          <thead>
            <tr>
              <th class="no">#</th>
              <th class="desc">DESCRIPTION</th>
              <th class="unit">UNIT PRICE</th>
              <th class="qty">QUANTITY</th>
              <th class="total">TOTAL</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="no">01</td>
              <td class="desc"><h3>Website Design</h3>Creating a recognizable design solution based on the company's existing visual identity</td>
              <td class="unit">$40.00</td>
              <td class="qty">30</td>
              <td class="total">$1,200.00</td>
            </tr>
            <tr>
              <td class="no">02</td>
              <td class="desc"><h3>Website Development</h3>Developing a Content Management System-based Website</td>
              <td class="unit">$40.00</td>
              <td class="qty">80</td>
              <td class="total">$3,200.00</td>
            </tr>
            <tr>
              <td class="no">03</td>
              <td class="desc"><h3>Search Engines Optimization</h3>Optimize the site for search engines (SEO)</td>
              <td class="unit">$40.00</td>
              <td class="qty">20</td>
              <td class="total">$800.00</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="2"></td>
              <td colspan="2">SUBTOTAL</td>
              <td>$5,200.00</td>
            </tr>
            <tr>
              <td colspan="2"></td>
              <td colspan="2">TAX 25%</td>
              <td>$1,300.00</td>
            </tr>
            <tr>
              <td colspan="2"></td>
              <td colspan="2">GRAND TOTAL</td>
              <td>$6,500.00</td>
            </tr>
          </tfoot>
        </table>
        <div id="thanks">Thank you!</div>
        <form method="post" action="send_mail.php">
            
        <h5><b>send invoice to email :</b><b> rumman3000@gmail.com</b> <span><input type="submit" value="Send Email"></button></span></h5>
</form>
<br>
        <div id="notices">
          <div>NOTICE:</div>
          <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
        </div>
      </main>
    </div>
    </div>
</div>

        </div>
</div>
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
