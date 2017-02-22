<?php

$kirby->set('tag', 'siteoption', array(
  'attr' => array(),
  'html' => function($tag) {
    $option = $tag->attr('siteoption');
    return kirby()->site()->{$option}()->kirbytext();
  }
));
