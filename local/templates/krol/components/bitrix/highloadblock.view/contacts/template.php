<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!empty($arResult['ERROR']))
{
	ShowError($arResult['ERROR']);
	return false;
}

?>
<?php

echo '<pre>';
print_r( $arResult['fields']['UF_EMAIL']['VALUE']);
print_r( $arResult['fields']['UF_PHONE']['VALUE']);
print_r( $arResult['fields']['UF_SOCIAL']['VALUE']);
print_r( $arResult['fields']['UF_ADDRESS']['VALUE']);
echo '<pre>';

?>
