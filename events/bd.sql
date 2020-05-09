drop table if exists Admin;

drop table if exists Comments;

drop table if exists Evenements;

/*==============================================================*/
/* Table: Admin                                                 */
/*==============================================================*/
create table Admin
(
   pseudo               varchar(254) not null,
   last_name            varchar(254),
   first_name           varchar(254),
   email                varchar(254),
   password             varchar(254),
   primary key (pseudo)
);

/*==============================================================*/
/* Table: Comments                                              */
/*==============================================================*/
create table Comments
(
   id                   int not null,
   Eve_id               int not null,
   Author               varchar(254),
   comments             varchar(254),
   primary key (id)
);

/*==============================================================*/
/* Table: Evenements                                            */
/*==============================================================*/
create table Evenements
(
   id                   int not null,
   Titre                varchar(254),
   Contenu              varchar(254),
   Date_de_publication  datetime,
   Description          varchar(254),
   primary key (id)
);

alter table Comments add constraint FK_Association_1 foreign key (Eve_id)
      references Evenements (id) on delete restrict on update restrict;
