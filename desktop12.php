<?php $data["title"] = "Desktop 12"; ?>
<?php $isLogin = true; ?>
<?php $isBack = true; ?>
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
<?php require "template-parts/layouts/footer.php"; ?>