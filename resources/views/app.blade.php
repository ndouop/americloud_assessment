<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Americloud assessment by Roger Ndouop Choutvet</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}'"/>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="flex h-screen bg-gray-200 font-roboto">
    <div class="flex-1 flex flex-col overflow-hidden">
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">
                <div id="app">
                    <app></app>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
