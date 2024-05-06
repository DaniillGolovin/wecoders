<?php

if (!empty($arResult['DISPLAY_PROPERTIES']['gallery']['VALUE'])) {
    foreach ($arResult['DISPLAY_PROPERTIES']['gallery']['VALUE'] as $key => $photoID) {
        $arPhoto = CFile::GetFileArray($photoID);
        $arResult['DISPLAY_PROPERTIES']['photos'][$key]['src'] = $arPhoto['SRC'];
    }
}