<?php require_once 'data.php'; ?>

<div id="costCalcId" class="cost-calc">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <div class="cost-calc-text">
                    <div class="t">
                        <h2>Вы в поиске хорошего автомобиля

                            по выгодной цене?</h2>
                        <p>Заполните анкету<br>

                            и получите просчет стоимость и сроков доставки<br>

                            в течении 15 мин</p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/right.svg" alt="right">
                </div>
            </div>
            <div class="col-lg-6 py-3 d-flex justify-content-center align-items-center cost-col">

                <form style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/CFRAutoDirect.png');
                    background-position: center; background-size: cover; background-repeat: no-repeat"> <!--TODO drop downs menu php with js-->

                    <input type="hidden" name="location" value="Второй скролл => Вы в поиске хорошего автомобиля по выгодной цене?">
                    <div class="input-box p-0">
                        <div class="input-box ml-0 pl-0">
                            <p style="min-width: 79px">Бюджет <span>от</span></p>
                            <input type="number" value="0">
                            <p>$</p>
                        </div>
                        <div class="input-box mr-0 pr-0">
                            <p><span>до</span></p>
                            <input type="number" value="0">
                            <p>$</p>
                        </div>
                    </div>
                    <div class="input-box mb-3">
                        <p>Марка авто</p>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle cost-calc-btn-text"
                                    type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Выбрать
                            </button>
                            <div class="dropdown-menu" aria-labelledby="costCalcDropdownMenu">
                                <?php
                                    foreach ($cost_calc->marsk as $key => $value):
                                ?>
                                    <div data-value="<?php echo json_encode($cost_calc->models[$key]); ?>" style="cursor: pointer" onclick="onClickMark('<?php echo $key; ?>', '<?php echo $value; ?>', 0)"
                                       class="dropdown-item cost-calc-drop-down-item" ><?php echo $value; ?></div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="input-box mb-3 cost-input-box">
                        <div class="input-box">
                            <p>Модель</p>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle cost-calc-btn-text"
                                        type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Выбрать
                                </button>
                                <div class="dropdown-menu" aria-labelledby="costCalcDropdownMenu">
                                    <?php
                                    foreach ($cost_calc->models[0] as $key => $value):
                                        ?>
                                        <div style="cursor: pointer" onclick="onClickMark('<?php echo $key; ?>', '<?php echo $value; ?>', 1)"
                                             class="dropdown-item" ><?php echo $value; ?></div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="input-box">
                            <p>Год</p>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle cost-calc-btn-text"
                                        type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Выбрать
                                </button>
                                <div class="dropdown-menu" aria-labelledby="costCalcDropdownMenu">
                                    <?php
                                        foreach ($cost_calc->years[0] as $key => $value):
                                            ?>
                                        <div style="cursor: pointer" onclick="onClickMark('<?php echo $key; ?>', '<?php echo $value; ?>', 2)"
                                             class="dropdown-item" ><?php echo $value; ?></div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input name="name" type="text" placeholder="Имя">
                    <input class="input-mask-s" name="phone" type="tel" placeholder="Телефон *" required>
                    <input type="submit" value="Получить">
                </form>
            </div>
        </div>
    </div>
</div>
