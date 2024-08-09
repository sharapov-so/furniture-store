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



<hr>
<div class="review-block">
    <div class="review-text">
        <div class="review-text-cont">
            <?= $arResult["DETAIL_TEXT"]; ?>
        </div>
        <div class="review-autor">
            <?= $arResult["NAME"] ?>, <?= convertDateToReadableFormat($arResult["DISPLAY_ACTIVE_FROM"]); ?>
            г., <?= $arResult["PROPERTIES"]["POSITION"]["VALUE"] ?>, <?= $arResult["PROPERTIES"]["COMPANY"]["VALUE"] ?>.
        </div>
    </div>
    <div style="clear: both;" class="review-img-wrap"><img src="<?= (isset($arResult["DETAIL_PICTURE"]["SRC"])) ? $arResult["DETAIL_PICTURE"]["SRC"] :  SITE_TEMPLATE_PATH . "/assets/img/rew/no_photo.jpg"?>" alt="img">
    </div>
</div>


<?php if (isset($arResult['FILES'])): ?>
    <div class="exam-review-doc">
        <p>Документы:</p>
        <?php foreach ($arResult['FILES'] as $file): ?>
        <div class="exam-review-item-doc">
            <img class="rew-doc-ico" src="<?= SITE_TEMPLATE_PATH  ?> /assets/img/icons/pdf_ico_40.png"><a href="<?=$file['PATH']?>" target="_blank"><?=$file['NAME']?></a>
        </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<hr>


