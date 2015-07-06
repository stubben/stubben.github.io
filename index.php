<?php
$tools['adobe-illustrator']['category'][] = 'app';
$tools['adobe-illustrator']['category'][] = 'productivity';

$tools['adobe-photoshop']['category'][] = 'app';
$tools['adobe-photoshop']['category'][] = 'productivity';

$tools['anydo']['category'][] = 'app';
$tools['anydo']['category'][] = 'productivity';

$tools['compass']['category'][] = 'app';
$tools['compass']['category'][] = 'productivity';

$tools['css3']['category'][] = 'language';

$tools['dash']['category'][] = 'app';
$tools['dash']['category'][] = 'productivity';

$tools['dropbox']['category'][] = 'app';
$tools['dropbox']['category'][] = 'productivity';

$tools['drupal']['category'][] = 'cms';

$tools['filezilla']['category'][] = 'app';
$tools['filezilla']['category'][] = 'productivity';

$tools['git']['category'][] = 'app';
$tools['git']['category'][] = 'productivity';

$tools['github']['category'][] = 'service';
$tools['github']['category'][] = 'productivity';

$tools['google-chrome']['category'][] = 'app';
$tools['google-chrome']['category'][] = 'browser';

$tools['google-drive']['category'][] = 'app';
$tools['google-drive']['category'][] = 'productivity';

$tools['growl']['category'][] = 'app';
$tools['growl']['category'][] = 'productivity';

$tools['hipchat']['category'][] = 'app';
$tools['hipchat']['category'][] = 'productivity';
$tools['hipchat']['category'][] = 'social';

$tools['html5']['category'][] = 'language';

$tools['imageoptim']['category'][] = 'app';
$tools['imageoptim']['category'][] = 'productivity';

$tools['iterm']['category'][] = 'app';
$tools['iterm']['category'][] = 'productivity';

$tools['javascript']['category'][] = 'language';

$tools['jira']['category'][] = 'service';

$tools['jquery']['category'][] = 'language';

$tools['macosx']['category'][] = 'os';

$tools['microsoft-office']['category'][] = 'app';
$tools['microsoft-office']['category'][] = 'productivity';

$tools['microsoft-internet-explorer']['category'][] = 'browser';
$tools['microsoft-internet-explorer']['category'][] = 'app';

$tools['minimus']['category'][] = 'app';
$tools['minimus']['category'][] = 'productivity';

$tools['mozilla-firefox']['category'][] = 'app';
$tools['mozilla-firefox']['category'][] = 'browser';

$tools['mysql']['category'][] = 'app';
$tools['mysql']['category'][] = 'productivity';
$tools['mysql']['category'][] = 'language';

$tools['open-office']['category'][] = 'app';
$tools['open-office']['category'][] = 'productivity';

$tools['parallels-desktop']['category'][] = 'app';
$tools['parallels-desktop']['category'][] = 'productivity';

$tools['php-storm']['category'][] = 'app';
$tools['php-storm']['category'][] = 'editor';
$tools['php-storm']['category'][] = 'productivity';

$tools['php']['category'][] = 'language';

$tools['remote-desktop-connection']['category'][] = 'app';
$tools['remote-desktop-connection']['category'][] = 'productivity';

$tools['retinacapture']['category'][] = 'app';
$tools['retinacapture']['category'][] = 'productivity';

$tools['safari']['category'][] = 'app';
$tools['safari']['category'][] = 'browser';

$tools['sass']['category'][] = 'language';

$tools['sequel-pro']['category'][] = 'app';
$tools['sequel-pro']['category'][] = 'productivity';

$tools['skype']['category'][] = 'app';
$tools['skype']['category'][] = 'social';

$tools['sonos']['category'][] = 'app';
$tools['sonos']['category'][] = 'stimulus';

$tools['sourcetree']['category'][] = 'app';
$tools['sourcetree']['category'][] = 'productivity';

$tools['spotify']['category'][] = 'app';
$tools['spotify']['category'][] = 'stimulus';

