<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>



<?php if (!empty($arResult["ROOT_ELEMENTS"]) || !empty($arResult["SECTIONS"])): ?>
<div class="news-groups">
    <ul>
        <?php if (!empty($arResult["ROOT_ELEMENTS"])): ?>
            <?php foreach ($arResult["ROOT_ELEMENTS"] as $arElement): ?>
                <li class="element-item">
                    <a href="/news/?ELEMENT_ID=<?= $arElement["ID"] ?>">
                        <?= $arElement["NAME"] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>

        <?php if (!empty($arResult["SECTIONS"])): ?>
            <?php foreach ($arResult["SECTIONS"] as $arSection): ?>
                <li class="section-item">
                    <a href="/news/?SECTION_ID=<?= $arSection["SECTION"]["ID"] ?>">
                        <?= $arSection["SECTION"]["NAME"] ?>
                    </a>

                    <?php if (!empty($arSection["ELEMENTS"])): ?>
                        <ul>
                            <?php foreach ($arSection["ELEMENTS"] as $arElement): ?>
                                <li class="element-item">
                                    <a href="/news/?ELEMENT_ID=<?= $arElement["ID"] ?>">
                                        <?= $arElement["NAME"] ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <?php if (!empty($arSection["SUBSECTIONS"])): ?>
                        <ul>
                            <?php foreach ($arSection["SUBSECTIONS"] as $arSubSection): ?>
                                <li class="section-item">
                                    <a href="/news/?SECTION_ID=<?= $arSubSection["SECTION"]["ID"] ?>">
                                        <?= $arSubSection["SECTION"]["NAME"] ?>
                                    </a>

                                    <?php if (!empty($arSubSection["ELEMENTS"])): ?>
                                        <ul>
                                            <?php foreach ($arSubSection["ELEMENTS"] as $arElement): ?>
                                                <li class="element-item">
                                                    <a href="/news/?ELEMENT_ID=<?= $arElement["ID"] ?>">
                                                        <?= $arElement["NAME"] ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>

                                    <!-- Рекурсивный вызов -->
                                    <?php if (!empty($arSubSection["SUBSECTIONS"])): ?>
                                        <?php include __FILE__; ?>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</div>
<?php endif; ?>
