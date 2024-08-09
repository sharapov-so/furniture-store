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

<hr>
<?= $arResult["PREVIEW_TEXT"];?>
<h2><?= $arResult["PROPERTIES"]["SUBTITLE"]["VALUE"];?></h2>
<hr>
<div class="article-text-block">
    <figure class="pic-block">
        <img src="<?= $arResult["PREVIEW_PICTURE"]["SRC"];?>" alt="">
    </figure>
    <?= $arResult["DETAIL_TEXT"];?>
</div>