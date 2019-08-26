<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: captcha_check.php
| Author: PHP-Fusion Development Team
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
defined('IN_FUSION') || exit;

$captcha = new Lollipop(post('form_id'));

$_CAPTCHA_IS_VALID = $captcha->validateCaptcha();

if ($_CAPTCHA_IS_VALID !== NULL) {
    if ($_CAPTCHA_IS_VALID === TRUE) {
        addNotice('success', 'Captcha is validated');
    } else {
        addNotice('danger', 'Captcha is invalid');
    }
}
