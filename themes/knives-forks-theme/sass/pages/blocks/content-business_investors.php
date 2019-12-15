<?php
// Create class attribute allowing for custom "className" and "align" values.
$className = 'investor_profile';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className']; 
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

if(have_rows()){
    echo '<pre>';
        print_r(get_posts());
    echo '</pre>';
}

?>