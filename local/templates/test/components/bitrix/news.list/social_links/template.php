<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="main-soc-block">
    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
        <?php

        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

        $iconPath = CFile::GetPath($arItem["PROPERTIES"]["ICON"]["VALUE"]);
        ?>
        <div id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <a href="<?= htmlspecialcharsbx($arItem["PROPERTIES"]["URL"]["VALUE"]) ?>" target="_blank" class="soc-item">
                <img src="<?= htmlspecialcharsbx($iconPath) ?>" alt="<?= htmlspecialcharsbx($arItem["NAME"]) ?>">
            </a>
        </div>
    <?php endforeach; ?>
</div>

