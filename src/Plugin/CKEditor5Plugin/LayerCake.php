<?php

namespace Drupal\ckeditor5_layercake\Plugin\CKEditor5Plugin;

use Drupal\ckeditor5\Plugin\CKEditor5PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * CKEditor5 LayerCake plugin.
 *
 * Provides layout elements and options provided by the CKEditor5 plugin.
 *
 * @CKEditor5Plugin(
 *   id = "ckeditor5_layerCake",
 *   label = @Translation("CKEditor5 LayerCake"),
 *   viewElements = {
 *     "<h1 class>",
 *     "<div class>",
 *     "<section class>",
 *   },
 * )
 */
class LayerCake extends CKEditor5PluginBase {

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [
      'toolbar' => ['simpleBox'],
      'plugins' => ['layerCake' => 'SimpleBox'],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getLibraries() {
    return ['ckeditor5_layercake/layercake'];
  }

}
