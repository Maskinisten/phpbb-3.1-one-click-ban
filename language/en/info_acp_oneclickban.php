<?php
/**
*
* @package One Click Ban
* @copyright (c) 2015 phpBB Modders <https://phpbbmodders.net/>
* @author Jari Kanerva <tumba25@phpbbmodders.net>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
$lang = array_merge($lang, array(
	'ACP_BAN_EMAIL'		=> 'Ban users email address',
	'ACP_BAN_USERNAME'	=> 'Ban users username',

	'ACP_DEL_AVATAR'	=> 'Delete users avatar',
	'ACP_DEL_POSTS'		=> 'Delete users posts',
	'ACP_DEL_PROFILE'	=> 'Delete users profile fields',
	'ACP_DEL_SIGNATURE'	=> 'Delete users signature',

	'ACP_GROUP_MISSING'	=> 'The group &quot;%s&quot; do not exist.', // %s is the group name.

	'ACP_MOVE_GROUP'			=> 'Move to group',
	'ACP_MOVE_GROUP_EXPLAIN'	=> 'Name of the group to which banned users should be moved. This will also be their default group.<br /><strong>This is case sensitive.</strong>',

	'ACP_OCB_TITLE'		=> 'One Click Ban',
	'ACP_OCB_SETTINGS'	=> 'Settings',

	'SETTINGS_ERROR'		=> 'There was some error saving your settings. Please submit the backtrace with your error report.',
	'SETTINGS_SUCCESS'		=> 'The settings was successfully saved',
	'SFS_API_KEY'			=> 'SFS API key',
	'SFS_API_KEY_EXPLAIN'	=> 'If you want to report spammers automatically to StopForumSpam you need a API key, <a href="http://www.stopforumspam.com/signup">http://www.stopforumspam.com/signup</a>.',
));