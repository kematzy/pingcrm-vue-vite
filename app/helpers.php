<?php

//   vite('app.js')  => '/build/assets/app.abc123.js'

function vite(string $asset): string
{
  $path = glob(public_path('build/assets/' . str_replace('.', '.*.', $asset)))[0];
  return str_replace(public_path(), '', $path);
}
