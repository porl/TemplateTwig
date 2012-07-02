<?php

include(__DIR__ . '/twigdefaults.inc');

echo $page->twig->render('basic-page.html.twig', $twig_vars);