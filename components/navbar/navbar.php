<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/">
        <img src="<?php echo get_template_directory_uri(); ?>/images/invensol-logo.svg" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <!--<li class="nav-item">
                <a class="nav-link smooth-anchor" href="#costCalcId">Подбор авто</a>
            </li>-->
            <li class="nav-item">
                <a class="nav-link smooth-anchor" href="#aboutId">О нас</a>
            </li>
            <li class="nav-item">
                <a class="nav-link smooth-anchor" href="#comparisonId">Сравнить стоимость</a>
            </li>
            <li class="nav-item">
                <a class="nav-link smooth-anchor" href="#footerId">Контакты</a>
            </li>
            <li class="nav-item nav-item-order">
                <a class="nav-link" href="#"
                   data-toggle="modal"
                   data-target="#contactFormModal"
                   onclick="onClickContactFormModal(
                       'Заказать звонок',
                       'contactFormModalTitle',
                       'Шапка => Заказать звонок',
                       'contactFormModalLocationId'
                   )"
                >
                    Заказать звонок
                </a>
            </li>
        </ul>
    </div>
</nav>