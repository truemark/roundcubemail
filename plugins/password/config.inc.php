<?php
/**
 * Created by IntelliJ IDEA.
 * User: Dilip S Sisodia
 * Date: 30/12/16
 * Time: 12:01 AM
 */


// Password Plugin options
// -----------------------
// A driver to use for password change. Default: "sql".
// See README file for list of supported driver names.
$config['password_driver'] = 'sql';

// Determine whether current password is required to change password.
// Default: false.
$config['password_confirm_current'] = true;

// Require the new password to be a certain length.
// set to blank to allow passwords of any length
$config['password_minimum_length'] = 0;

// Require the new password to contain a letter and punctuation character
// Change to false to remove this check.
$config['password_require_nonalpha'] = false;

// Example: '(&(objectClass=posixAccount)(uid=%login))'
$config['password_ldap_ppolicy_search_filter'] = '(uid=%login)';

$config['password_reset_url'] = "/mailbox/reset_password";