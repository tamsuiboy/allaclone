<?php
	if(isset($_POST['SetTheme']))
	{
		setcookie("Theme", $_POST['SetTheme'], time()+31536000); ### Set Theme for the user and hold cookie for a year
		echo '<meta http-equiv="REFRESH" content="0;url='. $_SERVER['PHP_SELF'] . '">';
	}

	echo '	<script type="text/javascript" src="jquery/easytooltip/js/jquery.js"></script>
			<script type="text/javascript" src="jquery/easytooltip/js/easyTooltip.js"></script>';
	
	$XhtmlCompliant = TRUE;
	if($XhtmlCompliant)
	{ 
		echo '<?xml version="1.0" encoding="UTF-8"?>
			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">';
	}
	else
	{
		echo '<html>';
	}

	echo '<head>
			<link rel="stylesheet" href="'. $includes_url . $CssStyle . '.css" type="text/css"/>
			<title>'.$SiteTitle.' '.( $Title != "" ? " :: $Title" : "").'</title>
	
			<script language="javascript">
				function getItem(id)
				{
					var itm = false;
					if(document.getElementById)
					{
						itm = document.getElementById(id);
					}
					else if(document.all)
					{
						itm = document.all[id];
					}
					else if(document.layers)
					{
						itm = document.layers[id];
					}
					return itm;
				}
	
				function toggleItem(id)
				{
					var itm = getItem(id);
	
					if(!itm)
					{
						return false;
					}
					if(itm.style.display == "none")
					{
						itm.style.display = "";
					}
					else
					{
						itm.style.display = "none";
					}
					return false;
				}
			</script>
		</head>';

	if(isset($QueryResult)) 
	{
		// Toggle/Hide search fields after results are shown (for items.php)
		echo '<body onload="toggleItem(\'myTbody\')">';
	}
	else
	{
		echo '<body>';
	}

	// Main Table for the page that includes header and background
	echo '<table border="0" class="page_background" cellspacing="0" cellpadding="0" width="100%" height="100%">';
	
	// Two-columns table : left side is the menu, right side is th main content
	echo '	<tr>
				<td valign="top">
					<center>
						<table border="0" class="main_page" cellspacing="0" cellpadding="0" width="70%" height="100%" >';

	// Header at the top of the screen
	//if($ShowHeader){
		echo '				<tr class="page_background" height="100">
								<td colspan="2">
									<table width="100%" border="0">
										<tr valign="middle" align="left">
											<td>
												<font face="times new roman" size="12">
													<b>'.$PageTitle.'</b>
												</font><br />
												<font face="times new roman" size="5" color="maroon">
													<b>&nbsp;AllaClone</b>
												</font>
											</td>
										</tr>
									</table>
								</td>
							</tr>';
	//}

	include("navbar.php");

	// Page sub welcome
	echo '					<tr valign="top">
								<td colspan="2" class="sub_welcome" width="100%">
									<p class="page_title">'.$Title.'</p>
								</td>
							</tr>';
	
	// Left side
	echo '					<tr valign="top">
								<td class="menu left-content" width="0%">';
									include("menu.php");
	// Right side
	echo '						</td>
								<td class="page right-content" width="100%">';
