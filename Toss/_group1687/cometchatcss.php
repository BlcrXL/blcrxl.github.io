/*
 * CometChat 
 * Copyright (c) 2009 Inscripts - support@cometchat.com | http://www.cometchat.com | http://www.inscripts.com
*/

/*
 * CometChat 
 * Copyright (c) 2009 Inscripts - support@cometchat.com | http://www.cometchat.com | http://www.inscripts.com
*/

html {
     overflow-y: -moz-scrollbars-vertical;
}

body {
	padding-bottom: 30px;
}
 
#cometchat_base {
	z-index:1000;
	z-index:1000;
	position:fixed;
	bottom: 0px;
	display: block;
	height: 25px;
	left: 15px;
	background-image: url(themes/default/images/bgrepeat.gif);
	border-left: 1px solid #b5b5b5;
	font-family:"Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;
	font-size:11px;
	text-align:left;
}

#cometchat_chatboxes {
	height: 25px;
	overflow: hidden;
	float:right;
	text-align:left;
}

#cometchat_chatboxes_wide {
	height: 25px;
	width: 0px;
	text-align:left;
}

#cometchat_chatbox_left {
	float:right;
	cursor: pointer;
	width: 10px;
	height: 18px;
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 3px -350px;
	padding-left:11px;
	padding-top:6px;
	color: #333333;
	border-left:1px solid #cccccc;
	margin-top:1px;
	text-align:left;
}

#cometchat_chatbox_right {
	float:right;
	cursor: pointer;
	width: 17px;
	height: 18px;
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 11px -572px;
	padding-left:3px;
	padding-top:6px;
	color: #333333;
	border-left:1px solid #cccccc;
	margin-top:1px;
	text-align:left;
}

.cometchat_chatbox_right_last {
	background-position: 11px -611px !important;
	cursor: default !important;
	color: #a7a7a7 !important;
	text-align:left;
}

.cometchat_chatbox_left_last {
	background-position: 3px -389px !important;
	cursor: default !important;
	color: #a7a7a7 !important;
	text-align:left;
}

.cometchat_chatbox_lr {
	display:none !important;
	text-align:left;
}

.cometchat_chatbox_lr_mouseover {
	background-color: #ffffff !important;
	text-align:left;
}

#cometchat_optionsbutton {
	width:25px;
	border-right:1px solid #cccccc;
	text-align:left;
}

#cometchat_userstab {
	width:176px;
	padding-left:9px;
	text-align:left;
}

.cometchat_userstabclick {
	background-position: 5px 3px !important;
	padding-left: 8px !important;
	width: 177px !important;
	text-align:left;
}

.cometchat_closebox {
	width:21px;
	height:12px;
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 4px -934px;
	float:right;
	text-align:left;
}


.cometchat_closebox_bottom {
	width:16px;
	height:12px;
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 1px -1010px;
	float:right;
	text-align:left;
}

.cometchat_closebox_bottom_click {
	background-position: 0px -1010px !important;
	text-align:left;
}

.cometchat_closebox_bottomhover {
	background-position: 1px -1047px !important;
	text-align:left;
}

.cometchat_chatboxmouseoverclose {
	background-position: 4px -973px !important; 
	text-align:left;
}


.cometchat_name {
	float:left;
	text-align:left;
}

#cometchat_chatbox_buttons {
	float:right;
	text-align:left;
}



.cometchat_tabmouseover {
	background-color: #ffffff !important;
	
	text-align:left;
}

.cometchat_tabmouseovertext {
	text-decoration: underline;
	text-align:left;
}


.cometchat_tab {
	margin-top:1px;
	height:18px;
	border-left:1px solid #cccccc;
	border-right:1px solid #e5e5e5;
	float:right;
	padding-left:10px;
	padding-top:5px;
	cursor: pointer;
	font-weight: bold;
	width:140px;
	color: #444444;
	line-height: 1.2em;
	
	text-align:left;
}

.cometchat_tabclick {
	background-color:white !important;
	border-left:1px solid #333333 !important;
	border-right:1px solid #333333 !important;
	border-bottom:1px solid #333333 !important;
	padding-top: 4px !important;
	text-decoration: underline;
	color: #111111 !important;
	text-align:left;
}

