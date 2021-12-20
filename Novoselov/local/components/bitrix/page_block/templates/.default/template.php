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

<section class="about section">
	<div class="section-inner">
		<h2 class="heading"><?echo $arResult["NAME"]?></h2>
		<div class="content">
			<?echo $arResult["PREVIEW_TEXT"]?>
		</div>
		<!--//content-->
	</div>
	<!--//section-inner-->
</section>