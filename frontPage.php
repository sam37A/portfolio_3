<?php
/**
* Template Name: Homepage *
* @package portfolio_3
*
*/
?>
<?php get_header(); ?>




<!-- my html starts here -->
<div class="home-container">
    <section class ="hero-section">
        <div class="hero-title-box">
            <div class="hero-title">
                <h1 class="hi">Hi, &#x1F44B; </h1>
                <h1> I'm <span> Suman Mainali,</span></h1>
                <h3 class ="word-press">A WordPress Developer</h3> <br>
                <p> I  design and develope responsive websites, familiar with HTML, CSS, JavaScript, Bootstrap, etc, and specialized with WordPress.
                    <br>
                    <a href="http://portfolio3.local/about-me/"  class="btn btn-primary">More About Me</a>
                   
                

                <!-- Calendly badge widget begin -->
                    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
                    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
                    <script type="text/javascript">window.onload = function() { Calendly.initBadgeWidget({ url: 'https://calendly.com/sahilsan30', text: 'Schedule time with me', color: '#0069ff', textColor: '#ffffff', branding: true }); }</script>
                <!-- Calendly badge widget end -->

                </p>
                
            </div>
           
            <div class="hero-image">
              
               
            </div>

        </div>
    </section>

    
</div>
<?php get_template_part('template-parts/testimonial') ?>

 <?Php get_footer(); ?> 