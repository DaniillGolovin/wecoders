<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)): ?>
    <div class="header-main-menu hidden-xs">
        <nav id="primary-menu">
            <ul class="main-menu text-right">
                <?php foreach ($arResult as $item): ?>
                    <li>
                        <a href="<?= $item['LINK'] ?>" <?= $item["SELECTED"] ? 'style="color: #c282cd"' : '' ?>>
                            <?= $item['TEXT']?>
                            <?php if (!empty($item['subitems'])): ?>
                                <span class="indicator"><i class="fa fa-angle-down"></i></span>
                            <?php endif; ?>
                        </a>
                        <?php if (!empty($item['subitems'])): ?>
                            <ul class="dropdown">
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
<?php endif; ?>