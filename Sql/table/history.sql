create table history
(
    id                  serial
        constraint history_pk
            primary key,
    date_of_history_car date not null,
    description_history text not null,
    car_id              serial
        constraint car_fk
            references cars
);

alter table history
    owner to bavmepkocrjpey;

