<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Forever
 * @since Forever 1.0
 */
?>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ){
    get_search_form(true); }
    ?>