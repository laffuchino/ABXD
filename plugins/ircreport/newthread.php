<?php

$c1 = ircColor(Settings::pluginGet("color1"));
$c2 = ircColor(Settings::pluginGet("color2"));

$thename = $loguser["name"];
if($loguser["displayname"])
	$thename = $loguser["displayname"];


if ($forum['minpower'] <= 0)
	ircReport("\003".$c2."New thread by\003$c1 "
		.ircUserColor($thename, $loguser['sex'], $loguser['power'])
		."\003$c2: \003$c1"
		.$thread["title"]
		."\003$c2 (".$forum["title"].")"
		." -- "
		.getServerURL()."?tid=".$tid
		);
