<?php
/**
 * Created by PhpStorm.
 * User: Arul
 * Date: 6/23/2018
 * Time: 7:31 PM
 */

namespace Drupal\learning\Controller;

use Drupal\Core\Controller\ControllerBase;

class LearningController extends ControllerBase {

  public function first_page() {

    $userCurrent = \Drupal::currentUser();
    $name = $userCurrent->getUsername();
    $renderable = [
      '#theme' => 'learning',
      '#test_var' => $name,
    ];
    //   $rendered = \Drupal::service('render')->render($renderable);
    // return $rendered;
    return $renderable;
  }
}