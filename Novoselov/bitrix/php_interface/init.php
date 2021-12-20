<?

AddEventHandler("iblock", "OnBeforeIBlockElementUpdate", "UpdateProductPrice");

function UpdateProductPrice($arFields){
	if($arFields["IBLOCK_ID"] == 2){
		$ID_PROFILE = 1;	
		$ID_IBLOCK = 1;

		$arSelect = Array();
		$arFilter = Array("ID"=>array($ID_PROFILE), "IBLOCK_ID" => $ID_IBLOCK);
		$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
		while($ob = $res->GetNextElement())
		{	
			$item = $ob->GetFields();
			$arProps = $ob->GetProperties();
		}

		$el = new CIBlockElement; 

		if(!in_array($arFields["ID"], $arProps["LIST_PROJECT_ID"]["VALUE"])){
			array_push($arProps["LIST_PROJECT_ID"]["VALUE"], $arFields["ID"]);
		}

		$arr_prop = array();
		foreach ($arProps as $key => $value) {
			$arr_prop[$value["ID"]] = $value["VALUE"];
		}
		$result = array(
			"PROPERTY_VALUES"=> $arr_prop,
		);
		$res = $el->Update($ID_PROFILE, $result);
		if(!$res){
		
		}

	}

}
?>