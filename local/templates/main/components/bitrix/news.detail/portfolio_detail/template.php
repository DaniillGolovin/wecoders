<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<?php if (!empty($arResult['DISPLAY_PROPERTIES'])): ?>
    <div class="single-portfolio-area pt-90 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="portfolio-details">
                        <h3><?= $arResult['PROPERTIES']['detail_title']['VALUE'] ?? '' ?></h3>
                        <?php if (!empty($arResult['PROPERTIES']['description']['VALUE'])): ?>
                            <?php foreach ($arResult['PROPERTIES']['description']['VALUE'] as $keyValue => $propItems):?>
                                <?php if (!empty($arResult['PROPERTIES']['description']['VALUE'][$keyValue])): ?>
                                    <span class="text-colort-blue">
                                        <?= $arResult['PROPERTIES']['description']['DESCRIPTION'][$keyValue] ?>
                                    </span>
                                <?php endif; ?>
                                <p><?= $propItems['TEXT'] ?></p>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="portfolio-meta">
                        <?php if (!empty($arResult['PROPERTIES']['add_info'])): ?>
                            <?php foreach ($arResult['PROPERTIES']['add_info']['VALUE'] as $propKey => $propValue):?>
                                <ul>
                                    <li>
                                        <span><b><?= $propValue ?></b></span>
                                        <?= $arResult['PROPERTIES']['add_info']['DESCRIPTION'][$propKey] ?>
                                    </li>
                                </ul>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if (!empty($arResult['PROPERTIES']['link']['VALUE'])): ?>
                            <a href="/contacts" class="btn mt-30"><?= $arResult['PROPERTIES']['link']['VALUE'] ?? '' ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Фотогалерея -->
    <?php if (!empty($arResult['DISPLAY_PROPERTIES']['gallery']['VALUE'])): ?>
        <div class="img-gallery-area pt-30 pb-60">
            <div class="container">
                <div class="row">
                    <?php foreach ($arResult['DISPLAY_PROPERTIES']['photos'] as $photo):?>
                    <div class="col-md-6 col-sm-4">
                        <div class="img-gallery hover-bg-opacity mb-30">
                            <a class="image-link" href="<?= $photo['src'] ?? '' ?>">
                                <img src="<?= $photo['src'] ?? '' ?>" alt="" /></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php else: ?>
    <div class="single-portfolio-area pt-90 pb-60">
        Элемент не найден
    </div>
<?php endif; ?>
