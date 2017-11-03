<?php

function webpack_asset($file)
{
  $manifest_path = public_path() . '/dist/build-manifest.json';
  $manifest = json_decode(file_get_contents($manifest_path), true);

  if(isset($manifest[$file])) return $manifest[$file];

  return $file;
}

function dist_asset($file, $dist_folder = 'dist')
{
  if(is_development())
  {
    return webpack_dev_server_path() . $file;
  }

  return asset($dist_folder .'/' . webpack_asset($file));
}

function webpack_dev_server_path()
{
  return config('app.url') . ':' . config('app.webpack_dev_server_port') . '/';
}

function is_development()
{
  return config('app.env') == 'development';
}

function is_production()
{
  return config('app.env') == 'production';
}
