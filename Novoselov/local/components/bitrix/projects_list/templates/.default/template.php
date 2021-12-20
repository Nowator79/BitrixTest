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


<section class="latest section">
	<div class="section-inner">
		<h2 class="heading">Latest Projects</h2>
		<div class="content">
			<div class="item featured text-center">
				<h3 class="title"><a
						href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-products-velocity/"
						target="_blank"><?echo $arResult["FIRST_ITEM"]["NAME"]?></a></h3>
				<p class="summary">
					A responsive Bootstrap template designed for digital products
				</p>
				<div class="featured-image">
					<a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-products-velocity/"
						target="_blank"> <img alt="project name" src="<?echo $arResult["FIRST_ITEM"]["PREVIEW_SRC"]["src"]?>"
							class="img-responsive project-image"> </a>
					<div class="ribbon">
						<div class="text">
							New
						</div>
					</div>
				</div>
				<div class="desc text-left">
					<?echo $arResult["FIRST_ITEM"]["PREVIEW_TEXT"]?>
				</div>
				<!--//desc--> <a class="btn btn-cta-secondary"
					href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-products-velocity/"
					target="_blank"><i class="fa fa-thumbs-o-up"></i> Back my project</a>
			</div>
			<hr class="divider">
			<?
				foreach ($arResult["ITEMS"] as $key => $item) {
			?>
				<!--//item-->
				<div class="item row">
					<a class="col-md-4 col-sm-4 col-xs-12"
						href="<?echo $item["DETAIL_PAGE_URL"];?>"
						target="_blank"> <img alt="project name" src="<?echo $item["PREVIEW_SRC"]["src"];?>"
							class="img-responsive project-image"> </a>
					<div class="desc col-md-8 col-sm-8 col-xs-12">
						<h3 class="title"><a
								href="<?echo $item["DETAIL_PAGE_URL"];?>"
								target="_blank"><?echo $item["NAME"];?></a></h3>
						<p>
							<?echo $item["PREVIEW_TEXT"];?>
						</p>
						<p>
							<a class="more-link"
								href="<?echo $item["DETAIL_PAGE_URL"];?>"
								target="_blank"><i class="fa fa-external-link"></i> Find out more</a>
						</p>
					</div>
					<!--//desc-->
				</div>
				<!--//item-->
			<?
			}
			?>

		</div>
		<!--//content-->
	</div>
	<!--//section-inner-->
</section>