.cometchat_usertabclick {
	width: 141px !important;
	padding-left: 9px !important;
	text-align:left;
}

.cometchat_tabpopup {
	background-color: #ffffff;
	z-index:1000;
position:fixed;
	width: 230px;
	font-family:"Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;
	font-size:11px;
	text-align:left;
}

#cometchat_userstab_popup {
	width: 224px;

	text-align:left;
}

#cometchat_optionsbutton_popup {
	width: 224px;
	text-align:left;
}

.cometchat_tabopen {
	display: block !important;
	text-align:left;
}

.cometchat_tabtitle {
	border-right: 1px solid #11648f;
	border-left: 1px solid #11648f;
	border-top: 1px solid #11648f;
	background-color: #3e92bd !important;
	color: #ffffff;
	font-family:"lucida grande",tahoma,verdana,arial,sans-serif;
	padding: 5px;
	font-weight: bold;
	cursor: pointer;
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	_background-color: #3e92bd !important;
	background-position: 195px -424px;
	padding-right:0px;
	text-align:left;
}

.cometchat_userstabtitle {
text-align:left;
	border-right: 1px solid #11648f;
	border-left: 1px solid #11648f;
	border-top: 1px solid #11648f;
	background-color: #3e92bd !important;
	color: #ffffff;
	font-family:"lucida grande",tahoma,verdana,arial,sans-serif;
	padding: 5px;
	font-weight: bold;
	cursor: pointer;
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	_background-color: #3e92bd !important;
	background-position: 205px -424px;
	text-align:left;
}

.cometchat_chatboxtabtitlemouseover {
	background-position: 195px -457px !important; 
	text-align:left;
}

.cometchat_chatboxtabtitlemouseover2 {
	background-position: 205px -457px !important; 
	text-align:left;
}

.cometchat_tabsubtitle {
	border-right: 1px solid #333333;
	border-left: 1px solid #333333;
	border-bottom: 1px solid #ccc;
	background-color: #eeeeee;
	padding: 5px;
	font-family:"lucida grande",tahoma,verdana,arial,sans-serif;
	font-size: 9px;
	color: #666666;
	line-height:1.3em !important;
	text-align:left;
}

.cometchat_plugins {
	padding-right: 5px;
	padding-top: 2px;
	font-family:"lucida grande",tahoma,verdana,arial,sans-serif;
	font-size: 9px;
	color: #666666;
	text-align:left;
}

.cometchat_pluginsicon {
	cursor:pointer;
	margin-right:5px;
	text-align:left;
}

.cometchat_pluginsicon_divider {
	margin-right:5px;
	text-align:left;
}

.cometchat_tabcontent {
	border-right: 1px solid #333333;
	border-left: 1px solid #333333;
	background-color: #ffffff;
	background-image: url(themes/default/images/tabbottom.gif);
	background-repeat: no-repeat;
	background-position: left bottom;
	padding-bottom: 1px;
	color: #333333;
	overflow-x: hidden;
	overflow-y: auto;
	line-height: 1.3em !important;
	text-align:left;
}

.cometchat_tabcontenttext {
	height: 200px;
	border-bottom:1px solid #f6f6f6;
	padding: 5px;
	width: 217px;
	overflow-x: hidden;
	overflow-y: auto;

	text-align:left;
}

 

#cometchat_userscontent {
	height: 200px;
	overflow-x: hidden;
	overflow-y: auto;
	line-height: 100% !important;
	text-align:left;
}

.cometchat_tabcontentinput {

	padding:4px 5px 0px 25px;
	border:0px;
	border-top: 1px solid #cccccc;
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 5px -25px;
	outline:none;
	text-align:left;
}

.cometchat_textarea {
	width: 195px;
	border: 0px;
	height: 23px;
	overflow: hidden;
	font-family: "Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;
	font-size: 11px;
	color: #444444;
	background-color: #ffffff;
	outline:none;
 
	text-align:left;
}

.cometchat_userlist_hover {
	background-color: #d8f2ff !important;
	color: #000000;
	text-align:left;
}

.cometchat_tooltip_content {
	background-color: #333333;
	color: #ffffff;
	padding: 5px;
	font-family:"Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;
	font-size:11px;
	white-space: nowrap;
	text-align:left;
}


