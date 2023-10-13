<div class="g-col g-4 content">

  <h3><?= $page->locationsHeading() ?></h3>

  <div class="small-columns u-margin-top">

  <?php

  $continents = ['NA', 'SA', 'Africa', 'Oceana', 'WE', 'CE', 'Asia'];

  // loop through each continent
  foreach($continents as $continent):

    // get the name of the field
    $mapField = 'info' . $continent;

      // convert structure field to yaml
      $locations = $page->$mapField()->yaml();

      // replace shortened continent names
      if ($continent == 'NA') {
        $continent = 'North America';
      } elseif ($continent == 'SA') {
        $continent = 'South America';
      } elseif ($continent == 'WE') {
        $continent = 'Western Europe';
      } elseif ($continent == 'CE') {
        $continent = 'Central Europe';
      }

      // get number of locations for the continent
      $locationCount = count($locations);

      // if locations exist for the continent
      if ($locationCount > 0): ?>

      <div class="column-group u-margin-bottom">
        <h4 class="u-margin-top-sm milli u-upper u-body-font"><?= $continent ?></h4>

        <ul class="contact-list bullets u-line-height-tight">

        <?php foreach ($locations as $location):
          $locationName = $location['city'] . ', ' . $location['country'];
          $locationLink = 'location-' . sanitize($location['city']);

        ?>

          <li class="contact-item milli">
            <a href="#<?= $locationLink ?>" class="contact-link u-underline-off">
              <?= $locationName ?>
            </a>
          </li>

        <?php endforeach ?>

        </ul>
      </div>

    <?php endif;
  endforeach; ?>
  </div>
</div>
