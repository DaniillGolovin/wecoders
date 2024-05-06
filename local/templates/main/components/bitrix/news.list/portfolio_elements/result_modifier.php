<?php

if (!empty($arResult['ITEMS'])) {
    $arElementsIds = [];
    foreach ($arResult['ITEMS'] as  $arItem) {
        if (isset($arItem['ID'])) {
            $arElementsIds[] = $arItem['ID'];
        }
    }

    $dbSections = CIBlockElement::GetElementGroups($arElementsIds);
    $arSections = [];
    while ($el = $dbSections->Fetch()) {
        $arSections[] = $el;
    }

    foreach ($arResult['ITEMS'] as $itemsKey => $arItem) {
        if (isset($arItem['ID'])) {
            $arElementsSectionsCode = [];
            foreach ($arSections as $section) {
                if ($arItem['ID'] == $section['IBLOCK_ELEMENT_ID']) {
                    $arElementsSectionsCode[] = $section['CODE'];
                }
            }
            $arResult['ITEMS'][$itemsKey]['SECTIONS_CODES'] = implode(' ', $arElementsSectionsCode);

        } else {
            $arResult['ITEMS'][$itemsKey]['SECTIONS_CODES'] = '';
        }
    }
}