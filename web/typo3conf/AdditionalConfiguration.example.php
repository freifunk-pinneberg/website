<?php
$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['dbname'] = '';
$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['password'] = '';
$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['user'] = '';

$GLOBALS['TYPO3_CONF_VARS']['LOG']['TYPO3']['CMS']['deprecations']['writerConfiguration'] = [
    \TYPO3\CMS\Core\Log\LogLevel::NOTICE => [
        \TYPO3\CMS\Core\Log\Writer\FileWriter::class => [
            'disabled' => false,
        ],
    ],
];
