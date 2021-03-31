
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
            $count_Slide = 0;
            if($featured_content->have_posts()){
                while($featured_content->have_posts()){
                    $featured_content->the_post();
                    ?>
                    <!-- Full-width images with number and caption text -->
                    <div class="slide"> <img class="fade" src="<?php the_post_thumbnail_url();?>" alt="Slide"> </div>    
                    <?php
                    $count_Slide++;
                }
            }
        ?>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <!-- The dots/circles -->
    <div class = "dots">
        <?php 
            for($i=1; $i<=$count_Slide; $i++){
                ?><span class="dot" onclick="currentSlide('<?php echo $i?>')"></span>
                <?php
            }
        ?>
    </div> 
</section>
<script>
    startSlider(1,'<?php echo $count_Slide?>');
</script>