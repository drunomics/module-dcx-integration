<?php

namespace Drupal\dcx_integration\Asset;

/**
 * Class Article.
 *
 * @package Drupal\dcx_integration\Asset
 */
class Article extends BaseAsset {
  public static $mandatoryAttributes = [
    'id',
    'title',
    'body',
  ];

  public static $optionalAttributes = [
    'files',
  ];

  /**
   * Constuctor.
   *
   * @param array $data
   *   Data representing this asset.
   */
  public function __construct(array $data) {
    parent::__construct($data, self::$mandatoryAttributes, self::$optionalAttributes);
  }

}
