<?php

require(dirname(__FILE__) . '/twigdefaults.inc');

//generate random home image
$twig_vars['randomImage'] = $twig_vars['homepage']->images->getRandom();
$twig_vars['randomThumb'] = $twig_vars['randomImage']->size(232, 176);
