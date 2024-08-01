<?php
function getNameSite() {
    $arSite = CSite::GetByID(SITE_ID)->Fetch();
    return $arSite['NAME'];
}
?>