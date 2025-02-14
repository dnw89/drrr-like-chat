<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!-- seo -->
<meta http-equiv="Content-Language" content="<?php echo Dura::user()->getLanguage(); ?>" />
<meta name="author" content="Bluelovers" />
<meta name="copyright" content="Bluelovers Net." />
<meta name="robots" content="INDEX,FOLLOW" />
<meta name="keywords" content="<?php e(t(DURA_TITLE)) ?>, <?php e(t(DURA_SUBTITLE)) ?>, Durarara, Chat, ?�ュ?�ラ?? ?�ャ?��?, ?�?�라??!, 채�?�? ?�天�? Ча?, как в, ?�頭騎士?��??? ?�田?��?, DOLLARS, 罪�?, ?��?, 賽�?, ?�中太�?, 巴�??? 墮落?�天�? bluelovers" />
<meta name="description" content="<?php e(t(DURA_TITLE)) ?> | <?php e(t(DURA_SUBTITLE)) ?>" />
<!-- seo - End -->
<meta http-equiv="imagetoolbar" content="no">
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<meta name="msapplication-tooltip" content="<?php e(t(DURA_TITLE)) ?> | <?php e(t(DURA_SUBTITLE)) ?>" />
<meta name="viewport" content="width = 620" />
<link rel="shortcut icon" href="<?php echo DURA_URL; ?>/favicon.ico" type="image/x-icon" />
<link rel="Bookmark" href="<?php echo DURA_URL; ?>/favicon.ico" />
<title><?php e(t(DURA_TITLE)) ?> | <?php e(t(DURA_SUBTITLE)) ?></title>
<link rel="apple-touch-icon-precomposed" href="<?php echo DURA_URL; ?>/images/apple-touch-icon-precomposed.png" />
<link href="<?php echo DURA_URL; ?>/static/style/style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript"><!--
google.load("language", "1");
google.load("jquery", "1");
google.load("jqueryui", "1");
duraUrl = "<?php e(DURA_URL) ?>";
GlobalMessageMaxLength = <?php e(DURA_MESSAGE_MAX_LENGTH) ?>;
useComet = <?php e(DURA_USE_COMET) ?>;
// bluelovers
user = {
	language : '<?php echo Dura::user()->getLanguage(); ?>',
};
// bluelovers
//-->
</script>
<script type="text/javascript" src="<?php e(DURA_URL) ?>/static/js/translator.js"></script>
<script type="text/javascript" src="<?php e(DURA_URL) ?>/static/js/language/<?php e(Dura::$language) ?>.js"></script>

<?php if ( Dura::$controller == 'room' && Dura::$action == 'default' ) : ?>
<!--script type="text/javascript" src="<?php e(DURA_URL) ?>/static/js/jquery.sound.js"></script-->
<script type="text/javascript" src="<?php e(DURA_URL) ?>/static/js/SoundManager2/script/soundmanager2-nodebug-jsmin.js"></script>

<script>
soundManager.url = '<?php e(DURA_URL) ?>/static/js/SoundManager2/swf/';
soundManager.onready(function() {
	messageSound = soundManager.createSound({
	  id: 'messageSound',
	  url: '<?php e(DURA_URL) ?>/static/js/sound.mp3',
	  volume: 100
	});
});
</script>

<script type="text/javascript" src="<?php e(DURA_URL) ?>/static/js/jquery.corner.js"></script>
<script type="text/javascript" src="<?php e(DURA_URL) ?>/static/js/jquery.chat.js"></script>
<?php endif ?>
<?php if ( file_exists(DURA_TEMPLATE_PATH.'/header.html') ) require(DURA_TEMPLATE_PATH.'/header.html'); ?>
</head>
<body>
<div id="body">
<?php e($content) ?>
</div>
</body>
</html>