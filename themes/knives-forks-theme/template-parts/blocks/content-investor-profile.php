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
echo '<section class="'.$className.'-section" >
    <img src="'.esc_url(get_field('investor-background')).'" alt="knives-fork-images" class="investor-bg-img">
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
                             <img src="'. esc_url($x['investor-logo']) .'" alt="'.$x['investor-name'].'" class="investor-profile-logo">
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
                Want to see your business here
            </h2>
            <a href="#" alt="apply-to-pitch" class="btn">
                Apply to Pitch
            </a>
        </div>
    </div>
</section>';

                }
?>
