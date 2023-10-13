<?php
kirbytext::$tags['pattern'] = array(
  'attr' => array(
  ),
  'html' => function($tag) {
  	$file =  $tag->attr('pattern');
  	return snippet($file, array(), true);
  }
);
