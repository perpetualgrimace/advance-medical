<?

// set search scope
if (isset($searchTarget)) {
  $searchUrl = $pages->findBy('intendedTemplate', $searchTarget)->url();
} else {
  $searchUrl = $pages->find('search')->url();
}

// set search text input placeholder text
if (isset($searchPlaceholder)) { // passed from template
  $searchPlaceholder = $searchPlaceholder;
} elseif ($page->template() == 'error') {
  $searchPlaceholder = $pages->find('error')->searchPlaceholder();
} else {
  $searchPlaceholder = $pages->find('search')->searchPlaceholder();
}

// set button text
$searchButton = $pages->find('search')->searchButton();

?>

<form class="search append-button" method="get" action="<?= $searchUrl ?>">

  <? snippet('svg-img', ['filename' => 'icons/search', 'class' => 'search-icon']) ?>

  <input id="search" class="search-input milli" type="search" name="q" placeholder="<?= $searchPlaceholder ?>">

  <button class="search-submit milli button" type="submit"><?= $searchButton ?></button>

</form>
