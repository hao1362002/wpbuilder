<?php
// Hook with WP Ultimo to handle domain mapping
add_action('wu_after_custom_domain_mapped', function($site_id, $domain) {
    wpb_cf_add_record($domain);       // Add CNAME to Cloudflare
    wpb_issue_ssl($domain);           // Issue SSL certificate
    // Log domain to database
    global $wpdb;
    $wpdb->insert("{$wpdb->prefix}wpb_domains", [
        'site_id' => $site_id,
        'domain' => $domain,
        'is_primary' => 1,
        'cf_status' => 'pending',
        'ssl_status' => 'pending',
        'created_at' => current_time('mysql')
    ]);
}, 10, 2);
