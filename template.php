<?php

/**
 * @file
 * template.php
 */


/**
 * Implement hook_js_alter()
 * Attempt to replace the system jQuery on non admin and non node admin pages with a newer version provided by the theme
 */

function govdexsupport_js_alter(&$javascript) {
  $node_admin_paths = array(
    'node/*/edit',
    'node/add',
    'node/add/*',
    'node/*/extend_review_date',
  );
  $replace_jquery = TRUE;
  if (path_is_admin(current_path())) {
    $replace_jquery = FALSE;
  } else {
    foreach ($node_admin_paths as $node_admin_path) {
      if (drupal_match_path(current_path(), $node_admin_path)) {
        $replace_jquery = FALSE;
      }
    }
  }
// Swap out jQuery to use an updated version of the library.
  if ($replace_jquery) {
    $javascript['misc/jquery.js']['data'] = '//code.jquery.com/jquery-2.2.4.min.js';
    $javascript['misc/jquery.form.js']['data'] = '//cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js';
  }
}


/**
* Implements hook_form_alter()
*/
function govdexsupport_form_alter(&$form, &$form_state, $form_id) {
  $form['actions']['submit']['#attributes']['class'][] = 'btn-primary';
}
