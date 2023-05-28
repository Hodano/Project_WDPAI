<?php
require_once "Repository.php";
require_once __DIR__.'/../models/PriceList.php';
class PriceListRepository extends Repository
{
    public function addPriceList(PriceList $priceList):void{
        $stmt = $this ->database->connect()->prepare('INSERT INTO "priceList"(name_of_service, prices)
        VALUES (?,?)
        ');


        $stmt->execute([
            $priceList->getNameOfService(),
            $priceList->getPrices()

        ]);

    }
    public function getPriceList(): array{
        $priceListArray = [];
        $stmt = $this ->database->connect()->prepare('
        SELECT * FROM "priceList" ');

        $stmt->execute();
        $pricesList = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($pricesList as $priceList ){
            $priceListArray[] = new PriceList(
                $priceList['name_of_service'],
                $priceList['prices'],
            );
        }
        return $priceListArray;
    }

}