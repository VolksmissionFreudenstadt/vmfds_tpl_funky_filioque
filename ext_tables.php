<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Vorlagen und Einstellungen, Funky Filioque');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('vmfds', 'Page');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('vmfds', 'Content');

