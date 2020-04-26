drop table if exists Admin;

drop table if exists Marque;

drop table if exists Moto;

drop table if exists Stock;

/*==============================================================*/
/* Table: Admin                                                 */
/*==============================================================*/
create table Admin
(
   Username             varchar(254) not null,
   Password             varchar(254),
   primary key (Username)
);

/*==============================================================*/
/* Table: Marque                                                */
/*==============================================================*/
create table Marque
(
   id                   int not null,
   Nom_de_la_marque     varchar(254),
   primary key (id)
);

/*==============================================================*/
/* Table: Moto                                                  */
/*==============================================================*/
create table Moto
(
   Numero_de_serie      int not null,
   marque               varchar(254),
   Modele               varchar(254),
   Cylindre             varchar(254),
   Categorie            varchar(254),
   Prix                 int,
   primary key (Numero_de_serie)
);

/*==============================================================*/
/* Table: Stock                                                 */
/*==============================================================*/
create table Stock
(
   id                   int not null,
   Stock_actuel         int,
   Stock_Entrant        int,
   Total                int,
   Sortant              int,
   Reste                int,
   primary key (id)
);
