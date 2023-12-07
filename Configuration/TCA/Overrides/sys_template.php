<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die('Access denied.');
call_user_func(function () {
    /**
     * Temporary variables
     */
    $extensionKey = 'sitepackage_comeun1ty';

    /**
     * Default TypoScript
     */
    ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Sitepackage Comeun1ty.NET'
    );

    /*
    ExtensionManagementUtility::addStaticFile(
        'sf_register',
        'Configuration/TypoScript/Extension/sf_register/',
        'Sitepackage Comeun1ty.NET [sf_register]'
    );
    */
});
