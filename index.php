<?php


$keywords = array(
    'Android', 'AvantGo', 'BlackBerry', 'DoCoMo', 'Fennec', 'iPod', 'iPhone', 'iPad',
    'J2ME', 'MIDP', 'NetFront', 'Nokia', 'Opera Mini', 'Opera Mobi', 'PalmOS', 'PalmSource',
    'portalmmm', 'Plucker', 'ReqwirelessWeb', 'SonyEricsson', 'Symbian', 'UP\\.Browser',
    'webOS', 'Windows CE', 'Windows Phone OS', 'Xiino'
);

$userAgent = htmlspecialchars($_SERVER['HTTP_USER_AGENT']);
$isMobile = false;

foreach ($keywords as $keyword) {
    if (preg_match('/' . $keyword . '/i', $userAgent) !== false) {
        $isMobile = true;
        break;
    }
}

if ($isMobile) {
    include 'mobile.php';
} else {
    include 'desktop.php';
}
