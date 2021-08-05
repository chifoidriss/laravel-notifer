<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Notifer Theme
    |--------------------------------------------------------------------------
    |
    | You can change the theme of notifications by specifying the desired theme.
    | By default the theme white is activated, but you can change it by
    | specifying the dark mode. if null `white` theme is active. To change theme
    | update the global variable to `dark`
    |
    */

    'theme' => env('NOTIFER_THEME', null),

    /*
    |--------------------------------------------------------------------------
    | Demo URL
    |--------------------------------------------------------------------------
    |
    | if true you can access to the demo documentation of the notifer package
    | here: http://localhost:8000/notifer/demo, by default is true
    |
    */

    'demo' => true,

    /*
    |--------------------------------------------------------------------------
    | Animate Module (use animate.css)
    |--------------------------------------------------------------------------
    |
    | Use animate.css to animate the notice.
    |
    */

    'animate' => [
        'in_class'  => 'bounceInRight', // The class to use to animate the notice in.
        'out_class' => 'bounceOutRight', // The class to use to animate the notice out.
        'timeout'   => 8000, // Number of seconds before the notice disappears
    ],

    /*
    |--------------------------------------------------------------------------
    | Notifer Position
    |--------------------------------------------------------------------------
    |
    | The position string option is used to describe both vertical and horizontal alignment.
    | Element notifications and Global notifications can be vertically repositioned
    | to: "top", "middle" or "bottom" and horizontally repositioned to: "left", "center" or "right".
    | If we don't provide a position option the default alignments are "top right".
    | `Don't work on drakify notification`
    |
    | Available positions:
    | - "top-right"
    | - "top-left"
    | - "bottom-right"
    | - "bottom-left"
    | - "center-top"
    | - "center-bottom"
    |
    */

    'position' => 'top-right',

    /*
    |--------------------------------------------------------------------------
    | Preset Messages
    |--------------------------------------------------------------------------
    |
    | Define any preset messages here that can be reused.
    |
    */

    'preset-messages' => [
        // An example preset 'user updated' Connectify notification.
        'user-created' => [
            'message' => 'The user has been updated successfully.',
            'type'    => 'success',
            'model'   => 'connect',
            'title'   => 'User Created',
        ],
        'user-updated' => [
            'message' => 'The user has been updated successfully.',
            'type'    => 'success',
            'model'   => 'connect',
            'title'   => 'User Updated',
        ],
        'user-deleted' => [
            'message' => 'The user has been updated successfully.',
            'type'    => 'success',
            'model'   => 'connect',
            'title'   => 'User Deleted',
        ],
    ],

];
