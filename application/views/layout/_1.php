<!doctype html>
<html class="no-js">


<head>
    <?php if (in_array($this->uri->segment(1), ["lp"])) : ?>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16555224766"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());

			gtag('config', 'AW-16555224766');
		</script>
	<?php endif ?>
	<?php if (in_array($this->uri->segment(1), ["thank-you"])) : ?>
		<!-- Event snippet for Lad Form Submission conversion page -->
		<script>
			gtag('event', 'conversion', {
				'send_to': 'AW-16555224766/EtWgCKONjK0ZEL7dktY9'
			});
		</script>
	<?php endif ?>
	
	
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "DiagnosticLab",
			"name": "Stemrx Hospital & Research Center",
			"alternateName": "Stemrx",
			"url": "https://stemrx.in/",
			"logo": "https://stemrx.in/assets/img/logo-1.png",
			"contactPoint": {
				"@type": "ContactPoint",
				"telephone": "997 997 6862",
				"contactType": "customer service",
				"contactOption": "TollFree",
				"areaServed": ["US", "CA", "GB", "AF", "AL", "AS", "AD", "DZ", "AQ", "AU", "AT", "BE", "BM", "IN", "IO", "ID"],
				"availableLanguage": ["en", "es", "fr"]
			},
			"sameAs": [
				"https://www.facebook.com/stemrxindia",
				"https://www.instagram.com/stemrxindia/",
				"https://www.youtube.com/@stemrxindia"
			]
		}
	</script>

	<?php if (in_array($this->uri->segment(1), ["contact-us"])) : ?>
		<script type="application/ld+json">
			{
				"@context": "https://schema.org",
				"@type": "CommunityHealth",
				"name": "Stemrx Hospital & Research Center",
				"image": "https://stemrx.in/assets/img/logo-1.png",
				"@id": "",
				"url": "https://stemrx.in/",
				"telephone": "997 997 6862",
				"priceRange": "$$$",
				"address": {
					"@type": "PostalAddress",
					"streetAddress": "R-831, Thane Belapur Road Navi Mumbai,",
					"addressLocality": "Navi Mumbai",
					"postalCode": "400708",
					"addressCountry": "IN"
				},
				"geo": {
					"@type": "GeoCoordinates",
					"latitude": 19.1840036,
					"longitude": 72.99368199999999
				},
				"openingHoursSpecification": {
					"@type": "OpeningHoursSpecification",
					"dayOfWeek": [
						"Monday",
						"Tuesday",
						"Wednesday",
						"Thursday",
						"Friday",
						"Saturday",
						"Sunday"
					],
					"opens": "00:00",
					"closes": "23:59"
				},
				"sameAs": [
					"https://www.facebook.com/stemrxindia",
					"https://www.youtube.com/@stemrxindia",
					"https://www.instagram.com/stemrxindia/"
				]
			}
		</script>
	<?php endif ?>

	<link rel="alternate" hreflang="x-default" href="<?= base_url() ?>">
	<link rel="alternate" hreflang="en-US" href="<?= base_url() ?>">
	<link rel="alternate" hreflang="en-SG" href="<?= base_url() ?>">
	<link rel="alternate" hreflang="en-CA" href="<?= base_url() ?>">
	<link rel="alternate" hreflang="en-AU" href="<?= base_url() ?>">
	<link rel="alternate" hreflang="en-DU" href="<?= base_url() ?>">
	<link rel="alternate" hreflang="en-IN" href="<?= base_url() ?>">
	<?php $this->load->view('components/_common_head'); ?>
	<?php $this->load->view('components/_other_head') ?>
	<script type="text/javascript" id="zsiqchat">
		var $zoho = $zoho || {};
		$zoho.salesiq = $zoho.salesiq || {
			widgetcode: "siq303bc68c20b36c93265daff79931fda8f105451fe3864a527c3c822c3da22982",
			values: {},
			ready: function() {}
		};
		var d = document;
		s = d.createElement("script");
		s.type = "text/javascript";
		s.id = "zsiqscript";
		s.defer = true;
		s.src = "https://salesiq.zohopublic.com/widget";
		t = d.getElementsByTagName("script")[0];
		t.parentNode.insertBefore(s, t);
	</script>
	
	
	<!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '970548084467424');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=970548084467424&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
</head>
<style>
	.testimonial-box .avater {
		display: grid;
		place-items: center;
	}
</style>

<?php $this->load->view('common/_booking_button_float') ?>

<body class="">

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJR76SCZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->


	<?php $this->load->view('common/_preloader') ?>
	<?php $this->load->view('common/_navbar_new') ?>
