<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?php if(isset($mode)) echo $mode . ' - '; ?>ВЗО UX Framework</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <style>
        body{padding: 100px 0 !important;}
    </style>
</head>
<body>
<?php import('_framework/sidebar'); ?>
<div class="container">
    <p><?php if(isset($mode)) echo 'mode = ' ?>
    <select name="modeSelect" id="modeSelect">
        <?php echo generateSelectOptions(); ?>
    </select>
    </p>
<?php
// данные модули грузим всегда, потому что они глобальные
import('fonts/futura-pt');
import('fonts/proxima-nova');
import('_framework/titles');
import('_framework/grid');
import('_framework/prism');
import('_framework/buttons');
import('_framework/tables');
import('general');


if (isset($_GET['module'])) {
    import($_GET['module']);
}
?>
</div>
<script>
    let modeSelect = document.getElementById('modeSelect');
    modeSelect.addEventListener("change",()  => {
        location.href = "<?php echo getClearModuleUrl() ?>" + '&mode=' + modeSelect.value;
    });
</script>
</body>
</html>

