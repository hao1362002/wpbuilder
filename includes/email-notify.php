<?php
function wpb_send_email($to, $subject, $body) {
    wp_mail($to, $subject, $body);
}