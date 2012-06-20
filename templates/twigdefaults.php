<?php

$twig_vars['pages'] = $pages;
$twig_vars['config'] = $config;
$twig_vars['homepage'] = $pages->get("/");

$twig_vars['page'] = $page;

/**
 * initialises each field of $page. this is overkill but can be used if you don't want to keep
 * adding individual fields to the controllers.
 */


// foreach ($pages->fields as $field) {
// 	$twig_vars['page']->$field = $page->$field;
	
// }
