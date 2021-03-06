<?php

namespace Drupal\mollo_location\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\mollo_location\Utils\MolloLocationTrait;

/**
 * Class MolloLocationController.
 *
 * Provides a Page.
 * Public  Vars for Twig Var Suggestion. Use in Template via:
 * {# @var mollo_location \Drupal\mollo_location\Controller\MolloLocationController #}
 *
 *
 */
class MolloLocationController extends ControllerBase {

  use MolloLocationTrait;

  public $test;
  public $foo;
  public $bar;

  /**
   * Build a Page with twig template.
   *
   * @return array[]
   *   Drupal Array
   */
  public function page(): array {

    $template_name = 'mollo-location-page.html.twig';
    $template_file = $this->getTemplatePath() . $template_name;
    $template = file_get_contents($template_file);

    return [
      'description' => [
        '#type' => 'inline_template',
        '#template' => $template,
        '#context' => $this->getPageVars(),

        // Disabling cache for this Page.
        '#cache' => [
          'max-age' => 0,
        ],
      ],
    ];
  }

  /**
   * Generate some Variables for Twig testing.
   *
   * @return array
   *   List with test vars
   */
  private function getPageVars(): array {

    $test = TRUE;
    $foo = 'Foo - Page';
    $bar = 'Bar - Page';

    $variables['mollo_page']['test'] = $test;
    $variables['mollo_page']['foo'] = $foo;
    $variables['mollo_page']['bar'] = $bar;

    return $variables;
  }

}
