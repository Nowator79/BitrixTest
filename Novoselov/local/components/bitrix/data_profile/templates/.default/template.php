<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<aside class="info aside section">
	<div class="section-inner">
		<h2 class="heading sr-only">Basic Information</h2>
		<div class="content">
			<ul class="list-unstyled">
				<li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span><?echo $arResult["PROPERTIES"]["ADDRESS"]["VALUE"]?></li>
				<li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span><a href="mailto:<?echo $arResult["PROPERTIES"]["MAIL"]["VALUE"]?>"><?echo $arResult["PROPERTIES"]["MAIL"]["VALUE"]?></a></li>
				<li><i class="fa fa-link"></i><span class="sr-only">Website:</span><a href="<?echo $arResult["PROPERTIES"]["WEB_SITE"]["VALUE"]?>"><?echo $arResult["PROPERTIES"]["WEB_SITE"]["VALUE"]?></a>
				</li>
			</ul>
		</div>
		<!--//content-->
	</div>
	<!--//section-inner-->
</aside>