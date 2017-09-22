<?php

namespace Drupal\hello\Controller;
use Drupal\Core\Controller\ControllerBase;

class HelloNodeHistoryController extends ControllerBase {
    /**
   * {@inheritdoc}
   */
  public function content() {
    $rows = array('pom', 'pim');
    $build = array(
      '#theme' => 'table',
      '#header' => array($this->t('Auteur'), $this->t('Update time')),
      '#rows'   => $rows,
      );
    return $build;
  }

}
