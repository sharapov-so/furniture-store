<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<div class="cnt-section afisha-box">
    <div class="section-title-block">
        <h2 class="second-ttile">Ближайшие мероприятия</h2>
        <a href="/events/" class="btn-next">все мероприятия</a>
    </div>
    <hr>

    <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
        <?= $arResult["NAV_STRING"] ?><br/>
    <? endif; ?>
    <div class="items-wrap">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>


            <div class="item-wrap" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <div class="item">
                    <div class="title">
                        <a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><? echo convertDateToReadableFormat($arItem["DISPLAY_PROPERTIES"]["date_event"]["VALUE"]) ?>
                            , <? echo $arItem["DISPLAY_PROPERTIES"]["place_event"]["VALUE"] ?></a>
                    </div>
                    <div class="text">
                        <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
                            <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                                <a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><? echo $arItem["NAME"] ?></a>
                            <? else: ?>
                                <b><? echo $arItem["NAME"] ?></b><br/>
                            <? endif; ?>
                        <? endif; ?>
                    </div>
                </div>
            </div>


        <? endforeach; ?>
    </div>
</div>