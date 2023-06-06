create table "priceList"
(
    id              integer default nextval('"PriceList_id_seq"'::regclass) not null
        constraint "PriceList_pk"
            primary key,
    name_of_service varchar                                                 not null,
    prices          double precision                                        not null
);

alter table "priceList"
    owner to bavmepkocrjpey;

