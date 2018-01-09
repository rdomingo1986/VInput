<?php 
class ValidConfig {

  private $default = 'default';

  private $validations = [
    'default' => [
      'group-name' => [
        [

        ]
      ]
    ],
    'another_one' => [ ]
  ];

  function __construct($validation = 'default', $validationGroup) {
    $this->validation = $this->validations[$validation][$validationGroup];
  }
}