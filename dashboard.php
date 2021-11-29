<?php 
    require_once("db.php");
    /*Total*/
    $tot_query = "SELECT FORMAT((Sum(sanc_amt)/10000000),2) AS Sancamt, FORMAT((Sum(tot_amt)/10000000),2) AS Expamt, Count(proj.prj_cd) AS Project FROM proj";
    $tot = mysqli_query($con, $tot_query);
    while($row=mysqli_fetch_assoc($tot))
    {
        $tot_eamt = $row["Sancamt"];
        $tot_tamt = $row["Expamt"];
        $tot_tprj = $row["Project"];        
    }
    /*Minning*/
    $mng_query = "SELECT Format((Sum(sanc_amt)/10000000),2) AS Sancamt, Format((Sum(tot_amt)/10000000),2) AS Expamt, Count(proj.prj_cd) AS Project FROM proj LEFT JOIN gp ON proj.gp_cd = gp.gp_cd WHERE (((gp.minning)='M'))";
    $mng = mysqli_query($con, $mng_query);
    while($row=mysqli_fetch_assoc($mng))
    {
        $mng_eamt = $row["Sancamt"];
        $mng_tamt = $row["Expamt"];
        $mng_tprj = $row["Project"];        
    }
 /*Non-Minning*/
    $nmng_query = "SELECT Format((Sum(sanc_amt)/10000000),2) AS Sancamt, Format((Sum(tot_amt)/10000000),2) AS Expamt, Count(proj.prj_cd) AS Project FROM proj LEFT JOIN gp ON proj.gp_cd = gp.gp_cd WHERE (((gp.minning)='N'))";
    $nmng = mysqli_query($con, $nmng_query);
  while($row=mysqli_fetch_assoc($nmng))
    {
        $nmng_eamt = $row["Sancamt"];
        $nmng_tamt = $row["Expamt"];
        $nmng_tprj = $row["Project"];        
    }
  /*Priority*/
    $pr_query = "SELECT  FORMAT((Sum(sanc_amt)/10000000),2) AS Sancamt, FORMAT((Sum(tot_amt)/10000000),2) AS Expamt,Count(proj.prj_cd) AS Project FROM proj LEFT JOIN sector ON proj.sec_cd = sector.sec_cd WHERE (((sector.sec_tp)='H'))";
    $pr = mysqli_query($con, $pr_query);
    while($row=mysqli_fetch_assoc($pr))
    {
        $pr_eamt = $row["Sancamt"];
        $pr_tamt = $row["Expamt"];
        $pr_tprj = $row["Project"];        
    }
 /*Other Priority*/
    $opr_query = "SELECT  FORMAT((Sum(sanc_amt)/10000000),2) AS Sancamt, FORMAT((Sum(tot_amt)/10000000),2) AS Expamt,Count(proj.prj_cd) AS Project FROM proj LEFT JOIN sector ON proj.sec_cd = sector.sec_cd WHERE (((sector.sec_tp)='O'))";
    $opr = mysqli_query($con, $opr_query);
  while($row=mysqli_fetch_assoc($opr))
    {
        $opr_eamt = $row["Sancamt"];
        $opr_tamt = $row["Expamt"];
        $opr_tprj = $row["Project"];        
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>District Mineral Foundation Trust (DMFT), Ramgarh | RTI</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="DMFT Ramgarh, Ramgarh,District mineral foundation, Coal minenig, Mineral, Jharkhand, Ramgarh.nic, Collectorate Ramgarh, ramgarh online, Online Ramgarh, One system ramgarh, DMFT PMU Ramgarh, PMU Ramgarh" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
  <!-- w3-banner -->
  <div class="w3-banner-1 jarallax">
    
      <div class="w3layouts-header-top">
        <div class="container">
          <div class="w3-header-top-grids">
            <div class="w3-header-top-left">
              <p><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +91 6553 295 309</p>
            </div>
            <div class="w3-header-top-right">
              <div class="agileinfo-social-grids">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
              <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
      <div class="head">
        <div class="container">
          <div class="navbar-top">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                 <div class="navbar-brand logo ">
                  <h1><a href="index.html">DMFT Ramgarh</a></h1>
                </div>

              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav link-effect-4">
                <li><a href="index.html">Home</a></li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-letters="Pages">About</span><span class="caret"></span></a>
                  <ul class="dropdown-menu"> 
                    <li><a href="about.html">About DMFT</a></li>
                    <li><a href="files/DMFT_Ramgarh_Trust_Registration_Deed.pdf" target="_blank" >DMFT Registration</a></li>
                    <li><a href="files/Managing_Committee_Ramgarh.pdf" target="_blank" >Managing Committee</a></li>
                              <li><a href="files/Governing_Council_Ramgarh.pdf" target="_blank" >Governing Council</a></li>
                              <li><a href="files/Affected_panchayats.pdf" target="_blank" >Affected Area</a></li>
                              <li><a href="files/DMFT_Overview.pdf" target="_blank" >DMFT Overview</a></li>
                  </ul>
                </li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-letters="Pages">Guideline</span><span class="caret"></span></a>
                  <ul class="dropdown-menu"> 
                    <li><a href="files/PMKKKY_Guidelines_Eng.pdf" target="_blank" >PMKKKY Guideline(English)</a></li>
                              <li><a href="files/PMKKKY_Guidlines_Hindi.pdf" target="_blank" >PMKKKY Guideline(Hindi)</a></li>
                              <li><a href="files/DMFT_MOM_9th_August_2016.pdf" target="_blank" >DMFT MOM 9th August 2016</a></li>
                              <li><a href="files/Jharkhand_DMF_Gazette_24_Nov_2015.pdf" target="_blank" >Jharkhand DMF Gazette (24th November 2015)</a></li>
                    <li><a href="files/Jharkhand_DMF_Gazette_22_Mar_2016.pdf" target="_blank" >Jharkhand DMF Gazette (22nd March 2016)</a></li>
                              <li><a href="files/Jharkhand_DMF_Gazette_21_Apr_2016.pdf" target="_blank" >Jharkhand DMF Gazette (21st April 2016)</a></li>
                              <li><a href="files/Jharkhand_DMF_Gazette_13_Jan_2017.pdf" target="_blank" >Jharkhand DMF Gazette (13th January 2017)</a></li>
                              <li><a href="files/Jharkhand_DMF_Gazette_3_Feb_2017.pdf" target="_blank" >Jharkhand DMF Gazette (3rd February 2017)</a></li>  
                  </ul>
                </li>      
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-letters="Pages">DMF Works</span><span class="caret"></span></a>
                  <ul class="dropdown-menu"> 
                    <li><a href="files/DMFT_scheme_details.pdf" target="_blank">DMFT Projects</a></li>
                    <li><a href="reports.html">DMFT Reports</a></li>
                    <li><a href="mom.html">Meeting Proceedings</a></li>
                    <li><a href="dashboard.php">DMFT Dashboard</a></li>
                  </ul>
                </li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-letters="Pages">Notification</span><span class="caret"></span></a>
                  <ul class="dropdown-menu"> 
                    <li><a href="#">Notice</a></li>
                    <li><a href="#">Tenders</a></li>
                    <li><a href="#">News and Events</a></li>
                    <!-- <li><a href="codes.html">Media</a></li> -->
                  </ul>
                </li>
                <li><a href="rti.html">RTI</a></li>
                <li><a href="contact.html">Contact</a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div>
        </div>
      </div>
  </div>

  <!-- Dashboard -->
  <div class="typo">
    <div class="container">
      <div class="w3ls-title"> 
        <h2 class="agileits-title">DMFT Dashboard</h2>
      </div>
       <div class="row">
          <table class="table table-hover">
            <tbody>
                <tr>
                  <td><label><h3>Total Sanctioned : <?php echo $tot_eamt;?> Cr.</h3></label></td>
                  <td><label><h3>Total Expenditure : <?php echo $tot_tamt;?> Cr.</h3></label></td>
                  <td><label><h3>Total Projects : <?php echo $tot_tprj;?> Nos</h3></label></td>
                </tr> 
            </tbody>
          </table>
        </div>  
      <div class="grid_3 grid_4">
         <!-- Affected Area -->
        <div class="grid_3 grid_5 wthree">
          <div class="col-md-6 agileits-w3layouts">
            <h3 class="hdg">Directly Affected Area</h3>
            <p>This is the Fund details of Directly Minning affected area.</p>
            <table class="table table-bordered">
            <thead>
              <tr>
                <th>Particulars</th>
                <th>Funds</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sanctioned Amount :</td>
                <td><?php echo $mng_eamt;?> Cr.</td>
              </tr>
              <tr>
                <td>Expenditure Amount :</td>
                <td><?php echo $mng_tamt;?> Cr.</td>
              </tr>
              <tr>
                <td>Number of Projects :</td>
                <td><?php echo $mng_tprj;?> Nos</td>
              </tr>
            </tbody>
            </table>                    
          </div>
          <div class="col-md-6 w3-agileits">
          <h3 class="hdg">Indirectly Affected Area</h3>
            <p>This is the Fund details of indirectly Minning affected area.</p>
            <table class="table table-bordered">
            <thead>
              <tr>
                <th>Particulars</th>
                <th>Funds</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sanctioned Amount :</td>
                <td><?php echo $nmng_eamt;?> Cr.</td>
              </tr>
              <tr>
                <td>Expenditure Amount :</td>
                <td><?php echo $nmng_tamt;?> Cr.</td>
              </tr>
              <tr>
                <td>Number of Projects :</td>
                <td><?php echo $nmng_tprj;?> Nos</td>
              </tr>
            </tbody>
            </table>    
          </div>
        </div>
        <!-- Priority Area -->
        <div class="grid_3 grid_5 wthree">
          <div class="col-md-6 agileits-w3layouts">
            <h3 class="hdg">High Priority Area</h3>
            <p>This is the Fund details of High Priority area.</p>
            <table class="table table-bordered">
            <thead>
              <tr>
                <th>Particulars</th>
                <th>Funds</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sanctioned Amount :</td>
                <td><?php echo $pr_eamt;?> Cr.</td>
              </tr>
              <tr>
                <td>Expenditure Amount :</td>
                <td><?php echo $pr_tamt;?> Cr.</td>
              </tr>
              <tr>
                <td>Number of Projects :</td>
                <td><?php echo $pr_tprj;?> Nos</td>
              </tr>
            </tbody>
            </table>                    
          </div>
          <div class="col-md-6 w3-agileits">
          <h3 class="hdg">Other Priority Area</h3>
            <p>This is the Fund details of Other Priority area.</p>
            <table class="table table-bordered">
            <thead>
              <tr>
                <th>Particulars</th>
                <th>Funds</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sanctioned Amount :</td>
                <td><?php echo $opr_eamt;?> Cr.</td>
              </tr>
              <tr>
                <td>Expenditure Amount :</td>
                <td><?php echo $opr_tamt;?> Cr.</td>
              </tr>
              <tr>
                <td>Number of Projects :</td>
                <td><?php echo $opr_tprj;?> Nos</td>
              </tr>
            </tbody>
            </table>    
          </div>
        </div>
        <!-- End of Priority Area -->
      </div>
    </div>
  </div>

<!-- footer -->
    <div class="agileits-w3layouts-footer">
      <div class="container">
        <div class="col-md-4 w3-agile-grid">
          <h5>About Us</h5>
          <p>District Mineral Fund Trust (DMFT) is a Trust that would function as a non-profit body to “work for the interest and benefit of persons, and areas affected by mining related operations.</p>
          <div class="footer-agileinfo-social">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/DMFT_Ramgarh" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-rss"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 w3-agile-grid">
          <h5>Recent Projects</h5>
          <div class="w3ls-post-grids">
            <div class="w3ls-post-grid">
              <div class="w3ls-post-img">
                <a href="#"><img src="images/pro1.jpg" alt="" /></a>
              </div>
              <div class="w3ls-post-info">
                <h6><a href="#" data-toggle="modal" data-target="#myModal">Rural Water Supply Scheme</a></h6>
                <p>Sept 24,2021</p>
              </div>
              <div class="clearfix"> </div>
            </div>
            <div class="w3ls-post-grid">
              <div class="w3ls-post-img">
                <a href="#"><img src="images/pro4.jpg" alt="" /></a>
              </div>
              <div class="w3ls-post-info">
                <h6><a href="#" data-toggle="modal" data-target="#myModal">Library Bhawan</a></h6>
                <p>April 25,2021</p>
              </div>
              <div class="clearfix"> </div>
            </div>
            <div class="w3ls-post-grid">
              <div class="w3ls-post-img">
                <a href="#"><img src="images/pro8.jpg" alt="" /></a>
              </div>
              <div class="w3ls-post-info">
                <h6><a href="#" data-toggle="modal" data-target="#myModal">Blood Bank</a></h6>
                <p>Nov 06,2020</p>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 w3-agile-grid">
          <h5>Address</h5>
          <div class="w3-address">
            <div class="w3-address-grid">
              <div class="w3-address-left">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </div>
              <div class="w3-address-right">
                <h6>Phone Number</h6>
                <p>+91 6553 295 309</p>
              </div>
              <div class="clearfix"> </div>
            </div>
            <div class="w3-address-grid">
              <div class="w3-address-left">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </div>
              <div class="w3-address-right">
                <h6>Email Address</h6>
                <p>Email :<a href="mailto:ddc-ramgarh@jharkhandmail.gov.in"> ddc-ramgarh@jharkhandmail.gov.in</a></p>
              </div>
              <div class="clearfix"> </div>
            </div>
            <div class="w3-address-grid">
              <div class="w3-address-left">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </div>
              <div class="w3-address-right">
                <h6>Location</h6>
                <p>DMFT Ramgarh, First Floor, Block-B, DC Office, Ramgarh, Jharkhand, PIN-825101. 
                <span>Telephone : +91 6553 295 309</span>
                </p>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
    <div class="copyright">
      <div class="container">
        <p>© 2021 DMFT Ramgarh. All Rights Reserved | Design by<a href="http://www.dmftramgarh.com" target="_blank"> PMU, DMFT Ramgarh</a>
      </p>
      </div>
  </div>
  <!-- //footer -->
</body> 
</html>