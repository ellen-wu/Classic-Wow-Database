<?php
global $AoWoWconf;

// -- MaNGOS Database --
$AoWoWconf['mangos']['host']	= 'localhost';
$AoWoWconf['mangos']['user']	= 'cwinfo2';
$AoWoWconf['mangos']['pass']	= 'pass';
$AoWoWconf['mangos']['db']		= 'aowow';
$AoWoWconf['mangos']['aowow']	= 'aowow_'; // AoWoW table prefix
// -- Realmd Database --
$AoWoWconf['realmd']['host']	= 'localhost';
$AoWoWconf['realmd']['user']	= 'cwinfo2';
$AoWoWconf['realmd']['pass']	= 'pass';
$AoWoWconf['realmd']['db']		= 'realmdatabase';
// -- Characters Database -- currently unused
$AoWoWconf['characters']['host']	= '';
$AoWoWconf['characters']['user']	= '';
$AoWoWconf['characters']['pass']	= '';
$AoWoWconf['characters']['db']		= '';
// -- Site Configuration --
// Title of the website
$AoWoWconf['aowow']['name'] = 'AoWoW';
// Skin, only 'wowhead' is supported currently
$AoWoWconf['aowow']['template'] = 'wowhead';
// Time to keep cache in seconds (Default: 1 week)
$AoWoWconf['aowow']['cache_time'] = (60*60*24*7);
// Default locale
$AoWoWconf['locale'] = 0;
// Allow account creating
$AoWoWconf['register'] = true;
// Used with register, account expansion
$AoWoWconf['expansion'] = 2;
// Limit of some SQL queries
$AoWoWconf['limit'] = 300;
// Disable cache, show smarty console panel
$AoWoWconf['debug'] = false;
// Map object grouping factor. Meters = 10^param.
// 0 to disable.
// 1 is default and highly recommended.
// Do not use float values or values > 3.
$AoWoWconf['map_grouping'] = 1;
// Itemisation patch
# 1.2 = 0
# 1.3 = 1
# 1.4 = 2
# 1.5 = 3
# 1.6 = 4
# 1.7 = 5
# 1.8 = 6
# 1.9 = 7
# 1.10 = 8
# 1.11 = 9
# 1.12 = 10
$AoWoWconf['patch'] = 5;
?>