<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php if (!empty($arResult)): ?>
<div class="col-lg-7 col-md-7 col-sm-12">
    <div class="footer-nav white-text">
        <nav>
            <ul>
                <?php foreach ($arResult as $item): ?>
                <?php if ($item['SELECTED']): ?>
                  <li class="mega-parent">
                    <a href="<?= $item['LINK']?>" style="color: #0fe3d9"><?= $item['TEXT']?></a>
                </li>
                <? else: ?>
                    <li class="mega-parent">
                    <a href="<?= $item['LINK']?>"><?= $item['TEXT']?></a>
                </li>
                <? endif; ?>
                <? endforeach; ?>
            </ul>
        </nav>
    </div>
</div>
<?php endif; ?>