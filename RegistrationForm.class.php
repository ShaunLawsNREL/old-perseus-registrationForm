<?php
/**
 * @file
 * A registration form built on Perseus.
 */
namespace Perseus\Tools;

use Perseus\Form;

class RegistrationForm extends Form {
  // Constructor
  public function __construct($system, $settings = array()) {
    parent::__construct($system, $settings);

    // Build the form
    $this->createNameText();
    $this->createAffiliationText();
    $this->createAddressText();
    $this->createCityText();
    $this->createStateSelect();
    $this->createCountrySelect();
    $this->createZipText();
    $this->createPhoneText();
    $this->createFaxText();
    $this->createEmailText();
  }

  /**
   * Create the address field.
   */
  private function createAddressText() {
    $data = array(
      'name' => 'address',
      'label' => 'Address:',
      'attributes' => array(
        'maxlength' => 128,
      ),
      'validators' => array('plain_text'),
    );
    $this->addItem('text', $data);
  }

  /**
   * Create the affiliation field.
   */
  private function createAffiliationText() {
    $data = array(
      'name' => 'affiliation',
      'label' => 'Affiliation:',
      'attributes' => array(
        'maxlength' => 128,
      ),
      'validators' => array('plain_text'),
    );
    $this->addItem('text', $data);
  }

  /**
   * Create the affiliation field.
   */
  private function createCityText() {
    $data = array(
      'name' => 'city',
      'label' => 'City:',
      'attributes' => array(
        'maxlength' => 128,
      ),
      'validators' => array('plain_text'),
    );
    $this->addItem('text', $data);
  }

  /**
   * Create the select of US states.
   */
  private function createCountrySelect() {
    $data = array(
      'name' => 'country',
      'label' => 'Country:',
      'options' => get_countries(),
    );
    $this->addItem('select', $data);
  }

  /**
   * Create the email field.
   */
  private function createEmailText() {
    $data = array(
      'name' => 'mail',
      'label' => 'E-mail',
      'attributes' => array(
        'maxlength' => 128,
      ),
      'validators' => array('email'),
    );
    $this->addItem('text', $data);
  }

  /**
   * Create the affiliation field.
   */
  private function createFaxText() {
    $data = array(
      'name' => 'fax',
      'label' => 'Fax:',
      'attributes' => array(
        'maxlength' => 128,
      ),
      'validators' => array('plain_text'),
    );
    $this->addItem('text', $data);
  }

  /**
   * Create the name field.
   */
  private function createNameText() {
    $data = array(
      'name' => 'name',
      'label' => 'First, Middle Initial & Last:',
      'attributes' => array(
        'maxlength' => 128,
      ),
      'validators' => array('plain_text'),
    );
    $this->addItem('text', $data);
  }

  /**
   * Create the affiliation field.
   */
  private function createPhoneText() {
    $data = array(
      'name' => 'phone',
      'label' => 'Phone:',
      'attributes' => array(
        'maxlength' => 128,
      ),
      'validators' => array('phone'),
    );
    $this->addItem('text', $data);
  }

  /**
   * Create the select of US states.
   */
  private function createStateSelect() {
    $data = array(
      'name' => 'states',
      'label' => 'State/Province:',
      'options' => array_merge(get_us_states(), get_canadian_provinces()),
    );
    $this->addItem('select', $data);
  }

  /**
   * Create the affiliation field.
   */
  private function createZipText() {
    $data = array(
      'name' => 'zip',
      'label' => 'Zip/Postal Code:',
      'attributes' => array(
        'maxlength' => 128,
      ),
      'validators' => array('plain_text'),
    );
    $this->addItem('text', $data);
  }
}