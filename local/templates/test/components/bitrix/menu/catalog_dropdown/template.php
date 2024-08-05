<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<li>
    <a href="/products/">Каталог</a>
    <ul>
        <?php
        $arSelect = ["ID", "NAME", "SECTION_PAGE_URL"];
        $arFilter = ["IBLOCK_ID" => 4, "DEPTH_LEVEL" => 1, "ACTIVE" => "Y"];
        $arSections = CIBlockSection::GetList(["SORT" => "ASC"], $arFilter, false, $arSelect);
        while ($arSection = $arSections->GetNext()):
            ?>
            <li>
                <a href="<?= $arSection['SECTION_PAGE_URL'] ?>"><?= $arSection['NAME'] ?></a>
                <ul>
                    <?php
                    $arElementSelect = ["ID", "NAME", "DETAIL_PAGE_URL"];
                    $arElementFilter = ["IBLOCK_ID" => 4, "SECTION_ID" => $arSection['ID'], "ACTIVE" => "Y"];
                    $arElements = CIBlockElement::GetList(["SORT" => "ASC"], $arElementFilter, false, false, $arElementSelect);
                    while ($arElement = $arElements->GetNext()):
                        ?>
                        <li><a href="<?= $arElement['DETAIL_PAGE_URL'] ?>"><?= $arElement['NAME'] ?></a></li>
                    <?php endwhile; ?>
                </ul>
            </li>
        <?php endwhile; ?>
    </ul>
</li>