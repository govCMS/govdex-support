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
      <a class="span12" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="coa">
        <img id="coa" width="272" height="64" src="<?php echo drupal_get_path('theme',$GLOBALS['theme']) ?>/images/coas.svg" alt="Australian Government" class="header__logo-image" />
        <img id="logo" width="78" height="90" alt="govdex" src="<?php echo drupal_get_path('theme',$GLOBALS['theme']) ?>/images/gds.svg">
      </a>
      <?php print render($page['header']); ?>
    </div>
  </header>

  <div class="container">
    <div class="row">
      <?php print render($page['highlighted']); ?>
    </div>

    <div class="row">
      <div id="corporateBlue" class="span8 offset2">
          <div class="row">
            <div class="span7">
              <?php print render($page['homesearch']); ?>

              <ul class="bigGrid">
                <li>
                  <a href="/administrators">
                    <i class="fa fa-user"></i>
                    <span>Administrators</span>
                  </a>
                </li>
                <li>
                  <a href="/members">
                    <i class="fa fa-users"></i>
                    <span>Members</span>
                  </a>
                </li>
                <li>
                  <a href="/contact-us">
                    <i class="fa fa-envelope"></i>
                    <span>Contact Us</span>
                  </a>
                </li>
                <li>
                  <a href="/notices/">
                    <i class="fa fa-bullhorn"></i>
                    <span>Notices</span>
                  </a>
                </li>
                <li>
                  <a href="/glossary">
                    <i class="fa fa-book"></i>
                    <span>Glossary</span>
                  </a>
                </li>
                <li>
                  <a href="/frequently-asked-questions">
                    <i class="fa fa-question-circle"></i>
                    <span>FAQs</span>
                  </a>
                </li>
              </ul>

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
