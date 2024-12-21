<header>
    <nav>
        <a href="index.php">Главная</a> 
        <a href="vhode.php">Войти</a>
    </nav>
</header>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        .header {
            display: flex;
            justify-content: center; /* Центрирование логотипа */
            padding: 10px;
        }

        .logo {
            max-width: 50px; /* Максимальная ширина логотипа */
            height: auto; /* Сохраняем пропорции */
        }
    </style>
</head>
<body>
    <!-- Хедер с логотипом -->
    <div class="header">
        <a href="base.blade.php">
            <img src="images/logo.png" alt="Логотип сайта" class="logo">
        </a>
    </div>
    
</body>
</html>

