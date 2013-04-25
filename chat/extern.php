<?php
/****************************************************************************************
* LiveZilla extern.php
* 
* Copyright 2013 LiveZilla GmbH
* All rights reserved.
* LiveZilla is a registered trademark.
* 
* Improper changes to this file may cause critical errors.
***************************************************************************************/ 

if(!defined("IN_LIVEZILLA"))
	die();
	
require(LIVEZILLA_PATH . "_lib/objects.external.inc.php");
require(LIVEZILLA_PATH . "_lib/functions.external.inc.php");

if(isset($_POST[POST_EXTERN_SERVER_ACTION]))
{
	languageSelect();
	initData(false,true,false,true);
	
	$externalUser = new Visitor(base64UrlDecode($_POST[POST_EXTERN_USER_USERID]));
	$externalUser->ExtendSession = true;
	$externalUser->Load();

	array_push($externalUser->Browsers,new VisitorChat($externalUser->UserId,base64UrlDecode($_POST[POST_EXTERN_USER_BROWSERID])));
	define("IS_FILTERED",$FILTERS->Match(getIP(),formLanguages(((!empty($_SERVER["HTTP_ACCEPT_LANGUAGE"])) ? $_SERVER["HTTP_ACCEPT_LANGUAGE"] : "")),base64UrlDecode($_POST[POST_EXTERN_USER_USERID]),true));
	define("IS_FLOOD",($externalUser->Browsers[0]->FirstCall && isFlood(getIP(),@$_POST[POST_EXTERN_USER_USERID],true)));

	$externalUser->Browsers[0]->Load();
	
	if($_POST[POST_EXTERN_SERVER_ACTION] == EXTERN_ACTION_LISTEN)
		$externalUser = listen($externalUser);
	else if($_POST[POST_EXTERN_SERVER_ACTION] == EXTERN_ACTION_MAIL)
	{
		initData(false,true,false,false);
		$phone = isset($_POST["p_phone"]) ? base64UrlDecode($_POST["p_phone"]) : "";
		
		if(($ticket = $externalUser->SaveTicket(base64UrlDecode($_POST[POST_EXTERN_USER_GROUP]),base64UrlDecode($_POST[POST_EXTERN_USER_NAME]),base64UrlDecode($_POST[POST_EXTERN_USER_EMAIL]),base64UrlDecode($_POST[POST_EXTERN_USER_COMPANY]),$externalUser->GeoCountryISO2,$phone,isset($_GET["cmb"]),base64UrlDecode($_POST[POST_EXTERN_USER_MAIL]))) !== false && ($CONFIG["gl_scom"] != null || $CONFIG["gl_sgom"] != null))
			$externalUser->SendCopyOfMail($ticket);
		$externalUser->Browsers[0]->SaveLoginData();
	}
	else if($_POST[POST_EXTERN_SERVER_ACTION] == EXTERN_ACTION_RATE)
	{
		initData(true,false,false,false);
		$externalUser->SaveRate(base64UrlDecode($_POST[POST_EXTERN_REQUESTED_INTERNID]),$CONFIG);
	}
	else
	{
		if($externalUser->Browsers[0]->Status != CHAT_STATUS_OPEN || $externalUser->Browsers[0]->Waiting)
		{
			$externalUser->Browsers[0]->CloseChat(7);
			$externalUser->Browsers[0] = new VisitorChat($externalUser->UserId,base64UrlDecode(@$_POST[POST_EXTERN_USER_BROWSERID]),$externalUser->Browsers[0]->Fullname,$externalUser->Browsers[0]->Email,$externalUser->Browsers[0]->Company,$externalUser->Browsers[0]->Question,$externalUser->Browsers[0]->Customs,$externalUser->Browsers[0]->DesiredChatGroup,$externalUser->Browsers[0]->DesiredChatPartner);
		}
		else
		{
			$externalUser->Browsers[0]->ChatId = base64UrlDecode(@$_POST[POST_EXTERN_CHAT_ID]);
		}

		$externalUser->Browsers[0]->Waiting = false;
		$externalUser->Browsers[0]->WaitingMessageDisplayed = null;
		
		if($_POST[POST_EXTERN_SERVER_ACTION] == EXTERN_ACTION_RELOAD_GROUPS)
		{
			if(isset($_GET[GET_EXTERN_USER_NAME]) && !empty($_GET[GET_EXTERN_USER_NAME]) && isnull(getCookieValue("form_111")))
				$externalUser->Browsers[0]->Fullname = base64UrlDecode($_GET[GET_EXTERN_USER_NAME]);
		
			if(isset($_GET[GET_EXTERN_USER_EMAIL]) && !empty($_GET[GET_EXTERN_USER_EMAIL]))
				$externalUser->Browsers[0]->Email = base64UrlDecode($_GET[GET_EXTERN_USER_EMAIL]);
			
			if(isset($_GET[GET_EXTERN_USER_COMPANY]) && !empty($_GET[GET_EXTERN_USER_COMPANY]))
				$externalUser->Browsers[0]->Company = base64UrlDecode($_GET[GET_EXTERN_USER_COMPANY]);
				
			if(isset($_GET[GET_EXTERN_USER_QUESTION]) && !empty($_GET[GET_EXTERN_USER_QUESTION]))
				$externalUser->Browsers[0]->Question = base64UrlDecode($_GET[GET_EXTERN_USER_QUESTION]);
			
			$externalUser->Browsers[0]->Customs = getCustomArray($externalUser->Browsers[0]->Customs);
			$externalUser = replaceLoginDetails($externalUser);
			$externalUser = reloadGroups($externalUser);
		}
		else
		{
			$externalUser->Browsers[0]->CloseWindow();
			exit();
		}
	}
	if(!isset($_POST[POST_EXTERN_RESOLUTION_WIDTH]))
		$externalUser->KeepAlive();
	else
		$externalUser->Save($CONFIG,array(base64UrlDecode($_POST[POST_EXTERN_RESOLUTION_WIDTH]),base64UrlDecode($_POST[POST_EXTERN_RESOLUTION_HEIGHT])),base64UrlDecode($_POST[POST_EXTERN_COLOR_DEPTH]),base64UrlDecode($_POST[POST_EXTERN_TIMEZONE_OFFSET]),((isset($_POST[GEO_LATITUDE]))?base64UrlDecode($_POST[GEO_LATITUDE]):""),((isset($_POST[GEO_LONGITUDE]))?base64UrlDecode($_POST[GEO_LONGITUDE]):""),((isset($_POST[GEO_COUNTRY_ISO_2]))?base64UrlDecode($_POST[GEO_COUNTRY_ISO_2]):""),((isset($_POST[GEO_CITY]))?base64UrlDecode($_POST[GEO_CITY]):""),((isset($_POST[GEO_REGION]))?base64UrlDecode($_POST[GEO_REGION]):""),((isset($_POST[GEO_TIMEZONE]))?base64UrlDecode($_POST[GEO_TIMEZONE]):""),((isset($_POST[GEO_ISP]))?base64UrlDecode($_POST[GEO_ISP]):""),((isset($_POST[GEO_SSPAN]))?base64UrlDecode($_POST[GEO_SSPAN]):""),((isset($_POST[GEO_RESULT_ID]))?base64UrlDecode($_POST[GEO_RESULT_ID]):""));
	
	if($externalUser->SignatureMismatch)
	{
		$externalUser->AddFunctionCall("lz_chat_set_signature(\"".$externalUser->UserId."\");",true);
		$externalUser->AddFunctionCall("lz_chat_reload_groups();",false);
	}
	else
	{
		$externalUser->Browsers[0]->VisitId = $externalUser->VisitId;
		if(isset($_GET[GET_TRACK_SPECIAL_AREA_CODE]))
			$externalUser->Browsers[0]->Code = base64UrlDecode($_GET[GET_TRACK_SPECIAL_AREA_CODE]);
		
		if(IS_FILTERED)
			$externalUser->Browsers[0]->CloseChat(8);
		else if(!$externalUser->Browsers[0]->Closed)
			$externalUser->Browsers[0]->Save();
		if(empty($externalUser->Host) && $externalUser->FirstCall)
			$externalUser->ResolveHost();
	}
	$EXTERNSCRIPT = $externalUser->Response;
}
?>
