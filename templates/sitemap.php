<?php

require(dirname(__FILE__) . '/sitedefaults.inc');

echo $page->twig->render('sitemap.html.twig', $twig_vars);
