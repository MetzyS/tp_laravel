<!-- template.blade.php -->
<!DOCTYPE html>
<html>
<head>
<title>@yield('titre')</title>
<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container">
@yield('contenu')
</div>

</body>
</html>