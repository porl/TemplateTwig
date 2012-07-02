<?php

include(__DIR__ . '/twigdefaults.inc');

echo $page->twig->render('sitemap.html.twig', $twig_vars);