<?php $data["title"] = "Desktop 14"; ?>
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
<div id="modal-desktop14" class="desktop3__modal uk-flex-top" uk-modal>
    <div class="uk-modal-dialog desktop3__modal__dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-text-center">
            <div class="header__pay">100 <img src="images/Asset11.png" alt=""></div>
        </div>
        <div class="item__32-16 uk-text-center">
            <div class="uk-cover-container uk-border-circle uk-margin-auto uk-flex-inline">
                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                <canvas width="120" height="120"></canvas>
            </div>
            <div class="item__12 desktop14__name">NAME NAME</div>
            <div class="item__4 desktop14__email">abcd.zyx@mail.com</div>
        </div>
        <div class="item__32-16">
            <button class="header__btnLogin uk-width uk-button uk-button-secondary uk-button-small uk-border-rounded"><span>Buy more credit</span></button>
            <button class="desktop14__btn desktop14__btn--c1 desktop14__btn--pay item__12 uk-button uk-width uk-text-left uk-button-default uk-button-small uk-border-rounded"><span>Payment history</span></button>
            <button class="desktop14__btn desktop14__btn--c1 desktop14__btn--setting item__12 uk-button uk-width uk-text-left uk-button-default uk-button-small uk-border-rounded"><span>setting</span></button>
        </div>
        <div class="item__40-20">
            <button class="desktop14__btn desktop14__btn--c2 uk-button uk-width uk-button-secondary uk-button-small uk-border-rounded"><span>log out</span></button>
        </div>
    </div>
</div>
<!--/Modal Login-->
<script>
    UIkit.modal('#modal-desktop14').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>