.cometchat_userlist {
	cursor: pointer;
	height: 20px;
	text-align:left;
	line-height: 100%;
}

.cometchat_userscontentname {
	float:left;
 	padding-left: 5px;
	padding-top: 3px;
	padding-bottom: 3px;
	text-align:left;
}

.cometchat_userscontentdot {
	float: right;
	background-repeat: no-repeat;
	background-position: 0px 2px;
	width:20px;
	height:16px;
	text-align:left;
}

.cometchat_available {
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 0 -129px !important; 
	text-align:left;
}

.cometchat_away {
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 0 -175px !important; 
	text-align:left;
}

.cometchat_busy {
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 0 -221px !important; 
	text-align:left;
}

.cometchat_offline {
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 0 -1088px !important; 
	text-align:left;
}

#cometchat_tooltip {
	background-image: url(themes/default/images/pointer.png);
	background-repeat: no-repeat;
	background-position: right bottom; 
	z-index:1001;
	position:fixed;
	display: none;
	padding-bottom: 4px;
	text-align:left;
}

.cometchat_tooltip_left {
	background-position: left bottom !important; 
	text-align:left;
}

.cometchat_closebox_bottom_status {
	float: left;
	width: 16px;
	height: 16px;
	background-repeat: no-repeat;
	background-position: 0 -1px;
	text-align:left;
}

.cometchat_tabalert {
	width: 16px;
	height: 16px;
	position: absolute;
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 0 -537px;
	color: white;
	font-size: 8px;
	padding-top: 1px;
	text-align: center;
	text-decoration:none !important;
	line-height: 100%;
}

.cometchat_tabalertlr {
	width: 16px;
	height: 16px;
	position: absolute;
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 0 -537px;
	color: white;
	font-size: 8px;
	padding-top: 1px;
	text-align: center;
}

.cometchat_chatboxmessage {
	margin-left:1em;
	text-align:left;
}

.cometchat_chatboxmessagefrom {
	margin-left:-1em; /* Comment this line if your page direction is rtl */
	font-weight: bold;
	text-align:left;
}

.cometchat_statustextarea {
	border:1px solid #cccccc;
	width:200px;
	padding:4px;
	margin-top:3px;
	margin-bottom:3px;
	font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
	font-size:11px;
	color:#444444;
	overflow-x:hidden;
	overflow-y:auto;
	height:42px;
	outline:none;
	text-align:left;
}

.cometchat_optionsstatus {
	padding-left:2px;
	float:left;
	padding-top:1px;
	cursor: pointer;
	text-align:left;
}

.cometchat_optionsstatus2 {
	padding-left:10px;
	float:left;
	text-align:left;
}

.cometchat_friendtextbox {
	border:1px solid #cccccc;
	width:200px;
	padding:2px;
	margin-top:4px;
	font-family:'lucida grande',tahoma,verdana,arial,sans-serif;
	font-size:11px;
	color:#444444;
	font-weight:normal;
	text-align:left;
}

.cometchat_tabsubtitle a {
	color: #000000;
	text-align:left;
}

.cometchat_tabcontent a {
	color: #287197;
	text-align:left;
}

.cometchat_gooffline {
	color: #000000;
	text-decoration: underline;
	cursor: pointer;
	text-align:left;
}

.cometchat_user_invisible {
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 10px -890px !important;
	width:16px;
	height:16px;
	text-align:left;
}

.cometchat_user_available {
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 0px -752px !important;
	width:16px;
	height:16px;
	text-align:left;
}

.cometchat_user_busy {
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 10px -798px !important;
	width:16px;
	height:16px;
	text-align:left;
}

#cometchat_userstab_icon {
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 0px -753px;
	width: 16px;
	height: 16px;
	float:left;
	padding-right: 5px;
	text-align:left;
}


.cometchat_user_invisible2 {
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 0px -891px !important;
	text-align:left;
}

.cometchat_user_available2 {
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 0px -753px !important;
	text-align:left;
}

.cometchat_user_busy2 {
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 0px -799px !important;
	text-align:left;
}

.cometchat_user_away2 {
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 0px -845px !important;
	text-align:left;
}




.cometchat_optionsimages {
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 10px -309px !important;
	text-align:left;
}

