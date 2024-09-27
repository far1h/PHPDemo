<?php

function setActiveClass($pageName) {
    $current_page = basename(path: $_SERVER['PHP_SELF']);
    return $current_page === $pageName ? "active" : "";
}