<form role="search" method="get" id="searchform" class="searchform" action="http://localhost/learningwp/">
	<div>
		<label class="screen-reader-text" for="s">Search for:</label>
		<input value="" name="s" id="s" type="text" placeholder="<?php the_search_query(); ?>" />
		<input id="searchsubmit" value="Search" type="submit">
	</div>
</form>