.cometchat_optionsimages_click {
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 10px -310px !important;
	text-align:left;
}

.cometchat_optionsimages_exclamation {
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 10px -263px !important;
	text-align:left;
}

.cometchat_trayicon {
	float:left;
	padding-left:7px;
	padding-right:7px;
	border-right:1px solid #cccccc;
	margin-left:1px;
	margin-top:1px;
	padding-top:5px;
	height:18px;
	cursor: pointer;
	text-align:left;
}

.cometchat_smiley {
	vertical-align: -3px;
	text-align:left;
}

.cometchat_nofriends {
	font-family:"Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;
	font-size:11px;
	padding:5px;
	line-height:1.3em;
	text-align:left;
}

.cometchat_traypopup {
	background-color: #ffffff;
	z-index:10000;
	position:fixed;
	font-family:"Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;
	font-size:11px;
	text-align:left;
}

.cometchat_traytitle {
	border-right: 1px solid #11648f;
	border-left: 1px solid #11648f;
	border-top: 1px solid #11648f;
	background-color: #3e92bd !important;
	color: #ffffff;
	font-family:"lucida grande",tahoma,verdana,arial,sans-serif;
	padding: 5px;
	font-weight: bold;
	cursor: pointer;
	padding-right:0px;
	text-align:left;
}

.cometchat_traycontent {
	border-right: 1px solid #333333;
	border-left: 1px solid #333333;
	background-color: #ffffff;
	background-image: url(themes/default/images/tabbottom_tray.gif);
	background-repeat: no-repeat;
	background-position: left bottom;
	padding-bottom: 1px;
	color: #333333;
	overflow-x: hidden;
	overflow-y: auto;
	text-align:left;
}

.cometchat_traycontenttext {
	border-bottom:1px solid #f6f6f6;
	padding: 0px;
	overflow-x: hidden;
	overflow-y: hidden;
	text-align:left;
}

.cometchat_trayclick {
	background-color:white !important;
	border-left:1px solid #333333 !important;
	border-right:1px solid #333333 !important;
	border-bottom:1px solid #333333 !important;
	padding-top: 4px !important;
	text-decoration: underline;
	color: #111111 !important;
	margin-left: 0px;
	text-align:left;
}

.cometchat_minimizebox {
	width:21px;
	height:12px;
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;
	background-position: 4px -430px;
	float:right;
	text-align:left;
}


.cometchat_chatboxtraytitlemouseover {
	background-position: 4px -463px !important; 
	text-align:left;
}


.cometchat_star {	
	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left; 
	background-position: 4px -1068px; 
	height:16px;
	width:16px;
	text-align:left;
}

.cometchat_star_empty { 	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;background-position: 0 -1150px; height:16px;width:16px;	text-align:left;
} 
.cometchat_star_half { 	background: url(themes/default/images/cometchat.png) no-repeat top left;
	_background: url(themes/default/images/cometchat.gif) no-repeat top left;background-position: 0 -1196px; height:16px;width:16px;	text-align:left;
} 


.cometchat_name a {
	color: white;
	text-decoration: underline;
	text-align:left;
}

.cometchat_name a:hover {
	color: white;
	text-decoration: none;
	text-align:left;
}

.cometchat_avatar {
	border: 1px solid #ccc;
	height: 28px;
	width: 30px;
	text-align:left;
}

.cometchat_avatarbox {
	float:left;
	padding-right: 5px;
	text-align:left;
}

.cometchat_ts {
	color:#ccc;font-size:10px;padding-top:2px;padding-left:5px;
	cursor: default;
	display: none;
	text-align:left;
}

.cometchat_ts:hover {
	color:#333;font-size:10px;padding-top:2px;padding-left:5px;
	cursor: default;
	text-align:left;
}

.cometchat_ts_date {
	display: none;
	text-align:left;
}

.cometchat_optionstyle {
	background-image: url(themes/default/images/tabbottomoptions.gif);
	padding:5px;
	padding-bottom:10px;
	text-align:left;
}

.cometchat_tabstyle {
	background-image: url(themes/default/images/tabbottomwhosonline.gif);
	height:200px;
	padding-top:5px;
	padding-bottom:5px;
	text-align:left;
}

.cometchat_self {
	color: #666666 !important;
	text-align:left;
}