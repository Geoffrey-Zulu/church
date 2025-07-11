<?php

return [

    'title' => 'Church Sign in',

    'heading' => 'Church Sign in',

    'buttons' => [

        'submit' => [
            'label' => 'Sign in',
        ],

    ],

    'fields' => [

        'email' => [
            'label' => 'Email address',
        ],

        'password' => [
            'label' => 'Password',
        ],

        'remember' => [
            'label' => 'Remember me',
        ],

    ],

    'messages' => [
        'failed' => 'These credentials do not match our records.',
        'throttled' => 'Too many login attempts. Please try again in :seconds seconds.',
    ],

];
