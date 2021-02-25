<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 */
?>
<div class="page-wrapper">
  <div class="page">
  <header class="site-header" id="site-header">
    <div class="site-branding">
      <div class="site-logo">
        <a href="<?php print($logo_url);?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <?php include("inc/logo.tpl.php"); ?>
        </a>
      </div>
    </div>
    <nav class="site-navigation">
      <?php print theme('links__system_main_menu', array('links' => $main_menu, 'heading' => '')); ?>
    </nav>
    <?php if ($main_menu): ?>
      <div class="menu-toggle"><button><span class="text">Menu</span></button></div>
    <?php endif; ?>
  </header>

   <?php if ($page['search']): ?>
    <div class="site-search">
      <?php print render($page['search']); ?>
    </div>
  <?php endif; ?>

    <div class="primary-content">
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php print $messages; ?>

      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

      <a id="primary-content"></a>
      <div class="content"><?php print render($page['content']); ?></div>
    </div>

  <footer class="site-footer" id="site-footer">
      <?php if ($page['footer']): ?>
       <?php print render($page['footer']); ?>
      <?php else: ?>
      <nav class="footer-navigation menu">
       <?php print theme('links__system_main_menu', array('links' => $main_menu, 'heading' => '')); ?>
      </nav>
      <p class="terms">Dit is een site van de SP &copy; <?php print date('Y'); ?> Alle rechten voorbehouden.<br> Afbeeldingen zijn te gebruiken onder CC-BY-ND 3.0 licentie, tenzij anders aangegeven.<br> Meer informatie over privacy en verwerking van gegevens is te vinden op onze <a href="https://www.sp.nl/privacy">privacy pagina</a>.</p>
      <?php endif; ?>
  </footer>
</div>
</div>
