<div class="contact-info-group g-col <?= $layout ?>" itemscope itemtype="http://schema.org/LocalBusiness">

  <h4 class="contact-info-title u-upper delta u-body-font" itemprop="name"><?= $city . ', ' . $country ?></h4>

  <ul class="contact-info-list">

    <?php if ($address1 != '' || $address2 != ''): ?>
      <li class="contact-info-item">
        <?php snippet('icon-location-dark.svg') ?>
        <?php if($country != 'China'): ?>
        <a class="contact-info-link milli" href="https://maps.google.com/?q=<?= $address1 . ' ' . $address2 . ' ' . $country ?>" itemprop="streetAddress"><?= $address1 . ' <br>' . $address2 ?></a>
        <?php else: ?>
        <p class="contact-info-link milli" itemprop="streetAddress"><?= $address1 . ' <br>' . $address2 ?></p>
        <?php endif ?>
      </li>
    <?php endif ?>


    <?php if ($phone != ''): ?>
      <li class="contact-info-item">
        <?php snippet('icon-phone-dark.svg') ?>
        <a class="contact-info-link milli" href="tel:<?= sanitizePhone($phone) ?>" itemprop="streetAddress"><?= $phone ?></a>
      </li>
    <?php endif ?>

    <li class="contact-info-item">
      <?php snippet('icon-email-dark.svg') ?>
      <a class="contact-info-link milli" href="mailto:<?= $email ?>" itemprop="email"><?= $email ?></a>
    </li>

  </ul>

</div>
