<?php
// Close the right-side (content) column

//print "<br/>";
echo "</td>";
echo "</tr>";


// End of Main Content Area
echo "</table></center>";
echo "</td>";
echo "</tr>";

// Display site name, version and contact email
echo "<tr>";
echo "<td height='100%' align='center' valign='top' colspan='2'>AllaClone for EQMac - Version: $cfgversion<br />Based off Allaclone release: 2.0.1 - Rev2103";
echo "<a href='mailto:".$SiteEmail."'>$SiteEmail</a>";
echo "</td>";
echo "</tr>";

// Display Theme Selector
//print "<tr>\n";
//print "<td align='center'>\n";
//print "<table border='0' width='0%' height='100%' cellpadding='0' cellspacing='7'>\n";
//print "<tr align='center'>\n";
//print "<td>\n";
//print 'Select Theme:';
//print "</td>\n";
//print "</tr>\n";
//print "<tr align='center'>\n";
//print "<td>\n";
//print '<form method=post name="SetTheme" >
//		<select name="SetTheme" onChange="this.form.submit()">
//		<option selected>Selected: '. $_COOKIE['Theme'] . '</option>
//		<option value="Dark Blue">Dark Blue</option>
//		<option value="Allakhazam">Allakhazam</option>
//		</select>
//		</form>';
//print "<br><br>\n";
//print "</td>\n";
//print "</tr>\n";
//
//print "</table>\n";
//print "</td>\n";
//print "</tr>\n";

echo "</table>";
echo "</body>";
echo "</html>";
