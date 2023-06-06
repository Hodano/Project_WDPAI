create table cars
(
    id                 integer default nextval('car_id_seq'::regclass) not null
        constraint cars_pk
            primary key,
    car_model          varchar default 255                             not null,
    body_type          varchar default 255                             not null,
    year_of_production integer default 10                              not null,
    car_mileage        integer default 8                               not null,
    color              varchar default 255                             not null,
    client_id          serial
        constraint client__fk
            references clients
);

alter table cars
    owner to bavmepkocrjpey;

