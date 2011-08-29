<?php

	/**
	 * Turkish language file for phpPgAdmin.  Use this as a basis
	 * for new translations.
	 *
	 * $Id: turkish.php,v 1.15 2007/04/24 11:42:07 soranzo Exp $
	 */

	// Language and character set
	$lang['applang'] = 'T�rk�e';
	$lang['appcharset'] = 'ISO-8859-9';
	$lang['applocale'] = 'tr_TR';
  	$lang['appdbencoding'] = 'LATIN5';
	$lang['applangdir'] = 'ltr';

	// Basic strings
	$lang['strintro'] = 'phpPgAdmin\'e ho�geldiniz.';
	$lang['strppahome'] = 'phpPgAdmin Ana Sayfas�';
	$lang['strpgsqlhome']  =  'PostgreSQL Ana Sayfas�';
	$lang['strpgsqlhome_url'] = 'http://www.postgresql.org/';
	$lang['strlocaldocs'] = 'PostgreSQL Belgeleri (yerel)';
	$lang['strreportbug'] = 'Hata Bildirin';
	$lang['strviewfaq'] = 'S�k�a Sorulan Sorular';
	$lang['strviewfaq_url'] = 'http://phppgadmin.sourceforge.net/?page=faq';
	
	// Basic strings
	$lang['strlogin']  =  'Giri�';
	$lang['strloginfailed'] = 'Giri� Ba�ar�s�z';
	$lang['strlogindisallowed']  =  'G�venlik nedeniyle giri�e izin verilmedi.';
	$lang['strserver'] = 'Sunucu';
	$lang['strservers']  =  'Sunucular';
	$lang['strintroduction']  =  'Giri�';
	$lang['strhost']  =  'Sunucu';
	$lang['strport']  =  'Port';
	$lang['strlogout'] = '��k��';
	$lang['strowner'] = 'Sahibi';
	$lang['straction'] = 'Eylem';
	$lang['stractions'] = 'Eylemler';
	$lang['strname'] = 'Ad';
	$lang['strdefinition'] = 'Tan�m';
	$lang['strproperties'] = '�zellikler';
	$lang['strbrowse'] = 'G�zat';
	$lang['strdrop'] = 'Sil';
	$lang['strdropped'] = 'Silindi';
	$lang['strnull'] = 'Null';
	$lang['strnotnull'] = 'Null/Null de�il';
	$lang['strprev'] = '�nceki';
	$lang['strnext'] = 'Sonraki';
	$lang['strfirst'] = '<< �lk';
	$lang['strlast'] = 'Son >>';
	$lang['strfailed']  =  'Ba�ar�s�z oldu.';
	$lang['strcreate']  =  'Yarat';
	$lang['strcreated'] = 'Yarat�ld�';
	$lang['strcomment'] = 'Yorum';
	$lang['strlength'] = 'Uzunluk';
	$lang['strdefault'] = '�n tan�ml� de�er';
	$lang['stralter'] = 'De�i�tir';
	$lang['strok'] = 'Tamam';
	$lang['strcancel'] = '�ptal Et';
	$lang['strsave'] = 'Kaydet';
	$lang['strreset'] = 'Temizle';
	$lang['strinsert'] = 'Ekle';
	$lang['strselect'] = 'Se�';
	$lang['strdelete'] = 'Sil';
	$lang['strupdate'] = 'G�ncelle';
	$lang['strreferences'] = 'References';
	$lang['stryes'] = 'Evet';
	$lang['strno'] = 'Hay�r';
	$lang['strtrue']  =  'TRUE';
	$lang['strfalse']  =  'FALSE';
	$lang['stredit'] = 'D�zenle';
	$lang['strcolumn']  =  'KolonF';
	$lang['strcolumns'] = 'Kolonlar';
	$lang['strrows'] = 'sat�r';
	$lang['strrowsaff']  =  'sat�r i�lendi.';
	$lang['strobjects']  =  'nesne(ler)';
	$lang['strback'] = 'Geri';
	$lang['strqueryresults'] = 'Sorgu sonu�lar�';
	$lang['strshow'] = 'G�ster';
	$lang['strempty'] = 'Bo�alt';
	$lang['strlanguage'] = 'Dil';
	$lang['strencoding'] = 'Karakter kodlamas�';
	$lang['strvalue'] = 'De�er';
	$lang['strunique'] = 'Tekil';
	$lang['strprimary'] = 'Birincil';
	$lang['strexport'] = 'Export';
	$lang['strimport']  =  'Import';
	$lang['strallowednulls']  =  '�zin verilen NULL karakterler';
	$lang['strbackslashn']  =  '\N';
	$lang['strnull']  =  'Null';
	$lang['strnull']  =  'NULL (s�zc�k)';
	$lang['stremptystring']  =  'Bo� metin/alan';
	$lang['strsql'] = 'SQL';
	$lang['stradmin'] = 'Y�netici';
	$lang['strvacuum'] = 'Vacuum';
	$lang['stranalyze'] = 'Analyze';
	$lang['strclusterindex'] = 'Cluster';
	$lang['strclustered']  =  'Cluster edildi mi?';
	$lang['strreindex'] = 'Reindex';
	$lang['strrun'] = '�al��t�r';
	$lang['stradd'] = 'Ekle';
	$lang['strremove']  =  'Kald�r';
	$lang['strevent'] = 'Event';
	$lang['strwhere'] = 'Where';
	$lang['strinstead'] = 'Do Instead';
	$lang['strwhen'] = 'When';
	$lang['strformat'] = 'Format';
	$lang['strdata'] = 'Veri';
	$lang['strconfirm'] = 'Onayla';
	$lang['strexpression'] = '�fade';
	$lang['strellipsis'] = '...';
	$lang['strseparator']  =  ': ';
	$lang['strexpand'] = 'Geni�let';
	$lang['strcollapse']  =  'Dar g�r�n�m';
	$lang['strexplain'] = 'Explain';
	$lang['strexplainanalyze']  =  'Explain Analyze';
	$lang['strfind'] = 'Bul';
	$lang['stroptions'] = 'Se�enekler';
	$lang['strrefresh'] = 'Yenile';
	$lang['strdownload'] = '�ndir';
	$lang['strdownloadgzipped']  =  'gzip ile s�k��t�r�lm�� halde indir';
	$lang['strinfo']  =  'Bilgi';
	$lang['stroids']  =  'OIDler';
	$lang['stradvanced']  =  'Geli�mi�';
	$lang['strvariables']  =  'De�i�kenler';
	$lang['strprocess']  =  'S�re�';
	$lang['strprocesses']  =  'S�re�ler';
	$lang['strsetting']  =  'Ayar';
	$lang['streditsql']  =  'SQL D�zenle';
	$lang['strruntime']  =  'Toplam �al��ma s�resi: %s ms';
	$lang['strpaginate']  =  'Sonu�lar� sayfaland�r.';
	$lang['struploadscript']  =  'ya da bir SQL beti�i y�kleyin:';
	$lang['strstarttime']  =  'Ba�lang�� zaman�';
	$lang['strfile']  =  'Dosya';
	$lang['strfileimported']  =  'Dosya import edildi.';
	$lang['strtrycred']  =  'Giri� bilgilerini t�m sunucular i�in kullan';

	// Error handling
	$lang['strnoframes']  =  'Bu uygulama en iyi olarak frame destekli bir taray�c� ile kullan�labilir; ancak frameler ile kullanmak istemiyorsan�z a�a��daki linke t�klayabilirsiniz.';
	$lang['strnoframeslink']  =  'Frame olmadan kullan';
	$lang['strbadconfig'] = 'config.inc.php dosyaniz g�ncel de�il. Bu dosyay� yeni config.inc.php-dist dosyas�ndan yaratman�z gerekmektedir.';
	$lang['strnotloaded'] = 'PHP kurulumunuzda PostgreSQL deste�i bulunamam��t�r.';
        $lang['strpostgresqlversionnotsupported'] = 'Bu PostgreSQL s�r�m� desteklenmemektedir. L�tfen %s ya da �st� bir s�r�me g�ncelleyiniz.';
	$lang['strbadschema'] = 'Ge�ersiz �ema.';
	$lang['strbadencoding'] = '�stemci dil kodlamas�n� ayarlamaya �al���rken bir hata olu�tu.';
	$lang['strsqlerror'] = 'SQL hatas�:';
	$lang['strinstatement'] = '�stteki hata, a�a��daki ifade i�inde olu�tu:';
	$lang['strinvalidparam'] = 'Ge�ersiz betik parametreleri.';
	$lang['strnodata'] = 'Sat�r bulunamad�.';
	$lang['strnoobjects']  =  'Hi�bir nesne bulunamad�..';
	$lang['strrownotunique']  =  'Bu sat�r i�in hi�bir tekil belirtici bulunamad�.';
	$lang['strnoreportsdb']  =  'reports veritaban� yarat��mam��. Y�nergeler i�in l�tfen INSTALL dosyas�n� okuyunuz.';
	$lang['strnouploads']  =  'Dosya y�kleme �zelli�i etkin de�il.';
	$lang['strimporterror']  =  'Import hatas�.';
	$lang['strimporterror-fileformat']  =  'Import hatas�: Dosya tipi otomatik olarak belirlenemedi.';
	$lang['strimporterrorline']  =  '%s numaral� sat�rda import hatas�.';
