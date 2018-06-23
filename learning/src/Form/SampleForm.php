<?php
/**
 * Created by PhpStorm.
 * User: Arul
 * Date: 6/23/2018
 * Time: 8:21 PM
 */

namespace Drupal\learning\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class SampleForm extends FormBase {

  public function getFormId() {
    return 'sample_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['first_name'] = [
      '#type' => 'textfield',
      '#title' => 'First Name',
      '#size' => 45,
    ];

    $form['last_name'] = [
      '#type' => 'textfield',
      '#title' => 'Last Name',
      '#size' => 45,
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => 'Save',
    ];

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    // TODO: Implement submitForm() method.
  }

}