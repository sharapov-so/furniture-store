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


<div class="column main-actions-box">
    <div class="title-block">
        <h2>Новинки</h2>
        <hr>
    </div>
    <div class="items-wrap">


<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="item-wrap" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="item">
            <div class="title-block att">
                <?= $arItem["NAME"] ?>
            </div>
            <br>
            <div class="inner-block">
                <a href="/products/detail.php?ID=<?= $arItem['ID'] ?>" class="photo-block"> <img src="<?= (isset($arItem["PREVIEW_PICTURE"]["SRC"])) ? $arItem["PREVIEW_PICTURE"]["SRC"] :  SITE_TEMPLATE_PATH . "/assets/img/rew/no_photo.jpg"?>" alt=""> </a>
                <div class="text">
                    <a href="/products/detail.php?ID=<?= $arItem['ID'] ?>"><?= mb_substr($arItem["PREVIEW_TEXT"], 0, 150) ?><?= (strlen($arItem["PREVIEW_TEXT"]) > 150) ? "..." : "" ?></a> <a
                            href="/products/detail.php?ID=<?= $arItem['ID'] ?>" class="btn-arr"></a>
                </div>
            </div>
        </div>
    </div>


<?endforeach;?>


    </div>
    <a href="/new_products/" class="btn-next">Все новинки</a>
</div>