$lang['strimporterrorline-badcolumnnum']  =  'Import error on line %s:  Line does not possess the correct number of columns.';
$lang['strimporterror-uploadedfile']  =  'Import error: File could not be uploaded to the server';
$lang['strcannotdumponwindows']  =  'Dumping of complex table and schema names on Windows is not supported.';

	// Tables
	$lang['strtable'] = 'Tablo';
	$lang['strtables'] = 'Tablolar';
	$lang['strshowalltables'] = 'T�m tablolar� g�ster';
	$lang['strnotables'] = 'Veritaban�nda tablo bulunamad�.';
	$lang['strnotable'] = 'Veritaban�nda tablo bulunamad�.';
	$lang['strcreatetable'] = 'Yeni tablo yarat';
	$lang['strtablename'] = 'Tablo ad�';
	$lang['strtableneedsname'] = 'Tablonuza bir ad vermeniz gerekmektedir.';
	$lang['strtableneedsfield'] = 'En az bir alan belirtmeniz gerekmektedir.';
	$lang['strtableneedscols'] = 'Ge�erli miktarda kolon say�s� belirtmeniz gerekmektedir.';
	$lang['strtablecreated'] = 'Tablo yarat�ld�.';
	$lang['strtablecreatedbad'] = 'Tablo yarat�lamad�.';
	$lang['strconfdroptable'] = '"%s" tablosunu kald�rmak istedi�inizden emin misiniz?';
	$lang['strtabledropped'] = 'Tablo kald�r�ld�.';
	$lang['strtabledroppedbad'] = 'Tablo kald�r�lamad�.';
	$lang['strconfemptytable'] = '"%s" tablosunu bo�altmak istedi�inizden emin misiniz?';
	$lang['strtableemptied'] = 'Tablo bo�alt�ld�.';
	$lang['strtableemptiedbad'] = 'Tablo bo�alt�lamad�.';
	$lang['strinsertrow'] = 'Yeni kay�t gir';
	$lang['strrowinserted'] = 'Yeni kay�t girildi.';
	$lang['strrowinsertedbad'] = 'Yeni kay�t girme i�lemi ba�ar�s�z oldu.';
	$lang['strrowduplicate']  =  'Sat�r ekleme ba�ar�s�z oldu, birbirinin ayn� iki kay�t girilmek istendi.';
	$lang['streditrow'] = 'Kay�d�n i�eri�ini de�i�tir.';
	$lang['strrowupdated'] = 'Kay�t g�ncellendi.';
	$lang['strrowupdatedbad'] = 'Kay�t g�ncelleme i�leme ba�ar�s�z oldu.';
	$lang['strdeleterow'] = 'Kayd� sil';
	$lang['strconfdeleterow'] = 'Bu kayd� silmek istedi�inize emin misiniz?';
	$lang['strrowdeleted'] = 'Kay�t silindi.';
	$lang['strrowdeletedbad'] = 'Kay�t silinme i�lemi ba�ar�s�z oldu.';
        $lang['strinsertandrepeat'] = 'Ekle ve Tekrarla';
        $lang['strnumcols'] = 'Kolon say�s�';
        $lang['strcolneedsname'] = 'Kolon i�in bir ad vermelisiniz.';
	$lang['strselectallfields']  =  'T�m alanlar� se�';
	$lang['strselectneedscol'] = 'En az bir kolon i�aretlemelisiniz';
	$lang['strselectunary']  =  'Unary operat�rlerin de�eri olamaz.';
	$lang['straltercolumn'] = 'Kolonu de�i�tir (alter)';
	$lang['strcolumnaltered'] = 'Kolon de�i�tirildi (alter)';
	$lang['strcolumnalteredbad'] = 'Kolon de�i�tirilme i�lemi ba�ar�s�z oldu.';
	$lang['strconfdropcolumn']  =  '"%s" kolonunu "%s" tablosundan silmek istedi�inize emin misiniz?';
	$lang['strcolumndropped'] = 'Kolon silindi.';
	$lang['strcolumndroppedbad'] = 'Kolon silme i�lemi ba�ar�s�z oldu.';
	$lang['straddcolumn'] = 'Yeni kolon ekle';
	$lang['strcolumnadded'] = 'Kolon eklendi.';
	$lang['strcolumnaddedbad'] = 'Kolon eklenemedi.';
	$lang['strcascade']  =  'CASCADE';
	$lang['strtablealtered'] = 'Tablo alter edildi..';
	$lang['strtablealteredbad'] = 'Tablo alteration i�lemi ba�ar�s�z oldu.';
	$lang['strdataonly']  =  'Sadece veri';
	$lang['strstructureonly']  =  'Sadece yap�';
	$lang['strstructureanddata']  =  'Yap� ve veri';
	$lang['strtabbed']  =  'Tabbed';
	$lang['strauto']  =  'Otomatik';
	$lang['strconfvacuumtable'] = '"%s" tablosunu vakumlamak istedi�iniz emin misiniz?';
        $lang['strestimatedrowcount'] = 'Yakla��k sat�r say�s�';

	// Users
	$lang['struser'] = 'Kullan�c�';
	$lang['strusers'] = 'Kullan�c�lar';
	$lang['strusername'] = 'Kullan�c� Ad�';
	$lang['strpassword'] = '�ifresi';
	$lang['strsuper'] = 'Superuser m�?';
	$lang['strcreatedb'] = 'Veritaban� yaratabilsin mi?';
	$lang['strexpires'] = 'Expires';
	$lang['strsessiondefaults']  =  'Oturum varsay�lanlar�';
	$lang['strnousers']  =  'Hi�bir kullan�c� bulunamad�.';
        $lang['struserupdated'] = 'Kullan�c� g�ncellendi.';
	$lang['struserupdatedbad'] = 'Kullan�c� g�ncelleme i�lemi ba�ar�s�z oldu.';
	$lang['strshowallusers'] = 'T�m kullan�c�lar� g�ster.';
	$lang['strcreateuser'] = 'Yeni kullan�c� yarat';
	$lang['struserneedsname']  =  'Kullan�c�n�z i�in bir ad vermelisiniz.';
	$lang['strusercreated'] = 'Kullan�c� yarat�ld�.';
	$lang['strusercreatedbad'] = 'Kullan�c� yarat�lma i�lemi ba�ar�s�z oldu.';
	$lang['strconfdropuser'] = '"%s" kullan�c�s�n� silmek istedi�inize emin misiniz?';
	$lang['struserdropped'] = 'Kullan�c� silindi.';
	$lang['struserdroppedbad'] = 'Kullan�c� silme i�lemi ba�ar�s�z oldu.';
	$lang['straccount'] = 'Hesap';
	$lang['strchangepassword'] = '�ifre De�i�tir';
	$lang['strpasswordchanged'] = '�ifre de�i�tirildi.';
	$lang['strpasswordchangedbad'] = '�ifre de�i�tirme ba�ar�s�z oldu.';
	$lang['strpasswordshort']  =  '�ifre �ok k�sa.';
	$lang['strpasswordconfirm'] = '�ifreler uyu�mad�.';
	
	// Groups
	$lang['strgroup'] = 'Grup';
	$lang['strgroups'] = 'Gruplar';
	$lang['strnogroup'] = 'Grup bulunamad�.';
	$lang['strnogroups'] = 'Grup bulunamad�.';
	$lang['strcreategroup'] = 'Yeni grup yarat';
	$lang['strshowallgroups'] = 'T�m gruplar� g�ster';
	$lang['strgroupneedsname'] = 'Grup yaratabilmek i�in bir ad vermelisiniz.';
	$lang['strgroupcreated'] = 'Grup yarat�ld�.';
	$lang['strgroupcreatedbad'] = 'Grup yaratma i�lemi ba�ar�s�z oldu.';	
	$lang['strconfdropgroup'] = '"%s" grubunu silmek istedi�inize emin misiniz?';
	$lang['strgroupdropped'] = 'Grup silindi.';
	$lang['strgroupdroppedbad'] = 'Grup silme i�lemi ba�ar�s�z oldu.';
	$lang['strmembers'] = '�yeler';
	$lang['straddmember'] = '�ye ekle';
	$lang['strmemberadded'] = '�ye eklendi.';
	$lang['strmemberaddedbad'] = '�ye ekleme ba�ar�s�z oldu.';
	$lang['strdropmember'] = '�yeyi kald�r';
	$lang['strconfdropmember'] = '"%s" �yesini "%s" grubundan silmek istedi�inize emin misiniz?';
	$lang['strmemberdropped'] = '�ye silindi.';
	$lang['strmemberdroppedbad'] = '�ye silme ba�ar�s�z oldu.';

	// Privilges
	$lang['strprivilege'] = '�zni';
	$lang['strprivileges'] = '�zinler';
	$lang['strnoprivileges'] = 'Bu nesnenin bir izni yoktur.';
	$lang['strgrant'] = '�zni ver';
	$lang['strrevoke'] = '�zni kald�r';
	$lang['strgranted'] = '�zimler verildi.';
	$lang['strgrantfailed'] = '�zinlerin grant i�lemi ba�ar�s�z oldu.';

	$lang['strgrantbad'] = 'En az bir kullan�c� ya da grup ve en az bir izin belirtmelisiniz.';
	$lang['strgrantor'] = 'Grantor';
	$lang['strasterisk'] = '*';

	// Databases
	$lang['strdatabase'] = 'Veritaban�';
	$lang['strdatabases'] = 'Veritabanlar�';
	$lang['strshowalldatabases'] = 'T�m veritabanlar�n� g�ster';
	$lang['strnodatabase'] = 'Veritaban� bulunamad�.';
	$lang['strnodatabases'] = 'Veritaban� bulunamad�.';
	$lang['strcreatedatabase'] = 'Veritaban� yarat';
	$lang['strdatabasename'] = 'Veritaban� ad�';
	$lang['strdatabaseneedsname'] = 'Veritaban�n�za bir ad vermelisiniz.';
	$lang['strdatabasecreated'] = 'Veritaban� yarat�ld�.';
	$lang['strdatabasecreatedbad'] = 'Veritaban� yarat�lamad�.';	
	$lang['strconfdropdatabase'] = '"%s" veritaban�n� kald�rmak istedi�inize emin misiniz?';
	$lang['strdatabasedropped'] = 'Veritaban� kald�r�ld�.';
	$lang['strdatabasedroppedbad'] = 'Veritaban� kald�rma ba�ar�s�z oldu.';
	$lang['strentersql'] = 'Veritaban� �zerinde �al��t�r�lacak sorgu/sorgular� a�a��ya yaz�n�z:';
	$lang['strsqlexecuted'] = 'SQL �al��t�r�ld�.';
	$lang['strvacuumgood']  =  'Vacuum tamamland�.';
	$lang['strvacuumbad'] = 'Vacuum i�lemi ba�ar�s�z oldu.';
	$lang['stranalyzegood'] = 'Analyze i�lemi tamamland�.';
	$lang['stranalyzebad'] = 'Analyze i�lemi ba�ar�s�z oldu.';
	$lang['strreindexgood']  =  'Reindex tamamland�.';
	$lang['strreindexbad']  =  'Reindex ba�ar�s�z oldu.';
	$lang['strfull']  =  'Full';
	$lang['strfreeze']  =  'Freeze';
	$lang['strforce']  =  'Force';
	$lang['strsignalsent'] = 'Sinyal g�nderildi.';
        $lang['strsignalsentbad'] = 'Sinyal g�nderme i�lemi ba�ar�s�z oldu';
        $lang['strallobjects'] = 'T�m nesneler';
	$lang['strdatabasealtered']  =  'Veritaban� de�i�tirildi.';
	$lang['strdatabasealteredbad']  =  'Veritaban� de�i�tirme ba�ar�s�z oldu.';

	// Views
	$lang['strview'] = 'View';
	$lang['strviews'] = 'Viewlar';
	$lang['strshowallviews'] = 'T�m viewlar� g�ster';
	$lang['strnoview'] = 'Bir view bulunamad�.';
	$lang['strnoviews'] = 'Bir view bulunamad�.';
	$lang['strcreateview'] = 'View yarat';
	$lang['strviewname'] = 'View ad�';
	$lang['strviewneedsname'] = 'View i�in bir ad belirtmelisiniz.';
	$lang['strviewneedsdef'] = 'View i�in bir tan�m belirtmelisiniz.';
	$lang['strviewneedsfields']  =  'View i�inde g�r�nmesini istedi�iniz kolonlar� belirtmelisiniz.';
 	$lang['strviewcreated'] = 'View yarat�ld�.';
	$lang['strviewcreatedbad'] = 'View yaratma i�lemi ba�ar�s�z oldu.';
	$lang['strconfdropview'] = '"%s" viewini kald�rmak istedi�inize emin misiniz?';
	$lang['strviewdropped'] = 'View kald�r�ld�.';
	$lang['strviewdroppedbad'] = 'View kald�rma i�lemi ba�ar�s�z oldu.';
	$lang['strviewupdated'] = 'View g�ncellendi.';
	$lang['strviewupdatedbad'] = 'View g�ncelleme i�lemi ba�ar�s�z oldu.';
	$lang['strviewlink']  =  'Linking Keys';
	$lang['strviewconditions']  =  'Ek durumlar';
	$lang['strcreateviewwiz']  =  'Sihirbaz ile view yarat�n';

	// Sequences
	$lang['strsequence'] = 'Sequence';
	$lang['strsequences'] = 'Sequences';
	$lang['strshowallsequences'] = 'Show all sequences';
	$lang['strnosequence'] = 'No sequence found.';
	$lang['strnosequences'] = 'No sequences found.';
	$lang['strcreatesequence'] = 'Create sequence';
	$lang['strlastvalue'] = 'Son de�er';
	$lang['strincrementby'] = 'Artt�rma de�eri';	
	$lang['strstartvalue'] = 'Ba�lang�� De�eri';
	$lang['strmaxvalue'] = 'Max De�er';
	$lang['strminvalue'] = 'Min De�er';
	$lang['strcachevalue'] = 'Cache De�eri';
	$lang['strlogcount'] = 'Log Count';
	$lang['striscycled'] = 'Is Cycled?';
	$lang['strsequenceneedsname'] = 'Sequence i�in bir ad belirtmelisiniz.';
	$lang['strsequencecreated'] = 'Sequence yarat�ld�.';
	$lang['strsequencecreatedbad'] = 'Sequence yaratma i�lemi ba�ar�s�z oldu.'; 
	$lang['strconfdropsequence'] = '"%s" sequence ini kald�rmak istedi�inize emin misiniz?';
	$lang['strsequencedropped'] = 'Sequence kald�r�ld�.';
	$lang['strsequencedroppedbad'] = 'Sequence kald�rma i�lemi ba�ar�s�z oldu.';
	$lang['strsequencereset'] = 'Sequence s�f�rland�.';
	$lang['strsequenceresetbad'] = 'Sequence s�f�rlama ba�ar�s�z oldu.';

	// Indexes
	$lang['strindex']  =  'Index';
	$lang['strindexes'] = 'Indeksler';
	$lang['strindexname'] = 'Indeks ad�';
	$lang['strshowallindexes'] = 'T�m indeksleri g�ster';
	$lang['strnoindex'] = 'Hi�bir indeks bulunamad�.';
	$lang['strnoindexes'] = 'Hi�bir indeks bulunamad�.';
	$lang['strcreateindex'] = 'Indeks yarat';
	$lang['strtabname'] = 'Tab Ad�';
	$lang['strcolumnname'] = 'Kolon ad�';
	$lang['strindexneedsname'] = 'Indeksinize bir ad vermeniz gerekmektedir.';
	$lang['strindexneedscols'] = 'Ge�erli kol�n say�s� vermeniz gerekmektedir.';
	$lang['strindexcreated'] = 'Indeks yarat�ld�.';
	$lang['strindexcreatedbad'] = 'Index creation failed.';
	$lang['strconfdropindex'] = '"%s" indeksini kald�rmak istedi�inize emin misiniz?';
	$lang['strindexdropped'] = 'Indeks kald�r�ld�.';
	$lang['strindexdroppedbad'] = 'Indeks kald�r�lamad�.';
	$lang['strkeyname'] = 'Anahtar ad�';
	$lang['struniquekey'] = 'Tekil (Unique) Anahtar';
	$lang['strprimarykey'] = 'Birincil Anahtar (Primary Key)';
 	$lang['strindextype'] = 'Indeksin tipi';
	$lang['strtablecolumnlist'] = 'Tablodaki kolonlar';
	$lang['strindexcolumnlist'] = 'Indeksteki kolonlar';
	$lang['strconfcluster']  =  '"%s" tablosunu cluster etmek istiyor musunuz?';
	$lang['strclusteredgood']  =  'Cluster tamamland�.';
	$lang['strclusteredbad']  =  'Cluster ba�ar�s�z oldu.';

	// Rules
	$lang['strrules'] = 'Rules';
	$lang['strrule'] = 'Rule';
	$lang['strshowallrules'] = 'Show all Rules';
	$lang['strnorule'] = 'Rule bulunamad�.';
	$lang['strnorules'] = 'Rule bulunamad�.';
	$lang['strcreaterule'] = 'Rule yarat';
	$lang['strrulename'] = 'Rule ad�';
	$lang['strruleneedsname'] = 'Rule i�in bir ad belirtmelisiniz.';
	$lang['strrulecreated'] = 'Rule yarat�ld�.';
	$lang['strrulecreatedbad'] = 'Rule yaratma i�lemi ba�ar�s�z oldu.';
	$lang['strconfdroprule'] = '"%s" kural�n� "%s" tablosundan silmek istedi�inize emin misiniz?';
	$lang['strruledropped'] = 'Rule silindi';
	$lang['strruledroppedbad'] = 'Rule silinme i�lemi ba�ar�s�z oldu.';

	// Constraints
	$lang['strconstraint']  =  'K�s�tlama';
	$lang['strconstraints'] = 'K�s�tlamalar';
	$lang['strshowallconstraints'] = 'T�m k�s�tlamalar� (constraint) g�ster.';
	$lang['strnoconstraints'] = 'Hi�bir k�s�tlama (constraint) bulunamad�.';
	$lang['strcreateconstraint'] = 'K�s�tlama (Constraint) yarat';
	$lang['strconstraintcreated'] = 'K�s�tlama (Constraint) yarat�ld�.';
	$lang['strconstraintcreatedbad'] = 'K�s�tlama (Constraint) yaratma i�lemi ba�ar�s�z oldu.';
	$lang['strconfdropconstraint'] = '"%s" �zerindeki "%s" k�s�tlamas�n� (constraint) kald�rmak istiyor musunuz?';
	$lang['strconstraintdropped'] = 'K�s�tlama (Constraint) kald�r�ld�';
	$lang['strconstraintdroppedbad'] = 'K�s�tlama (Constraint) i�lemi ba�ar�s�z oldu.';
	$lang['straddcheck'] = 'Kontrol (Check) ekle';
	$lang['strcheckneedsdefinition'] = 'Kontrol (Check) k�s�tlamas� (constraint) i�in bir tan�m girilmelidir.';
	$lang['strcheckadded'] = 'Kontrol k�s�tlamas� (Check constraint) eklendi.';
	$lang['strcheckaddedbad'] = 'Kontrol k�s�tlamas� (Check constraint) ekleme i�lemi ba�ar�s�z oldu.';
	$lang['straddpk'] = 'Birincil Anahtar Ekle';
	$lang['strpkneedscols'] = 'Birincil anahtar i�in en az bir kolon gereklidir.';
	$lang['strpkadded'] = 'Birincil anahtar eklendi.';
	$lang['strpkaddedbad'] = 'Birincil anahtar eklenemedi.';
	$lang['stradduniq'] = 'Tekil (Unique) anahtar ekle';
	$lang['struniqneedscols'] = 'Tekil anahtar yaratmak i�in en az bir kolon gerekir.';
	$lang['struniqadded'] = 'Tekil anahtar eklendi.';
	$lang['struniqaddedbad'] = 'Tekil anahtar eklenemedi.';
	$lang['straddfk'] = '�kincil anahtar ekle';
	$lang['strfkneedscols'] = '�kincil anahtar yaratmak i�in en az bir kolon gerekir.';
	$lang['strfkneedstarget'] = '�kincil anahtar hedef bir tablo gerektirir.';
	$lang['strfkadded']  =  '�kincil anahtar eklendi.';
	$lang['strfkaddedbad'] = '�kincil anahtar eklenemedi.';
	$lang['strfktarget'] = 'Hedef tablo';

	$lang['strfkcolumnlist'] = 'Anahtardaki kolonlar';
	$lang['strondelete'] = 'ON DELETE';
	$lang['stronupdate'] = 'ON UPDATE';
	// Functions
	$lang['strfunction'] = 'Fonksiyon';
	$lang['strfunctions'] = 'Fonksiyonlar';
	$lang['strshowallfunctions'] = 'T�m fonksiyonlar� g�ster';
	$lang['strnofunction'] = 'Fonksiyon bulunamad�.';
	$lang['strnofunctions'] = 'Fonksiyon bulunamad�.';
	$lang['strcreateplfunction'] = 'SQL/PL fonksiyonu yarat';
        $lang['strcreateinternalfunction'] = '�� (internal) fonksiyon yarat';
        $lang['strcreatecfunction'] = 'C fonksiyonu yarat';
	$lang['strfunctionname'] = 'Fonksiyon ad�';
	$lang['strreturns'] = 'D�nderilen de�er';
	$lang['strarguments'] = 'Arg�manlar';
	$lang['strproglanguage'] = 'Dil';
	$lang['strfunctionneedsname'] = 'Fonksiyona bir ad vermelisiniz.';
	$lang['strfunctionneedsdef'] = 'Fonksiyona bir tan�m vermelisiniz.';
	$lang['strfunctioncreated'] = 'Fonksiyon yarat�ld�.';
	$lang['strfunctioncreatedbad'] = 'Fonksiyon yaratma i�lemi ba�ar�s�z oldu.';
	$lang['strconfdropfunction'] = '"%s" fonksiyonunu kald�rmak istedi�inize emin misiniz?';
	$lang['strfunctiondropped'] = 'Fonksiyon kald�r�ld�.';
	$lang['strfunctiondroppedbad'] = 'Fonksiyon kald�rma i�lemi ba�ar�s�z oldu.';
	$lang['strfunctionupdated'] = 'Fonksiyon g�ncellendi.';
	$lang['strfunctionupdatedbad'] = 'Function g�ncelleme i�lemi ba�ar�s�z oldu.';
	$lang['strobjectfile'] = 'Nesne dosyas�';
        $lang['strlinksymbol'] = 'Ba�lant� sembol�';

	// Triggers
	$lang['strtrigger'] = 'Trigger';
	$lang['strtriggers'] = 'Triggerlar';
	$lang['strshowalltriggers'] = 'T�m triggerlar� g�ster';
	$lang['strnotrigger'] = 'Trigger bulunamad�.';
	$lang['strnotriggers'] = 'Trigger bulunamad�.';
	$lang['strcreatetrigger'] = 'Yeni trigger yarat';
	$lang['strtriggerneedsname'] = 'Trigger i�in bir ad belirtmelisiniz.';
	$lang['strtriggerneedsfunc'] = 'Trigger i�in bir fonksiyon belirtmelisiniz.';
	$lang['strtriggercreated'] = 'Trigger yarat�ld�.';
	$lang['strtriggercreatedbad'] = 'Trigger yarat�lamad�.';
	$lang['strconfdroptrigger'] = '"%s" triggerini "%s" tablosundan kald�rmak istedi�inize emin misiniz?';
	$lang['strtriggerdropped'] = 'Trigger silindi.';
	$lang['strtriggerdroppedbad'] = 'Trigger silinme i�lemi ba�ar�s�z oldu.';
	$lang['strtriggeraltered']  =  'Trigger de�i�tirildi.';
	$lang['strtriggeralteredbad']  =  'Trigger de�i�tirilme i�lemi ba�ar�s�z oldu.';
	$lang['strforeach']  =  'Her bir';

	// Types
	$lang['strtype'] = 'Veri tipi';
	$lang['strtypes'] = 'Veri tipleri';
	$lang['strshowalltypes'] = 'T�m veri tiplerini g�ster';
	$lang['strnotype'] = 'Hi� veri tipi bulunamad�.';
	$lang['strnotypes'] = 'Hi� veri tipi bulunamad�.';
	$lang['strcreatetype'] = 'Yeni veri tipi yarat';
        $lang['strcreatecomptype'] = 'Karma��k veri tipi yarat';
        $lang['strtypeneedsfield'] = 'En az bir alan belirtmelisiniz.';
        $lang['strtypeneedscols'] = 'Ge�erli bir alan say�s� belirtmelisiniz.';
	$lang['strtypename'] = 'Veri tipi ad�';
	$lang['strinputfn'] = 'Giri� (Input) fonksiyonu';
	$lang['stroutputfn'] = '��k�� (Output) fonksiyonu';
	$lang['strpassbyval'] = 'Passed by val?';
	$lang['stralignment'] = 'Alignment';
	$lang['strelement'] = 'Eleman';
	$lang['strdelimiter'] = 'Delimiter';
	$lang['strstorage'] = 'Storage';
	$lang['strfield']  =  'Alan';
	$lang['strnumfields']  =  'Alanlar�n say�s�';

	$lang['strtypeneedsname'] = 'Veri tipi i�in bir ad vermelisiniz.';
	$lang['strtypeneedslen'] = 'Veri tipiniz i�in bir uzunluk belirtmelisiniz.';
	$lang['strtypecreated'] = 'Veri tipi yarat�ld�';
	$lang['strtypecreatedbad'] = 'Veri tipi yarat�lamad�.';
	$lang['strconfdroptype'] = '"%s" veri tipini kald�rmak istedi�inize emin misiniz?';
	$lang['strtypedropped'] = 'Veri tipi kald�r�ld�.';
	$lang['strtypedroppedbad'] = 'Veri tipi kald�r�lamad�.';
        $lang['strflavor'] = 'Flavor';
        $lang['strbasetype'] = 'Base';
        $lang['strcompositetype'] = 'Composite';
        $lang['strpseudotype'] = 'Pseudo';

	// Schemas
	$lang['strschema'] = '�ema';
	$lang['strschemas'] = '�emalar';
	$lang['strshowallschemas'] = 'T�m �emalar� g�ster';
	$lang['strnoschema'] = 'Bir �ema bulunamad�.';
	$lang['strnoschemas'] = 'Bir �ema bulunamad�.';
	$lang['strcreateschema'] = '�ema yarat';
	$lang['strschemaname'] = '�ema ad�';
	$lang['strschemaneedsname'] = '�ema i�in bir ad belirtmelisiniz.';
	$lang['strschemacreated'] = '�ema yarat�ld�';
	$lang['strschemacreatedbad'] = '�ema yaratma i�lemi ba�ar�s�z oldu';
	$lang['strconfdropschema'] = '"%s" �emas�n� kald�rmak istedi�inize emin misiniz?';
	$lang['strschemadropped'] = '�ema kald�r�ld�.';
	$lang['strschemadroppedbad'] = '�ema kald�rma i�lemi ba�ar�s�z oldu.';
	$lang['strschemaaltered']  =  'Schema de�i�tirildi.';
	$lang['strschemaalteredbad']  =  'Schema de�i�tirilme i�lemi ba�ar�s�z oldu.';
	$lang['strsearchpath'] = '�ema arama yolu';

	// Reports
	$lang['strreport'] = 'Rapor';
	$lang['strreports'] = 'Raporlar';
	$lang['strshowallreports'] = 'T�m raporlar� g�ster';
	$lang['strnoreports'] = 'Hi�bir rapor bulunamad�';
	$lang['strcreatereport'] = 'Rapor yarat�ld�.';
	$lang['strreportdropped'] = 'Rapor silindi';
	$lang['strreportdroppedbad'] = 'Rapor silme i�i ba�ar�s�z oldu.';
	$lang['strconfdropreport'] = '"%s" raporunu silmek istedi�inize emin misiniz?';
	$lang['strreportneedsname'] = 'Raporunuza bir ad vermelisiniz.';
	$lang['strreportneedsdef'] = 'Raporunuz i�in SQL sorgular� yazmal�s�n�z.';
	$lang['strreportcreated'] = 'Rapor kaydedildi.';
	$lang['strreportcreatedbad'] = 'Rapor kaydetme ba�ar�s�z oldu.';
	$lang['strdomain'] = 'Domain';
	$lang['strdomains'] = 'Domainler';
	$lang['strshowalldomains'] = 'T�m domainleri g�ster.';
	$lang['strnodomains'] = 'Hi�bir domain bulunamad�.';
	$lang['strcreatedomain'] = 'Domain yarat';
	$lang['strdomaindropped'] = 'Domain silindi.';
	$lang['strdomaindroppedbad'] = 'Domain silme ba�ar�s�z oldu.';
	$lang['strconfdropdomain'] = '"%s" domain\'ini silmek istedi�inize emin misiniz??';
	$lang['strdomainneedsname'] = 'Domain i�in bir ad vermelisiniz.';
	$lang['strdomaincreated'] = 'Domain yarat�ld�.';
	$lang['strdomaincreatedbad'] = 'Domain yaratma ba�ar�s�z oldu.';
	$lang['strdomainaltered'] = 'Domain alter edildi.';
	$lang['strdomainalteredbad'] = 'Domain alter i�lemi ba�ar�s�z oldu.';

	$lang['stroperator'] = 'Operat�r';
	$lang['stroperators']  =  'Operat�rler';
	$lang['strshowalloperators'] = 'T�m operat�rleri g�ster';
	$lang['strnooperator'] = 'Operat�r bulunamad�.';
	$lang['strnooperators'] = 'Operat�r bulunamad�.';
	$lang['strcreateoperator'] = 'Operat�r yarat�ld�.';
	$lang['strleftarg'] = 'Sol Arg Tipi';
	$lang['strrightarg'] = 'Sa� Arg Tipi';
	$lang['strcommutator'] = 'Commutator';
	$lang['strnegator'] = 'Negator';
	$lang['strrestrict'] = 'Restrict';
	$lang['strjoin'] = 'Join';
	$lang['strhashes'] = 'Hashes';
	$lang['strmerges'] = 'Merges';
	$lang['strleftsort'] = 'Left sort';
	$lang['strrightsort'] = 'Right sort';
	$lang['strlessthan'] = 'k���kt�r';
	$lang['strgreaterthan'] = 'b�y�kt�r';
	$lang['stroperatorneedsname']  =  'Operat�re bir ad vermelisiniz.';
	$lang['stroperatorcreated']  =  'Operat�r yarat�ld�';
	$lang['stroperatorcreatedbad']  =  'Operat�r yaratma i�lemi ba�ar�s�z oldu.';
	$lang['strconfdropoperator']  =  '"%s" operat�r�n� kald�rmak istedi�inize emin misiniz?';
	$lang['stroperatordropped']  =  'Operat�r kald�r�ld�.';
	$lang['stroperatordroppedbad']  =  'Operator kald�rma i�lemi ba�ar�s�z oldu.';

	// Casts
	$lang['strcasts'] = 'Casts';
	$lang['strnocasts'] = 'Hi� cast bulunamad�.';
	$lang['strsourcetype'] = 'Kaynak tip';
	$lang['strtargettype'] = 'Hedef tip';
	$lang['strimplicit'] = 'Implicit';
	$lang['strinassignment'] = 'In assignment';
	$lang['strbinarycompat'] = '(Binary uyumlu)';
	
	// Conversions
	$lang['strconversions'] = 'D�n���mleri';
	$lang['strnoconversions'] = 'Hi� d�n���m bulunamad�.';
	$lang['strsourceencoding'] = 'Kaynak dil kodlamas�';
	$lang['strtargetencoding'] = 'Hedef dil kodlamas�';
	
	// Languages
	$lang['strlanguages'] = 'Diller';
	$lang['strnolanguages'] = 'Hi� bir dil bulunamad�.';
	$lang['strtrusted'] = 'G�venilir';
	
	// Info
	$lang['strnoinfo'] = 'Hi� bir bilgi yok.';
	$lang['strreferringtables'] = 'Referring tables';
	$lang['strparenttables'] = 'Parent tablolar';
	$lang['strchildtables'] = 'Child tablolar';
	
	// Aggregates
	$lang['straggregates']  =  'Aggregate';
	$lang['strnoaggregates'] = 'Hi� aggregate bulunamad�.';
	$lang['stralltypes'] = '(T�m veri tipleri)';
	$lang['stropclasses'] = 'Op s�n�flar�';
	$lang['strnoopclasses'] = 'Hi� operat�r s�n�f� bulunamad�.';
	$lang['straccessmethod'] = 'Eri�im Y�ntemi';
	$lang['strrowperf'] = 'Sat�r Ba�ar�m�';
	$lang['strioperf'] = 'I/O Ba�ar�m�';
	$lang['stridxrowperf'] = 'Index Sat�r Ba�ar�m�';
	$lang['stridxioperf'] = 'Index I/O Ba�ar�m�';
	$lang['strpercent'] = '%';
	$lang['strsequential'] = 'Sequential';
	$lang['strscan'] = 'Scan';
	$lang['strread'] = 'Read';
	$lang['strfetch'] = 'Fetch';
	$lang['strheap'] = 'Heap';
	$lang['strtoast'] = 'TOAST';
	$lang['strtoastindex'] = 'TOAST Index';
	$lang['strcache'] = 'Cache';
	$lang['strdisk'] = 'Disk';
	$lang['strrows2'] = 'Rows';

	// Tablespaces
	$lang['strtablespace'] = 'Tablespace';
	$lang['strtablespaces'] = 'Tablespaceler';
	$lang['strshowalltablespaces'] = 'T�m tablespaceleri g�ster';
	$lang['strnotablespaces'] = 'Hi� tablespace bulunamad�.';
	$lang['strcreatetablespace'] = 'Tablespace yarat';
	$lang['strlocation'] = 'Yer';
	$lang['strtablespaceneedsname'] = 'Tablespace\'e bir ad vermelisiniz.';
	$lang['strtablespaceneedsloc'] = 'Tablespace\'in yarat�laca�� dizini belirtmelisiniz';
	$lang['strtablespacecreated'] = 'Tablespace yarat�ld�.';
	$lang['strtablespacecreatedbad'] = 'Tablespace yarat�lamad�.';
	$lang['strconfdroptablespace'] = '"%s" adl� tablespace\'i kald�rmak istedi�inize emin misiniz?';
	$lang['strtablespacedropped'] = 'Tablespace kald�r�ld�.';
	$lang['strtablespacedroppedbad'] = 'Tablespace kald�r�lamad�.';
	$lang['strtablespacealtered'] = 'Tablespace de�i�tirildi.';
	$lang['strtablespacealteredbad'] = 'Tablespace de�i�tirilemedi.';

	// Slony clusters
	$lang['strcluster']  =  'K�me';
	$lang['strnoclusters']  =  'Hi� k�me bulunamad�.';
	$lang['strconfdropcluster']  =  '"%s" k�mesini kald�rmak istedi�inize emin misiniz?';
	$lang['strclusterdropped']  =  'K�me kald�r�ld�.';
	$lang['strclusterdroppedbad']  =  'K�me kald�rma i�lemi ba�ar�s�z oldu.';
	$lang['strinitcluster']  =  'K�meyi ilklendir';
	$lang['strclustercreated']  =  'K�me ilklendirildi.';
	$lang['strclustercreatedbad']  =  'K�me ilklendirme ba�ar�s�z oldu.';
	$lang['strclusterneedsname']  =  'K�me i�in bir ad vermelisiniz.';
	$lang['strclusterneedsnodeid']  =  'Yerel u� i�in bir ID vermelisiniz.';
	
	// Slony nodes
	$lang['strnodes']  =  'U�lar';
	$lang['strnonodes']  =  'Hi� u� bulunamad�.';
	$lang['strcreatenode']  =  'U� yarat';
	$lang['strid']  =  'ID';
	$lang['stractive']  =  'Etkin';
	$lang['strnodecreated']  =  'U� yarat�ld�.';
	$lang['strnodecreatedbad']  =  'U� yaratma ba�ar�s�z oldu.';
	$lang['strconfdropnode']  =  '"%s" adl� ucu kald�rmak istedi�inize emin misiniz?';
	$lang['strnodedropped']  =  'U� kald�r�ld�.';
	$lang['strnodedroppedbad']  =  'U� kald�rma ba�ar�s�z oldu.';
	$lang['strfailover']  =  'Failover';
