use bayrafood-reg;

create table loginmodule(
id int not NULL auto_increment,
login varchar (25) not NULL,
mail varchar (50) not NULL,
pass varchar (16) not NULL,
primary key (id)
);
