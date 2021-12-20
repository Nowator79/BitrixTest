<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
	<head>
		<?$APPLICATION->ShowHead();?>
		<?$APPLICATION->SetAdditionalCSS($SITE_TEMPLATE_PATH."/bitrix/plugins/bootstrap/css/bootstrap.min.css");?>
		<?$APPLICATION->SetAdditionalCSS($SITE_TEMPLATE_PATH."/bitrix/plugins/font-awesome/css/font-awesome.css");?>
		<?$APPLICATION->SetAdditionalCSS($SITE_TEMPLATE_PATH."/bitrix/plugins/github-calendar/dist/github-calendar.css");?>
		<?$APPLICATION->SetAdditionalCSS($SITE_TEMPLATE_PATH."/bitrix/plugins/github-activity/src/github-activity.css");?>
		
		<?$APPLICATION->AddHeadScript($SITE_TEMPLATE_PATH."/bitrix/plugins/jquery-1.11.3.min.js");?>
		<?$APPLICATION->AddHeadScript($SITE_TEMPLATE_PATH."/bitrix/plugins/jquery-1.11.3.min.js");?>
		<?$APPLICATION->AddHeadScript($SITE_TEMPLATE_PATH."/bitrix/plugins/bootstrap/js/bootstrap.min.js");?>
		<?$APPLICATION->AddHeadScript($SITE_TEMPLATE_PATH."/bitrix/plugins/jquery-rss/dist/jquery.rss.min.js");?>
		<?$APPLICATION->AddHeadScript($SITE_TEMPLATE_PATH."https://cdnjs.cloudflare.com/ajax/libs/es6-promise/3.0.2/es6-promise.min.js");?>
		<?$APPLICATION->AddHeadScript($SITE_TEMPLATE_PATH."https://cdnjs.cloudflare.com/ajax/libs/fetch/0.10.1/fetch.min.js");?>
		<?$APPLICATION->AddHeadScript($SITE_TEMPLATE_PATH."//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js");?>
		<?$APPLICATION->AddHeadScript($SITE_TEMPLATE_PATH."/bitrix/plugins/github-activity/src/github-activity.js");?>
		<?$APPLICATION->AddHeadScript($SITE_TEMPLATE_PATH."/bitrix/plugins/main.js");?>

		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" /> 	
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>

	

		
	
						