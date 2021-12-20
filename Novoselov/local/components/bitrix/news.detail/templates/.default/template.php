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
<!-- ******HEADER****** --> 
<header class="header">
	<div class="container">                       
			<img class="profile-image img-responsive pull-left" src="<? echo $arResult["PREVIEW_PICTURE"]["SRC"]?>" alt="James Lee" />
			<div class="profile-content pull-left">
					<h1 class="name"><? echo $arResult["NAME"]?></h1>
					<h2 class="desc"><? echo $arResult["PROPERTIES"]["SUBTITLE"]["VALUE"]?></h2>   
					<ul class="social list-inline">
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>                   
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-github-alt"></i></a></li>                  
							<li class="last-item"><a href="#"><i class="fa fa-hacker-news"></i></a></li>                 
					</ul> 
			</div><!--//profile-->
	</div><!--//container-->
</header><!--//header-->
<div class="container sections-wrapper">
	<div class="row">
		<div class="primary col-md-8 col-sm-12 col-xs-12">
			<!--//section-->
			<section class="about section">
				<div class="section-inner">
					<h2 class="heading">About Me</h2>
					<div class="content">
						<?echo $arResult["DETAIL_TEXT"]?>
					</div>
					<!--//content-->
				</div>
				<!--//section-inner-->
			</section>
			<!--//section-->

			<? $APPLICATION->IncludeComponent(
				"bitrix:projects_list",
				".default",
				array(
					"COMPONENT_TEMPLATE" => ".default",
					"IBLOCK_TYPE" => "content",
					"IBLOCK_ID" => "2",
					"ELEMENT_ID" => "2",
					"ELEMENT_CODE" => "",
					"CHECK_DATES" => "Y",
					"FIELD_CODE" => array(
						0 => "PREVIEW_TEXT",
						1 => "PREVIEW_PICTURE",
						2 => "",
					),
					"PROPERTY_CODE" => array(
						0 => "SIMILAR_PROJECTS",
						1 => "",
					),
					"IBLOCK_URL" => "",
					"DETAIL_URL" => "",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "36000000",
					"CACHE_GROUPS" => "Y",
					"SET_TITLE" => "Y",
					"SET_CANONICAL_URL" => "N",
					"SET_BROWSER_TITLE" => "Y",
					"BROWSER_TITLE" => "-",
					"SET_META_KEYWORDS" => "Y",
					"META_KEYWORDS" => "-",
					"SET_META_DESCRIPTION" => "Y",
					"META_DESCRIPTION" => "-",
					"SET_LAST_MODIFIED" => "N",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
					"ADD_SECTIONS_CHAIN" => "Y",
					"ADD_ELEMENT_CHAIN" => "N",
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"USE_PERMISSIONS" => "N",
					"STRICT_SECTION_CHECK" => "N",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"USE_SHARE" => "N",
					"PAGER_TEMPLATE" => ".default",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"PAGER_TITLE" => "Страница",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"SET_STATUS_404" => "N",
					"SHOW_404" => "N",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "5",
					"SORT_BY1" => "ACTIVE_FROM",
					"SORT_ORDER1" => "DESC",
					"SORT_BY2" => "SORT",
					"SORT_ORDER2" => "ASC",
					"FILTER_NAME" => "",
					"CACHE_FILTER" => "N",
					"PREVIEW_TRUNCATE_LEN" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"INCLUDE_SUBSECTIONS" => "Y",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"LIST_PROJECT_ID" => $arResult["PROPERTIES"]["LIST_PROJECT_ID"]["VALUE"]
				),
				false
			); ?>

			<section class="projects section">
				<div class="section-inner">
					<h2 class="heading">Other Projects</h2>
					<div class="content">
						<div class="item">
							<h3 class="title"><a href="#">Project Title Cras Lacus</a></h3>
							<p class="summary">
								Provide a brief description of your project. Ut enim ad minima veniam, quis nostrum exercitationem ullam
								corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatu.
							</p>
							<p>
								<a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank"><i class="fa fa-external-link"></i> Find out more</a>
							</p>
						</div>
						<!--//item-->
						<div class="item">
							<h3 class="title"><a href="#">Project Title Cras eget lacus</a> <span class="label label-theme">Open
									Source</span></h3>
							<p class="summary">
								Provide a brief description of your project. Maecenas ornare ultricies risus, in fermentum augue
								consectetur in. Vestibulum vitae mauris iaculis, sollicitudin velit in, molestie nulla.
							</p>
							<p>
								<a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank"><i class="fa fa-external-link"></i> View on GitHub</a>
							</p>
						</div>
						<!--//item-->
						<div class="item">
							<h3 class="title"><a href="#">Project Title Maecenas Ornare</a> <span class="label label-theme">Open
									Source</span></h3>
							<p class="summary">
								Provide a brief description of your project. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
								vel purus enim. Etiam tortor felis, fermentum ac ultrices sed.
							</p>
							<p>
								<a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank"><i class="fa fa-external-link"></i> View on GitHub</a>
							</p>
						</div>
						<!--//item--> <a class="btn btn-cta-secondary" href="#">More on CoderWall <i class="fa fa-chevron-right"></i></a>
					</div>
					<!--//content-->
				</div>
				<!--//section-inner-->
			</section>
			<!--//section-->
			<section class="experience section">
				<div class="section-inner">
					<h2 class="heading">Work Experience</h2>
					<div class="content">
						<div class="item">
							<h3 class="title">Co-Founder &amp; Lead Developer - <span class="place"><a href="#">Startup Hub</a></span>
								<span class="year">(2014 - Present)</span>
							</h3>
							<p>
								Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in,
								viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Donec vitae sapien ut
								libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
							</p>
						</div>
						<!--//item-->
						<div class="item">
							<h3 class="title">Software Engineer - <span class="place"><a href="#">Google</a></span> <span class="year">(2013 - 2014)</span></h3>
							<p>
								Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit
								pellentesque, mauris dui tincidunt enim. Sed fringilla mauris sit amet nibh. Donec sodales sagittis
								magna.
							</p>
						</div>
						<!--//item-->
						<div class="item">
							<h3 class="title">Software Engineer - <span class="place"><a href="#">eBay</a></span> <span class="year">(2012 - 2013)</span></h3>
							<p>
								Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque
								sed ipsum.
							</p>
						</div>
						<!--//item-->
					</div>
					<!--//content-->
				</div>
				<!--//section-inner-->
			</section>
			<!--//section-->
			<section class="github section">
				<div class="section-inner">
					<h2 class="heading">My GitHub</h2>
					<p>
						You can embed your GitHub contribution graph calendar using IonicaBizau's <a href="https://github.com/IonicaBizau/github-calendar" target="_blank">GitHub Calendar</a> widget.
					</p>
					<div id="github-graph" class="github-graph">
					</div>
					<!--//github-graph-->
					<p>
						You can also embed your GitHub activities using Casey Scarborough's <a href="http://caseyscarborough.com/projects/github-activity/" target="_blank">GitHub Activity Stream</a>
						widget.
						<!--//Usage: http://caseyscarborough.com/projects/github-activity/ -->
					</p>
					<div id="ghfeed" class="ghfeed">
					</div>
					<!--//ghfeed-->
				</div>
				<!--//secton-inner-->
			</section>
			<!--//section-->
		</div>
		<!--//primary-->
		<div class="secondary col-md-4 col-sm-12 col-xs-12">
			<? $APPLICATION->IncludeComponent(
				"bitrix:data_profile",
				".default",
				array(
					"COMPONENT_TEMPLATE" => ".default",
					"IBLOCK_TYPE" => "content",
					"IBLOCK_ID" => "1",
					"ELEMENT_ID" => $arParams["ELEMENT_ID"],
					"ELEMENT_CODE" => "",
					"CHECK_DATES" => "Y",
					"FIELD_CODE" => array(
						0 => "",
						1 => "",
					),
					"PROPERTY_CODE" => array(
						0 => "",
						1 => "ADDRESS",
						2 => "MAIL",
						3 => "WEB_SITE",
						4 => "",
					),
					"IBLOCK_URL" => "",
					"DETAIL_URL" => "",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "36000000",
					"CACHE_GROUPS" => "Y",
					"SET_TITLE" => "Y",
					"SET_CANONICAL_URL" => "N",
					"SET_BROWSER_TITLE" => "Y",
					"BROWSER_TITLE" => "-",
					"SET_META_KEYWORDS" => "Y",
					"META_KEYWORDS" => "-",
					"SET_META_DESCRIPTION" => "Y",
					"META_DESCRIPTION" => "-",
					"SET_LAST_MODIFIED" => "N",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
					"ADD_SECTIONS_CHAIN" => "Y",
					"ADD_ELEMENT_CHAIN" => "N",
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"USE_PERMISSIONS" => "N",
					"STRICT_SECTION_CHECK" => "N",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"USE_SHARE" => "N",
					"PAGER_TEMPLATE" => ".default",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"PAGER_TITLE" => "Страница",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"SET_STATUS_404" => "N",
					"SHOW_404" => "N",
					"MESSAGE_404" => ""
				),
				false
			); ?>
			<!--//aside-->
			<aside class="skills aside section">
				<div class="section-inner">
					<h2 class="heading">Skills</h2>
					<div class="content">
						<p class="intro">
							Intro about your skills goes here. Keep the list lean and only show your primary skillset. You can always
							provide a link to your Linkedin or Coderwall profile so people can get more info there.
						</p>
						<div class="skillset">
							<div class="item">
								<h3 class="level-title">Python &amp; Django<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="You can use the tooltip to add more info...">Expert</span></h3>
								<div class="level-bar">
									<div class="level-bar-inner" data-level="96%">
									</div>
								</div>
								<!--//level-bar-->
							</div>
							<!--//item-->
							<div class="item">
								<h3 class="level-title">Javascript &amp; jQuery<span class="level-label">Expert</span></h3>
								<div class="level-bar">
									<div class="level-bar-inner" data-level="96%">
									</div>
								</div>
								<!--//level-bar-->
							</div>
							<!--//item-->
							<div class="item">
								<h3 class="level-title">HTML5, CSS3, SASS &amp; LESS<span class="level-label">Expert</span></h3>
								<div class="level-bar">
									<div class="level-bar-inner" data-level="96%">
									</div>
								</div>
								<!--//level-bar-->
							</div>
							<!--//item-->
							<div class="item">
								<h3 class="level-title">Ruby on Rails<span class="level-label">Pro</span></h3>
								<div class="level-bar">
									<div class="level-bar-inner" data-level="85%">
									</div>
								</div>
								<!--//level-bar-->
							</div>
							<!--//item-->
							<p>
								<a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Coderwall</a>
							</p>
						</div>
					</div>
					<!--//content-->
				</div>
				<!--//section-inner-->
			</aside>
			<!--//section-->
			<aside class="testimonials aside section">
				<div class="section-inner">
					<h2 class="heading">Testimonials</h2>
					<div class="content">
						<div class="item">
							<blockquote class="quote">
								<p>
									<i class="fa fa-quote-left"></i>James is an excellent software engineer and he is passionate about
									what he does. You can totally count on him to deliver your projects!
								</p>
							</blockquote>
							<p class="source">
								<span class="name">Tim Adams</span><br>
								<span class="title">Curabitur commodo</span>
							</p>
						</div>
						<!--//item-->
						<p>
							<a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Linkedin</a>
						</p>
					</div>
					<!--//content-->
				</div>
				<!--//section-inner-->
			</aside>
			<!--//section-->
			<aside class="education aside section">
				<div class="section-inner">
					<h2 class="heading">Education</h2>
					<div class="content">
						<div class="item">
							<h3 class="title"><i class="fa fa-graduation-cap"></i> MSc Psychology and Computer Science</h3>
							<h4 class="university">University College London <span class="year">(2011-2012)</span></h4>
						</div>
						<!--//item-->
						<div class="item">
							<h3 class="title"><i class="fa fa-graduation-cap"></i> BSc Computer Science</h3>
							<h4 class="university">University of Bristol <span class="year">(2008-2011)</span></h4>
						</div>
						<!--//item-->
					</div>
					<!--//content-->
				</div>
				<!--//section-inner-->
			</aside>
			<!--//section-->
			<aside class="languages aside section">
				<div class="section-inner">
					<h2 class="heading">Languages</h2>
					<div class="content">
						<ul class="list-unstyled">
							<li class="item"> <span class="title"><strong>English:</strong></span> <span class="level">Native Speaker
									<br class="visible-xs">
									<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </span> </li>
							<!--//item-->
							<li class="item"> <span class="title"><strong>Spanish:</strong></span> <span class="level">Professional
									Proficiency <br class="visible-sm visible-xs">
									<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half"></i></span> </li>
							<!--//item-->
						</ul>
					</div>
					<!--//content-->
				</div>
				<!--//section-inner-->
			</aside>
			<!--//section-->
			<aside class="blog aside section">
				<div class="section-inner">
					<h2 class="heading">Latest Blog Posts</h2>
					<p>
						You can use Sascha Depold's <a href="https://github.com/sdepold/jquery-rss" target="_blank">jQuery RSS
							plugin</a> to pull in your blog post feeds.
					</p>
					<div id="rss-feeds" class="content">
					</div>
					<!--//content-->
				</div>
				<!--//section-inner-->
			</aside>
			<!--//section-->
			<aside class="list music aside section">
				<div class="section-inner">
					<h2 class="heading">Favourite coding music</h2>
					<div class="content">
						<ul class="list-unstyled">
							<li><i class="fa fa-headphones"></i> <a href="#">Etiam hendrerit urna nunc</a></li>
							<li><i class="fa fa-headphones"></i> <a href="#">Ut sollicitudin in mauris non auctor</a></li>
							<li><i class="fa fa-headphones"></i> <a href="#">Etiam hendrerit urna nunc</a></li>
							<li><i class="fa fa-headphones"></i> <a href="#">Duis et felis bibendum</a></li>
						</ul>
					</div>
					<!--//content-->
				</div>
				<!--//section-inner-->
			</aside>
			<!--//section-->
			<aside class="list conferences aside section">
				<div class="section-inner">
					<h2 class="heading">Conferences</h2>
					<div class="content">
						<ul class="list-unstyled">
							<li><i class="fa fa-calendar"></i> <a href="https://developer.apple.com/wwdc/" target="_blank">WWDC
									2014</a> (San Francisco)</li>
							<li><i class="fa fa-calendar"></i> <a href="http://hive.aigaseattle.org/">Hive</a> (Seattle)</li>
						</ul>
					</div>
					<!--//content-->
				</div>
				<!--//section-inner-->
			</aside>
			<!--//section-->
			<aside class="credits aside section">
				<div class="section-inner">
					<h2 class="heading">Credits</h2>
					<div class="content">
						<ul class="list-unstyled">
							<li><a href="http://getbootstrap.com/" target="_blank"><i class="fa fa-external-link"></i> Bootstrap</a>
							</li>
							<li><a href="http://fortawesome.github.io/Font-Awesome/" target="_blank"><i class="fa fa-external-link"></i> FontAwesome</a></li>
							<li><a href="http://jquery.com/" target="_blank"><i class="fa fa-external-link"></i> jQuery</a></li>
							<li><a href="https://github.com/IonicaBizau/github-calendar" target="_blank"><i class="fa fa-external-link"></i> GitHub Calendar Plugin</a></li>
							<li><a href="http://caseyscarborough.com/projects/github-activity/" target="_blank"><i class="fa fa-external-link"></i> GitHub Activity Stream</a></li>
							<li><a href="https://github.com/sdepold/jquery-rss" target="_blank"><i class="fa fa-external-link"></i>
									jQuery RSS</a></li>
							<li>Profile image: <a href="https://www.flickr.com/photos/dotbenjamin/2577394151" target="_blank">Ben
									Smith</a></li>
							<li>iPad and iPhone mocks: <a href="https://dribbble.com/perlerar" target="_blank">Regy Perlera</a></li>
						</ul>
						<hr>
						<p>
							This responsive portfolio template is handcrafted by UX designer <a href="https://www.linkedin.com/in/xiaoying" target="_blank">Xiaoying Riley</a> at <a href="http://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a> for developers and is
							<strong>FREE</strong> under the <a class="dotted-link" href="http://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons Attribution 3.0 License</a>
						</p>
						<p>
							We will improve or add new features to this template based on users' feedback so follow us on twitter to
							get notified when a new version is out!
						</p>
						<a class="btn btn-cta-secondary btn-follow" href="https://twitter.com/3rdwave_themes" target="_blank"><i class="fa fa-twitter"></i> Follow us</a> <a class="btn btn-cta-primary btn-download" href="http://themes.3rdwavemedia.com/website-templates/free-responsive-website-template-for-developers/" target="_blank"><i class="fa fa-download"></i> I want to download</a>
					</div>
					<!--//content-->
				</div>
				<!--//section-inner-->
			</aside>
			<!--//section-->
		</div>
		<!--//secondary-->
	</div>
	<!--//row-->
</div>