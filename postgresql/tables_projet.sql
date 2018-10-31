/*--- Les entités ---*/
--TABLE Personnel
CREATE TABLE IF NOT EXISTS Personnel (
	idP SERIAL PRIMARY KEY,
  	nomP VARCHAR(30) NOT NULL,
  	prenomP VARCHAR(30) NOT NULL,
  	sexeP CHAR CHECK ((sexeP='F') OR (sexeP='H')),
  	numTelP VARCHAR(10) CHECK (numTelP LIKE '0%'),
  	emailP VARCHAR(40) UNIQUE NOT NULL CHECK (emailP LIKE '%@%'),
  	adresseP TEXT,
  	villeP VARCHAR(30),
  	motdepasse_personnel VARCHAR(30)
);

--TABLE Client
CREATE TABLE IF NOT EXISTS Client (
	idC SERIAL PRIMARY KEY,
	nomC VARCHAR(30) NOT NULL,
  	prenomC VARCHAR(30) NOT NULL,
  	sexeC CHAR CHECK ((sexeC='F') OR (sexeC='H')),
  	numTelC VARCHAR(10) CHECK (numTelC LIKE '0%'),
  	emailC VARCHAR(40) UNIQUE NOT NULL CHECK (emailC LIKE '%@%'),
  	adresseC TEXT,
  	villeC VARCHAR(30),
  	motdepasse_client VARCHAR(30)
);

--TABLE Magasin
CREATE TABLE IF NOT EXISTS Magasin (
	idM SERIAL PRIMARY KEY,
	idP_gerant INTEGER,
	nomM VARCHAR(30) NOT NULL,
	adresseM VARCHAR(30),
	numTelM VARCHAR(10) CHECK (numTelM LIKE '0%'),
	villeM VARCHAR(30),
	motdepasse_gerant VARCHAR(30),
	CONSTRAINT FK_Magasin_idP_gerant FOREIGN KEY (idP_gerant) REFERENCES Personnel(idP)
);
/* 
FK : idP_gerant Fait référence à idP(Personnel) */

--TABLE ComposantE
CREATE TABLE IF NOT EXISTS ComposantE (
	libelleCE VARCHAR(30) PRIMARY KEY,
	nomCE VARCHAR(30),
	descriptionCE TEXT,
	marque VARCHAR(30)
);

--TABLE Achat
CREATE TABLE IF NOT EXISTS Achat (
	idA SERIAL PRIMARY KEY,
	comment CHAR	
);

--TABLE DateEntite
CREATE TABLE IF NOT EXISTS DateEntite (
	dateE DATE PRIMARY KEY
);


/*--- Les asociations ---*/
--TABLE travailler
CREATE TABLE IF NOT EXISTS travailler (
	idP INTEGER,
	dateE DATE,
	idM INTEGER,
	CONSTRAINT PK_travailler PRIMARY KEY (idP,dateE,idM),
	CONSTRAINT FK_travailler_idP FOREIGN KEY (idP) REFERENCES Personnel(idP),
	CONSTRAINT FK_travailler_dateE FOREIGN KEY (dateE) REFERENCES DateEntite(dateE),
	CONSTRAINT FK_travailler_idM FOREIGN KEY (idM) REFERENCES Magasin(idM)
);
/*
PK : (idP,dateT,idM)
FK : idP(travailler) fait référence à idP(Personnel)
FK : dateE(travailler) fait référence à dateE(DateEntite)
FK : idM(travailler) fait référence à idM(Magasin)
*/

--TABLE accederInfo
CREATE TABLE IF NOT EXISTS accederInfo (
	idM INTEGER,
	idC INTEGER,
	CONSTRAINT PK_accederInfo PRIMARY KEY (idM,idC),
	CONSTRAINT FK_accederInfo_idM FOREIGN KEY (idM) REFERENCES Magasin(idM),
	CONSTRAINT FK_accederInfo_idC FOREIGN KEY (idC) REFERENCES Client(idC)
);
/*
PK : (idM,idC)
FK : idM(accederInfo) fait référence à idM(Magasin)
Fk : idC(accederInfo) fait reference à idC(Client)
*/

--TABLE vendre
CREATE TABLE IF NOT EXISTS vendre (
	libelleCE VARCHAR(30),
	idM INTEGER,
	CONSTRAINT PK_vendre PRIMARY KEY (libelleCE,idM),
	CONSTRAINT FK_vendre_libelleCE FOREIGN KEY (libelleCE) REFERENCES ComposantE(libelleCE),
	CONSTRAINT FK_vendre_idM FOREIGN KEY (idM) REFERENCES Magasin(idM)
);
/*
PK : (libelleCE,idM)
FK : libelleCE(vendre) fait référence à libelleCE(ComposantE)
FK : idM(vendre) fait référence à idM(Magasin)
*/

/*--- Les associations provisoires ---*/

--TABLE acheter
CREATE TABLE IF NOT EXISTS acheter (
	idC INTEGER,
	dateE DATE,
	idA INTEGER,
	idP INTEGER, /* Peut être null car si achat sur internet pas de vendeur */
	quantite INTEGER NOT NULL,
	CONSTRAINT PK_acheter PRIMARY KEY (idC,dateE,idA),
	CONSTRAINT FK_acheter_idC FOREIGN KEY (idC) REFERENCES Client(idC),
	CONSTRAINT FK_acheter_dateE FOREIGN KEY (dateE) REFERENCES DateEntite(dateE),
	CONSTRAINT FK_acheter_idP FOREIGN KEY (idP) REFERENCES Personnel(idP),
	CONSTRAINT FK_acheter_idA FOREIGN KEY (idA) REFERENCES Achat(idA)
);
/*
PK : (idC,dateA,idA)
FK : idC(acheter) fait référence à idC(Client)
FK : dateE(acheter) fait référence à dateE(DateEntite)
FK : idA(acheter) fait référence à idA(Achat)
FK : idP(acheter) fait référence à idP(Personnel)
*/

--TABLE provenance
CREATE TABLE IF NOT EXISTS provenance (
	libelleCE VARCHAR(30),
	idM INTEGER,
	idA INTEGER,
	CONSTRAINT PK_provenance PRIMARY KEY (libelleCE,idM,idA),
	CONSTRAINT FK_provenance_libelleCE FOREIGN KEY (libelleCE) REFERENCES ComposantE(libelleCE),
	CONSTRAINT FK_provenance_idM FOREIGN KEY (idM) REFERENCES Magasin(idM),
	CONSTRAINT FK_provenance_idA FOREIGN KEY (idA) REFERENCES Achat(idA)
);
/*
PK : (libelleCE,idM,idA)
FK : libelleCE(provenance) fait référence à libelleCE(ComposantE)
FK : idM(provenance) fait référence à idM(Magasin)
FK : idA(provenance) fait référence à idA(Achat)
*/

