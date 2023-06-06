create table users
(
    id              serial
        constraint "Users_pk"
            primary key,
    email           varchar default 255 not null
        unique,
    password        varchar default 255 not null,
    id_user_details integer             not null
        constraint user_details_fk
            references user_detaills
            on update cascade on delete cascade,
    role            varchar default 10
);

alter table users
    owner to bavmepkocrjpey;

