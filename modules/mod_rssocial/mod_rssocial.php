<?php
/**
* @package RSSocial!
* @copyright (C) 2014 www.rsjoomla.com
* @license GPL, http://www.gnu.org/licenses/gpl-2.0.html
*/

defined('_JEXEC') or die('Restricted access');

// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$socials = array(
	'facebook',
	'twitter',
	'instagram',
	'linkedin',
	
	'youtube',
	'tiktok',
	'vimeo',
	
	'reddit',
	'tumblr',
	
	'snapchat',
	'whatsapp',
	'skype',
	
	'pinterest',
	'flickr',
	
	'soundcloud',
	'spotify',
	
	'github',
	
	'recommend',
	'mail'
);

$document 						= JFactory::getDocument();
$app							= JFactory::getApplication();
$moduleclass_sfx				= htmlspecialchars($params->get('moduleclass_sfx', ''));
$container_classes				= '';
$list_classes					= '';
$icons_number					= 0;
$has_popup_button				= false;

// Icons parameters
$icon_theme						= $params->get('icon_theme');
$icon_effect					= $params->get('icon_effect');
$icon_size						= (int)$params->get('icon_size');
$icon_border_radius				= (int)$params->get('icon_border_radius');
$icon_font_color				= RSSocialHelper::hex2rgb($params->get('icon_font_color'));
$icon_background_color			= RSSocialHelper::hex2rgb($params->get('icon_background_color'));
$icon_transparency				= (float)$params->get('icon_transparency');
$icon_transparency_hover		= (float)$params->get('icon_transparency_hover');
$icon_floating 					= $params->get('icon_float');
$icon_background				= false;

// Icons captions parameters
$caption_size					= (int)$params->get('caption_size');
$caption_font_color				= RSSocialHelper::hex2rgb($params->get('caption_font_color'));
$caption_background_color		= RSSocialHelper::hex2rgb($params->get('caption_background_color'));
$caption_transparency			= (float)$params->get('caption_transparency');
$caption_transparency_hover		= (float)$params->get('caption_transparency_hover');

$theme_classes					= '';
$language						= str_replace('-', '_', JFactory::getLanguage()->getTag());
$current_url					= JUri::getInstance()->toString();
$mode							= $params->get('mode');
$button_classes					= '';	// Classes of "more" button
$sharing_alignment				= 'left';

if ($mode == 'icons' || $mode == 'icons-sharing') {
	switch ($icon_theme) {
		case 'bg':
			$icon_background = true;
			break;
		case 'rounded':
			$icon_background = true;
			$theme_classes .= 'rssocial-icons-bg ';
			break;
		case 'round':
			$icon_background = true;
			$theme_classes .= 'rssocial-icons-bg ';
			break;
	}
	$theme_classes .= 'rssocial-icons-' . $icon_theme;
}

if ($params->get('icon_positioning') == 'inline') {
	$container_classes .= 'rssocial-inline ';
	$container_classes .= 'rssocial-' . $params->get('icon_alignment') . ' ';
	
	if ($params->get('icon_alignment') == 'right') {
		$sharing_alignment = 'right';
	}
} else {
	if ($icon_floating == 'top' || $icon_floating == 'bottom') {
		$container_classes .= 'rssocial-inline ';
	}
	$button_classes .= $theme_classes . '-button-' . $icon_floating;
	
	if ($mode == 'sharing') {
		$list_classes .= 'rssocial-' . $icon_floating . '-background ';
	} else {
		$list_classes .= 'rssocial-' . $mode . '-' . $icon_floating . ' ';
	}
	$container_classes .= 'rssocial-floating-' . $icon_floating . ' ';
	
	if ($params->get('icon_fixed') || ($icon_floating == 'bottom')) {
		$container_classes .= 'rssocial-fixed ';
	} else {
		$container_classes .= 'rssocial-absolute ';
	}
}

$list_classes .= $theme_classes;

// Get the number of enabled icons
foreach ($socials as $social) {
	if ($params->get($social)) {
		$icons_number += 1;
	}
}

