<?php
defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sitepackage_comeun1ty'] = 'EXT:sitepackage_comeun1ty/Configuration/RTE/Default.yaml';
/**
 * system mails - this is done by the xsite site package
 */
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['layoutRootPaths'][710] = 'EXT:sitepackage_comeun1ty/Resources/Private/Layouts/';
//$GLOBALS['TYPO3_CONF_VARS']['MAIL']['partialRootPaths'][700] = 'EXT:sitepackage_comeun1ty/Resources/Private/Partials/';
//$GLOBALS['TYPO3_CONF_VARS']['MAIL']['templateRootPaths'][700] = 'EXT:sitepackage_comeun1ty/Resources/Private/Templates/Email/';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:sitepackage_comeun1ty/Configuration/TsConfig/Page/All.tsconfig">');
