<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Authentication Guard
    |--------------------------------------------------------------------------
    |
    | This option controls the authentication guard that will be utilized.
    | Laravel supports out-of-the-box "session" and "token" guards.
    |
    | Supported: "session", "token"
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Here you may define each authentication guard for your application.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

        // Add more guards if needed

    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],

        // Add more providers if needed

    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | Here you may set the options for resetting passwords including the view
    | that is your password reset e-mail. You may also set the name of the
    | table that maintains all of the reset tokens for your application.
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        // Add more password configurations if needed

    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Throttling
    |--------------------------------------------------------------------------
    |
    | Here, you can define the maximum number of attempts allowed before a
    | user is locked out of their account for a given number of minutes.
    |
    */

    'throttling' => [
        'enabled' => true,
        'decay_minutes' => 1,
        'max_attempts' => 5,
        'lockout_minutes' => 5,
    ],

    /*
    |--------------------------------------------------------------------------
    | Email Verification
    |--------------------------------------------------------------------------
    |
    | Here you can define settings related to email verification process.
    |
    */

    'verification' => [
        'enabled' => false,
    ],

];
