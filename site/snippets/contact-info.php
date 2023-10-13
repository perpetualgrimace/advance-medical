<h2 class="u-screenreader"><?= $page->infoHeading() ?></h2>

<?

$continents = ['NA', 'SA', 'Africa', 'Oceana', 'WE', 'CE', 'Asia'];

// loop through each continent
foreach($continents as $continent):

  // get the name of the field
  $infoField = 'info' . $continent;

    // convert structure field to yaml
    $infos = $page->$infoField()->yaml();

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
    $locationCount = count($infos);

    // if locations exist for the continent
    if ($locationCount > 0):

      // get parent grid classes
      if ($locationCount <= 2) {
        $containerGridClass = 'g-' . ($locationCount * 4);
      } else {
        $containerGridClass = 'g-12';
      }

      // get child grid classes
      $childGridClass = 'g-' . (12 / $locationCount);

    ?>


    <div class="g-col <?= $containerGridClass ?>">

      <h3 class=""><?= $continent ?></h3>

      <div class="g-columns u-margin-top-sm">
        <div class="g-col u-full-height">

        <?

        foreach ($infos as $info) {
          pattern('contact-info', [
             'city' => $info['city'],
             'country' => $info['country'],
             'address1' => $info['address1'],
             'address2' => $info['address2'],
             'phone' => $info['phone'],
             'email' => $info['email'],
             'layout' => $childGridClass
          ]);
        }

        ?>

      </div><!-- g-col (city) -->
    </div><!-- g-columns (cities) -->
  </div><!-- g-col (continent) -->

  <? endif; // location > 0 ?>
<? endforeach; // continents ?>
