<?php

namespace app;

function registerAlias(array $aliases) {
    $result = ['@app' => dirname(__DIR__) . '/app'];
    foreach ($aliases as $alias) {
        $result['@' . strtolower($alias)] = dirname(__DIR__) . '/' . strtolower($alias);
    }
    return $result;
}

function registerModule(array $modules) {
    $result = [];
    foreach ($modules as $className) {
        $result[strtolower($className)] = [
            'class' => strtolower($className) . '\\' . ucfirst($className) . 'Module',
        ];
    }
    return $result;
}

function registerApps(array $config) {
    if (!empty($config['apps'])) {
        $aliases = registerAlias($config['apps']);
        $modules = registerModule($config['apps']);
        $config['aliases'] = array_merge($aliases, $config['aliases'] ?: []);
        $config['modules'] = array_merge($modules, $config['modules']);
        unset($config['apps']);
    }
    return $config;
}

function d($msg) {
    echo '<pre>';
    var_export($msg);
    echo '</pre>';
}

function dd($msg) {
    d($msg);
    die();
}