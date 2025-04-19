<?php
// Init hooks and activation
register_activation_hook(__FILE__, function () {
    global $wpdb;
    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    $charset = $wpdb->get_charset_collate();

    dbDelta("CREATE TABLE {$wpdb->prefix}wpb_domains (
        id BIGINT AUTO_INCREMENT PRIMARY KEY,
        site_id BIGINT, domain VARCHAR(255), is_primary TINYINT,
        cf_status VARCHAR(20), ssl_status VARCHAR(20),
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    ) $charset;");

    dbDelta("CREATE TABLE {$wpdb->prefix}wpb_backups (
        id BIGINT AUTO_INCREMENT PRIMARY KEY,
        site_id BIGINT, backup_type VARCHAR(20),
        status VARCHAR(20), storage VARCHAR(20),
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    ) $charset;");
});
