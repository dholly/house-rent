
<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class = "d-flex">
        <input type="text" value="<?php echo get_search_query(); ?>" placeholder = "Введите текст для поиска" name="s" id="s" />
        <button type="submit" class = "search-submit icon-search"></button>
    </div>
</form>