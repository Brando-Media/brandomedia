<?php
if(!function_exists('word_truncate')):
function word_truncate($text, $limit=25,$elip='...') {
    if (str_word_count($text,0) > $limit) {
         $words = str_word_count($text, 2);
         $pos = array_keys($words);
         $text = substr($text, 0, $pos[$limit]) . $elip;
    }
    return $text;
}
endif;

function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

function show_image($src,$w=800,$h=800,$q=100){
    $params = array('width'=>$w,'height'=>$h,'quality'=>$q);
    $image = bfi_thumb($src, $params );
    return $image;
}