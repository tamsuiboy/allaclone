<?php

	print "<table border='0' width='100%'><form name='fullsearch' method='GET' action='fullsearch.php'>\n";

	// Name search
	print "<tr><td class='menuh' nowrap='1'>Search...<input type='hidden' name='isearchtype' value=''/></td></tr>\n";
	print "<tr><td><input onfocus=\"if(this.value == 'Name...') { this.value = ''; }\" onkeypress=\"var key=event.keyCode || event.which; if(key==13){ this.form.isearchtype.value = 'name'; this.form.submit(); } else {return true;}\" type='text' name='iname' placeholder='Name...' size='20'/></td></tr>\n";
	print "<tr><td><input onfocus=\"if(this.value == 'ID...') { this.value = ''; }\" onkeypress=\"var key=event.keyCode || event.which; if(key==13){ this.form.isearchtype.value = 'id'; this.form.submit(); } else {return true;}\" type='text' name='iid' placeholder='ID...' size='10'/></td></tr>\n";

	// Strategy section
	print "<tr><td class='menuh' nowrap='1'>Strategy...</td></tr>\n";
	print "<tr><td nowrap='1' class='menu_item'><li><a href='".$root_url."strategy/melee.php'>Melee Damage Calculator</a></li></td></tr>\n";

	// Quests section
	if($AllowQuestsNPC)
	{
		print "<tr><td class='menuh' nowrap='1'>Quests...</td></tr>\n";
		print "<tr><td nowrap='1' class='menu_item'><li><a href='".$root_url."quests/zones.php'>Quests by Zone</a></li></td></tr>\n";
	}

	// Players Database section
	if($ShowCharacters || $ShowAccount)
	{
		print "<tr><td class='menuh' nowrap='1'>Players database...</td></tr>\n";
		if($ShowAccount)
		{
			print "<tr><td nowrap='1' class='menu_item'><li><a href='".$root_url."accounts.php'>Player Accounts</a></li></td></tr>\n";
		}
		if($ShowCharacters)
		{
			print "<tr><td nowrap='1' class='menu_item'><li><a href='".$root_url."chars.php'>Player Characters</a></li></td></tr>\n";
		}
	}
	  
	print "</form></table>\n";

	if($UseZAMSearch)
	{
		echo '<br>
			<div class="zam-search"><script type="text/javascript">var zam_searchbox_site = "everquest"; var zam_searchbox_format = "160x130"</script>
			<script type="text/javascript" src="http://zam.zamimg.com/j/searchbox.js"></script></div></align>';
	}

?>
