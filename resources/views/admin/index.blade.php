@extends('admin.layouts.admin')

@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Portfolio de Talla KEBE</title>
</head>
<body>
    <div class="container">
        <header class="text-center my-4">
            <h1>Bienvenue sur mon Portfolio</h1>
            <h2>Développeur Full Stack</h2>
            <p>Bonjour, je suis Talla KEBE, un passionné du développement Backend.</p>
        </header>

        <!-- Compétences -->
        <section class="skills">
    <h3>Compétences Techniques</h3>
    <div class="row">
        <div class="col-md-4 text-center skill-item">
            <h5>PHP PDO</h5>
            <i class="fab fa-php fa-3x"></i>
        </div>
        <div class="col-md-4 text-center skill-item">
            <h5>Laravel</h5>
            <i class="fab fa-laravel fa-3x"></i>
        </div>
        <div class="col-md-4 text-center skill-item">
            <h5>SQL</h5>
            <i class="fas fa-database fa-3x"></i>
        </div>
        <div class="col-md-4 text-center skill-item">
            <h5>Java JEE</h5>
            <i class="fab fa-java fa-3x"></i>
        </div>
        <div class="col-md-4 text-center skill-item">
            <h5>Spring Boot</h5>
            <i class="fas fa-code-branch fa-3x"></i>
        </div>
        <div class="col-md-4 text-center skill-item">
            <h5>Angular</h5>
            <i class="fab fa-angular fa-3x"></i>
        </div>
        <div class="col-md-4 text-center skill-item">
            <h5>Figma</h5>
            <i class="fab fa-figma fa-3x"></i>
        </div>
        <div class="col-md-4 text-center skill-item">
            <h5>UML</h5>
            <i class="fas fa-sitemap fa-3x"></i>
        </div>
        <div class="col-md-4 text-center skill-item">
            <h5>MongoDB</h5>
            <i class="fas fa-database fa-3x"></i>
        </div>
        <div class="col-md-4 text-center skill-item">
            <h5>CI/CD</h5>
            <i class="fas fa-cogs fa-3x"></i>
        </div>
    </div>
</section>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>

@endsection
