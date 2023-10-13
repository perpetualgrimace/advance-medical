<?

// check for optional variables passed from template
if(isset($layout)): $layout = $layout; else: $layout = 'g-4'; endif;

if ($page->category() != '') {
  $category = $page->category();
  $category = dehash(preg_replace('/\s+/', '', $category));
} else {
  $category = '';
}

?>

<aside class="sidebar g-col u-left-center <?= $layout ?>">

  <h2 class="delta"><?= $page->parent()->shareHeading() ?></h2>

  <ul class="share-container u-left u-margins-auto">

    <li class="share-item">
      <? snippet('svg-img', array('filename' => 'icons/twitter', 'class' => 'share-img')) ?>
      <a class="share share-twitter milli" target="_blank"
        href="https://twitter.com/share?url=<?= $page->url() ?>&text=<?= excerpt($page->title(), 60) ?>&via=<?= $pages->find('contact')->twitter() ?>&hashtags=<?= $category ?>">
          Twitter
      </a>
    </li>

    <li class="share-item">
      <? snippet('svg-img', array('filename' => 'icons/facebook', 'class' => 'share-img')) ?>
      <a class="share share-facebook milli" target="_blank"
        href="http://www.facebook.com/sharer.?u=<?= $page->url() ?>">
          Facebook
      </a>
    </li>

    <li class="share-item">
      <? snippet('svg-img', array('filename' => 'icons/linkedin', 'class' => 'share-img')) ?>
      <a class="share share-linkedin milli" target="_blank"
        href="http://www.linkedin.com/shareArticle?url=<?= $page->url() ?>&title=<?= $page->title() ?>">
          LinkedIn
      </a>
    </li>

  </ul>

</aside>
