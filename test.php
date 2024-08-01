<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Мебельный магазин | Тестовая страница");
$APPLICATION->SetTitle("Тестовая страница");
?>Тестовая страница<br>
 <?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth_form", Array(
	"FORGOT_PASSWORD_URL" => "/auth/forget.php",	// Страница забытого пароля
		"PROFILE_URL" => "/auth/personal.php",	// Страница профиля
		"REGISTER_URL" => "/auth/registration.php",	// Страница регистрации
		"SHOW_ERRORS" => "N",	// Показывать ошибки
	),
	false
);?><br>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>