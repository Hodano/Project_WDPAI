create table clients
(
    id           integer default nextval('client_id_seq'::regclass) not null
        constraint clients_pk
            primary key,
    name         varchar default 255                                not null,
    address      varchar default 255                                not null,
    phone_number integer default 12,
    email        varchar default 255                                not null
);

alter table clients
    owner to bavmepkocrjpey;