$lang['strnodefailedover']  =  'Node failed over.';
$lang['strnodefailedoverbad']  =  'Node failover failed.';
	
	// Slony paths	
$lang['strpaths']  =  'Paths';
$lang['strnopaths']  =  'No paths found.';
$lang['strcreatepath']  =  'Create path';
	$lang['strnodename']  =  'U� ad�';
$lang['strnodeid']  =  'Node ID';
$lang['strconninfo']  =  'Connection string';
	$lang['strconnretry']  =  'yeniden ba�lanmadan �nce ka� saniye gerekecek';
$lang['strpathneedsconninfo']  =  'You must give a connection string for the path.';
$lang['strpathneedsconnretry']  =  'You must give the number of seconds to wait before retry to connect.';
$lang['strpathcreated']  =  'Path created.';
$lang['strpathcreatedbad']  =  'Path creation failed.';
$lang['strconfdroppath']  =  'Are you sure you want to drop path "%s"?';
$lang['strpathdropped']  =  'Path dropped.';
$lang['strpathdroppedbad']  =  'Path drop failed.';

	// Slony listens
$lang['strlistens']  =  'Listens';
$lang['strnolistens']  =  'No listens found.';
$lang['strcreatelisten']  =  'Create listen';
$lang['strlistencreated']  =  'Listen created.';
$lang['strlistencreatedbad']  =  'Listen creation failed.';
$lang['strconfdroplisten']  =  'Are you sure you want to drop listen "%s"?';
$lang['strlistendropped']  =  'Listen dropped.';
$lang['strlistendroppedbad']  =  'Listen drop failed.';

	// Slony replication sets
	$lang['strrepsets']  =  'Replikasyon k�mesi';
	$lang['strnorepsets']  =  'Hi� replikasyon k�mesi bulunamad�.';
	$lang['strcreaterepset']  =  'Replikasyon k�mesi yarat';
	$lang['strrepsetcreated']  =  'Replikasyon k�mesi yarat�ld�.';
	$lang['strrepsetcreatedbad']  =  'Replikasyon k�mesi yaratma ba�ar�s�z oldu.';
