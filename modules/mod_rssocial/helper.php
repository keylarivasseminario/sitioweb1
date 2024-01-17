<?php
/**
* @package RSSocial!
* @copyright (C) 2014 www.rsjoomla.com
* @license GPL, http://www.gnu.org/licenses/gpl-2.0.html
*/

defined('_JEXEC') or die('Restricted access');

class RSSocialHelper
{
	public static function addStyle($module_id, $type, $params, $icon_background) {
		$document						= JFactory::getDocument();
		
		// Icon params
		$icon_size						= !empty($params->get('icon_size')) ? (int)$params->get('icon_size') : 0;
		$icon_font_color				= '';
		$icon_font_color_hover			= '';
		$icon_background_color			= '';
		$icon_background_color_hover	= '';
		$icon_transparency				= (!empty($params->get('icon_transparency'))) ? $params->get('icon_transparency') : 1;
		$icon_transparency_hover		= (!empty($params->get('icon_transparency_hover'))) ? $params->get('icon_transparency_hover') : 1;
		
		// Icon CSS selectors
		$icon_bg_css_selector			= $icon_background ? '.rssocial-icons-bg' : '.rssocial-icons-nobg';
		$icon_css_selector				= ($type == 'icons' || $type == 'icons-sharing') ? '#rssocial-' . $module_id . ' ' . $icon_bg_css_selector . ' .rssocial-link' : '#rssocial-' . $module_id . ' #rssocial-' . $type . '-icon.rssocial-link';
		$icon_hover_css_selector		= ($type == 'icons' || $type == 'icons-sharing') ? '#rssocial-' . $module_id . ' ' . $icon_bg_css_selector . ' .rssocial-link:hover': '#rssocial-' . $module_id . ' #rssocial-' . $type . '-icon.rssocial-link:hover';
		
		// Caption colors
		$caption_size					= !empty($params->get('caption_size')) ? (int)$params->get('caption_size') : 0;
		$caption_font_color				= '';
		$caption_font_color_hover		= '';
		$caption_background_color		= (!empty($params->get($type . '_caption_background_color'))) ? RSSocialHelper::hex2rgb($params->get($type . '_caption_background_color')) : '';
		$caption_background_color_hover	= (!empty($params->get($type . '_caption_background_color_hover'))) ? RSSocialHelper::hex2rgb($params->get($type . '_caption_background_color_hover')) : '';
		$caption_transparency			= (!empty($params->get('caption_transparency'))) ? $params->get('caption_transparency') : 1;
		$caption_transparency_hover		= (!empty($params->get('caption_transparency_hover'))) ? $params->get('caption_transparency_hover') : 1;
		
		// Caption CSS selectors
		$caption_css_selector			= ($type == 'icons' || $type == 'icons-sharing') ? '#rssocial-' . $module_id . ' .rssocial-caption' : '#rssocial-' . $module_id . ' #rssocial-' . $type . '-caption';
		$caption_hover_css_selector		= ($type == 'icons' || $type == 'icons-sharing') ? '#rssocial-' . $module_id . ' .rssocial-caption:hover' : '#rssocial-' . $module_id . ' #rssocial-' . $type . '-caption:hover';
		$caption_a_css_selector			= ($type == 'icons' || $type == 'icons-sharing') ? '#rssocial-' . $module_id . ' .rssocial-caption > a' : '#rssocial-' . $module_id . ' #rssocial-' . $type . '-caption > a';
		$caption_a_hover_css_selector	= ($type == 'icons' || $type == 'icons-sharing') ? '#rssocial-' . $module_id . ' .rssocial-caption > a:hover' : '#rssocial-' . $module_id . ' #rssocial-' . $type . '-caption > a:hover';
		
		if ($type == 'icons' || $type == 'icons-sharing') {
			
			// Add icon size
			if ($icon_size) {
				$document->addStyleDeclaration('#rssocial-' . $module_id . ' .rssocial-' . $type . ' > li { font-size: ' . $icon_size . 'px; }');
			}
			
			// Define icon color and background color
			if (!empty($params->get('icon_font_color'))) {
				$icon_font_color		= $params->get('icon_font_color');
				$icon_font_color_hover	= $params->get('icon_font_color');
			}
			if (!empty($params->get('icon_background_color'))) {
				$icon_background_color 			= RSSocialHelper::hex2rgb($params->get('icon_background_color'));
				$icon_background_color_hover	= RSSocialHelper::hex2rgb($params->get('icon_background_color'));
			}
			
			// Add caption size
			if ($caption_size) {
				$document->addStyleDeclaration('#rssocial-' . $module_id . ' .rssocial-' . $type . ' .rssocial-caption > a { font-size: ' . $caption_size . 'px; }');
			}
			
			// Define caption color and background color
			if (!empty($params->get('caption_font_color'))) {
				$caption_font_color			= $params->get('caption_font_color');
				$caption_font_color_hover	= $params->get('caption_font_color');
			}
			if (!empty($params->get('caption_background_color'))) {
				$caption_background_color		= $params->get('caption_background_color');
				$caption_background_color_hover	= $params->get('caption_background_color');
			}
		} else {
			
			// Define icon color and background color
			if (!empty($params->get($type . '_icon_font_color'))) {
				$icon_font_color = $params->get($type . '_icon_font_color');
			}
			if (!empty($params->get($type . '_icon_font_color_hover'))) {
				$icon_font_color_hover = $params->get($type . '_icon_font_color_hover');
			}
			if (!empty($params->get($type . '_icon_background_color'))) {
				$icon_background_color = RSSocialHelper::hex2rgb($params->get($type . '_icon_background_color'));
			}
			if (!empty($params->get($type . '_icon_background_color_hover'))) {
				$icon_background_color_hover = RSSocialHelper::hex2rgb($params->get($type . '_icon_background_color_hover'));
			}
			
			// Define caption color and background color
			if (!empty($params->get($type . '_caption_font_color'))) {
				$caption_font_color = $params->get($type . '_caption_font_color');
			}
			if (!empty($params->get($type . '_caption_font_color_hover'))) {
				$caption_font_color_hover = $params->get($type . '_caption_font_color_hover');
			}
			if (!empty($params->get($type . '_caption_background_color'))) {
				$caption_background_color = $params->get($type . '_caption_background_color');
			}
			if (!empty($params->get($type . '_caption_background_color_hover'))) {
				$caption_background_color_hover = $params->get($type . '_caption_background_color_hover');
			}
		}
		
		// Add icon color, background color and transparency
		if ($icon_background) {
			if ($icon_font_color) {
				$document->addStyleDeclaration($icon_css_selector . ' { color: ' . $icon_font_color . '; }');
			}
			if ($icon_font_color_hover) {
				$document->addStyleDeclaration($icon_hover_css_selector . ' { color: ' . $icon_font_color_hover . '; }');
			}
			if ($icon_background_color) {
				$document->addStyleDeclaration($icon_css_selector . ' { background-color: rgba(' . $icon_background_color . ', ' . $icon_transparency . '); }');
			}
			if ($icon_background_color_hover) {
				$document->addStyleDeclaration($icon_hover_css_selector . ' { background-color: rgba(' . $icon_background_color_hover . ', ' . $icon_transparency_hover . '); }');
			}
		} else {
			if ($icon_font_color) {
				$document->addStyleDeclaration($icon_css_selector . ' { color: rgba(' . RSSocialHelper::hex2rgb($icon_font_color) . ', ' . $icon_transparency . '); }');
			}
			if ($icon_font_color_hover) {
				$document->addStyleDeclaration($icon_hover_css_selector . ' { color: rgba(' . RSSocialHelper::hex2rgb($icon_font_color_hover) . ', ' . $icon_transparency_hover . '); }');
			}
		}
		
		// Add caption color, background color and transparency
		if ($caption_font_color) {
			$document->addStyleDeclaration($caption_a_css_selector . ' { color: ' . $caption_font_color . '; }');
		}
		if ($caption_font_color_hover) {
			$document->addStyleDeclaration($caption_a_hover_css_selector . ' { color: ' . $caption_font_color_hover . '; }');
		}
		if ($caption_background_color) {
			$document->addStyleDeclaration($caption_css_selector . ' { background-color: rgba(' . RSSocialHelper::hex2rgb($caption_background_color) . ', ' . $caption_transparency . '); }');
		}
		if ($caption_background_color_hover) {
			$document->addStyleDeclaration($caption_hover_css_selector . ' { background-color: rgba(' . RSSocialHelper::hex2rgb($caption_background_color_hover) . ', ' . $caption_transparency_hover . '); }');
		}
		
		return true;
	}
	
