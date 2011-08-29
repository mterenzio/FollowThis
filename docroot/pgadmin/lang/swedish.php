<?php

	/**
	 * Swedish language file for phpPgAdmin.
	 * maintainer S. Malmqvist <samoola@slak.nu>
	 * Due to lack of SQL knowledge som translations may be wrong, mail me the correct one and ill fix it
	 *
	 * $Id: swedish.php,v 1.11 2007/04/24 11:42:07 soranzo Exp $
	 */

	// Language and character set
	$lang['applang'] = 'Swedish';
	$lang['appcharset'] = 'ISO-8859-1';
	$lang['applocale'] = 'sv_SE';
	$lang['appdbencoding'] = 'LATIN1';
	$lang['applangdir'] = 'ltr';

	// Welcome  
	$lang['strintro'] = 'V�lkommen till phpPgAdmin.';
	$lang['strppahome'] = 'phpPgAdmins Hemsida';
	$lang['strpgsqlhome'] = 'PostgreSQLs Hemsida';
	$lang['strpgsqlhome_url'] = 'http://www.postgresql.org/';
	$lang['strlocaldocs'] = 'PostgreSQLs Dokumentation (lokalt)';
	$lang['strreportbug'] = 'Rapportera ett fel';
	$lang['strviewfaq'] = 'Visa Fr�gor & Svar';
	$lang['strviewfaq_url'] = 'http://phppgadmin.sourceforge.net/?page=faq';
	
	// Basic strings
	$lang['strlogin'] = 'Logga in';
	$lang['strloginfailed'] = 'Inloggningen misslyckades';
	$lang['strlogindisallowed'] = 'Inloggningen ej till�ten';
	$lang['strserver'] = 'Server';
	$lang['strlogout'] = 'Logga ut';
	$lang['strowner'] = '�gare';
	$lang['straction'] = '�tg�rd';
	$lang['stractions'] = '�tg�rder';
	$lang['strname'] = 'Namn';
	$lang['strdefinition'] = 'Definition';
	$lang['strproperties'] = 'Egenskaper';
	$lang['strbrowse'] = 'Bl�ddra';
	$lang['strdrop'] = 'Ta bort';
	$lang['strdropped'] = 'Borttagen';
	$lang['strnull'] = 'Ingenting';
	$lang['strnotnull'] = 'Inte Ingenting';
	$lang['strfirst'] = '<< F�rsta';
	$lang['strlast'] = 'Sista >>';
	$lang['strprev'] = 'F�reg�ende';
	$lang['strfailed'] = 'Misslyckades';
	$lang['strnext'] = 'N�sta';
	$lang['strcreate'] = 'Skapa';
	$lang['strcreated'] = 'Skapad';
	$lang['strcomment'] = 'Kommentar';
	$lang['strlength'] = 'L�ngd';
	$lang['strdefault'] = 'Standardv�rde';
	$lang['stralter'] = '�ndra';
	$lang['strok'] = 'OK';
	$lang['strcancel'] = '�ngra';
	$lang['strsave'] = 'Spara';
	$lang['strreset'] = 'Nollst�ll';
	$lang['strinsert'] = 'Infoga';
	$lang['strselect'] = 'V�lj';
	$lang['strdelete'] = 'Radera';
	$lang['strupdate'] = 'Uppdatera';
	$lang['strreferences'] = 'Referencer';
	$lang['stryes'] = 'Ja';
	$lang['strno'] = 'Nej';
	$lang['strtrue'] = 'Sant';
	$lang['strfalse'] = 'Falskt';
	$lang['stredit'] = 'Redigera';
	$lang['strcolumns'] = 'Kolumner';
	$lang['strrows'] = 'Rad(er)';
	$lang['strrowsaff'] = 'Rad(er) P�verkade.';
	$lang['strobjects'] = 'Objekt';
	$lang['strexample'] = 't. ex.';
	$lang['strback'] = 'Bak�t';
	$lang['strqueryresults'] = 'S�kresultat';
	$lang['strshow'] = 'Visa';
	$lang['strempty'] = 'Tom';
	$lang['strlanguage'] = 'Spr�k';
	$lang['strencoding'] = 'Kodning';
	$lang['strvalue'] = 'V�rde';
	$lang['strunique'] = 'Unik';
	$lang['strprimary'] = 'Prim�r';
	$lang['strexport'] = 'Exportera';
	$lang['strimport'] = 'Importera';
	$lang['strsql'] = 'SQL';
	$lang['strgo'] = 'K�r';
	$lang['stradmin'] = 'Admin';
	$lang['strvacuum'] = 'St�da upp';
	$lang['stranalyze'] = 'Analysera';
	$lang['strclusterindex'] = 'Kluster';
	$lang['strclustered'] = 'Klustrat?';
	$lang['strreindex'] = '�terindexera';
	$lang['strrun'] = 'K�r';
	$lang['stradd'] = 'L�gg till';
	$lang['strinstead'] = 'G�r Ist�llet';
	$lang['strevent'] = 'H�ndelse';
	$lang['strformat'] = 'Format';
	$lang['strwhen'] = 'N�r';
	$lang['strdata'] = 'Data';
	$lang['strconfirm'] = 'Bekr�fta';
	$lang['strexpression'] = 'Uttryck';
	$lang['strellipsis'] = '...';
	$lang['strwhere'] = 'N�r';
	$lang['strexplain'] = 'F�rklara';
	$lang['strfind'] = 'S�k';
	$lang['stroptions'] = 'Alternativ';
	$lang['strrefresh'] = 'Uppdatera';
	$lang['strcollapse'] = 'F�rminska';
	$lang['strexpand'] = 'Ut�ka';
	$lang['strdownload'] = 'Ladda ner';
	$lang['strdownloadgzipped'] = 'Ladda ner komprimerat med gzip';
	$lang['strinfo'] = 'Info';
	$lang['stroids'] = 'OIDs';
	$lang['stradvanced'] = 'Avancerat';
	$lang['strvariables'] = 'Variabler';
	$lang['strprocess'] = 'Process';
	$lang['strprocesses'] = 'Processer';
	$lang['strsetting'] = 'Inst�llning';
	$lang['strparameters'] = 'Parametrar';

	// Error handling
	$lang['strnotloaded'] = 'Du har inte kompilerat in korrekt databasst�d i din PHP-installation.';
	$lang['strbadconfig'] = 'Din config.inc.php �r ej uppdaterad. Du m�ste �terskapa den fr�n den nya config.inc.php-dist.';
	$lang['strbadencoding'] = 'Misslyckades att s�tta klientkodning i databasen.';
	$lang['strbadschema'] = 'Otill�tet schema angett.';
	$lang['strinstatement'] = 'I p�st�ende:';
	$lang['strsqlerror'] = 'SQL fel:';
	$lang['strinvalidparam'] = 'Otill�tna scriptparametrar.';
	$lang['strnodata'] = 'Hittade inga rader.';
	$lang['strnoobjects'] = 'Hittade inga objekt.';
	$lang['strrownotunique'] = 'Ingen unik nyckel f�r denna rad.';
	$lang['strnoreportsdb'] = 'Du har inte skapat n�gon rapportdatabas. L�s filen INSTALL f�r instruktioner.';

	// Tables
	$lang['strtable'] = 'Tabell';
	$lang['strtables'] = 'Tabeller';
	$lang['strshowalltables'] = 'Visa alla tabeller';
	$lang['strnotables'] = 'Hittade inga tabeller.';
	$lang['strnotable'] = 'Hittade ingen tabell.';
	$lang['strcreatetable'] = 'Skapa tabell';
	$lang['strtablename'] = 'Tabellnamn';
	$lang['strtableneedsname'] = 'Du m�ste ge ett namn till din tabell.';
	$lang['strtableneedsfield'] = 'Du m�ste ange minst ett f�lt.';
	$lang['strtableneedscols'] = 'tabeller kr�ver ett till�tet antal kolumner.';
	$lang['strtablecreated'] = 'Tabell skapad.';
	$lang['strtablecreatedbad'] = 'Misslyckades med att skapa Tabell.';
	$lang['strconfdroptable'] = '�r du s�ker p� att du vill ta bort tabellen "%s"?';
	$lang['strtabledropped'] = 'Tabellen borttagen.';
	$lang['strinsertrow'] = 'Infoga rad';
	$lang['strtabledroppedbad'] = 'Misslyckades med att ta bort tabellen.';
	$lang['strrowinserted'] = 'Rad infogad.';
	$lang['strconfemptytable'] = '�r du s�ker p� att du vill t�mma tabellen "%s"?';
	$lang['strrowupdated'] = 'Rad uppdaterad.';
	$lang['strrowinsertedbad'] = 'Misslyckades att infoga rad.';
	$lang['strtableemptied'] = 'Tabellen t�md.';
	$lang['strrowupdatedbad'] = 'Misslyckades att uppdatera rad.';
	$lang['streditrow'] = '�ndra rad';
	$lang['strrowdeleted'] = 'Rad raderad.';
	$lang['strrowdeletedbad'] = 'Misslyckades att radera rad.';
	$lang['strfield'] = 'F�lt';
	$lang['strconfdeleterow'] = '�r du s�ker p� att du vill ta bort denna rad?';
	$lang['strnumfields'] = 'Antal f�lt';
	$lang['strsaveandrepeat'] = 'Infoga & Upprepa';
	$lang['strtableemptiedbad'] = 'Misslyckades med att t�mma tabellen';
	$lang['strdeleterow'] = 'Radera rad';
	$lang['strfields'] = 'F�lt';
	$lang['strfieldneedsname'] = 'Du m�ste namnge f�ltet';
	$lang['strcolumndropped'] = 'Kolumn raderad.';
	$lang['strselectallfields'] = 'V�lj alla f�lt';
	$lang['strselectneedscol'] = 'Du m�ste visa minst en kolumn';
	$lang['strselectunary'] = 'Un�ra operander kan ej ha v�rden.';
	$lang['strcolumnaltered'] = 'Kolumn �ndrad.';
	$lang['straltercolumn'] = '�ndra kolumn';
	$lang['strcolumnalteredbad'] = 'Misslyckades att �ndra kolumn.';
	$lang['strconfdropcolumn'] = '�r du s�ker p� att du vill radera kolumn "%s" fr�n tabell "%s"?';
	$lang['strcolumndroppedbad'] = 'Misslyckades att radera kolumn.';
	$lang['straddcolumn'] = 'L�gg till kolumn';
	$lang['strcolumnadded'] = 'Kolumn inlagd.';
	$lang['strcolumnaddedbad'] = 'Misslyckades att l�gga till kolumne.';
	$lang['strcascade'] = 'KASKAD';
	$lang['strdataonly'] = 'Endast Data';
	$lang['strtablealtered'] = 'Tabell �ndrad.';
	$lang['strtablealteredbad'] = 'Misslyckades att �ndra tabell.';
	
	// Users
	$lang['struser'] = 'Anv�ndare';
	$lang['strusers'] = 'Anv�ndare';
	$lang['strusername'] = 'Anv�ndarnamn';
	$lang['strpassword'] = 'L�senord';
	$lang['strsuper'] = 'Superanv�ndare?';
	$lang['strcreatedb'] = 'Skapa Databas?';
	$lang['strexpires'] = 'Utg�ngsdatum';
	$lang['strsessiondefaults'] = 'Sessionsinst�llningar';
	$lang['strnewname'] = 'Nytt namn';
	$lang['strnousers'] = 'Hittade inga anv�ndare.';
	$lang['strrename'] = 'D�p om';
	$lang['struserrenamed'] = 'Anv�ndarnamn �ndrat.';
	$lang['struserrenamedbad'] = 'Misslyckades att d�pa om anv�ndare.';
	$lang['struserupdated'] = 'Anv�ndare uppdaterad.';
	$lang['struserupdatedbad'] = 'Misslyckades att uppdatera anv�ndare.';
	$lang['strshowallusers'] = 'Visa alla anv�ndare';
	$lang['strcreateuser'] = 'Skapa anv�ndare';
	$lang['struserneedsname'] = 'Du m�ste namnge anv�ndaren.';
	$lang['strconfdropuser'] = '�r du s�ker p� att du vill radera anv�ndaren "%s"?';
	$lang['strusercreated'] = 'Anv�ndare skapad.';
	$lang['strusercreatedbad'] = 'Misslyckades att skapa anv�ndare.';
	$lang['struserdropped'] = 'Anv�ndare raderad.';
	$lang['struserdroppedbad'] = 'Misslyckades att radera anv�ndare.';
	$lang['straccount'] = 'Konton';
	$lang['strchangepassword'] = '�ndra l�senord';
	$lang['strpasswordchanged'] = 'L�senord �ndrat.';
	$lang['strpasswordchangedbad'] = 'Misslyckades att �ndra l�senord.';
	$lang['strpasswordshort'] = 'F�r f� tecken i l�senordet.';
	$lang['strpasswordconfirm'] = 'L�senordet �r inte samma som bekr�ftelsen.';
	$lang['strgroup'] = 'Grupp';
	$lang['strgroups'] = 'Grupper';
	$lang['strnogroup'] = 'Hittade ej grupp.';
	$lang['strnogroups'] = 'Hittade inga grupper.';
	$lang['strcreategroup'] = 'Skapa grupp';
	$lang['strshowallgroups'] = 'Visa alla grupper';
	$lang['strgroupneedsname'] = 'Du m�ste namnge din grupp.';
	$lang['strgroupcreated'] = 'Grupp skapad.';
	$lang['strgroupdropped'] = 'Grupp raderad.';
	$lang['strgroupcreatedbad'] = 'Misslyckades att skapa grupp.';	
	$lang['strconfdropgroup'] = '�r du s�ker p� att du vill radera grupp "%s"?';
	$lang['strprivileges'] = 'R�ttigheter';
	$lang['strgrant'] = 'Till�t';
	$lang['strgranted'] = 'R�ttigheter �ndrade.';
	$lang['strgroupdroppedbad'] = 'Misslyckades att radera grupp.';
	$lang['straddmember'] = 'L�gg till medlem';
	$lang['strmemberadded'] = 'Medlem inlagd.';
	$lang['strmemberaddedbad'] = 'Misslyckades att l�gga till medlem.';
	$lang['strdropmember'] = 'Radera medlem';
	$lang['strconfdropmember'] = '�r du s�ker p� att du vill radera medlem "%s" fr�n gruppen "%s"?';
	$lang['strmemberdropped'] = 'Medlem raderad.';
	$lang['strmemberdroppedbad'] = 'Misslyckades att radera medlem.';
	$lang['strprivilege'] = 'R�ttighet';
	$lang['strnoprivileges'] = 'Detta objekt har standard �garr�ttigheter.';
	$lang['strmembers'] = 'Medelemmar';
	$lang['strrevoke'] = 'Ta tillbaka';
	$lang['strgrantbad'] = 'Du m�ste ange minst en anv�ndare eller grupp och minst en r�ttighet.';
	$lang['strgrantfailed'] = 'Misslyckades att �ndra r�ttigheter.';
	$lang['stralterprivs'] = '�ndra r�ttigheter';
	$lang['strdatabase'] = 'Databas';
	$lang['strdatabasedropped'] = 'Databas raderad.';
	$lang['strdatabases'] = 'Databaser';
	$lang['strentersql'] = 'Ange SQL att k�ra:';
	$lang['strgrantor'] = 'Tillst�ndsgivare';
	$lang['strasterisk'] = '*';
	$lang['strshowalldatabases'] = 'Visa alla databaser';
	$lang['strnodatabase'] = 'Hittade ingen databas.';
	$lang['strnodatabases'] = 'Hittade inga databaser.';
	$lang['strcreatedatabase'] = 'Skapa databas';
	$lang['strdatabasename'] = 'Databasnamn';
	$lang['strdatabaseneedsname'] = 'Du m�ste namnge databasen.';
	$lang['strdatabasecreated'] = 'Databas skapad.';
	$lang['strdatabasecreatedbad'] = 'Misslyckades att skapa databas.';	
	$lang['strconfdropdatabase'] = '�r du s�ker p� att du vill radera databas "%s"?';
	$lang['strdatabasedroppedbad'] = 'Misslyckades att radera databas.';
	$lang['strsqlexecuted'] = 'SQL-kommando utf�rt.';
	$lang['strvacuumgood'] = 'Uppst�dning utf�rd.';
	$lang['strvacuumbad'] = 'Uppst�dning misslyckades.';
	$lang['stranalyzegood'] = 'Analysen lyckades.';
	$lang['stranalyzebad'] = 'Analysen misslyckades.';
	$lang['strstructureonly'] = 'Endast struktur';
	$lang['strstructureanddata'] = 'Struktur och data';

	// Views
	$lang['strview'] = 'Vy';
	$lang['strviews'] = 'Vyer';
	$lang['strshowallviews'] = 'Visa alla vyer';
	$lang['strnoview'] = 'Hittade ingen vy.';
	$lang['strnoviews'] = 'Hittade inga vyer.';
	$lang['strcreateview'] = 'Skapa vy';
	$lang['strviewname'] = 'Vynamn';
	$lang['strviewneedsname'] = 'Du m�ste namnge Vy.';
	$lang['strviewneedsdef'] = 'Du m�ste ange en definition f�r din vy.';
	$lang['strviewcreated'] = 'Vy skapad.';
	$lang['strviewcreatedbad'] = 'Misslyckades att skapa vy.';
	$lang['strconfdropview'] = '�r du s�ker p� att du vill radera vyn "%s"?';
	$lang['strviewdropped'] = 'Vy raderad.';
	$lang['strviewdroppedbad'] = 'Misslyckades att radera vy.';
	$lang['strviewupdated'] = 'Vy uppdaterad.';
	$lang['strviewupdatedbad'] = 'Misslyckades att uppdatera vy.';
	$lang['strviewlink'] = 'L�nkade nycklar';
	$lang['strviewconditions'] = 'Ytterligare villkor';

	// Sequences
	$lang['strsequence'] = 'Sekvens';
	$lang['strsequences'] = 'Sekvenser';
	$lang['strshowallsequences'] = 'Visa alla sekvenser';
	$lang['strnosequence'] = 'Hittade ingen sekvens.';
	$lang['strnosequences'] = 'Hittade inga sekvenser.';
	$lang['strcreatesequence'] = 'Skapa sekvens';
	$lang['strlastvalue'] = 'Senaste v�rde';
	$lang['strincrementby'] = '�ka med';
	$lang['strstartvalue'] = 'Startv�rde';
	$lang['strmaxvalue'] = 'St�rsta v�rde';
	$lang['strminvalue'] = 'Minsta v�rde';
	$lang['strcachevalue'] = 'V�rde p� cache';
	$lang['strlogcount'] = 'R�kna log';
	$lang['striscycled'] = '�r upprepad?';
	$lang['strsequenceneedsname'] = 'Du m�ste ge ett namn till din sekvens.';
	$lang['strsequencecreated'] = 'Sekvens skapad.';
	$lang['strsequencecreatedbad'] = 'Misslyckades att skapa sekvens.'; 
	$lang['strconfdropsequence'] = '�r du s�ker p� att du vill radera sekvensen "%s"?';
	$lang['strsequencedropped'] = 'Sekvensen borrtagen.';
	$lang['strsequencedroppedbad'] = 'Misslyckades att radera sekvens.';

	// Indexes
	$lang['strindex'] = 'Index';
	$lang['strindexes'] = 'Index';
	$lang['strindexname'] = 'Indexnamn';
	$lang['strshowallindexes'] = 'Visa alla index';
	$lang['strnoindex'] = 'Hittade inget index.';
	$lang['strsequencereset'] = 'Nollst�ll sekvens.';
	$lang['strsequenceresetbad'] = 'Misslyckades att nollst�lla sekvens.';
	$lang['strnoindexes'] = 'Hittade inga index.';
	$lang['strcreateindex'] = 'Skapa index';
	$lang['strindexname'] = 'Indexnamn';
	$lang['strtabname'] = 'Tabellnamn';
	$lang['strcolumnname'] = 'Kolumnnamn';
	$lang['strindexneedsname'] = 'Du m�ste ge ett namn f�r ditt index';
	$lang['strindexneedscols'] = 'Det kr�vs ett giltigt antal kolumner f�r index.';
	$lang['strindexcreated'] = 'Index skapat';
	$lang['strindexcreatedbad'] = 'Misslyckades att skapa index.';
	$lang['strconfdropindex'] = '�r du s�ker p� att du vill radera index "%s"?';
	$lang['strindexdropped'] = 'Index raderat.';
	$lang['strindexdroppedbad'] = 'Misslyckades att radera index.';
	$lang['strkeyname'] = 'Nyckelv�rdesnamn';
	$lang['struniquekey'] = 'Unikt nyckelv�rde';
	$lang['strprimarykey'] = 'Prim�rnyckel';
 	$lang['strindextype'] = 'Typ av index';
	$lang['strindexname'] = 'Indexnamn';
	$lang['strtablecolumnlist'] = 'Tabellkolumner';
	$lang['strindexcolumnlist'] = 'Indexkolumner';
	$lang['strconfcluster'] = '�r du s�ker p� att du vill klustra "%s"?';
	$lang['strclusteredgood'] = 'Klustring avslutad.';
	$lang['strclusteredbad'] = 'Klustring misslyckades.';

	// Rules
	$lang['strrules'] = 'Regler';
	$lang['strrule'] = 'Regel';
	$lang['strshowallrules'] = 'Visa alla regler';
	$lang['strnorule'] = 'Hittade ingen regel.';
	$lang['strnorules'] = 'Hittade inga regler.';
	$lang['strcreaterule'] = 'Skapa regel';
	$lang['strrulename'] = 'Regelnamn';
	$lang['strruleneedsname'] = 'Du m�ste ge ett namn till din regel.';
	$lang['strrulecreated'] = 'Regel skapad.';
	$lang['strrulecreatedbad'] = 'Misslyckades att skapa regel.';
	$lang['strconfdroprule'] = '�r du s�ker p� att du vill radera regel "%s" f�r "%s"?';
	$lang['strruledropped'] = 'Regel raderat.';
	$lang['strruledroppedbad'] = 'Misslyckades att radera regel.';

	// Constraints
	$lang['strconstraints'] = 'Begr�nsningar';
	$lang['strshowallconstraints'] = 'Visa alla begr�nsningar';
	$lang['strnoconstraints'] = 'Hittade inga begr�nsningar.';
	$lang['strcreateconstraint'] = 'Skapa begr�nsning';
	$lang['strconstraintcreated'] = 'Begr�nsning skapad.';
	$lang['strconstraintcreatedbad'] = 'Misslyckades att skapa begr�nsning.';
	$lang['strconfdropconstraint'] = '�r du s�ker p� att du vill radera begr�nsning "%s" f�r "%s"?';
	$lang['strconstraintdropped'] = 'Begr�nsning raderad.';
	$lang['strconstraintdroppedbad'] = 'Misslyckades att radera begr�nsning.';
	$lang['straddcheck'] = 'L�gg till en koll';
	$lang['strcheckneedsdefinition'] = 'En kollbegr�nsning beh�ver definieras.';
	$lang['strcheckadded'] = 'Kollbegr�nsning inlagd.';
	$lang['strcheckaddedbad'] = 'Misslyckades att l�gga till en koll.';
	$lang['straddpk'] = 'L�gg till prim�rnyckel';
	$lang['strpkneedscols'] = 'Prim�rnyckel beh�ver minst en kolumn.';
	$lang['strpkadded'] = 'Prim�rnyckel inlagd.';
	$lang['strpkaddedbad'] = 'Misslyckades att l�gga till prim�rnyckel.';
	$lang['stradduniq'] = 'L�gg till Unikt nyckelv�rde';
	$lang['struniqneedscols'] = 'Unikt nyckelv�rde beh�ver minst en kolumn.';
	$lang['struniqadded'] = 'Unikt nyckelv�rde inlagt.';
	$lang['struniqaddedbad'] = 'Misslyckades att l�gga till unikt nyckelv�rde.';
	$lang['straddfk'] = 'L�gg till utomst�ende nyckel';
	$lang['strfkneedscols'] = 'Utomst�ende nyckel beh�ver minst en kolumn.';
	$lang['strfkneedstarget'] = 'Utomst�ende nycket beh�ver en m�ltabell.';
	$lang['strfkadded'] = 'Utomst�ende nyckel inlagd.';
	$lang['strfkaddedbad'] = 'Misslyckades att l�gga till utomst�ende nyckel.';
	$lang['strfktarget'] = 'M�ltabell';
	$lang['strfkcolumnlist'] = 'Kolumner i nyckel';
	$lang['strondelete'] = 'VID RADERING';
	$lang['stronupdate'] = 'VID UPPDATERING';

	// Functions
	$lang['strfunction'] = 'Funktion';
	$lang['strfunctions'] = 'Funktioner';
	$lang['strshowallfunctions'] = 'Visa alla funktioner';
	$lang['strnofunction'] = 'Hittade ingen funktion.';
	$lang['strnofunctions'] = 'Hittade inga funktioner.';
	$lang['strcreatefunction'] = 'Skapa funktion';
	$lang['strfunctionname'] = 'Funktionsnamn';
	$lang['strreturns'] = '�terger';
	$lang['strarguments'] = 'Argument';
	$lang['strfunctionneedsname'] = 'Du m�ste namnge din funktion.';
	$lang['strfunctionneedsdef'] = 'Du m�ste definiera din funktion.';
	$lang['strfunctioncreated'] = 'Funktion skapad.';
	$lang['strfunctioncreatedbad'] = 'Misslyckades att skapa funktion.';
	$lang['strconfdropfunction'] = '�r du s�ker p� att du vill radera funktionen "%s"?';
	$lang['strproglanguage'] = 'Programmeringsspr�k';
	$lang['strfunctiondropped'] = 'Funktionen raderad.';
	$lang['strfunctiondroppedbad'] = 'Misslyckades att radera funktion.';
	$lang['strfunctionupdated'] = 'Funktion uppdaterad.';
	$lang['strfunctionupdatedbad'] = 'Misslyckades att uppdatera funktion.';

	// Triggers
	$lang['strtrigger'] = 'Mekanism';
	$lang['strtriggers'] = 'Mekanismer';
	$lang['strshowalltriggers'] = 'Visa alla Mekanismer';
	$lang['strnotrigger'] = 'Hittade ingen mekanism.';
	$lang['strnotriggers'] = 'Hittade inga mekanismer.';
	$lang['strcreatetrigger'] = 'Skapa mekanism';
	$lang['strtriggerneedsname'] = 'Du m�ste namnge din mekanism.';
	$lang['strtriggerneedsfunc'] = 'Du m�ste specificera en funktion f�r din mekanism.';
	$lang['strtriggercreated'] = 'Mekanism skapad.';
	$lang['strtriggerdropped'] = 'Mekanism raderad.';
	$lang['strtriggercreatedbad'] = 'Misslyckades att skapa mekanism.';
	$lang['strconfdroptrigger'] = '�r du s�ker p� att du vill radera mekanismen "%s" p� "%s"?';
	$lang['strtriggerdroppedbad'] = 'Misslyckades att radera mekanism.';
	
	// Types
	$lang['strtype'] = 'Typ';
	$lang['strstorage'] = 'Lagring';
	$lang['strtriggeraltered'] = 'Mekanism �ndrad.';
	$lang['strtriggeralteredbad'] = 'Misslyckades att �ndra mekanism.';
	$lang['strtypes'] = 'Typer';
	$lang['strtypeneedslen'] = 'Du m�ste ange typens l�ngd.';
	$lang['strshowalltypes'] = 'Visa alla typer';
	$lang['strnotype'] = 'Hittade ingen typ.';
	$lang['strnotypes'] = 'Hittade inga typer.';
	$lang['strcreatetype'] = 'Skapa typ';
	$lang['strtypename'] = 'Namn p� typen';
	$lang['strinputfn'] = 'Infogande funktion';
	$lang['stroutputfn'] = 'Funktion f�r utv�rden';
	$lang['strpassbyval'] = 'Genomg�tt utv�rdering?';
	$lang['stralignment'] = 'Justering';
	$lang['strelement'] = 'Element';
	$lang['strdelimiter'] = 'Avgr�nsare';
	$lang['strtypeneedsname'] = 'Du m�ste namnge din typ.';
	$lang['strtypecreated'] = 'Typ skapad';
	$lang['strtypecreatedbad'] = 'Misslyckades att skapa typ.';
	$lang['strconfdroptype'] = '�r du s�ker p� att du vill radera typen "%s"?';
	$lang['strtypedropped'] = 'Typ raderad.';
	$lang['strtypedroppedbad'] = 'Misslyckades att radera typ.';

	// Schemas
	$lang['strschema'] = 'Schema';
	$lang['strschemas'] = 'Scheman';
	$lang['strshowallschemas'] = 'Visa alla scheman';
	$lang['strnoschema'] = 'Hittade inget schema.';
	$lang['strnoschemas'] = 'Hittade inga scheman.';
	$lang['strcreateschema'] = 'Skapa Schema';
	$lang['strschemaname'] = 'Schemanamn';
	$lang['strschemaneedsname'] = 'Du m�ste namnge ditt Schema.';
	$lang['strschemacreated'] = 'Schema skapat';
	$lang['strschemacreatedbad'] = 'Misslyckades att skapa schema.';
	$lang['strconfdropschema'] = '�r du s�ker p� att du vill radera schemat "%s"?';
	$lang['strschemadropped'] = 'Schema raderat.';
	$lang['strschemadroppedbad'] = 'Misslyckades att radera schema.';

	// Reports
	$lang['strreport'] = 'Rapport';
	$lang['strreports'] = 'Rapporter';
	$lang['strshowallreports'] = 'Visa alla rapporter';
	$lang['strtopbar'] = '%s k�rs p� %s:%s -- Du �r inloggad som anv�ndare "%s"';
	$lang['strtimefmt'] = 'jS M, Y g:iA';
	$lang['strnoreports'] = 'Hittade inga rapporter.';
	$lang['strcreatereport'] = 'Skapa rapport';
	$lang['strreportdropped'] = 'Rapport skapad.';
	$lang['strreportcreated'] = 'Rapport sparad.';
	$lang['strreportneedsname'] = 'Du m�ste namnge din rapport.';
	$lang['strreportcreatedbad'] = 'Misslyckades att spara rapport.';
	$lang['strreportdroppedbad'] = 'Misslyckades att skapa rapport.';
	$lang['strconfdropreport'] = '�r du s�ker p� att du vill radera rapporten "%s"?';
	$lang['strreportneedsdef'] = 'Du m�ste ange din SQL-fr�ga.';
	
	// Domains
	$lang['strdomain'] = 'Dom�n';
	$lang['strdomains'] = 'Dom�ner';
	$lang['strshowalldomains'] = 'Visa alla dom�ner';
	$lang['strnodomains'] = 'Hittade inga dom�ner.';
	$lang['strcreatedomain'] = 'Skapa dom�n';
	$lang['strdomaindropped'] = 'Dom�n raderad.';
	$lang['strdomaindroppedbad'] = 'Misslyckades att radera dom�n.';
	$lang['strconfdropdomain'] = '�r du s�ker p� att du vill radera dom�nen "%s"?';
	$lang['strdomainneedsname'] = 'Du m�ste ange ett dom�nnamn.';
	$lang['strdomaincreated'] = 'Dom�n skapad.';
	$lang['strdomaincreatedbad'] = 'Misslyckades att skapa dom�n.';
	$lang['strdomainaltered'] = 'Dom�n �ndrad.';
	$lang['strdomainalteredbad'] = 'Misslyckades att �ndra dom�n.';
	
	// Operators
	$lang['stroperator'] = 'Operand';
	$lang['stroperators'] = 'Operander';
	$lang['strshowalloperators'] = 'Visa alla operander';
	$lang['strnooperator'] = 'Hittade ingen operand.';
	$lang['strnooperators'] = 'Hittade inga operander.';
	$lang['strcreateoperator'] = 'Skapa operand';
	$lang['strleftarg'] = 'Arg Typ V�nster';
	$lang['strrightarg'] = 'Arg Typ H�ger';
	$lang['strcommutator'] = 'V�xlare';
	$lang['strnegator'] = 'Negerande';
	$lang['strrestrict'] = 'Sp�rra';
	$lang['strjoin'] = 'Sl� ihop';
	$lang['strhashes'] = 'Hashtabeller';
	$lang['strmerges'] = 'Sammanslagningar';
	$lang['strleftsort'] = 'Sortera v�nster';
	$lang['strrightsort'] = 'Sortera h�ger';
	$lang['strlessthan'] = 'Mindre �n';
	$lang['strgreaterthan'] = 'St�rre �n';
	$lang['stroperatorneedsname'] = 'Du m�ste namnge operanden.';
	$lang['stroperatorcreated'] = 'Operand skapad';
	$lang['stroperatorcreatedbad'] = 'Misslyckades att skapa operand.';
	$lang['strconfdropoperator'] = '�r du s�ker p� att du vill radera operanden "%s"?';
	$lang['stroperatordropped'] = 'Operand raderad.';
	$lang['stroperatordroppedbad'] = 'Misslyckades att radera operand.';

	// Casts
	$lang['strcasts'] = 'Typomvandlingar';
	$lang['strnocasts'] = 'Hittade inga typomvandlingar.';
	$lang['strsourcetype'] = 'K�lltyp';
	$lang['strtargettype'] = 'M�ltyp';
	$lang['strimplicit'] = 'Implicit';
	$lang['strinassignment'] = 'Tilldelat i';
	$lang['strbinarycompat'] = '(Bin�rt kompatibel)';
	
	// Conversions
	$lang['strconversions'] = 'Omkodningar';
	$lang['strnoconversions'] = 'Hittade inga omkodningar.';
	$lang['strsourceencoding'] = 'K�llkodning';
	$lang['strtargetencoding'] = 'M�lkodning';
	
	// Languages
	$lang['strlanguages'] = 'Spr�k';
	$lang['strnolanguages'] = 'Hittade inga spr�k.';
	$lang['strtrusted'] = 'P�litlig(a)';
	
	// Info
	$lang['strnoinfo'] = 'Ingen information tillg�nglig.';
	$lang['strreferringtables'] = 'Refererande tabeller';
	$lang['strparenttables'] = 'Ovanst�ende tabeller';
	$lang['strchildtables'] = 'Underliggande tabeller';

	// Aggregates
	$lang['straggregates'] = 'Sammanslagningar';
	$lang['strnoaggregates'] = 'Hittade inga sammanslagningar.';
	$lang['stralltypes'] = '(Alla typer)';
	
	// Operator Classes
	$lang['stropclasses'] = 'Op Klasser';
	$lang['strnoopclasses'] = 'Hittade inga operandklasser.';
	$lang['straccessmethod'] = 'Kopplingsmetod';
	
	// Stats and performance
	$lang['strrowperf'] = 'Radprestanda';
	$lang['strioperf'] = 'I/O Prestanda';
	$lang['stridxrowperf'] = 'Index Radprestanda';
	$lang['stridxioperf'] = 'Index I/O Prestanda';
	$lang['strpercent'] = '%';
	$lang['strsequential'] = 'Sekventiell';
	$lang['strscan'] = 'Scanna';
	$lang['strread'] = 'L�s';
	$lang['strfetch'] = 'H�mta';
	$lang['strheap'] = 'Bunt';
	$lang['strtoast'] = 'Br�nn';
	$lang['strtoastindex'] = 'Br�nn Index';
	$lang['strcache'] = 'Cache';
	$lang['strdisk'] = 'Disk';
	$lang['strrows2'] = 'Rader';

	// Miscellaneous
	$lang['strtopbar'] = '%s K�rs p� %s:%s -- Du �r inloggad som anv�ndare "%s", %s';
	$lang['strtimefmt'] = 'jS M, Y g:iA';
	$lang['strhelp'] = 'Hj�lp';

?>
