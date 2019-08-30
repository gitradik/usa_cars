<?php require_once 'data.php'; ?>

<div id="comparisonId" class="comparison">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="t" >
                    <h2>Сравните стоимость автомобилей в Украине и США</h2>
                    <h3>Цены на популярные модели, которые мы уже доставили нашим клиентам</h3>
                </div>
            </div>
            <?php
                foreach ($products as $key => $prod):
            ?>
                <div class="col-md-12 pt-5 d-flex justify-content-center align-items-center">
                    <div class="comp-prod" >
                        <div class="comp-prod-img <?php echo $key % 2 == 0 ? 'order-xl-1' : ''; ?>"
                            style="background-image: url('<?php echo $prod->image; ?>')"
                        >
                            <img class="img-fluid d-sm-none" src="<?php echo $prod->image; ?>">
                        </div>
                        <div class="comp-prod-specifications">
                            <div class="comp-prod-name">
                                <p><span><?php echo $prod->name; ?></span> <span><?php echo $prod->price; ?></span></p>
                            </div>
                            <div class="comp-prod-params">
                                <?php
                                $count = 0;
                                    foreach ($prod->params as $key => $param):
                                ?>
                                    <div class="comp-prod-param <?php echo $count++ == (count($prod->params) - 1) ? 'comp-prod-param-last' : '' ?>">
                                        <p><?php echo $key; ?></p>
                                        <p><?php echo $param; ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <button
                                    data-toggle="modal"
                                    data-target="#contactFormModal"
                                    onclick="onClickContactFormModal(
                                           'Заполните данные ниже и получите просчет стоимости и доставки БЕСПЛАТНО',
                                           'contactFormModalTitle',
                                           'Продукт => <?php echo $prod->title; ?>',
                                           'contactFormModalLocationId'
                                       )">
                                Заказать подбор авто
                            </button>
                        </div>

                        <!--<div class="comp-prod-review">
                            <p><?php /*echo $prod->review->name; */?></p>
                            <p><?php /*echo $prod->review->content; */?></p>
                            <p><?php /*echo $prod->review->date; */?></p>
                        </div>-->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
