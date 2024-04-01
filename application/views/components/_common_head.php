<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="author" content="Vecuro">
<!--<meta name="description" content="<?php //if ($page['description'] !== NULL && $page['description'] !== "" ) {echo $page['description'];} else {echo "StemRx Hospitals";}?>">-->
<meta name="description" content="<?= (array_key_exists('description', $page))?$page['description'] : "" ?>">
<meta name="keywords" content="StemRx Hospitals - New Layout">
<meta name="robots" content="INDEX,FOLLOW">

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!--==============================
	Google Web Fonts
	============================== -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Quicksand:wght@400;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">


<!-- Favicons - Place favicon.ico in the root directory -->
<link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?= base_url() ?>assets/img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/img/favicon-16x16.png">
<link rel="manifest" href="<?= base_url() ?>assets/img/site.webmanifest">
<!--==============================
	All CSS File
	============================== -->
<!-- Bootstrap -->
<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="<?= base_url() ?>assets/css/app.min.css"> -->
<!-- Fontawesome Icon -->
<link rel="stylesheet" href="<?= base_url() ?>assets/css/fontawesome.min.css">
<!-- Flag Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/7.2.0/css/flag-icons.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Layerslider -->
<link rel="stylesheet" href="<?= base_url() ?>assets/css/layerslider.min.css">
<!-- jQuery DatePicker -->
<link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery.datetimepicker.min.css">
<!-- Magnific Popup -->
<link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.min.css">
<!-- Slick Slider -->
<link rel="stylesheet" href="<?= base_url() ?>assets/css/slick.min.css">
<!-- Animate CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.min.css">
<!-- Theme Custom CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/css/theme.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.min.css">

<!-- Jquery -->
<script src="<?= base_url() ?>assets/js/vendor/jquery-3.6.0.min.js"></script>

<!-- Jquery Validation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/additional-methods.min.js" integrity="sha512-TiQST7x/0aMjgVTcep29gi+q5Lk5gVTUPE9XgN0g96rwtjEjLpod4mlBRKWHeBcvGBAEvJBmfDqh2hfMMmg+5A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NJR76SCZ');</script>
<!-- End Google Tag Manager -->

 <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
<title> 
	<?php if ($page['title'] !== NULL && $page['title'] !== "" ) {
		echo $page['title'];
	} else {
		echo "StemRx Hospital and Research Centre";
	}?>
</title>
