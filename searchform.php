<?php 
/**
 * Search Form
 */
?>

<form role="search" method="get" class="form-search" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="text" class="input-medium search-query" name="s" value="<?php echo get_search_query(); ?>">
    <button type="submit" class="btn dark_btn">Search</button>
</form>