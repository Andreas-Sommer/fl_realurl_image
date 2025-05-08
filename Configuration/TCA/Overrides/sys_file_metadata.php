<?php


use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
$tempColumns = [
    'realurl_image_name' => [
        'exclude' => 1,
        'label'   => 'RealURL Image Name (without file extension)',
        'config'  => [
            'type' => 'input',
            'eval' => 'trim',
        ]
    ],
];


ExtensionManagementUtility::addTCAcolumns('sys_file_metadata', $tempColumns);
ExtensionManagementUtility::addToAllTCAtypes(
    'sys_file_metadata',
    'realurl_image_name',
    '',
    'after:alternative'
);
