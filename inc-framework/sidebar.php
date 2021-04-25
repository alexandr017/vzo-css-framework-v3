<div class="vzo-ux-framework-head-line">
    <span id="vzo-ux-framework-switch" class="vzo-ux-framework-switch">&#9776; Тыц-тыц</span>
    <span class="vzo-ux-framework-head-line-right">(MODE ==> <?php echo $mode ?>) ВЗО UX Framework ©</span>
</div>

<div id="vzo-ux-framework-menu" class="vzo-ux-framework-menu">
    <h3 class="vzo-ux-framework-section-title">Примитивное</h3>
    <a href="/" class="vzo-ux-framework-link">Шрифты</a>

    <h3 class="vzo-ux-framework-section-title">Универсальные классы</h3>
    <a href="/" class="vzo-ux-framework-link">Цвета</a>
    <a href="/" class="vzo-ux-framework-link">Тени</a>
    <a href="/" class="vzo-ux-framework-link">Обводки</a>
    <a href="/?module=titles" class="vzo-ux-framework-link">Заголовки</a>

    <h3 class="vzo-ux-framework-section-title">Компоненты (CSS)</h3>
    <a href="/?module=buttons" class="vzo-ux-framework-link">Кнопки</a>
    <a href="/?module=messages" class="vzo-ux-framework-link">Сообщения</a>
    <a href="/?module=tables" class="vzo-ux-framework-link">Таблицы</a>
    <a href="/" class="vzo-ux-framework-link">Фейс-блок</a>
    <a href="/" class="vzo-ux-framework-link">Карточка (займы)</a>
    <div class="vzo-ux-framework-header"></div>

    <h3 class="vzo-ux-framework-section-title">Блоки</h3>
    <a href="/" class="vzo-ux-framework-link">Шапка</a>
    <a href="/" class="vzo-ux-framework-link">Подвал</a>
    <a href="/" class="vzo-ux-framework-link">Сайдбар</a>

    <h3 class="vzo-ux-framework-section-title">Интерактивные (JS)</h3>
    <a href="/" class="vzo-ux-framework-link">куаука</a>
    <div class="vzo-ux-framework-header"></div>

    <h3 class="vzo-ux-framework-section-title">Шорткоды</h3>
    <a href="/" class="vzo-ux-framework-link">Аккардеоны</a>
    <div class="vzo-ux-framework-header"></div>

</div>


<style>
    .vzo-ux-framework-head-line{height: 33px;position: fixed;top: 0;left: 0;z-index: 2;width: 100%;background-color: #415A65; background-image: linear-gradient(145deg, #3D474B, #0B49B1);border-bottom: 1px solid #6B7073; color: #fff}
    .vzo-ux-framework-menu{top: 20px;width: 220px;min-height: 100%; padding-top: 10px;height: 100%;position: fixed;background-color: #415A65; background-image: linear-gradient(145deg, #3D474B, #0B49B1); overflow-y: auto;left: -220px; transition: left, 0.5s}
    .vzo-ux-framework-menu.vzo-ux-framework-menu-active{left: 0;}
    .vzo-ux-framework-switch{margin: 9px 20px; cursor: pointer;}
    .vzo-ux-framework-head-line-right{float: right;margin-right: 20px; margin-top: 3px;}
    .vzo-ux-framework-menu a{color: #fff;text-decoration: none; display: block; padding: 5px 5px 5px 20px;}
    .vzo-ux-framework-menu a:hover {text-decoration: underline;}
    .vzo-ux-framework-header {border-bottom: 1px solid #6B7073;padding: 6px 0 6px 20px;background-size: 32px;}
    .vzo-ux-framework-section-title {text-transform: uppercase;color: #85888d;font-weight: 200;font-size: 13px;letter-spacing: 1px;margin:15px;}
    .vzo-ux-framework-section-list a {display: block; padding: 6px 20px;}
    .vzo-ux-framework-section-list a:hover {background-color: rgba(255, 255, 255, 0.1);text-decoration: none;}
</style>

<script>
    let menuBtn = document.getElementById('vzo-ux-framework-switch');
    menuBtn.addEventListener( "click" , () => {
        document.getElementById('vzo-ux-framework-menu').classList.toggle('vzo-ux-framework-menu-active');
    });
</script>
