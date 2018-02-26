<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div id="notFooter">
  <header id="branding" class="row" role="banner">
    <div class="container">
      <a class="span12" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo">
        <img id="coa" width="272" height="64" src="/<?php echo drupal_get_path('theme',$GLOBALS['theme']) ?>/images/coas.svg" alt="Australian Government" class="header__logo-image" />
        <img id="logo" width="78" height="90" alt="govdex" src="/<?php echo drupal_get_path('theme',$GLOBALS['theme']) ?>/images/gds.svg">
      </a>
      <?php print render($page['header']); ?>
    </div>
  </header>

  <div class="container">
    <?php
    // Render the sidebar to see if there's anything in them.
    $sidebar  = render($page['sidebar']);

    $layout = $sidebar ? 'layout-sidebar' : 'layout-full';
    ?>
      <?php print $breadcrumb; ?>

      <?php print render($page['highlighted']); ?>

    <div class="row">
        <div class="span10 offset1" id="corporate">
          <div class="container-inner">
            <div class="<?php print $layout; ?>">

              <div class="<?php print $layout; ?>__main main-content" role="main">

                <a href="#skip-link" id="skip-content" class="element-invisible">Go to top of page</a>
                <a id="main-content"></a>
                <?php print render($title_prefix); ?>
                <?php if ($title): ?>
                  <h1 class="page__title title" id="page-title">Filtered by: <em><?php print $title; ?></em></h1>
                <?php endif; ?>
                <?php print render($title_suffix); ?>
                <?php print $messages; ?>
                <?php print render($tabs); ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?>
                  <ul class="action-links"><?php print render($action_links); ?></ul>
                <?php endif; ?>
                <?php print render($page['content']); ?>
                <?php print $feed_icons; ?>
              </div>

              <?php if ($sidebar): ?>
                <aside class="<?php print $layout; ?>__sidebar" role="complementary">
                  <?php print $sidebar; ?>
                </aside>
              <?php endif; ?>

            </div>
          </div>
        </div>
      </div>

    <div class="row">
      <?php print render($page['footer_top']); ?>
      <?php print render($page['footer_bottom']); ?>
    </div>
  </div>
</div>

<footer id="pageFooter" role="contentinfo">
  <?php print render($page['bottom']); ?>
</footer>
