<?php
/*
#########################################
#
# Copyright (C) 2014 EyesOfNetwork Team
# DEV NAME : Jean-Philippe LEVY
# VERSION 4.1
# APPLICATION : eonweb for eyesofnetwork project
#
# LICENCE :
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
#########################################
*/

if(isset($_GET["file"])){
	$dwn="/tmp/".$_GET["file"];
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=".$_GET["file"]);
	flush(); 
	readfile($dwn);
}

?>