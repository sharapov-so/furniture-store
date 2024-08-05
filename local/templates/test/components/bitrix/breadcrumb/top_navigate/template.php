<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult)){
	return '';
}

$res = '<div class="breadcrumbs-box">
            <div class="inner-wrap">';

$elCount = count($arResult);
foreach ($arResult as $index => $item){
    $link = (!empty($item['LINK']) ? $item['LINK'] : "");
    $title = $item['TITLE'] ?? '';
    if ($index < ($elCount - 1)){
        $res .= '<a href="' . $link . '">' . $title . '</a>';
    }else{
        $res .= '<span>' . $title . '</span>';
    }

}

$res .= '</div>
        </div>';

return $res;


