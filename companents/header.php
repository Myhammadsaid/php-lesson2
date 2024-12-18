<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<title><?=$title?></title>
</head>
<body>
<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a class='nav-link px-2 text-white' href="/">Главная страница</a></li>
          <li><a class='nav-link px-2 text-white' href="about.php">Про нас</a></li>
          <!-- <li><a class='nav-link px-2 text-white' href="contact.php">Контакты</a></li> -->
           <li><a class='nav-link px-2 text-white' href="date.php">Дата</a></li>
           <li><a class='nav-link px-2 text-white' href="phpfunction.php">Функции</a></li>
        </ul>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Войти</button>
          <button type="button" class="btn btn-warning">Регистрация</button>
        </div>
      </div>
    </div>
  </header>