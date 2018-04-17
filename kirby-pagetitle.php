<?php

/**
 * KirbyPagetitle
 *
 * Included snippet:
 * snippet('favicon')
 *
 */

namespace KirbyPagetitle;

class KirbyPagetitle {
  public static function register () {
    kirby()->set('snippet', 'pagetitle', __DIR__ . '/snippets/pagetitle.php');
  }
}

KirbyPagetitle::register();
