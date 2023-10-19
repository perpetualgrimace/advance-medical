<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?= $site->language()->code() ?>"> <!--<![endif]-->
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <!--<meta name="google-site-verification" content="google-verification-here">-->

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?php

  // meta text and image for linking and sharing
  snippet('global-head-seo');

  // favicon and touch icons
  snippet('global-head-icons');

  // if on localhost, use the dev stylesheet
  echo css('assets/build/css/main.min.css');

  ?>

</head>
