<?php

include(__DIR__ . '/sitedefaults.inc');

echo $page->twig->render('sitemap.html.twig', $twig_vars);