<?php

global $gBitSystem;

$gBitSystem->registerPackageInfo( ILIKE_PKG_NAME, array(
	'description' => "A very simple search engine. Only makes sense on small sites since it searches the database directly without any abstraction layer.",
	'license' => '<a href="http://www.gnu.org/licenses/licenses.html#LGPL">LGPL</a>',
) );

// Requirements
$gBitSystem->registerRequirements( ILIKE_PKG_NAME, array(
    'liberty' => array( 'min' => '2.1.4' ),
));

// Install process
global $gBitInstaller;
if( is_object( $gBitInstaller ) ){

$gBitInstaller->registerUserPermissions( ILIKE_PKG_NAME, array(
	array( 'p_ilike_search', 'Can search your site using the search engine', 'basic', ILIKE_PKG_NAME),
) );

}

