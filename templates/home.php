<?php

include(__DIR__ . '/sitedefaults.inc');

echo $page->twig->render('basic-page.html.twig', $twig_vars);