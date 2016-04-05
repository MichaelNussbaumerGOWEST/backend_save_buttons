<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}


$GLOBALS['TBE_STYLES']['skins']['backend_save_buttons'] = array (
  'name' => 'backend_save_buttons',
  'stylesheetDirectories' => array(
    'css' => 'EXT:' . $_EXTKEY . '/Resources/Public/css/backend/'
  )
);
