-- Napisati sve ispite koje su održani na fakultetu (ispisati ime i prezime studenta koji polaze ispit, 
-- naziv predmeta, ime i prezime profesora, datum polaganja, kao i ocenu koju je dobio).

-- skelet
SELECT * FROM `ispiti` 
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`;
-- medjukorak
SELECT `studenti`.`ime`, `studenti`.`prezime`, `predmeti`.`naziv`, `nastavnici`.`ime`, `nastavnici`.`prezime`, `ispiti`.`datum`, `ispiti`.`ocena`
FROM `ispiti` 
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`;
-- 1 konacno: 
SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `Student`,
`predmeti`.`naziv` AS `predmet`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`) AS `Nastavnik`,
`ispiti`.`datum`, `ispiti`.`ocena`
FROM `ispiti` 
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`;

-- 2 Uraditi prethodni zadatak, samo ispisati one ispite koji su se polagali određenog dana.
SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `Student`,
`predmeti`.`naziv` AS `predmet`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`) AS `Nastavnik`,
`ispiti`.`datum`, `ispiti`.`ocena`
FROM `ispiti` 
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE ispiti.datum="2023-04-17";

-- 3 Za dato ime i prezime studenta, ispisati sve ispite koje je polagao dati student.
SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `Student`,
`predmeti`.`naziv` AS `predmet`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`) AS `Nastavnik`,
`ispiti`.`datum`, `ispiti`.`ocena`
FROM `ispiti` 
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE studenti.ime="Marijana" AND studenti.prezime="Tomic";

-- 4 Uraditi zadatak 3) tako da se ispišu samo takvi ispiti na kojima je ocena veća od 8.
SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `Student`,
`predmeti`.`naziv` AS `predmet`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`) AS `Nastavnik`,
`ispiti`.`datum`, `ispiti`.`ocena`
FROM `ispiti` 
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE studenti.ime="Marijana" AND studenti.prezime="Tomic" AND ispiti.ocena >= 6;

-- 5 Za dato ime i prezime studenta, odrediti njegovu prosečnu ocenu.
SELECT AVG(ispiti.ocena) FROM ispiti
LEFT JOIN studenti ON ispiti.student_indeks=studenti.indeks
WHERE studenti.ime="Marijana" AND studenti.prezime="Tomic";

-- 6 Za dat naziv predmeta odrediti maksimalnu ocenu na nekom ispitu iz tog predmeta.
SELECT MAX(ispiti.ocena) FROM ispiti
LEFT JOIN predmeti ON ispiti.predmet_id=predmeti.id
WHERE predmeti.naziv="PHP"; -- treba i datum jer se php polagao dvaput
-- ili
SELECT ispiti.ocena FROM ispiti
LEFT JOIN predmeti ON ispiti.predmet_id=predmeti.id
WHERE predmeti.naziv="PHP"
ORDER BY ispiti.ocena DESC
LIMIT 1;

-- 7 Za dat datum odrediti prosečnu ocenu svih ispita koji su se polagali u toj godini.
SELECT AVG(ocena) FROM ispiti
WHERE year(datum) = year("2023-04-17");



