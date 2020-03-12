CREATE DATABASE bauunternehmen;

CREATE TABLE `bauunternehmen`.`address` (
    `addressID` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255),
    `email` VARCHAR(255),
    `telephone` VARCHAR(255),
    `addressL1` VARCHAR (255),
    `addressL2` VARCHAR (255),
    PRIMARY KEY (`addressID`)
);

CREATE TABLE `bauunternehmen`.`importances` (
    `importanceID` INT NOT NULL AUTO_INCREMENT,
    `importanceText` VARCHAR(255) NULL,
    `totalTime` INT NULL,
    PRIMARY KEY (`importanceID`)
);

CREATE TABLE `bauunternehmen`.`tools` (
    `toolID` INT NOT NULL AUTO_INCREMENT,
    `toolName` VARCHAR(255),
    PRIMARY KEY (`toolID`)
);

CREATE TABLE `bauunternehmen`.`status` (
    `statusID` INT NOT NULL AUTO_INCREMENT,
    `statusName` VARCHAR(255),
    PRIMARY KEY (`statusID`)
);

CREATE TABLE `bauunternehmen`.`orders` (
    `orderID` INT NOT NULL AUTO_INCREMENT,
    `F_addressID` INT NULL,
    `F_importanceID` INT NULL,
    `F_toolID` INT NULL,
    `F_statusID` INT NULL,
    `D_erfasst` DATE
    PRIMARY KEY (`orderID`)
);

/* Too lazy to code this, switch to Bauunternehmen SQL Console */

ALTER TABLE
    `orders`
