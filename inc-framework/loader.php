<?php

/**
 * @param string $path
 */
function import($path)
{
    global $mode;

    $html = '';
    $css = '';

    if ($mode == 'amp') {
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/modules/'  . $path . '/amp.html')) {
            $html = loader($_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/amp.html');
            $css = loader($_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/amp.css');
        } elseif (file_exists($_SERVER['DOCUMENT_ROOT'] . '/modules/'  . $path . '/mob.html')) {
            $html = loader($_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/mob.html');
            $css = loader($_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/mob.css');
        } elseif (file_exists($_SERVER['DOCUMENT_ROOT'] . '/modules/'  . $path . '/pc.html')) {
            $html = loader($_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/pc.html');
            $css = loader($_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/pc.css');
        }
    } elseif ($mode == 'mob') {
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/mob.html')) {
            $html = loader($_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/mob.html');
            $css = loader($_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/mob.css');
        } elseif (file_exists($_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/pc.html')) {
            $html = loader($_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/pc.html');
            $css = loader($_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/pc.css');
        }
    } elseif(file_exists($_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/pc.html')) {
        $html = loader($_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/pc.html');
        $css = loader($_SERVER['DOCUMENT_ROOT'] . '/modules/' . $path . '/pc.css');
    }

    echo $html;
    echo "<style>$css</style>";
}

/**
 * @param string $path
 * @return string $code
 */
function loader($path)
{
    $code = '';

    if (file_exists($path)) {
        $code = file_get_contents($path);
    }

    return $code;
}
