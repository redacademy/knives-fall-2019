<?php
$arrays=acf_get_fields('group_5de6dbd4e92e1');
$args=array(
    'post_type'=>'member_testimonial',
    'numberposts'=>1,
    'orderby'=>'post_date',
    'order'=>'ASC'
);

$testimonials=get_posts($args);

    // echo '<pre>';
    // echo var_dump($testimonials);
    
    // echo '</pre>';
    
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
        
            <img src="<?=get_field('how-icons')?>" alt="how-it-works-icons" class="how-icons">
     
	</header><!-- .entry-header -->
    
	<div class="entry-content">
		<nav>
            <ul>
                <?php
                $tmp='';
                $tmpCount=1;
                    foreach($arrays as $x){
                        if($x['name']=='how-icons' ||$x['name']=='how-img' ){
                            continue;
                        }
                        $tmp.='<li>
                        <h3 class="how-count">'.$tmpCount.'
                        </h3>
                        <p class="how-title"><b>'.$x['prepend'].'</b></p>
                        <p class="how-description">
                        '.$x['placeholder'].'
                        </p>
                        </li>';
                        $tmpCount++;
                    }
                    echo $tmp;
                ?>
            </ul>
           
            <a href="#" class="btn">Become a Member</a>
            <a href="#" class="btn">Become an Entrepreneur</a>
        </nav>
        <img src="<?=get_field('how-img')?>" alt="how-it-works-hands" class="how-img">
    </div><!-- .entry-content -->
     <!--section for TESTIMONY GUY-->
     <section class="testimonials">
         <h1 class="site-title">
                <?=get_bloginfo('title')?>
         </h1>
         <?php
            if(count($testimonials)>0){
                $tmp='';
                foreach($testimonials as $x){
                    // the_post($x);
                    setup_postdata($x);
                    // $img=the_field('member_profile',$x->ID);
                    $tmp.='
                        <nav>
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

            }
         ?>
         
     </section>
</article><!-- #post-## -->
