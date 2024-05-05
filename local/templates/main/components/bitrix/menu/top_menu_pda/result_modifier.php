<?php
$arPrepItems = [];
if (!empty($arResult)) {
    foreach ($arResult as $items) {
        if ($items['DEPTH_LEVEL'] === 1 ) {
            $arPrepItems[] = $items;
        } else {
            $arPrepItems[end(array_keys($arPrepItems))]['subitems'][] = $items;
        }
    }
}
 $arResult = $arPrepItems;