// Этот код выполнится после полной загрузки HTML
document.addEventListener('DOMContentLoaded', function() {

    // ===== РАБОТА С ТАБАМИ (для страницы меню) =====
    // Находим все кнопки табов и все блоки с контентом
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    // Если на странице есть табы, добавляем им обработчики
    if (tabButtons.length > 0) {
        tabButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Убираем активный класс у всех кнопок
                tabButtons.forEach(function(btn) {
                    btn.classList.remove('active');
                });
                // Убираем активный класс у всех блоков
                tabContents.forEach(function(content) {
                    content.classList.remove('active');
                });

                // Активируем текущую кнопку
                button.classList.add('active');

                // Получаем ID контента из атрибута data-tab
                const tabId = button.getAttribute('data-tab');
                // Находим соответствующий блок по ID и делаем его активным
                const activeTab = document.getElementById(tabId);
                if (activeTab) {
                    activeTab.classList.add('active');
                }
            });
        });
    }

    // ===== РАБОТА С БУРГЕР-МЕНЮ (если есть) =====
    // Находим кнопку бургера и блок навигации
    const burgerBtn = document.getElementById('burgerBtn');
    const nav = document.getElementById('nav');

    // Если оба элемента существуют, добавляем обработчик клика
    if (burgerBtn && nav) {
        burgerBtn.addEventListener('click', function() {
            // Просто переключаем класс 'active' у навигации
            // (предполагается, что в CSS этот класс делает меню видимым)
            nav.classList.toggle('active');
        });
    }

});
document.addEventListener('DOMContentLoaded', function() {
    const slidersData = {
        'slider-building': {
            images: [
                { src: '/images/фасад.jpg', caption: 'Фасад ресторана' },
                { src: '/images/веранда.jpg', caption: 'Веранда' }
            ]
        },
        'slider-interior': {
            images: [
                { src: '/images/интерьер 2.jpg', caption: 'Основной зал' },
                { src: '/images/интерьер 3.jpg', caption: 'Основной зал(вид сбоку)' }
            ]
        },
        'slider-staff': {
            images: [
                { src: '/images/шеф.jpg', caption: 'Кирилл Зайцев, шеф-повар' },
                { src: '/images/шеф.jpg', caption: 'Кирилл Зайцев, управляющий' },
                { src: '/images/шеф.jpg', caption: 'Кирилл Зайцев, сомелье' }
            ]
        },
        'slider-food': {
            images: [
                { src: '/images/Пельмени сбирские.png', caption: 'Пельмени сибирские' },
                { src: '/images/Бефстроганов.jpg', caption: 'Бефстроганов' },
                { src: '/images/блины с икрой.jpg', caption: 'Блины с икрой' },
                { src: '/images/медовик.jpg', caption: 'Медовик' }
            ]
        }
    };

    for (let sliderId in slidersData) {
        const slider = document.getElementById(sliderId);
        if (!slider) continue;

        const data = slidersData[sliderId];
        let currentIndex = 0;
        const img = slider.querySelector('.slider-img');
        const caption = slider.querySelector('.slider-caption');
        const prevBtn = slider.querySelector('.prev');
        const nextBtn = slider.querySelector('.next');
        const dotsContainer = slider.querySelector('.slider-dots');

        // Создаём точки
        data.images.forEach((_, i) => {
            const dot = document.createElement('span');
            dot.className = 'dot';
            dot.addEventListener('click', () => {
                currentIndex = i;
                update();
            });
            dotsContainer.appendChild(dot);
        });

        const dots = dotsContainer.querySelectorAll('.dot');

        function update() {
            img.src = data.images[currentIndex].src;
            img.alt = data.images[currentIndex].caption;
            caption.textContent = data.images[currentIndex].caption;
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === currentIndex);
            });
        }

        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + data.images.length) % data.images.length;
            update();
        });

        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % data.images.length;
            update();
        });

        // Инициализация
        update();
    }

    // Заглушки для отсутствующих изображений
    document.querySelectorAll('.slider-img').forEach(img => {
        img.onerror = function() {
            this.src = 'https://via.placeholder.com/600x400?text=Фото+не+доступно';
        };
    });
});