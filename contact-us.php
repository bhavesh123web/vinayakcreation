<?php
include_once('header.php');
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?php echo BASE_URL; ?>">Home</a></li>
          <li>Contact Us</li>
        </ol>
        <h2>Contact Us</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        
			<!-- ======= Contact Section ======= -->
			<section id="contact" class="contact">

			  <div class="container" data-aos="fade-up">

				<header class="section-header">
				  <h2>Contact US</h2>
				  <p>feel free to contact</p>
				</header>

				<div class="row gy-4">

				  <div class="col-lg-6">

					<div class="row gy-4">
					  <div class="col-md-6">
						<div class="info-box">
						  <i class="bi bi-geo-alt"></i>
						  <h3>Address</h3>
						  <p>104, Golden Plaza, Raipur<br>
							 Gujarat Ahmedabad India<br>
						     Pincode - 380001</p>
						</div>
					  </div>
					  <div class="col-md-6">
						<div class="info-box">
						  <i class="bi bi-telephone"></i>
						  <h3>Call Us</h3>
						  <p>+91 99240 47027<br>&nbsp;<br>&nbsp;</p>
						</div>
					  </div>
					  <div class="col-md-6">
						<div class="info-box">
						  <i class="bi bi-envelope"></i>
						  <h3>Email Us</h3>
						  <p>info@vinayakcreation.com<br>vinayakcreation365@gmail.com</p>
						</div>
					  </div>
					  <div class="col-md-6">
						<div class="info-box">
						  <i class="bi bi-clock"></i>
						  <h3>Open Hours</h3>
						  <p>Monday - Friday<br>10:00AM - 07:00PM</p>
						</div>
					  </div>
					</div>

				  </div>

				  <div class="col-lg-6">
					<form action="forms/contact.php" method="post" class="php-email-form">
					  <div class="row gy-4">

						<div class="col-md-6">
						  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
						</div>

						<div class="col-md-6 ">
						  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
						</div>

						<div class="col-md-12">
						  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
						</div>

						<div class="col-md-12">
						  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
						</div>

						<div class="col-md-12 text-center">
						  

						  <button type="submit">Send Message</button>
						</div>

					  </div>
					</form>

				  </div>

				</div>

			  </div>

			</section><!-- End Contact Section -->
      </div>
    </section>

  </main><!-- End #main -->

<?php
include_once('footer.php');
?>