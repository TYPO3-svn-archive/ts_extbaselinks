<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');




$TCA['tx_tsextbaselinks_domain_model_link'] = array(
	'ctrl' => $TCA['tx_tsextbaselinks_domain_model_link']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'title,description,url,mark_dead,category'
	),
	'types' => array(
		'1' => array('showitem' => 'title,description,url,mark_dead,category')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(

		'sys_language_uid' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array (
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array (
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array (
				'type' => 'select',
				'items' => array (
					array('', 0),
				),
				'foreign_table' => 'tt_news',
				'foreign_table_where' => 'AND tt_news.uid=###REC_FIELD_l18n_parent### AND tt_news.sys_language_uid IN (-1,0)', // TODO
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array (
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array (
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		
		'title' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ts_extbaselinks/Resources/Private/Language/locallang_db.xml:tx_tsextbaselinks_domain_model_link.title',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		
		'description' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ts_extbaselinks/Resources/Private/Language/locallang_db.xml:tx_tsextbaselinks_domain_model_link.description',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		
		'url' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ts_extbaselinks/Resources/Private/Language/locallang_db.xml:tx_tsextbaselinks_domain_model_link.url',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		
		'mark_dead' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ts_extbaselinks/Resources/Private/Language/locallang_db.xml:tx_tsextbaselinks_domain_model_link.mark_dead',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		
		'category' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ts_extbaselinks/Resources/Private/Language/locallang_db.xml:tx_tsextbaselinks_domain_model_link.category',
			'config'  => array(
				'type' => 'select',
				'size' => 10,
				'minitems' => 0,
				'maxitems' => 9999,
				'autoSizeMax' => 30,
				'multiple' => 1,
				'foreign_table' => 'tx_tsextbaselinks_domain_model_category',
				'MM' => 'tx_tsextbaselinks_link_category_mm',
			)
		),
		
		
	),
);

$TCA['tx_tsextbaselinks_domain_model_category'] = array(
	'ctrl' => $TCA['tx_tsextbaselinks_domain_model_category']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'title,description,parent'
	),
	'types' => array(
		'1' => array('showitem' => 'title,description,parent')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(

		'sys_language_uid' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array (
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array (
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array (
				'type' => 'select',
				'items' => array (
					array('', 0),
				),
				'foreign_table' => 'tt_news',
				'foreign_table_where' => 'AND tt_news.uid=###REC_FIELD_l18n_parent### AND tt_news.sys_language_uid IN (-1,0)', // TODO
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array (
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array (
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		
		'title' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ts_extbaselinks/Resources/Private/Language/locallang_db.xml:tx_tsextbaselinks_domain_model_category.title',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		
		'description' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ts_extbaselinks/Resources/Private/Language/locallang_db.xml:tx_tsextbaselinks_domain_model_category.description',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		
		'parent' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ts_extbaselinks/Resources/Private/Language/locallang_db.xml:tx_tsextbaselinks_domain_model_category.parent',
			'config'  => array(
				'type' => 'select',
				'size' => 10,
				'minitems' => 0,
				'maxitems' => 9999,
				'autoSizeMax' => 30,
				'multiple' => 1,
				'foreign_table' => 'tx_tsextbaselinks_domain_model_category',
				'MM' => 'tx_tsextbaselinks_category_category_mm',
			)
		),
		
		
	),
);

$TCA['tx_tsextbaselinks_domain_model_rating'] = array(
	'ctrl' => $TCA['tx_tsextbaselinks_domain_model_rating']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'rating,comment,link,user'
	),
	'types' => array(
		'1' => array('showitem' => 'rating,comment,link,user')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(

		'sys_language_uid' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array (
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array (
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array (
				'type' => 'select',
				'items' => array (
					array('', 0),
				),
				'foreign_table' => 'tt_news',
				'foreign_table_where' => 'AND tt_news.uid=###REC_FIELD_l18n_parent### AND tt_news.sys_language_uid IN (-1,0)', // TODO
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array (
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array (
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		
		'rating' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ts_extbaselinks/Resources/Private/Language/locallang_db.xml:tx_tsextbaselinks_domain_model_rating.rating',
			'config'  => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			)
		),
		
		'comment' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ts_extbaselinks/Resources/Private/Language/locallang_db.xml:tx_tsextbaselinks_domain_model_rating.comment',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		
		'link' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ts_extbaselinks/Resources/Private/Language/locallang_db.xml:tx_tsextbaselinks_domain_model_rating.link',
			'config'  => array(
				'type' => 'select',
				'foreign_table' => 'tx_tsextbaselinks_domain_model_link',
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		
		'user' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ts_extbaselinks/Resources/Private/Language/locallang_db.xml:tx_tsextbaselinks_domain_model_rating.user',
			'config'  => array(
				'type' => 'select',
				'foreign_table' => 'tx_tsextbaselinks_domain_model_feuser',
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		
		
	),
);

$TCA['tx_tsextbaselinks_domain_model_feuser'] = array(
	'ctrl' => $TCA['tx_tsextbaselinks_domain_model_feuser']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => ''
	),
	'types' => array(
		'1' => array('showitem' => '')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(

		'sys_language_uid' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array (
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array (
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array (
				'type' => 'select',
				'items' => array (
					array('', 0),
				),
				'foreign_table' => 'tt_news',
				'foreign_table_where' => 'AND tt_news.uid=###REC_FIELD_l18n_parent### AND tt_news.sys_language_uid IN (-1,0)', // TODO
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array (
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array (
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		
		
	),
);

$TCA['tx_tsextbaselinks_domain_model_bookmark'] = array(
	'ctrl' => $TCA['tx_tsextbaselinks_domain_model_bookmark']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'title,comment,public_state,link,user'
	),
	'types' => array(
		'1' => array('showitem' => 'title,comment,public_state,link,user')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(

		'sys_language_uid' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array (
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array (
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array (
				'type' => 'select',
				'items' => array (
					array('', 0),
				),
				'foreign_table' => 'tt_news',
				'foreign_table_where' => 'AND tt_news.uid=###REC_FIELD_l18n_parent### AND tt_news.sys_language_uid IN (-1,0)', // TODO
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array (
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array (
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		
		'title' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ts_extbaselinks/Resources/Private/Language/locallang_db.xml:tx_tsextbaselinks_domain_model_bookmark.title',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		
		'comment' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ts_extbaselinks/Resources/Private/Language/locallang_db.xml:tx_tsextbaselinks_domain_model_bookmark.comment',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		
		'public_state' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ts_extbaselinks/Resources/Private/Language/locallang_db.xml:tx_tsextbaselinks_domain_model_bookmark.public_state',
			'config'  => array(
				'type' => 'check',
				'default' => 0
			)
		),
		
		'link' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ts_extbaselinks/Resources/Private/Language/locallang_db.xml:tx_tsextbaselinks_domain_model_bookmark.link',
			'config'  => array(
				'type' => 'select',
				'foreign_table' => 'tx_tsextbaselinks_domain_model_link',
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		
		'user' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ts_extbaselinks/Resources/Private/Language/locallang_db.xml:tx_tsextbaselinks_domain_model_bookmark.user',
			'config'  => array(
				'type' => 'select',
				'foreign_table' => 'tx_tsextbaselinks_domain_model_feuser',
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		
		
	),
);

?>