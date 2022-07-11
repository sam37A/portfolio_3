<?php
/**
* Template Name: contactPage *
* @package portfolio_3
*
*/
?>
<?php get_header(); ?>



<div class="contact-form-box">
    <h1>Contact me: </h1>

    <?php echo apply_shortcodes( '[contact-form-7 id="130" title="Contact form"]' ); ?>


 <!-- Calendly badge widget begin -->
 <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
                    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
                    <script type="text/javascript">window.onload = function() { Calendly.initBadgeWidget({ url: 'https://calendly.com/sahilsan30', text: 'Schedule time with me', color: '#0069ff', textColor: '#ffffff', branding: true }); }</script>
                <!-- Calendly badge widget end -->
</div>



<?Php get_footer(); ?>
