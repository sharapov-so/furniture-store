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
//dump($arResult);
?>
<div class="item-wrap">
    <div class="rew-footer-carousel">
        <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
            <?= $arResult["NAV_STRING"] ?><br/>
        <? endif; ?>
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>

            <div class="item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <div class="side-block side-opin">
                    <div class="inner-block">
                        <div class="title">
                            <div class="photo-block">
                                <img src="<?= (isset($arItem["PREVIEW_PICTURE"]["SRC"])) ? $arItem["PREVIEW_PICTURE"]["SRC"] :  SITE_TEMPLATE_PATH . "/assets/img/rew/no_photo.jpg"?>" alt="">
                            </div>
                            <div class="name-block"><a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["NAME"] ?></a></div>
                            <div class="pos-block"><?= $arItem["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"] ?>,
                                "<?= $arItem["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"] ?>"
                            </div>
                        </div>
                        <div class="text-block"><?= mb_substr($arItem["PREVIEW_TEXT"], 0, 150) ?><?= (strlen($arItem["PREVIEW_TEXT"]) > 150) ? "..." : "" ?></div>

                    </div>
                </div>
            </div>

        <? endforeach; ?>

    </div>
</div>








