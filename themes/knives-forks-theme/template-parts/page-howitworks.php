<?php
$arrays=acf_get_fields('group_5de6dbd4e92e1');
    // $arrays=acf_get_field_group('group_5de6dbd4e92e1');
    // foreach($arrays as $x){
    //     echo $x['label'];
    // }
    // echo '<pre>';
    // echo var_dump($arrays);
    
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

             Or if you’re a food business in BC, we provide low interest loans and experienced mentorship.
            </p>
        </nav>
        <nav class="img-entry">
            <img src="" alt="investment icon">
        </nav>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<nav>
            <ul>
                <?php
                $tmp='';
                $tmpCount=1;
                    foreach($arrays as $x){
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
	</div><!-- .entry-content -->
</article><!-- #post-## -->
