<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Сотрудничество");
?><?$APPLICATION->IncludeComponent(
	"placestart:page.head",
	"",
Array()
);?>
<?$APPLICATION->IncludeComponent(
	"placestart:partnership.section",
	"",
	Array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "Y"
	)
);?><?$APPLICATION->IncludeComponent(
	"placestart:partnership.advantages", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"IS_PAGE_BLOCK" => "N",
		"TITLE" => "Мы используем индивидуальный подход к разработке продукта и готовы выполнять эксклюзивные заказы",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600000",
		"ELEMENT_CODES" => array(
			0 => "reshenie-dlya-vashego-biznesa",
			1 => "gibkoe-proizvodstvo",
			2 => "opyt-sotrudnichestva-s-krupnymi-brendami",
		)
	),
	false
);?><?$APPLICATION->IncludeComponent(
	"placestart:partners.section",
	"",
	Array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "Y"
	)
);?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>