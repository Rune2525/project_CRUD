<!DOCTYPE html>
 
<html>
 
 
<head>
 
　<meta charset='utf-8'>
 
　<link rel='stylesheet' href='/css/app.css'>
 
　<meta name="viewport" content="width=device-width, initial-scale=1">
 
</head>
 
 
<body>
 
　<header>
 
　　<h1 class='page-header'>Xitter</h1>
 
　</header>
 
<div id="app">
 
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
 
            <div class="container">

<main class="py-4">
 
@yield('content')
 
</main>
 
</div>
 
　<footer>
 
　　<small>Laravel@crud.curriculum</small>
 
　</footer>
 
　<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 
</body>
 
</html>