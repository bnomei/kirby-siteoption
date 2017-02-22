<?php

$kirby->set('tag', 'siteoption', array(
  'attr' => array('output'),
  'html' => function($tag) {
    $option = $tag->attr('siteoption');
    if($tag->attr('output') == 'kirbytext') {
    	return kirby()->site()->{$option}()->kirbytext();
    } else {
    	return kirby()->site()->{$option}()->value();
    }
  }
));