$lang['strconfdroprepset']  =  'Are you sure you want to drop replication set "%s"?';
	$lang['strrepsetdropped']  =  'Replikasyon k�mesi kald�r�ld�.';
	$lang['strrepsetdroppedbad']  =  'Replikasyon k�mesi kald�rma ba�ar�s�z oldu.';
$lang['strmerge']  =  'Merge';
$lang['strmergeinto']  =  'Merge into';
$lang['strrepsetmerged']  =  'Replication sets merged.';
$lang['strrepsetmergedbad']  =  'Replication sets merge failed.';
	$lang['strmove']  =  'Ta��';
$lang['strneworigin']  =  'New origin';
	$lang['strrepsetmoved']  =  'Replikasyon k�mesi ta��nd�.';
	$lang['strrepsetmovedbad']  =  'Replikasyon k�mesi ta��ma ba�ar�s�z oldu.';
	$lang['strnewrepset']  =  'Yeni replikasyon k�mesi';
	$lang['strlock']  =  'Kilitle';
	$lang['strlocked']  =  'Kilitlendi';
	$lang['strunlock']  =  'Kilidi a�';
	$lang['strconflockrepset']  =  '"%s" replikasyon k�mesini kilitlemek istedi�inize emin misiniz?';
	$lang['strrepsetlocked']  =  'Replikasyon k�mesi kilitlendi.';
	$lang['strrepsetlockedbad']  =  'Replikasyon k�mesi kilitleme ba�ar�s�z oldu.';
