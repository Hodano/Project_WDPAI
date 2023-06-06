create table user_detaills
(
    id      serial
        constraint user_detaills_pk
            primary key
        unique,
    name    varchar default 100 not null,
    surname varchar default 100 not null,
    phone   varchar default 12  not null,
    address varchar default 255 not null
);

alter table user_detaills
    owner to bavmepkocrjpey;

