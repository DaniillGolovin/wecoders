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
    <section class="testimonial-area bg-color pad-90">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="testimonial-active dots-style">
                        <?php foreach ($arResult['ITEMS'] as $arItem):?>
                            <div class="single-testimonial black-text text-center">
                                <div class="testimonial-title">
                                    <span class="<?= $arItem['PROPERTIES']['icon_feedback']['VALUE'] ?>"></span>
                                    <h3 class="black-text"><?= $arItem['NAME'] ?? '' ?></h3>
                                </div>
                                <p><span>"</span><?= $arItem['PREVIEW_TEXT'] ?? '' ?><span>"</span>
                                </p>
                                <div class="testimonial-author text-uppercase">
                                    <span><?= $arItem['DETAIL_TEXT'] ?? '' ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
