<?php
require_once "Repository.php";
require_once __DIR__.'/../models/PriceList.php';
class PriceListRepository extends Repository
{
    public function addPriceList(PriceList $priceList):void{
        $stmt = $this ->database->concect()->prepare('INSERT INTO "priceList"(name_of_service, prices)
        VALUES (?,?)
        ');


        $stmt->execute([
            $priceList->getNameOfService(),
            $priceList->getPrices(),

        ]);

    }

}