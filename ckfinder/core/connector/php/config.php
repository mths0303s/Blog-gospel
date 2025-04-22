<?php
$config['authentication'] = function () {
    return true;
};

function resolveUrl($path) {
    return __DIR__ . '/../../../../uploads';
}

$baseUrl = '/uploads/';
$baseDir = resolveUrl($baseUrl);

$config['licenseName'] = '';
$config['licenseKey'] = '';

$config['privateDir'] = [
    'backend' => 'default',
    'tags'   => '.ckfinder/tags',
    'logs'   => '.ckfinder/logs',
    'cache'  => '.ckfinder/cache',
    'thumbs' => '.ckfinder/cache/thumbs',
];

$config['images'] = ['maxWidth' => 1600, 'maxHeight' => 1200, 'quality' => 80];

$config['backends'][] = [
    'name'         => 'default',
    'adapter'      => 'local',
    'baseUrl'      => $baseUrl,
    'root'         => $baseDir,
    'chmodFiles'   => 0777,
    'chmodFolders' => 0755,
    'filesystemEncoding' => 'UTF-8',
];

$config['resourceTypes'] = [
    [
        'name' => 'Files',
        'directory' => '/',
        'maxSize' => 0,
        'allowedExtensions' => '7z,aiff,asf,avi,bmp,doc,docx,gif,jpeg,jpg,mid,mov,mp3,mp4,pdf,png,ppt,pptx,rar,svg,swf,tif,tiff,txt,wav,wma,wmv,xls,xlsx,zip',
        'deniedExtensions' => '',
        'backend' => 'default'
    ],
    [
        'name' => 'Images',
        'directory' => 'images',
        'maxSize' => 0,
        'allowedExtensions' => 'bmp,gif,jpeg,jpg,png,svg',
        'deniedExtensions' => '',
        'backend' => 'default'
    ]
];
