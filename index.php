<?php
/**
 * @copyright	Copyright (C) 2013 All rights reserved.
 * @license		GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		$headlink = $this->getHeadData();
		unset($headlink['scripts']['/media/system/js/caption.js']);
		unset($headlink['scripts']['/media/jui/js/jquery-noconflict.js']);
		unset($headlink['scripts']['/media/jui/js/jquery-migrate.min.js']);
		$this->setHeadData($headlink);
	?>
	<!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
	<jdoc:include type="head" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- The following line loads the template CSS file located in the template folder. -->
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<header>
		<a class="logo" href="<?php echo $this->baseurl; ?>"></a>
		<jdoc:include type="modules" name="header" style="none" />
	</header>

	<section class="main">
		<jdoc:include type="message" />
		<jdoc:include type="component" />
	</section>

	<footer>
		<jdoc:include type="modules" name="footer" style="none" />
	</footer>
	
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/app.js"></script>
</body>

</html>