<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::welcome',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment/wizard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environmentWizard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment/saveWizard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environmentSaveWizard',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment/classic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environmentClassic',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment/saveClassic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environmentSaveClassic',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/requirements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::requirements',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::permissions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::database',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/final' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::final',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelUpdater::welcome',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update/overview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelUpdater::overview',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelUpdater::database',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update/final' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelUpdater::final',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/initialize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.initialize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/content' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.content',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/tree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.tree',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/select-disk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.select-disk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/paste' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.paste',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/rename' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.rename',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/download' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.download',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/thumbnails' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.thumbnails',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/preview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.preview',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/url' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.url',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/create-directory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.create-directory',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/create-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.create-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/update-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.update-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/stream-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.stream-file',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/zip' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.zip',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/unzip' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.unzip',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/ckeditor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.ckeditor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/tinymce' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.tinymce',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/tinymce5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.tinymce5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/summernote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.summernote',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file-manager/fm-button' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fm.fm-button',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X1MHwQemDN9b5qa8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/broadcasting/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hrerpcSEvuKuCOWm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YwDWuHNQYuL38vjm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::53ElPg8UfzkVpZCa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vrf1PvEZA5AgbSps',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lePEWtnECzAWpTAU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'change-password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UpNlUxZicwuRK4qs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/one-time-login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'one-time-login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FgGVUZ7tvcPW64TP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/confirm-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::573jgSpx6PMh1Z01',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/province/get-cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provinces.get-cities',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/login/submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login-submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/get-tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::ckYqQch6AbKetqZH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/file-manager' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.file-manager',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/file-manager-iframe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.file-manager-iframe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/backups' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.backups.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/backups/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.backups.create',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/users/api/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.apiIndex',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/users/api/multipleDestroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.multipleDestroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/users/export/excel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.profile.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/admins' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admins.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admins.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/admins/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admins.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/admins/api/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admins.apiIndex',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/admins/api/multipleDestroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admins.multipleDestroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/admins/export/excel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admins.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/admin/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin.profile.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/products/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/products/api/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.apiIndex',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/products/api/multipleDestroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.multipleDestroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/product/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/product/slug' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::YV0xpPSSN1QiXIiZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/product/prices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.prices.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.prices.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/discounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.discounts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.discounts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/discounts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.discounts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/provinces' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provinces.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provinces.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/provinces/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provinces.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/provinces/api/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provinces.apiIndex',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/provinces/api/multipleDestroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provinces.multipleDestroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/provinces/api/sort' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provinces.sort',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/cities/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cities.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cities.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/cities/api/multipleDestroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cities.multipleDestroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/cities/api/sort' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cities.sort',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/brands' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brands.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brands.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/brands/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brands.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/brands/ajax/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::CTDKSuSJpcfXblG5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/filters' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.filters.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.filters.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/filters/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.filters.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/attributeGroups' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.attributeGroups.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.attributeGroups.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/attributeGroups/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.attributeGroups.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/attributeGroup/sort' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::3NyWrKA7Qq6tHRcF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/attributes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.attributes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/attributes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.attributes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/spectypes/spec-type-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.spectypes.getdata',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/spectypes/ajax/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::iDAmDOttkBGcOimP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/spectypes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.spectypes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.spectypes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/posts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/post/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posts.categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/post/slug' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::oc88K49TtuF7wk04',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/category/slug' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::fiwtfeGiX4aIxtTh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/pages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pages.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/tickets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tickets.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tickets.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/tickets/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tickets.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/tickets/file/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tickets.file.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/tickets/file/destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tickets.file.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/menus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menus.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menus.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/menus/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menus.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/orders/api/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders.apiIndex',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/orders/api/multipleDestroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders.multipleDestroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/order/not-completed/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders.notCompleted',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/carriers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.carriers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.carriers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/carriers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.carriers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/tariffs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tariffs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tariffs.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/tariffs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tariffs.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.transactions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/transactions/api/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.transactions.apiIndex',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/transactions/api/multipleDestroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.transactions.multipleDestroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/currencies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currencies.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currencies.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/currencies/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currencies.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/sliders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sliders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sliders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/sliders/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sliders.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/banners' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banners.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banners.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/banners/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banners.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/links' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.links.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.links.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/links/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.links.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/links/groups/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.links.groups.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/statistics/viewsList' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.statistics.viewsList',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/statistics/views' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.statistics.views',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/statistics/viewCounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.statistics.viewCounts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/statistics/viewerCounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.statistics.viewerCounts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/statistics/viewers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.statistics.viewers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/statistics/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.statistics.orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/statistics/orderValues' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.statistics.orderValues',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/statistics/orderCounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.statistics.orderCounts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/statistics/orderUsers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.statistics.orderUsers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/statistics/orderProducts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.statistics.orderProducts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/statistics/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.statistics.users',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/statistics/userCounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.statistics.userCounts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/statistics/smsLog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.statistics.smsLog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/contacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contacts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/stock-notifies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.stock-notifies.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.comments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.permissions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.permissions.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/widgets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/widgets/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/widget/sort' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.sort',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/themes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.themes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.themes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/themes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.themes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/theme/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.themes.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::PbjX0YPCYWYjwuSk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/settings/information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.information',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::KmdfiMlWg4cBN5yU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/settings/socials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.socials',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::X4X35n9cRzypSq9i',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/settings/gateways' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.gateways',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::gUFUxVeWEDqnqYDS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/settings/others' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.others',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::LbuVZTKBqCKSNOjx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/settings/sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.sms',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::LEjZKDRChtMWQrAU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/developer/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.developer.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::RLNlwCq7N7EsO00Z',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/developer/downApplication' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.developer.downApplication',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/developer/upApplication' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.developer.upApplication',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/developer/webpushNotification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.developer.webpushNotification',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/developer/updater' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.developer.showUpdater',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.developer.updateApplication',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/developer/updaterAfter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.developer.updaterAfter',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::io9k9fjFj4Aan6eX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subscriptions/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YrCaf7Sds4vVaMWv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Creepy/webSite/portal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I4lQjp29VnhN6E02',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Creepy/webSite/portal/edit-post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Creepy.portal.editPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manifest.json' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KOMWVx9MoVk7R7N9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/features' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::waBKPxf9HLRxgMwz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/features' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.features.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.features.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/features/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.features.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/specialcomments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::11lPCv6bC2M0CXcn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/special-comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.special-comments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.special-comments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/special-comments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.special-comments.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/work-samples/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.work-samples.categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/work-samples/slug' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::K7l59za2fE804md1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/worksample' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R7gFdigbniIe9xVA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/work-samples' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.work-samples.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.work-samples.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/work-samples/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.work-samples.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/work-samples/technology/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.work-samples.technology.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/work-samples/technology/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.work-samples.technology.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-new-captcha' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blogs/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.blogs.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blogs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.blogs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'front.blogs.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blogs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.blogs.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/work-samples/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.workSample.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/work-samples' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.work-samples.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.products.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.products.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'front.products.ajax_search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/specials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.products.specials',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/discount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.products.discount',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/compare' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.products.similar-compare',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/front/setCookieTheme' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.front.setCookieTheme',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/front/setCookieColor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.front.setCookieColor',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.cart',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'front.generated::dhgPUi35j5BlemJP',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/stock-notify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.generated::MPUMBJLcNKqTHmQw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.generated::iCvWvN5z6g138nW9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap-posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.generated::oNBXgvpnFbASkbvM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap-pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.generated::FjgpQDFMPcFRHQkH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap-products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.generated::rk8830RguhV5Z9z4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.contact.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'front.contact.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.checkout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout-prices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.checkout.prices',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/discount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.discount.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'front.discount.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'front.orders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/orders/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.orders.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.wallet.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'front.wallet.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.wallet.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.user.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'front.user.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.user.comments',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/edit-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.user.profile.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.user.password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'front.user.password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/force-change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.user.force-change-password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'front.user.force-update-password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/favorites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.favorites.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'front.favorites.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tickets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.tickets.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'front.tickets.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tickets/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.tickets.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.verify.showVerify',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'front.verify.verifyCode',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/change-username' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.verify.showChangeUsername',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'front.verify.changeUsername',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/ca(?|ptcha(?|/api(?:/([^/]++))?(*:113)|(?:/([^/]++))?(*:135))|rt/([^/]++)(?|(*:158)|(*:166)))|/admin/admin/(?|b(?|a(?|ckups/([^/]++)(?|/download(*:226)|(*:234))|nners/(?|([^/]++)(?|/edit(*:268)|(*:276))|sort(*:289)))|rands/([^/]++)(?|/edit(*:321)|(*:329)))|users/([^/]++)(?|(*:356)|/(?|edit(*:372)|views(*:385))|(*:394))|a(?|dmins/([^/]++)(?|(*:424)|/(?|edit(*:440)|views(*:453))|(*:462))|ttribute(?|Groups/([^/]++)(?|(*:500)|/(?|edit(*:516)|attributes(*:534))|(*:543))|s/([^/]++)(?|/edit(*:570)|(*:578))))|w(?|allets/(?|([^/]++)(*:611)|histories/([^/]++)(*:637)|([^/]++)(?|/create(*:663)|(*:671)))|idgets/([^/]++)(?|/(?|edit(*:707)|template(*:723))|(*:732))|ork\\-samples/(?|([^/]++)(?|/edit(*:773)|(*:781))|technology(?|(*:803)|/(?|edit/([^/]++)(*:828)|update/([^/]++)(*:851)|destroy/([^/]++)(*:875)))))|p(?|ro(?|ducts/(?|([^/]++)(?|/edit(*:921)|(*:929))|image\\-(?|store(*:953)|delete(*:967)))|vinces/([^/]++)(?|(*:995)|/edit(*:1008)|(*:1017)))|osts/([^/]++)(?|/edit(*:1049)|(*:1058))|ages/([^/]++)(?|/edit(*:1089)|(*:1098)))|discounts/([^/]++)(?|/edit(*:1135)|(*:1144))|c(?|ities/(?|([^/]++)(?|(*:1178)|/edit(*:1192)|(*:1201))|api/([^/]++)/index(*:1229))|a(?|tegories/(?|([^/]++)(?|/edit(*:1271)|(*:1280))|sort(*:1294))|rriers/([^/]++)(?|(*:1322)|/(?|edit(*:1339)|cities(*:1354))|(*:1364)))|urrencies/([^/]++)(?|/edit(*:1401)|(*:1410))|o(?|ntacts/([^/]++)(?|(*:1442))|mments/([^/]++)(?|(*:1470))))|f(?|ilters/([^/]++)(?|/edit(*:1509)|(*:1518))|eatures/(?|([^/]++)(?|/edit(*:1555)|(*:1564))|categories(*:1584)|s(?|lug(*:1600)|ort(*:1612))))|s(?|pec(?|types/([^/]++)(?|/edit(*:1656)|(*:1665))|ial\\-comments/([^/]++)(?|/edit(*:1705)|(*:1714)))|liders/(?|([^/]++)(?|/edit(*:1751)|(*:1760))|sort(*:1774))|ms/([^/]++)(*:1795)|tock\\-notifies/([^/]++)(?|(*:1830)))|t(?|ickets/([^/]++)(?|(*:1863))|ariffs/([^/]++)(?|(*:1891)|/edit(*:1905)|(*:1914))|ransactions/([^/]++)(?|(*:1947))|hemes/([^/]++)(?|(*:1974)))|menus/(?|([^/]++)(?|(*:2005))|sort(*:2019))|orders/([^/]++)(?|(*:2047)|/shipping\\-status(*:2073))|links/(?|([^/]++)(?|/edit(*:2108)|(*:2117))|sort(*:2131)|groups(*:2146))|roles/([^/]++)(?|(*:2173)|/edit(*:2187)|(*:2196)))|/blogs/(?|([^/]++)(?|(*:2228)|/edit(*:2242)|(*:2251))|category/([^/]++)(*:2278)|tag/([^/]++)(*:2299)|([^/]++)/comments(*:2325))|/w(?|ork\\-samples/(?|([^/]++)(*:2364)|category/([^/]++)(*:2390)|tag/([^/]++)(*:2411)|([^/]++)/comments(*:2437))|allet/(?|payment/callback/([^/]++)(*:2481)|([^/]++)(*:2498)))|/p(?|roduct(?|s/(?|([^/]++)(*:2536)|category(?|/([^/]++)(*:2565)|\\-(?|products/([^/]++)(*:2596)|specials/([^/]++)(*:2622)))|([^/]++)/(?|priceChart(*:2655)|download(*:2672)|comments(*:2689)))|/(?|([^/]++)/prices(*:2719)|compare/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?(*:2772)))|ages/([^/]++)(*:2796))|/orders/(?|payment/callback/([^/]++)(*:2842)|([^/]++)(?|(*:2862)|/edit(*:2876)|(*:2885))|pay/([^/]++)(*:2907))|/favorites/([^/]++)(*:2936)|/tickets/([^/]++)(?|(*:2965)|/edit(*:2979)|(*:2988))|/(.*)(*:3003))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      113 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IpX7WmryEegRXuzk',
            'config' => NULL,
          ),
          1 => 
          array (
            0 => 'config',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KwTDMEMbcaCXfAPF',
            'config' => NULL,
          ),
          1 => 
          array (
            0 => 'config',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      158 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.cart.store',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.cart.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.backups.download',
          ),
          1 => 
          array (
            0 => 'backup',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      234 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.backups.destroy',
          ),
          1 => 
          array (
            0 => 'backup',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      268 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banners.edit',
          ),
          1 => 
          array (
            0 => 'banner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      276 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banners.update',
          ),
          1 => 
          array (
            0 => 'banner',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banners.destroy',
          ),
          1 => 
          array (
            0 => 'banner',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      289 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::CUJayQmSVKXNS4fG',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      321 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brands.edit',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      329 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brands.update',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brands.destroy',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      356 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      372 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      385 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.views',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      394 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      424 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admins.show',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      440 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admins.edit',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      453 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admins.views',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admins.update',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admins.destroy',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      500 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.attributeGroups.show',
          ),
          1 => 
          array (
            0 => 'attributeGroup',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      516 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.attributeGroups.edit',
          ),
          1 => 
          array (
            0 => 'attributeGroup',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      534 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.attributes.index',
          ),
          1 => 
          array (
            0 => 'attributeGroup',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      543 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.attributeGroups.update',
          ),
          1 => 
          array (
            0 => 'attributeGroup',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.attributeGroups.destroy',
          ),
          1 => 
          array (
            0 => 'attributeGroup',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      570 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.attributes.edit',
          ),
          1 => 
          array (
            0 => 'attribute',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      578 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.attributes.update',
          ),
          1 => 
          array (
            0 => 'attribute',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.attributes.destroy',
          ),
          1 => 
          array (
            0 => 'attribute',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      611 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallets.show',
          ),
          1 => 
          array (
            0 => 'wallet',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      637 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallets.history',
          ),
          1 => 
          array (
            0 => 'history',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      663 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallets.create',
          ),
          1 => 
          array (
            0 => 'wallet',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      671 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallets.store',
          ),
          1 => 
          array (
            0 => 'wallet',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      707 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.edit',
          ),
          1 => 
          array (
            0 => 'widget',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.template',
          ),
          1 => 
          array (
            0 => 'key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      732 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.update',
          ),
          1 => 
          array (
            0 => 'widget',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.destroy',
          ),
          1 => 
          array (
            0 => 'widget',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      773 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.work-samples.edit',
          ),
          1 => 
          array (
            0 => 'work_sample',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      781 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.work-samples.update',
          ),
          1 => 
          array (
            0 => 'work_sample',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.work-samples.destroy',
          ),
          1 => 
          array (
            0 => 'work_sample',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      803 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.work-samples.technology.index',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      828 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.work-samples.technology.edit',
          ),
          1 => 
          array (
            0 => 'technology',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      851 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.work-samples.technology.update',
          ),
          1 => 
          array (
            0 => 'technology',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      875 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.work-samples.technology.destroy',
          ),
          1 => 
          array (
            0 => 'technology',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      921 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.edit',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      929 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.update',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.destroy',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      953 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::67Mw4UMXrCeZj7Wc',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      967 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::OqltLYsuaYEVkvry',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      995 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provinces.show',
          ),
          1 => 
          array (
            0 => 'province',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1008 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provinces.edit',
          ),
          1 => 
          array (
            0 => 'province',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1017 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provinces.update',
          ),
          1 => 
          array (
            0 => 'province',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provinces.destroy',
          ),
          1 => 
          array (
            0 => 'province',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1049 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posts.edit',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1058 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posts.update',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posts.destroy',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1089 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pages.edit',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1098 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pages.update',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pages.destroy',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.discounts.edit',
          ),
          1 => 
          array (
            0 => 'discount',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1144 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.discounts.update',
          ),
          1 => 
          array (
            0 => 'discount',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.discounts.destroy',
          ),
          1 => 
          array (
            0 => 'discount',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1178 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cities.show',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1192 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cities.edit',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1201 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cities.update',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cities.destroy',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1229 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cities.apiIndex',
          ),
          1 => 
          array (
            0 => 'province',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1271 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.edit',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1280 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.destroy',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1294 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::WnP97yYSnwhbQNda',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1322 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.carriers.show',
          ),
          1 => 
          array (
            0 => 'carrier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1339 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.carriers.edit',
          ),
          1 => 
          array (
            0 => 'carrier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1354 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.carriers.cities',
          ),
          1 => 
          array (
            0 => 'carrier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1364 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.carriers.update',
          ),
          1 => 
          array (
            0 => 'carrier',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.carriers.destroy',
          ),
          1 => 
          array (
            0 => 'carrier',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1401 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currencies.edit',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1410 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currencies.update',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currencies.destroy',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contacts.show',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contacts.destroy',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1470 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.comments.show',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.comments.update',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.comments.destroy',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1509 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.filters.edit',
          ),
          1 => 
          array (
            0 => 'filter',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1518 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.filters.update',
          ),
          1 => 
          array (
            0 => 'filter',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.filters.destroy',
          ),
          1 => 
          array (
            0 => 'filter',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1555 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.features.edit',
          ),
          1 => 
          array (
            0 => 'feature',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.features.update',
          ),
          1 => 
          array (
            0 => 'feature',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.features.destroy',
          ),
          1 => 
          array (
            0 => 'feature',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1584 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.features.categories.index',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1600 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::JJlGW2mEjvVhaXTh',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1612 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.features.sort',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1656 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.spectypes.edit',
          ),
          1 => 
          array (
            0 => 'spectype',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1665 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.spectypes.update',
          ),
          1 => 
          array (
            0 => 'spectype',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.spectypes.destroy',
          ),
          1 => 
          array (
            0 => 'spectype',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1705 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.special-comments.edit',
          ),
          1 => 
          array (
            0 => 'special_comment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1714 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.special-comments.update',
          ),
          1 => 
          array (
            0 => 'special_comment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.special-comments.destroy',
          ),
          1 => 
          array (
            0 => 'special_comment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1751 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sliders.edit',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sliders.update',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sliders.destroy',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1774 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::6DDmRddZlWbE6Q7S',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1795 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sms.show',
          ),
          1 => 
          array (
            0 => 'sms',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1830 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.stock-notifies.show',
          ),
          1 => 
          array (
            0 => 'stock_notify',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.stock-notifies.destroy',
          ),
          1 => 
          array (
            0 => 'stock_notify',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1863 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tickets.show',
          ),
          1 => 
          array (
            0 => 'ticket',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tickets.update',
          ),
          1 => 
          array (
            0 => 'ticket',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tickets.destroy',
          ),
          1 => 
          array (
            0 => 'ticket',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1891 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tariffs.show',
          ),
          1 => 
          array (
            0 => 'tariff',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1905 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tariffs.edit',
          ),
          1 => 
          array (
            0 => 'tariff',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1914 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tariffs.update',
          ),
          1 => 
          array (
            0 => 'tariff',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tariffs.destroy',
          ),
          1 => 
          array (
            0 => 'tariff',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1947 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.transactions.show',
          ),
          1 => 
          array (
            0 => 'transaction',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.transactions.destroy',
          ),
          1 => 
          array (
            0 => 'transaction',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1974 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.themes.show',
          ),
          1 => 
          array (
            0 => 'theme',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.themes.update',
          ),
          1 => 
          array (
            0 => 'theme',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.themes.destroy',
          ),
          1 => 
          array (
            0 => 'theme',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2005 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menus.show',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menus.update',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menus.destroy',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2019 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::mYvZkW9EGDKrhL0U',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2047 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders.show',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders.destroy',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2073 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders.shipping-status',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2108 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.links.edit',
          ),
          1 => 
          array (
            0 => 'link',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2117 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.links.update',
          ),
          1 => 
          array (
            0 => 'link',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.links.destroy',
          ),
          1 => 
          array (
            0 => 'link',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2131 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::AKsSDRq7SFsVvHRk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2146 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.links.groups.index',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2173 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.show',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2196 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2228 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.blogs.show',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2242 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.blogs.edit',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2251 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.blogs.update',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'front.blogs.destroy',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2278 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.blogs.category',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2299 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.blogs.tag',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2325 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.blog.comments',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2364 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.work-samples.show',
          ),
          1 => 
          array (
            0 => 'work_sample',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2390 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.workSample.category',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2411 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.work-samples.tag',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2437 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.workSample.comments',
          ),
          1 => 
          array (
            0 => 'work_sample',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2481 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.wallet.verify',
          ),
          1 => 
          array (
            0 => 'gateway',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2498 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.wallet.show',
          ),
          1 => 
          array (
            0 => 'wallet',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2536 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.products.show',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2565 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.products.category',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2596 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.products.category-products',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2622 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.products.category-specials',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2655 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.products.priceChart',
          ),
          1 => 
          array (
            0 => 'price',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.products.download',
          ),
          1 => 
          array (
            0 => 'price',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2689 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.product.comments',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.products.prices',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2772 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.products.compare',
            'product2' => NULL,
            'product3' => NULL,
          ),
          1 => 
          array (
            0 => 'product1',
            1 => 'product2',
            2 => 'product3',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2796 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.pages.show',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2842 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.orders.verify',
          ),
          1 => 
          array (
            0 => 'gateway',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2862 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.orders.show',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2876 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.orders.edit',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2885 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.orders.update',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'front.orders.destroy',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2907 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.orders.pay',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2936 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.favorites.destroy',
          ),
          1 => 
          array (
            0 => 'favorite',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2965 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.tickets.show',
          ),
          1 => 
          array (
            0 => 'ticket',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2979 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.tickets.edit',
          ),
          1 => 
          array (
            0 => 'ticket',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2988 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.tickets.update',
          ),
          1 => 
          array (
            0 => 'ticket',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3003 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::swUjQhIs61SIlD41',
          ),
          1 => 
          array (
            0 => 'fallbackPlaceholder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::welcome' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::welcome',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\WelcomeController@welcome',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\WelcomeController@welcome',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/environment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environment',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentMenu',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentMenu',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environmentWizard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/environment/wizard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environmentWizard',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentWizard',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentWizard',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environmentSaveWizard' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/environment/saveWizard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environmentSaveWizard',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@saveWizard',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@saveWizard',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environmentClassic' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/environment/classic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environmentClassic',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentClassic',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentClassic',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environmentSaveClassic' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/environment/saveClassic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environmentSaveClassic',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@saveClassic',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@saveClassic',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::requirements' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/requirements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::requirements',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\RequirementsController@requirements',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\RequirementsController@requirements',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::permissions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::permissions',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\PermissionsController@permissions',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\PermissionsController@permissions',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::database' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::database',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\DatabaseController@database',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\DatabaseController@database',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::final' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/final',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::final',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\FinalController@finish',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\FinalController@finish',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelUpdater::welcome' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'update',
        ),
        'as' => 'LaravelUpdater::welcome',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@welcome',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@welcome',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'update',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelUpdater::overview' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update/overview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'update',
        ),
        'as' => 'LaravelUpdater::overview',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@overview',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@overview',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'update',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelUpdater::database' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'update',
        ),
        'as' => 'LaravelUpdater::database',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@database',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@database',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'update',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelUpdater::final' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update/final',
      'action' => 
      array (
        'middleware' => 'web',
        'as' => 'LaravelUpdater::final',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@finish',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@finish',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'update',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.initialize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/initialize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@initialize',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@initialize',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.initialize',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.content' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/content',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@content',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@content',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.content',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.tree' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/tree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@tree',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@tree',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.tree',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.select-disk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/select-disk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@selectDisk',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@selectDisk',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.select-disk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@upload',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@upload',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.upload',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@delete',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@delete',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.paste' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/paste',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@paste',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@paste',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.paste',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.rename' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/rename',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@rename',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@rename',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.rename',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@download',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@download',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.thumbnails' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/thumbnails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@thumbnails',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@thumbnails',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.thumbnails',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.preview' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@preview',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@preview',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.preview',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.url' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/url',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@url',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@url',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.url',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.create-directory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/create-directory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@createDirectory',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@createDirectory',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.create-directory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.create-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/create-file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@createFile',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@createFile',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.create-file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.update-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/update-file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@updateFile',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@updateFile',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.update-file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.stream-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/stream-file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@streamFile',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@streamFile',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.stream-file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.zip' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/zip',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@zip',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@zip',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.zip',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.unzip' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file-manager/unzip',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@unzip',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@unzip',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.unzip',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.ckeditor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/ckeditor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@ckeditor',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@ckeditor',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.ckeditor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.tinymce' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/tinymce',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@tinymce',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@tinymce',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.tinymce',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.tinymce5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/tinymce5',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@tinymce5',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@tinymce5',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.tinymce5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.summernote' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/summernote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@summernote',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@summernote',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.summernote',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fm.fm-button' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-manager/fm-button',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'can:file-manager',
        ),
        'uses' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@fmButton',
        'controller' => 'Alexusmai\\LaravelFileManager\\Controllers\\FileManagerController@fmButton',
        'namespace' => 'Alexusmai\\LaravelFileManager\\Controllers',
        'prefix' => 'file-manager',
        'where' => 
        array (
        ),
        'as' => 'fm.fm-button',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X1MHwQemDN9b5qa8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::X1MHwQemDN9b5qa8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IpX7WmryEegRXuzk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'captcha/api/{config?}',
      'action' => 
      array (
        'uses' => '\\Mews\\Captcha\\CaptchaController@getCaptchaApi',
        'controller' => '\\Mews\\Captcha\\CaptchaController@getCaptchaApi',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::IpX7WmryEegRXuzk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KwTDMEMbcaCXfAPF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'captcha/{config?}',
      'action' => 
      array (
        'uses' => '\\Mews\\Captcha\\CaptchaController@getCaptcha',
        'controller' => '\\Mews\\Captcha\\CaptchaController@getCaptcha',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::KwTDMEMbcaCXfAPF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hrerpcSEvuKuCOWm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'broadcasting/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'controller' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
        ),
        'as' => 'generated::hrerpcSEvuKuCOWm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YwDWuHNQYuL38vjm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000b4a37830000000039436384";}";s:4:"hash";s:44:"5XPWbtSVBpUdVitjoNvnKrDce+nGlZpLr5NVwjbwrRs=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YwDWuHNQYuL38vjm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
          2 => 'CheckUserExists',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::53ElPg8UfzkVpZCa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
          2 => 'CheckUserExists',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::53ElPg8UfzkVpZCa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
          2 => 'CheckUserExists',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vrf1PvEZA5AgbSps' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
          2 => 'CheckUserExists',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::vrf1PvEZA5AgbSps',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lePEWtnECzAWpTAU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lePEWtnECzAWpTAU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'change-password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'EnsureForceChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@show',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'change-password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UpNlUxZicwuRK4qs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'EnsureForceChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UpNlUxZicwuRK4qs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
          2 => 'throttle:10,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'one-time-login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'one-time-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\OneTimeLoginController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\OneTimeLoginController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'one-time-login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FgGVUZ7tvcPW64TP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'one-time-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\OneTimeLoginController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\OneTimeLoginController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FgGVUZ7tvcPW64TP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@show',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::573jgSpx6PMh1Z01' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::573jgSpx6PMh1Z01',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provinces.get-cities' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'province/get-cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\ProvinceController@getCities',
        'controller' => 'App\\Http\\Controllers\\Back\\ProvinceController@getCities',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'provinces.get-cities',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AdminLoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\AdminLoginController@showLoginForm',
        'as' => 'admin.login',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login-submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/login/submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AdminLoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\AdminLoginController@login',
        'as' => 'admin.login-submit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'CheckUserNotExists',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\InstallController@showRegisterForm',
        'controller' => 'App\\Http\\Controllers\\Back\\InstallController@showRegisterForm',
        'as' => 'admin.register',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'CheckUserNotExists',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\InstallController@register',
        'controller' => 'App\\Http\\Controllers\\Back\\InstallController@register',
        'as' => 'admin.',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AdminLoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\AdminLoginController@logout',
        'as' => 'admin.logout',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\MainController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\MainController@index',
        'as' => 'admin.dashboard',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::ckYqQch6AbKetqZH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/get-tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\MainController@get_tags',
        'controller' => 'App\\Http\\Controllers\\Back\\MainController@get_tags',
        'as' => 'admin.generated::ckYqQch6AbKetqZH',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\MainController@notifications',
        'controller' => 'App\\Http\\Controllers\\Back\\MainController@notifications',
        'as' => 'admin.notifications',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.file-manager' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/file-manager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\MainController@fileManager',
        'controller' => 'App\\Http\\Controllers\\Back\\MainController@fileManager',
        'as' => 'admin.file-manager',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.file-manager-iframe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/file-manager-iframe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\MainController@fileManagerIframe',
        'controller' => 'App\\Http\\Controllers\\Back\\MainController@fileManagerIframe',
        'as' => 'admin.file-manager-iframe',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.backups.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/backups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\BackupController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\BackupController@index',
        'as' => 'admin.backups.index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.backups.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/backups/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\BackupController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\BackupController@create',
        'as' => 'admin.backups.create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.backups.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/backups/{backup}/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\BackupController@download',
        'controller' => 'App\\Http\\Controllers\\Back\\BackupController@download',
        'as' => 'admin.backups.download',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.backups.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/backups/{backup}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\BackupController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\BackupController@destroy',
        'as' => 'admin.backups.destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.users.index',
        'uses' => 'App\\Http\\Controllers\\Back\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\UserController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.users.create',
        'uses' => 'App\\Http\\Controllers\\Back\\UserController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\UserController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.users.store',
        'uses' => 'App\\Http\\Controllers\\Back\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\UserController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.users.show',
        'uses' => 'App\\Http\\Controllers\\Back\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\Back\\UserController@show',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.users.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\UserController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.users.update',
        'uses' => 'App\\Http\\Controllers\\Back\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\UserController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.users.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\UserController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.apiIndex' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/users/api/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\UserController@apiIndex',
        'controller' => 'App\\Http\\Controllers\\Back\\UserController@apiIndex',
        'as' => 'admin.users.apiIndex',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.multipleDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/users/api/multipleDestroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\UserController@multipleDestroy',
        'controller' => 'App\\Http\\Controllers\\Back\\UserController@multipleDestroy',
        'as' => 'admin.users.multipleDestroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/users/export/excel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\UserController@export',
        'controller' => 'App\\Http\\Controllers\\Back\\UserController@export',
        'as' => 'admin.users.export',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.views' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/users/{user}/views',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\UserController@views',
        'controller' => 'App\\Http\\Controllers\\Back\\UserController@views',
        'as' => 'admin.users.views',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.profile.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\UserController@showProfile',
        'controller' => 'App\\Http\\Controllers\\Back\\UserController@showProfile',
        'as' => 'admin.user.profile.show',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/admin/user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\UserController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Back\\UserController@updateProfile',
        'as' => 'admin.user.profile.update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admins.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/admins',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.admins.index',
        'uses' => 'App\\Http\\Controllers\\Back\\AdminController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\AdminController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admins.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/admins/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.admins.create',
        'uses' => 'App\\Http\\Controllers\\Back\\AdminController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\AdminController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admins.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/admins',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.admins.store',
        'uses' => 'App\\Http\\Controllers\\Back\\AdminController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\AdminController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admins.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/admins/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.admins.show',
        'uses' => 'App\\Http\\Controllers\\Back\\AdminController@show',
        'controller' => 'App\\Http\\Controllers\\Back\\AdminController@show',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admins.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/admins/{admin}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.admins.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\AdminController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\AdminController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admins.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/admins/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.admins.update',
        'uses' => 'App\\Http\\Controllers\\Back\\AdminController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\AdminController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admins.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/admins/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.admins.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\AdminController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\AdminController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admins.apiIndex' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/admins/api/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\AdminController@apiIndex',
        'controller' => 'App\\Http\\Controllers\\Back\\AdminController@apiIndex',
        'as' => 'admin.admins.apiIndex',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admins.multipleDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/admins/api/multipleDestroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\AdminController@multipleDestroy',
        'controller' => 'App\\Http\\Controllers\\Back\\AdminController@multipleDestroy',
        'as' => 'admin.admins.multipleDestroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admins.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/admins/export/excel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\AdminController@export',
        'controller' => 'App\\Http\\Controllers\\Back\\AdminController@export',
        'as' => 'admin.admins.export',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admins.views' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/admins/{admin}/views',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\AdminController@views',
        'controller' => 'App\\Http\\Controllers\\Back\\AdminController@views',
        'as' => 'admin.admins.views',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admin.profile.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\AdminController@showProfile',
        'controller' => 'App\\Http\\Controllers\\Back\\AdminController@showProfile',
        'as' => 'admin.admin.profile.show',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.admin.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/admin/admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\AdminController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Back\\AdminController@updateProfile',
        'as' => 'admin.admin.profile.update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.wallets.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/wallets/{wallet}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.wallets.show',
        'uses' => 'App\\Http\\Controllers\\Back\\WalletController@show',
        'controller' => 'App\\Http\\Controllers\\Back\\WalletController@show',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.wallets.history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/wallets/histories/{history}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\WalletController@history',
        'controller' => 'App\\Http\\Controllers\\Back\\WalletController@history',
        'as' => 'admin.wallets.history',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.wallets.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/wallets/{wallet}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\WalletController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\WalletController@create',
        'as' => 'admin.wallets.create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.wallets.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/wallets/{wallet}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\WalletController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\WalletController@store',
        'as' => 'admin.wallets.store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.products.index',
        'uses' => 'App\\Http\\Controllers\\Back\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\ProductController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/products/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.products.create',
        'uses' => 'App\\Http\\Controllers\\Back\\ProductController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\ProductController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.products.store',
        'uses' => 'App\\Http\\Controllers\\Back\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\ProductController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/products/{product}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.products.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\ProductController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.products.update',
        'uses' => 'App\\Http\\Controllers\\Back\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\ProductController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.products.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\ProductController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.apiIndex' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/products/api/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\ProductController@apiIndex',
        'controller' => 'App\\Http\\Controllers\\Back\\ProductController@apiIndex',
        'as' => 'admin.products.apiIndex',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.multipleDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/products/api/multipleDestroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\ProductController@multipleDestroy',
        'controller' => 'App\\Http\\Controllers\\Back\\ProductController@multipleDestroy',
        'as' => 'admin.products.multipleDestroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::67Mw4UMXrCeZj7Wc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/products/image-store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\ProductController@image_store',
        'controller' => 'App\\Http\\Controllers\\Back\\ProductController@image_store',
        'as' => 'admin.generated::67Mw4UMXrCeZj7Wc',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::OqltLYsuaYEVkvry' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/products/image-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\ProductController@image_delete',
        'controller' => 'App\\Http\\Controllers\\Back\\ProductController@image_delete',
        'as' => 'admin.generated::OqltLYsuaYEVkvry',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/product/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\ProductController@categories',
        'controller' => 'App\\Http\\Controllers\\Back\\ProductController@categories',
        'as' => 'admin.products.categories.index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::YV0xpPSSN1QiXIiZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/product/slug',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\ProductController@generate_slug',
        'controller' => 'App\\Http\\Controllers\\Back\\ProductController@generate_slug',
        'as' => 'admin.generated::YV0xpPSSN1QiXIiZ',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.prices.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/product/prices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\ProductController@indexPrices',
        'controller' => 'App\\Http\\Controllers\\Back\\ProductController@indexPrices',
        'as' => 'admin.product.prices.index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.prices.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/admin/product/prices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\ProductController@updatePrices',
        'controller' => 'App\\Http\\Controllers\\Back\\ProductController@updatePrices',
        'as' => 'admin.product.prices.update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.discounts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/discounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.discounts.index',
        'uses' => 'App\\Http\\Controllers\\Back\\DiscountController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\DiscountController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.discounts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/discounts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.discounts.create',
        'uses' => 'App\\Http\\Controllers\\Back\\DiscountController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\DiscountController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.discounts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/discounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.discounts.store',
        'uses' => 'App\\Http\\Controllers\\Back\\DiscountController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\DiscountController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.discounts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/discounts/{discount}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.discounts.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\DiscountController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\DiscountController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.discounts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/discounts/{discount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.discounts.update',
        'uses' => 'App\\Http\\Controllers\\Back\\DiscountController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\DiscountController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.discounts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/discounts/{discount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.discounts.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\DiscountController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\DiscountController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provinces.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/provinces',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.provinces.index',
        'uses' => 'App\\Http\\Controllers\\Back\\ProvinceController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\ProvinceController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provinces.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/provinces/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.provinces.create',
        'uses' => 'App\\Http\\Controllers\\Back\\ProvinceController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\ProvinceController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provinces.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/provinces',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.provinces.store',
        'uses' => 'App\\Http\\Controllers\\Back\\ProvinceController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\ProvinceController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provinces.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/provinces/{province}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.provinces.show',
        'uses' => 'App\\Http\\Controllers\\Back\\ProvinceController@show',
        'controller' => 'App\\Http\\Controllers\\Back\\ProvinceController@show',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provinces.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/provinces/{province}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.provinces.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\ProvinceController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\ProvinceController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provinces.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/provinces/{province}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.provinces.update',
        'uses' => 'App\\Http\\Controllers\\Back\\ProvinceController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\ProvinceController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provinces.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/provinces/{province}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.provinces.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\ProvinceController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\ProvinceController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provinces.apiIndex' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/provinces/api/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\ProvinceController@apiIndex',
        'controller' => 'App\\Http\\Controllers\\Back\\ProvinceController@apiIndex',
        'as' => 'admin.provinces.apiIndex',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provinces.multipleDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/provinces/api/multipleDestroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\ProvinceController@multipleDestroy',
        'controller' => 'App\\Http\\Controllers\\Back\\ProvinceController@multipleDestroy',
        'as' => 'admin.provinces.multipleDestroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provinces.sort' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/provinces/api/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\ProvinceController@sort',
        'controller' => 'App\\Http\\Controllers\\Back\\ProvinceController@sort',
        'as' => 'admin.provinces.sort',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cities.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/cities/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.cities.create',
        'uses' => 'App\\Http\\Controllers\\Back\\CityController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\CityController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cities.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.cities.store',
        'uses' => 'App\\Http\\Controllers\\Back\\CityController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\CityController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cities.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.cities.show',
        'uses' => 'App\\Http\\Controllers\\Back\\CityController@show',
        'controller' => 'App\\Http\\Controllers\\Back\\CityController@show',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cities.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/cities/{city}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.cities.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\CityController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\CityController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cities.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.cities.update',
        'uses' => 'App\\Http\\Controllers\\Back\\CityController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\CityController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cities.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.cities.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\CityController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\CityController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cities.apiIndex' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/cities/api/{province}/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\CityController@apiIndex',
        'controller' => 'App\\Http\\Controllers\\Back\\CityController@apiIndex',
        'as' => 'admin.cities.apiIndex',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cities.multipleDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/cities/api/multipleDestroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\CityController@multipleDestroy',
        'controller' => 'App\\Http\\Controllers\\Back\\CityController@multipleDestroy',
        'as' => 'admin.cities.multipleDestroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cities.sort' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/cities/api/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\CityController@sort',
        'controller' => 'App\\Http\\Controllers\\Back\\CityController@sort',
        'as' => 'admin.cities.sort',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brands.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.brands.index',
        'uses' => 'App\\Http\\Controllers\\Back\\BrandController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\BrandController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brands.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/brands/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.brands.create',
        'uses' => 'App\\Http\\Controllers\\Back\\BrandController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\BrandController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brands.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.brands.store',
        'uses' => 'App\\Http\\Controllers\\Back\\BrandController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\BrandController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brands.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/brands/{brand}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.brands.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\BrandController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\BrandController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brands.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.brands.update',
        'uses' => 'App\\Http\\Controllers\\Back\\BrandController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\BrandController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brands.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.brands.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\BrandController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\BrandController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::CTDKSuSJpcfXblG5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/brands/ajax/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\BrandController@ajax_get',
        'controller' => 'App\\Http\\Controllers\\Back\\BrandController@ajax_get',
        'as' => 'admin.generated::CTDKSuSJpcfXblG5',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.filters.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/filters',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.filters.index',
        'uses' => 'App\\Http\\Controllers\\Back\\FilterController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\FilterController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.filters.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/filters/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.filters.create',
        'uses' => 'App\\Http\\Controllers\\Back\\FilterController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\FilterController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.filters.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/filters',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.filters.store',
        'uses' => 'App\\Http\\Controllers\\Back\\FilterController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\FilterController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.filters.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/filters/{filter}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.filters.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\FilterController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\FilterController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.filters.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/filters/{filter}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.filters.update',
        'uses' => 'App\\Http\\Controllers\\Back\\FilterController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\FilterController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.filters.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/filters/{filter}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.filters.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\FilterController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\FilterController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.attributeGroups.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/attributeGroups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.attributeGroups.index',
        'uses' => 'App\\Http\\Controllers\\Back\\AttributeGroupController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\AttributeGroupController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.attributeGroups.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/attributeGroups/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.attributeGroups.create',
        'uses' => 'App\\Http\\Controllers\\Back\\AttributeGroupController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\AttributeGroupController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.attributeGroups.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/attributeGroups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.attributeGroups.store',
        'uses' => 'App\\Http\\Controllers\\Back\\AttributeGroupController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\AttributeGroupController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.attributeGroups.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/attributeGroups/{attributeGroup}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.attributeGroups.show',
        'uses' => 'App\\Http\\Controllers\\Back\\AttributeGroupController@show',
        'controller' => 'App\\Http\\Controllers\\Back\\AttributeGroupController@show',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.attributeGroups.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/attributeGroups/{attributeGroup}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.attributeGroups.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\AttributeGroupController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\AttributeGroupController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.attributeGroups.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/attributeGroups/{attributeGroup}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.attributeGroups.update',
        'uses' => 'App\\Http\\Controllers\\Back\\AttributeGroupController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\AttributeGroupController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.attributeGroups.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/attributeGroups/{attributeGroup}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.attributeGroups.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\AttributeGroupController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\AttributeGroupController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.attributes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/attributeGroups/{attributeGroup}/attributes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\AttributeGroupController@attributesIndex',
        'controller' => 'App\\Http\\Controllers\\Back\\AttributeGroupController@attributesIndex',
        'as' => 'admin.attributes.index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::3NyWrKA7Qq6tHRcF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/attributeGroup/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\AttributeGroupController@sort',
        'controller' => 'App\\Http\\Controllers\\Back\\AttributeGroupController@sort',
        'as' => 'admin.generated::3NyWrKA7Qq6tHRcF',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.attributes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/attributes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.attributes.create',
        'uses' => 'App\\Http\\Controllers\\Back\\AttributeController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\AttributeController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.attributes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/attributes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.attributes.store',
        'uses' => 'App\\Http\\Controllers\\Back\\AttributeController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\AttributeController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.attributes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/attributes/{attribute}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.attributes.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\AttributeController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\AttributeController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.attributes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/attributes/{attribute}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.attributes.update',
        'uses' => 'App\\Http\\Controllers\\Back\\AttributeController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\AttributeController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.attributes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/attributes/{attribute}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.attributes.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\AttributeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\AttributeController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.spectypes.getdata' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/spectypes/spec-type-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\SpecTypeController@getData',
        'controller' => 'App\\Http\\Controllers\\Back\\SpecTypeController@getData',
        'as' => 'admin.spectypes.getdata',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::iDAmDOttkBGcOimP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/spectypes/ajax/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\SpecTypeController@ajax_get',
        'controller' => 'App\\Http\\Controllers\\Back\\SpecTypeController@ajax_get',
        'as' => 'admin.generated::iDAmDOttkBGcOimP',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.spectypes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/spectypes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.spectypes.index',
        'uses' => 'App\\Http\\Controllers\\Back\\SpecTypeController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\SpecTypeController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.spectypes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/spectypes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.spectypes.store',
        'uses' => 'App\\Http\\Controllers\\Back\\SpecTypeController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\SpecTypeController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.spectypes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/spectypes/{spectype}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.spectypes.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\SpecTypeController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\SpecTypeController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.spectypes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/spectypes/{spectype}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.spectypes.update',
        'uses' => 'App\\Http\\Controllers\\Back\\SpecTypeController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\SpecTypeController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.spectypes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/spectypes/{spectype}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.spectypes.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\SpecTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\SpecTypeController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.posts.index',
        'uses' => 'App\\Http\\Controllers\\Back\\PostController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\PostController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.posts.create',
        'uses' => 'App\\Http\\Controllers\\Back\\PostController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\PostController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.posts.store',
        'uses' => 'App\\Http\\Controllers\\Back\\PostController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\PostController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/posts/{post}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.posts.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\PostController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\PostController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/posts/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.posts.update',
        'uses' => 'App\\Http\\Controllers\\Back\\PostController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\PostController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/posts/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.posts.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\PostController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\PostController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posts.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/post/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\PostController@categories',
        'controller' => 'App\\Http\\Controllers\\Back\\PostController@categories',
        'as' => 'admin.posts.categories.index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::oc88K49TtuF7wk04' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/post/slug',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\PostController@generate_slug',
        'controller' => 'App\\Http\\Controllers\\Back\\PostController@generate_slug',
        'as' => 'admin.generated::oc88K49TtuF7wk04',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.categories.store',
        'uses' => 'App\\Http\\Controllers\\Back\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\CategoryController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/categories/{category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.categories.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\CategoryController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.categories.update',
        'uses' => 'App\\Http\\Controllers\\Back\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\CategoryController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.categories.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\CategoryController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::WnP97yYSnwhbQNda' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/categories/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\CategoryController@sort',
        'controller' => 'App\\Http\\Controllers\\Back\\CategoryController@sort',
        'as' => 'admin.generated::WnP97yYSnwhbQNda',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::fiwtfeGiX4aIxtTh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/category/slug',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\CategoryController@generate_slug',
        'controller' => 'App\\Http\\Controllers\\Back\\CategoryController@generate_slug',
        'as' => 'admin.generated::fiwtfeGiX4aIxtTh',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.pages.index',
        'uses' => 'App\\Http\\Controllers\\Back\\PageController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\PageController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/pages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.pages.create',
        'uses' => 'App\\Http\\Controllers\\Back\\PageController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\PageController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.pages.store',
        'uses' => 'App\\Http\\Controllers\\Back\\PageController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\PageController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/pages/{page}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.pages.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\PageController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\PageController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.pages.update',
        'uses' => 'App\\Http\\Controllers\\Back\\PageController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\PageController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.pages.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\PageController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\PageController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tickets.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.tickets.index',
        'uses' => 'App\\Http\\Controllers\\Back\\TicketController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\TicketController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tickets.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/tickets/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.tickets.create',
        'uses' => 'App\\Http\\Controllers\\Back\\TicketController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\TicketController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tickets.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.tickets.store',
        'uses' => 'App\\Http\\Controllers\\Back\\TicketController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\TicketController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tickets.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/tickets/{ticket}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.tickets.show',
        'uses' => 'App\\Http\\Controllers\\Back\\TicketController@show',
        'controller' => 'App\\Http\\Controllers\\Back\\TicketController@show',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tickets.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/tickets/{ticket}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.tickets.update',
        'uses' => 'App\\Http\\Controllers\\Back\\TicketController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\TicketController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tickets.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/tickets/{ticket}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.tickets.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\TicketController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\TicketController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tickets.file.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/tickets/file/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\TicketController@storeFile',
        'controller' => 'App\\Http\\Controllers\\Back\\TicketController@storeFile',
        'as' => 'admin.tickets.file.store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tickets.file.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/tickets/file/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\TicketController@destoryFile',
        'controller' => 'App\\Http\\Controllers\\Back\\TicketController@destoryFile',
        'as' => 'admin.tickets.file.destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menus.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.menus.index',
        'uses' => 'App\\Http\\Controllers\\Back\\MenuController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\MenuController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menus.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/menus/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.menus.create',
        'uses' => 'App\\Http\\Controllers\\Back\\MenuController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\MenuController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menus.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.menus.store',
        'uses' => 'App\\Http\\Controllers\\Back\\MenuController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\MenuController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menus.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/menus/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.menus.show',
        'uses' => 'App\\Http\\Controllers\\Back\\MenuController@show',
        'controller' => 'App\\Http\\Controllers\\Back\\MenuController@show',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menus.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/menus/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.menus.update',
        'uses' => 'App\\Http\\Controllers\\Back\\MenuController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\MenuController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menus.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/menus/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.menus.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\MenuController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\MenuController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::mYvZkW9EGDKrhL0U' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/menus/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\MenuController@sort',
        'controller' => 'App\\Http\\Controllers\\Back\\MenuController@sort',
        'as' => 'admin.generated::mYvZkW9EGDKrhL0U',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.orders.index',
        'uses' => 'App\\Http\\Controllers\\Back\\OrderController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\OrderController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.orders.show',
        'uses' => 'App\\Http\\Controllers\\Back\\OrderController@show',
        'controller' => 'App\\Http\\Controllers\\Back\\OrderController@show',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.orders.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.orders.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\OrderController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\OrderController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.orders.shipping-status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/orders/{order}/shipping-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\OrderController@shipping_status',
        'controller' => 'App\\Http\\Controllers\\Back\\OrderController@shipping_status',
        'as' => 'admin.orders.shipping-status',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.orders.apiIndex' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/orders/api/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\OrderController@apiIndex',
        'controller' => 'App\\Http\\Controllers\\Back\\OrderController@apiIndex',
        'as' => 'admin.orders.apiIndex',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.orders.multipleDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/orders/api/multipleDestroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\OrderController@multipleDestroy',
        'controller' => 'App\\Http\\Controllers\\Back\\OrderController@multipleDestroy',
        'as' => 'admin.orders.multipleDestroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.orders.notCompleted' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/order/not-completed/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\OrderController@notCompleted',
        'controller' => 'App\\Http\\Controllers\\Back\\OrderController@notCompleted',
        'as' => 'admin.orders.notCompleted',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.carriers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/carriers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.carriers.index',
        'uses' => 'App\\Http\\Controllers\\Back\\CarrierController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\CarrierController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.carriers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/carriers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.carriers.create',
        'uses' => 'App\\Http\\Controllers\\Back\\CarrierController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\CarrierController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.carriers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/carriers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.carriers.store',
        'uses' => 'App\\Http\\Controllers\\Back\\CarrierController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\CarrierController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.carriers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/carriers/{carrier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.carriers.show',
        'uses' => 'App\\Http\\Controllers\\Back\\CarrierController@show',
        'controller' => 'App\\Http\\Controllers\\Back\\CarrierController@show',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.carriers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/carriers/{carrier}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.carriers.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\CarrierController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\CarrierController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.carriers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/carriers/{carrier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.carriers.update',
        'uses' => 'App\\Http\\Controllers\\Back\\CarrierController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\CarrierController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.carriers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/carriers/{carrier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.carriers.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\CarrierController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\CarrierController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.carriers.cities' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/carriers/{carrier}/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\CarrierController@cities',
        'controller' => 'App\\Http\\Controllers\\Back\\CarrierController@cities',
        'as' => 'admin.carriers.cities',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tariffs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/tariffs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.tariffs.index',
        'uses' => 'App\\Http\\Controllers\\Back\\TariffController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\TariffController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tariffs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/tariffs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.tariffs.create',
        'uses' => 'App\\Http\\Controllers\\Back\\TariffController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\TariffController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tariffs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/tariffs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.tariffs.store',
        'uses' => 'App\\Http\\Controllers\\Back\\TariffController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\TariffController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tariffs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/tariffs/{tariff}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.tariffs.show',
        'uses' => 'App\\Http\\Controllers\\Back\\TariffController@show',
        'controller' => 'App\\Http\\Controllers\\Back\\TariffController@show',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tariffs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/tariffs/{tariff}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.tariffs.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\TariffController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\TariffController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tariffs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/tariffs/{tariff}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.tariffs.update',
        'uses' => 'App\\Http\\Controllers\\Back\\TariffController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\TariffController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tariffs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/tariffs/{tariff}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.tariffs.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\TariffController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\TariffController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.transactions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.transactions.index',
        'uses' => 'App\\Http\\Controllers\\Back\\TransactionController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\TransactionController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.transactions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/transactions/{transaction}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.transactions.show',
        'uses' => 'App\\Http\\Controllers\\Back\\TransactionController@show',
        'controller' => 'App\\Http\\Controllers\\Back\\TransactionController@show',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.transactions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/transactions/{transaction}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.transactions.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\TransactionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\TransactionController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.transactions.apiIndex' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/transactions/api/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\TransactionController@apiIndex',
        'controller' => 'App\\Http\\Controllers\\Back\\TransactionController@apiIndex',
        'as' => 'admin.transactions.apiIndex',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.transactions.multipleDestroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/transactions/api/multipleDestroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\TransactionController@multipleDestroy',
        'controller' => 'App\\Http\\Controllers\\Back\\TransactionController@multipleDestroy',
        'as' => 'admin.transactions.multipleDestroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currencies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/currencies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.currencies.index',
        'uses' => 'App\\Http\\Controllers\\Back\\CurrencyController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\CurrencyController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currencies.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/currencies/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.currencies.create',
        'uses' => 'App\\Http\\Controllers\\Back\\CurrencyController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\CurrencyController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currencies.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/currencies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.currencies.store',
        'uses' => 'App\\Http\\Controllers\\Back\\CurrencyController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\CurrencyController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currencies.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/currencies/{currency}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.currencies.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\CurrencyController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\CurrencyController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currencies.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/currencies/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.currencies.update',
        'uses' => 'App\\Http\\Controllers\\Back\\CurrencyController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\CurrencyController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currencies.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/currencies/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.currencies.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\CurrencyController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\CurrencyController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sliders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/sliders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.sliders.index',
        'uses' => 'App\\Http\\Controllers\\Back\\SliderController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\SliderController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sliders.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/sliders/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.sliders.create',
        'uses' => 'App\\Http\\Controllers\\Back\\SliderController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\SliderController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sliders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/sliders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.sliders.store',
        'uses' => 'App\\Http\\Controllers\\Back\\SliderController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\SliderController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sliders.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/sliders/{slider}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.sliders.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\SliderController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\SliderController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sliders.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/sliders/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.sliders.update',
        'uses' => 'App\\Http\\Controllers\\Back\\SliderController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\SliderController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sliders.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/sliders/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.sliders.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\SliderController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\SliderController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::6DDmRddZlWbE6Q7S' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/sliders/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\SliderController@sort',
        'controller' => 'App\\Http\\Controllers\\Back\\SliderController@sort',
        'as' => 'admin.generated::6DDmRddZlWbE6Q7S',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banners.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/banners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.banners.index',
        'uses' => 'App\\Http\\Controllers\\Back\\BannerController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\BannerController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banners.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/banners/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.banners.create',
        'uses' => 'App\\Http\\Controllers\\Back\\BannerController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\BannerController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banners.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/banners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.banners.store',
        'uses' => 'App\\Http\\Controllers\\Back\\BannerController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\BannerController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banners.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/banners/{banner}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.banners.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\BannerController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\BannerController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banners.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/banners/{banner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.banners.update',
        'uses' => 'App\\Http\\Controllers\\Back\\BannerController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\BannerController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banners.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/banners/{banner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.banners.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\BannerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\BannerController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::CUJayQmSVKXNS4fG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/banners/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\BannerController@sort',
        'controller' => 'App\\Http\\Controllers\\Back\\BannerController@sort',
        'as' => 'admin.generated::CUJayQmSVKXNS4fG',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.links.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/links',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.links.index',
        'uses' => 'App\\Http\\Controllers\\Back\\LinkController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\LinkController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.links.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/links/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.links.create',
        'uses' => 'App\\Http\\Controllers\\Back\\LinkController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\LinkController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.links.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/links',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.links.store',
        'uses' => 'App\\Http\\Controllers\\Back\\LinkController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\LinkController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.links.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/links/{link}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.links.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\LinkController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\LinkController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.links.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/links/{link}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.links.update',
        'uses' => 'App\\Http\\Controllers\\Back\\LinkController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\LinkController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.links.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/links/{link}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.links.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\LinkController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\LinkController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::AKsSDRq7SFsVvHRk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/links/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\LinkController@sort',
        'controller' => 'App\\Http\\Controllers\\Back\\LinkController@sort',
        'as' => 'admin.generated::AKsSDRq7SFsVvHRk',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.links.groups.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/links/groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\LinkController@groups',
        'controller' => 'App\\Http\\Controllers\\Back\\LinkController@groups',
        'as' => 'admin.links.groups.index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.links.groups.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/admin/links/groups/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\LinkController@updateGroups',
        'controller' => 'App\\Http\\Controllers\\Back\\LinkController@updateGroups',
        'as' => 'admin.links.groups.update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.statistics.viewsList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/statistics/viewsList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\StatisticsController@viewsList',
        'controller' => 'App\\Http\\Controllers\\Back\\StatisticsController@viewsList',
        'as' => 'admin.statistics.viewsList',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.statistics.views' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/statistics/views',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\StatisticsController@views',
        'controller' => 'App\\Http\\Controllers\\Back\\StatisticsController@views',
        'as' => 'admin.statistics.views',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.statistics.viewCounts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/statistics/viewCounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\StatisticsController@viewCounts',
        'controller' => 'App\\Http\\Controllers\\Back\\StatisticsController@viewCounts',
        'as' => 'admin.statistics.viewCounts',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.statistics.viewerCounts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/statistics/viewerCounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\StatisticsController@viewerCounts',
        'controller' => 'App\\Http\\Controllers\\Back\\StatisticsController@viewerCounts',
        'as' => 'admin.statistics.viewerCounts',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.statistics.viewers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/statistics/viewers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\StatisticsController@viewers',
        'controller' => 'App\\Http\\Controllers\\Back\\StatisticsController@viewers',
        'as' => 'admin.statistics.viewers',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.statistics.orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/statistics/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\StatisticsController@orders',
        'controller' => 'App\\Http\\Controllers\\Back\\StatisticsController@orders',
        'as' => 'admin.statistics.orders',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.statistics.orderValues' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/statistics/orderValues',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\StatisticsController@orderValues',
        'controller' => 'App\\Http\\Controllers\\Back\\StatisticsController@orderValues',
        'as' => 'admin.statistics.orderValues',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.statistics.orderCounts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/statistics/orderCounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\StatisticsController@orderCounts',
        'controller' => 'App\\Http\\Controllers\\Back\\StatisticsController@orderCounts',
        'as' => 'admin.statistics.orderCounts',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.statistics.orderUsers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/statistics/orderUsers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\StatisticsController@orderUsers',
        'controller' => 'App\\Http\\Controllers\\Back\\StatisticsController@orderUsers',
        'as' => 'admin.statistics.orderUsers',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.statistics.orderProducts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/statistics/orderProducts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\StatisticsController@orderProducts',
        'controller' => 'App\\Http\\Controllers\\Back\\StatisticsController@orderProducts',
        'as' => 'admin.statistics.orderProducts',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.statistics.users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/statistics/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\StatisticsController@users',
        'controller' => 'App\\Http\\Controllers\\Back\\StatisticsController@users',
        'as' => 'admin.statistics.users',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.statistics.userCounts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/statistics/userCounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\StatisticsController@userCounts',
        'controller' => 'App\\Http\\Controllers\\Back\\StatisticsController@userCounts',
        'as' => 'admin.statistics.userCounts',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.statistics.smsLog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/statistics/smsLog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\StatisticsController@smsLog',
        'controller' => 'App\\Http\\Controllers\\Back\\StatisticsController@smsLog',
        'as' => 'admin.statistics.smsLog',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sms.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/sms/{sms}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.sms.show',
        'uses' => 'App\\Http\\Controllers\\Back\\SmsController@show',
        'controller' => 'App\\Http\\Controllers\\Back\\SmsController@show',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contacts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.contacts.index',
        'uses' => 'App\\Http\\Controllers\\Back\\ContactController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\ContactController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contacts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/contacts/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.contacts.show',
        'uses' => 'App\\Http\\Controllers\\Back\\ContactController@show',
        'controller' => 'App\\Http\\Controllers\\Back\\ContactController@show',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contacts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/contacts/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.contacts.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\ContactController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\ContactController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.stock-notifies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/stock-notifies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.stock-notifies.index',
        'uses' => 'App\\Http\\Controllers\\Back\\StockNotifyController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\StockNotifyController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.stock-notifies.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/stock-notifies/{stock_notify}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.stock-notifies.show',
        'uses' => 'App\\Http\\Controllers\\Back\\StockNotifyController@show',
        'controller' => 'App\\Http\\Controllers\\Back\\StockNotifyController@show',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.stock-notifies.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/stock-notifies/{stock_notify}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.stock-notifies.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\StockNotifyController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\StockNotifyController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.comments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.comments.index',
        'uses' => 'App\\Http\\Controllers\\Back\\CommentController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\CommentController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.comments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/comments/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.comments.show',
        'uses' => 'App\\Http\\Controllers\\Back\\CommentController@show',
        'controller' => 'App\\Http\\Controllers\\Back\\CommentController@show',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.comments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/comments/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.comments.update',
        'uses' => 'App\\Http\\Controllers\\Back\\CommentController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\CommentController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.comments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/comments/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.comments.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\CommentController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\CommentController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.roles.index',
        'uses' => 'App\\Http\\Controllers\\Back\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\RoleController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.roles.create',
        'uses' => 'App\\Http\\Controllers\\Back\\RoleController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\RoleController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.roles.store',
        'uses' => 'App\\Http\\Controllers\\Back\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\RoleController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.roles.show',
        'uses' => 'App\\Http\\Controllers\\Back\\RoleController@show',
        'controller' => 'App\\Http\\Controllers\\Back\\RoleController@show',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.roles.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\RoleController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\RoleController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.roles.update',
        'uses' => 'App\\Http\\Controllers\\Back\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\RoleController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.roles.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\RoleController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.permissions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\PermissionController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\PermissionController@index',
        'as' => 'admin.permissions.index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.permissions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/admin/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\PermissionController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\PermissionController@update',
        'as' => 'admin.permissions.update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/widgets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.widgets.index',
        'uses' => 'App\\Http\\Controllers\\Back\\WidgetController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\WidgetController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/widgets/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.widgets.create',
        'uses' => 'App\\Http\\Controllers\\Back\\WidgetController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\WidgetController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/widgets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.widgets.store',
        'uses' => 'App\\Http\\Controllers\\Back\\WidgetController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\WidgetController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/widgets/{widget}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.widgets.edit',
        'uses' => 'App\\Http\\Controllers\\Back\\WidgetController@edit',
        'controller' => 'App\\Http\\Controllers\\Back\\WidgetController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/widgets/{widget}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.widgets.update',
        'uses' => 'App\\Http\\Controllers\\Back\\WidgetController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\WidgetController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/widgets/{widget}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.widgets.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\WidgetController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\WidgetController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/widgets/{key}/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\WidgetController@template',
        'controller' => 'App\\Http\\Controllers\\Back\\WidgetController@template',
        'as' => 'admin.widgets.template',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.sort' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/widget/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\WidgetController@sort',
        'controller' => 'App\\Http\\Controllers\\Back\\WidgetController@sort',
        'as' => 'admin.widgets.sort',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.themes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/themes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.themes.index',
        'uses' => 'App\\Http\\Controllers\\Back\\ThemeController@index',
        'controller' => 'App\\Http\\Controllers\\Back\\ThemeController@index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.themes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/themes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.themes.create',
        'uses' => 'App\\Http\\Controllers\\Back\\ThemeController@create',
        'controller' => 'App\\Http\\Controllers\\Back\\ThemeController@create',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.themes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/themes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.themes.store',
        'uses' => 'App\\Http\\Controllers\\Back\\ThemeController@store',
        'controller' => 'App\\Http\\Controllers\\Back\\ThemeController@store',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.themes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/themes/{theme}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.themes.show',
        'uses' => 'App\\Http\\Controllers\\Back\\ThemeController@show',
        'controller' => 'App\\Http\\Controllers\\Back\\ThemeController@show',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.themes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/themes/{theme}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.themes.update',
        'uses' => 'App\\Http\\Controllers\\Back\\ThemeController@update',
        'controller' => 'App\\Http\\Controllers\\Back\\ThemeController@update',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.themes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/themes/{theme}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.themes.destroy',
        'uses' => 'App\\Http\\Controllers\\Back\\ThemeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Back\\ThemeController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.themes.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/theme/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\ThemeController@showSettings',
        'controller' => 'App\\Http\\Controllers\\Back\\ThemeController@showSettings',
        'as' => 'admin.themes.settings',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::PbjX0YPCYWYjwuSk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/theme/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\ThemeController@updateSettings',
        'controller' => 'App\\Http\\Controllers\\Back\\ThemeController@updateSettings',
        'as' => 'admin.generated::PbjX0YPCYWYjwuSk',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.information' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/settings/information',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\SettingController@showInformation',
        'controller' => 'App\\Http\\Controllers\\Back\\SettingController@showInformation',
        'as' => 'admin.settings.information',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::KmdfiMlWg4cBN5yU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/settings/information',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\SettingController@updateInformation',
        'controller' => 'App\\Http\\Controllers\\Back\\SettingController@updateInformation',
        'as' => 'admin.generated::KmdfiMlWg4cBN5yU',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.socials' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/settings/socials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\SettingController@showSocials',
        'controller' => 'App\\Http\\Controllers\\Back\\SettingController@showSocials',
        'as' => 'admin.settings.socials',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::X4X35n9cRzypSq9i' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/settings/socials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\SettingController@updateSocials',
        'controller' => 'App\\Http\\Controllers\\Back\\SettingController@updateSocials',
        'as' => 'admin.generated::X4X35n9cRzypSq9i',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.gateways' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/settings/gateways',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\SettingController@showGateways',
        'controller' => 'App\\Http\\Controllers\\Back\\SettingController@showGateways',
        'as' => 'admin.settings.gateways',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::gUFUxVeWEDqnqYDS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/settings/gateways',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\SettingController@updateGateways',
        'controller' => 'App\\Http\\Controllers\\Back\\SettingController@updateGateways',
        'as' => 'admin.generated::gUFUxVeWEDqnqYDS',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.others' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/settings/others',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\SettingController@showOthers',
        'controller' => 'App\\Http\\Controllers\\Back\\SettingController@showOthers',
        'as' => 'admin.settings.others',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::LbuVZTKBqCKSNOjx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/settings/others',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\SettingController@updateOthers',
        'controller' => 'App\\Http\\Controllers\\Back\\SettingController@updateOthers',
        'as' => 'admin.generated::LbuVZTKBqCKSNOjx',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.sms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/settings/sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\SettingController@showSms',
        'controller' => 'App\\Http\\Controllers\\Back\\SettingController@showSms',
        'as' => 'admin.settings.sms',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::LEjZKDRChtMWQrAU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/settings/sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\SettingController@updateSms',
        'controller' => 'App\\Http\\Controllers\\Back\\SettingController@updateSms',
        'as' => 'admin.generated::LEjZKDRChtMWQrAU',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.logs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
          4 => 'CheckCreator',
        ),
        'uses' => 'Rap2hpoutre\\LaravelLogViewer\\LogViewerController@index',
        'controller' => 'Rap2hpoutre\\LaravelLogViewer\\LogViewerController@index',
        'as' => 'admin.logs.index',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.developer.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/developer/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
          4 => 'CheckCreator',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\DeveloperController@showSettings',
        'controller' => 'App\\Http\\Controllers\\Back\\DeveloperController@showSettings',
        'as' => 'admin.developer.settings',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::RLNlwCq7N7EsO00Z' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/admin/developer/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
          4 => 'CheckCreator',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\DeveloperController@updateSettings',
        'controller' => 'App\\Http\\Controllers\\Back\\DeveloperController@updateSettings',
        'as' => 'admin.generated::RLNlwCq7N7EsO00Z',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.developer.downApplication' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/developer/downApplication',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
          4 => 'CheckCreator',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\DeveloperController@downApplication',
        'controller' => 'App\\Http\\Controllers\\Back\\DeveloperController@downApplication',
        'as' => 'admin.developer.downApplication',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.developer.upApplication' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/developer/upApplication',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
          4 => 'CheckCreator',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\DeveloperController@upApplication',
        'controller' => 'App\\Http\\Controllers\\Back\\DeveloperController@upApplication',
        'as' => 'admin.developer.upApplication',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.developer.webpushNotification' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/developer/webpushNotification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
          4 => 'CheckCreator',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\DeveloperController@webpushNotification',
        'controller' => 'App\\Http\\Controllers\\Back\\DeveloperController@webpushNotification',
        'as' => 'admin.developer.webpushNotification',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.developer.showUpdater' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/developer/updater',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
          4 => 'CheckCreator',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\DeveloperController@showUpdater',
        'controller' => 'App\\Http\\Controllers\\Back\\DeveloperController@showUpdater',
        'as' => 'admin.developer.showUpdater',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.developer.updateApplication' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/developer/updater',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
          4 => 'CheckCreator',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\DeveloperController@updateApplication',
        'controller' => 'App\\Http\\Controllers\\Back\\DeveloperController@updateApplication',
        'as' => 'admin.developer.updateApplication',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.developer.updaterAfter' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/developer/updaterAfter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
          4 => 'CheckCreator',
        ),
        'uses' => 'App\\Http\\Controllers\\Back\\DeveloperController@updaterAfter',
        'controller' => 'App\\Http\\Controllers\\Back\\DeveloperController@updaterAfter',
        'as' => 'admin.developer.updaterAfter',
        'namespace' => NULL,
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::io9k9fjFj4Aan6eX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PushSubscriptionController@update',
        'controller' => 'App\\Http\\Controllers\\PushSubscriptionController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::io9k9fjFj4Aan6eX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YrCaf7Sds4vVaMWv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subscriptions/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PushSubscriptionController@destroy',
        'controller' => 'App\\Http\\Controllers\\PushSubscriptionController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YrCaf7Sds4vVaMWv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I4lQjp29VnhN6E02' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Creepy/webSite/portal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Creepy\\PortalSite@index',
        'controller' => 'App\\Http\\Controllers\\Creepy\\PortalSite@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::I4lQjp29VnhN6E02',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Creepy.portal.editPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Creepy/webSite/portal/edit-post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Creepy\\PortalSite@editPost',
        'controller' => 'App\\Http\\Controllers\\Creepy\\PortalSite@editPost',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'Creepy.portal.editPost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KOMWVx9MoVk7R7N9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manifest.json',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:353:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:134:"function () {
    return [
        \'name\' => \\config(\'app.name\'),
        \'gcm_sender_id\' => \\config(\'webpush.gcm.sender_id\')
    ];
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000b4a365a0000000039436384";}";s:4:"hash";s:44:"f4snNzGPvy9yB2FaocBg+g77+GG47+8tgRLebhDhvEE=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KOMWVx9MoVk7R7N9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::waBKPxf9HLRxgMwz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/features',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000b4a36570000000039436384";}";s:4:"hash";s:44:"iLj3idsbbbvpeVLa2JsrW9iwjk4hxRAIJf4fE6G7AEc=";}}',
        'namespace' => 'Modules\\Features\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::waBKPxf9HLRxgMwz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.features.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/features',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.features.index',
        'uses' => 'Modules\\Features\\Http\\Controllers\\FeaturesController@index',
        'controller' => 'Modules\\Features\\Http\\Controllers\\FeaturesController@index',
        'namespace' => 'Modules\\Features\\Http\\Controllers',
        'prefix' => 'admin/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.features.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/features/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.features.create',
        'uses' => 'Modules\\Features\\Http\\Controllers\\FeaturesController@create',
        'controller' => 'Modules\\Features\\Http\\Controllers\\FeaturesController@create',
        'namespace' => 'Modules\\Features\\Http\\Controllers',
        'prefix' => 'admin/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.features.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/features',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.features.store',
        'uses' => 'Modules\\Features\\Http\\Controllers\\FeaturesController@store',
        'controller' => 'Modules\\Features\\Http\\Controllers\\FeaturesController@store',
        'namespace' => 'Modules\\Features\\Http\\Controllers',
        'prefix' => 'admin/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.features.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/features/{feature}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.features.edit',
        'uses' => 'Modules\\Features\\Http\\Controllers\\FeaturesController@edit',
        'controller' => 'Modules\\Features\\Http\\Controllers\\FeaturesController@edit',
        'namespace' => 'Modules\\Features\\Http\\Controllers',
        'prefix' => 'admin/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.features.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/features/{feature}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.features.update',
        'uses' => 'Modules\\Features\\Http\\Controllers\\FeaturesController@update',
        'controller' => 'Modules\\Features\\Http\\Controllers\\FeaturesController@update',
        'namespace' => 'Modules\\Features\\Http\\Controllers',
        'prefix' => 'admin/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.features.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/features/{feature}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.features.destroy',
        'uses' => 'Modules\\Features\\Http\\Controllers\\FeaturesController@destroy',
        'controller' => 'Modules\\Features\\Http\\Controllers\\FeaturesController@destroy',
        'namespace' => 'Modules\\Features\\Http\\Controllers',
        'prefix' => 'admin/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.features.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/features/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Modules\\Features\\Http\\Controllers\\FeaturesController@categories',
        'controller' => 'Modules\\Features\\Http\\Controllers\\FeaturesController@categories',
        'as' => 'admin.features.categories.index',
        'namespace' => 'Modules\\Features\\Http\\Controllers',
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::JJlGW2mEjvVhaXTh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/features/slug',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Modules\\Features\\Http\\Controllers\\FeaturesController@generate_slug',
        'controller' => 'Modules\\Features\\Http\\Controllers\\FeaturesController@generate_slug',
        'as' => 'admin.generated::JJlGW2mEjvVhaXTh',
        'namespace' => 'Modules\\Features\\Http\\Controllers',
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.features.sort' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/features/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Modules\\Features\\Http\\Controllers\\FeaturesController@sort',
        'controller' => 'Modules\\Features\\Http\\Controllers\\FeaturesController@sort',
        'as' => 'admin.features.sort',
        'namespace' => 'Modules\\Features\\Http\\Controllers',
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::11lPCv6bC2M0CXcn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/specialcomments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000b4a36580000000039436384";}";s:4:"hash";s:44:"Tzd3HNDLLsODYDtMz7mvF07xuLbJ3IibQZbjn6XdMFw=";}}',
        'namespace' => 'Modules\\SpecialComments\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::11lPCv6bC2M0CXcn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.special-comments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/special-comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.special-comments.index',
        'uses' => 'Modules\\SpecialComments\\Http\\Controllers\\SpecialCommentsController@index',
        'controller' => 'Modules\\SpecialComments\\Http\\Controllers\\SpecialCommentsController@index',
        'namespace' => 'Modules\\SpecialComments\\Http\\Controllers',
        'prefix' => 'admin/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.special-comments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/special-comments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.special-comments.create',
        'uses' => 'Modules\\SpecialComments\\Http\\Controllers\\SpecialCommentsController@create',
        'controller' => 'Modules\\SpecialComments\\Http\\Controllers\\SpecialCommentsController@create',
        'namespace' => 'Modules\\SpecialComments\\Http\\Controllers',
        'prefix' => 'admin/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.special-comments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/special-comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.special-comments.store',
        'uses' => 'Modules\\SpecialComments\\Http\\Controllers\\SpecialCommentsController@store',
        'controller' => 'Modules\\SpecialComments\\Http\\Controllers\\SpecialCommentsController@store',
        'namespace' => 'Modules\\SpecialComments\\Http\\Controllers',
        'prefix' => 'admin/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.special-comments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/special-comments/{special_comment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.special-comments.edit',
        'uses' => 'Modules\\SpecialComments\\Http\\Controllers\\SpecialCommentsController@edit',
        'controller' => 'Modules\\SpecialComments\\Http\\Controllers\\SpecialCommentsController@edit',
        'namespace' => 'Modules\\SpecialComments\\Http\\Controllers',
        'prefix' => 'admin/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.special-comments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/special-comments/{special_comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.special-comments.update',
        'uses' => 'Modules\\SpecialComments\\Http\\Controllers\\SpecialCommentsController@update',
        'controller' => 'Modules\\SpecialComments\\Http\\Controllers\\SpecialCommentsController@update',
        'namespace' => 'Modules\\SpecialComments\\Http\\Controllers',
        'prefix' => 'admin/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.special-comments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/special-comments/{special_comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.special-comments.destroy',
        'uses' => 'Modules\\SpecialComments\\Http\\Controllers\\SpecialCommentsController@destroy',
        'controller' => 'Modules\\SpecialComments\\Http\\Controllers\\SpecialCommentsController@destroy',
        'namespace' => 'Modules\\SpecialComments\\Http\\Controllers',
        'prefix' => 'admin/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.work-samples.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/work-samples/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@categories',
        'controller' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@categories',
        'as' => 'admin.work-samples.categories.index',
        'namespace' => 'Modules\\WorkSample\\Http\\Controllers',
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::K7l59za2fE804md1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/work-samples/slug',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@generate_slug',
        'controller' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@generate_slug',
        'as' => 'admin.generated::K7l59za2fE804md1',
        'namespace' => 'Modules\\WorkSample\\Http\\Controllers',
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R7gFdigbniIe9xVA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/worksample',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000b4a36760000000039436384";}";s:4:"hash";s:44:"J8OA2cuhq918JZR0WrUx9co4i5OmO5ED+kNL7fiHIRQ=";}}',
        'namespace' => 'Modules\\WorkSample\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::R7gFdigbniIe9xVA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.work-samples.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/work-samples',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.work-samples.index',
        'uses' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@index',
        'controller' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@index',
        'namespace' => 'Modules\\WorkSample\\Http\\Controllers',
        'prefix' => 'admin/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.work-samples.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/work-samples/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.work-samples.create',
        'uses' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@create',
        'controller' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@create',
        'namespace' => 'Modules\\WorkSample\\Http\\Controllers',
        'prefix' => 'admin/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.work-samples.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/work-samples',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.work-samples.store',
        'uses' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@store',
        'controller' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@store',
        'namespace' => 'Modules\\WorkSample\\Http\\Controllers',
        'prefix' => 'admin/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.work-samples.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/work-samples/{work_sample}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.work-samples.edit',
        'uses' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@edit',
        'controller' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@edit',
        'namespace' => 'Modules\\WorkSample\\Http\\Controllers',
        'prefix' => 'admin/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.work-samples.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/work-samples/{work_sample}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.work-samples.update',
        'uses' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@update',
        'controller' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@update',
        'namespace' => 'Modules\\WorkSample\\Http\\Controllers',
        'prefix' => 'admin/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.work-samples.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/work-samples/{work_sample}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'admin.work-samples.destroy',
        'uses' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@destroy',
        'controller' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@destroy',
        'namespace' => 'Modules\\WorkSample\\Http\\Controllers',
        'prefix' => 'admin/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.work-samples.technology.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/work-samples/technology',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@technology',
        'controller' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@technology',
        'as' => 'admin.work-samples.technology.index',
        'namespace' => 'Modules\\WorkSample\\Http\\Controllers',
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.work-samples.technology.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/work-samples/technology/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@technology_create',
        'controller' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@technology_create',
        'as' => 'admin.work-samples.technology.create',
        'namespace' => 'Modules\\WorkSample\\Http\\Controllers',
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.work-samples.technology.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/work-samples/technology/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@technology_store',
        'controller' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@technology_store',
        'as' => 'admin.work-samples.technology.store',
        'namespace' => 'Modules\\WorkSample\\Http\\Controllers',
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.work-samples.technology.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/work-samples/technology/edit/{technology}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@technology_edit',
        'controller' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@technology_edit',
        'as' => 'admin.work-samples.technology.edit',
        'namespace' => 'Modules\\WorkSample\\Http\\Controllers',
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.work-samples.technology.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin/work-samples/technology/update/{technology}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@technology_update',
        'controller' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@technology_update',
        'as' => 'admin.work-samples.technology.update',
        'namespace' => 'Modules\\WorkSample\\Http\\Controllers',
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.work-samples.technology.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/work-samples/technology/destroy/{technology}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Admin',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@technology_destroy',
        'controller' => 'Modules\\WorkSample\\Http\\Controllers\\WorkSampleController@technology_destroy',
        'as' => 'admin.work-samples.technology.destroy',
        'namespace' => 'Modules\\WorkSample\\Http\\Controllers',
        'prefix' => '/admin/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\MainController@index',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\MainController@index',
        'as' => 'front.index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-new-captcha',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\MainController@captcha',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\MainController@captcha',
        'as' => 'front.',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.blogs.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogs/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\PostController@search',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\PostController@search',
        'as' => 'front.blogs.search',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.blogs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'front.blogs.index',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\PostController@index',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\PostController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.blogs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'front.blogs.create',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\PostController@create',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\PostController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.blogs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'front.blogs.store',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\PostController@store',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\PostController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.blogs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogs/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'front.blogs.show',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\PostController@show',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\PostController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.blogs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogs/{blog}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'front.blogs.edit',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\PostController@edit',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\PostController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.blogs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'blogs/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'front.blogs.update',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\PostController@update',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\PostController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.blogs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'blogs/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'front.blogs.destroy',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\PostController@destroy',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\PostController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.blogs.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogs/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\PostController@category',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\PostController@category',
        'as' => 'front.blogs.category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.blogs.tag' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogs/tag/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\PostController@tag',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\PostController@tag',
        'as' => 'front.blogs.tag',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.blog.comments' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'blogs/{blog}/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\PostController@comments',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\PostController@comments',
        'as' => 'front.blog.comments',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.workSample.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'work-samples/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\WorkSampleController@search',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\WorkSampleController@search',
        'as' => 'front.workSample.search',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.work-samples.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'work-samples',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'front.work-samples.index',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\WorkSampleController@index',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\WorkSampleController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.work-samples.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'work-samples/{work_sample}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'front.work-samples.show',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\WorkSampleController@show',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\WorkSampleController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.workSample.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'work-samples/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\WorkSampleController@category',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\WorkSampleController@category',
        'as' => 'front.workSample.category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.work-samples.tag' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'work-samples/tag/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\WorkSampleController@tag',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\WorkSampleController@tag',
        'as' => 'front.work-samples.tag',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.workSample.comments' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'work-samples/{work_sample}/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\WorkSampleController@comments',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\WorkSampleController@comments',
        'as' => 'front.workSample.comments',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'front.products.index',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@index',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.products.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'front.products.show',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@show',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.products.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@category',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@category',
        'as' => 'front.products.category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.products.category-products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/category-products/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@categoryProducts',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@categoryProducts',
        'as' => 'front.products.category-products',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.products.category-specials' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/category-specials/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@categorySpecials',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@categorySpecials',
        'as' => 'front.products.category-specials',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.products.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@search',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@search',
        'as' => 'front.products.search',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.products.ajax_search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@ajax_search',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@ajax_search',
        'as' => 'front.products.ajax_search',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.products.specials' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/specials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@specials',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@specials',
        'as' => 'front.products.specials',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.products.discount' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/discount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@discount',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@discount',
        'as' => 'front.products.discount',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.products.prices' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/{product}/prices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@prices',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@prices',
        'as' => 'front.products.prices',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.products.compare' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/compare/{product1}/{product2?}/{product3?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@compare',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@compare',
        'as' => 'front.products.compare',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.products.similar-compare' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/compare',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@similarCompare',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@similarCompare',
        'as' => 'front.products.similar-compare',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.products.priceChart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/{price}/priceChart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@priceChart',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@priceChart',
        'as' => 'front.products.priceChart',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.front.setCookieTheme' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'front/setCookieTheme',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\MainController@setCookieTheme',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\MainController@setCookieTheme',
        'as' => 'front.front.setCookieTheme',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.front.setCookieColor' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'front/setCookieColor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\MainController@setCookieColor',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\MainController@setCookieColor',
        'as' => 'front.front.setCookieColor',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\CartController@show',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\CartController@show',
        'as' => 'front.cart',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.cart.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cart/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\CartController@store',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\CartController@store',
        'as' => 'front.cart.store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.generated::dhgPUi35j5BlemJP' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\CartController@update',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\CartController@update',
        'as' => 'front.generated::dhgPUi35j5BlemJP',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.cart.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cart/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\CartController@destroy',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\CartController@destroy',
        'as' => 'front.cart.destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.generated::MPUMBJLcNKqTHmQw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'stock-notify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\StockNotifyController@store',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\StockNotifyController@store',
        'as' => 'front.generated::MPUMBJLcNKqTHmQw',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.pages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\PageController@show',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\PageController@show',
        'as' => 'front.pages.show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.generated::iCvWvN5z6g138nW9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\SitemapController@index',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\SitemapController@index',
        'as' => 'front.generated::iCvWvN5z6g138nW9',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.generated::oNBXgvpnFbASkbvM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap-posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\SitemapController@posts',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\SitemapController@posts',
        'as' => 'front.generated::oNBXgvpnFbASkbvM',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.generated::FjgpQDFMPcFRHQkH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap-pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\SitemapController@pages',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\SitemapController@pages',
        'as' => 'front.generated::FjgpQDFMPcFRHQkH',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.generated::rk8830RguhV5Z9z4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap-products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\SitemapController@products',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\SitemapController@products',
        'as' => 'front.generated::rk8830RguhV5Z9z4',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.contact.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'front.contact.index',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\ContactController@index',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\ContactController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.contact.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'front.contact.store',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\ContactController@store',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\ContactController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.orders.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'orders/payment/callback/{gateway}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\OrderController@verify',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\OrderController@verify',
        'as' => 'front.orders.verify',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.wallet.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'wallet/payment/callback/{gateway}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\WalletController@verify',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\WalletController@verify',
        'as' => 'front.wallet.verify',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\MainController@checkout',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\MainController@checkout',
        'as' => 'front.checkout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.checkout.prices' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout-prices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\MainController@getPrices',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\MainController@getPrices',
        'as' => 'front.checkout.prices',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.discount.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'discount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\DiscountController@store',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\DiscountController@store',
        'as' => 'front.discount.store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.discount.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'discount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\DiscountController@destroy',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\DiscountController@destroy',
        'as' => 'front.discount.destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'front.orders.index',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\OrderController@index',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\OrderController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.orders.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'orders/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'front.orders.create',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\OrderController@create',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\OrderController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.orders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'front.orders.store',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\OrderController@store',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\OrderController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'front.orders.show',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\OrderController@show',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\OrderController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.orders.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'orders/{order}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'front.orders.edit',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\OrderController@edit',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\OrderController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.orders.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'front.orders.update',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\OrderController@update',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\OrderController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.orders.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'front.orders.destroy',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\OrderController@destroy',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\OrderController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.orders.pay' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'orders/pay/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\OrderController@pay',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\OrderController@pay',
        'as' => 'front.orders.pay',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.wallet.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'front.wallet.index',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\WalletController@index',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\WalletController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.wallet.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wallet/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'front.wallet.create',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\WalletController@create',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\WalletController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.wallet.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'wallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'front.wallet.store',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\WalletController@store',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\WalletController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.wallet.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wallet/{wallet}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'front.wallet.show',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\WalletController@show',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\WalletController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.user.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\UserController@profile',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\UserController@profile',
        'as' => 'front.user.profile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.user.comments' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\UserController@comments',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\UserController@comments',
        'as' => 'front.user.comments',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.user.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/edit-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\UserController@editProfile',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\UserController@editProfile',
        'as' => 'front.user.profile.edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.user.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\UserController@update_profile',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\UserController@update_profile',
        'as' => 'front.user.profile.update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.user.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\UserController@changePassword',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\UserController@changePassword',
        'as' => 'front.user.password',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.user.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\UserController@updatePassword',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\UserController@updatePassword',
        'as' => 'front.user.password.update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.user.force-change-password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/force-change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
          4 => 'EnsureForceChange',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\UserController@forceChangePassword',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\UserController@forceChangePassword',
        'as' => 'front.user.force-change-password',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.user.force-update-password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/force-change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
          4 => 'EnsureForceChange',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\UserController@forceUpdatePassword',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\UserController@forceUpdatePassword',
        'as' => 'front.user.force-update-password',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.products.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/{price}/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@download',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@download',
        'as' => 'front.products.download',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.product.comments' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/{product}/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@comments',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\ProductController@comments',
        'as' => 'front.product.comments',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.favorites.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'favorites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'front.favorites.index',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\FavoriteController@index',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\FavoriteController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.favorites.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'favorites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'front.favorites.store',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\FavoriteController@store',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\FavoriteController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.favorites.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'favorites/{favorite}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'front.favorites.destroy',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\FavoriteController@destroy',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\FavoriteController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.tickets.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'front.tickets.index',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\TicketController@index',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\TicketController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.tickets.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tickets/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'front.tickets.create',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\TicketController@create',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\TicketController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.tickets.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'front.tickets.store',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\TicketController@store',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\TicketController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.tickets.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tickets/{ticket}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'front.tickets.show',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\TicketController@show',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\TicketController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.tickets.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tickets/{ticket}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'front.tickets.edit',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\TicketController@edit',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\TicketController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.tickets.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'tickets/{ticket}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'CheckPasswordChange',
        ),
        'as' => 'front.tickets.update',
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\TicketController@update',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\TicketController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.verify.showVerify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'notVerified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\VerifyController@showVerify',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\VerifyController@showVerify',
        'as' => 'front.verify.showVerify',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.verify.verifyCode' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'notVerified',
          3 => 'CheckPasswordChange',
          4 => 'throttle:15,1',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\VerifyController@verifyCode',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\VerifyController@verifyCode',
        'as' => 'front.verify.verifyCode',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.verify.showChangeUsername' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'change-username',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'notVerified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\VerifyController@showChangeUsername',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\VerifyController@showChangeUsername',
        'as' => 'front.verify.showChangeUsername',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.verify.changeUsername' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'change-username',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'notVerified',
          3 => 'CheckPasswordChange',
        ),
        'uses' => 'Themes\\myWebsite\\src\\Controllers\\VerifyController@changeUsername',
        'controller' => 'Themes\\myWebsite\\src\\Controllers\\VerifyController@changeUsername',
        'as' => 'front.verify.changeUsername',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::swUjQhIs61SIlD41' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{fallbackPlaceholder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:277:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:62:"function(){ return \\response()->view(\'errors.404\', [], 404); }";s:5:"scope";s:34:"Illuminate\\Support\\ServiceProvider";s:4:"this";N;s:4:"self";s:32:"000000000b4a36730000000039436384";}";s:4:"hash";s:44:"wfsAlkejiHQrRqF1q/3sHtWKzAGeMqzlxwrjNRBKe1Q=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::swUjQhIs61SIlD41',
      ),
      'fallback' => true,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'fallbackPlaceholder' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
