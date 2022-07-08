<?php


/** ------------------- ------------------- -------------------
* HELPER - URLS
--------- --------- --------- */

use Source\Core\Session;

/** -------------------
* PROJECT URL
* Defines which url the project should use, switching between local/dev or production
* @param string $path
* @return string
--------- */
function url(string $path = null): string
{
    if (strpos($_SERVER['HTTP_HOST'], "localhost")) {
        if ($path) {
            return CONF_URL_TEST . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
        }
        return CONF_URL_TEST;
    }
    if ($path) {
        return CONF_URL_BASE . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }
    return CONF_URL_BASE;
}

/** -------------------
* REDIRECT URL
* Redirect url to given destination
* Disregard router component urls to avoid redirect loop
* @param string $url
* @return void
--------- */
function redirect(string $url): void
{
    header("HTTP/1.1 302 Redirect");
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        header("location: {$url}");
        exit;
    }

    if (filter_input(INPUT_GET, "route", FILTER_DEFAULT) != $url) {
        $location = url($url);
        header("location: {$location}");
        exit;
    }
}


/** ------------------- ------------------- -------------------
* HELPER - THEMES
--------- --------- --------- */


/** -------------------
* THEMES
* Creates the direct route to the used theme files
* @param string|null $path
* @param string $theme
* @return string
--------- */
function theme(string $path = null, string $theme = CONF_VIEW_THEME): string
{
    if (strpos($_SERVER['HTTP_HOST'], "localhost")) {
        if ($path) {
            return CONF_URL_TEST . "/themes/{$theme}/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);   
        }
        return CONF_URL_TEST . "/themes/{$theme}/";
    }
    if ($path) {
        return CONF_URL_BASE . "/themes/{$theme}/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);   
    }
    return CONF_URL_BASE . "/themes/{$theme}/";
}

/** -------------------
* IMAGES
* Create direct route to image files, process size and cache file with coffeecode/cropper component
* @package coffeecode/cropper
* @param string $image
* @param int $width
* @param int|null $height
* @return string
--------- */
function image(?string $image, int $width, int $height): ?string
{
    if ($image) {
        return "";
    }
    return null;
}


/** ------------------- ------------------- -------------------
* HELPER - REQUESTS
--------- --------- --------- */

/** -------------------
* Creates a field to help protect from attacks [Cross-site Request Forgery].
* @return string
--------- */
function csrf_input(): string
{
    session()->csrf();
    return "<input type='hidden' name='csrf' value='".(session()->csrf_token ?? "")."'></input>";    
}

/** -------------------
* Checks the CSRF code if it is valid or not.
* @return string
--------- */
function csrf_verify($request): bool
{
    if (empty(session()->csrf_token) || empty($request['csrf_token']) || $request['csrf_token'] != session()->csrf_token) {
        return false;
    }
    return true;
}

/** -------------------
* Get and Check the flash messages from Sessions.
* @return string
--------- */
function flash(): ?string
{
    $session = new \Source\Core\Session();
    if ($flash = $session->flash()) {
        echo $flash;
    }
    return null;
}

/** ------------------- ------------------- -------------------
* HELPER - CORES
--------- --------- --------- */

/** -------------------
* Retrieves an instance of the Session class.
* @return Source\Core\Session
--------- */
function session(): Source\Core\Session
{
    return new Source\Core\Session();
}