<!-- Modal -->
<div class="modal fade contact-form-modal" 
     id="contactFormModalSecond" 
     tabindex="-1" 
     role="dialog" 
     aria-labelledby="contactFormModalSecondTitle" 
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactFormModalSecondTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="telegram">
                    <input id="contactFormModalSecondLocationId" type="hidden" name="location">
                    <input name="name" type="text" placeholder="Имя">
                    <input class="input-mask-s" name="phone" type="tel" placeholder="Телефон *" required>
                    <input name="email" type="email" placeholder="Email *" required>
                    <input type="submit" value="Отправить">
                </form>
            </div>
        </div>
    </div>
</div>