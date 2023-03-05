<?php $data["title"] = "Desktop 16"; ?>
<?php $isLogin = true; ?>
<?php $isBack = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-container">
    <div class="uk-text-center">
        <figure class="uk-margin-remove"><a href=""><img class="desktop1__logo" src="images/logo.png" alt=""></a></figure>
        <div class="item__16 desktop1__desc">Create amazing artworks in seconds
            using the power of Artificial Intelligence <br class="uk-visible@m">
            Try it now!</div>
    </div>
    <div class="item__68 uk-child-width-auto uk-flex-center" uk-grid>
        <div class="desktop1__width">
            <form class="uk-form-stacked">
                <div class="uk-margin">
                    <label class="uk-form-label desktop1__form__label uk-text-center@m" for="form-stacked-text">Describe what you want to see</label>
                    <div class="uk-form-controls">
                        <textarea class="desktop1__form__textarea uk-textarea uk-text-center@m uk-border-rounded" rows="4" placeholder="A steampunk monkey vending machine" aria-label="Textarea"></textarea>
                    </div>
                </div>
                <div class="item__16-12 uk-child-width-auto@s uk-flex-center uk-grid-8" uk-grid uk-toggle="cls: uk-child-width-expand; mode: media; media: (max-width: 639.8px)">
                    <div class="">
                        <a href="" class="desktop1__btn desktop1__btn--c1 uk-border-rounded uk-button uk-button-secondary uk-button-small"><div>Generate (1 <img src="images/Asset11.png" alt="">)</div></a>
                    </div>
                    <div class="">
                        <a href="" class="desktop1__btn desktop1__btn--c2 uk-border-rounded uk-button uk-button-default uk-button-small"><div><img class="uk-margin-small-right" src="images/casino.png" alt="">Random</div></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Modal Login-->
<div id="modal-desktop16" class="desktop3__modal uk-flex-top" uk-modal>
    <div class="uk-modal-dialog desktop3__modal__dialog desktop16__dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div>
            <div class="uk-text-center desktop11__title">Payment details</div>
            <div class="item__24-12 desktop16__info uk-padding-small">
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <div class="header__pay">100 <img src="images/Asset11.png" alt=""></div>
                    </div>
                    <div class="uk-width-auto">
                        <div class="desktop16__info__price">2.99$</div>
                        <div class="desktop16__info__time">10/2/2023</div>
                    </div>
                </div>
            </div>
            <div class="item__32-16 uk-grid uk-grid-12 uk-form-stacked" uk-grid>
                <div class="uk-width">
                    <label class="uk-form-label desktop16__form__label" for="form-stacked-text">Transaction ID</label>
                    <div class="uk-form-controls">
                        <div class="uk-inline uk-width">
                            <a class="uk-form-icon uk-form-icon-flip desktop16__form__icon desktop16__form__icon--copy" href="#" uk-icon="icon: link" uk-tooltip="Copy to Clipboard"></a>
                            <input class="uk-input uk-width desktop16__form__input" type="text" value="ABCDEFGHILMN" aria-label="Clickable icon">
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label desktop16__form__label" for="form-stacked-text">Status</label>
                    <div class="uk-form-controls">
                        <input class="uk-input desktop16__form__input uk-text-success" id="form-stacked-text" type="text" value="Success" placeholder="Some text...">
                    </div>
                </div>
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label desktop16__form__label" for="form-stacked-text">Payment Method</label>
                    <div class="uk-form-controls">
                        <input class="uk-input desktop16__form__input desktop16__form__input--paymethod uk-background-norepeat uk-background-center-right" id="form-stacked-text" type="text" value="Visa" placeholder="Some text..." data-src="images/desktop16/visa.png" uk-img>
                    </div>
                </div>
                <div class="uk-width">
                    <label class="uk-form-label desktop16__form__label" for="form-stacked-text">Cardholder Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input desktop16__form__input" id="form-stacked-text" type="text" value="NAME NAME NAME" placeholder="Some text...">
                    </div>
                </div>
                <div class="uk-width">
                    <label class="uk-form-label desktop16__form__label" for="form-stacked-text">Card Number</label>
                    <div class="uk-form-controls">
                        <div class="uk-inline uk-width">
                            <a class="uk-form-icon uk-form-icon-flip desktop16__form__icon desktop16__form__icon--pass" href="#" uk-icon="icon: eye-slash"></a>
                            <input class="uk-input uk-width desktop16__form__input" type="password" value="ABCDEFGHILMN" aria-label="Clickable icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Modal Login-->
<script>
    UIkit.modal('#modal-desktop16').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>