$lang['strconfunlockrepset']  =  'Are you sure you want to unlock replication set "%s"?';
	$lang['strrepsetunlocked']  =  'Replikasyon k�mesinin kilidi a��ld�.';
$lang['strrepsetunlockedbad']  =  'Replikasyon k�mesi kilit a�ma ba�ar�s�z oldu.';
$lang['strexecute']  =  'Execute';
$lang['stronlyonnode']  =  'Only on node';
	$lang['strddlscript']  =  'DDL beti�i';
$lang['strscriptneedsbody']  =  'You must supply a script to be executed on all nodes.';
$lang['strscriptexecuted']  =  'Replication set DDL script executed.';
$lang['strscriptexecutedbad']  =  'Failed executing replication set DDL script.';
$lang['strtabletriggerstoretain']  =  'The following triggers will NOT be disabled by Slony:';

	// Slony tables in replication sets
	$lang['straddtable']  =  'Tablo ekle';
$lang['strtableneedsuniquekey']  =  'Table to be added requires a primary or unique key.';
$lang['strtableaddedtorepset']  =  'Table added to replication set.';
$lang['strtableaddedtorepsetbad']  =  'Failed adding table to replication set.';
$lang['strconfremovetablefromrepset']  =  'Are you sure you want to remove the table "%s" from replication set "%s"?';
$lang['strtableremovedfromrepset']  =  'Table removed from replication set.';
$lang['strtableremovedfromrepsetbad']  =  'Failed to remove table from replication set.';

	// Slony sequences in replication sets
