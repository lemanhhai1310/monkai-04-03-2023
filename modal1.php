<?php $data["title"] = "Transaction info"; ?>
<?php $isLogin = true; ?>
<?php $isBack = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
    <div class="uk-container">
        <h2 class="uk-h2 desktop12__title uk-text-center uk-margin-remove">Buy more credits</h2>
        <div class="desktop12__desc uk-text-center item__24-12">Choose a plan that works for you.</div>
        <div class="item__68-40 uk-child-width-1-3@m uk-grid-small uk-grid-32-m uk-grid-match" uk-grid>
            <?php
            $data = array(
                array(
                    'txt1' => '100',
                    'txt2' => '2.99',
                    'txt3' => '0.03',
                ),
                array(
                    'txt1' => '200',
                    'txt2' => '4.99',
                    'txt3' => '0.025',
                ),
                array(
                    'txt1' => '500',
                    'txt2' => '9.99',
                    'txt3' => '0.02',
                ),
                array(
                    'txt1' => '1000',
                    'txt2' => '14.99',
                    'txt3' => '0.015',
                ),
                array(
                    'txt1' => '2000',
                    'txt2' => '29.99',
                    'txt3' => '0.012',
                ),
                array(
                    'txt1' => '10000',
                    'txt2' => '99.99',
                    'txt3' => '0.01',
                ),
            );
            foreach ($data as $k=>$v): ?>
                <div>
                    <div class="uk-card desktop12__card uk-card-body uk-padding-small">
                        <div class="desktop12__card__txt1"><?= $v['txt1'] ?> <img src="images/desktop12/Asset11.png" alt=""></div>
                        <div class="item__16 desktop12__card__txt2"><?= $v['txt2'] ?>$</div>
                        <div class="desktop12__card__txt3">($0.03/ <img src="images/desktop12/electric_bolt.png" alt=""> )</div>
                        <div class="item__24-12">
                            <a href="" class="header__btnLogin uk-width uk-button uk-button-secondary uk-button-small uk-border-rounded"><span>Buy more credit</span></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

<!--Modal Login-->
<div id="modal-modal1" class="desktop3__modal uk-flex-top" uk-modal>
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
            <div class="item__24-12">
                <img class="uk-width" src="images/Card-Front.png" alt="">
            </div>
            <div class="item__24-12 uk-grid uk-grid-12 uk-grid-24-m uk-form-stacked" uk-grid>
                <div class="uk-width">
                    <label class="uk-form-label desktop16__form__label" for="form-stacked-text">Cardholder Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-success desktop16__form__input" id="form-stacked-text" type="text" value="NAME NAME NAME" placeholder="Some text...">
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

                <div class="uk-width uk-grid-8" uk-grid>
                    <div class="uk-width-1-3@s">
                        <label class="uk-form-label desktop16__form__label" for="form-stacked-text">Month</label>
                        <div class="uk-form-controls">
                            <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                                <select aria-label="Custom controls">
                                    <option value="">**</option>
                                    <option value="1">Option 01</option>
                                    <option value="2">Option 02</option>
                                    <option value="3">Option 03</option>
                                    <option value="4">Option 04</option>
                                </select>
                                <button class="desktop16__form__selectBtn uk-form-success uk-width uk-button uk-button-default" type="button" tabindex="-1">
                                    <span></span>
                                    <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@s">
                        <label class="uk-form-label desktop16__form__label" for="form-stacked-text">Year</label>
                        <div class="uk-form-controls">
                            <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                                <select aria-label="Custom controls">
                                    <option value="">****</option>
                                    <option value="1">Option 01</option>
                                    <option value="2">Option 02</option>
                                    <option value="3">Option 03</option>
                                    <option value="4">Option 04</option>
                                </select>
                                <button class="desktop16__form__selectBtn uk-form-success uk-width uk-button uk-button-default" type="button" tabindex="-1">
                                    <span></span>
                                    <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@s">
                        <label class="uk-form-label desktop16__form__label" for="form-stacked-text">CVV</label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width">
                                <a class="uk-form-icon uk-form-icon-flip desktop16__form__icon desktop16__form__icon--info" href="#" uk-icon="icon: eye-slash"></a>
                                <input class="uk-input uk-width uk-form-danger desktop16__form__input" type="password" value="ABCDEFGHILMN" aria-label="Clickable icon">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-grid-small uk-child-width-auto uk-grid">
                    <label class="desktop16__form__check"><input class="uk-checkbox" type="checkbox" checked> Save this card info for future transactions</label>
                </div>
            </div>
            <div class="item__40-20">
                <div uk-grid>
                    <div class="uk-width-expand">
                        <span class="modal1__txt">Total Amount</span>
                    </div>
                    <div class="uk-width-auto">
                        <span class="modal1__price">2.99$</span>
                    </div>
                </div>
                <button class="header__btnLogin item__12 uk-width uk-button uk-button-secondary uk-button-small uk-border-rounded"><span>Check out</span></button>
            </div>
        </div>
    </div>
</div>
<!--/Modal Login-->
<script>
    UIkit.modal('#modal-modal1').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>