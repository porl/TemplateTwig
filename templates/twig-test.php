<?php

include(__DIR__ . '/twigdefaults.php');

/**
 * instead of the below lines you can call twig_init_fields() to initialise all fields in a page
 * (including hidden fields and system fields etc)
 */

$twig_vars['page']->body = $page->body;
$twig_vars['page']->title = $page->title;


/**
 * call twig render function and pass variables to view
 */
echo $page->twig->render('twigtest.html', $twig_vars);