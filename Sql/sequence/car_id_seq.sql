create sequence car_id_seq
    as integer;

alter sequence car_id_seq owner to bavmepkocrjpey;

alter sequence car_id_seq owned by cars.id;

