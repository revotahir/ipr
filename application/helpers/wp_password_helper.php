<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * Detects the hash type: phpass or bcrypt
 */
function detect_hash_type($hash) {
    if (strpos($hash, '$P$') === 0) return 'phpass';
    if (strpos($hash, '$wp$2y$') === 0 || strpos($hash, '$2y$') === 0) return 'bcrypt';
    return 'unknown';
}

/**
 * Verifies a WordPress user password with support for both bcrypt and phpass
 */
function verify_wp_password($plain_password, $stored_hash) {
    $type = detect_hash_type($stored_hash);
// var_dump(password_hash($plain_password, PASSWORD_DEFAULT));die;
    if ($type === 'bcrypt') {
        // die('asdad');
        return '$wp$' .password_verify($plain_password, $stored_hash);
    }

    if ($type === 'phpass') {
        // Include the WordPress password hashing class
require_once(APPPATH . 'helpers/class-phpass.php');

        $wp_hasher = new PasswordHash(8, true); // cost 8, portable hashes true
        return $wp_hasher->CheckPassword($plain_password, $stored_hash);
    }

    return false; // unknown hash type
}
