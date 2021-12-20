<?
$list_item_id = $arParams["LIST_PROJECT_ID"];

$arFilter = array("IBLOCK_ID"=>2, "ID"=>$list_item_id);

$res = CIBlockElement::GetList(Array(), $arFilter, false, false, array("NAME", "PREVIEW_PICTURE", "PREVIEW_TEXT", "DETAIL_PAGE_URL"));

$list_items = array();

while($ob = $res->GetNextElement())
{
	$arFields = $ob->GetFields();
	array_push($list_items, $arFields);
}

$ITEMS_ID = array();

foreach ($list_items as $key => $value) {
	array_push($ITEMS_ID, $value["ID"]);
}
$arFilter = Array("IBLOCK_ID"=>2, "ID"=>$ITEMS_ID);
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, array("NAME", "PREVIEW_PICTURE", "PREVIEW_TEXT", "DETAIL_PAGE_URL"));
$items = array();
while($ob = $res->GetNextElement())
{
	$arFields = $ob->GetFields();
	array_push($items, $arFields);
}
$maimItem = $items[0];
$src = CFile::ResizeImageGet($maimItem["PREVIEW_PICTURE"], array('width'=>900, 'height'=>374), BX_RESIZE_IMAGE_PROPORTIONAL, true);
$maimItem["PREVIEW_SRC"] = $src;
unset($items[0]);
$items = array_values($items);

// ужиаем изображения
foreach ($items as $key => $value) {
	$src = CFile::ResizeImageGet($value["PREVIEW_PICTURE"], array('width'=>252, 'height'=>189), BX_RESIZE_IMAGE_PROPORTIONAL, true);
	$items[$key]["PREVIEW_SRC"] = $src;
}

$arResult["FIRST_ITEM"] = $maimItem;
$arResult["ITEMS"] = $items;
?>