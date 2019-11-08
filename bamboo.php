<?php
/**
 * @file
 * Custom preprocess functions for Bamboo.
 */

/**
 * Process variables for the Bamboo layout.
 */
function template_preprocess_layout__bamboo(&$variables) {
  // Add the javascript for the sidebar toggle link.
  backdrop_add_js(backdrop_get_path('layout', 'bamboo') . '/bamboo.js');
}
