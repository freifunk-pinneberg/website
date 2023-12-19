<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$pbkdf2-sha256$25000$UsYVa8/p6pf4fgnNM3unQg$xnNf5N.9wb2Npu9rwZqekkQgeOIk5/fS3Wh7jrxSwm8',
        'loginSecurityLevel' => 'normal',
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
                'host' => '127.0.0.1',
                'port' => 3306,
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'backend' => 'a:6:{s:9:"loginLogo";s:47:"EXT:ffpi_theme/Resources/Public/Images/Logo.svg";s:19:"loginHighlightColor";s:7:"#dc0067";s:20:"loginBackgroundImage";s:61:"/fileadmin/bilder/news/backbone_suche/IMG_20160715_153752.jpg";s:13:"loginFootnote";s:0:"";s:11:"backendLogo";s:0:"";s:14:"backendFavicon";s:47:"EXT:ffpi_theme/Resources/Public/Images/Logo.svg";}',
            'extensionmanager' => 'a:2:{s:21:"automaticInstallation";s:1:"1";s:11:"offlineMode";s:1:"0";}',
            'scheduler' => 'a:2:{s:11:"maxLifetime";s:4:"1440";s:15:"showSampleTasks";s:1:"1";}',
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'da',
                'de',
                'no',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => 'EXT:ffpi_theme/Resources/Public/Images/Logo.svg',
            'backendLogo' => '',
            'loginBackgroundImage' => '/fileadmin/bilder/news/backbone_suche/IMG_20160715_153752.jpg',
            'loginFootnote' => '',
            'loginHighlightColor' => '#dc0067',
            'loginLogo' => 'EXT:ffpi_theme/Resources/Public/Images/Logo.svg',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
            'showSampleTasks' => '0',
        ],
    ],
    'FE' => [
        'debug' => false,
        'loginSecurityLevel' => 'normal',
    ],
    'GFX' => [
        'jpg_quality' => '80',
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => true,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'MAIL' => [
        'defaultMailFromAddress' => 'support@pinneberg.freifunk.net',
        'defaultMailFromName' => 'Freifunk Pinneberg',
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i ',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => 'localhost:25',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'extbase_object' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
            ],
        ],
        'devIPmask' => '',
        'displayErrors' => 0,
        'encryptionKey' => 'fba28922e8a061e471addf1a39863551c70cb3a3c38aae6357ffb2a2ea07a611fc90352c20ef59840930f6a5e1053df1',
        'exceptionalErrors' => 4096,
        'features' => [
            'unifiedPageTranslationHandling' => true,
        ],
        'sitename' => 'Freifunk Pinneberg',
        'systemLogLevel' => 2,
    ],
];
