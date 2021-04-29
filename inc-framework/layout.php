<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?php if(isset($_GET['module'])) echo $_GET['module'] . ' - '; ?>ВЗО UX Framework</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <style>body{padding: 100px 0 !important;}</style>
    <link rel="stylesheet" href="<?='/modules/general/prism.css'?>">
</head>
<body>
<?php require_once 'inc-framework/sidebar.php'; ?>
<div class="container">
<?php
// данные модули грузим всегда, потому что они глобальные
import('fonts/futura-pt');
import('fonts/proxima-nova');
import('general');
if (isset($_GET['module'])) {
    import($_GET['module']);
}
?>
</div>
<script src="<?='/modules/general/prism.js'?>"></script>
</body>
</html>

