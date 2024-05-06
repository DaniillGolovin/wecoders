<?php

if (!empty($arResult['ITEMS'])) {
    foreach ($arResult['ITEMS'] as $item => $value) {
        $res = [];
        if (!empty($value['PROPERTIES']['social']['VALUE'])) {
            foreach ($arResult['ITEMS'][$item]['PROPERTIES']['social']['VALUE'] as $id) {
                $promRes = CIBlockElement::GetByID($id)->GetNextElement()->GetProperties();
                $res[] = $promRes['icon']['VALUE'];
            }
            $arResult['ITEMS'][$item]['PROPERTIES']['social']['icons'] = $res;
        }
    }
}