@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My App</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <h3>Hello World!</h3>
    </body>
</html>