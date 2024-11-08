<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Рулетка </title>
    <link rel="stylesheet" href="css/main/fortuna.css">
    <link rel="stylesheet" href="css/koleso.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Ваши билеты</h1>
        <div class="ticket-counter">200 🎟</div>
        <div class="buttons">
            <button class="ticket-btn" onclick="window.location.href='ticket.html'">Билеты</button>
            <button class="free-ticket-btn" onclick="window.location.href='tasks.html'">Free Ticket</button>
        </div>
    </div>

    <!-- Интеграция рулетки -->
    <div class="roulette-wrapper">
        <div class="app">
            <img class="pointer" src="css/dogsimg/dogs1.png" alt="">
            <div class="scope">
                <ul class="list"></ul>
            </div>
            <button onclick="start()" class="start">Крутить</button>
        </div>
    </div>

    <!-- Нижняя навигация -->
    <nav class="navbar">
        <a href="index.php" class="nav-item">
            <img src="css/dogsimg/icon/ГлавнаяСер.png" alt="Главная" class="nav-icon">
            <span>Главная</span>
        </a>
        <a href="tasks.php" class="nav-item">
            <img src="css/dogsimg/icon/ЗаданияСер.png" alt="Задания" class="nav-icon">
            <span>Задания</span>
        </a>
        <a href="fortuna.php" class="nav-item active">
            <img src="css/dogsimg/icon/Рулетка.png" alt="Рулетка" class="nav-icon">
            <span>Рулетка</span>
        </a>
        <a href="friends.php" class="nav-item">
            <img src="css/dogsimg/icon/ДрузьяСер.png" alt="Друзья" class="nav-icon">
            <span>Друзья</span>
        </a>
        <a href="mining.php" class="nav-item">
            <img src="css/dogsimg/icon/ФармингСер.png" alt="Фарминг" class="nav-icon">
            <span>Фарминг</span>
        </a>
    </nav>

    <!-- Скрипты для рулетки и основной страницы -->
    <script src="css/javascript/koleso.js"></script>
</body>
</html>
