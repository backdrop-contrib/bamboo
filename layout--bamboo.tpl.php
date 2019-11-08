<?php
/**
 * @file
 * Custom layout template for Bamboo.
 */
?>

<div class="layout--bamboo <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>

  <a href="#main-content" class="skip-link element-invisible element-focusable">
    <?php print t('Skip to main content'); ?>
  </a>

  <a class="l-sidebar-toggle" title="<?php print t('Toggle sidebar'); ?>">
    <span><?php print t('Toggle sidebar'); ?></span>
  </a>

  <aside class="l-sidebar"><div class="l-inner">
    <?php print $content['sidebar']; ?>
  </div></aside>

  <main class="l-main"><div class="l-inner">

    <?php if ($messages): ?>
      <div class="l-messages"><?php print $messages; ?></div>
    <?php endif; ?>

    <div class="l-page-title" id="main-content">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
    </div>

    <?php if ($tabs): ?>
      <nav class="tabs"><?php print $tabs; ?></nav>
    <?php endif; ?>

    <?php print $action_links; ?>

    <div class="l-content">
      <?php print $content['content']; ?>
    </div>

  </div></main>

</div>
