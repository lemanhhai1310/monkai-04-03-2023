<?php $data["title"] = "Desktop 4"; ?>
<?php $isLogin = true; ?>
<?php $isBack = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-container">
    <div class="uk-grid-12 uk-grid-68-m" uk-grid>
        <div class="uk-width-expand">
            <div class="uk-grid uk-grid-8 uk-child-width-1-2" uk-grid>
                <div class="uk-hidden@m uk-width">
                    <textarea class="desktop1__form__textarea uk-textarea uk-text-center@m uk-border-rounded" rows="3" placeholder="" aria-label="Textarea">prompt1, prompt2, prompt3, prompt4, prompt5, prompt6, prompt7, prompt8, prompt9</textarea>
                </div>
                <?php
                $data = array(
                    'images/desktop4/img1.png',
                    'images/desktop4/img2.png',
                    'images/desktop4/img3.png',
                    'images/desktop4/img4.png',
                );
                foreach ($data as $k=>$v): ?>
                <div>
                    <div class="desktop4__cover uk-cover-container">
                        <img src="<?= $v ?>" alt="" uk-cover="">
                        <canvas width="804" height="804"></canvas>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="uk-width-auto@m desktop4__width uk-flex-first@m">
            <div class="uk-grid uk-grid-24 uk-child-width" uk-grid>
                <div class="">
                    <div class="uk-grid uk-grid-16 uk-child-width" uk-grid>
                        <div class="uk-visible@m">
                            <div class="uk-grid uk-flex-middle uk-flex-between" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="uk-cover-container uk-border-circle desktop4__back">
                                        <svg class="uk-position-center" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0_50_47" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                <rect width="24" height="24" fill="#D9D9D9"/>
                                            </mask>
                                            <g mask="url(#mask0_50_47)">
                                                <path d="M10.875 19.3L4.275 12.7C4.175 12.6 4.10417 12.4917 4.0625 12.375C4.02083 12.2583 4 12.1333 4 12C4 11.8667 4.02083 11.7417 4.0625 11.625C4.10417 11.5083 4.175 11.4 4.275 11.3L10.875 4.69999C11.0583 4.51665 11.2875 4.42082 11.5625 4.41249C11.8375 4.40415 12.075 4.49999 12.275 4.69999C12.475 4.88332 12.5792 5.11249 12.5875 5.38749C12.5958 5.66249 12.5 5.89999 12.3 6.09999L7.4 11H18.575C18.8583 11 19.0958 11.0958 19.2875 11.2875C19.4792 11.4792 19.575 11.7167 19.575 12C19.575 12.2833 19.4792 12.5208 19.2875 12.7125C19.0958 12.9042 18.8583 13 18.575 13H7.4L12.3 17.9C12.4833 18.0833 12.5792 18.3167 12.5875 18.6C12.5958 18.8833 12.5 19.1167 12.3 19.3C12.1167 19.5 11.8833 19.6 11.6 19.6C11.3167 19.6 11.075 19.5 10.875 19.3Z" fill="#D9D9D9"/>
                                            </g>
                                        </svg>
                                        <canvas width="40" height="40"></canvas>
                                        <a href="" class="uk-position-cover"></a>
                                    </div>
                                </div>
                                <div class="uk-width-auto">
                                    <?php require "template-parts/layouts/icon.php"; ?>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <textarea class="desktop1__form__textarea uk-textarea uk-border-rounded" rows="3" placeholder="" aria-label="Textarea">prompt1, prompt2, prompt3, prompt4, prompt5, prompt6, prompt7, prompt8, prompt9</textarea>
                        </div>
                        <div>
                            <div class="uk-grid uk-grid-8" uk-grid>
                                <?php for ($i=1;$i<=4;$i++): ?>
                                    <div class="uk-width-1-4">
                                        <a href="" class="desktop1__btn width uk-width desktop1__btn--c2 uk-border-rounded uk-button uk-button-default uk-button-small">
                                            u<?= $i ?>
                                            <span>(1<img src="images/desktop4/electric_bolt.png" alt="">)</span>
                                        </a>
                                    </div>
                                <?php endfor; ?>
                                <div class="uk-width">
                                    <a href="" class="desktop1__btn uk-spinner uk-width desktop1__btn--c2 uk-border-rounded uk-button uk-button-default uk-button-small">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0_5_971" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                <rect width="24" height="24" fill="#D9D9D9"/>
                                            </mask>
                                            <g mask="url(#mask0_5_971)">
                                                <path d="M11.6249 20C9.39161 20 7.49161 19.225 5.92494 17.675C4.35827 16.125 3.57494 14.2333 3.57494 12V11.825L2.67494 12.725C2.49161 12.9083 2.25827 13 1.97494 13C1.69161 13 1.45827 12.9083 1.27494 12.725C1.09161 12.5417 0.999939 12.3083 0.999939 12.025C0.999939 11.7417 1.09161 11.5083 1.27494 11.325L3.87494 8.725C3.97494 8.625 4.08327 8.55417 4.19994 8.5125C4.31661 8.47083 4.44161 8.45 4.57494 8.45C4.70827 8.45 4.83327 8.47083 4.94994 8.5125C5.06661 8.55417 5.17494 8.625 5.27494 8.725L7.87494 11.325C8.05827 11.5083 8.14994 11.7417 8.14994 12.025C8.14994 12.3083 8.05827 12.5417 7.87494 12.725C7.69161 12.9083 7.45827 13 7.17494 13C6.89161 13 6.65827 12.9083 6.47494 12.725L5.57494 11.825V12C5.57494 13.6667 6.16244 15.0833 7.33744 16.25C8.51244 17.4167 9.94161 18 11.6249 18C11.9583 18 12.2833 17.9708 12.5999 17.9125C12.9166 17.8542 13.2333 17.7667 13.5499 17.65C13.7166 17.5833 13.8958 17.5667 14.0874 17.6C14.2791 17.6333 14.4416 17.7167 14.5749 17.85C14.8749 18.15 14.9958 18.4708 14.9374 18.8125C14.8791 19.1542 14.6583 19.3917 14.2749 19.525C13.8416 19.675 13.4041 19.7917 12.9624 19.875C12.5208 19.9583 12.0749 20 11.6249 20ZM18.5749 15.55C18.4416 15.55 18.3166 15.5292 18.1999 15.4875C18.0833 15.4458 17.9749 15.375 17.8749 15.275L15.2749 12.675C15.0916 12.4917 14.9999 12.2583 14.9999 11.975C14.9999 11.6917 15.0916 11.4583 15.2749 11.275C15.4583 11.0917 15.6916 11 15.9749 11C16.2583 11 16.4916 11.0917 16.6749 11.275L17.5749 12.175V12C17.5749 10.3333 16.9874 8.91667 15.8124 7.75C14.6374 6.58333 13.2083 6 11.5249 6C11.1916 6 10.8666 6.02917 10.5499 6.0875C10.2333 6.14583 9.91661 6.23333 9.59994 6.35C9.43327 6.41667 9.25411 6.43333 9.06244 6.4C8.87077 6.36667 8.70827 6.28333 8.57494 6.15C8.27494 5.85 8.15411 5.52917 8.21244 5.1875C8.27077 4.84583 8.49161 4.60833 8.87494 4.475C9.30827 4.325 9.74577 4.20833 10.1874 4.125C10.6291 4.04167 11.0749 4 11.5249 4C13.7583 4 15.6583 4.775 17.2249 6.325C18.7916 7.875 19.5749 9.76667 19.5749 12V12.175L20.4749 11.275C20.6583 11.0917 20.8916 11 21.1749 11C21.4583 11 21.6916 11.0917 21.8749 11.275C22.0583 11.4583 22.1499 11.6917 22.1499 11.975C22.1499 12.2583 22.0583 12.4917 21.8749 12.675L19.2749 15.275C19.1749 15.375 19.0666 15.4458 18.9499 15.4875C18.8333 15.5292 18.7083 15.55 18.5749 15.55Z" fill="white"/>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="uk-grid uk-child-width-expand uk-grid-18" uk-grid>
                        <label>
                            <input class="uk-checkbox desktop4__check uk-hidden" type="checkbox">
                            <div class="desktop4__gridCheck uk-grid-8 uk-grid uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="desktop4__boxCheck uk-border-pill"></div>
                                </div>
                                <div class="uk-width-expand uk-text-center">
                                    <div class="desktop4__boxCheck__txt1 uk-text-nowrap">cpu instance</div>
                                    <div class="desktop4__boxCheck__txt2">(1<img src="images/desktop4/electric_bolt.png" alt="">)</div>
                                </div>
                            </div>
                        </label>
                        <label>
                            <input class="uk-checkbox desktop4__check uk-hidden" type="checkbox">
                            <div class="desktop4__gridCheck uk-grid-8 uk-grid uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="desktop4__boxCheck uk-border-pill"></div>
                                </div>
                                <div class="uk-width-expand uk-text-center">
                                    <div class="desktop4__boxCheck__txt1 uk-text-nowrap">gpu instance</div>
                                    <div class="desktop4__boxCheck__txt2">(1<img src="images/desktop4/electric_bolt.png" alt="">)</div>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="uk-hidden@m">
                    <?php require "template-parts/layouts/icon.php"; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>