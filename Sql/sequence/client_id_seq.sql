create sequence client_id_seq
    as integer;

alter sequence client_id_seq owner to bavmepkocrjpey;

alter sequence client_id_seq owned by clients.id;

