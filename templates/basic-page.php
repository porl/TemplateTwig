<?php

include(__DIR__ . '/twigdefaults.inc');

$twig_vars['page']->body = $page->body;
$twig_vars['page']->title = $page->title;


echo $page->twig->render('basic-page.html.twig', $twig_vars);