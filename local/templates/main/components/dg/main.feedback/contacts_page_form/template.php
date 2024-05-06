<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<div class="col-md-8">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <?php if (!empty($arResult["ERROR_MESSAGE"])): ?>
                <?php foreach ($arResult["ERROR_MESSAGE"] as $error):?>
                    <span class="text-danger"><?= $error ?></span><br>
                <?php endforeach; ?>
            <?php elseif(!empty($arResult["OK_MESSAGE"])): ?>
                <span class="text-success"><?= $arResult["OK_MESSAGE"] ?></span><br>
            <?php endif; ?>
        </div>
    </div>
    <br>
    <div class="row">
        <form id="default-form" class="default-form" action="<?= POST_FORM_ACTION_URI ?>" method="POST">
            <?= bitrix_sessid_post() ?>

            <div class="col-md-4 col-sm-6">
                <input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" placeholder="Имя"/>
            </div>
            <div class="col-md-4 col-sm-6">
                <input type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>" placeholder="Email"/>
            </div>
            <div class="col-md-4 col-sm-12">
                <input type="text" name="user_phone" value="<?=$arResult["AUTHOR_PHONE"]?>" placeholder="Телефон"/>
            </div>

            <div class="col-md-12 col-sm-12">
                <textarea name="MESSAGE" cols="30" rows="10"  placeholder="Сообщение"></textarea>
                <input type="submit" class="btn mt-30" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">
            </div>
            <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
        </form>
    </div>
</div>
