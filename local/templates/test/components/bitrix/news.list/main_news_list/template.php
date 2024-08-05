<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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


    <div class="column main-news-box">
        <div class="title-block">
            <h2>Новости</h2>
        </div>
        <hr>
        <div class="items-wrap">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

    <div class="item-wrap" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="item">
            <div class="title"><a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><?= convertDateToReadableFormat($arItem["DATE_CREATE"]); ?></a>
            </div>
            <div class="text"><a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><?echo $arItem["PREVIEW_TEXT"];?></a>
            </div>
        </div>
    </div>
<?endforeach;?>

        </div>
        <a href="/news/" class="btn-next">Все новости</a>
    </div>




        

