<?php

class ViewEngine {

	private $_templateFile;
	private $_content;

	public function __construct( $templateFile ) {
		$this->_templateFile = $templateFile;
	} 

	public function setValue( $key, $value ) {
		$this->_content[$key] = $value;
	}

	public function view() {
		extract( $this->_content );
		$output = require $this->template;
		return $output;
	}
	
}