$tools['steam']['category'][] = 'app';
$tools['steam']['category'][] = 'stimulus';

$tools['sublime-text-2']['category'][] = 'app';
$tools['sublime-text-2']['category'][] = 'editor';
$tools['sublime-text-2']['category'][] = 'productivity';

$tools['svgo-gui']['category'][] = 'app';
$tools['svgo-gui']['category'][] = 'productivity';

$tools['teamcity']['category'][] = 'service';

$tools['textmate']['category'][] = 'app';
$tools['textmate']['category'][] = 'editor';
$tools['textmate']['category'][] = 'productivity';

$tools['textwrangler']['category'][] = 'app';
$tools['textwrangler']['category'][] = 'editor';
$tools['textwrangler']['category'][] = 'productivity';

$tools['timemachine']['category'][] = 'app';
$tools['timemachine']['category'][] = 'productivity';

$tools['twitter']['category'][] = 'app';
$tools['twitter']['category'][] = 'social';

$tools['windows']['category'][] = 'os';

$tools['wordpress']['category'][] = 'cms';

$tools['wunderlist']['category'][] = 'app';
$tools['wunderlist']['category'][] = 'productivity';

$tools['xcode']['category'][] = 'app';
$tools['xcode']['category'][] = 'editor';
$tools['xcode']['category'][] = 'productivity';

$tools['xtrafinder']['category'][] = 'app';
$tools['xtrafinder']['category'][] = 'productivity';

foreach ($tools as $tool => $content) {
	foreach ($content as $key => $arr) {
		if ($key == 'category') {
			foreach ($arr as $key_cat => $category) {
				$cats[$category] = $category;
			}
		}
	}
}
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<title>Tooles of the trade | Martin Stub</title>
</head>
<body>
	<header class="cd-header">
		<h1>The tools</h1>
	</header>
	<main class="cd-main-content">
		<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter">
				<ul class="cd-filters">
					<li class="placeholder">
						<a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
					</li>
					<li class="filter">
						<a class="selected" href="#0" data-type="all">All</a>
					</li>
					<?php
					foreach ($cats as $cat) {
						print "<li class=\"filter\" data-filter=\".{$cat}\">\n";
						print "<a hef=\"#0\" data-type=\"{$cat}\">{$cat}</a>\n";
						print "</li>\n";
					}
					?>
				</ul> <!-- cd-filters -->
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->
		<section class="cd-gallery">
			<ul>
				<?php
				foreach ($tools as $tool => $content) {
					print "<li class=\"mix";
					foreach ($content as $key => $categories) {
						foreach ($categories as $key2 => $category) {
							print " " . $category . " ";
						}
					}
					print "\">\n";
					print "<figure>";
						print "<img src=\"img/icons/".$tool.".png\" alt=\"".ucfirst($tool)."\"/>";
						print "<figcaption>";
						print "</figcaption>";
					print "</figure>";
					print "</li>\n";
				}

				$number_of_gaps = 7;
				for ($i = 0; $i <= $number_of_gaps; $i++) {
					print '<li class="gap"></li>';
				}
				?>
			</ul>
			<div class="cd-fail-message">No results found</div>
		</section> <!-- cd-gallery -->
		<div class="cd-filter">
			<form>
				<div class="cd-filter-block">
					<h4>Search</h4>
					<div class="cd-filter-content">
						<input type="search" placeholder="Søg">
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Select mulitiple</h4>
					<ul class="cd-filter-content cd-filters list">
						<?php
						foreach ($cats as $cat) {
							print "<li>";
							print "<input class=\"filter\" data-filter=\".{$cat}\" type=\"checkbox\" id=\"{$cat}\">\n";
							$uc_cat = ucfirst($cat);
							print "<label class=\"checkbox-label\" for=\"{$cat}\">{$uc_cat}</label>";
							print "</li>\n";
						}
						?>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
			</form>
			<a href="#0" class="cd-close">Close</a>
		</div> <!-- cd-filter -->
		<a href="#0" class="cd-filter-trigger">Filters</a>
	</main> <!-- cd-main-content -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
