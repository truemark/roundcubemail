<?php
/**
 * Created by IntelliJ IDEA.
 * User: Dilip S Sisodia
 * Date: 30/12/16
 * Time: 12:01 AM
 */


// Password Plugin options
// -----------------------
// Determine whether current password is required to change password.
// Default: false.
$config['password_confirm_current'] = true;

// Require the new password to be a certain length.
// set to blank to allow passwords of any length
$config['password_minimum_length'] = 0;

// Require the new password to contain a letter and punctuation character
// Change to false to remove this check.
$config['password_require_nonalpha'] = false;