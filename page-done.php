<div class="done d-flex align-items-center justify-content-center" style="min-height: 100vh; width: 100%">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex flex-column align-items-center justify-content-center">
                <h4
                    style="font-size: 50px; font-weight: 900;"
                >Спасибо за заявку!</h4>
                <p style="font-size: 20px; font-weight: 700;">Наш менеджер свяжется с Вами в течении нескольких минут</p>
            </div>
            <div class="col-md-12 d-flex align-items-center justify-content-center">
                <p>На главную через...</p>
                <p id="timeBackId"></p>
            </div>
        </div>
    </div>
</div>

<script>
    let tCount = 3;
    const timerId = setInterval(() => {
        document.getElementById('timeBackId').innerText = `${tCount--}`;
    }, 1000);
    setTimeout(function() {
        clearInterval(timerId);
        window.location = '/';
    }, 4000);
</script>