CREATE TABLE AUTOMOBIL(
    id_auto int not null AUTO_INCREMENT,
    marca varchar (50) null,
    modelo varchar (20) null,
    num_placa varchar (10) null,
    descr varchar (100) null,
    precio number (6,2) null,
    estado int null,
    CONSTRAINT pk_automobil
    PRIMARY KEY id_auto
);

alter TABLE AUTOMOBIL add rutimapro varchar(100) null;
INSERT INTO AUTOMOBIL (marca,modelo,num_placa,descr,precio,estado,rutimaauto)
VALUES ('Toyota','Yaris','WLU-94-69','Automobil ideal para 4 personas','200.99','1','Toyota Yaris.jpg')
,('Toyota','Yasuo','WLU-60-69','Automobil ideal para 4 personas','200.99','1','car1.jpg');