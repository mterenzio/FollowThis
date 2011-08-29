<?php

	/**
	* French Language file for phpPgAdmin. 
	* @maintainer Guillaume (ioguix) de Rorthais
	*
	* $Id: french.php,v 1.36 2008/03/27 10:46:32 ioguix Exp $
	*/

	// Language and character set
	$lang['applang'] = 'Fran�ais';
	$lang['appcharset'] = 'ISO-8859-1';
	$lang['applocale'] = 'fr_FR';
	$lang['appdbencoding'] = 'LATIN1';
	$lang['applangdir'] = 'ltr';

	// Basic strings
	$lang['strintro'] = 'Bienvenue sur phpPgAdmin.';
	$lang['strppahome'] = 'Page d\'accueil de phpPgAdmin';
	$lang['strpgsqlhome'] = 'Page d\'accueil de PostgreSQL';
	$lang['strpgsqlhome_url'] = 'http://www.postgresql.org/';
	$lang['strlocaldocs'] = 'Documentation PostgreSQL (local)';
	$lang['strreportbug'] = 'Rapporter un bug';
	$lang['strviewfaq'] = 'Lire la FAQ';
	$lang['strviewfaq_url'] = 'http://phppgadmin.sourceforge.net/?page=faq';

	// Basic strings
	$lang['strlogin'] = 'Connexion';
	$lang['strloginfailed'] = '�chec de la connexion';
	$lang['strlogindisallowed'] = 'Connexion d�sactiv�e pour raison de s�curit�';
	$lang['strserver'] = 'Serveur';
	$lang['strservers'] = 'Serveurs';
	$lang['strgroupservers'] = 'Serveurs du groupe "%s"';
	$lang['strallservers'] = 'Tous les serveurs';
	$lang['strintroduction'] = 'Introduction';
	$lang['strhost'] = 'H�te';
	$lang['strport'] = 'Port';
	$lang['strlogout'] = 'D�connexion';
	$lang['strowner'] = 'Propri�taire';
	$lang['straction'] = 'Action';
	$lang['stractions'] = 'Actions';
	$lang['strname'] = 'Nom';
	$lang['strdefinition'] = 'D�finition';
	$lang['strproperties'] = 'Propri�t�s';
	$lang['strbrowse'] = 'Parcourir';
	$lang['strenable'] = 'Activer';
	$lang['strdisable'] = 'D�sactiver';
	$lang['strdrop'] = 'Supprimer';
	$lang['strdropped'] = 'Supprim�';
	$lang['strnull'] = 'NULL (le mot)';
	$lang['strnotnull'] = 'NOT NULL';
	$lang['strprev'] = 'Pr�c�dent';
	$lang['strnext'] = 'Suivant';
	$lang['strfirst'] = '<< D�but';
	$lang['strlast'] = 'Fin >>';
	$lang['strfailed'] = '�chec';
	$lang['strcreate'] = 'Cr�er';
	$lang['strcreated'] = 'Cr��';
	$lang['strcomment'] = 'Commentaire';
	$lang['strlength'] = 'Longueur';
	$lang['strdefault'] = 'D�faut';
	$lang['stralter'] = 'Modifier';
	$lang['strok'] = 'OK';
	$lang['strcancel'] = 'Annuler';
	$lang['strkill'] = 'Tuer';
	$lang['strac'] = 'Activer la compl�tion automatique';
	$lang['strsave'] = 'Sauvegarder';
	$lang['strreset'] = 'R�initialiser';
	$lang['strrestart'] = 'Red�marrer';
	$lang['strinsert'] = 'Ins�rer';
	$lang['strselect'] = 'S�lectionner';
	$lang['strdelete'] = 'Effacer';
	$lang['strupdate'] = 'Modifier';
	$lang['strreferences'] = 'R�f�rences';
	$lang['stryes'] = 'Oui';
	$lang['strno'] = 'Non';
	$lang['strtrue'] = 'TRUE';
	$lang['strfalse'] = 'FALSE';
	$lang['stredit'] = '�diter';
	$lang['strcolumn'] = 'Colonne';
	$lang['strcolumns'] = 'Colonnes';
	$lang['strrows'] = 'ligne(s)';
	$lang['strrowsaff'] = 'ligne(s) affect�e(s).';
	$lang['strobjects'] = 'objet(s)';
	$lang['strback'] = 'Retour';
	$lang['strqueryresults'] = 'R�sultats de la requ�te';
	$lang['strshow'] = 'Voir';
	$lang['strempty'] = 'Vider';
	$lang['strlanguage'] = 'Langage';
	$lang['strencoding'] = 'Codage';
	$lang['strvalue'] = 'Valeur';
	$lang['strunique'] = 'Unique';
	$lang['strprimary'] = 'Primaire';
	$lang['strexport'] = 'Exporter';
	$lang['strimport'] = 'Importer';
	$lang['strallowednulls'] = 'Autoriser les caract�res NULL';
	$lang['strbackslashn'] = '\N';
	$lang['stremptystring'] = 'Cha�ne/champ vide';
	$lang['strsql'] = 'SQL';
	$lang['stradmin'] = 'Admin';
	$lang['strvacuum'] = 'Vacuum';
	$lang['stranalyze'] = 'Analyze';
	$lang['strclusterindex'] = 'Cluster';
	$lang['strclustered'] = 'En Cluster ?';
	$lang['strreindex'] = 'Reindex';
	$lang['strexecute'] = 'Lancer';
	$lang['stradd'] = 'Ajouter';
	$lang['strevent'] = '�v�nement';
	$lang['strwhere'] = 'O�';
	$lang['strinstead'] = 'Faire � la place';
	$lang['strwhen'] = 'Quand';
	$lang['strformat'] = 'Format';
	$lang['strdata'] = 'Donn�e';
	$lang['strconfirm'] = 'Confirmer';
	$lang['strexpression'] = 'Expression';
	$lang['strellipsis'] = '...';
	$lang['strseparator'] = ' :';
	$lang['strexpand'] = '�tendre';
	$lang['strcollapse'] = 'R�duire';
	$lang['strfind'] = 'Rechercher';
	$lang['stroptions'] = 'Options';
	$lang['strrefresh'] = 'Rafraichir';
	$lang['strdownload'] = 'T�l�charger';
	$lang['strdownloadgzipped'] = 'T�l�charger avec compression gzip';
	$lang['strinfo'] = 'Info';
	$lang['stroids'] = 'OID';
	$lang['stradvanced'] = 'Avanc�';
	$lang['strvariables'] = 'Variables';
	$lang['strprocess'] = 'Processus';
	$lang['strprocesses'] = 'Processus';
	$lang['strsetting'] = 'Param�trage';
	$lang['streditsql'] = '�diter SQL';
	$lang['strruntime'] = 'Temps d\'ex�cution total : %s ms';
	$lang['strpaginate'] = 'Paginer les r�sultats';
	$lang['struploadscript'] = 'ou importer un script SQL :';
	$lang['strstarttime'] = 'Heure de d�but';
	$lang['strfile'] = 'Fichier';
	$lang['strfileimported'] = 'Fichier import�.';
	$lang['strtrycred'] = 'Utilisez ces identifiants pour tous les serveurs';
	$lang['strconfdropcred'] = 'For security reason, disconnecting will destroy your shared login information. Are you sure you want to disconnect ?';
	$lang['strconfdropcred'] = 'Par mesure de s�curit�, la d�connexion supprimera le partage de vos identifiants pour tous les serveurs. �tes-vous certain de vouloir vous d�connecter ?';
	$lang['stractionsonmultiplelines'] = 'Actions sur plusieurs lignes';
	$lang['strselectall'] = 'S�lectionner tout';
	$lang['strunselectall'] = 'Des�lectionner tout';
	$lang['strlocale'] = 'Locale';
	$lang['strcollation'] = 'Tri';
	$lang['strctype'] = 'Type de cartact�re';
	$lang['strdefaultvalues'] = 'Valeurs par d�faut';
	$lang['strnewvalues'] = 'Nouvelles valeurs';
	$lang['strstart'] = 'D�marrer';
	$lang['strstop'] = 'Arr�ter';
	$lang['strgotoppage'] = 'Haut de la page';
	$lang['strtheme'] = 'Th�me';

	// Admin
	$lang['stradminondatabase'] = 'Les actions d\'administration suivantes s\'appliquent � l\'ensemble de la base de donn�e %s.';
	$lang['stradminontable'] = 'Les actions d\'administration suivantes s\'appliquent � la table %s.';

	// User-supplied SQL history
	$lang['strhistory'] = 'Historique';
	$lang['strnohistory'] = 'Pas d\'historique.';
	$lang['strclearhistory'] = '�ffacer l\'historique';
	$lang['strdelhistory'] = 'Supprimer de l\'historique';
	$lang['strconfdelhistory'] = 'Voulez-vous vraiment supprimer cette requ�te de l\'historique ?';
	$lang['strconfclearhistory'] = 'Voulez-vous vraiment �ffacer l\'historique ?';
	$lang['strnodatabaseselected'] = 'Veuillez s�lectionner une base de donn�es.';

	// Database Sizes
	$lang['strnoaccess'] = 'Pas d\'Acc�s'; 
	$lang['strsize'] = 'Taille';
	$lang['strbytes'] = 'octets';
	$lang['strkb'] = ' Ko';
	$lang['strmb'] = ' Mo';
	$lang['strgb'] = ' Go';
	$lang['strtb'] = ' To';

	// Error handling
	$lang['strnoframes'] = 'Cette application fonctionne mieux avec un navigateur pouvant afficher des frames mais peut �tre utilis�e sans frames en suivant les liens ci-dessous.';
	$lang['strnoframeslink'] = 'Utiliser sans frames';
	$lang['strbadconfig'] = 'Le fichier de configuration config.inc.php est obsol�te. Vous avez besoin de le reg�n�rer � partir de config.inc.php-dist.';
	$lang['strnotloaded'] = 'Vous n\'avez pas compil� correctement le support de la base de donn�es dans votre installation de PHP.';
	$lang['strpostgresqlversionnotsupported'] = 'Cette version de PostgreSQL n\'est pas support�e. Merci de mettre � jour PHP � la version %s ou ult�rieure.';
	$lang['strbadschema'] = 'Sch�ma sp�cifi� invalide.';
	$lang['strbadencoding'] = 'Impossible de sp�cifier l\'encodage de la base de donn�es.';
	$lang['strsqlerror'] = 'Erreur SQL :';
	$lang['strinstatement'] = 'Dans l\'instruction :';
	$lang['strinvalidparam'] = 'Param�tres de script invalides.';
	$lang['strnodata'] = 'Pas de r�sultats.';
	$lang['strnoobjects'] = 'Aucun objet trouv�.';
	$lang['strrownotunique'] = 'Pas d\'identifiant unique pour cette ligne.';
	$lang['strnoreportsdb'] = 'Vous n\'avez pas cr�� la base de donn�es reports. Lisez le fichier INSTALL pour en savoir plus.';
	$lang['strnouploads'] = 'Importation de fichiers d�sactiv�e.';
	$lang['strimporterror'] = 'Erreur d\'importation.';
	$lang['strimporterror-fileformat'] = 'Erreur d\'importation : �chec lors de la d�termination automatique du format de fichier.';
	$lang['strimporterrorline'] = 'Erreur d\'importation � la ligne %s.';
	$lang['strimporterrorline-badcolumnnum'] = 'Erreur d\'importation sur la ligne %s : la ligne ne poss�de pas le bon nombre de colonnes.';
	$lang['strimporterror-uploadedfile'] = 'Erreur d\'importation : le fichier n\'a pas p� �tre r�cup�r� sur le serveur.';
	$lang['strcannotdumponwindows'] = 'La sauvegarde de table complexe et des noms de sch�mas n\'est pas support� sur Windows.';
	$lang['strinvalidserverparam'] = 'Tentative de connexion avec un serveur invalide, il est possible que quelqu\'un essai de pirater votre syst�me.'; 
	$lang['strnoserversupplied'] = 'Aucun serveur fournis !';
	$lang['strbadpgdumppath'] = 'Erreur d\'export : n\'a pu ex�cuter pg_dump (chemin indiqu� dans votre conf/config.inc.php : %s). Merci de corriger le chemin dans votre configuration et de vous reconnecter.';
	$lang['strbadpgdumpallpath'] = 'Erreur d\'export : n\'a pu ex�cuter pg_dumpall (chemin indiqu� dans votre conf/config.inc.php : %s). Merci de corriger le chemin dans votre configuration et de vous reconnecter.';
	$lang['strconnectionfail'] = 'Connexion au serveur �chou�e.';

	// Tables
	$lang['strtable'] = 'Table';
	$lang['strtables'] = 'Tables';
	$lang['strshowalltables'] = 'Voir toutes les tables';
	$lang['strnotables'] = 'Aucune table trouv�e.';
	$lang['strnotable'] = 'Aucune table trouv�e.';
	$lang['strcreatetable'] = 'Cr�er une table';
	$lang['strcreatetablelike'] = 'Cr�er une table d\'apr�s une table existante';
	$lang['strcreatetablelikeparent'] = 'Table mod�le';
	$lang['strcreatelikewithdefaults'] = 'inclure les valeurs par d�faut.';
	$lang['strcreatelikewithconstraints'] = 'inclure les contraintes.';
	$lang['strcreatelikewithindexes'] = 'inclure les indexes.';
	$lang['strtablename'] = 'Nom de la table';
	$lang['strtableneedsname'] = 'Vous devez donner un nom pour votre table.';
	$lang['strtablelikeneedslike'] = 'Vous devez pr�ciser une table mod�le.';
	$lang['strtableneedsfield'] = 'Vous devez sp�cifier au moins un champ.';
	$lang['strtableneedscols'] = 'Vous devez indiquer un nombre valide de colonnes.';
	$lang['strtablecreated'] = 'Table cr��e.';
	$lang['strtablecreatedbad'] = '�chec de la cr�ation de table.';
	$lang['strconfdroptable'] = '�tes-vous sur de vouloir supprimer la table � %s � ?';
	$lang['strtabledropped'] = 'Table supprim�e.';
	$lang['strtabledroppedbad'] = '�chec lors de la suppression de table.';
	$lang['strconfemptytable'] = '�tes-vous s�r de vouloir vider la table � %s � ?';
	$lang['strtableemptied'] = 'Table vide.';
	$lang['strtableemptiedbad'] = '�chec du vidage de la table.';
	$lang['strinsertrow'] = 'Ins�rer un enregistrement.';
	$lang['strrowinserted'] = 'Enregistrement ins�r�.';
	$lang['strrowinsertedbad'] = '�chec lors de l\'insertion d\'un enregistrement.';
	$lang['strnofkref'] = 'Aucune valeur correspondate pour la cl� �trang�re %s.';
	$lang['strrowduplicate'] = '�chec lors de l\'insertion d\'un enregistrement, a tent� de faire une insertion dupliqu�e.';
	$lang['streditrow'] = '�diter l\'enregistrement.';
	$lang['strrowupdated'] = 'Enregistrement mis � jour.';
	$lang['strrowupdatedbad'] = '�chec de mise � jour de l\'enregistrement.';
	$lang['strdeleterow'] = 'Effacer l\'enregistrement';
	$lang['strconfdeleterow'] = '�tes-vous s�r de vouloir supprimer cet enregistrement ?';
	$lang['strrowdeleted'] = 'Enregistrement supprim�.';
	$lang['strrowdeletedbad'] = '�chec lors de la suppression de l\'enregistrement.';
	$lang['strinsertandrepeat'] = 'Ins�rer et r�p�ter';
	$lang['strnumcols'] = 'Nombre de colonnes';
	$lang['strcolneedsname'] = 'Vous devez sp�cifier un nom pour la colonne';
	$lang['strselectallfields'] = 'S�lectionner tous les champs';
	$lang['strselectneedscol'] = 'Vous devez s�lectionner au moins une colonne.';
	$lang['strselectunary'] = 'Les op�rateurs unaires ne peuvent avoir de valeurs.';
	$lang['strcolumnaltered'] = 'Colonne modifi�e.';
	$lang['strcolumnalteredbad'] = '�chec lors de la modification de la colonne.';
	$lang['strconfdropcolumn'] = '�tes-vous s�r de vouloir supprimer la colonne � %s � de la table � %s � ?';
	$lang['strcolumndropped'] = 'Colonne supprim�e.';
	$lang['strcolumndroppedbad'] = '�chec lors de la suppression de la colonne.';
	$lang['straddcolumn'] = 'Ajouter une colonne';
	$lang['strcolumnadded'] = 'Colonne ajout�e.';
	$lang['strcolumnaddedbad'] = '�chec lors de l\'ajout de la colonne.';
	$lang['strcascade'] = 'CASCADE';
	$lang['strtablealtered'] = 'Table modifi�e.';
	$lang['strtablealteredbad'] = '�chec lors de la modification de la table.';
	$lang['strdataonly'] = 'Donn�es seulement';
	$lang['strstructureonly'] = 'Structure seulement';
	$lang['strstructureanddata'] = 'Structure et donn�es';
	$lang['strtabbed'] = 'Tabul�';
	$lang['strauto'] = 'Auto';
	$lang['strconfvacuumtable'] = '�tes-vous s�r de vouloir faire un vacuum de � %s � ?';
	$lang['strconfanalyzetable'] = '�tes-vous s�r de vouloir �ffectuer un ANALYZE sur � %s � ?';
	$lang['strconfreindextable'] = '�tes-vous s�r de vouloir r�indexer � %s � ?';
	$lang['strconfclustertable'] = '�tes-vous s�r de vouloir lancer un CLUSTER sur �%s � ?';
	$lang['strestimatedrowcount'] = 'Nombre d\'enregistrements estim�s';
	$lang['strspecifytabletoanalyze'] = 'Vous devez sp�cifier au moins une table � analyzer';
	$lang['strspecifytabletoempty'] = 'Vous devez sp�cifier au moins une table � vider';
	$lang['strspecifytabletodrop'] = 'Vous devez sp�cifier au moins une table � supprimer';
	$lang['strspecifytabletovacuum'] = 'Vous devez sp�cifier au moins une table sur laquelle �ffectuer le vacuum';
	$lang['strspecifytabletoreindex'] = 'Vous devez sp�cifier au moins une table � r�indexer.';
	$lang['strspecifytabletocluster'] = 'Vous devez sp�cifier au moins une table sur laquelle �ffectuer la commande CLUSTER.';
	$lang['strnofieldsforinsert'] = 'Vous ne pouvez ins�rer de donn�es dans une table sans champs.';

	// Columns
	$lang['strcolprop'] = 'Propri�t�s de la Colonne';
	$lang['strnotableprovided'] = 'Aucune table fournie !';

	// Users
	$lang['struser'] = 'Utilisateur';
	$lang['strusers'] = 'Utilisateurs';
	$lang['strusername'] = 'Utilisateur';
	$lang['strpassword'] = 'Mot de passe';
	$lang['strsuper'] = 'Super utilisateur ?';
	$lang['strcreatedb'] = 'Cr�er base de donn�es ?';
	$lang['strexpires'] = 'Expiration';
	$lang['strsessiondefaults'] = 'Session par d�faut';
	$lang['strnousers'] = 'Aucun utilisateur trouv�.';
	$lang['struserupdated'] = 'Utilisateur mis � jour.';
	$lang['struserupdatedbad'] = '�chec lors de la mise � jour de l\'utilisateur.';
	$lang['strshowallusers'] = 'Voir tous les utilisateurs';
	$lang['strcreateuser'] = 'Cr�er un utilisateur';
	$lang['struserneedsname'] = 'Vous devez donner un nom pour votre utilisateur.';
	$lang['strusercreated'] = 'Utilisateur cr��.';
	$lang['strusercreatedbad'] = '�chec lors de la cr�ation de l\'utilisateur.';
	$lang['strconfdropuser'] = '�tes-vous s�r de vouloir supprimer l\'utilisateur � %s � ?';
	$lang['struserdropped'] = 'Utilisateur supprim�.';
	$lang['struserdroppedbad'] = '�chec lors de la suppression de l\'utilisateur.';
	$lang['straccount'] = 'Comptes';
	$lang['strchangepassword'] = 'Modifier le mot de passe';
	$lang['strpasswordchanged'] = 'Mot de passe modifi�.';
	$lang['strpasswordchangedbad'] = '�chec lors de la modification du mot de passe.';
	$lang['strpasswordshort'] = 'Le mot de passe est trop court.';
	$lang['strpasswordconfirm'] = 'Le mot de passe de confirmation est diff�rent.';

	// Groups
	$lang['strgroup'] = 'Groupe';
	$lang['strgroups'] = 'Groupes';
	$lang['strshowallgroups'] = 'Afficher tous les groupes';
	$lang['strnogroup'] = 'Groupe introuvable.';
	$lang['strnogroups'] = 'Aucun groupe trouv�.';
	$lang['strcreategroup'] = 'Cr�er un groupe';
	$lang['strgroupneedsname'] = 'Vous devez indiquer un nom pour votre groupe.';
	$lang['strgroupcreated'] = 'Groupe cr��.';
	$lang['strgroupcreatedbad'] = '�chec lors de la cr�ation du groupe.';
	$lang['strconfdropgroup'] = '�tes-vous s�r de vouloir supprimer le groupe � %s � ?';
	$lang['strgroupdropped'] = 'Groupe supprim�.';
	$lang['strgroupdroppedbad'] = '�chec lors de la suppression du groupe.';
	$lang['strmembers'] = 'Membres';
	$lang['strmemberof'] = 'Membre de';
	$lang['stradminmembers'] = 'Membres admin';
	$lang['straddmember'] = 'Ajouter un membre';
	$lang['strmemberadded'] = 'Membre ajout�.';
	$lang['strmemberaddedbad'] = '�chec lors de l\'ajout du membre.';
	$lang['strdropmember'] = 'Supprimer un membre';
	$lang['strconfdropmember'] = '�tes-vous s�r de vouloir supprimer le membre � %s � du groupe � %s � ?';
	$lang['strmemberdropped'] = 'Membre supprim�.';
	$lang['strmemberdroppedbad'] = '�chec lors de la suppression du membre.';

	// Roles
	$lang['strrole'] = 'R�le';
	$lang['strroles'] = 'R�les';
	$lang['strshowallroles'] = 'Afficher tous les r�les';
	$lang['strnoroles'] = 'Aucun r�le trouv�.';
	$lang['strinheritsprivs'] = 'H�rite des droits ?';
	$lang['strcreaterole'] = 'Cr�er un r�le';
	$lang['strcancreaterole'] = 'Peut cr�er un r�le ?';
	$lang['strrolecreated'] = 'R�le cr��.';
	$lang['strrolecreatedbad'] = '�chec lors de la cr�ation du r�le.';
	$lang['strrolealtered'] = 'R�le modifi�.';
	$lang['strrolealteredbad'] = '�chec lors de la modification du r�le.';
	$lang['strcanlogin'] = 'Peut se connecter ?';
	$lang['strconnlimit'] = 'Limite de connexion';
	$lang['strdroprole'] = 'Supprimer un r�le';
	$lang['strconfdroprole'] = '�tes-vous s�r de vouloir supprimer le r�le � %s � ?';
	$lang['strroledropped'] = 'R�le supprim�.';
	$lang['strroledroppedbad'] = '�chec lors de la suppression du r�le.';
	$lang['strnolimit'] = 'Aucune limite';
	$lang['strnever'] = 'Jamais';
	$lang['strroleneedsname'] = 'Vous devez donner un nom � ce r�le.';

	// Privileges
	$lang['strprivilege'] = 'Droit';
	$lang['strprivileges'] = 'Droits';
	$lang['strnoprivileges'] = 'Cet objet poss�de les droits par d�fault.';
	$lang['strgrant'] = 'Accorder (GRANT)';
	$lang['strrevoke'] = 'R�voquer (REVOKE)';
	$lang['strgranted'] = 'Droits accord�s.';
	$lang['strgrantfailed'] = '�chec lors de l\'octroi des droits.';
	$lang['strgrantbad'] = 'Vous devez sp�cifier au moins un utilisateur ou groupe et au moins un droit.';
	$lang['strgrantor'] = 'Grantor';
	$lang['strasterisk'] = '*';

	// Databases
	$lang['strdatabase'] = 'Base de donn�es';
	$lang['strdatabases'] = 'Bases de donn�es';
	$lang['strshowalldatabases'] = 'Voir toutes les bases de donn�es';
	$lang['strnodatabases'] = 'Aucune base de donn�es trouv�e.';
	$lang['strcreatedatabase'] = 'Cr�er une base de donn�es';
	$lang['strdatabasename'] = 'Nom de la base de donn�es';
	$lang['strdatabaseneedsname'] = 'Vous devez donner un nom pour votre base de donn�es.';
	$lang['strdatabasecreated'] = 'Base de donn�es cr��e.';
	$lang['strdatabasecreatedbad'] = '�chec lors de la cr�ation de la base de donn�es.';
	$lang['strconfdropdatabase'] = '�tes-vous s�r de vouloir supprimer la base de donn�es � %s � ?';
	$lang['strdatabasedropped'] = 'Base de donn�es supprim�e.';
	$lang['strdatabasedroppedbad'] = '�chec lors de la suppression de la base de donn�es.';
	$lang['strentersql'] = 'Veuillez saisir ci-dessous la requ�te SQL � ex�cuter :';
	$lang['strsqlexecuted'] = 'Requ�te SQL ex�cut�e.';
	$lang['strvacuumgood'] = 'Vacuum ex�cut�.';
	$lang['strvacuumbad'] = '�chec du Vacuum.';
	$lang['stranalyzegood'] = 'Analyse effectu�e.';
	$lang['stranalyzebad'] = '�chec de l\'analyse.';
	$lang['strreindexgood'] = 'R�indexation ex�cut�e.';
	$lang['strreindexbad'] = '�chec de la r�indexation.';
	$lang['strfull'] = 'Int�gral (FULL)';
	$lang['strfreeze'] = 'Freeze';
	$lang['strforce'] = 'Forcer';
	$lang['strsignalsent'] = 'Signal envoy�.';
	$lang['strsignalsentbad'] = '�chec lors de l\'envoi du signal.';
	$lang['strallobjects'] = 'Tous les objets';
	$lang['strdatabasealtered'] = 'Base de donn�es modifi�e.';
	$lang['strdatabasealteredbad'] = '�chec lors de la modification de la base de donn�es.';
	$lang['strspecifydatabasetodrop'] = 'Vous devez sp�cifier au moins une base de donn�es � supprimer';
	$lang['strtemplatedb'] = 'Mod�le';
	$lang['strconfanalyzedatabase'] = '�tes vous s�r de vouloir �ffectuer un ANALYZE sur toutes les tables de la base de donn�es � %s � ?';
	$lang['strconfvacuumdatabase'] = '�tes vous s�r de vouloir �ffectuer un VACUUM sur toutes les tables de la base de donn�es � %s � ?';
	$lang['strconfreindexdatabase'] = '�tes vous s�r de vouloir r�indexer toutes les tables de la base de donn�es � %s � ?';
	$lang['strconfclusterdatabase'] = '�tes vous s�r de vouloir �ffectuer un CLUSTER sur toutes les tables de la base de donn�es � %s � ?';

	// Views
	$lang['strview'] = 'Vue';
	$lang['strviews'] = 'Vues';
	$lang['strshowallviews'] = 'Voir toutes les vues';
	$lang['strnoview'] = 'Aucne vue trouv�e.';
	$lang['strnoviews'] = 'Aucune vue trouv�e.';
	$lang['strcreateview'] = 'Cr�er une vue';
	$lang['strviewname'] = 'Nom de la vue';
	$lang['strviewneedsname'] = 'Vous devez indiquer un nom pour votre vue.';
	$lang['strviewneedsdef'] = 'Vous devez indiquer une d�finition pour votre vue.';
	$lang['strviewneedsfields'] = 'Vous devez pr�ciser les colonnes que vous voulez s�lectionner dans votre vue.';
	$lang['strviewcreated'] = 'Vue cr��e.';
	$lang['strviewcreatedbad'] = '�chec lors de la cr�ation de la vue.';
	$lang['strconfdropview'] = '�tes-vous s�r de vouloir supprimer la vue � %s � ?';
	$lang['strviewdropped'] = 'Vue supprim�e.';
	$lang['strviewdroppedbad'] = '�chec lors de la suppression de la vue.';
	$lang['strviewupdated'] = 'Vue mise � jour.';
	$lang['strviewupdatedbad'] = '�chec lors de la mise � jour de la vue.';
	$lang['strviewlink'] = 'Cl�s li�es';
	$lang['strviewconditions'] = 'Conditions suppl�mentaires';
	$lang['strcreateviewwiz'] = 'Cr�er une vue avec l\'assistant';
	$lang['strrenamedupfields'] = 'Renommer les champs dupliqu�s';
	$lang['strdropdupfields'] = 'Ignorer les champs dupliqu�s';
	$lang['strerrordupfields'] = 'Erreur en cas de champs dupliqu�s';
	$lang['strviewaltered'] = 'Vue modifi�e.';
	$lang['strviewalteredbad'] = '�chec lors de la modification de la vue.';
	$lang['strspecifyviewtodrop'] = 'Vous devez sp�cifier au moins une vue � supprimer.';

	// Sequences
	$lang['strsequence'] = 'S�quence';
	$lang['strsequences'] = 'S�quences';
	$lang['strshowallsequences'] = 'Voir toutes les s�quences';
	$lang['strnosequence'] = 'Aucune s�quence trouv�e.';
	$lang['strnosequences'] = 'Aucune s�quence trouv�e.';
	$lang['strcreatesequence'] = 'Cr�er une s�quence';
	$lang['strlastvalue'] = 'Derni�re valeur';
	$lang['strincrementby'] = 'Incr�menter par ';
	$lang['strstartvalue'] = 'Valeur de d�part';
	$lang['strrestartvalue'] = 'Valeur de red�marrage';
	$lang['strmaxvalue'] = 'Valeur maximale';
	$lang['strminvalue'] = 'Valeur minimale';
	$lang['strcachevalue'] = 'Valeur de cache';
	$lang['strlogcount'] = 'Comptage';
	$lang['strcancycle'] = 'Peut boucler?';
	$lang['striscalled'] = 'Incr�mentera la derni�re valeur avant de retourner la prochaine valeur (is_called) ?';
	$lang['strsequenceneedsname'] = 'Vous devez sp�cifier un nom pour votre s�quence.';
	$lang['strsequencecreated'] = 'S�quence cr��e.';
	$lang['strsequencecreatedbad'] = '�chec lors de la cr�ation de la s�quence.'; 
	$lang['strconfdropsequence'] = '�tes-vous s�r de vouloir supprimer la s�quence � %s � ?';
	$lang['strsequencedropped'] = 'S�quence supprim�e.';
	$lang['strsequencedroppedbad'] = '�chec lors de la suppression de la s�quence.';
	$lang['strsequencerestart'] = 'S�quence red�marr�e.';
	$lang['strsequencerestartbad'] = '�chec tu red�marrage de la s�quence.';
	$lang['strsequencereset'] = 'S�quence initialis�e.';
	$lang['strsequenceresetbad'] = '�chec lors de l\'initialisation de la s�quence.';
	$lang['strsequencealtered'] = 'S�quence modifi�e.';
	$lang['strsequencealteredbad'] = '�chec lors de la modification de la s�quence.';
	$lang['strsetval'] = 'Initialiser � une valeur';
	$lang['strsequencesetval'] = 'S�quence initialis�e.';
	$lang['strsequencesetvalbad'] = '�chec lors de l\'initialisation de la s�quence.';
	$lang['strnextval'] = 'Incr�menter la valeur';
	$lang['strsequencenextval'] = 'S�quence incr�ment�e.';
	$lang['strsequencenextvalbad'] = '�chec lors de l\'incr�mentation de la valeur.';
	$lang['strspecifysequencetodrop'] = 'Vous devez sp�cifier au moins une s�quence � supprimer.';

	// Indexes
	$lang['strindex'] = 'Index';
	$lang['strindexes'] = 'Index';
	$lang['strindexname'] = 'Nom de l\'index';
	$lang['strshowallindexes'] = 'Voir tous les index';
	$lang['strnoindex'] = 'Aucun index trouv�.';
	$lang['strnoindexes'] = 'Aucun index trouv�.';
	$lang['strcreateindex'] = 'Cr�er un index';
	$lang['strtabname'] = 'Nom de la table';
	$lang['strcolumnname'] = 'Nom de la colonne';
	$lang['strindexneedsname'] = 'Vous devez indiquer un nom pour votre index';
	$lang['strindexneedscols'] = 'Vous devez indiquer un nombre valide de colonnes.';
	$lang['strindexcreated'] = 'Index cr��';
	$lang['strindexcreatedbad'] = '�chec lors de la cr�ation de l\'index.';
	$lang['strconfdropindex'] = '�tes-vous s�r de vouloir supprimer l\'index � %s � ?';
	$lang['strindexdropped'] = 'Index supprim�.';
	$lang['strindexdroppedbad'] = '�chec lors de la suppression de l\'index.';
	$lang['strkeyname'] = 'Nom de la cl�';
	$lang['struniquekey'] = 'Cl� unique';
	$lang['strprimarykey'] = 'Cl� primaire';
	$lang['strindextype'] = 'Type d\'index';
	$lang['strtablecolumnlist'] = 'Liste des colonnes';
	$lang['strindexcolumnlist'] = 'Liste des colonnes dans l\'index';
	$lang['strclusteredgood'] = 'Cluster effectu�.';
	$lang['strclusteredbad'] = '�chec du cluster.';
	$lang['strconcurrently'] = 'En parall�le';
	$lang['strnoclusteravailable'] = 'La table n\'est pas encore ordonn�e selon un index.';

	// Rules
	$lang['strrules'] = 'R�gles';
	$lang['strrule'] = 'R�gle';
	$lang['strshowallrules'] = 'Voir toutes les r�gles';
	$lang['strnorule'] = 'Aucune r�gle trouv�e.';
	$lang['strnorules'] = 'Aucune r�gle trouv�e.';
	$lang['strcreaterule'] = 'Cr�er une r�gle';
	$lang['strrulename'] = 'Nom de la r�gle';
	$lang['strruleneedsname'] = 'Vous devez indiquer un nom pour votre r�gle.';
	$lang['strrulecreated'] = 'R�gle cr��e.';
	$lang['strrulecreatedbad'] = '�chec lors de la cr�ation de la r�gle.';
	$lang['strconfdroprule'] = '�tes-vous s�r de vouloir supprimer la r�gle � %s � sur � %s � ?';
	$lang['strruledropped'] = 'R�gle supprim�e.';
	$lang['strruledroppedbad'] = '�chec lors de la suppression de la r�gle.';

	// Constraints
	$lang['strconstraint'] = 'Contrainte';
	$lang['strconstraints'] = 'Contraintes';
	$lang['strshowallconstraints'] = 'Voir toutes les contraintes';
	$lang['strnoconstraints'] = 'Aucune contrainte trouv�e.';
	$lang['strcreateconstraint'] = 'Cr�er une contrainte';
	$lang['strconstraintcreated'] = 'Cr�ation d\'une contrainte.';
	$lang['strconstraintcreatedbad'] = '�chec lors de la cr�ation de la contrainte.';
	$lang['strconfdropconstraint'] = '�tes-vous s�r de vouloir supprimer la contrainte � %s � sur � %s � ?';
	$lang['strconstraintdropped'] = 'Contrainte supprim�e.';
	$lang['strconstraintdroppedbad'] = '�chec lors de la suppression de la contrainte.';
	$lang['straddcheck'] = 'Ajouter une contrainte';
	$lang['strcheckneedsdefinition'] = 'La contrainte a besoin d\'une d�finition.';
	$lang['strcheckadded'] = 'Contrainte ajout�e.';
	$lang['strcheckaddedbad'] = '�chec lors de l\'ajout d\'une contrainte de v�rification (CHECK).';
	$lang['straddpk'] = 'Ajouter une cl� primaire';
	$lang['strpkneedscols'] = 'La cl� primaire n�cessite au moins une colonne.';
	$lang['strpkadded'] = 'Cl� primaire ajout�e.';
	$lang['strpkaddedbad'] = '�chec lors de l\'ajout de la cl� primaire.';
	$lang['stradduniq'] = 'Ajouter une cl� unique';
	$lang['struniqneedscols'] = 'Une cl� unique n�cessite au moins une colonne.';
	$lang['struniqadded'] = 'La cl� unique a �t� ajout�e.';
	$lang['struniqaddedbad'] = '�chec lors de la cr�ation de la cl� unique.';
	$lang['straddfk'] = 'Ajouter une cl� �trang�re';
	$lang['strfkneedscols'] = 'Une cl� �trang�re n�cessite au moins une colonne.';
	$lang['strfkneedstarget'] = 'Une cl� �trang�re n�cessite une table cible.';
	$lang['strfkadded'] = 'La cl� �trang�re a �t� ajout�e.';
	$lang['strfkaddedbad'] = '�chec lors de la cr�ation de la cl� �trang�re.';
	$lang['strfktarget'] = 'Table cible';
	$lang['strfkcolumnlist'] = 'Liste des colonnes de la cl�';
	$lang['strondelete'] = 'ON DELETE';
	$lang['stronupdate'] = 'ON UPDATE';

	// Functions
	$lang['strfunction'] = 'Fonction';
	$lang['strfunctions'] = 'Fonctions';
	$lang['strshowallfunctions'] = 'Voir toutes les fonctions';
	$lang['strnofunction'] = 'Aucune fonction trouv�e.';
	$lang['strnofunctions'] = 'Aucune fonction trouv�e.';
	$lang['strcreateplfunction'] = 'Cr�er une fonction PL/SQL';
	$lang['strcreateinternalfunction'] = 'Cr�er une fonction interne';
	$lang['strcreatecfunction'] = 'Cr�er une fonction C';
	$lang['strfunctionname'] = 'Nom de la fonction';
	$lang['strreturns'] = 'Valeur de sortie';
	$lang['strproglanguage'] = 'Langage';
	$lang['strfunctionneedsname'] = 'Vous devez indiquer un nom pour votre fonction.';
	$lang['strfunctionneedsdef'] = 'Vous devez indiquer une d�finition pour votre fonction.';
	$lang['strfunctioncreated'] = 'Fonction cr��e.';
	$lang['strfunctioncreatedbad'] = '�chec lors de la cr�ation de la fonction.';
	$lang['strconfdropfunction'] = '�tes-vous s�r de vouloir supprimer la fonction � %s � ?';
	$lang['strfunctiondropped'] = 'Fonction supprim�e.';
	$lang['strfunctiondroppedbad'] = '�chec lors de la suppression de la fonction.';
	$lang['strfunctionupdated'] = 'Fonction mise � jour.';
	$lang['strfunctionupdatedbad'] = '�chec lors de la mise � jour de la fonction.';
	$lang['strobjectfile'] = 'Fichier objet';
	$lang['strlinksymbol'] = 'Symbole lien';
	$lang['strarguments'] = 'Arguments';
	$lang['strargmode'] = 'Mode';
	$lang['strargtype'] = 'Type';
	$lang['strargadd'] = 'Ajouter un autre argument';
	$lang['strargremove'] = 'Supprimer cet argument';
	$lang['strargnoargs'] = 'Cet fonction ne prend pas d\'arguments.';
	$lang['strargenableargs'] = 'Active les arguments pass�s � cette fonction.';
	$lang['strargnorowabove'] = 'Il doit y avoir une ligne au-dessus de cette ligne.';
	$lang['strargnorowbelow'] = 'Il doit y avoir une ligne en-dessous de cette ligne.';
	$lang['strargraise'] = 'Monter.';
	$lang['strarglower'] = 'Descendre.';
	$lang['strargremoveconfirm'] = '�tes-vous s�r de vouloir supprimer cet argument ? cette op�ration ne peut pas �tre annul�e.';
	$lang['strfunctioncosting'] = 'Co�t de la function';
	$lang['strresultrows'] = 'Lignes de r�sultat';
	$lang['strexecutioncost'] = 'Co�t d\'ex�cution';
	$lang['strspecifyfunctiontodrop'] = 'Vous devez sp�cifier au moins une fonction � supprimer.';

	// Triggers
	$lang['strtrigger'] = 'Trigger';
	$lang['strtriggers'] = 'Triggers';
	$lang['strshowalltriggers'] = 'Voir tous les triggers';
	$lang['strnotrigger'] = 'Aucun trigger trouv�.';
	$lang['strnotriggers'] = 'Aucun trigger trouv�.';
	$lang['strcreatetrigger'] = 'Cr�er un trigger';
	$lang['strtriggerneedsname'] = 'Vous devez indiquer un nom pour votre trigger.';
	$lang['strtriggerneedsfunc'] = 'Vous devez indiquer une fonction pour votre trigger.';
	$lang['strtriggercreated'] = 'Trigger cr��.';
	$lang['strtriggercreatedbad'] = '�chec lors de la cr�ation du trigger.';
	$lang['strconfdroptrigger'] = '�tes-vous s�r de vouloir supprimer le trigger � %s � sur � %s � ?';
	$lang['strconfenabletrigger'] = '�tes-vous s�r de vouloir activer le trigger � %s � sur � %s� ?';
	$lang['strconfdisabletrigger'] = '�tes-vous s�r de vouloir d�sactiver le trigger � %s � sur � %s� ?';
	$lang['strtriggerdropped'] = 'Trigger supprim�.';
	$lang['strtriggerdroppedbad'] = '�chec lors de la suppression du trigger.';
	$lang['strtriggerenabled'] = 'Trigger activ�.';
	$lang['strtriggerenabledbad'] = '�chec lors de l\'activation du trigger.';
	$lang['strtriggerdisabled'] = 'Trigger d�sactiv�.';
	$lang['strtriggerdisabledbad'] = '�chec lors de la d�sactivation du trigger.';
	$lang['strtriggeraltered'] = 'Trigger modifi�.';
	$lang['strtriggeralteredbad'] = '�chec lors de la modification du trigger.';
	$lang['strforeach'] = 'Pour chaque';

	// Types
	$lang['strtype'] = 'Type';
	$lang['strtypes'] = 'Types';
	$lang['strshowalltypes'] = 'Voir tous les types';
	$lang['strnotype'] = 'Aucun type trouv�.';
	$lang['strnotypes'] = 'Aucun type trouv�.';
	$lang['strcreatetype'] = 'Cr�er un type';
	$lang['strcreatecomptype'] = 'Cr�er un type compos�';
	$lang['strcreateenumtype'] = 'Cr�er un type enum';
	$lang['strtypeneedsfield'] = 'Vous devez sp�cifier au moins un champ.';
	$lang['strtypeneedsvalue'] = 'Vous devez sp�cifier au moins une valeur.';
	$lang['strtypeneedscols'] = 'Vous devez sp�cifier un nombre valide de champs.';
	$lang['strtypeneedsvals'] = 'Vous devez sp�cifier un nombre valide de valeurs.';
	$lang['strinputfn'] = 'Fonction d\'entr�e';
	$lang['stroutputfn'] = 'Fonction de sortie';
	$lang['strpassbyval'] = 'Pass�e par valeur ?';
	$lang['stralignment'] = 'Alignement';
	$lang['strelement'] = '�l�ment';
	$lang['strdelimiter'] = 'D�limiteur';
	$lang['strstorage'] = 'Stockage';
	$lang['strfield'] = 'Champ';
	$lang['strnumfields'] = 'Nombre de champs';
	$lang['strnumvalues'] = 'Nombre de valeurs';
	$lang['strtypeneedsname'] = 'Vous devez indiquer un nom pour votre type.';
	$lang['strtypeneedslen'] = 'Vous devez indiquer une longueur pour votre type.';
	$lang['strtypecreated'] = 'Type cr��';
	$lang['strtypecreatedbad'] = '�chec lors de la cr�ation du type.';
	$lang['strconfdroptype'] = '�tes-vous s�r de vouloir supprimer le type � %s � ?';
	$lang['strtypedropped'] = 'Type supprim�.';
	$lang['strtypedroppedbad'] = '�chec lors de la suppression du type.';
	$lang['strflavor'] = 'Genre';
	$lang['strbasetype'] = 'Base';
	$lang['strcompositetype'] = 'Composite';
	$lang['strpseudotype'] = 'Pseudo';
	$lang['strenum'] = 'Enum';
	$lang['strenumvalues'] = 'Valeurs de l\'enum';

	// Schemas
	$lang['strschema'] = 'Sch�ma';
	$lang['strschemas'] = 'Sch�mas';
	$lang['strshowallschemas'] = 'Voir tous les sch�mas';
	$lang['strnoschema'] = 'Aucun sch�ma trouv�.';
	$lang['strnoschemas'] = 'Aucun sch�ma trouv�.';
	$lang['strcreateschema'] = 'Cr�er un sch�ma';
	$lang['strschemaname'] = 'Nom du sch�ma';
	$lang['strschemaneedsname'] = 'Vous devez indiquer un nom pour votre sch�ma.';
	$lang['strschemacreated'] = 'Sch�ma cr��';
	$lang['strschemacreatedbad'] = '�chec lors de la cr�ation du sch�ma.';
	$lang['strconfdropschema'] = '�tes-vous s�r de vouloir supprimer le sch�ma � %s � ?';
	$lang['strschemadropped'] = 'Sch�ma supprim�.';
	$lang['strschemadroppedbad'] = '�chec lors de la suppression du sch�ma.';
	$lang['strschemaaltered'] = 'Schema modifi�.';
	$lang['strschemaalteredbad'] = '�chec lors de la modification du sch�ma.';
	$lang['strsearchpath'] = 'Chemin de recherche du sch�ma';
	$lang['strspecifyschematodrop'] = 'Vous devez sp�cifier au moins un sch�ma � supprimer.';

	// Reports
	$lang['strreport'] = 'Rapport';
	$lang['strreports'] = 'Rapports';
	$lang['strshowallreports'] = 'Voir tous les rapports';
	$lang['strnoreports'] = 'Aucun rapport trouv�.';
	$lang['strcreatereport'] = 'Cr�er un rapport';
	$lang['strreportdropped'] = 'Rapport supprim�.';
	$lang['strreportdroppedbad'] = '�chec lors de la suppression du rapport.';
	$lang['strconfdropreport'] = '�tes-vous s�r de vouloir supprimer le rapport � %s � ?';
	$lang['strreportneedsname'] = 'Vous devez indiquer un nom pour votre rapport.';
	$lang['strreportneedsdef'] = 'Vous devez fournir une requ�te SQL pour votre rapport.';
	$lang['strreportcreated'] = 'Rapport sauvegard�.';
	$lang['strreportcreatedbad'] = '�chec lors de la sauvegarde du rapport.';

	// Domains
	$lang['strdomain'] = 'Domaine';
	$lang['strdomains'] = 'Domaines';
	$lang['strshowalldomains'] = 'Voir tous les domaines';
	$lang['strnodomains'] = 'Pas de domaine trouv�.';
	$lang['strcreatedomain'] = 'Cr�er un domaine';
	$lang['strdomaindropped'] = 'Domaine supprim�.';
	$lang['strdomaindroppedbad'] = '�chec lors de la suppression.';
	$lang['strconfdropdomain'] = '�tes-vous sur de vouloir supprimer le domaine � %s � ?';
	$lang['strdomainneedsname'] = 'Vous devez donner un nom pour votre domaine.';
	$lang['strdomaincreated'] = 'Domaine cr��.';
	$lang['strdomaincreatedbad'] = '�chec lors de la cr�ation du domaine.';
	$lang['strdomainaltered'] = 'Domaine modifi�.';
	$lang['strdomainalteredbad'] = '�chec lors de la modification du domaine.';

	// Operators
	$lang['stroperator'] = 'Op�rateur';
	$lang['stroperators'] = 'Op�rateurs';
	$lang['strshowalloperators'] = 'Voir tous les op�rateurs';
	$lang['strnooperator'] = 'Pas d\'op�rateur trouv�.';
	$lang['strnooperators'] = 'Pas d\'op�rateur trouv�.';
	$lang['strcreateoperator'] = 'Cr�er un op�rateur';
	$lang['strleftarg'] = 'Type de l\'argument de gauche';
	$lang['strrightarg'] = 'Type de l\'argument de droite';
	$lang['strcommutator'] = 'Commutateur';
	$lang['strnegator'] = 'N�gation';
	$lang['strrestrict'] = 'Restriction';
	$lang['strjoin'] = 'Jointure';
	$lang['strhashes'] = 'Hachages';
	$lang['strmerges'] = 'Assemblages';
	$lang['strleftsort'] = 'Tri gauche';
	$lang['strrightsort'] = 'Tri droite';
	$lang['strlessthan'] = 'Plus petit que';
	$lang['strgreaterthan'] = 'Plus grand que';
	$lang['stroperatorneedsname'] = 'Vous devez donner un nom pour votre op�rateur.';
	$lang['stroperatorcreated'] = 'Op�rateur cr��';
	$lang['stroperatorcreatedbad'] = '�chec lors de la cr�ation de l\'op�rateur.';
	$lang['strconfdropoperator'] = '�tes-vous sur de vouloir supprimer l\'op�rateur � %s � ?';
	$lang['stroperatordropped'] = 'Op�rateur supprim�.';
	$lang['stroperatordroppedbad'] = '�chec lors de la suppression de l\'op�rateur.';

	// Casts
	$lang['strcasts'] = 'Conversions';
	$lang['strnocasts'] = 'Aucune conversion trouv�e.';
	$lang['strsourcetype'] = 'Type source';
	$lang['strtargettype'] = 'Type cible';
	$lang['strimplicit'] = 'Implicite';
	$lang['strinassignment'] = 'En affectation';
	$lang['strbinarycompat'] = '(binaire compatible)';

	// Conversions
	$lang['strconversions'] = 'Conversions';
	$lang['strnoconversions'] = 'Aucune conversion trouv�e.';
	$lang['strsourceencoding'] = 'Codage source';
	$lang['strtargetencoding'] = 'Codage cible';

	// Languages
	$lang['strlanguages'] = 'Langages';
	$lang['strnolanguages'] = 'Pas de langage trouv�.';
	$lang['strtrusted'] = 'De confiance';

	// Info
	$lang['strnoinfo'] = 'Pas d\'information disponible.';
	$lang['strreferringtables'] = 'Tables r�f�rentes';
	$lang['strparenttables'] = 'Tables parents';
	$lang['strchildtables'] = 'Tables enfants';

	// Aggregates
	$lang['straggregate'] = 'Agr�gat';
	$lang['straggregates'] = 'Agr�gats';
	$lang['strnoaggregates'] = 'Aucun agr�gat trouv�.';
	$lang['stralltypes'] = '(tous les types)';
	$lang['strcreateaggregate'] = 'Cr�er un agr�gat';
	$lang['straggrbasetype'] = 'Type de donn�es en entr�e';
	$lang['straggrsfunc'] = 'Fonction de transition de l\'�tat';
	$lang['straggrstype'] = 'Type de la valeur de transition';
	$lang['straggrffunc'] = 'Fonction finale';
	$lang['straggrinitcond'] = 'Condition initiale';
	$lang['straggrsortop'] = 'Op�rateur de tri';
	$lang['strconfdropaggregate'] = '�tes-vous s�r de vouloir supprimer l\'agr�gat � %s �?';
	$lang['straggregatedropped'] = 'Agr�gat supprim�.';
	$lang['straggregatedroppedbad'] = '�chec lors de la suppression de l\'agr�gat.';
	$lang['straggraltered'] = 'Agr�gat modifi�.';
	$lang['straggralteredbad'] = '�chec lors de la modification de l\'agr�gat.';
	$lang['straggrneedsname'] = 'Vous devez indiquer un nom pour l\'agr�gat';
	$lang['straggrneedsbasetype'] = 'Vous devez indiquer le type de donn�es en entr�e pour l\'agr�gat';
	$lang['straggrneedssfunc'] = 'Vous devez indiquer le nom de la fonction de transition de l\'agr�gat';
	$lang['straggrneedsstype'] = 'Vous devez indiquer le type de donn�e pour la valeur d\'�tat pour l\'agr�gat';
	$lang['straggrcreated'] = 'Agr�gat cr��.';
	$lang['straggrcreatedbad'] = '�chec lors de la cr�ation de l\'agr�gat.';
	$lang['straggrshowall'] = 'Afficher tous les agr�gats';

	// Operator Classes
	$lang['stropclasses'] = 'Classes d\'op�rateur';
	$lang['strnoopclasses'] = 'Aucune classe d\'op�rateur trouv�e.';
	$lang['straccessmethod'] = 'M�thode d\'acc�s';

	// Stats and performance
	$lang['strrowperf'] = 'Performance des enregistrements';
	$lang['strioperf'] = 'Performance en entr�e/sortie';
	$lang['stridxrowperf'] = 'Performance des index';
	$lang['stridxioperf'] = 'Performance des index en entr�es/sortie';
	$lang['strpercent'] = '%';
	$lang['strsequential'] = 'S�quentiel';
	$lang['strscan'] = 'Parcours';
	$lang['strread'] = 'Lecture';
	$lang['strfetch'] = 'R�cup�ration';
	$lang['strheap'] = 'En-t�te';
	$lang['strtoast'] = 'TOAST';
	$lang['strtoastindex'] = 'Index TOAST';
	$lang['strcache'] = 'Cache';
	$lang['strdisk'] = 'Disque';
	$lang['strrows2'] = 'Enregistrements';

	// Tablespaces
	$lang['strtablespace'] = 'Tablespace';
	$lang['strtablespaces'] = 'Tablespaces';
	$lang['strshowalltablespaces'] = 'Voir tous les tablespaces';
	$lang['strnotablespaces'] = 'Aucun tablespace trouv�.';
	$lang['strcreatetablespace'] = 'Cr�er un tablespace';
	$lang['strlocation'] = 'Emplacement';
	$lang['strtablespaceneedsname'] = 'Vous devez donner un nom � votre tablespace.';
	$lang['strtablespaceneedsloc'] = 'Vous devez pr�ciser un r�pertoire dans lequel sera cr�� le tablespace.';
	$lang['strtablespacecreated'] = 'Tablespace cr��.';
	$lang['strtablespacecreatedbad'] = '�chec lors de la cr�ation du tablespace.';
	$lang['strconfdroptablespace'] = '�tes-vous s�r de vouloir supprimer le tablespace � %s � ?';
	$lang['strtablespacedropped'] = 'Tablespace supprim�.';
	$lang['strtablespacedroppedbad'] = '�chec lors de la suppression du tablespace.';
	$lang['strtablespacealtered'] = 'Tablespace modifi�.';
	$lang['strtablespacealteredbad'] = '�chec lors de la modification du tablespace.';

	// Slony clusters
	$lang['strcluster'] = 'Cluster';
	$lang['strnoclusters'] = 'Aucun cluster trouv�.';
	$lang['strconfdropcluster'] = '�tesvous s�r de vouloir supprimer le cluster � %s � ?';
	$lang['strclusterdropped'] = 'Cluster supprim�.';
	$lang['strclusterdroppedbad'] = '�chec lors de la suppression du cluster.';
	$lang['strinitcluster'] = 'Initialiser le cluster';
	$lang['strclustercreated'] = 'Cluster initialis�.';
	$lang['strclustercreatedbad'] = '�chec lors de l\'initialisation du cluster.';
	$lang['strclusterneedsname'] = 'Vous devez donner un nom au cluster.';
	$lang['strclusterneedsnodeid'] = 'Vous devez donner un ID au noeud local.';

	// Slony nodes
	$lang['strnodes'] = 'Noeuds';
	$lang['strnonodes'] = 'Aucun noeud trouv�.';
	$lang['strcreatenode'] = 'Cr�er un noeud';
	$lang['strid'] = 'ID';
	$lang['stractive'] = 'Actif';
	$lang['strnodecreated'] = 'Noeud cr��.';
	$lang['strnodecreatedbad'] = '�chec lors de la cr�ation du noeud.';
	$lang['strconfdropnode'] = '�tes-vous s�r de vouloir supprimer le noeud � %s � ?';
	$lang['strnodedropped'] = 'Noeud supprim�.';
	$lang['strnodedroppedbad'] = '�chec lors de la suppression du noeud';
	$lang['strfailover'] = 'Basculer (failover)';
	$lang['strnodefailedover'] = 'Node bascul�.';
	$lang['strnodefailedoverbad'] = '�chec lors du basculement du noeud.';
	$lang['strstatus'] = 'Statut';	
	$lang['strhealthy'] = '�tat';
	$lang['stroutofsync'] = 'Hors synchro';
	$lang['strunknown'] = 'Inconnu';

	// Slony paths 
	$lang['strpaths'] = 'Chemins';
	$lang['strnopaths'] = 'Aucun chemin trouv�.';
	$lang['strcreatepath'] = 'Cr�er un chemin';
	$lang['strnodename'] = 'Nom du noeud';
	$lang['strnodeid'] = 'ID du noeud';
	$lang['strconninfo'] = 'Cha�ne de connexion';
	$lang['strconnretry'] = 'Secondes avant une nouvelle tentative de connexion';
	$lang['strpathneedsconninfo'] = 'Vous devez donner une cha�ne de connexion pour le chemin.';
	$lang['strpathneedsconnretry'] = 'Vous devez donner le nombre de secondes d\'attente avant une nouvelle tentative de connexion.';
	$lang['strpathcreated'] = 'Chemin cr��.';
	$lang['strpathcreatedbad'] = '�chec lors de la cr�ation du chemin.';
	$lang['strconfdroppath'] = '�tes-vous s�r de vouloir supprimer le chemin � %s � ?';
	$lang['strpathdropped'] = 'Chemin supprim�.';
	$lang['strpathdroppedbad'] = '�chec lors de la suppression du chemin.';

	// Slony listens
	$lang['strlistens'] = '�coutes';
	$lang['strnolistens'] = 'Aucune �coute trouv�e.';
	$lang['strcreatelisten'] = 'Cr�er une �coute';
	$lang['strlistencreated'] = '�coute cr��e.';
	$lang['strlistencreatedbad'] = '�chec lors de la cr�ation de l\'�coute.';
	$lang['strconfdroplisten'] = '�tes-vous s�r de vouloir supprimer l\'�coute � %s � ?';
	$lang['strlistendropped'] = '�coute supprim�.';
	$lang['strlistendroppedbad'] = '�chec lors de la suppression de l\'�coute.';

	// Slony replication sets
	$lang['strrepsets'] = 'Ensembles de r�plication';
	$lang['strnorepsets'] = 'Aucun ensemble de r�plication trouv�.';
	$lang['strcreaterepset'] = 'Cr�er un ensemble de r�plication';
	$lang['strrepsetcreated'] = 'Ensemble de r�plication cr��.';
	$lang['strrepsetcreatedbad'] = '�chec lors de la cr�ation de l\'ensemble de r�plication.';
	$lang['strconfdroprepset'] = '�tes-vous s�r de vouloir supprimer l\'ensemble de r�plication � %s � ?';
	$lang['strrepsetdropped'] = 'Ensemble de r�plication supprim�.';
	$lang['strrepsetdroppedbad'] = '�chec lors de la suppression de l\'ensemble de r�plication.';
	$lang['strmerge'] = 'Assemblage';
	$lang['strmergeinto'] = 'Assembler dans';
	$lang['strrepsetmerged'] = 'Ensembles de r�plication assembl�s.';
	$lang['strrepsetmergedbad'] = '�chec lors de l\'assemblage des ensembles de r�plication.';
	$lang['strmove'] = 'D�placement';
	$lang['strneworigin'] = 'Nouvelle origine';
	$lang['strrepsetmoved'] = 'Ensemble de r�plication d�plac�.';
	$lang['strrepsetmovedbad'] = '�chec lors du d�placement de l\'ensemble de r�plication.';
	$lang['strnewrepset'] = 'Nouvel ensemble de r�plication';
	$lang['strlock'] = 'Verrou';
	$lang['strlocked'] = 'Verrouill�';
	$lang['strunlock'] = 'D�verrouill�';
	$lang['strconflockrepset'] = '�tes-vous s�r de vouloir verrouiller l\'ensemble de r�plication � %s � ?';
	$lang['strrepsetlocked'] = 'Ensemble de r�plication verrouill�.';
	$lang['strrepsetlockedbad'] = '�chec lors du verrouillage de l\'ensemble de r�plication.';
	$lang['strconfunlockrepset'] = '�tes-vous s�r de vouloir d�verrouiller l\'ensemble de r�plication � %s � ?';
	$lang['strrepsetunlocked'] = 'Ensemble de r�plication d�verrouill�.';
	$lang['strrepsetunlockedbad'] = '�chec lors du d�verrouillage de l\'ensemble de r�plication.';
	$lang['stronlyonnode'] = 'Seulement sur le noeud';
	$lang['strddlscript'] = 'Script DDL';
	$lang['strscriptneedsbody'] = 'Vous devez fournir un script � ex�cuter sur tous les noeuds.';
	$lang['strscriptexecuted'] = 'Script DDL de l\'ensemble de r�plication ex�cut�.';
	$lang['strscriptexecutedbad'] = '�chec lors de l\'ex�cution du script DDL de l\'ensemble de r�plication.';
	$lang['strtabletriggerstoretain'] = 'Les triggers suivants ne seront PAS d�sactiv�s par Slony:';

	// Slony tables in replication sets
	$lang['straddtable'] = 'Ajouter une table';
	$lang['strtableneedsuniquekey'] = 'La table � ajouter doit avoir une cl� primaire ou une cl� unique.';
	$lang['strtableaddedtorepset'] = 'Table ajouter � l\'ensemble de r�plication.';
	$lang['strtableaddedtorepsetbad'] = '�chec lors de l\'ajout de la table dans l\'ensemble de r�plication.';
	$lang['strconfremovetablefromrepset'] = '�tes-vous s�r de vouloir supprimer la table � %s � de l\'ensemble de r�plication � %s � ?';
	$lang['strtableremovedfromrepset'] = 'Table supprim�e de l\'ensemble de r�plication.';
	$lang['strtableremovedfromrepsetbad'] = '�chec lors de la suppression de la table de l\'ensemble de r�plication.';

	// Slony sequences in replication sets
	$lang['straddsequence'] = 'Ajouter une s�quence';
	$lang['strsequenceaddedtorepset'] = 'S�quence ajout�e � l\'ensemble de r�plication.';
	$lang['strsequenceaddedtorepsetbad'] = '�chec lors de l\'ajout de la s�quence � l\'ensemble de r�plication.';
	$lang['strconfremovesequencefromrepset'] = '�tes-vous s�r de vouloir supprimer la s�quence � %s � de l\'ensemble de r�plication � %s �?';
	$lang['strsequenceremovedfromrepset'] = 'S�quence supprim�e de l\'ensemble de r�plication.';
	$lang['strsequenceremovedfromrepsetbad'] = '�chec lors de la suppression de la s�quence � partir de l\'ensemble de r�plication.';

	// Slony subscriptions
	$lang['strsubscriptions'] = 'Souscriptions';
	$lang['strnosubscriptions'] = 'Aucune souscription trouv�e.';

	// Miscellaneous
	$lang['strtopbar'] = '%s lanc� sur %s:%s -- Vous �tes connect� avec le profil � %s �';
	$lang['strtimefmt'] = 'j M Y, H:i';
	$lang['strhelp'] = 'Aide';
	$lang['strhelpicon'] = '?';
	$lang['strhelppagebrowser'] = 'Navigateur pour l\'aide';
	$lang['strselecthelppage'] = 'S�lectionner une page d\'aide';
	$lang['strinvalidhelppage'] = 'Page d\'aide invalide.';
	$lang['strlogintitle'] = 'Se connecter � %s';
	$lang['strlogoutmsg'] = 'D�connect� de %s';
	$lang['strloading'] = 'Chargement...';
	$lang['strerrorloading'] = 'Erreur lors du chargement';
	$lang['strclicktoreload'] = 'Cliquer pour recharger';

	//Autovacuum
	$lang['strautovacuum'] = 'Autovacuum';
	$lang['strturnedon'] = 'Activ�'; 
	$lang['strturnedoff'] = 'D�sactiv�'; 
	$lang['strenabled'] = 'activ�';
	$lang['strnovacuumconf'] = 'Aucune configuration autovacuum trouv�e.';
	$lang['strvacuumbasethreshold'] = 'Limite de base pour le Vacuum';
	$lang['strvacuumscalefactor'] = 'Facteur d\'�chelle pour le Vacuum';
	$lang['stranalybasethreshold'] = 'Limite de base pour le Analyze';
	$lang['stranalyzescalefactor'] = 'Facteur d\'�chelle pour le Analyze';
	$lang['strvacuumcostdelay'] = 'D�lai du co�t du Vacuum';
	$lang['strvacuumcostlimit'] = 'Limite du co�t du Vacuum';
	$lang['strvacuumpertable'] = 'Configuration autovacuum par table';
	$lang['straddvacuumtable'] = 'Configurer autovacuum pour cette table';
	$lang['streditvacuumtable'] = 'Modifier la configuration autovacuum pour la table � %s �';
	$lang['strdelvacuumtable'] = 'Supprimer la configuration autovacuum pour la table � %s � ?';
	$lang['strvacuumtablereset'] = 'Configuration autovacuum par d�faut pour la table � %s �.';
	$lang['strdelvacuumtablefail'] = '�chec lors de la suppression de la configuration autovacuumpour la table � %s �';
	$lang['strsetvacuumtablesaved'] = 'Configuration autovacuum pour la table � %s � enregistr�e.';
	$lang['strsetvacuumtablefail'] = '�chec de la configuration autovacuum pour la table � %s �.';
	$lang['strspecifydelvacuumtable'] = 'Vous devez sp�cifier la table o� supprimer les param�tres autovacuum.';
	$lang['strspecifyeditvacuumtable'] = 'Vous devez sp�cifier la table o� �diter les param�tres autovacuum.';
	$lang['strnotdefaultinred'] = 'Valeurs diff�rentes de celles par d�faut en rouge.';

	//Table-level Locks
	$lang['strlocks'] = 'Verrous';
	$lang['strtransaction'] = 'ID de transaction';
	$lang['strvirtualtransaction'] = 'ID Virtuel de Transaction';
	$lang['strprocessid'] = 'ID du processus';
	$lang['strmode'] = 'Mode du verrou';
	$lang['strislockheld'] = 'Verrou d�tenu ?';

	// Prepared transactions
	$lang['strpreparedxacts'] = 'Transactions pr�par�es';
	$lang['strxactid'] = 'ID de transaction';
	$lang['strgid'] = 'ID global';

	// Fulltext search
	$lang['strfulltext'] = 'Recherche textuelle';
	$lang['strftsconfig'] = 'Configuration FTS';
	$lang['strftsconfigs'] = 'Configurations';
	$lang['strftscreateconfig'] = 'Cr�er une configuration FTS';
	$lang['strftscreatedict'] = 'Cr�er un dictionnaire';
	$lang['strftscreatedicttemplate'] = 'Cr�er un mod�le de dictionnaire';
	$lang['strftscreateparser'] = 'Cr�er un analyseur syntaxique';
	$lang['strftsnoconfigs'] = 'Aucune configuration FTS trouv�e.';
	$lang['strftsconfigdropped'] = 'Configuration FTS supprim�e.';
	$lang['strftsconfigdroppedbad'] = '�chec lors de la suppression de la configuration FTS.';
	$lang['strconfdropftsconfig'] = '�tes-vous s�r de vouloir supprimer la configuration FTS � %s � ?';
	$lang['strconfdropftsdict'] = '�tes-vous s�r de vouloir supprimer le dictionnaire FTS � %s � ?';
	$lang['strconfdropftsmapping'] = '�tes-vous s�r de vouloir supprimer le mapping � %s � de la configuration FTS � %s � ?';
	$lang['strftstemplate'] = 'Mod�le';
	$lang['strftsparser'] = 'Analyseur syntaxique';
	$lang['strftsconfigneedsname'] = 'Vous devez donner un nom pour votre configuration FTS.';
	$lang['strftsconfigcreated'] = 'Configuration FTS cr��e';
	$lang['strftsconfigcreatedbad'] = '�chec lors de la cr�ation de la configuration FTS.';
	$lang['strftsmapping'] = 'Type de jeton';
	$lang['strftsdicts'] = 'Dictionaires';
	$lang['strftsdict'] = 'Dictionaire';
	$lang['strftsemptymap'] = 'Aucune liaisons configur�e.';
	$lang['strftsconfigaltered'] = 'Configuration FTS modifi�e.';
	$lang['strftsconfigalteredbad'] = '�chec lors de l\'�dition de la configuration FTS.';
	$lang['strftsconfigmap'] = 'Configuration des liaisons type de jeton / dictionnaires';
	$lang['strftsparsers'] = 'Analyseurs syntaxique FTS';
	$lang['strftsnoparsers'] = 'Aucun analyseur syntaxique FTS disponnible.';
	$lang['strftsnodicts'] = 'Aucun dictionnaire FTS disponible.';
	$lang['strftsdictcreated'] = 'Dictionnaire FTS cr��';
	$lang['strftsdictcreatedbad'] = '�chec lors de la cr�ation du dictionnaire FTS.';
	$lang['strftslexize'] = 'Lexize';
	$lang['strftsinit'] = 'Init';
	$lang['strftsoptionsvalues'] = 'Options et Valeurs';
	$lang['strftsdictneedsname'] = 'Vous devez donner un nom pour votre dictionnaire FTS.';
	$lang['strftsdictdropped'] = 'Dictionnaire FTS supprim�.';
	$lang['strftsdictdroppedbad'] = '�chec lors de la suppression du dictionnaire FTS.';
	$lang['strftsdictaltered'] = 'Dictionnaire FTS modifi�.';
	$lang['strftsdictalteredbad'] = '�chec lors de l\'�dition du dictionnaire FTS.';
	$lang['strftsaddmapping'] = 'Ajouter une nouvelle liaison';
	$lang['strftsspecifymappingtodrop'] = 'Vous devez sp�cifier au moins une liaison � suppimer.';
	$lang['strftsspecifyconfigtoalter'] = 'Vous devez sp�cifier une configuration FTS � modifier';
	$lang['strftsmappingdropped'] = 'Laison supprim�e.';
	$lang['strftsmappingdroppedbad'] = '�chec lors de la suppression de la liaison.';
	$lang['strftsnodictionaries'] = 'Aucun dictionnaire trouv�.';
	$lang['strftsmappingaltered'] = 'Liaison modifi�e.';
	$lang['strftsmappingalteredbad'] = '�chec lors de la modification de la liaison.';
	$lang['strftsmappingadded'] = 'Liaison ajout�e.';
	$lang['strftsmappingaddedbad'] = '�chec lors de la suppression de la liaison.';
	$lang['strftstabconfigs'] = 'Configurations';
	$lang['strftstabdicts'] = 'Dictionaires';
	$lang['strftstabparsers'] = 'Analyseurs syntaxique';
	$lang['strftscantparsercopy'] = 'Vous ne pouvez sp�cifier en m�me temps un mod�le et un analyseur lors de la cr�ation d\'une configuration FTS.';
?>
