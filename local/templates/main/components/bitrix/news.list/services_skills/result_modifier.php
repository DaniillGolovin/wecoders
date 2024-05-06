<?php

if (!empty($arResult['ITEMS'])) {
    foreach ($arResult['ITEMS'] as  $arItem) {
        if (isset($arItem['PROPERTIES']['count_percent']['VALUE']) && (strlen($arItem['PROPERTIES']['count_percent']['VALUE']) > 1)) {
            if (($arItem['PROPERTIES']['count_percent']['VALUE'] > 100) && $arItem['PROPERTIES']['count_percent']['VALUE'] !== 100) $arItem['PROPERTIES']['count_percent']['VALUE'] %= 100;
            $arItem['PROPERTIES']['count_percent']['VALUE'] = preg_replace("/[^,.0-9]/", '', $arItem['PROPERTIES']['count_percent']['VALUE']);
        }
    }
}