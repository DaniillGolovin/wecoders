<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult['ITEMS'])): ?>
    <section id="pricing" class="pricing-area bg-color pt-60 pb-60">
        <div class="container">
            <div class="row">
                    <div class="section-heading text-center mb-70">
                        <h2>Разработка сайта</h2>
                        <p>Какой сайт вам нужен? Выбирайте, оставляйте заявку в форме ниже и мы свяжемся с вами!</p>
                    </div>
            </div>
            <div class="row">
                <?php foreach ($arResult['ITEMS'] as $arItems):?>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single-pricing text-center mb-30">
                            <div class="pricing-head">
                                <h2 class="pricing-title text-uppercase"><?=  $arItems['NAME'] ?? '' ?></h2>
                                <span><?=  $arItems['PREVIEW_TEXT'] ?? '' ?></span>
                            </div>
                            <div class="pricing-plan-price <?= $arItems['PROPERTIES']['span']['VALUE'] ?? '' ?>">
                                <span><span>от </span><?=  $arItems['DETAIL_TEXT'] ?? '' ?><span> ₽</span></span>
                            </div>
                            <div class="pricing-plan-list">
                                <ul>
                                    <?php foreach ($arItems['PROPERTIES']['add_info']['VALUE'] as $addInfoValues):?>
                                        <li><?= $addInfoValues ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="get-started">
                                <a href="<?= $arItems['DETAIL_PAGE_URL'] ?? '' ?>" class="btn <?= $arItems['PROPERTIES']['span']['VALUE'] ?? '' ?>">Узнать больше</a>
                            </div>
                        </div>
                    </div>
                 <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>