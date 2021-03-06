<?php

namespace Drupal\mollo_location\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'twig_template_block' block.
 *
 * @Block(
 *  id = "mollo_location_twig_template_block",
 *  admin_label = @Translation("Twig Template Block"),
 *  category = @Translation("Mollo"),
 * )
 */
class TwigTemplateBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build(): array {

    $variables = $this->getVars();

    $build = [];
    $block = [
      '#theme' => 'twig_template_block',
      '#attached' => [
        'library' => ['mollo_location/block'],
      ],
      '#attributes' => [
        'class' => ['mollo-location'],
        'id' => 'twig-template-block',
      ],
      '#mollo_block' => $variables,

      // Disabling cache for this block.
      '#cache' => [
        'max-age' => 0,
      ],
    ];

    $build['twig_template_block'] = $block;
    return $build;
  }

  /**
   * Generates some Vars for Twig testing.
   *
   * @return array
   *   Returns Twig Vars
   */
  public function getVars(): array {
    $variables['foo'] = 'foo - Block:Twig';
    $variables['bar'] = 'bar - Block:Twig';
    $variables['test'] = TRUE;

    return $variables;
  }

}
