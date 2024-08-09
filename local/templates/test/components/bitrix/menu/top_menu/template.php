<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<? if (!empty($arResult)): ?>
    <nav class="nav">
        <div class="inner-wrap">
            <div class="menu-block popup-wrap">
                <a href="" class="btn-menu btn-toggle"></a>
                <div class="menu popup-block">
                    <ul class="">

                        <? foreach ($arResult as $arItem):
                            if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                                continue;
                            ?>


                            <?php if ($arItem["LINK"] != "/products/"): ?>
                            <li
                            <? if ($arItem === reset($arResult)) : ?>
                                class="main-page"
                            <? endif; ?>
                            >
                            <a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>

                            <?php if (!empty($arItem['subitems'])): ?>
                                <ul>
                                    <?php foreach ($arItem['subitems'] as $subitem): ?>
                                        <?php if (isset($subitem['PARAMS']['subtop_text'])): ?>
                                            <div class="menu-text"><?= $subitem['PARAMS']['subtop_text'] ?></div>
                                        <?php endif; ?>

                                        <li>
                                            <a href="<?= $subitem['LINK'] ?>"><?= $subitem['TEXT'] ?></a>
                                            <?php if (isset($subitem['PARAMS']['podmenu'])): ?>
                                                <ul>
                                                    <?php foreach ($subitem['PARAMS']['podmenu'] as $podmenu): ?>
                                                        <?php if (isset($podmenu[3]['podmenu_subtop_text'])): ?>
                                                            <div class="menu-text"><?= $podmenu[3]['podmenu_subtop_text'] ?></div>
                                                        <?php endif; ?>
                                                        <li>
                                                            <a href="<?= $podmenu[1] ?>"><?= $podmenu[0] ?></a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                        <?php else: ?>

                                <?php
                                $APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "catalog_dropdown",
                                    array(
                                        "ROOT_MENU_TYPE" => "top",
                                        "MENU_CACHE_TYPE" => "A",
                                        "MENU_CACHE_TIME" => "3600",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "MENU_CACHE_GET_VARS" => array(),
                                        "MAX_LEVEL" => "2",
                                        "CHILD_MENU_TYPE" => "subtop",
                                        "USE_EXT" => "N",
                                        "DELAY" => "N",
                                        "ALLOW_MULTI_SELECT" => "N"
                                    ),
                                    false
                                );
                                ?>


                        <?php endif; ?>



                            </li>



                        <? endforeach; ?>

                    </ul>
                    <a href="" class="btn-close"></a>
                </div>
                <div class="menu-overlay"></div>
            </div>
        </div>
    </nav>
<? endif ?>





