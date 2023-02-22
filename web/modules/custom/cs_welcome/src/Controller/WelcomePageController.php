<?php

namespace Drupal\cs_welcome\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Welcome page module.
 */
class WelcomePageController extends ControllerBase {

  /**
   * Returns a simple message page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function home() {
    return [
      '#markup' => 'Hello World',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheMaxAge() {
    // Cache this for 1 minute.
    return 60;
  }

}