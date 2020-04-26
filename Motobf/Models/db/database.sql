drop table if exists Admin;

drop table if exists Marque;

drop table if exists Moto;

drop table if exists Stock;

/*==============================================================*/
/* Table: Admin                                                 */
/*==============================================================*/
create table Admin
(
   id                   int,
   Username             VARCHAR(254),
   Password             VARCHAR(254) not null,
   primary key (Password)
);

/*==============================================================*/
/* Table: Marque                                                */
/*==============================================================*/
create table Marque
(
   id                   int,
   Sto_id               int not null,
   nom_de_la_marque     varchar(254),
   stock_dispo          int,
   primary key (id),
   key AK_Identifier_1 (stock_dispo)
);

/*==============================================================*/
/* Table: Moto                                                  */
/*==============================================================*/
create table Moto
(
   id                   int,
   Marque               varchar(254),
   Modele               varchar(254),
   Cylindre             VARCHAR(254),
   Categorie            VARCHAR(254),
   _Numero_de_serie     VARCHAR(254) not null,
   Mar_id               int not null,
   Prix                 int,
   primary key (_Numero_de_serie)
);

/*==============================================================*/
/* Table: Stock                                                 */
/*==============================================================*/
create table Stock
(
   id                   int,
   stock_actuel         int,
   Entrant              int,
   Total                int,
   sortant              int,
   reste                int,
   primary key (id)
);

alter table Marque add constraint FK_Association_1 foreign key (Sto_id)
      references Stock (id) on delete restrict on update restrict;

alter table Moto add constraint FK_Association_2 foreign key (Mar_id)
      references Marque (id) on delete restrict on update restrict;