$lang['straddsequence']  =  'Add sequence';
$lang['strsequenceaddedtorepset']  =  'Sequence added to replication set.';
$lang['strsequenceaddedtorepsetbad']  =  'Failed adding sequence to replication set.';
$lang['strconfremovesequencefromrepset']  =  'Are you sure you want to remove the sequence "%s" from replication set "%s"?';
$lang['strsequenceremovedfromrepset']  =  'Sequence removed from replication set.';
$lang['strsequenceremovedfromrepsetbad']  =  'Failed to remove sequence from replication set.';

	// Slony subscriptions
	$lang['strsubscriptions']  =  '�yelikler';
	$lang['strnosubscriptions']  =  '�yelik bulunamad�.';

	// Miscellaneous
	$lang['strtopbar']  =  '%s, %s:%s �zerinde �al���yor-- "%s" kullan�c�s� ile sisteme giri� yapt�n�z.';
        $lang['strtimefmt']  =  'jS M, Y g:iA';
        $lang['strhelp']  =  'Yard�m';
	$lang['strhelpicon'] = '?';
	$lang['strlogintitle']  =  '%s\'e giri� yap';
	$lang['strlogoutmsg']  =  '%s\'den ��k�ld�.';
	$lang['strloading']  =  'Y�kleniyor...';
	$lang['strerrorloading']  =  'Y�kleme hatas�';
	$lang['strclicktoreload']  =  'Yeniden y�klemek i�in t�klay�n.';

?>

