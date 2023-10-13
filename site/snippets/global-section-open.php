<?php

if (isset($class)) { $class = $class; } else { $class = NULL; };
if (isset($id)) { $id = $id; } else { $id = NULL; };

?>


<div class="section<?php e($class != NULL, ' ' . $class) ?>"<?php e($id != NULL, ' id="' . $id . '"') ?>>
