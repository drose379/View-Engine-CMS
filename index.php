<?php

require 'ViewEngine.php';
$view = new ViewEngine( "testTemplate.php" );
$view->setValue( "header", "This is the header!" );
$view->setValue( "items", array( "Brittany", "Dylan" ) );
$view->view();
