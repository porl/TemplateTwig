<?php

require(dirname(__FILE__) . '/sitedefaults.inc');

echo $page->twig->render('basic-page.html.twig', $twig_vars);
