<?php $data["title"] = "Desktop 10"; ?>
<?php $isLogin = true; ?>
<?php $isBack = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-container">
    <h2 class="uk-h2 desktop6__title uk-margin-remove">My creations</h2>
    <div class="item__32-16">
        <?php for ($i=1;$i<=2;$i++): ?>
        <div class="item__16-12 desktop10__box">
            <div class="uk-grid-match uk-grid-small uk-grid-24-m" uk-grid>
                <div class="uk-width-1-3@m">
                    <div class="uk-flex uk-flex-column">
                        <div class="uk-flex-auto">
                            <div class="desktop10__box__txt">prompt1, prompt2, prompt3, prompt4, prompt5, prompt6, prompt7, prompt8, prompt9</div>
                        </div>
                        <div>
                            <span class="desktop8__time">Time ago</span>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-grid uk-grid-8 uk-child-width-1-2 uk-child-width-1-4@m" uk-grid>
                        <?php for ($j=4; $j<=7;$j++): ?>
                        <div>
                            <div class="uk-cover-container desktop10__box__coverImg">
                                <img src="https://picsum.photos/192/192/?random=<?= $i*$j ?>" alt="" uk-cover="">
                                <canvas width="192" height="192"></canvas>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>