<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laptop Anh Tuấn</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE . 'templates/default'; ?>/css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE . 'templates/default'; ?>/css/bootstrap-dropdownhover.min.css">
        <script type="text/javascript" src="<?php echo URL_BASE . 'templates/default'; ?>/js/bootstrap-dropdownhover.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="<?php echo URL_BASE . 'templates/default'; ?>/sss/sss.min.js"></script>
        <link rel="stylesheet" href="<?php echo URL_BASE . 'templates/default'; ?>/sss/sss.css" type="text/css" media="all">
        <script>jQuery(function ($) {
                        $('.slider').sss();
                    });</script>
        <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE . 'templates/default'; ?>/css/style.css">
    </head>
    <body>
        <?php
        require "templates/" . DEFAULT_TEMPLATE . "/menu_top.php";
        require "templates/" . DEFAULT_TEMPLATE . "/header.php";
        require "templates/" . DEFAULT_TEMPLATE . "/second_menu.php";
        require "templates/" . DEFAULT_TEMPLATE . "/slider.php";
        require "templates/" . DEFAULT_TEMPLATE . "/main_content.php";
        require "templates/" . DEFAULT_TEMPLATE . "/footer.php";
        ?>
    </body>
</html>
