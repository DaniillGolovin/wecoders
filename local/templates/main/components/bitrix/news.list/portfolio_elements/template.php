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

<?php if (!empty($arResult['ITEMS'])): ?>
    <div id="Container">
        <?php foreach ($arResult['ITEMS'] as $arItems):?>
            <div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix <?= $arItems['SECTIONS_CODES'] ?? '' ?>">
                <div class="portfolio-wrapper portfolio-title">
                    <div class="portfolio-img">
                        <?php if (isset($arItems['PREVIEW_PICTURE']['SRC'])): ?>
                            <img src="<?= $arItems['PREVIEW_PICTURE']['SRC'] ?>"
                                 alt="<?= $arItems['PREVIEW_PICTURE']['ALT'] ?>"/>
                            <div class="work-text brand-bg">
                                <div class="inner-text">
                                    <a class="view-portfolio image-link" href="<?= $arItems['PREVIEW_PICTURE']['SRC'] ?>">
                                        <span class="plus"></span>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="portfolio-heading pd-15">
                        <h4 class="mb-10">
                            <a href="<?= $arItems['DETAIL_PAGE_URL'] ?>">
                                <?= $arItems['NAME'] ?? '' ?>
                            </a>
                        </h4>
                        <h5 class="m-0"><?= $arItems['PREVIEW_TEXT'] ?? '' ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

