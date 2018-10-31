/*-- ENTITÉS --*/
/*-- Personnel --*/
--INSERT INTO Personnel(nomP,prenomP,sexeP,numTelP,emailP,adresseP,villeP,motdepasse_personnel) VALUES ('','','','','','','','');
INSERT INTO Personnel(nomP,prenomP,sexeP,numTelP,emailP,adresseP,villeP,motdepasse_personnel) VALUES ('Smith','John','H','0692728362','balbalb@zfnpn.com','6 rue du dcnn','Paris','persoA');
INSERT INTO Personnel(nomP,prenomP,sexeP,numTelP,emailP,adresseP,villeP,motdepasse_personnel) VALUES ('Brown','Jolly','F','0678628362','bazeverv@zfnpn.com','7 avenue de dcvenn','Marseille','persoB');
INSERT INTO Personnel(nomP,prenomP,sexeP,numTelP,emailP,adresseP,villeP,motdepasse_personnel) VALUES ('White','Jessie','F','0778628362','otktf@zfnpn.com','10 place de cec','Paris','persoC');
INSERT INTO Personnel(nomP,prenomP,sexeP,numTelP,emailP,adresseP,villeP,motdepasse_personnel) VALUES ('Black','David','H','0689876578','ofefef@fefef.fr','1 rue de cec','Nantes','persoD');
INSERT INTO Personnel(nomP,prenomP,sexeP,numTelP,emailP,adresseP,villeP,motdepasse_personnel) VALUES ('Blue','Charlotte','F','0676876578','fefff@fefef.com','9 rue de cfzee','Rennes','persoE');
INSERT INTO Personnel(nomP,prenomP,sexeP,numTelP,emailP,adresseP,villeP,motdepasse_personnel) VALUES ('Red','Joe','H','0786876578','jdjd@jiji.fr','7 rue de djdhd','Bordeaux','persoF');
INSERT INTO Personnel(nomP,prenomP,sexeP,numTelP,emailP,adresseP,villeP,motdepasse_personnel) VALUES ('Grey','Chris','H','0765476578','tytu@hdgd.fr','10 rue de ccbcbc','Paris','persoG');
INSERT INTO Personnel(nomP,prenomP,sexeP,numTelP,emailP,adresseP,villeP,motdepasse_personnel) VALUES ('Crystal','Crista','F','0688765578','ccncn@jghu.fr','1 place de cec','Bastia','persoH');


/*-- Client --*/
--INSERT INTO Client(nomC,prenomC,sexeC,numTelC,emailC,adresseC,villeC,motdepasse_client) VALUES ('','','','','','','','');
INSERT INTO Client(nomC,prenomC,sexeC,numTelC,emailC,adresseC,villeC,motdepasse_client) VALUES ('One','Pone','H','0698678909','abcde@ef.com','7 rue dihvpnzv','Paris','cliA');
INSERT INTO Client(nomC,prenomC,sexeC,numTelC,emailC,adresseC,villeC,motdepasse_client) VALUES ('Two','Ptwo','H','0798786756','azerty@hot.com','8 place deihidne','Lyon','cliB');
INSERT INTO Client(nomC,prenomC,sexeC,numTelC,emailC,adresseC,villeC,motdepasse_client) VALUES ('Three','Pthree','F','0798098789','czobv.nnv@htoj.fr','9 rue dejbozec','Nantes','cliC');
INSERT INTO Client(nomC,prenomC,sexeC,numTelC,emailC,adresseC,villeC,motdepasse_client) VALUES ('Four','Pfour','F','0789786756','aze.com@gkto.fr','7 avenue dlzbjezb','Bordeaux','cliD');
INSERT INTO Client(nomC,prenomC,sexeC,numTelC,emailC,adresseC,villeC,motdepasse_client) VALUES ('Five','Pfive','F','0689787687','hihj.oo@yahoo.com','5 rue ldznpn','Toulouse','cliE');


/*-- ComposantCE --*/
--INSERT INTO ComposantE(libelleCE,nomCE,descriptionCE,marque) VALUES ('','','','');
INSERT INTO ComposantE(libelleCE,nomCE,descriptionCE,marque) VALUES ('CLV1','Clavier sans fil','Un clavier sans fil performant.','LOGITECH');
INSERT INTO ComposantE(libelleCE,nomCE,descriptionCE,marque) VALUES ('SRS1','Souris USB','Souris filaire USB compatible tout odrinateur.','HP');
INSERT INTO ComposantE(libelleCE,nomCE,descriptionCE,marque) VALUES ('ECRNA','Ecran ordinateur grand.','Ecran ordinateur pour toute marque','MICROSOFT');

/*-- Magasin --*/
--INSERT INTO Magasin(idP_gerant,nomM,adresseM,numTelM,villeM,motdepasse_gerant) VALUES ('','','','','','');
INSERT INTO Magasin(idP_gerant,nomM,adresseM,numTelM,villeM,motdepasse_gerant) VALUES (1,'Carrefour','5 rue du knlnvr','0198765432','Paris','magA');
INSERT INTO Magasin(idP_gerant,nomM,adresseM,numTelM,villeM,motdepasse_gerant) VALUES (2,'Darty','7 rue de joju','0178671267','Marseille','magB');
INSERT INTO Magasin(idP_gerant,nomM,adresseM,numTelM,villeM,motdepasse_gerant) VALUES (3,'Ikea','6 place du joenfoe','0987654321','Nantes','magC');

/*-- Achat --*/
--INSERT INTO Achat(idA) VALUES (idA);
INSERT INTO Achat(comment) VALUES ('A');


/*-- DateEntite --*/
--INSERT INTO DateEntite(dateE) VALUES ('AAAA-MM-DD');
INSERT INTO DateEntite(dateE) VALUES ('2018-10-29');


/*-- ASSOCIATIONS --*/
/*-- travailler ---*/
--INSERT INTO travailler(idP,dateE,idM) VALUES (,'AAAA-MM-DD',);


/*-- accederInfo --*/
--INSERT INTO accederinfo(idM,idC) VALUES (,);

/*-- vendre --*/
--INSERT INTO vendre(libelleCE,idM) VALUES ('',);

/*-- acheter --*/
--INSERT INTO acheter(idC,dateE,idA,idP,quantite) VALUES (,'AAAA-MM-DD',,,);


/*-- provenance --*/
--INSERT INTO provenance(libelleCE,idM,idA) VALUES ('',,);


/*-- AUTRES --*/

--Rechercher un Composant
--Libelle
