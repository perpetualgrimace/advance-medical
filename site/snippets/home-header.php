<?

$slides = $page->heroSlides()->toStructure();
$i = 0;

?>

<header class="home-header header u-fullwidth dark-theme" role="banner">

  <!-- headline -->
  <div class="g-container home-headline-container">
    <div class="g-col g-10">
      <h1 class="home-headline display giga">
        <?= $page->headline() ?>
      </h1>
      <div class="home-hero-text">
        <?= $page->heroText()->kt() ?>
      </div>
    </div>
  </div>

  <!-- slideshow -->
  <div class="home-slideshow-container u-margin-top-off u-margin-top-off-children" width="0" height="0">
    <? foreach($slides as $slide):
      $i++;
    ?>
      <img class="home-slideshow-img" <? if($i > 1) { echo 'data-'; } ?>src="<?= $site->url() . '/content/home/' . $slide->slide() ?>" alt="" draggable="false">
      <? if($i > 1): ?><noscript>
        <img class="home-slideshow-img" src="<?= $site->url() . '/content/home/' . $slide->slide() ?>" alt="" draggable="false">
      </noscript><? endif ?>
    <? endforeach ?>
  </div>


  <? /*
  <!-- video -->
  <div class="home-video-container u-margin-top-off u-margin-top-off-children" width="0" height="0">
    <video class="home-video" id="video-background" preload="auto" autoplay loop="loop" muted>
      <source data-src="<?= $site->url() ?>/content/home/video.mp4"  type="video/mp4">
      <source data-src="<?= $site->url() ?>/content/home/video.webm" type="video/webm">
      <source data-src="<?= $site->url() ?>/content/home/video.ogv"  type="video/ogv">
    </video>
  </div> */ ?>

</header>
