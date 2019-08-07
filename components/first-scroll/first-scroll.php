

<div id="firstScrollId" class="first-scroll" style="background-image: url('<?= get_template_directory_uri()?>/images/back-first-scroll.jpg')">
    <div id="firstScrollBgId" class="bg-img"></div>
    <div class="bg"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="t mx-auto"  data-aos-duration="1000">
                    <h1>Автомобили из США "Под Ключ"</h1>
                    <h2>Выполним все виды услуг от выбора марки до постановки автомобиля на украинские номера!</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="fs-order"  data-aos-duration="1000">
                    <h4>Подберем автомобиль под Ваш Бюджет</h4>
                    <button
                            data-toggle="modal"
                            data-target="#contactFormModal"
                            onclick="onClickContactFormModal(
                           'Получить консультацию',
                           'contactFormModalTitle',
                           'Первый скролл => Получить консультацию',
                           'contactFormModalLocationId'
                       )"
                    >
                        Получить консультацию
                    </button>
                </div>
            </div>
        </div>
    </div>
    <a href="#costCalcId"
       class="btn-down smooth-anchor" >
        <img src="<?php echo get_template_directory_uri(); ?>/images/thin-arrowheads-pointing-down.svg" alt="down">
    </a>
</div>

<!--<script type="text/javascript">
    setPathToImage('<?php /*echo get_template_directory_uri(); */?>');
</script>-->