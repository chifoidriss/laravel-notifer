<?php

use Chifoidriss\Notifer\LaravelNotifer;

if (! function_exists('notifer')) {
    function notifer(string $message = null, string $title = null): LaravelNotifer
    {
        $notifer = app('notifer');

        if (! is_null($message)) {
            return $notifer->success($message, $title);
        }

        return $notifer;
    }
}

if (! function_exists('connectifer')) {
    function connectifer(string $type, string $title, string $message): LaravelNotifer
    {
        return app('notifer')->connect($type, $title, $message);
    }
}

if (! function_exists('drakifer')) {
    function drakifer(string $type): LaravelNotifer
    {
        return app('notifer')->drake($type);
    }
}

if (! function_exists('smilifer')) {
    function smilifer(string $type, string $message): LaravelNotifer
    {
        return app('notifer')->smiley($type, $message);
    }
}
if (! function_exists('emotifer')) {
    function emotifer(string $type, string $message): LaravelNotifer
    {
        return app('notifer')->emotifer($type, $message);
    }
}

if (! function_exists('notiferJs')) {
    /**
     * @return string
     */
    function notiferJs(): string
    {
        return '<script type="text/javascript" src="'.asset('vendor/chifoidriss/laravel-notifer/js/notifer.js').'"></script>';
    }
}

if (! function_exists('notiferCss')) {
    /**
     * @return string
     */
    function notiferCss(): string
    {
        return '<link rel="stylesheet" type="text/css" href="'.asset('vendor/chifoidriss/laravel-notifer/css/notifer.css').'"/>';
    }
}

function notiferIcon(string $type) {
    if ($type == 'success') {
        return 'check';
    } elseif($type == 'warning') {
        return 'exclamation-triangle';
    } elseif($type == 'info') {
        return 'info';
    } elseif($type == 'error') {
        return 'times';
    }
}
