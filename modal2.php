<?php $data["title"] = "Transaction info"; ?>
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
<div id="modal-modal2" class="desktop3__modal uk-flex-top" uk-modal>
    <div class="uk-modal-dialog desktop3__modal__dialog desktop16__dialog uk-modal-body uk-margin-auto-vertical">
        <a href="" class="modal1__back">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_12_2170" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                    <rect width="24" height="24" fill="#D9D9D9"/>
                </mask>
                <g mask="url(#mask0_12_2170)">
                    <path d="M12 20L4 12L12 4L13.425 5.4L7.825 11H20V13H7.825L13.425 18.6L12 20Z" fill="#D9D9D9"/>
                </g>
            </svg>
        </a>
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div>
            <div class="uk-text-center desktop11__title">Transaction info</div>
            <div class="item__24-12 uk-text-center">
                <img src="images/Card-Frontqr.png" alt="">
            </div>
            <div class="item__24-12 uk-grid uk-grid-12 uk-grid-24-m uk-form-stacked" uk-grid>
                <div class="uk-width">
                    <label class="uk-form-label desktop16__form__label" for="form-stacked-text">Chain</label>
                    <div class="uk-form-controls">
                        <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                            <select aria-label="Custom controls">
                                <option value="">BSC (BEP-20)</option>
                                <option value="1">Option 01</option>
                                <option value="2">Option 02</option>
                                <option value="3">Option 03</option>
                                <option value="4">Option 04</option>
                            </select>
                            <button class="desktop16__form__selectBtn uk-width uk-button uk-button-default" type="button" tabindex="-1">
                                <span></span>
                                <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="uk-width">
                    <label class="uk-form-label desktop16__form__label" for="form-stacked-text">Wallet Address</label>
                    <div class="uk-form-controls">
                        <div class="uk-inline uk-width">
                            <a class="uk-form-icon uk-form-icon-flip desktop16__form__icon desktop16__form__icon--copy" href="#" uk-icon="icon: eye-slash"></a>
                            <input hidden="" class="uk-input uk-width desktop16__form__input" disabled type="text" value="0x65605dDCab0306dCce511Ca4e1242D6689099999" aria-label="Clickable icon">
                            <textarea class="uk-textarea desktop16__form__textarea" rows="2" placeholder="Textarea" aria-label="Textarea">0x65605dDCab0306dCce511Ca4e1242D6689099999</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Modal Login-->
<script>
    UIkit.modal('#modal-modal2').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>