<?php
/**
 * @file
 * Template for a complex 3-3-4 column layout.
 *
 * This template mimics the display of the legacy "Bartik" layout, which
 * includes responsive and collapsible columns.
 *
 * Variables:
 * - $title: The page title, for use in the actual HTML content.
 * - $messages: Status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links: Array of actions local to the page, such as 'Add menu' on
 *   the menu administration interface.
 * - $classes: Array of CSS classes to be added to the layout wrapper.
 * - $attributes: A string of attributes to be added to the layout wrapper.
 * - $content: An array of content, each item in the array is keyed to one
 *   region of the layout. This layout supports the following sections:
 *   - $content['header']
 *   - $content['top']
 *   - $content['content']
 *   - $content['sidebar_first']
 *   - $content['sidebar_second']
 *   - $content['triptych_first']
 *   - $content['triptych_middle']
 *   - $content['triptych_last']
 *   - $content['footer_firstcolumn']
 *   - $content['footer_secondcolumn']
 *   - $content['footer_thirdcolumn']
 *   - $content['footer_fourthcolumn']
 *   - $content['footer']
 */
?>
<div class="layout--three-three-four-column <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php if ($content['header']): ?>
    <header class="l-header" role="banner" aria-label="<?php print t('Site header'); ?>">
      <div class="l-site-width-wrapper l-row">
        <div class="l-col-xs-12 l-header-inner-wrapper">
          <?php print $content['header']; ?>
        </div>
      </div>
    </header>
  <?php endif; ?>

  <?php if ($messages): ?>
    <div class="l-messages l-row">
      <div class="l-site-width-wrapper l-col-xs-12">
        <?php print $messages; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($content['top']): ?>
    <div class="l-top">
      <div class="l-site-width-wrapper l-top-inner-wrapper l-row">
        <div class="l-col-xs-12">
          <?php print $content['top']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="l-container">
    <div class="l-site-width-wrapper l-container-inner-wrapper l-row">
      <main class="l-content l-col-xs-12 l-col-lg-6 l-order-lg-1" role="main">
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="page-title">
            <?php print $title; ?>
          </h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>

        <?php if ($tabs): ?>
          <div class="tabs">
            <?php print $tabs; ?>
          </div>
        <?php endif; ?>

        <?php print $action_links; ?>
        <?php print $content['content'] ? $content['content'] : '&nbsp;'; ?>
      </main>

      <?php if ($content['sidebar_first']): ?>
        <div class="l-sidebar-first l-sidebar l-col-xs-12 l-col-md-6 l-col-lg-3">
          <?php print $content['sidebar_first']; ?>
        </div>
      <?php endif; ?>

      <?php if ($content['sidebar_second']): ?>
        <div class="l-sidebar-second l-sidebar l-col-xs-12 l-col-md-6 l-col-lg-3 l-order-lg-2">
          <?php print $content['sidebar_second']; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <?php if ($content['triptych_first'] || $content['triptych_middle'] || $content['triptych_last']): ?>
    <div class="l-triptych l-row">
      <div class="l-site-width-wrapper l-triptych-inner-wrapper">
        <div class="l-triptych-first">
          <?php print $content['triptych_first']; ?>
        </div>
        <div class="l-triptych-middle">
          <?php print $content['triptych_middle']; ?>
        </div>
        <div class="l-triptych-last">
          <?php print $content['triptych_last']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($content['footer'] || $content['footer_firstcolumn'] || $content['footer_secondcolumn'] || $content['footer_thirdcolumn'] || $content['footer_fourthcolumn']): ?>
    <footer class="l-footer">
      <?php if ($content['footer_firstcolumn'] || $content['footer_secondcolumn'] || $content['footer_thirdcolumn'] || $content['footer_fourthcolumn']): ?>
        <div class="l-footer-columns">
          <div class="l-site-width-wrapper l-footer-columns-inner-wrapper">
            <div class="l-footer-first-column">
              <?php print $content['footer_firstcolumn']; ?>
            </div>
            <div class="l-footer-second-column">
              <?php print $content['footer_secondcolumn']; ?>
            </div>
            <div class="l-footer-third-column">
              <?php print $content['footer_thirdcolumn']; ?>
            </div>
            <div class="l-footer-fourth-column">
              <?php print $content['footer_fourthcolumn']; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php if ($content['footer']): ?>
        <div class="l-footer-bottom">
          <div class="l-site-width-wrapper l-footer-bottom-inner-wrapper">
            <?php print $content['footer']; ?>
          </div>
        </div>
      <?php endif; ?>
    </footer>
  <?php endif; ?>
</div>
