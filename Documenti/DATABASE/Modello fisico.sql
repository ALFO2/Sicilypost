
--Nome Database:  db_sicilypost

CREATE TABLE  addetto  (
   ID_addetto  int(11) NOT NULL,
   Nome  varchar(25) NOT NULL,
   Cognome  varchar(25) NOT NULL,
   Codice_fiscale  varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE arrivi_so (
  ID_Arrivi_so int(11) NOT NULL,
  COD_pacco int(11) NOT NULL,
  Data date NOT NULL,
  ora time NOT NULL,
  COD_so int(11) NOT NULL,
  COD_addetto int(11) NOT NULL
) ;

CREATE TABLE arrivo (
  ID_arrivo_csr int(11) NOT NULL,
  Cod_pacco int(11) NOT NULL,
  Data date NOT NULL,
  ora time NOT NULL,
  COD_csr int(11) NOT NULL,
  COD_addetto int(11) NOT NULL
) ;


CREATE TABLE carte (
  ID_carta int(11) NOT NULL,
  Numero_carta int(11) NOT NULL,
  CVV int(11) NOT NULL,
  COD_utente int(11) NOT NULL,
  Data_scadenza date NOT NULL
) ;


CREATE TABLE consegna (
  ID_consegna int(11) NOT NULL,
  Data date NOT NULL,
  Ora time NOT NULL,
  COD_utente int(11) NOT NULL,
  COD_pacco int(11) NOT NULL
) ;

CREATE TABLE csr (
  ID_csr int(11) NOT NULL,
  Città int(11) NOT NULL,
  COD_regione int(11) NOT NULL,
  N_civ int(11) NOT NULL,
  Via varchar(50) NOT NULL
) ;


CREATE TABLE destinatario (
  ID_destinaratio int(11) NOT NULL,
  Città int(11) NOT NULL,
  Via int(11) NOT NULL,
  COD_regione int(11) NOT NULL,
  Nome int(11) NOT NULL,
  COD_pacco int(11) NOT NULL
) ;


CREATE TABLE destinazione (
  ID_destinazione int(11) NOT NULL,
  Data date NOT NULL,
  Ora time NOT NULL,
  COD_pacco int(11) NOT NULL,
  COD_addetto int(11) NOT NULL
) ;


CREATE TABLE pacco (
  ID_pacco int(11) NOT NULL,
  Typo varchar(20) NOT NULL,
  Peso int(3) NOT NULL
) ;



CREATE TABLE prenotazione (
  ID_prenotazione int(11) NOT NULL,
  Data date NOT NULL,
  COD_utente int(11) NOT NULL,
  Numero_pacchi int(11) NOT NULL
) ;


CREATE TABLE regioni (
  ID_regione int(11) NOT NULL,
  Regione varchar(20) NOT NULL
) ;


INSERT INTO regioni (ID_regione, Regione) VALUES
(1, 'Abruzzo'),
(2, 'Basilicata'),
(3, 'Calabria'),
(4, 'Campania'),
(5, 'Emilia-Romagna'),
(6, 'Friuli Venezia Giuli'),
(7, 'Lazio'),
(8, 'Liguria'),
(9, 'Lombardia'),
(10, 'Marche'),
(11, 'Molise'),
(12, 'Piemonte'),
(13, 'Puglia'),
(14, 'Sardegna'),
(15, 'Sicilia'),
(16, 'Toscana'),
(17, 'Trentino-Alto Adige'),
(18, 'Umbria'),
(19, 'Valle d\'Aosta'),
(20, 'Veneto'),
(26, 'Friuli Venezia Giuli'),
(27, 'Lazio'),
(28, 'Liguria'),
(29, 'Lombardia'),
(30, 'Marche'),
(31, 'Molise'),
(32, 'Piemonte'),
(33, 'Puglia'),
(34, 'Sardegna'),
(35, 'Sicilia'),
(36, 'Toscana'),
(37, 'Trentino-Alto Adige'),
(38, 'Umbria'),
(39, 'Valle d\'Aosta'),
(40, 'Veneto');


CREATE TABLE ritiro (
  ID_ritiro int(11) NOT NULL,
  Data date NOT NULL,
  ora time NOT NULL,
  COD_prenotazione int(11) NOT NULL,
  COD_addetto int(11) NOT NULL,
  Numero_pacchi_ritirati int(2) NOT NULL,
  COD_pacco int(11) NOT NULL
) ;


CREATE TABLE so (
  ID_so int(11) NOT NULL,
  Città int(11) NOT NULL,
  Via int(11) NOT NULL,
  N_civ int(11) NOT NULL,
  COD_csr int(11) NOT NULL
) ;


CREATE TABLE utente (
  ID_utente int(11) NOT NULL,
  Nome varchar(25) NOT NULL,
  Cognome varchar(25) NOT NULL,
  Età int(2) NOT NULL,
  COD_regione int(11) NOT NULL,
  Via varchar(50) NOT NULL,
  Città varchar(30) NOT NULL,
  N_civ int(11) NOT NULL,
  Cap int(11) NOT NULL,
  Codice_fiscale varchar(16) NOT NULL,
  Email varchar(50) NOT NULL,
  Password varchar(300) NOT NULL
) ;


INSERT INTO utente (ID_utente, Nome, Cognome, Età, COD_regione, Via, Città, N_civ, Cap, Codice_fiscale, Email,Password) VALUES
(3, 'paul', 'alarcon', 18, 9, 'via per imbersago', 'milano', 51, 20092, 'sdajkdjgdjgajdk', 'pauloalarcon76@gmail.com', 'pino_2Bello'),
(4, 'marco', 'signno', 18, 7, 'via per meloni', 'milano', 102, 2077, 'sdadihaksfhkjhfs', 'marcosigno76@gmail.com', 'marco.bello89'),
(5, 'marco', 'signno', 17, 10, 'via per melono', 'milano', 102, 2077, 'sdadihaksfhkjhfs', 'marcosgno76@gmail.com', 'marco.bello89');


ALTER TABLE addetto
  ADD PRIMARY KEY (ID_addetto);


ALTER TABLE  arrivi_so
  ADD PRIMARY KEY ( ID_Arrivi_so ),
  ADD KEY  COD_pacco  ( COD_pacco ),
  ADD KEY  COD_addetto  ( COD_addetto ),
  ADD KEY  COD_so  ( COD_so );

ALTER TABLE  arrivo_csr
  ADD PRIMARY KEY ( ID_arrivo_csr ),
  ADD KEY  Cod_pacco  ( Cod_pacco ),
  ADD KEY  COD_addetto  ( COD_addetto ),
  ADD KEY  COD_csr  ( COD_csr );


ALTER TABLE  carte
  ADD PRIMARY KEY ( ID_carta ),
  ADD KEY  COD_utente  ( COD_utente );


ALTER TABLE  consegna
  ADD PRIMARY KEY ( ID_consegna ),
  ADD KEY  COD_utente  ( COD_utente ),
  ADD KEY  COD_pacco  ( COD_pacco );

ALTER TABLE  csr
  ADD PRIMARY KEY ( ID_csr ),
  ADD KEY  COD_regione  ( COD_regione );

ALTER TABLE  destinatario
  ADD KEY  COD_pacco  ( COD_pacco );


ALTER TABLE  destinazione
  ADD PRIMARY KEY ( ID_destinazione ),
  ADD KEY  COD_pacco  ( COD_pacco ),
  ADD KEY  COD_addetto  ( COD_addetto );


ALTER TABLE  pacco
  ADD PRIMARY KEY ( ID_pacco );

ALTER TABLE  prenotazione
  ADD PRIMARY KEY ( ID_prenotazione ),
  ADD KEY  COD_utente  ( COD_utente );

ALTER TABLE  regioni
  ADD PRIMARY KEY ( ID_regione );

ALTER TABLE  ritiro
  ADD PRIMARY KEY ( ID_ritiro ),
  ADD KEY  COD_prenotazione  ( COD_prenotazione ),
  ADD KEY  COD_pacco  ( COD_pacco ),
  ADD KEY  COD_addetto  ( COD_addetto );

ALTER TABLE  so
  ADD PRIMARY KEY ( ID_so ),
  ADD KEY  COD_csr  ( COD_csr );

ALTER TABLE  utente
  ADD PRIMARY KEY ( ID_utente ),
  ADD KEY  COD_regione  ( COD_regione );

ALTER TABLE  addetto
  MODIFY  ID_addetto  int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE  arrivi_so
  MODIFY  ID_Arrivi_so  int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE  arrivo_csr
  MODIFY  ID_arrivo_csr  int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE  carte
  MODIFY  ID_carta  int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE  consegna
  MODIFY  ID_consegna  int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE  csr
  MODIFY  ID_csr  int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE  destinazione
  MODIFY  ID_destinazione  int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE  pacco
  MODIFY  ID_pacco  int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE  prenotazione
  MODIFY  ID_prenotazione  int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE  regioni
  MODIFY  ID_regione  int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

ALTER TABLE  ritiro
  MODIFY  ID_ritiro  int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE  so
  MODIFY  ID_so  int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE  utente
  MODIFY  ID_utente  int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE  arrivi_so
  ADD CONSTRAINT  arrivi_so_ibfk_1  FOREIGN KEY ( COD_pacco ) REFERENCES  pacco  ( ID_pacco ),
  ADD CONSTRAINT  arrivi_so_ibfk_2  FOREIGN KEY ( COD_pacco ) REFERENCES  pacco  ( ID_pacco ),
  ADD CONSTRAINT  arrivi_so_ibfk_3  FOREIGN KEY ( COD_addetto ) REFERENCES  addetto  ( ID_addetto ),
  ADD CONSTRAINT  arrivi_so_ibfk_4  FOREIGN KEY ( COD_so ) REFERENCES  so  ( ID_so ),
  ADD CONSTRAINT  arrivi_so_ibfk_5  FOREIGN KEY ( COD_so ) REFERENCES  so  ( ID_so ),
  ADD CONSTRAINT  arrivi_so_ibfk_6  FOREIGN KEY ( COD_so ) REFERENCES  so  ( ID_so ),
  ADD CONSTRAINT  arrivi_so_ibfk_7  FOREIGN KEY ( COD_so ) REFERENCES  so  ( ID_so );

ALTER TABLE  arrivo_csr
  ADD CONSTRAINT  arrivo_csr_ibfk_1  FOREIGN KEY ( Cod_pacco ) REFERENCES  pacco  ( ID_pacco ),
  ADD CONSTRAINT  arrivo_csr_ibfk_2  FOREIGN KEY ( Cod_pacco ) REFERENCES  pacco  ( ID_pacco ),
  ADD CONSTRAINT  arrivo_csr_ibfk_3  FOREIGN KEY ( COD_addetto ) REFERENCES  addetto  ( ID_addetto ),
  ADD CONSTRAINT  arrivo_csr_ibfk_4  FOREIGN KEY ( COD_csr ) REFERENCES  csr  ( ID_csr );

ALTER TABLE  carte
  ADD CONSTRAINT  carte_ibfk_1  FOREIGN KEY ( COD_utente ) REFERENCES  utente  ( ID_utente );

ALTER TABLE  consegna
  ADD CONSTRAINT  consegna_ibfk_1  FOREIGN KEY ( COD_utente ) REFERENCES  utente  ( ID_utente ),
  ADD CONSTRAINT  consegna_ibfk_2  FOREIGN KEY ( COD_utente ) REFERENCES  utente  ( ID_utente ),
  ADD CONSTRAINT  consegna_ibfk_3  FOREIGN KEY ( COD_pacco ) REFERENCES  pacco  ( ID_pacco );

ALTER TABLE  csr
  ADD CONSTRAINT  csr_ibfk_1  FOREIGN KEY ( COD_regione ) REFERENCES  regioni  ( ID_regione );

ALTER TABLE  destinatario
  ADD CONSTRAINT  destinatario_ibfk_1  FOREIGN KEY ( COD_pacco ) REFERENCES  pacco  ( ID_pacco ),
  ADD CONSTRAINT  destinatario_ibfk_2  FOREIGN KEY ( COD_pacco ) REFERENCES  pacco  ( ID_pacco ),
  ADD CONSTRAINT  destinatario_ibfk_3  FOREIGN KEY ( COD_pacco ) REFERENCES  pacco  ( ID_pacco ),
  ADD CONSTRAINT  destinatario_ibfk_4  FOREIGN KEY ( COD_pacco ) REFERENCES  pacco  ( ID_pacco );

ALTER TABLE  destinazione
  ADD CONSTRAINT  destinazione_ibfk_1  FOREIGN KEY ( COD_pacco ) REFERENCES  pacco  ( ID_pacco ),
  ADD CONSTRAINT  destinazione_ibfk_2  FOREIGN KEY ( COD_pacco ) REFERENCES  pacco  ( ID_pacco ),
  ADD CONSTRAINT  destinazione_ibfk_3  FOREIGN KEY ( COD_addetto ) REFERENCES  addetto  ( ID_addetto );

ALTER TABLE  prenotazione
  ADD CONSTRAINT  prenotazione_ibfk_1  FOREIGN KEY ( COD_utente ) REFERENCES  utente  ( ID_utente );

ALTER TABLE  ritiro
  ADD CONSTRAINT  ritiro_ibfk_1  FOREIGN KEY ( COD_prenotazione ) REFERENCES  prenotazione  ( ID_prenotazione ),
  ADD CONSTRAINT  ritiro_ibfk_2  FOREIGN KEY ( COD_pacco ) REFERENCES  pacco  ( ID_pacco ),
  ADD CONSTRAINT  ritiro_ibfk_3  FOREIGN KEY ( COD_addetto ) REFERENCES  addetto  ( ID_addetto ),
  ADD CONSTRAINT  ritiro_ibfk_4  FOREIGN KEY ( COD_addetto ) REFERENCES  addetto  ( ID_addetto ),
  ADD CONSTRAINT  ritiro_ibfk_5  FOREIGN KEY ( COD_addetto ) REFERENCES  addetto  ( ID_addetto ),
  ADD CONSTRAINT  ritiro_ibfk_6  FOREIGN KEY ( COD_addetto ) REFERENCES  addetto  ( ID_addetto ),
  ADD CONSTRAINT  ritiro_ibfk_7  FOREIGN KEY ( COD_addetto ) REFERENCES  addetto  ( ID_addetto ),
  ADD CONSTRAINT  ritiro_ibfk_8  FOREIGN KEY ( COD_addetto ) REFERENCES  addetto  ( ID_addetto );

ALTER TABLE  so
  ADD CONSTRAINT  so_ibfk_1 FOREIGN KEY ( COD_csr ) REFERENCES  csr  ( ID_csr ),
  ADD CONSTRAINT  so_ibfk_2  FOREIGN KEY ( COD_csr ) REFERENCES  csr  ( ID_csr );

ALTER TABLE  utente
  ADD CONSTRAINT  utente_ibfk_1  FOREIGN KEY ( COD_regione ) REFERENCES  regioni  ( ID_regione );
COMMIT;
