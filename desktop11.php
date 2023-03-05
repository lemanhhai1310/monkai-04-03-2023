<?php $data["title"] = "Desktop 11"; ?>
<?php $isLogin = false; ?>
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
<div id="modal-desktop11" class="desktop3__modal uk-flex-top" uk-modal>
    <div class="uk-modal-dialog desktop3__modal__dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div>
            <div class="uk-text-center desktop11__title">Insufficient Credit</div>
            <div class="item__32-16">
                <img src="images/desktop11/GIF31.png" alt="">
            </div>
            <div class="uk-text-center item__32-16 desktop11__desc">You are so out of credit right now, my friend.
                Buy more credit to keep creating finest arts
                made by our powerful AI Art Generator.
                Or wait until your next free daily credits</div>
            <button class="header__btnLogin item__24-12 uk-width uk-button uk-button-secondary uk-button-small uk-border-rounded"><span>Buy more credit</span></button>
        </div>
    </div>
</div>
<!--/Modal Login-->
<script>
    UIkit.modal('#modal-desktop11').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>