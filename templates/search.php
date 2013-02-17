<?php

require(dirname(__FILE__) . '/sitedefaults.inc');

if($q = $sanitizer->selectorValue($input->get->q)) {

	// Send our sanitized query 'q' variable to the whitelist where it will be
	// picked up and echoed in the search box by the head.inc file.
	$input->whitelist('q', $q);

	// Search the title, body and sidebar fields for our query text.
	// Limit the results to 50 pages.
	// Exclude results that use the 'admin' template.
	$twig_vars['matches'] = $pages->find("title|body|sidebar~=$q, limit=50");

	echo $page->twig->render('search-results.html.twig', $twig_vars);
	
} else {
	echo $page->twig->render('search.html.twig', $twig_vars);
}
