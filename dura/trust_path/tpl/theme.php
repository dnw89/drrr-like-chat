<!DOCTYPE html>
<html data-theme="a" lang="<?php e(Dura::user()->getLanguage() ? Dura::user()->getLanguage() : DURA_LANGUAGE); ?>">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<link rel="canonical" href="<?php e($this->get('tpl.header.canonical', DURA_URL)); ?>"/>
	<meta http-equiv="Content-Language" content="<?php e(Dura::user()->getLanguage() ? Dura::user()->getLanguage() : DURA_LANGUAGE); ?>" />

	<title><?php e($this->get('html.title', t(DURA_TITLE).' | '.t(DURA_SUBTITLE))) ?></title>

	<link rel="stylesheet" href="<?php e(DURA_URL) ?>/_temp/jquery-mobile/themes/dura.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile.structure-1.1.0.min.css" />
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<script type="text/javascript">google.load("jquery", "1");</script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>

	<script type="text/javascript" src="<?php e(DURA_URL) ?>/js/translator.js"></script>
<script type="text/javascript" src="<?php e(DURA_URL) ?>/js/language/<?php e(Dura::$language) ?>.js"></script>

	<?php e($this->slot('theme.header')) ?>

	<?php e($this->slot('html.header')) ?>

</head>

<body data-theme="a">

	<?php e($this->content) ?>

</body>

	<?php e($this->slot('html.footer')) ?>

</html>