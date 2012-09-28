<?php

/**
 * Collection of resource module definitions
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @since 1.8
 *
 * @file
 * @ingroup SMW
 *
 * @licence GNU GPL v2 or later
 * @author mwjames
 */

$moduleTemplate = array(
	'localBasePath' => $smwgIP,
	'remoteBasePath' => $smwgScriptPath,
	'group' => 'ext.smw'
);

$wgResourceModules['ext.smw'] = $moduleTemplate + array(
	'scripts' => array(
		'resources/ext.smw.js',
		'resources/ext.smw.compat.js',
	),
);

$wgResourceModules['ext.smw.style'] = $moduleTemplate + array(
	'styles' => 'skins/SMW_custom.css'
);

$wgResourceModules['ext.smw.tooltips'] = $moduleTemplate + array(
	'scripts' => 'skins/SMW_tooltip.js',
	'dependencies' => array(
		'mediawiki.legacy.wikibits',
		'ext.smw.style'
	)
);

$wgResourceModules['ext.smw.ask'] = $moduleTemplate + array(
	'scripts' => array(
		'resources/ext.smw.ask.js',
	),
	'dependencies' => array(
		'jquery.ui.widget',
		'jquery.ui.position',
		'jquery.ui.autocomplete',
		'jquery.tipsy',
		'ext.smw.style'
	),
	'messages' => array(
		'smw-ask-delete',
	),
	'position' => 'top'
);

$wgResourceModules['ext.smw.browse'] = $moduleTemplate + array(
	'scripts' => array(
		'resources/ext.smw.browse.js',
	),
	'dependencies' => array(
		'jquery.ui.autocomplete',
	),
);

unset( $moduleTemplate );