<?php

function fluence_pre_edit_content(){
    echo the_content();
}

add_filter( 'content_edit_pre', 'fluence_pre_edit_content', 10, 2 );