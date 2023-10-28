<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="magnify/magnify.min.css">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style>
	div {
    display: block;
}
	.after-header {
    background-color: #ffffff;
	}
	.p-tb-10 {
    padding-top: 10px;
    padding-bottom: 10px;
	text-align: center;
	}
	.container {
    margin-right: auto;
    margin-left: auto;
    padding-left: 0;
    padding-right: 0;
}
.row {
    margin-left: -15px;
    margin-right: -15px;
	text-align: center;
}
.banner-slider {
    position: relative;
}
.fade {
    animation-name: fade;
    animation-duration: 2s;
}
.row-1{
	width: 100%;
}
.collage a {
    display: block;
    overflow: hidden;
}
a {
    color: #23a1d1;
	text-decoration: none;
	background-color: transparent;
}
.collage a img {
    max-width: 100%;
    transition: all 0.3s;
}
.collage img {
    width: 100%;
}
.img-responsive {
    display: block;
    height: auto;
}
img{
	vertical-align: middle;
	border: 0;
}
#content {
    min-height: 500px;
}
.p-t-15 {
    padding-top: 15px;
	background-color: #ffffff;
}
.col-md-51p {
    width: 52%;
    float: left;
    position: relative;
}
.collage .row > div {
    margin-bottom: 15px;
}
.col-md-24p {
    width: 24%;
    float: left;
    position: relative;
}

