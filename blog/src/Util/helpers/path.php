<?php

if (!function_exists('lumenx5version_root_path')) {
  function lumenx5version_root_path($path = '') {
    return realpath(implode(DIRECTORY_SEPARATOR, [
    	__DIR__, '..', '..', '..', $path
    ]));
  }
}

if (!function_exists('lumenx5version_src_path')) {
  function lumenx5version_src_path($path = '') {
    return realpath(implode(DIRECTORY_SEPARATOR, [
    	__DIR__, '..', '..', $path
    ]));
  }
}

if (!function_exists('lumenx5version_base_path')) {
  function lumenx5version_base_path($path = '') {
    return lumenx5version_root_path(implode(DIRECTORY_SEPARATOR, [
    	'lumen', $path
    ]));
  }
}