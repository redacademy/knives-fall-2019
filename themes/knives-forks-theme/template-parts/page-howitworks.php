<?php
// $arrays=acf_get_fields('group_5de6dbd4e92e1');
$arrays=get_field('steps');
$args=array(
    'post_type'=>'member_testimonial',
    'numberposts'=>-1,
    'orderby'=>'post_date',
    'order'=>'ASC'
);

$testimonials=get_posts($args);

//     echo '<pre>';
//     echo print_r($arrays);
    
//     echo '</pre>';
    
?>

<article class="article-content">
    
	<header class="entry-header">
        <nav>
            <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
            <h3 class="entry-description">
                We create meaningful relationships between members and local food businesses.
            </h3>
            <p>
            If you’re looking to invest your money and share our love for great food in your local community, you’re in the right place!
            <br><br>
             Or if you’re a food business in BC, we provide low interest loans and experienced mentorship.
            </p>
            
        </nav>
        
     
	</header><!-- .entry-header -->
    
	<div class="entry-content">
		<nav>
            <ul class="steps-list">
                <?php
                $tmp='';
                $tmpCount=1;
                    if(have_rows('steps')){
                        while(have_rows('steps')){
                            the_row();
                            
                            // $img=is_null(get_sub_field('step-icon'))?null:get_sub_field('step-icon');
                            $img=get_sub_field('step-icon');
                            $tmpClass=($img)?'':'hide-this';
                            // var_dump($img);
                            $tmp.='<li>
                            <h3 class="how-count">'. $tmpCount .'</h3>
                            <p class="how-title"><b>'. get_sub_field('step-title') .'</b></p>
                            <p class="how-description">
                            '. get_sub_field('step-content') .'
                            </p>';
                            $tmp.='<img src="'. $img.'" alt="knives forks icons" class="how-icons '. $tmpClass .'">';
                           

                            $tmp.='</li>';
                            $tmpCount++;
                        }
                    
                    }
                    echo $tmp;
                ?>
            </ul>
           
            <a href="#" class="btn how-btn">Become a Member</a>
            <a href="#" class="btn how-btn">Become Entrepreneur</a>
        </nav>
        <img src="<?php echo get_field('how-img');?>" alt="how-it-works-hands" class="how-img">
    </div><!-- .entry-content -->
     
     
</article><!-- #post-## -->
<!--section for TESTIMONY GUY-->
<section class="testimonials">
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
                                '.get_field('member_since',$x->ID).'
                            </p>
                        </nav>
                    
                    ';

                }
                echo $tmp;
                echo '</div>';

            }
         ?>
         
     </section>