
<?php
    $args = array(
		'post_type' => 'featured-content',
		'order'         => 'ASC',
		'orderby'       => 'date'
	);
	$featured_content = new WP_Query($args);
?>

<section class="main-section">
    <!-- Slideshow container -->
    <div class="slider">
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <?php 
            if($featured_content->have_posts()){
                while($featured_content->have_posts()){
                    $featured_content->the_post();
                    ?>
                    <!-- Full-width images with number and caption text -->
                        <img class="slide fade" src="<?php the_post_thumbnail_url();?>" alt="Slide">
                    <?php
                }
            }
        ?>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <!-- The dots/circles -->
    <div class = "dots">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div> 
</section>
<script>
    startSlider(1);
</script>