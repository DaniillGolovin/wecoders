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

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="col-lg-6 col-md-6">
        <div class="our-skill">
            <h2 class="title-1">Skills</h2>
            <div class="progress-list">
                <?php foreach ($arResult['ITEMS'] as $arItems):?>
                    <div class="progress">
                        <div class="lead"><?= $arItems['NAME'] ?? '' ?></div>
                        <?php if (isset($arItems['PROPERTIES']['count_percent']['VALUE'])): ?>
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                 style="width: <?= $arItems['PROPERTIES']['count_percent']['VALUE'] . '%' ?>;">
                                <span><?= $arItems['PROPERTIES']['count_percent']['VALUE'] . '%' ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        </div>
    </div>
<?php endif; ?>