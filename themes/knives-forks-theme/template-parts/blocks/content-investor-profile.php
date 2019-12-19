<?php
// Create class attribute allowing for custom "className" and "align" values.
$className = 'investor';
$id = $className.'-' . $block['id'];
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className']; 
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$fields=get_field('custom_for_investor');


if(count($fields)>0){
    $img1=esc_url(get_field('investor-background'));
    $img2=is_null(get_field('investor-background-down'))? $img1 : esc_url(get_field('investor-background-down'));
    // $test=is_null(get_field('investor-background-down'))? 'ITS NULL!':'image INSIDE!';
    // var_dump($test);
echo '<section class="'.$className.'-section" id="investment" >
    <img src="'. $img1 .'"
    srcset="'. $img2 .' 599w, '. $img1 .' 900w"
     alt="knives-fork-images" class="investor-bg-img">
    <div>
    
        <div class="'.$className.'-top">
            <h2 class="entry-title">
            '.get_field('investment-title').'
            </h2>
            <p>
                '.get_field('investment-description').'
            </p>
        </div>
        <blockquote id="'.$id .'" class="'.$className.'-mid">
            <ul>';
        
            $tmp='';
            
                // echo'<pre>';
                //     print_r($fields);
                // echo '</pre>';
                foreach($fields as $x){
                    $tmp.='<li>
                             <img 
                             src="'. $x['investor-logo'] .'" alt="'.$x['investor-name'].'" class="investor-profile-logo">
                             <a href="" alt="">
                                <h2 class="entry-title">
                                '.$x['investor-name'].'
                                </h2>
                             </a>
                             <p class="entry-content">
                                    '.$x['investor-quotes'].'
                            </p>
                         </li>';
                }
                echo $tmp;
          
            
        echo '    </ul>
        </blockquote>
        <div class="'.$className.'-bottom">
                <h2 class="entry-title">
                Want to see your business here?
            </h2>
            <a href="#" alt="apply-to-pitch" class="btn btn-large">
                Apply to Pitch
            </a>
        </div>
    </div>
</section>';

                }
?>
