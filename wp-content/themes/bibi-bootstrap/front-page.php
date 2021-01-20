<?php

/*
Template Name:  Front Page
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            
		<!-- header image -->
		<div class="header-img-container">
        	<img class="img-fluid" 
			src="http://127.0.0.1/bibi/wp-content/uploads/2021/01/Kymme-Bee-2.png"
			alt="header image"
			
			/>  
		</div>
       

		<section id="welcome" class="my-5">
			<div class="welcome-content text-center w-50 mx-auto">
				<h3 class="mb-4">Welcome to Bibi Body!</h2>
				<p class="mb-4 primary-color">
					Bibi Body is your source for the finest body piercing jewelry, with our patented Bibi-Back closing mechanism that's secure and comfortable.
				</p>
				<p class="mb-4 primary-color">
					Browse our shop to find the next piece for your curated ear.
				</p>
				<a class="bibi-link mb-4" href="#">
					Shop &#62;
				</a>
			</div>
		</section> <!--welcome-->

		<section id="featured">
			<div class="container-fluid text-center">
				<h3 class="mb-4">Featured Items</h2>
                <h4 class="small mb-4">Newest, Hottest, Trendiest</h3>
                
				<div class="row">
					<div class="col-md-3">
						<img class="img-fluid" src="http://127.0.0.1/bibi/wp-content/uploads/2021/01/BiBi-Body-Jewelry-14KW-Diamond-Crescent-Moon-Stud-Earring-1.png"/>
					</div>
					<div class="col-md-3">
						<img class="img-fluid" src="http://127.0.0.1/bibi/wp-content/uploads/2021/01/BiBi-Body-Jewelry-14KY-Pave-Diamond-Flower-Stud-Earring-1.png"/>
					</div>
					<div class="col-md-3">
						<img class="img-fluid" src="http://127.0.0.1/bibi/wp-content/uploads/2021/01/BiBi-Body-Jewelry-14KY-7mm-Pave-Diamond-Stud-Earring-1.png"/>
					</div>
					<div class="col-md-3">
						<img class="img-fluid" src="http://127.0.0.1/bibi/wp-content/uploads/2021/01/BiBi-Body-Jewelry-14KR-Lips-Stud-Earring-1.png"/>
					</div>
				</div>
				<h3 class="small text-center my-5"><a href="#" class="bibi-link">View All &#62;</a></h3>
			</div>
		</section>




	 <?php
		// if ( have_posts() ) :

		// 	get_template_part( 'loop' );

		// else :

		// 	get_template_part( 'content', 'none' );

		// endif;
		?>  

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// do_action( 'storefront_sidebar' );
get_footer();
