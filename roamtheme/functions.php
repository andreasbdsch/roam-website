<?php
add_filter( "protected_title_format", "roam_remove_protected" );

function roam_remove_protected( $format, $post ) {
    return "%s";
}
?>