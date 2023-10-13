<svg class="contact-locations" width="760px" height="453px" viewBox="0 0 760 453" xmlns="http://www.w3.org/2000/svg">
  <g id="locations" fill="#002A54" stroke-width="1px" stroke="#ffffff">
    <circle class="contact-location-dot" id="location-boston" cx="195.5" cy="166" r="6"></circle>
    <circle class="contact-location-dot" id="location-santiago" cx="192" cy="361" r="6"></circle>
    <circle class="contact-location-dot" id="location-s--o-paulo" cx="247" cy="340" r="6"></circle>
    <circle class="contact-location-dot" id="location-shanghai" cx="636" cy="194" r="6"></circle>
    <circle class="contact-location-dot" id="location-lisbon" cx="335" cy="180" r="6"></circle>
    <circle class="contact-location-dot" id="location-budapest" cx="397" cy="156" r="6"></circle>
    <circle class="contact-location-dot" id="location-barcelona" cx="356" cy="174" r="6"></circle>
    <circle class="contact-location-dot" id="location-brighton" cx="353" cy="147" r="6"></circle>
    <!--

    To add a new location to the map, use the follwing syntax:

    <circle class="contact-location-dot" id="location-city-name" cx="x-coordinate" cy="y-coordinate" r="6"></circle>

    location-city-name:
    - "location-" followed by the name of the city
    - If the city contains an accented character, the accented character will need to be replaced by two dashes. So, 'location-são-paulo' is 'location-s[two hyphens here]o-paulo'.

    x-coordinate and y-coordinate
    - These attributes determine the circle's placement on the map.
    - The viewBox is 760px wide by 453px tall, so if you want to place a dot at the very center of the map, you would use cx="380" and cy="226.5".

    -->
  </g>
  <image src="<?= $site->url() ?>/assets/img/graphics/locations.png" />
</svg>
