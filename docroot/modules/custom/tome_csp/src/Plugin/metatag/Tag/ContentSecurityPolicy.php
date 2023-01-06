<?php

namespace Drupal\tome_csp\Plugin\metatag\Tag;

use Drupal\metatag\Plugin\metatag\Tag\MetaHttpEquivBase;

/**
 * Content security policy as a metatag plugin.
 *
 * @MetatagTag(
 *   id = "csp",
 *   label = @Translation("Content security policy"),
 *   description = @Translation("Provide a custom content security policy as a string. Useful for a static site where headers cannot be controlled."),
 *   name = "Content-Security-Policy",
 *   group = "advanced",
 *   weight = 500,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class ContentSecurityPolicy extends MetaHttpEquivBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}
