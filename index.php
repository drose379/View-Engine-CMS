<?php

require 'ViewEngine.php';

$viewEngine = new ViewEngine( "testTemplate.php" );
$viewEngine->setValue( "header", "This is the header!" );
$viewEngine->view();