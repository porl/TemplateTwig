<?php

$twig_vars['pages'] = $pages;
$twig_vars['config'] = $config;
$twig_vars['page'] = $page;
$twig_vars['input'] = $input;

//add shortcut to homepage
$twig_vars['homepage'] = $pages->get("/");
