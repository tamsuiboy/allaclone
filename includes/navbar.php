<?php
/*echo '
    <tr>
        <td colspan="2">
        <div>
            <ul class="navbar">
                <li class="dropdown">
                    <a href="'.$root_url.'index.php" title="">Home</a>
                    <div class="nav_menu">';
if($EnableNews) {
echo'                   <a href = "'.$root_url.'news.php" >News</a >';
}
echo'
                        <a href="http://www.takproject.net/forums/index.php?forums/changelog.24/" target="_blank">Change Log</a>
                        <a href="http://www.eqemulator.org" target="_blank">EQEmulator</a>
                        <a href="http://everquest.allakhazam.com/" target="_blank">ZAM</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a style="cursor:default;">Database</a>
                    <div class="nav_menu">
                        <a class="master-list" href="'.$root_url.'zonelist.php">Zones</a>
                        <div>
                            <ul class="submenu">
                                <li>
                                    <a class="sub-list" href="'.$root_url.'zoneslevels.php">By Level</a>
                                    <a class="sub-list" href="'.$root_url.'zones.php">Populated</a>
                                </li>
                            </ul>
                        </div>
                        <a class="items" href="'.$root_url.'items.php">Items</a>
                        <!--<div class="itemsmenu">
                            <a href="'.$root_url.'items.php">Search</a>
                        </div>-->
                        <a href="" target="_blank">Quests</a>
                        <a href="" target="_blank">Bestiary</a>
                        <a href="" target="_blank">Spells & Skills</a>
                        <a href="" target="_blank">Recipes</a>
                        <a href="" target="_blank">Quests</a>
                    </div>
                </li>
            </ul>
        </div>
        </td>
    </tr>
';*/
echo '
    <tr>
        <td colspan="2">
			<div>
				<ul class="navbar">
					<li><a href="'.$root_url.'index.php" title="">Home</a>
						<ul>';
if($EnableNews) {
    echo'                    <li><a href = "'.$root_url.'news.php" >News</a ></li>';
}
echo'
							<li><a href="http://www.takproject.net/forums/index.php?forums/changelog.24/" target="_blank">Change Log</a></li>
							<li><a href="http://www.eqemulator.org" target="_blank">EQEmulator</a></li>
							<li><a href="http://everquest.allakhazam.com/" target="_blank">ZAM</a></li>
						</ul>
					</li>
					<li><a style="cursor:default;">Database</a>
						<ul>
							<li><a href="'.$root_url.'zonelist.php">Zones</a>
								<ul>
									<li><a href="'.$root_url.'zoneslevels.php">By Level</a></li>
									<li><a href="'.$root_url.'zones.php">Populated</a></li>
								</ul>
							</li>
							<li><a href="'.$root_url.'items.php">Items</a>
								<ul>
									<li><a href="'.$root_url.'items.php">Search</a></li>
								</ul>
							</li>
							<li><a href="" target="_blank">Quests</a></li>
							<li><a href="" target="_blank">Bestiary</a></li>
							<li><a href="" target="_blank">Spells & Skills</a></li>
							<li><a href="" target="_blank">Recipes</a></li>
							<li><a href="" target="_blank">Quests</a></li>
						</ul>
					</li>
				</ul>
			</div>
        </td>
    </tr>
';