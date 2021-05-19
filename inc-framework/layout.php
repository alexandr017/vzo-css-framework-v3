<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?php if(isset($_GET['module'])) echo $_GET['module'] . ' - '; ?>ВЗО UX Framework</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <style>
        <?php if($mode == 'mob'): ?>
        body{padding-top: 34px !important;}
        <?php else: ?>
        body{padding: 100px 0 !important;}
        <?php endif ?>
    </style>
    <link rel="stylesheet" href="<?='/modules/general/prism.css'?>">
</head>
<body>
<?php require_once 'inc-framework/sidebar.php'; ?>
<?php if($mode == 'pc' && $_SERVER['REQUEST_URI'] != '/?module=header'): ?>
<div class="container">
<?php endif ?>

<?php
// данные модули грузим всегда, потому что они глобальные
import('fonts/futura-pt');
import('fonts/proxima-nova');
import('general');
import('grid');
if (isset($_GET['module'])) {
    import($_GET['module']);
}
?>
<?php if($mode == 'pc'): ?>
</div>
<?php endif ?>
<script src="<?='/modules/general/prism.js'?>"></script>
</body>
</html>

