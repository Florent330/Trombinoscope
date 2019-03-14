<?php
include '_head.php';
include '_header.php';
?>
<div class="container-fluid">
    <section class="form-container">
        <div class="form-title-box">
            <h2 class="form-title"><span class="form-title-bold"><span class="color-wild">C</span>ontactez</span>-nous</h2>
            <div class="form-underline"></div>
        </div>
        <div class="row justify-content-center">
            <div class="form-box-1 col-12 col-md-5">
                <div class="form-group contact-form-group col-12">
                    <label for="input-name"></label>
                    <input type="text" class="form-control form-box" id="input-name" placeholder="Nom">
                </div>
                <div class="form-group  contact-form-group col-12">
                    <label for="input-mail"></label>
                    <input type="email" class="form-control form-box" id="input-mail" placeholder="Email">
                </div>
                <div class="form-group contact-form-group col-12">
                    <label for="input-phone"></label>
                    <input type="text" class="form-control form-box" id="input-phone" placeholder="Téléphone">
                </div>
                <div class="form-group contact-form-group col-12">
                    <label for="input-subject"></label>
                    <input type="text" class="form-control form-box" id="input-subject" placeholder="Sujet">
                </div>
            </div>
            <div class="form-box-2 col-12 col-md-5">
                <div class="form-group  contact-form-group col-12">
                    <label for="input-text"></label>
                    <textarea class="form-control form-box" id="input-text" rows="5" placeholder="Votre message"></textarea>
                    <button type="submit" class="btn col-12 contact-btn">Envoyer</button>
                </div>
            </div>
            <div class="col-12 form-map">
                <div class="form-map-container col-10 offset-1">
                    <iframe class="form-frame" width="100%" height="100%" src="https://maps.google.com/maps?width=1920&amp;height=1080&amp;hl=en&amp;q=Wild%20Code%20School+(Wild%20Code%20School)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <div class="form-map-title-box"></div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include '_footer.php';
?>
