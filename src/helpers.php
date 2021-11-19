<?php

if (!function_exists('untrackable')) {
    function untrackable()
    {
        return (bool) $_SERVER['HTTP_DNT'] ?? true;
    }
}

if (!function_exists('trackable')) {
    function trackable()
    {
        return !untrackable();
    }
}
