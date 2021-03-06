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
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'BANNED_ERROR'		=> 'There where some error(s) banning this user',
	'BANNED_SUCCESS'	=> 'This user was successfully banned.',

	'ERROR_BAN_EMAIL'	=> 'Banning email failed.',
	'ERROR_BAN_USER'	=> 'Banning user failed.',
	'ERROR_DEL_POSTS'	=> 'Delete users posts failed.',
	'ERROR_MOVE_GROUP'	=> 'Move user to the selected group failed.',
	'ERROR_SFS'			=> 'Stop Forum Spam',

	'OCB_BAN_EMAIL'			=> 'Ban this users email address',
	'OCB_BAN_GIVE_REASON'	=> 'The reason for this ban shown to the user',
	'OCB_BAN_IP'			=> 'Ban this users IP address',
	'OCB_BAN_IP_EXPLAIN'	=> '<strong>Be careful with this.</strong> Most home users have dynamic IP addresses and only need to reboot their router/modem to get a new IP address. The next day that IP address might be assigned to a user you want on your site. Spammers also uses internet anonymity proxies or the Tor network making a IP ban pointless.',
	'OCB_BAN_REASON'		=> 'The internal reason for this ban',
	'OCB_BAN_USER'			=> 'Ban this user',
	'OCB_BANNED'			=> 'This user is banned.',

	'OCB_DEL_AVATAR'	=> 'Delete this users avatar',
	'OCB_DEL_POSTS'		=> 'Delete this users posts',
	'OCB_DEL_PROFILE'	=> 'Delete this users profile fields',
	'OCB_DEL_SIGNATURE'	=> 'Delete this users signature',

	'OCB_MOVE_GROUP'	=> 'Move this user to group &quot;%s&quot;', // %s will be a group name

	'OCB_REASON'		=> 'Internal reason &quot;%s&quot;', // %s will be the reason
	'OCB_REASON_USER'	=> 'Reason to user &quot;%s&quot;', // %s will be the reason

	'OCB_SUBMIT_SFS'	=> 'Submit to stop forum spam',

	'OCB_THIS_USER'	=> 'One Click Ban this user',

	'SFS_REPORT'	=> 'Report this user to Stop Forum Spam',
	'SURE_BAN'		=> 'Are you sure you want to ban <strong>%s</strong>?', // %s will be a username.

	'THIS_WILL'	=> 'This will',
));
