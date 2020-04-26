drop table if exists minichat;

/*==============================================================*/
/* Table : minichat                                             */
/*==============================================================*/
create table minichat
(
   id                   int not null auto_increment,
   pseudo               varchar(254),
   message              varchar(254),
   primary key (id)
);
