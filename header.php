<!DOCTYPE HTML>
<html >
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" />
        <meta name="description" content=" " />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Title -->
        <title>
            <?php $this->options->title(); ?>
        </title>

        <link rel="icon" type="image/ico" href="<?php $this->options->favicon() ?>">

        <!-- Header -->
        <?php $this->header(); ?>

        <!-- Typecho Theme Void Style -->
        <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/bootstrap.min.css'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/animate.min.css'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/fontello.css'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/normalize.css'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/function.php'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/void.css'); ?>" />

        <!-- JQuery -->
        <!-- <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script> -->
        <script src="<?php $this->options->themeUrl('js/jquery-3.4.1.min.js'); ?>"></script>
    </head>
    <body>