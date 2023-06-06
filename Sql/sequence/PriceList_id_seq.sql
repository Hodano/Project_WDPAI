create sequence "PriceList_id_seq"
    as integer;

alter sequence "PriceList_id_seq" owner to bavmepkocrjpey;

alter sequence "PriceList_id_seq" owned by "priceList".id;

