<?php
/**
* @package RSSocial!
* @copyright (C) 2014 www.rsjoomla.com
* @license GPL, http://www.gnu.org/licenses/gpl-2.0.html
*/

if (substr($mode, 0, 5) == 'icons') {
	$url			= ($mode == 'icons') ? RSSocialHelper::escape($params->get('linkedin_url')) : 'https://www.linkedin.com/shareArticle?url=' . $current_url;
	$caption_text	= ($mode == 'icons') ? JText::_('MOD_RSSOCIAL_LINKEDIN_FOLLOW') : JText::_('MOD_RSSOCIAL_SHARE');
	
	RSSocialHelper::addStyle($module->id, $social, $params, $icon_background);
?>
	<li>
		<a id="rssocial-linkedin-icon" class="rssocial-link <?php echo $icon_effect; ?>" target="_blank" href="<?php echo $url; ?>"<?php echo !empty($params->get('popup')) ? ' title="' . $caption_text . '"' : ''; ?>>
			<span class="rssocial-icon rssocial-icon-linkedin"></span>
		</a>
		<?php if ($params->get('caption') && empty($params->get('popup'))) { ?>
		<div id="rssocial-linkedin-caption" class="rssocial-caption">
			<a target="_blank" href="<?php echo $url; ?>">
				<?php echo $caption_text; ?>
			</a>
		</div>
		<?php } ?>
	</li>
<?php } else if (!empty($params->get('linkedin_type')) && ($params->get('linkedin_type') == 'follow')) { ?>
	<li id="rssocial-follow-button" class="rssocial-follow-linkedin-container">
		<script src="https://platform.linkedin.com/in.js" type="text/javascript">lang:<?php echo $language; ?></script>
		<script type="IN/FollowCompany" data-id="<?php echo $module->id; ?>"<?php echo $params->get('linkedin_counter') ? ' data-counter="' . $params->get('linkedin_counter') . '"' : ''; ?>></script>
	</li>
<?php } else { ?>
	<li id="rssocial-sharing-button" class="rssocial-sharing-linkedin-container">
		<script src="https://platform.linkedin.com/in.js" type="text/javascript">lang:<?php echo $language; ?></script>
		<script type="IN/Share" data-url="<?php echo $current_url; ?>"></script>
	</li>
<?php } ?>