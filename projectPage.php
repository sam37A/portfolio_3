<?php
/**
* Template Name: projectPage *
* @package portfolio_3
*
*/
?>
<?php get_header(); ?>

<div class="project-container">
<h1> My projects </h1>
    <section class ="project-section">
        <div class="card" id="break" style="width: 25rem;">
            <img src="http://portfolio3.local/wp-content/uploads/2022/06/codeBay.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">quoteBay</h5>
                <p class="card-text">A compilation of world famous life changing and inspirational quotes. All quotes are categorized in five topics: Time, Motivation,
                    Knowledge, Happiness and Friendship. 
                </p>
                <a href="https://sam37a.github.io/presentation_project/"  target = "_blank" class="btn btn-primary">View</a>
            </div>
        </div>
                <!-- second -->
        <div class="card" id="break" style="width: 25rem;">
            <img src="http://portfolio3.local/wp-content/uploads/2022/06/blossom_corner.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Blossom Corner</h5>
                <p class="card-text">It's an imaginary project crafted as the first assignment of WordPress Apprenticeships. Flowers play a significant role in  our everyday life.  </p>
                <a href="https://sam37a.github.io/flowerProject/"  target = "_blank" class="btn btn-primary">View</a>
            </div>
        </div>
                <!-- 3rd card -->
        <div class="card"  id="break" style="width: 25rem;">
            <img src="http://portfolio3.local/wp-content/uploads/2022/06/art_Academy.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Art Academy</h5>
                <p class="card-text">It's the landing page project recreated or cloned  from 'Nice Page' website</p>
                <a href="https://sam37a.github.io/artAcademics/templet.html"  target = "_blank" class="btn btn-primary">View</a>
            </div>
        </div>
        <!-- second column -->
        <div class="card"  id="break" style="width: 25rem;">
            <img src="http://portfolio3.local/wp-content/uploads/2022/06/portfolio2.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Portfolio </h5>
                <p class="card-text">It's the portfolio project recreated from 'Nice Page' website for the purpose of crafting responsive website.</p>
                <a href="https://sam37a.github.io/portFolio_final/"  target = "_blank" class="btn btn-primary">View</a>
            </div>
        </div>
                <!-- second -->
        <div class="card" id="break" style="width: 25rem;">
            <img src="http://portfolio3.local/wp-content/uploads/2022/06/PortFolio1.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Portfolio</h5>
                <p class="card-text">It's the portfolio project recreated from 'Nice Page' website for the purpose of responsive website.</p>
                <a href="https://sam37a.github.io/responsivePortfolio/" target = "_blank" class="btn btn-primary">View</a>
            </div>
        </div>
                <!-- 3rd card -->
        <div class="card" id="break" style="width: 25rem;">
            <img src="http://portfolio3.local/wp-content/uploads/2022/06/SCC.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">SCSS</h5>
                <p class="card-text">It's a documentative project about 'Website For Begnners' student group from Sacramento, 2022, organized by Bitwise Industrry.</p>
                <a href="https://sam37a.github.io/SCC/" target = "_blank" class="btn btn-primary">View</a>
            </div>
        </div>
    </section>
    <hr>
    <!-- wp section starts here -->
    <h1 >WordPress Projects</h1>
   <div class="wordPress-project-section">
   
    <div>
       <h1 >Child-theme</h1>
         <div class="project-1">
           
         </div>
        <div class="project-2">
            
        </div>
     </div>
        <br><br>
        
        <div>
        <h1 >Elementor Plugin: Astra Theme</h1>
            <div class="project-3">
            

            </div>
            <div class="project-4">
                
            </div>
        </div>
      

    </div>
  
</div>
<?php get_template_part('template-parts/testimonial') ?>


<?Php get_footer(); ?>