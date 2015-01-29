<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title('&bull;', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

    <link href="<?php print PUBLIC_DIR . 'icons/favicon.ico'; ?>" rel="shortcut icon" type="image/x-icon" />
    <link href="<?php print PUBLIC_DIR . 'icons/apple-touch-icon-precomposed.png'; ?>" rel="apple-touch-icon-precomposed" />
    <link href="<?php print PUBLIC_DIR . 'icons/apple-touch-icon.png'; ?>" rel="apple-touch-icon" />
    <link href="<?php print PUBLIC_DIR . 'icons/apple-touch-icon-76x76.png'; ?>" rel="apple-touch-icon" sizes="76x76" />
    <link href="<?php print PUBLIC_DIR . 'icons/apple-touch-icon-120x120.png'; ?>" rel="apple-touch-icon" sizes="120x120" />
    <link href="<?php print PUBLIC_DIR . 'icons/apple-touch-icon-152x152.png'; ?>" rel="apple-touch-icon" sizes="152x152" />
    <link href="<?php echo stylesheet('main'); ?>" rel="stylesheet" />

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>
<body>
