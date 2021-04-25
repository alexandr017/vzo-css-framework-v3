<?php

/**
 * @param string $path
 */
function import($path)
{
    global $mode;
    if ($mode == 'amp') {
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/modules/'  . $path . '/amp.php')) {
            include $_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/amp.php';
        } elseif (file_exists($_SERVER['DOCUMENT_ROOT'] . '/modules/'  . $path . '/mob.php')) {
            include $_SERVER['DOCUMENT_ROOT'] . '/modules/'  .  $path . '/mob.php';
        } elseif (file_exists($_SERVER['DOCUMENT_ROOT'] . '/modules/'  . $path . '/pc.php')) {
            include $_SERVER['DOCUMENT_ROOT'] . '/modules/'  .  $path . '/pc.php';
        }
    } elseif ($mode == 'mob') {
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/mob.php')) {
            include $_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/mob.php';
        } elseif (file_exists($_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/pc.php')) {
            include $_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/pc.php';
        }
    } elseif(file_exists($_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/pc.php')) {
        include $_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/pc.php';
    }
}
