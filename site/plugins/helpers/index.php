<?php

// sanitize strings
function sanitize( $string ) {
  return strtolower( preg_replace( '/[^a-z0-9]/i', '-', $string ));
}

// sanitize phone numbers
function sanitizePhone( $string ) {
  return preg_replace( '/[^0-9\+]/i', '', $string );
}

// remove hash
function dehash( $string ) {
  return str_replace( '#', '', $string );
}

// remove opening and closing tags from kirbytext
function ktStrip( $string ) {
  return $string; // TODO: fix
  // return str::substr($string->value->kirbytext(), 3, -4);
}

?>
