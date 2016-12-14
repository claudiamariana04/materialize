<?php

$div  = '<div id="' . $id . '" class="col s12">';
$div .= '<div class="container">';
$div .= '<br><br><h1 class="header center red-text">';
$div .= $titulo;
$div .= '</h1><div class="row center">';
$div .= '<h5 class="header col s12 light">';
$div .= $descripcion;
$div .= '</h5></div></div></div>';

return $div;
