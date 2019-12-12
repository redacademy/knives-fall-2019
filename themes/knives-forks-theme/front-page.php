<?php get_header();

//******DECLARATIONS and INSTANCES here */
$args=array(
    'post_type'=>'member_testimonial',
    'numberposts'=>-1,
    'orderby'=>'post_date',
    'order'=>'ASC'
);
$testimonials=get_posts($args);

?>


<?php while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
                <?php //get_template_part( 'template-parts/blocks/content', 'information-blurbs' ); ?>
                <?php //get_template_part( 'template-parts/content'); ?>

            <?php endwhile; ?>    
<section class="testimonials"> <!--*************TESTIMONIALS starts Here**********-->
         <h1 class="site-title knives-fork">
                <?=get_bloginfo('title')?>
         </h1>
         <?php
            if(count($testimonials)>0){
                $tmp='';
                echo '<div class="carousel" data-flickity>';
                foreach($testimonials as $x){
                    // the_post($x);
                    setup_postdata($x);
                    // $img=the_field('member_profile',$x->ID);
                    $tmp.='
                    
                        <nav class="carousel-cell">
                            <img src="'. get_field('member_profile',$x->ID) . '" alt="knives&fork-'. $x->post_title .'" class="profile-pic">
                            <p>
                                '. get_the_excerpt($x) .'
                            </p>
                            <p class="member-name">
                                '.get_field('member_name',$x->ID).'
                            </p>
                            <p class="member-since">
                                Member since '. date("Y",strtotime(get_field('member_since',$x->ID))).'
                            </p>
                        </nav>
                    
                    ';

                }
                echo $tmp;
                echo '</div>';

            }
         ?>
         
     </section>
<?php get_footer();?>