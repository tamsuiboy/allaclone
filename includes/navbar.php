<?php
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
							<li><a style="cursor:pointer;">Zones</a>
								<ul>';
if ($UseCustomZoneList==TRUE) {
    echo '                          <li><a href="' . $root_url . 'customzoneslist.php">Custom Zone List</a></li>';
}
else {
    echo '
									<li><a href="' . $root_url . 'zonelist.php">By Expansion</a></li>
									<li><a href="' . $root_url . 'zoneslevels.php">By Level</a></li>
									<li><a href="' . $root_url . 'zones.php">Populated</a></li>';
}
echo '								</ul>
							</li>
							<li><a href="'.$root_url.'items.php">Items</a>
								<ul>
									<li><a href="'.$root_url.'items.php">Search</a></li>
								</ul>
							</li>
							<li><a href="" target="_blank">Bestiary</a>
                                <ul>
                                    <li><a href="'. $root_url .'npcs.php">NPC Search</a></li>
                                    <li><a href="'. $root_url .'advnpcs.php">Advanced NPC Search</a></li>
                                    <li><a href="'. $root_url .'pets.php">Pets</a></li>
                                </ul>
                            </li>
						    <li class="submenus"><a href="">Factions</a>
                                   <ul>
                                       <li><a href="'. $root_url .'factions.php">Faction Search</a></li>
                                       <li><a href="'. $root_url .'npcfactions.php">NPCs By Faction</a></li>
                                   </ul>
						    </li>
							<li><a href="" target="_blank">Spells & Skills</a>
                                <ul>
                                    <li><a href="'. $root_url .'spells.php">Spell Search</a></li>
                                </ul>
							</li>
							<li><a href="" target="_blank">Recipes</a>
						        <ul>
                                    <li><a href="'. $root_url .'recipes.php">Recipe Search</a></li>
                                </ul>
							</li>
						</ul>
					</li>
				</ul>
			</div>
        </td>
    </tr>
';