.bg-white {
    background-color: #ffffff;
}
.on-scroll .main-nav {
    position: fixed;
	display: block;
    width: 100%;
    top: 0;
    z-index: 10;
}
@import url('css/default.css');
@import url('css/template/restaurant.css');
@import url('css/template/minimal.css');
</style>
<body class="hold-transition skin-blue layout-top-nav common-home on-scroll">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content" style="margin-top: 40px;">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
				</div>
				<div style="text-align: center;" class="after-header p-tb-10">
						<div class="container">
							<div style="text-align: center;" id="collage-1" class="collage row">
								<div class="col-md-6 col-sm-12 col-xs-12 col-md-push-3 banner-slider">
									<div style="display: block;" class="item mySlides banner-image large">
										<a href="category.php?category=processor">
											<img src="images/Intel.jpg" alt="" srcset="" class="img-responsive">
										</a>
									</div>
									<div style="display: none;" class="item mySlides banner-image large">
										<a href="category.php?category=processor">
											<img src="images/Intel.jpg" alt="" srcset="" class="img-responsive">
										</a>
									</div>
								</div>
								<div class="col-md-3 col-xs-6 first col-md-pull-6">
									<div class="item banner-image">
										<a href="category.php?category=laptops">
											<img src="images/Macbook-web.jpg" alt="" srcset="" class="img-responsive">
										</a>
									</div>
								</div>
								<div class="col-md-3 col-xs-6 last">
									<div class="item banner-image">
										<a href="category.php?category=keyboards">
											<img src="images/razer_new_product-wb.jpg" alt="" class="img-responsive">
										</a>
									</div>
								</div>
							</div>
						</div>
				</div>
				<section style="text-align: center;" id="content" class="p-t-15">
						<div class="container">
							<div id="collage-0" class="collage grid">
								<div class="row row-1 g-1">
									<div class="item col-md-24p col-xs-6 small first">
										<a href="category.php?category=sound-system">
											<img src="images/baseus-orange-dot.jpg" alt="" class="img-responsive">
										</a>
									</div>
									<div class="item col-md-24p col-xs-6 small last">
										<a href="category.php?category=mouse-matt">
											<img src="images/nyx-p2.jpg" alt="" class="img-responsive">
										</a>
									</div>
									<div class="item col-md-51p col-xs-12">
										<a href="category.php?category=cpu-cooler">
											<img src="images/ekwb aio banner.jpg" alt="" class="img-responsive">
										</a>
									</div>
								</div>
								<div class="row row-2 g-2">
									<div class="item col-md-51p col-xs-12">
										<a href="category.php?category=monitor">
											<img src="images/redmi1abcs.jpg" alt="" class="img-responsive">
										</a>
									</div>
									<div class="item col-md-24p col-xs-6  small first">
										<a href="category.php?category=headphone">
											<img src="images/gamdias-hebe-m1.jpg" alt="" class="img-responsive">
										</a>
									</div>
									<div class="item col-md-24p col-xs-6  small last">
										<a href="category.php?category=cpu-cooler">
											<img src="images/neptune120.jpg" alt="" class="img-responsive">
										</a>
									</div>
								</div>
								<div class="row row-1 g-5">
									<div class="item col-md-24p col-xs-6 small last">
										<a href="category.php?category=ups">
											<img src="images/tecno-online-offline.jpg" alt="" class="img-responsive">
										</a>
									</div>
									<div class="item col-md-24p col-xs-6 small first">
										<a href="category.php?category=ups">
											<img src="images/mg-online-offline-ups.jpg" alt="" class="img-responsive">
										</a>
									</div>
									<div class="item col-md-51p col-xs-12">
										<a href="category.php?category=desktop-ram">
											<img src="images/team-dark-pro-ud-banner-wefwefwefwe4.jpg" alt="" class="img-responsive">
										</a>
									</div>
								</div>
								<div class="row row-2 g-6">
									<div class="item col-md-51p col-xs-12">
										<a href="category.php?category=monitor">
											<img src="images/BenQ-EX2780Q.jpg" alt="" class="img-responsive">
										</a>
									</div>
									<div class="item col-md-24p col-xs-6 small first">
										<a href="category.php?category=hub">
											<img src="images/Baseus_Square_Round-4-in-1-USB-Hub-Adapter.png" alt="" class="img-responsive">
										</a>
									</div>
									<div class="item col-md-24p col-xs-6 small last">
										<a href="category.php?category=keyboards">
											<img src="images/hermes-p1a-banner.jpg" alt="" class="img-responsive">
										</a>
									</div>
								</div>
								<div class="row row-1 g-3">
									<div class="item col-md-24p col-xs-6 small first">
										<a href="category.php?category=cpu-cooler">
											<img src="images/m2-240-lite.jpg" alt="" class="img-responsive">
										</a>
									</div>
									<div class="item col-md-24p col-xs-6 small last">
										<a href="category.php?category=webcam">
											<img src="images/vt301.jpg" alt="" class="img-responsive">
										</a>
									</div>
									<div class="item col-md-51p col-xs-12">
										<a href="category.php?category=motherboard">
											<img src="images/z490s-mobo.jpg" alt="" class="img-responsive">
										</a>
									</div>
								</div>
								<div class="row row-2 g-4">
									<div class="item col-md-51p col-xs-12">
										<a href="category.php?category=headphone">
											<img src="images/gamdias-headset-home-banner.jpg" alt="" class="img-responsive">
										</a>
									</div>
									<div class="item col-md-24p col-xs-6 small first">
										<a href="category.php?category=software">
											<img src="images/eset-free-tshirt-banner.jpg" alt="" class="img-responsive">
										</a>
									</div>
									<div class="item col-md-24p col-xs-6 small last">
										<a href="category.php?category=motherboard">
											<img src="images/b550.jpg" alt="" class="img-responsive">
										</a>
									</div>
									
								</div>
								
							</div>
							
						</div>
						
				</section>
				
	        </div>
			
		  </section>
		  <div class="col-sm-12">
	        	<?php include 'includes/sidebar.php'; ?>
	    	</div>
	    </div>
	  </div>
	  <section id="about" class="content-bottom bg-white">
			<div class="container">
				<br>
				<br>
				<br>
				<h1>Leading Retail Computer Shop in Bangladesh</h1>
				<div>
					The technological advancement has touched every aspect of our life and eliminated difficulty. We provide the one stop solution for IT products; your happiness is just a click away.
				</div>
				<div>
					<br>
				</div>
				<div>
					SundarbanBD believes in quality customer care service that ease your purchase procedure and after sale facilities. A lifelong relationship with customers is our main moto to make you feel precious in every experience.
				</div>
				<div>
					<br>
				</div>
				<div>
					We analyze the current market condition and create the best deals in reasonable price for Laptops, Graphics Card, Processor, Monitor, Headphones, Cameras, CC TV, Speaker, office equipment, servicing, genuine software and many more to bring comfort in decision making.
				</div>
				<div>
					<br>
				</div>
				<div>
					Searching for a computer store or buying from an importer, compare products from Star Tech’s official site and order your desired item online from an international standard eCommerce platform.
				</div>
				<div>
					With a mission to build a better tomorrow we always ready to accept new challenges and bring changes according to the variation of taste and needs of modern life.
				</div>
				<div>
					<br>
				</div>
				<div>
					Our SundarbanBD Branches are located in Dhaka, Chattogram, Rangpur and Khulna. You will be able to buy all of our products from these places with ease. We provide our customers with fast delivery across entire Bangladesh. We have free delivery facility for any product being delivered in Dhaka City and also courier the products to the specific destination where the customers wants it to receive from.
				</div>
				<br>
				<br>
				<br>
			</div>
	   	</section>
	  	<section id="contact">
				<section style="background-color: #ffffff;" class="map">
    				<div class="container">
        				<div class="row">
            				<div class="col-xs-12">
                				<div class="maps">
                    				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d913.2629875118387!2d90.4332661!3d23.7098388!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9f7bb6fb32d%3A0x9b0709a8959bdcfb!2s5%20Star%20International!5e0!3m2!1sen!2sbd!4v1598087948373!5m2!1sen!2sbd" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                				</div>
            				</div>
        				</div>
    				</div>
				</section>
			
<div style="background-color: #ffffff;" id="res-contact" class="res-footer-section section pt-150 pb-110">
    
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6 col-xs-12 mb-40">
                <div class="res-footer-widget">
                    <h2>Sundarban<strong>BD</strong></h2>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 mb-40">
                <div class="res-footer-widget">
                    <h4 class="title"> <strong> Contact Us</strong></h4>
                    <ul>
                        <li><span>Address :</span> H/N 480, Shohid-Faruk Road, Jatrabari, Dhaka-1320, Bangladesh</li>
                        <li><span>Email :</span> <a href="#">shundarbanBd2020@gmail.com</a> <a href="#">shundarbanBd2019@gmail.com</a></li>
                        <li><span>Phone :</span> <a href="#">(+8801577770865)</a> <a href="#">(+8801677770865)</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 mb-40">
                <div class="res-footer-widget">
                    <h4 class="title"><strong>Sent Messege</strong></h4>
                    <p> Stay with us.</p>
                    <div id="mc_embed_signup" class="res-footer-newsletter">
                        
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <div class="mc-field-group">
                                    <input type="email" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="write here">
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                <div class="clear"><button type="submit" name="subscribe" id="mc-embedded-subscribe" class="submit"><i class="fa fa-paper-plane"></i></button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
</div>
		</section>
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>