	<form method="get" action="<?php bloginfo('url'); ?>/">
		<label for="s">Search the site: </label>
		<input type="text" title="Please type what you are looking for." data-tooltip="false" id="s" name="s" value="<?php the_search_query(); ?>">
		<input type="submit" value="Search" >
	</form>