// Set social icons font color, background color and transparency
if ($icon_background) {
	if (!empty($icon_border_radius) && $icon_theme == 'rounded') {
		$document->addStyleDeclaration('#rssocial-' . $module->id . ' .rssocial-icons-bg .rssocial-link { border-radius: ' . $icon_border_radius . 'px; }');
		
		if ($icon_effect == 'trim' || $icon_effect == 'outline-outward') {
			$document->addStyleDeclaration('#rssocial-' . $module->id . ' .rssocial-icons-bg .rssocial-link:before { border-radius: ' . $icon_border_radius . 'px; }');
		} else if ($icon_effect == 'outline-inward') {
			$document->addStyleDeclaration('#rssocial-' . $module->id . ' .rssocial-icons-bg .rssocial-link:before { border-radius: ' . ($icon_border_radius + 4) . 'px; }');
		} else if ($icon_effect == 'shadow-radial') {
			$document->addStyleDeclaration('#rssocial-' . $module->id . ' .rssocial-icons-bg .rssocial-link:before { width: calc(100% - ' . $icon_border_radius . 'px); }');
			$document->addStyleDeclaration('#rssocial-' . $module->id . ' .rssocial-icons-bg .rssocial-link:after { width: calc(100% - ' . $icon_border_radius . 'px); }');
		}
	}
}

RSSocialHelper::addStyle($module->id, $mode, $params, $icon_background);

if (($mode == 'icons' || $mode == 'icons-sharing') && !empty($params->get('popup'))) {
	
	$has_popup_button = true;
	
	// Popup button parameters
	$popup_theme					= $params->get('popup_theme');
	$popup_size						= (int)$params->get('popup_size');
	$popup_border_radius			= (int)$params->get('popup_border_radius');
	$popup_font_color				= $params->get('popup_font_color');
	$popup_background_color			= $params->get('popup_background_color');
	$popup_font_color_hover			= $params->get('popup_font_color_hover');
	$popup_background_color_hover	= $params->get('popup_background_color_hover');
	$popup_transparency				= (float)$params->get('popup_transparency');
	$popup_transparency_hover		= (float)$params->get('popup_transparency_hover');
	$popup_background				= false;
	$popup_classes					= '';
	
	switch ($popup_theme) {
		case 'bg':
			$popup_background = true;
			break;
		case 'rounded':
			$popup_background = true;
			$popup_classes .= ' rssocial-popup-bg';
			break;
		case 'round':
			$popup_background = true;
			$popup_classes .= ' rssocial-popup-bg';
			break;
	}
	$popup_classes .= ' rssocial-popup-' . $popup_theme;
	
	// Set popup button font size, font color and background color
	if ($params->get('popup_theme') == 'rounded') {
		$document->addStyleDeclaration('#rssocial-' . $module->id . ' .rssocial-popup-button { border-radius: ' . (int)$params->get('popup_border_radius') . 'px; }');
	}
	
	$document->addStyleDeclaration('#rssocial-' . $module->id . ' .rssocial-popup-button { font-size: ' . $popup_size . 'px; }');
	$document->addStyleDeclaration('#rssocial-' . $module->id . ' .rssocial-popup-button { color: ' . $popup_font_color . '; }');
	$document->addStyleDeclaration('#rssocial-' . $module->id . ' .rssocial-popup-button:hover { color: ' . $popup_font_color_hover . '; }');
	
	if ($params->get('popup_theme') != 'nobg') {
		$document->addStyleDeclaration('#rssocial-' . $module->id . ' .rssocial-popup-button { background-color: ' . $popup_background_color . '; }');
		$document->addStyleDeclaration('#rssocial-' . $module->id . ' .rssocial-popup-button:hover { background-color: ' . $popup_background_color_hover . '; }');
	}
	
	$container_classes .= ' rssocial-popup';
}

JHtml::_('jquery.framework');
JHtml::stylesheet('mod_rssocial/rssocial-font.css', array('version' => 'auto', 'relative' => true));
JHtml::stylesheet('mod_rssocial/rssocial-anim.css', array('version' => 'auto', 'relative' => true));
JHtml::stylesheet('mod_rssocial/rssocial.css', array('version' => 'auto', 'relative' => true));
JHtml::script('mod_rssocial/rssocial.js', array('version' => 'auto', 'relative' => true));

require JModuleHelper::getLayoutPath('mod_rssocial');