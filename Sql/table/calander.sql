create table calander
(
    id            serial
        constraint calander_pk
            primary key,
    date_of_event date not null,
    event         text not null
);

alter table calander
    owner to bavmepkocrjpey;

