
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta http-equiv="content-language" content="en" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>OpenRailwayMap</title>
		<meta name="title" content="OpenRailwayMap" />
		<meta name="application-name" content="OpenRailwayMap" />
		<meta name="page-topic" content="OpenRailwayMap" />
		<meta name="description" content="OpenRailwayMap - An OpenStreetMap-based project for creating a map of the world&#39;s railway infrastructure." />
		<meta name="keywords" content="openstreetmap, openrailwaymap, alexander matheisen, rurseekatze, openlayers, osm, matheisen, orm, eisenbahnkarte, bahnkarte, railmap, railway, railways, eisenbahn, streckenkarte" />
		<meta name="robots" content="index,follow" />

		<link rel="alternate" type="application/rss+xml" title="OpenRailwayMap Deutsch" href="https://blog.openrailwaymap.org/de.rss" hreflang="de" />
		<link rel="alternate" type="application/rss+xml" title="OpenRailwayMap English" href="https://blog.openrailwaymap.org/en.rss" hreflang="en" />

		<link rel="search" type="application/opensearchdescription+xml" href="opensearch.xml" title="OpenRailwayMap" />

		<link rel="shortcut icon" href="img/openrailwaymap-16.png" type="image/png" />
		<link rel="icon" href="img/openrailwaymap-16.png" type="image/png" />

		<meta http-equiv="content-script-type" content="text/javascript" />
		<meta http-equiv="content-style-type" content="text/css" />

		<link rel="stylesheet" type="text/css" href="css/map.css" />
		<link rel="stylesheet" type="text/css" href="css/leaflet.css" />

		<script type="text/javascript" src="js/leaflet.js"></script>
		<link rel="stylesheet" href="css/Leaflet.EditInOSM.css" />
		<script src="js/Leaflet.EditInOSM.js"></script>
		<script type="text/javascript" src="js/L.TileLayer.Grayscale.js"></script>
		<script type="text/javascript">
var params={
urlbase : 'https://www.openrailwaymap.org//',
id : null,
type : null,
lat : null,
lon : null,
zoom : null,
lang : null,
offset : null,
searchquery : '',
ref : null,
name : null,
line : null,
operator : null,
mobile : null,
style : null,
availableTranslations : {"ca":["ca_ES","Catal\u00e0"],"cs":["cs_CZ","\u010cesky"],"da":["da_DK","Dansk"],"de":["de_DE","Deutsch"],"el":["el_GR","\u0395\u03bb\u03bb\u03b7\u03bd\u03b9\u03ba\u03ac"],"en":["en_GB","English"],"es":["es_ES","Espa\u00f1ol"],"fi":["fi_FI","Suomi"],"fr":["fr_FR","Fran\u00e7ais"],"hu":["hu_HU","Magyar"],"ja":["ja_JP","\u65e5\u672c\u8a9e"],"lt":["lt_LT","Lietuvi\u0173"],"nl":["nl_NL","Nederlands"],"nqo":["nqo_GN","\u07d2\u07de\u07cf"],"pl":["pl_PL","Polski"],"pt":["pt_PT","Portugu\u00eas"],"ru":["ru_RU","\u0420\u0443\u0441\u0441\u043a\u0438\u0439"],"sl":["sl_SI","Sloven\u0161\u010dina"],"sv":["sv_SE","Svenska"],"tr":["tr_TR","T\u00fcrk\u00e7e"],"uk":["uk_UA","\u0423\u043a\u0440\u0430\u0457\u043d\u0441\u044c\u043a\u0430"],"vi":["vi_VN","Ti\u1ebfng Vi\u1ec7t"],"zh_CN":["zh_CN","\u7b80\u4f53\u4e2d\u6587"],"zh_TW":["zh_TW","\u6b63\u9ad4\u4e2d\u6587"]}
};
</script>
		<script type="text/javascript" src="js/search.js"></script>
		<script type="text/javascript" src="js/startposition.js"></script>
		<script type="text/javascript" src="js/timestamp.js"></script>
		<script type="text/javascript" src="js/functions.js"></script>
		<script type="text/javascript" src="js/bitmap-map.js"></script>
		<!-- redirect to mobile version if necessary -->
		<script type="text/javascript">
			mobileRedirection();
		</script>

		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-title" content="OpenRailwayMap">
		<link rel="manifest" href="webapp-manifest.json">
		<meta name="theme-color" content="#4e9a06">

		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@openrailwaymap" />
		<meta name="twitter:title" content="OpenRailwayMap" />
		<meta name="twitter:description" content="OpenRailwayMap - An OpenStreetMap-based project for creating a map of the world&amp;#39;s railway infrastructure." />
		<meta name="twitter:url" content="https://www.openrailwaymap.org/">
		<meta name="twitter:image" content="https://www.openrailwaymap.org/img/openrailwaymap-310.png" />
	</head>
	<body onload="createMap(false);">
		<div id="moreInfo" class="moreInfoFalse"></div>
		<div id="sideBar" class="sideBar">
			<b id="header"><a href="index.php">OpenRailwayMap</a></b>
			<form id="langSelection">
				<select id="langSelector" size="1" onChange="changeLanguage(gEBI('langSelector').options[gEBI('langSelector').selectedIndex].value)">
					<option value="ca">Català</option>
