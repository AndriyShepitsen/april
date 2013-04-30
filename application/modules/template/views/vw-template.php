<!doctype html>
<!-- //LOCATION: april/
sss-->
<html>
<head>
<meta charset="utf-8">
<title>Short Sale Proffessionals Chicago Northshore</title>

<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>

  <link href="<?php echo base_url();?>stylesheets/normalize.css" media="screen, projector, print" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>stylesheets/app.css" media="screen, projector, print" rel="stylesheet" type="text/css" />


<link href="<?php echo base_url();?>stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="outerWrapper">
  <div id="header">  
  	<div id="headerLogoContent"> <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>_img/Chicago-Short-Sale-Logo.png" alt="Logo Chicago Short Sale"></a>
     </div><!--headerLogoContent-->
    <div id="headerContent"> 
    
    	<div id="headerContentTop">
            <div id="companyName">Short Sale Chicago</div>
          	<div id="headerPicture"><a href="index.php"><img src="<?php echo base_url();?>_img/chicago.jpg" alt="Chicago View"></a>
            </div><!--headerPicture-->
        </div><!--headerContentTop-->
        
        <div id="headerContentBottom">
        <div class="icon-phone"></div>
        <div id="headerPhoneNumber">312-544-0064</div>

        <a href="<?php echo base_url();?>">
        <img class="icon" src="<?php echo base_url();?>images/home.png" alt="short-sale-chicago-mail">
        </a>

        <a href="<?php echo base_url().'Contact-Us';?>">
        <img class="icon" src="<?php echo base_url();?>images/mail.png" alt="short-sale-chicago-home">
        </a>
        
      </div><!--headerContentBottom-->
    </div><!--headerContent-->
  </div><!--header-->
<div id="contentWrapper">
    <?php 
    $menu = 'menu.php';
     include_once $menu;
     ?>



<?php
  if (isset($datum)) {
  $this->load->view($module.'/'.$view, $datum);
} else {
  $this->load->view($module.'/'.$view);
}
?>




</div><!--contentWrapper-->
  
</div>
<!--outerWrapper-->
	<div id="footer">
   	  <div id="footerContent">
        	<div id="footerContentTop">
           	  <div id="connectWithUs">
            <img src="<?php echo base_url();?>_img/short-sale-chicago-Facebook.png" alt="Short Sale Chicago Facebook"> 
            <img src="<?php echo base_url();?>_img/short-sale-chicago-twitter.png" alt="short-sale-chicago-twitter">
            <img src="<?php echo base_url();?>_img/short-sale-chicago-you-tube.png"  alt="short-sale-chicago-youtube">
			</div><!--connectWithUs-->             
             
            <div id="footerPhoneNumbers">Office: (312)544-0064 Fax: (847)674-0411</div> <!--footerPhoneNumbers-->
			<div id="footerAddress">4023 W. Church St<br>Skokie, IL 60076
			</div><!--footerAddress-->
            </div><!--footerContentTop-->
            
            <div id="footerContentBottom">
          <div id="footerLogo"><img src="_img/ReMax_footer_logo.png"  alt="Remax Short Sale Chicago Logo"></div>
          <div id="footerCompanyName">Short Sale Chicago</div>
          
          <div id="footerRights">&copy; Short Sale Chicago 2013</div>
          
          </div><!--footerContentBottom-->
			    
	  </div><!--footerContent-->
	</div><!--footer-->

</body>
</html>