	public static function hex2rgb($hex) {
		if (strlen($hex) == 4) {
			$hex = '#'.$hex[1].$hex[1].$hex[2].$hex[2].$hex[3].$hex[3];
		}
		
		list($r, $g, $b) = sscanf($hex, '#%02x%02x%02x');
		
		return "$r, $g, $b";
	}
	
	public static function escape($string) {
		if ($string !== null)
		{
			return htmlentities($string, ENT_QUOTES, "UTF-8");
		}

		return '';
	}
	
	public static function phoneNumber($string) {
		if ($string)
		{
			return preg_replace('/\D/', '', $string);
		}

		return $string;
	}
	
	public static function isMobileDevice() {
		$mobile_users = array(
			'/android/i',		// Android
			'/iphone/i',		// iPhone
			'/windows phone/i'	// Windows Phone
		);
		
		foreach ($mobile_users as $mobile_user) {
			if (preg_match($mobile_user, $_SERVER['HTTP_USER_AGENT'])) {
				return true;
			}
		}
		
		return false;
	}
	
	public static function getMailToURL() {
		if (file_exists(JPATH_SITE . '/components/com_mailto/helpers/mailto.php')) {
			require_once JPATH_SITE . '/components/com_mailto/helpers/mailto.php';

			$template = JFactory::getApplication()->getTemplate();
			$link = JUri::getInstance()->toString();
			$url = 'index.php?option=com_mailto&tmpl=component&template=' . $template . '&link=' . MailToHelper::addLink($link);

			return $url;
		}

		return false;
	}
}