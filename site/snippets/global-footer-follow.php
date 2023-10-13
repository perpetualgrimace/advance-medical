<?

// get social items
$items = ['Facebook', 'Twitter', 'LinkedIn']

?>

<h3 class="footer-heading delta u-upper"><?= $site->footerFollowHeading() ?></h3>

<ul class="footer-follow-list inline-list u-margin-top-sm">
  <?
    foreach ($items as $item):

    $urlField      = $item . 'Url';
    $socialUrl     = $pages->find('contact')->$urlField();
    $socialAccount = $pages->find('contact')->$item();
    $socialIcon    = 'icons/' . strtolower($item) . '-white';

    if ($socialUrl != '' && $socialAccount != ''):
  ?>
    <li class="footer-follow-item milli">
      <a class="footer-follow-link footer-link nav-link u-inline-img" href="<?= $socialUrl . $socialAccount ?>">
        <? snippet('svg-img', array('filename' => $socialIcon, 'class' => 'footer-follow-img')) ?>
        <?= $item ?>
      </a>
    </li>
  <? endif; endforeach ?>
</ul>
