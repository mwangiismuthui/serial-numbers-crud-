<!DOCTYPE html>
<html lang="en"> 
  
<head>

	<!-- Your Basic Site Informations -->
	<title>Condor Oriental</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
   
    
    <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/theme/css/bootstrap.min.css">
    <link rel="stylesheet" href="/theme/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="/theme/css/font-awesome.min.css">
    <link rel="stylesheet" href="/theme/css/prettyPhoto.css" />
    <link rel="stylesheet" href="/theme/css/layout.css">
        
    <!-- Favicons -->
	<link rel="shortcut icon" href="/theme/images/logo.png">
	<link rel="apple-touch-icon" href="/theme/images/logo.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/theme/images/logo.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/theme/images/logo.png">
  
	<script type="text/javascript" src="/theme/js/jquery-1.10.2.min.js"></script>
    
    <!-- Modernizr -->
    <script type="text/javascript" src="/theme/js/modernizr.custom.js"></script>
    
</head>
<body>
<style>
    label{
        color:#ffffff;
        font-size: 18px;
    }
    .contact{
        letter-spacing: 5px;
    }
</style>
	<header id="header">
    	<div class="header-wrap">
        	<div class="container">
            
            	<div class="logo">
                	<a href="#">
                    	<img src="/theme/images/logo.png" alt="Condor Oriental S. A" style="border-radius: 50%;width:100px;height:100px;" /> <!-- site logo -->
					</a>
                </div>
                
          

			</div> <!-- End container -->
		</div> <!-- End header-wrap -->
        
        <nav class="nav menu-nav">
            <div class="container">
                <ul>
                    <li><a href="#" class="smooth-scroll">Home</a></li>
                    <li><a href="#home" class="smooth-scroll">What we Do</a></li>
                    <li><a href="#about_us" class="smooth-scroll">About Us</a></li>
                    <li><a href="#verify" class="smooth-scroll">Verify Number</a></li>
                    <li><a href="#contact" class="smooth-scroll">Contact</a></li>
                    <li><a href="#partners" class="smooth-scroll">Partners</a></li>
                    {{-- <li><a href="#contact" class="smooth-scroll">Contact</a></li> --}}
                    <li><a href="{{route('gallery')}}" class="smooth-scroll">Gallery</a></li>
                </ul>
            </div> <!-- End container -->
        </nav> <!-- End menu-nav -->
	</header> <!-- End header -->
    
    <section id="slider">
    	<div class="slider-overlay">
        	<div class="container">
            
                <h1><span>Condor Oriental S. A. </span></h1>
                <h2>Innovation and investment monitoring</h2>
          
                <div class="data-status"></div> <!-- data submit status -->
                
			</div> <!-- End container -->
		</div> <!-- End slider-overlay -->
	</section> <!-- End slider -->
    
    <div class="landing-wrap" id="home">
    	<div class="container">
        
            
       
            
            <div class="row-fluid">
            	<div class="span4"> <!-- 1 -->
                	<div class="widget">
                    	<div class="dotstheme_step">
                        	<div class="step-number">
                            	<div class="number">1</div>
							</div>
                            <div class="content">
                            	<h4>RESEARCH</h4>
                                <img src="/theme/images/img.jpg" alt="Image">
                                <p>Condor Oriental S. A. is the only partner you need to bring your business up to date and to shield it for the future against all risks and competition, our team of researchers will adequately combine the advantages on hand today to the benefits of your enterprise,  and will suppress and overcome the disadvantages that you are experiencing</p>
							</div>
						</div>
					</div>
				</div>
                
                <div class="span4" >
                	<div class="widget">
                    	<div class="dotstheme_step">
                        	<div class="step-number">
                            	<div class="number">2</div>
							</div>
                            <div class="content">
                            	<h4>CONSULTATION</h4>
                                <img src="/theme/images/img3.jpg" alt="Image">
                                <p>Depends of your needs, we find a strategy that can become a valuable result in the future. Get in touch with us and find new ideas for your business to grow and prosper.
                                  <br>
                                  <br>
                                  <br>
                                  <br>
                                </p>
							</div>
						</div>
					</div>
				</div>
                
                <div class="span4"> <!-- 3 -->
                	<div class="widget">
                    	<div class="dotstheme_step">
                        	<div class="step-number">
                            	<div class="number">3</div>
							</div>
                            <div class="content">
                            	<h4>SOLUTIONS</h4>
                                <img src="/theme/images/img2.jpg" alt="Image">
                                <p>We will assist you on logistics, Shipping, storage, networks, security, software, surveillance, mobility, management, taxation, auditing, banking, investments.

                                  <br>
                                  <br>
                                  <br>
                                  <br>
                                </p>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- End row-fluid -->
                
		</div> <!-- End container -->
	</div> <!-- End landing-wrap -->
    <section id="verify">
        
    	<div class="container">
            <h4><span>Verify Serial Number </h4>

            <div class="header-border">
                
             <span id="form_result"></span>
            </div>
              <form  id="verify_form">
                    @honeypot
                {{ csrf_field() }}
                
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" id="serialnumber" name="serialnumber" class="form-control" placeholder="Enter Serial Number"
                               required="required"/>
                    </div>
                    <button type="submit" class="btn btn-success">Confirm</button>
                </div>
                                      
              </form>
        </div> <!-- End container -->
    </section> <!-- End contact -->
    
            
    	<div class="container">
        <section id="about_us">
          <div class="header" id="features">
            <h3>About Us </h3>
              <div class="header-border"></div>
            </div>
          
          <div class="row-fluid">
            <div class="span12"> <!-- 1 -->
                <div class="widget">
                    <div class="dotstheme_feature" style="text-align: justify; color:black;">
                          <p>A group of professionals with over 200 years’ combined experience in various sectors, mastering of investments, taxation, trading, logistics, outsourcing, research and development, impex; TSM technical surveillance measures, face recognition, bugging devices, tracking security software development. TSCM technical surveillance COUNTER measures. </p>
                    </div>
                    </div>
                </div>
                        
                
                </div> <!-- End row-fluid -->
          
		</section> 
    	</div>
    <section id="contact">
        
    	<div class="container">
            <h4><span>Contact US</h4>  
                <br>
                <div class="contact">

                 <span>21 /F , FUTURA PLAZA, 111 HOW MING STREET</span> <br>
                <span><i class="icon-map-marker"></i> &nbsp; KWUN TONG, KOWLOON, HONG KONG </span> <br>
                <span ><i class="icon-envelope"></i>&nbsp; info@condororiental.com</span><br>
                <span><i class="icon-phone"></i>&nbsp; +852 58 03 66 48 </span>
                </div>
         
            <div class="header-border">

             
             <span id="form_result"></span>

            </div>
            <form id="sendEmail" method="post">
                    @honeypot

                {{ csrf_field() }}
            	<div class="row">
                	<div class="col-md-6">
                        <input type="text" name="fname" maxlength="80" placeholder="First Name">
                                    <input type="email" name="email" maxlength="255" placeholder="Email (required)">
                                           <input type="text" name="company" maxlength="255" placeholder="Company Name">
					</div>
                    <div class="col-md-6">
                                        <input type="text" name="lname" maxlength="80" placeholder="Last Name">
                                        <input type="text" name="bphone" maxlength="80" placeholder="Business Phone">
                                        <input type="text" name="jtitle" maxlength="80" placeholder="Job Title">
					</div>
                </div> <!-- End row -->
                <div class="row">
                    <div class="col-md-12">

                       <input type="text" name="street1" maxlength="255" placeholder="Street 1">
                
                       <input type="text" name="street2" maxlength="255" placeholder="Street 2">
                
                       <input type="text" name="street3" maxlength="255" placeholder="Street 3">
                    </div>
            </div>
            	<div class="row">
                    <div class="col-md-6">
                        
                           <input type="text" name="city" maxlength="80" placeholder="City">
                        
                                  	<input type="text" name="postal_code" maxlength="255" placeholder="Zip/Postal Code">
					</div>
                    <div class="col-md-6">
                        
                                     <input type="text" name="state" maxlength="80" placeholder="State/Province">
                        
                                 	<input type="text" name="country" maxlength="255" placeholder="Country/Region">
					</div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                    <input type="text" name="topic" maxlength="255" placeholder="Topic">
                
                          <textarea name="desc"  cols="30" rows="10" placeholder="Topic Description"></textarea>
                    </div>
                </div>
                
                <div class="row">

                    <div class="col-md-6">
                       
                        <select name="contact_method" maxlength="255" class="form-control">
                            <option value="">Select Contact Method </option>
                            <option value="email">Email</option>
                        </select>
                        
                    </div>
                    <div class="col-md-6">
                      <button type="submit" class="btn btn-primary" name="submit" id="send_button">Send Message</button>
                    </div>
                </div>
             
                <span id="email_result"></span>
			</form>
        </div> <!-- End container -->
    </section> <!-- End contact -->
  
    
    <section class="footer-social" id="partners">
    	<div class="container">
        
        <h2><span>Partners </h2>
        	<ul>
            	<li><a href="http://dribbble.com/"><img src="/theme/images/logo1.jpg"></a></li>
                <li><a href="http://facebook.com/dotstheme"><img src="/theme/images/logo2.jpg"></a></li>
                <li><a href="http://plus.google.com/"><img src="/theme/images/logo3.jpg"></i></a></li>
                <li><a href="http://plus.google.com/"><img src="/theme/images/logo3.jpg"></i></a></li>
			</ul>
		</div> <!-- End container -->
	</section> <!-- End footer-social -->
    
    <footer class="footer-copyright">
    	<div class="container">
        	<p>© Copyright 2020 condororiental.com. All rights reserved.</p> <!-- copyright text -->
		</div> <!-- End container -->
	</footer> <!-- End footer-copyright -->
    
    <a href="#" class="scrollup" title="Back to Top!">Scroll</a> <!-- scroll up -->
    
  
    
	<script type="text/javascript" src="/theme/js/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="/theme/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/theme/js/jquery-easing.js"></script>
    <script type='text/javascript' src='/theme/js/detectmobilebrowser.js'></script>
    <script type="text/javascript" src="/theme/js/jquery.placeholder.min.js"></script>
	<script type="text/javascript" src="/theme/js/jquery.fitvids.min.js"></script>
	<script type="text/javascript" src="/theme/js/jquery.prettyPhoto.js"></script>
    <script type='text/javascript' src='/theme/js/jquery.parallax-1.1.3.js'></script>
    <script type="text/javascript" src="/theme/js/jquery.hoverdir.js"></script>
  <script type="text/javascript" src="/theme/js/main.js"></script>
  


  <script>
    
   
	$(function () {
		$('#verify_form').on('submit', function (event) {
			event.preventDefault();

			$.ajax({
				url: "{{ route('confirm_sno') }}",
				method: "POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				dataType: "json",
				success: function (data) {
					console.log(data);
					var html = '';
					if (data.errors) {
				
						html = '<div class="alert alert-error"> <strong>' + data.errors + '</strong></div>';
					}
					if (data.success) {
						html = '<div class="alert alert-success"><strong>' + data.success +' '+data.serial_number +' </strong><br>'+data.description + '</div>';

					}
					$('#form_result').html(html);
					setTimeout(function () {
						$('#form_result').html('');
					}, 20000000);
				}
			});
		});
		$('#sendEmail').on('submit', function (event) {
			event.preventDefault();

            $('#send_button').text('Sending.......');
			$.ajax({
				url: "{{ route('Sendemail') }}",
				method: "POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				dataType: "json",
				success: function (data) {
					console.log(data);
					var html = '';
					if (data.errors) {
				
						html = '<div class="alert alert-error"> <strong>' + data.errors + '</strong></div>';
					}
					if (data.success) {
						html = '<div class="alert alert-success"><strong>' + data.success + '</div>';

                            $('#send_button').text('Message Sent');
					}

					$('#email_result').html(html);
					setTimeout(function () {
                        
                        $('#send_button').text('Send Message');
						$('#email_result').html('');
					}, 6000);
				}
			});
		});

});

  </script>

</body>

</html>