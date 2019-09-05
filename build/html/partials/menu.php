
<div id = 'header' class = 'header-nav-mobile'>
	<div class = 'top-header'>
		<div class = 'wrapper'>
			<a href = "mailto:info@thesocktologist.com" class = 'left'>
				<i class = 'fa fa-envelope'></i>
				info@thesocktologist.com
			</a>
			<a href = '#' class = 'right'>
				Get Started
			</a>
		</div>
	</div>
	<div class = 'bottom-header'>
		<div class = 'wrapper'>
		<a href = '/' class = 'logo' id = 'site-logo'>
			<?php
				$siteLogoID = get_field('logo','option');
				$siteLogo = wp_get_attachment_image_src($siteLogoID,'large')[0];
				
			?>
			<img src = "<?php echo $siteLogo;?>" alt = 'site logo'>
		</a>
		<div class = 'right-side desktop-menu'>
			<ul>
				<li><a href = "#">HOME</a></li>
				<li><a href = "#">ABOUT US</a></li>
				<li><a href = "#">HOW IT WORKS</a></li>
				<li><a href = "#">OUR WORK</a></li>
				<li><a href = "#">FAQ</a></li>
			</ul>
		</div>
		</div>
	</div>
</div>