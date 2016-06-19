<?php
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl']=array (
  'pinneberg.freifunk.net' => 
  array (
    'init' => 
    array (
      'enableCHashCache' => true,
      'appendMissingSlash' => 'ifNotFile,redirect',
      'adminJumpToBackend' => true,
      'enableUrlDecodeCache' => true,
      'enableUrlEncodeCache' => true,
      'emptyUrlReturnValue' => '/',
    ),
    'pagePath' => 
    array (
      'type' => 'user',
      'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
      'spaceCharacter' => '-',
      'languageGetVar' => 'L',
      'rootpage_id' => '1',
    ),
    'fileName' => 
    array (
      'defaultToHTMLsuffixOnPrev' => 1,
      'acceptHTMLsuffix' => 1,
      'index' => 
      array (
        'print' => 
        array (
          'keyValues' => 
          array (
            'type' => 98,
          ),
        ),
      ),
    ),
  ),
  'freifunk-pinneberg.de' => 
  array (
    'init' => 
    array (
      'enableCHashCache' => true,
      'appendMissingSlash' => 'ifNotFile,redirect',
      'adminJumpToBackend' => true,
      'enableUrlDecodeCache' => true,
      'enableUrlEncodeCache' => true,
      'emptyUrlReturnValue' => '/',
    ),
    'pagePath' => 
    array (
      'type' => 'user',
      'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
      'spaceCharacter' => '-',
      'languageGetVar' => 'L',
      'rootpage_id' => '1',
    ),
    'fileName' => 
    array (
      'defaultToHTMLsuffixOnPrev' => 0,
      'acceptHTMLsuffix' => 1,
      'index' => 
      array (
        'print' => 
        array (
          'keyValues' => 
          array (
            'type' => 98,
          ),
        ),
      ),
    ),
  ),
'nic.ffpi' =>
  array (
    'init' =>
    array (
      'enableCHashCache' => true,
      'appendMissingSlash' => 'ifNotFile,redirect',
      'adminJumpToBackend' => true,
      'enableUrlDecodeCache' => true,
      'enableUrlEncodeCache' => true,
      'emptyUrlReturnValue' => '/',
    ),
    'pagePath' =>
    array (
      'type' => 'user',
      'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
      'spaceCharacter' => '-',
      'languageGetVar' => 'L',
      'rootpage_id' => '102',
    ),
    'fileName' =>
    array (
      'defaultToHTMLsuffixOnPrev' => 1,
      'acceptHTMLsuffix' => 1,
      'index' =>
      array (
        'print' =>
        array (
          'keyValues' =>
          array (
            'type' => 98,
          ),
        ),
      ),
    ),
  ),

'postVarSets' => array (
            '_DEFAULT' => array (
 
 
            // CAL (Calender Base Config)
            'termin'=> array(
				array(
				  'GETvar' => 'tx_cal_controller[view]'
				),
				array(
				  'GETvar' => 'tx_cal_controller[lastview]'
				),
				array(
				  'GETvar' => 'tx_cal_controller[type]'
				),
				array(
				  'GETvar' => 'tx_cal_controller[year]',
				) ,
				array(
				  'GETvar' => 'tx_cal_controller[month]',
				) ,
				array(
				  'GETvar' => 'tx_cal_controller[day]',
				) ,
				array(
					'GETvar' => 'tx_cal_controller[uid]',
					'lookUpTable' => array(
						'table' => 'tx_cal_event',
						'id_field' => 'uid',
						'alias_field' => 'title',
						'addWhereClause'  => ' AND NOT deleted',
						'useUniqueCache' => 1,
						'useUniqueCache_conf' => array(
							'strtolower' => 1,
							'spaceCharacter' => '_',
						),
					),
				),
				array(
					'GETvar' => 'tx_cal_controller[gettime]'
				),
				array(
						'GETvar' => 'tx_cal_controller[preview]'
				),
 
			),
            // Cal Config - END

))
);
