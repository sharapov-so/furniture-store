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
$this->setFrameMode(true);?>

<form action="/search/index.php" class="main-frm-search">
    <?if($arParams["USE_SUGGEST"] === "Y"):?><?$APPLICATION->IncludeComponent(
        "bitrix:search.suggest.input",
        "",
        array(
            "NAME" => "q",
            "VALUE" => "",
            "INPUT_SIZE" => 15,
            "DROPDOWN_SIZE" => 10,
        ),
        $component, array("HIDE_ICONS" => "Y")
    );?><?else:?><input type="text" placeholder="Поиск" name="q"><?endif;?>
    <button type="submit" name="s"></button>
</form>



