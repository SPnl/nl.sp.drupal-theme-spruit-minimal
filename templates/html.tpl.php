<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single Drupal page.
 */ ?>
<!doctype html>
<html class="no-js" lang="nl-NL">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
  </head>
  <body class="<?php print $classes; ?>" <?php print $attributes;?>>
    <nav class="skip-link invisible">
      <a href="#primary-content"><?php print t('Skip to content'); ?></a>
    </nav>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
  </body>
</html>
