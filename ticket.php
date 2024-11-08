<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Билеты</title>
    <link rel="stylesheet" href="css/main/ticket.css">
</head>
<body>
    <div class="container">
        <!-- Заголовок -->
        <div class="header">
            <h1>Билеты</h1>
            <p>Вы можете приобрести билеты для рулетки за звезды</p>
        </div>

        <!-- Список билетов -->
        <div class="ticket-list">
            <div class="ticket" onclick="purchaseTicket(50, 40)">
                <h2>50 🎟</h2>
                <p>For 40 ⭐ Telegram Stars</p>
            </div>
            <div class="ticket" onclick="purchaseTicket(150, 120)">
                <h2>150 🎟</h2>
                <p>For 120 ⭐ Telegram Stars</p>
            </div>
            <div class="ticket" onclick="purchaseTicket(400, 320)">
                <h2>400 🎟</h2>
                <p>For 320 ⭐ Telegram Stars</p>
            </div>
            <div class="ticket" onclick="purchaseTicket(1000, 800)">
                <h2>1000 🎟</h2>
                <p>For 800 ⭐ Telegram Stars</p>
            </div>
        </div>
        

        <!-- Нижняя навигация -->
        <nav class="navbar">
            <!-- Добавляем класс active только для активной ссылки -->
            <a href="index.php" class="nav-item">
                <img src="css/dogsimg/icon/ГлавнаяСер.png" alt="Главная" class="nav-icon">
                <span>Главная</span>
            </a>
            <a href="tasks.php" class="nav-item">
                <img src="css/dogsimg/icon/ЗаданияСер.png" alt="Задания" class="nav-icon">
                <span>Задания</span>
            </a>
            <a href="fortuna.php" class="nav-item">
                <img src="css/dogsimg/icon/РулеткаСер.png" alt="Рулетка" class="nav-icon">
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
    </div>
</body>
</html>
