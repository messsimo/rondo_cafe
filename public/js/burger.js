document.addEventListener('DOMContentLoaded', function() {
    const burger = document.getElementById('burger');
    const card = document.querySelector('.card-burger');

    if (burger && card) {
        burger.addEventListener('click', function() {
            // Переключение видимости элемента
            card.style.display = card.style.display === 'block' ? 'none' : 'block';
        });
    }
});