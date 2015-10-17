<?php
function stark_theme() {
  $items = array();
    
  $items['user_login'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'yourtheme') . '/templates',
    'template' => 'user-login',
    'preprocess functions' => array(
       'yourtheme_preprocess_user_login'
    ),
  );
  $items['user_register_form'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'yourtheme') . '/templates',
    'template' => 'user-register-form',
    'preprocess functions' => array(
      'yourtheme_preprocess_user_register_form'
    ),
  );
  $items['user_pass'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'yourtheme') . '/templates',
    'template' => 'user-pass',
    'preprocess functions' => array(
      'yourtheme_preprocess_user_pass'
    ),
  );
  return $items;
}
?>