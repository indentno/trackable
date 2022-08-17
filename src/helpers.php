<?php

if (!function_exists('untrackable')) {
    function untrackable()
    {
        if (isset($_SERVER['HTTP_DNT'])) {
            return (bool) $_SERVER['HTTP_DNT'] ?? true;
        }

        return false;
    }
}

if (!function_exists('trackable')) {
    function trackable()
    {
        return !untrackable();
    }
}
