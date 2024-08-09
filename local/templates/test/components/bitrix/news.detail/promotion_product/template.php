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

//dump($arResult);


?>


    <div class="side-block side-action">
        <img src="" alt="" class="bg">
        <div class="photo-block">
            <img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="">
        </div>
        <div class="text-block">
            <div class="title">Акция!</div>
            <p><?= $arResult["NAME"] ?> всего за <?= $arResult["PROPERTIES"]["PROMOTION_PRICE"]["VALUE"] ?><span class="r">a</span>
            </p>
        </div>
        <a href="/products/detail.php?ID=<?= $arResult["ID"] ?>" class="btn-more">подробнее</a>
    </div>