ADD
    FOREIGN KEY (`F_addressID`) REFERENCES `address`(`addressID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE
    `orders`
ADD
    FOREIGN KEY (`F_statusID`) REFERENCES `status`(`statusID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE
    `orders`
ADD
    FOREIGN KEY (`F_importanceID`) REFERENCES `importances`(`importanceID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE
    `orders`
ADD
    FOREIGN KEY (`F_toolID`) REFERENCES `tools`(`toolID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

INSERT INTO
    `status` (`statusID`, `statusName`)
VALUES
    (1, 'Aktiv'),
    (2, 'Abgeschlossen');

INSERT INTO
    `tools` (`toolID`, `toolName`)
VALUES
    (3, 'Abisolierzange'),
    (4, 'Abflussspirale'),
    (5, 'Abzieher'),
    (6, 'Abziehstein'),
    (7, 'Absetzzange'),
    (8, 'Aderendhülsenzange'),
    (9, 'Ahle'),
    (10, 'Amboss'),
    (11, 'Anschlageisen'),
    (12, 'Anschlagwinkel'),
    (13, 'Auftreibschere'),
    (14, 'Ausreiber'),
    (15, 'Ausschlageisen, siehe Locheisen'),
    (16, 'Axt'),
    (17, 'Bandhacke'),
    (18, 'Bandhaken'),
    (19, 'Bandschlüssel'),
    (20, 'Bär'),
    (21, 'Bauchzange'),
    (22, 'Beil'),
    (23, 'Beitel'),
    (24, 'Bergeisen'),
    (25, 'Besen'),
    (26, 'Biegeeisen'),
    (27, 'Bindermesser'),
    (28, 'Bit'),
    (29, 'Blechschere'),
    (30, 'Bohrer'),
    (31, 'Bohrkrone siehe Bohrer'),
    (32, 'Bohrsäge siehe Stichling'),
    (33, 'Bolzenschneider'),
    (34, 'Brechstange'),
    (35, 'Bundaxt, siehe Bandhacke'),
    (36, 'Bundsäge, siehe Säge'),
    (37, 'Burin'),
    (38, 'Bürste'),
    (39, 'Crimp-Zange'),
    (40, 'Cutter (Messer)'),
    (41, 'Dampfhammer, siehe Fallhammer'),
    (42, 'Dengelhammer'),
    (43, 'Dechsel (auch Dachsbeil)'),
    (44, 'Dekupiersäge'),
    (45, 'Diamant-Trennscheibe'),
    (46, 'Dietrich'),
    (47, 'Doppelhobel'),
    (48, 'Dorn'),
    (49, 'Drahtbürste'),
    (50, 'Dreget'),
    (51, 'Drehmeissel'),
    (52, 'Drehmomentschlüssel'),
    (53, 'Drehpfahl'),
    (54, 'Drehstahl siehe Drehmeissel'),
    (55, 'Drillbohrer'),
    (56, 'Drucklufthammer'),
    (57, 'Druckluftnadler'),
    (58, 'Dübeleisen'),
    (59, 'Elektropick, siehe E-pick'),
    (60, 'Engländer'),
    (61, 'Fällaxt, siehe Axt'),
    (62, 'Fallhammer'),
    (63, 'Falzhobel, siehe Hobel'),
    (64, 'Fäustel'),
    (65, 'Federhaken'),
    (66, 'Federspanner'),
    (67, 'Feile'),
    (68, 'Feilkloben'),
    (69, 'Feinsäge'),
    (70, 'Fettpresse'),
    (71, 'Feststellzange (Gripzange)'),
    (72, 'Filete'),
    (73, 'Filzbrett'),
    (74, 'Flachzange'),
    (75, 'Fliesenschneider'),
    (76, 'Fliesenlöser'),
    (77, 'Forstnerbohrer'),
    (78, 'Franzose'),
    (79, 'Fräser'),
    (80, 'Fräsrädchen'),
    (81, 'Friktionshammer, siehe Fallhammer'),
    (82, 'Fuchsschwanz (Säge)'),
    (83, 'Fügebock'),
    (84, 'Fügelade'),
    (85, 'Furniersäge, siehe Säge'),
    (
        86,
        'Gabelschlüssel (auch Maulschlüssel genannt)'
    ),
    (87, 'Gasrohrkluppe'),
    (88, 'Gehrungsschmiege'),
    (89, 'Gehrungssäge'),
    (90, 'Geissfuss'),
    (91, 'Geradschere'),
    (92, 'Gestellsäge'),
    (93, 'Gewindebohrer'),
    (94, 'Gewindeschneider'),
    (95, 'Gewindefeile'),
    (96, 'Glasbrechzange'),
    (97, 'Glaserzange'),
    (98, 'Glasmacherpfeife'),
    (99, 'Glasschneider'),
    (100, 'Glättkelle'),
    (101, 'Grabgabel'),
    (102, 'Grabstichel'),
    (103, 'Gratsäge'),
    (104, 'Gripzange'),
    (105, 'Grundsäge'),
    (106, 'Gummihammer'),
    (107, 'Hacke – siehe auch Axt'),
    (108, 'Hahnenschlüssel'),
    (109, 'Halbdiamant'),
    (110, 'Halligan-Tool'),
    (111, 'Hammer'),
    (112, 'Handpumpe'),
    (113, 'Handramme'),
    (114, 'Harke, siehe Hacke oder Rechen'),
    (115, 'Haspel'),
    (116, 'Haue, siehe Hacke'),
    (117, 'Hebeisen'),
    (118, 'Hebebock'),
    (119, 'Hebelvornschneider'),
    (120, 'Hefteisen'),
    (121, 'Hobel'),
    (122, 'Hobelbank'),
    (123, 'Hobelmeissel'),
    (124, 'Höhenreisser'),
    (125, 'Hohleisen'),
    (126, 'Honahle'),
    (127, 'Holzform (Glasmacher)'),
    (
        128,
        'Innensechskant-Schlüssel (auch Inbusschlüssel genannt)'
    ),
    (129, 'Iler (Schabeisen der Kammmacher)'),
    (130, 'Justorium'),
    (131, 'Kanonenbohrer'),
    (132, 'Kantring'),
    (133, 'Kapselheber, auch Flaschenöffner'),
    (134, 'Keilhaue'),
    (135, 'Kelle siehe Maurerkelle'),
    (136, 'Kittmesser, siehe Messer'),
    (137, 'Klaue, auch als Maschinenteil'),
    (138, 'Klopfholz'),
    (139, 'Klüpfel'),
    (140, 'Kluppe'),
    (141, 'Knarre (Werkzeug)'),
    (
        142,
        'Knebel (Werkzeug) auch Schiebstück mit Drehstange'
    ),
    (143, 'Knipp'),
    (144, 'Knochen'),
    (145, 'Knüpfel'),
    (146, 'Knüppel'),
    (147, 'Kombizange'),
    (148, 'Konterpunze'),
    (149, 'Körner'),
    (150, 'Kornhammer'),
    (151, 'Krätzer'),
    (
        152,
        'Kreuzhacke, auch Pickel genannt, siehe Spitzhacke'
    ),
    (
        153,
        'Kreuzschlitzschraubendreher, siehe Schraubendreher'
    ),
    (154, 'Kreuzschlüssel'),
    (155, 'Kröselzange'),
    (156, 'Kugelhammer'),
    (157, 'Kuhfuss (Werkzeug)'),
    (158, 'Kurbelhammer, siehe Fallhammer'),
    (159, 'Laubsäge'),
    (160, 'Leatherman'),
    (161, 'Linksausdreher'),
    (162, 'Lochbeitel, siehe Beitel'),
    (163, 'Locheisen'),
    (164, 'Lochfräser, siehe Fräswerkzeug'),
    (165, 'Lochsäge, siehe Säge'),
    (166, 'Lochstanze'),
    (167, 'Lochzange'),
    (168, 'Lohlöffel'),
    (169, 'Lötkolben'),
    (170, 'Lötlampe'),
    (171, 'Maishacke, siehe Axt'),
    (
        172,
        'Maulschlüssel (auch Gabelschlüssel genannt)'
    ),
    (173, 'Maurerkelle'),
    (174, 'Meissel'),
    (175, 'Meisselbohrer'),
    (176, 'Messer'),
    (177, 'Metallsäge'),
    (178, 'Mikrolith'),
    (179, 'Monierzange'),
    (180, 'Montiereisen'),
    (181, 'Multifunktionswerkzeug'),
    (182, 'Mutternsprenger'),
    (183, 'Nadel'),
    (184, 'Nagel'),
    (185, 'Nageleisen'),
    (186, 'Nagelklaue'),
    (187, 'Nähross, siehe Schraubstock und Sattler'),
    (188, 'Nietenzieher'),
    (189, 'Nietwerkzeuge'),
    (190, 'Nippelspanner'),
    (191, 'Nuthobel, siehe Hobel'),
    (192, 'Nuss, siehe Schraubenschlüssel'),
    (193, 'Ölauffangbehälter'),
    (194, 'Ölfilterschlüssel'),
    (195, 'Ölkanne'),
    (196, 'Ölstein'),
    (197, 'Papiermesser'),
    (
        198,
        'Pickel, auch Kreuzhacke genannt, siehe Spitzhacke'
    ),
    (199, 'Pinsel'),
    (200, 'Pinzette'),
    (201, 'Pistill, siehe auch Reibschale'),
    (202, 'Presszange'),
    (203, 'Puksäge'),
    (204, 'Pumpe'),
    (205, 'Punze (Werkzeug)'),
    (206, 'Raspel'),
    (207, 'Ratsche'),
    (208, 'Raubank'),
    (209, 'Räumaxt, siehe Axt'),
    (210, 'Räumnadel'),
    (211, 'Räumwerkzeug'),
    (212, 'Rechen'),
    (213, 'Reibahle'),
    (214, 'Reibebrett'),
    (215, 'Reibschale'),
    (216, 'Reifkloben'),
    (217, 'Reissnadel'),
    (218, 'Ringschlüssel'),
    (219, 'Rohrausklinker'),
    (220, 'Rohrentgrater'),
    (221, 'Rohrexpander'),
    (222, 'Rohrzange'),
    (223, 'Rundglasschneider, siehe Zirkelschneider'),
    (224, 'Rundschere'),
    (225, 'Rundlochstanze'),
    (226, 'Sackbohrer'),
    (227, 'Säge'),
    (228, 'Sammethaken'),
    (229, 'Sammetmesser'),
    (230, 'Samthaken'),
    (231, 'Samtmesser'),
    (232, 'Sappi, Sappel'),
    (233, 'Sapie'),
    (234, 'Schafschere'),
    (235, 'Schäferschippe'),
    (236, 'Schaufel'),
    (237, 'Schere'),
    (238, 'Schiessnadel'),
    (239, 'Schlägel'),
    (240, 'Schlagschere (Tafelschere)'),
    (241, 'Schlagstempel'),
    (242, 'Schlegel siehe Hammer'),
    (243, 'Schleifpapier'),
    (244, 'Schleifscheibe'),
    (245, 'Schleifstein'),
    (246, 'Schleifteller'),
    (247, 'Schlüsselfeile'),
    (248, 'Schmirgelkluppe (Eisendreher)'),
    (249, 'Schneideisen'),
    (
        250,
        'Schnitzpferd, siehe Schnitzbank und Schraubstock'
    ),
    (
        251,
        'Schraubendreher auch Schraubenzieher genannt'
    ),
    (252, 'Schraubenschlüssel'),
    (253, 'Schraubstock'),
    (254, 'Schraubzwinge'),
    (255, 'Schrotaxt, siehe Axt'),
    (256, 'Schrupphobel'),
    (257, 'Schwammbrett'),
    (258, 'Seitenschneider'),
    (259, 'Senker'),
    (260, 'Sense'),
    (261, 'Sichel'),
    (262, 'Sickenhammer'),
    (263, 'Simshobel'),
    (264, 'Skalpell'),
    (265, 'Skelettpistole'),
    (266, 'Spachtel'),
    (267, 'Spaltaxt siehe Axt'),
    (268, 'Spalter'),
    (269, 'Spalthammer'),
    (270, 'Span'),
    (271, 'Spanner'),
    (272, 'Spaten'),
    (273, 'Spitzhammer'),
    (274, 'Spitzzange'),
    (275, 'Splintentreiber'),
    (
        276,
        'Spritzgusswerkzeug siehe Spritzgiesswerkzeug'
    ),
    (277, 'Stahllineal'),
    (278, 'Stampfer'),
    (279, 'Standhahnmutterschlüssel'),
    (280, 'Stangen-Schlangenbohrer siehe Bohrer'),
    (281, 'Stechbeitel siehe Beitel'),
    (282, 'Stemmeisen'),
    (283, 'Stichaxt'),
    (284, 'Stichling'),
    (285, 'Stichsäge'),
    (286, 'Stift'),
    (287, 'Stifthammer, siehe Hammer'),
    (288, 'Storchschnabelzange'),
    (289, 'Streichmass'),
    (290, 'Strukturzange (Glasmacher)'),
    (291, 'Stupspinsel (auch Schablonierpinsel)'),
    (292, 'Tacker'),
    (293, 'Täcks'),
    (294, 'Tafelschere (Schlagschere)'),
    (295, 'Tapetenmesser, siehe Messer'),
    (296, 'Teppichmesser, siehe Cutter (Messer)'),
    (297, 'Tasso (Werkzeug)'),
    (298, 'Tjanting'),
    (299, 'Thermosäge'),
    (300, 'Transmissionshammer, siehe Fallhammer'),
    (301, 'Traufel, siehe Glättkelle'),
    (302, 'Trennscheibe'),
    (303, 'Tuschierlineal'),
    (304, 'Tuschierplatte'),
    (305, 'Twinsäge'),
    (306, 'Versenker, siehe Ausreiber'),
    (307, 'Vertikalhammer, siehe Fallhammer'),
    (308, 'Vierkantschlüssel, kurz Vierkant'),
    (309, 'Waldaxt, siehe Axt'),
    (310, 'Walze'),
    (311, 'Wasserpumpenzange'),
    (312, 'Windeisen, siehe Gewindebohrer'),
    (313, 'Winkelschere, siehe Schere'),
    (314, 'Wölbungshobel'),
    (315, 'Wulgerholzlöffel'),
    (316, 'Zahnkamm'),
    (317, 'Zahnkelle, siehe Glättkelle'),
    (318, 'Zange'),
    (319, 'Zapine, Zappel'),
    (320, 'Zentrierbohrer'),
    (321, 'Zentrierwinkel'),
    (322, 'Zieheisen'),
    (323, 'Ziehfeder'),
    (324, 'Ziehklinge'),
    (325, 'Zimmeraxt, siehe Bandhacke'),
    (326, 'Zirkel'),
    (327, 'Zirkelschneider'),
    (328, 'Zugmesser'),
    (329, 'Zwackeisen'),
    (330, 'Zwinge'),
    (331, 'Zinnmesser');

INSERT INTO
    `address` (
        `name`,
        `email`,
        `telephone`,
        `addressL1`,
        `addressL2`
    )
VALUES
    (
        'Yazdan Musa',
        'yazdanmusa@muster.com',
        '+41778015555',
        'Musterstrasse 1',
        '6969 Musterdorf'
    ),
    (
        'Enis Hoti',
        'enishoti@muster.com',
        '+4177801532345',
        'Musterstrasse 21',
        '6969 Musterdorf'
    );

INSERT INTO
    `importances` (
        `importanceText`,
        `totalTime`
    )
VALUES
    ('sehr tief', '25'),
    ('tief', '20'),
    ('normal', '15'),
    ('hoch', '10'),
    ('sehr hoch', '5');

INSERT INTO
    `orders` (
        `orderID`,
        `F_addressID`,
        `F_importanceID`,
        `F_toolID`,
        `F_statusID`
    )
VALUES
    (NULL, '1', '4', '3', '2');