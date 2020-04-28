/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  17/04/2020 17:01:39                      */
/*==============================================================*/


drop table if exists Admin;

drop table if exists Moto;

drop table if exists Vente;

/*==============================================================*/
/* Table : Admin                                                */
/*==============================================================*/
create table Admin
(
   nom                  varchar(255),
   prenom               varchar(255),
   email                varchar(255),
   mot_de_pass          varchar(255),
   Id                   int not null,
   primary key (Id)
);

/*==============================================================*/
/* Table : Moto                                                 */
/*==============================================================*/
create table Moto
(
   Id                   int not null,
   marque               varchar(255),
   modele               varchar(255),
   cylindre             varchar(255),
   categorie            varchar(255),
   numero_de_serie      varchar(255),
   prix                 varchar(255),
   couleur              varchar(255),
   primary key (Id),
   key AK_Identifiant_1 (Id)
);

/*==============================================================*/
/* Table : Vente                                                */
/*==============================================================*/
create table Vente
(
   Mot_Id               int not null,
   Id                   int not null,
   nom                  varchar(255),
   prenom               varchar(255),
   numero_de_serie      varchar(255),
   primary key (Mot_Id, Id)
);

alter table Vente add constraint FK_Generalisation_1 foreign key (Mot_Id)
      references Moto (Id) on delete restrict on update restrict;

