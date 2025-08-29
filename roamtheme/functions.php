<?php
add_filter( "protected_title_format", "roam_remove_protected" );

function roam_remove_protected() {
    return "%s";
}
?>