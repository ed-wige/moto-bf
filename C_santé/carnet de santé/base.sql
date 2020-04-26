drop table if exists Antecedents_medicaux;

drop table if exists info_personnelle;

/*==============================================================*/
/* Table : Antecedents_medicaux                                 */
/*==============================================================*/
create table Antecedents_medicaux
(
   id_anteccedent       int not null auto_increment,
   groupe_sanguin       varchar(254),
   electrophorere       varchar(254),
   maladie_genetique    varchar(254),
   allergie             varchar(254),
   serologie            varchar(254),
   date_de_la_derniere_visite datetime,
   medecins_traitant    varchar(254),
   primary key (id_anteccedent),
   key AK_Identifiant_1 (id_anteccedent)
);

/*==============================================================*/
/* Table : info_personnelle                                     */
/*==============================================================*/
create table info_personnelle
(
   id_info              int not null,
   id_anteccedent       int not null,
   Nom                  varchar(254),
   Prenom               varchar(254),
   Date_de_naissance    datetime,
   Profession           varchar(254),
   Contact              int,
   email                varchar(254),
   primary key (id_info),
   key AK_Identifiant_1 (id_info)
);

alter table info_personnelle add constraint FK_Association_1 foreign key (id_anteccedent)
      references Antecedents_medicaux (id_anteccedent) on delete restrict on update restrict;
