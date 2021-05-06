USE `2tak hardware`;

DROP TABLE IF EXISTS `avis_produit`;
create table if not exists `avis_produit`
(
  `idAvis` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `note` float NOT NULL ,
  `commentaire` text NOT NULL ,
  `idProduit` int(11) NOT NULL,
  `idMembre` int(11) NOT NULL,
  CONSTRAINT fk_avis_produit FOREIGN KEY (`idProduit`) REFERENCES `produit`(`id`),
  CONSTRAINT fk_avis_membre FOREIGN KEY (`idMembre`) REFERENCES `membre`(`Id`)
)
ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `avis_produit`(`note`, `commentaire`, `idProduit`, `idMembre`) VALUES
(4.5, "Très bon ordinateur, je m'en sert pour travailler et jouer et ce de manière intensive. Il tient le coup sans broncher" , 1, 7),
(3.5, "A ce prix la j'espérais qu'il m'emmènerait au moins sur la lune que nenni!!", 1, 5),
(4, "Etant fan d'Apple, je n'ai pus m'en empêcher", 5, 3),
(4.75, "Il remplit son taf, très bon rapport qualité/prix", 14, 6);
