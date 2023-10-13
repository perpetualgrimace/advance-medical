<?php

// for convenience
$siteTitle     = $site->title();
$pageTitle     = $page->title();
$pageTemplate  = $page->intendedTemplate();
$pageUrl       = $page->url();
$twitterHandle = '@' . $pages->find('contact')->twitter();


// tags
if($page->tags() != '') {
  $tags = $page->tags();
} else {
  $tags = $site->keywords();
}


// description
if($page->description() != '') {
  $description = $page->description();
} else {
  $description = $site->description();
}


// description when sharing
if($page->description() != '') {
  $shareDescription = $page->description();
} elseif($page->text() != '') {
  // TODO: replace with chopper $shareDescription = excerpt($page->text(), '140');
  $shareDescription = $page->text();
} else { $shareDescription = NULL; }


// image
if ($page->thumbImg() != '') {
  $img = $page->image($page->thumbImg())->url();
} elseif ($page->heroImg() != '') {
  $img = $page->image($page->heroImg())->url();
} else {
  $img = NULL;
}


// author
if($page->author() != '') {
  $author = $page->author();
} else {
  $author = $site->title();
}

?>

<!-- Search engines -->
<meta name="description" content="<?= $description ?>">
<meta name="keywords" content="<?= $tags ?>">


<!-- Google Plus -->
<meta itemprop="name" content="<?= $pageTitle ?>">
<?php if ($shareDescription != NULL): ?>
  <meta itemprop="description" content="<?= $shareDescription ?>">
<?php endif ?>
<?php if ($img != NULL): ?>
  <meta itemprop="image" content="<?= $img ?>">
<?php endif ?>


<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="<?= $twitterHandle ?>">
<meta name="twitter:title" content="<?= $pageTitle ?>">
<?php if ($shareDescription != NULL): ?>
  <meta name="twitter:description" content="<?= $shareDescription ?>">
<?php endif ?>
<?php if ($img != NULL): ?>
  <meta name="twitter:image:src" content="<?= $img ?>">
<?php endif ?>
<meta name="twitter:player" content="">


<!-- Open Graph General (Facebook & Pinterest) -->
<meta property="og:url" content="<?= $pageUrl ?>">
<meta property="og:title" content="<?= $pageTitle ?>">
<?php if ($shareDescription != NULL): ?>
  <meta name="og:description" content="<?= $shareDescription ?>">
<?php endif ?>
<meta property="og:site_name" content="<?= $siteTitle ?>">
<?php if ($img != NULL): ?>
  <meta name="og:image" content="<?= $img ?>">
<?php endif ?>
<meta property="fb:admins" content="">
<meta property="fb:app_id" content="">
<meta property="og:locale" content="en_US">


<!-- Open Graph Article (Facebook & Pinterest) -->
<?php if ($page->template() == 'blog'): ?>
  <meta property="og:type" content="article">
  <meta property="article:author" content="<?= $author ?>">
  <meta property="article:section" content="Advertising">
  <meta property="article:tag" content="<?= $tags ?>">
  <meta name="twitter:creator" content="<?= $twitterHandle ?>">
<?php else: ?>
  <meta property="og:type" content="website">
  <meta name="twitter:creator" content="<?= $twitterHandle ?>">
<?php endif ?>
