# tables

# users
# userImageDetails

create table if not exists users(
  id int(11) unsigned  primary key auto_increment,
  username varchar(255) not null,
  dateCreated datetime not null,
  dateModified datetime default current_timestamp on update current_timestamp
) ENGINE=InnoDB;

create table if not exists userImageDetails(
  id int(11) unsigned primary key auto_increment,
  shortID varchar(50) not null,
  userID int(11) unsigned not null,
  dateCreated datetime not null,
  dateModified datetime default current_timestamp on update current_timestamp,
  constraint foreign key (userID) references users(id)
) ENGINE=InnoDB;
