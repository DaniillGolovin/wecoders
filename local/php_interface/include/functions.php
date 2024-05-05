<?php

/**
 * Возврат ID ИБ по его коду
 *
 * @param string $code
 * @return int
 *
 * @throws Exception
 */
function getIdBlocksByCode (string $code): int
{
    \Bitrix\Main\Loader::includeModule('iblock');
    $iblock = \Bitrix\Iblock\IblockTable::getList([
        'filter' => [
            'CODE' => $code,
        ],
        'select' => [
            'ID',
            'CODE'
        ]
    ])->fetch();

    if (!isset($iblock['ID'])) {
    throw new Exception('Инфоблок с кодом не найден');
}

    return (int) $iblock['ID'];
}