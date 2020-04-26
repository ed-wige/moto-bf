drop table if exists Patient;

/*==============================================================*/
/* Table: Patient                                               */
/*==============================================================*/
create table Patient
(
   id                   int not null auto_increment,
   nom                  varchar(254),
   prenom               varchar(254),
   date_de_naissance    datetime,
   lieu_de_residence    varchar(254),
   genre                varchar(254),
   profession           varchar(254),
   telephone            int,
   groupe_sanguin       varchar(254),
   electrophorese       varchar(254),
   maladie_hereditaire  varchar(254),
   allergie             varchar(254),
   serologie            varchar(254),
   date_de_la_derniere_visite datetime,
   medecin_traitant     varchar(254),
   email_du_medecin     varchar(254),
   telephone_du_medecin int,
   nom_accompagnant     varchar(254),
   prenom_accompagnat   varchar(254),
   telaccompagnant      int,
   profession_accompagnant varchar(254),
   primary key (id),
   key AK_Identifier_1 (id)
);
