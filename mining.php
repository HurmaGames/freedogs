<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фарминг - $DOGS</title>
    <link rel="stylesheet" href="css/main/mining.css">
</head>
<body>
    <div class="container">
        <!-- Заголовок -->
        <div class="header">
            <img src="css/dogsimg/dogs13.webp" alt="Dog Icon">
            <h1>Фарминг</h1>
            <p>Забирай 120 $DOGS раз в 24 часа!</p>
        </div>

        <!-- Контент с фармингом -->
        <div class="friend-container">
            <p>Общий баланс:</p>
            <p>Всего билетов:</p>
            <p>Выведено:</p>
        </div>

        <button class="invite-btn" id="farming-btn">Farming<span class="loading-dots"></span></button>

        <div class="icon-fall-container"></div> <!-- Контейнер для падающих собак -->
        
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
            <a href="fortuna.php" class="nav-item">
                <img src="css/dogsimg/icon/РулеткаСер.png" alt="Рулетка" class="nav-icon">
                <span>Рулетка</span>
            </a>
            <a href="friends.php" class="nav-item">
                <img src="css/dogsimg/icon/ДрузьяСер.png" alt="Друзья" class="nav-icon">
                <span>Друзья</span>
            </a>
            <a href="mining.php" class="nav-item active">
                <img src="css/dogsimg/icon/Фарминг.png" alt="Фарминг" class="nav-icon">
                <span>Фарминг</span>
            </a>
        </nav>
    </div>

    <!-- Ваш JavaScript код -->
    <script>
        // JavaScript для фарминга
        const icons = [
            'css/dogsimg/dogs10.webp',
            'css/dogsimg/dogs3.webp',
            'css/dogsimg/dogs5.webp',
            'css/dogsimg/dogs6.webp',
            'css/dogsimg/dogs7.webp',
            'css/dogsimg/dogs8.webp',
            'css/dogsimg/dogs12.webp',
            'css/dogsimg/dogs13.webp'
        ];

        let rainInterval;
        let farmingInProgress = false;
        let dotInterval;
        let dotCount = 0;

        function getRandomInRange(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        function getRandomPosition() {
            const containerWidth = document.querySelector('.icon-fall-container').offsetWidth;
            return Math.floor(Math.random() * containerWidth);
        }

        function getRandomIcon() {
            const randomIndex = Math.floor(Math.random() * icons.length);
            return icons[randomIndex];
        }

        function createFallingIcon() {
            const iconContainer = document.querySelector('.icon-fall-container');
            const icon = document.createElement('img');
            icon.src = getRandomIcon();
            icon.classList.add('icon');
            
            icon.style.left = getRandomPosition() + 'px';
            iconContainer.appendChild(icon);

            // Удаляем иконку после завершения анимации
            setTimeout(() => {
                iconContainer.removeChild(icon);
            }, 5000);
        }

        function startDogRain() {
            if (!farmingInProgress) return;

            const numberOfIcons = getRandomInRange(3, 5);
            for (let i = 0; i < numberOfIcons; i++) {
                setTimeout(createFallingIcon, getRandomInRange(0, 500));
            }
        }

        function updateLoadingDots() {
            const button = document.querySelector('#farming-btn');
            dotCount = (dotCount + 1) % 4; 
            const dots = '.'.repeat(dotCount);
            button.innerHTML = `Farming${dots}`;
        }

        function startFarming() {
            farmingInProgress = true;
            rainInterval = setInterval(startDogRain, 1000);
            dotInterval = setInterval(updateLoadingDots, 1000);
        }

        function stopFarming() {
            farmingInProgress = false;
            clearInterval(rainInterval);
            clearInterval(dotInterval);
        }

        document.querySelector('#farming-btn').addEventListener('click', () => {
            const button = document.querySelector('#farming-btn');
            
            if (farmingInProgress) return;

            if (button.textContent.includes('Забрать DOGS')) {
                button.innerHTML = 'Farming';
                return;
            }

            button.innerHTML = 'Farming';
            startFarming();

            setTimeout(() => {
                stopFarming();
                button.innerHTML = 'Забрать DOGS';
            }, 60000);
        });

        // Проверяем, поддерживается ли Service Worker в браузере
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/service-worker.js')
                    .then((registration) => {
                        console.log('Service Worker зарегистрирован с областью:', registration.scope);
                    })
                    .catch((error) => {
                        console.error('Регистрация Service Worker не удалась:', error);
                    });
            });
        }
    </script>
</body>
</html>
