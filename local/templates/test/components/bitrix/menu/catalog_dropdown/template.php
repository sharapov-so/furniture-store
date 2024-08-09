<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php if ($USER->IsAuthorized()): ?>
<li>
    <a href="/products/">Каталог</a>

    <?php if (!$APPLICATION->GetShowIncludeAreas()): ?>
        <ul>
            <?php
            global $USER;
            $isAuthorized = $USER->IsAuthorized();

            $arSelect = ["ID", "NAME", "SECTION_PAGE_URL", "UF_MENU_SUBTEXT"];
            $arFilter = ["IBLOCK_ID" => 4, "DEPTH_LEVEL" => 1, "ACTIVE" => "Y"];
            $arSections = CIBlockSection::GetList(["SORT" => "ASC"], $arFilter, false, $arSelect);



            while ($arSection = $arSections->GetNext()):
                // Проверка прав доступа к разделу
                $sectionAccessible = CIBlockSectionRights::UserHasRightTo(4, $arSection['ID'], "section_read");

                // Получение пользовательского свойства
                $subText = $arSection['UF_MENU_SUBTEXT'];
                ?>
                <?php if (!empty($subText)): ?>
                <div class="menu-text"><?= $subText ?></div>
            <?php endif; ?>
                <li>
                    <a href="<?= $sectionAccessible ? "/products/section.php?SECTION=" . $arSection['ID'] : '#' ?>"
                       style="<?= $sectionAccessible ? '' : 'color:gray;' ?>" <?= $sectionAccessible ? '' : 'onclick="return false;"' ?>><?= $arSection['NAME'] ?></a>
                    <ul>
                        <?php
                        $arElementSelect = ["ID", "NAME", "DETAIL_PAGE_URL"];
                        $arElementFilter = ["IBLOCK_ID" => 4, "SECTION_ID" => $arSection['ID'], "ACTIVE" => "Y"];
                        $arElements = CIBlockElement::GetList(["SORT" => "ASC"], $arElementFilter, false, false, $arElementSelect);


                        while ($arElement = $arElements->GetNext()):
                            // Проверка прав доступа к элементу
                            $elementAccessible = CIBlockElementRights::UserHasRightTo(4, $arElement['ID'], "element_read");

                            // Получение пользовательского свойства элемента
                            $elementSubText = '';
                            $rsElementProps = CIBlockElement::GetProperty(4, $arElement['ID'], [], ["CODE" => "PROPERTY_UF_MENU_SUBTEXT"]);
                            if ($arElementProp = $rsElementProps->Fetch()) {
                                $elementSubText = $arElementProp['VALUE'];
                            }

                            ?>


                            <li>
                                <a href="<?= $elementAccessible ? "/products/detail.php?ID=" . $arElement['EXTERNAL_ID'] : '#' ?>"
                                   style="<?= $elementAccessible ? '' : 'color:gray;' ?>" <?= $elementAccessible ? '' : 'onclick="return false;"' ?>><?= $arElement['NAME'] ?></a>
                            </li>
                            <?php if (!empty($elementSubText)): ?>
                            <div class="menu-text"><?= $elementSubText ?></div>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>

</li>
<?php endif; ?>