<option value="cs">Česky</option>
<option value="da">Dansk</option>
<option value="de">Deutsch</option>
<option value="el">Ελληνικά</option>
<option value="en" selected>English</option>
<option value="es">Español</option>
<option value="fi">Suomi</option>
<option value="fr">Français</option>
<option value="hu">Magyar</option>
<option value="ja">日本語</option>
<option value="lt">Lietuvių</option>
<option value="nl">Nederlands</option>
<option value="nqo">ߒߞߏ</option>
<option value="pl">Polski</option>
<option value="pt">Português</option>
<option value="ru">Русский</option>
<option value="sl">Slovenščina</option>
<option value="sv">Svenska</option>
<option value="tr">Türkçe</option>
<option value="uk">Українська</option>
<option value="vi">Tiếng Việt</option>
<option value="zh_CN">简体中文</option>
<option value="zh_TW">正體中文</option>
				</select>
			</form>
			<br />
			<p id="info"></p>
			<div id="linkBar">
				<a class="links" id="infoButton" href="https://wiki.openstreetmap.org/wiki/OpenRailwayMap" target="_blank">More Info</a>&nbsp;•
				<a class="links" id="infoButton" href="https://blog.openrailwaymap.org/" target="_blank">Blog</a>&nbsp;•
				<a class="links" id="paypalButton" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=9KCKT39N7AGL8">Donate</a>&nbsp;•
				<a class="links" id="imprintButton" href="/imprint">Imprint &amp; Privacy Policy</a>&nbsp;•
				<a class="links" id="permalinkButton" href="">Permalink</a>&nbsp;•
				<a class="links" id="contactButton" href="#">Email</a>&nbsp;•
				<a class="links" id="twitterButton" href="https://twitter.com/openrailwaymap">Twitter</a>&nbsp;•
				<script language="javascript">
					var usr = "info";
					var dom = "openrailwaymap";
					var tld = "org";
					gEBI("contactButton").href="mailto:"+usr+"@"+dom+"."+tld;
				</script>
			</div>
			<input type="text" id="searchBox" size="20" />
			<div id="clearButton" onclick="Search.clear();">
				<b>&#10060;</b>
			</div>
			<div id="searchButton" onclick="Search.request();">
				<b>&#8629;</b>
			</div>
			<br />
			<div id="searchBar" class="infoBarOut"></div>
			<div id="detailsBar" class="infoBarOut"></div>
			<div id="styleSelectionBar"></div>
			<div id="legendBar">
				<b>Legend:</b>
				<iframe id="legend" scrolling="no" onload="setIframeHeight(this.id)" src=""></iframe>
			</div>
			<iframe id="josmFrame" src="about:blank"></iframe>
		</div>
		<div id="locateButton"></div>
		<div id="mapFrame">
			<noscript>
				<p><b>Javascript is not activated</b><br />Javascript is needed to show the map and run this website. Please turn on Javascript in your browser settings.</p>
			</noscript>
		</div>
	</body>
</html>
