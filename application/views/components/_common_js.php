<!--==============================
        All Js File
    ============================== -->

<!-- Slick Slider -->
<script src="<?= base_url() ?>assets/js/slick.min.js"></script>
<!-- <script src="<?= base_url() ?>assets/js/app.min.js"></script> -->
<!-- Layerslider -->
<script src="<?= base_url() ?>assets/js/layerslider.utils.js"></script>
<script src="<?= base_url() ?>assets/js/layerslider.transitions.js"></script>
<script src="<?= base_url() ?>assets/js/layerslider.kreaturamedia.jquery.js"></script>
<!-- Bootstrap -->
<!-- <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script> -->
<!-- jQuery Datepicker -->
<script src="<?= base_url() ?>assets/js/jquery.datetimepicker.min.js"></script>
<!-- Magnific Popup -->
<script src="<?= base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
<!-- Isotope Filter -->
<script src="<?= base_url() ?>assets/js/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url() ?>assets/js/isotope.pkgd.min.js"></script>
<!-- Parallax Scroll -->
<script src="<?= base_url() ?>assets/js/universal-parallax.min.js"></script>
<!-- WOW Animation -->
<script src="<?= base_url() ?>assets/js/wow.min.js"></script>
<!-- Custom Carousel -->
<script src="<?= base_url() ?>assets/js/vscustom-carousel.min.js"></script>
<!-- Form Js -->
<script src="<?= base_url() ?>assets/js/ajax-mail.js"></script>
<!-- Main Js File -->
<script src="<?= base_url() ?>assets/js/main.js"></script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
	function googleTranslateElementInit() {
		new google.translate.TranslateElement({
			pageLanguage: 'en',
			includedLanguages: 'ar,fr,en'
		}, 'google_translate_element');
	}

	$('.lang-select').on("click", () => {
		var theLang = $(this).attr('data-lang');
		$('.goog-te-combo').val(theLang);

		//alert($(this).attr('href'));
		window.location = $(this).attr('href');
		// location.reload();

	});
</script>
