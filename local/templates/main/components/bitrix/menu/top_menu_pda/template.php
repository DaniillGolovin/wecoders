<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)): ?>
<div class="mobile-menu-area visible-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <?php foreach ($arResult as $item): ?>
                                <li>
                                    <a href="<?= $item['LINK'] ?>" <?= $item["SELECTED"] ? 'style="color: #c282cd"' : '' ?>>
                                        <?= $item['TEXT']?>
                                    </a>
                                    <?php if (!empty($item['subitems'])): ?>
                                        <ul>
                                            <?php foreach ($item['subitems'] as $subitem):?>
                                                <li>
                                                    <a href="<?= $subitem['LINK'] ?>"><?= $subitem['TEXT']?></a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>