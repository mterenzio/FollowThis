<?php

	/**
	 * Japanese language file for phpPgAdmin.
	 * @maintainer Tadashi Jokagi [elf2000@users.sourceforge.net]
	 *
	 * $Id: japanese.php,v 1.19 2007/12/27 04:08:35 xzilla Exp $
	 * EN-Revision: 1.228
	 */

	// Language and character set
	$lang['applang'] = '���ܸ�(EUC-JP)';
	$lang['appcharset'] = 'EUC-JP';
	$lang['applocale'] = 'ja_JP';
  	$lang['appdbencoding'] = 'EUC_JP';
	$lang['applangdir'] = 'ltr';
  
	// Welcome  
	$lang['strintro'] = '�褦���� phpPgAdmin �ء�';
	$lang['strppahome'] = 'phpPgAdmin �ۡ���ڡ���';
	$lang['strpgsqlhome'] = 'PostgreSQL �ۡ���ڡ���';
	$lang['strpgsqlhome_url'] = 'http://www.postgresql.org/';
	$lang['strlocaldocs'] = 'PostgreSQL �ɥ������ (������)';
	$lang['strreportbug'] = '�Х���ݡ���';
	$lang['strviewfaq'] = 'FAQ ��ɽ������';
	$lang['strviewfaq_url'] = 'http://phppgadmin.sourceforge.net/?page=faq';
	
	// Basic strings
	$lang['strlogin'] = '������';
	$lang['strloginfailed'] = '������˼��Ԥ��ޤ���';
	$lang['strlogindisallowed'] = '�����󤬵��Ĥ���ޤ���Ǥ�����';
	$lang['strserver'] = '�����С�';
	$lang['strservers'] = '�����С�';
	$lang['strintroduction'] = 'Ƴ��';
	$lang['strhost'] = '�ۥ���';
	$lang['strport'] = '�ݡ���';
	$lang['strlogout'] = '��������';
	$lang['strowner'] = '��ͭ��';
	$lang['straction'] = '���������';
	$lang['stractions'] = '���';
	$lang['strname'] = '̾��';
	$lang['strdefinition'] = '���';
	$lang['strproperties'] = '�ץ�ѥƥ�';
	$lang['strbrowse'] = 'ɽ��';
	$lang['strenable']  =  'ͭ��';
	$lang['strdisable']  =  '̵��';
	$lang['strdrop'] = '�˴�';
	$lang['strdropped'] = '�˴����ޤ�����';
	$lang['strnull'] = 'NULL';
	$lang['strnotnull'] = 'NOT NULL';
	$lang['strprev'] = '����';
	$lang['strnext'] = '����';
	$lang['strfirst'] = '<< �ǽ�';
	$lang['strlast'] = '�Ǹ� >>';
	$lang['strfailed'] = '����';
	$lang['strcreate'] = '����';
	$lang['strcreated'] = '�������ޤ�����';
	$lang['strcomment'] = '������';
	$lang['strlength'] = 'Ĺ��';
	$lang['strdefault'] = '�ǥե����';
	$lang['stralter'] = '�ѹ�';
	$lang['strok'] = 'OK';
	$lang['strcancel'] = '���ä�';
	$lang['strac']  =  '��ư�䴰��ͭ���ˤ���';
	$lang['strsave'] = '��¸';
	$lang['strreset'] = '�ꥻ�å�';
	$lang['strinsert'] = '����';
	$lang['strselect'] = '����';
	$lang['strdelete'] = '���';
	$lang['strupdate'] = '����';
	$lang['strreferences'] = '����';
	$lang['stryes'] = '�Ϥ�';
	$lang['strno'] = '������';
	$lang['strtrue'] = '��';
	$lang['strfalse'] = '��';
	$lang['stredit'] = '�Խ�';
	$lang['strcolumn'] = '�����';
	$lang['strcolumns'] = '�����';
	$lang['strrows'] = '�쥳����';
	$lang['strrowsaff'] = '�ƶ���������쥳����';
	$lang['strobjects'] = '���֥�������';
	$lang['strback'] = '���';
	$lang['strqueryresults'] = '��������';
	$lang['strshow'] = 'ɽ��';
	$lang['strempty'] = '���ˤ���';
	$lang['strlanguage'] = '����';
	$lang['strencoding'] = '���󥳡���';
	$lang['strvalue'] = '��';
	$lang['strunique'] = '��ˡ���';
	$lang['strprimary'] = '�ץ饤�ޥ�';
	$lang['strexport'] = '�������ݡ���';
	$lang['strimport'] = '����ݡ���';
	$lang['strallowednulls']  =  'NULL ʸ������Ĥ���';
	$lang['strbackslashn']  =  '\N';
	$lang['stremptystring']  =  '����ʸ����/����';
	$lang['strsql'] = 'SQL';
	$lang['stradmin'] = '����';
	$lang['strvacuum'] = '�Х��塼��';
	$lang['stranalyze'] = '����';
	$lang['strclusterindex']  =  '���饹����';
$lang['strclustered'] = 'Clustered?';
	$lang['strreindex'] = '�ƥ���ǥå���';
	$lang['strexecute']  =  '�¹Ԥ���';
	$lang['stradd'] = '�ɲ�';
	$lang['strevent'] = '���٥��';
	$lang['strwhere'] = 'Where';
	$lang['strinstead'] = '���';
	$lang['strwhen'] = 'When';
	$lang['strformat'] = '�ե����ޥå�';
	$lang['strdata'] = '�ǡ���';
	$lang['strconfirm'] = '��ǧ';
	$lang['strexpression'] = 'ɾ����';
	$lang['strellipsis'] = '...';
	$lang['strseparator'] = ': ';
	$lang['strexpand'] = 'Ÿ��';
	$lang['strcollapse'] = '�Ĥ���';
	$lang['strfind'] = '����';
	$lang['stroptions'] = '���ץ����';
	$lang['strrefresh'] = '��ɽ��';
	$lang['strdownload'] = '���������';
	$lang['strdownloadgzipped'] = 'gzip �ǰ��̤��ƥ��������';
	$lang['strinfo'] = '����';
	$lang['stroids'] = 'OID ';
	$lang['stradvanced'] = '���٤�';
	$lang['strvariables'] = '�ѿ�';
	$lang['strprocess'] = '�ץ���';
	$lang['strprocesses'] = '�ץ���';
	$lang['strsetting'] = '����';
	$lang['streditsql'] = 'SQL �Խ�';
	$lang['strruntime'] = '��¹Ի���: %s �ߥ���';
	$lang['strpaginate'] = '��̤Υڡ���ʬ�������Ԥ�';
	$lang['struploadscript'] = '�ޤ��� SQL ������ץȤ򥢥åץ���:';
	$lang['strstarttime'] = '���ϻ���';
	$lang['strfile'] = '�ե�����';
	$lang['strfileimported'] = '�ե�����򥤥�ݡ��Ȥ��ޤ�����';
	$lang['strtrycred']  =  '���٤ƤΥ����С��Ǥ��ξ����Ȥ�';
	$lang['stractionsonmultiplelines']  =  'ʣ���Ԥ����';
	$lang['strselectall']  =  '���٤����򤹤�';
	$lang['strunselectall']  =  '���٤������������';
	$lang['strlocale']  =  '������';

	// User-supplied SQL history
	$lang['strhistory']  =  '����';
	$lang['strnohistory']  =  '���򤬤���ޤ���';
	$lang['strclearhistory']  =  '�����õ�뤹';
	$lang['strdelhistory']  =  '���򤫤�������';
	$lang['strconfdelhistory']  =  '���������򤫤餳���׵�������ޤ���?';
	$lang['strconfclearhistory']  =  '�����������õ�ޤ���?';
	$lang['strnodatabaseselected']  =  '�ǡ����١��������򤷤Ƥ���������';

	// Database Sizes
	$lang['strsize']  =  '������';
	$lang['strbytes']  =  '�Х���';
	$lang['strkb']  =  'kB';
	$lang['strmb']  =  'MB';
	$lang['strgb']  =  'GB';
	$lang['strtb']  =  'TB';

	// Error handling
	$lang['strnoframes'] = '���Υ��ץꥱ����������Ѥ��뤿��ˤϥե졼�ब���Ѳ�ǽ�ʥ֥饦������ɬ�פǤ���';
	$lang['strnoframeslink'] = '�ե졼���������ƻȤ�';
	$lang['strbadconfig'] = 'config.inc.php ���켰�Ǥ��������� config.inc.php-dist ����ƺ�������ɬ�פ�����ޤ���';
	$lang['strnotloaded'] = '�ǡ����١����򥵥ݡ��Ȥ���褦�� PHP �Υ���ѥ��롦���󥹥ȡ��뤬����Ƥ��ޤ���configure �� --with-pgsql ���ץ������Ѥ��� PHP ��ƥ���ѥ��뤹��ɬ�פ�����ޤ���';
	$lang['strpostgresqlversionnotsupported'] = '���ΥС������� PostgreSQL �ϥ��ݡ��Ȥ��Ƥ��ޤ��󡣥С������ %s �ʾ�˥��åץ��졼�ɤ��Ƥ���������';
	$lang['strbadschema'] = '̵���Υ������ޤ����ꤵ��ޤ�����';
	$lang['strbadencoding'] = '�ǡ����١�������ǥ��饤����ȥ��󥳡��ɤ���ꤷ�ޤ���Ǥ�����';
	$lang['strsqlerror'] = 'SQL ���顼:';
	$lang['strinstatement'] = 'ʸ:';
	$lang['strinvalidparam'] = '������ץȥѥ�᡼����̵���Ǥ���';
	$lang['strnodata'] = '�쥳���ɤ����Ĥ���ޤ���';
	$lang['strnoobjects'] = '���֥������Ȥ����Ĥ���ޤ���';
	$lang['strrownotunique'] = '���Υ쥳���ɤˤϰ�ռ��̻Ҥ�����ޤ���';
	$lang['strnoreportsdb'] = '��ݡ��ȥǡ����١�������������Ƥ��ޤ��󡣥ǥ��쥯�ȥ�ˤ��� INSTALL �ե�������ɤ�Ǥ���������';
	$lang['strnouploads'] = '�ե����륢�åץ��ɤ�̵���Ǥ���';
	$lang['strimporterror'] = '����ݡ��ȥ��顼';
	$lang['strimporterror-fileformat']  =  '����ݡ��ȥ��顼: �ե����������ưŪ�˳���Ǥ��ޤ���.';
	$lang['strimporterrorline'] = '%s ���ܤ�����ݡ��ȥ��顼�Ǥ���';
	$lang['strimporterrorline-badcolumnnum']  =  '%s �Ԥǥ���ݡ��ȥ��顼:  �Ԥ��������������äƤ��ޤ���';
	$lang['strimporterror-uploadedfile']  =  '����ݡ��ȥ��顼: �����С��˥ե�����򥢥åץ��ɤ��뤳�Ȥ��Ǥ��ʤ����⤷��ޤ���';
	$lang['strcannotdumponwindows']  =  'Windows ��Ǥ�ʣ��ơ��֥�ȥ�������̾�Υ���פϥ��ݡ��Ȥ��Ƥ��ޤ���';
$lang['strinvalidserverparam']  =  'Attempt to connect with invalid server parameter, possibly someone is trying to hack your system.'; 
	$lang['strnoserversupplied']  =  '�����С������ꤵ��Ƥ��ޤ���!';

	// Tables
	$lang['strtable'] = '�ơ��֥�';
	$lang['strtables'] = '�ơ��֥�';
	$lang['strshowalltables'] = '���٤ƤΥơ��֥��ɽ������';
	$lang['strnotables'] = '�ơ��֥뤬���Ĥ���ޤ���';
	$lang['strnotable'] = '�ơ��֥뤬���Ĥ���ޤ���';
	$lang['strcreatetable'] = '�ơ��֥���������';
	$lang['strcreatetablelike']  =  '���Υơ��֥�򸵤˿������ơ��֥���������';
	$lang['strcreatetablelikeparent']  =  '���ơ��֥�';
	$lang['strcreatelikewithdefaults']  =  'DEFAULT ��ޤ�';
	$lang['strcreatelikewithconstraints']  =  'CONSTRAINTS ��ޤ�';
	$lang['strcreatelikewithindexes']  =  'INDEX ��ޤ�';
	$lang['strtablename'] = '�ơ��֥�̾';
	$lang['strtableneedsname'] = '�ơ��֥�̾����ꤹ��ɬ�פ�����ޤ���';
$lang['strtablelikeneedslike']  =  'You must give a table to copy properties from.';
	$lang['strtableneedsfield'] = '���ʤ��Ȥ��ĤΥե�����ɤ���ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strtableneedscols'] = 'ͭ���ʥ���������ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strtablecreated'] = '�ơ��֥��������ޤ�����';
	$lang['strtablecreatedbad'] = '�ơ��֥�κ����˼��Ԥ��ޤ�����';
	$lang['strconfdroptable'] = '�ơ��֥��%s�פ��������˴����ޤ���?';
	$lang['strtabledropped'] = '�ơ��֥���˴����ޤ�����';
	$lang['strtabledroppedbad'] = '�ơ��֥���˴��˼��Ԥ��ޤ�����';
	$lang['strconfemptytable'] = '�����˥ơ��֥��%s�פ����Ƥ��˴����ޤ���?';
	$lang['strtableemptied'] = '�ơ��֥뤬���ˤʤ�ޤ���.';
	$lang['strtableemptiedbad'] = '�ơ��֥����ˤǤ��ޤ���Ǥ�����';
	$lang['strinsertrow'] = '�쥳���ɤ�����';
	$lang['strrowinserted'] = '�쥳���ɤ��������ޤ�����';
	$lang['strrowinsertedbad'] = '�쥳���ɤ������˼��Ԥ��ޤ�����';
	$lang['strrowduplicate']  =  '�쥳���ɤ������˼��Ԥ���������ʣ�����ߤޤ�����';
	$lang['streditrow'] = '�쥳�����Խ�';
	$lang['strrowupdated'] = '�쥳���ɤ򹹿����ޤ�����';
	$lang['strrowupdatedbad'] = '�쥳���ɤι����˼��Ԥ��ޤ�����';
	$lang['strdeleterow'] = '�쥳���ɺ��';
	$lang['strconfdeleterow'] = '�����ˤ��Υ쥳���ɤ������ޤ���?';
	$lang['strrowdeleted'] = '�쥳���ɤ������ޤ�����';
	$lang['strrowdeletedbad'] = '�쥳���ɤκ���˼��Ԥ��ޤ�����';
	$lang['strinsertandrepeat'] = '�����ȷ����֤�';
	$lang['strnumcols'] = '�����ο�';
	$lang['strcolneedsname'] = '������̾������ꤷ�ʤ���Ф�ޤ���';
	$lang['strselectallfields'] = '���٤ƤΥե�����ɤ����򤹤�';
	$lang['strselectneedscol'] = '���ʤ��Ȥ�쥫����ɬ�פǤ���';
	$lang['strselectunary'] = 'ñ��Υ��ڥ졼�������ͤ���Ĥ��Ȥ��Ǥ��ޤ���';
	$lang['strcolumnaltered'] = '�������ѹ����ޤ�����';
	$lang['strcolumnalteredbad'] = '�������ѹ��˼��Ԥ��ޤ�����';
	$lang['strconfdropcolumn'] = '�����˥�����%s�פ�ơ��֥��%s�פ����˴����Ƥ����Ǥ���?';
	$lang['strcolumndropped'] = '�������˴����ޤ�����';
	$lang['strcolumndroppedbad'] = '�������˴��˼��Ԥ��ޤ�����';
	$lang['straddcolumn'] = '�������ɲ�';
	$lang['strcolumnadded'] = '�������ɲä��ޤ�����';
	$lang['strcolumnaddedbad'] = '�������ɲä˼��Ԥ��ޤ�����';
	$lang['strcascade'] = '����������';
	$lang['strtablealtered'] = '�ơ��֥���ѹ����ޤ�����';
	$lang['strtablealteredbad'] = '�ơ��֥���ѹ��˼��Ԥ��ޤ�����';
	$lang['strdataonly'] = '�ǡ����Τ�';
	$lang['strstructureonly'] = '��¤�Τ�';
	$lang['strstructureanddata'] = '��¤�ȥǡ���';
	$lang['strtabbed'] = '���ֶ��ڤ�';
	$lang['strauto'] = '��ư';
	$lang['strconfvacuumtable'] = '�����ˡ�%s�פ�Х��塼�ष�ޤ���?';
	$lang['strconfanalyzetable']  =  '��%s�פ�������ʬ��(ANALYZE)���ޤ���?';
	$lang['strestimatedrowcount'] = 'ɾ���ѥ쥳���ɿ�';
	$lang['strspecifytabletoanalyze']  =  '�ơ��֥����ϤˤϾ��ʤ��Ȥ� 1 �Ļ��ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strspecifytabletoempty']  =  '�ơ��֥����ˤ���ˤϾ��ʤ��Ȥ� 1 �Ļ��ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strspecifytabletodrop']  =  '�ơ��֥���˴�����ˤϾ��ʤ��Ȥ� 1 �Ļ��ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strspecifytabletovacuum']  =  '�ơ��֥��Х��塼�ह��ˤϾ��ʤ��Ȥ� 1 �Ļ��ꤷ�ʤ���Фʤ�ޤ���';

	// Columns
	$lang['strcolprop']  =  '�����Υץ�ѥƥ�';
	$lang['strnotableprovided']  =  '�ơ��֥뤬���ꤵ��Ƥ��ޤ���!';
		
	// Users
	$lang['struser'] = '�桼����';
	$lang['strusers'] = '�桼����';
	$lang['strusername'] = '�桼����̾';
	$lang['strpassword'] = '�ѥ����';
	$lang['strsuper'] = '�����ѡ��桼�����Ǥ���?';
	$lang['strcreatedb'] = '�ǡ����١�����������ޤ���?';
	$lang['strexpires'] = 'ͭ������';
	$lang['strsessiondefaults'] = '���å����ǥե����';
	$lang['strnousers'] = '�桼���������Ĥ���ޤ���';
	$lang['struserupdated'] = '�桼�����򹹿����ޤ�����';
	$lang['struserupdatedbad'] = '�桼�����ι����˼��Ԥ��ޤ�����';
	$lang['strshowallusers'] = '���٤ƤΥ桼������ɽ������';
	$lang['strcreateuser'] = '�桼�������������';
	$lang['struserneedsname'] = '�桼������̾����ɬ�פǤ���';
	$lang['strusercreated'] = '�桼������������ޤ�����';
	$lang['strusercreatedbad'] = '�桼�����κ����˼��Ԥ��ޤ�����';
	$lang['strconfdropuser'] = '�����˥桼������%s�פ��˴����ޤ���?';
	$lang['struserdropped'] = '�桼�������˴����ޤ�����';
	$lang['struserdroppedbad'] = '�桼�����κ�����˴����ޤ���';
	$lang['straccount'] = '���������';
	$lang['strchangepassword'] = '�ѥ�����ѹ�';
	$lang['strpasswordchanged'] = '�ѥ���ɤ��ѹ��򤷤ޤ�����';
	$lang['strpasswordchangedbad'] = '�ѥ���ɤ��ѹ��˼��Ԥ��ޤ�����';
	$lang['strpasswordshort'] = '�ѥ���ɤ�û�����ޤ���';
	$lang['strpasswordconfirm'] = '�ѥ���ɤγ�ǧ�����פ��ޤ���Ǥ�����';
		
	// Groups
	$lang['strgroup'] = '���롼��';
	$lang['strgroups'] = '���롼��';
	$lang['strshowallgroups']  =  '���٤ƤΥ��롼�פ�ɽ������';
	$lang['strnogroup'] = '���롼�פ�����ޤ���';
	$lang['strnogroups'] = '���롼�פ����Ĥ���ޤ���';
	$lang['strcreategroup'] = '���롼�פ��������';
	$lang['strgroupneedsname'] = '���롼��̾����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strgroupcreated'] = '���롼�פ�������ޤ�����';
	$lang['strgroupcreatedbad'] = '���롼�פκ����˼��Ԥ��ޤ�����';	
	$lang['strconfdropgroup'] = '�����˥��롼�ס�%s�פ��˴����ޤ���?';
	$lang['strgroupdropped'] = '���롼�פ��˴����ޤ�����';
	$lang['strgroupdroppedbad'] = '���롼�פ��˴��˼��Ԥ��ޤ�����';
	$lang['strmembers'] = '���С�';
	$lang['strmemberof']  =  '���Υ��롼�פΥ��С�:';
	$lang['stradminmembers']  =  '�������С�';
	$lang['straddmember'] = '���С����ɲä���';
	$lang['strmemberadded'] = '���С����ɲä��ޤ�����';
	$lang['strmemberaddedbad'] = '���С����ɲä˼��Ԥ��ޤ�����';
	$lang['strdropmember'] = '���С��˴�';
	$lang['strconfdropmember'] = '�����˥��С���%s�פ򥰥롼�ס�%s�פ����˴����ޤ���?';
	$lang['strmemberdropped'] = '���С����˴����ޤ�����';
	$lang['strmemberdroppedbad'] = '���С����˴��˼��Ԥ��ޤ�����';

	// Roles
	$lang['strrole']  =  '����';
	$lang['strroles']  =  '����';
	$lang['strshowallroles']  =  '���٤ƤΥ����ɽ������';
	$lang['strnoroles']  =  '���뤬���Ĥ���ޤ���';
	$lang['strinheritsprivs']  =  '�ø�������Ѥ��ޤ���?';
	$lang['strcreaterole']  =  '������������';
	$lang['strcancreaterole']  =  '���������Ǥ��ޤ���?';
	$lang['strrolecreated']  =  '�����������ޤ�����';
	$lang['strrolecreatedbad']  =  '����κ����˼��Ԥ��ޤ�����';
	$lang['strrolealtered']  =  '������ѹ����ޤ�����';
	$lang['strrolealteredbad']  =  '������ѹ��˼��Ԥ��ޤ�����';
	$lang['strcanlogin']  =  '������Ǥ��ޤ���?';
	$lang['strconnlimit']  =  '��³����';
	$lang['strdroprole']  =  '������˴�����';
	$lang['strconfdroprole']  =  '�����˥����%s�פ��˴����ޤ���?';
	$lang['strroledropped']  =  '������˴����ޤ�����';
	$lang['strroledroppedbad']  =  '������˴��˼��Ԥ��ޤ�����';
	$lang['strnolimit']  =  '���¤ʤ�';
	$lang['strnever']  =  'Never';
	$lang['strroleneedsname']  =  '�����̾������ꤷ�ʤ���Фʤ�ޤ���';

	// Privileges
	$lang['strprivilege'] = '�ø�';
	$lang['strprivileges'] = '�ø�';
	$lang['strnoprivileges'] = '���Υ��֥������Ȥ��ø�����äƤ��ޤ���';
	$lang['strgrant'] = '����';
	$lang['strrevoke'] = '�ѻ�';
	$lang['strgranted'] = '�ø���Ϳ���ޤ�����';
	$lang['strgrantfailed'] = '�ø���Ϳ������˼��Ԥ��ޤ�����';
	$lang['strgrantbad'] = '���ʤ��Ȥ��ͤΥ桼���������롼�פˡ����ʤ��Ȥ�ҤȤĤ��ø�����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strgrantor'] = '��Ϳ';
	$lang['strasterisk'] = '*';

	// Databases
	$lang['strdatabase'] = '�ǡ����١���';
	$lang['strdatabases'] = '�ǡ����١���';
	$lang['strshowalldatabases'] = '���٤ƤΥǡ����١�����ɽ������';
	$lang['strnodatabases'] = '�ǡ����١������ޤä�������ޤ���';
	$lang['strcreatedatabase'] = '�ǡ����١������������';
	$lang['strdatabasename'] = '�ǡ����١���̾';
	$lang['strdatabaseneedsname'] = '�ǡ����١���̾����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strdatabasecreated'] = '�ǡ����١�����������ޤ�����';
	$lang['strdatabasecreatedbad'] = '�ǡ����١����κ����˼��Ԥ��ޤ�����';	
	$lang['strconfdropdatabase'] = '�����˥ǡ����١�����%s�פ��˴����ޤ���?';
	$lang['strdatabasedropped'] = '�ǡ����١������˴����ޤ�����';
	$lang['strdatabasedroppedbad'] = '�ǡ����١������˴��˼��Ԥ��ޤ�����';
	$lang['strentersql'] = '���˼¹Ԥ���SQL�����Ϥ��ޤ�:';
	$lang['strsqlexecuted'] = 'SQL��¹Ԥ��ޤ�����';
	$lang['strvacuumgood'] = '�Х��塼���λ���ޤ�����';
	$lang['strvacuumbad'] = '�Х��塼��˼��Ԥ��ޤ�����';
	$lang['stranalyzegood'] = '���Ϥ�λ���ޤ�����';
	$lang['stranalyzebad'] = '���Ϥ˼��Ԥ��ޤ�����';
	$lang['strreindexgood'] = '�ƥ���ǥå�����λ���ޤ�����';
	$lang['strreindexbad'] = '�ƥ���ǥå����˼��Ԥ��ޤ�����';
	$lang['strfull'] = '���٤�';
	$lang['strfreeze'] = '�ե꡼��';
	$lang['strforce'] = '����';
	$lang['strsignalsent'] = '�����ʥ�����';
	$lang['strsignalsentbad'] = '�����ʥ������˼��Ԥ��ޤ���';
	$lang['strallobjects'] = '���٤ƤΥ��֥�������';
	$lang['strdatabasealtered']  =  '�ǡ����١������ѹ����ޤ�����';
	$lang['strdatabasealteredbad']  =  '�ǡ����١������ѹ��˼��Ԥ��ޤ�����';
	$lang['strspecifydatabasetodrop']  =  '�ǡ����١������˴�����ˤϾ��ʤ��Ȥ� 1 �Ļ��ꤷ�ʤ���Фʤ�ޤ���';

	// Views
	$lang['strview'] = '�ӥ塼';
	$lang['strviews'] = '�ӥ塼';
	$lang['strshowallviews'] = '���٤ƤΥӥ塼��ɽ������';
	$lang['strnoview'] = '�ӥ塼������ޤ���';
	$lang['strnoviews'] = '�ӥ塼�����Ĥ���ޤ���';
	$lang['strcreateview'] = '�ӥ塼���������';
	$lang['strviewname'] = '�ӥ塼̾';
	$lang['strviewneedsname'] = '�ӥ塼̾����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strviewneedsdef'] = '���̾����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strviewneedsfields'] = '�ӥ塼�Τ��椫�����򤷡���˾�Υ�������ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strviewcreated'] = '�ӥ塼��������ޤ�����';
	$lang['strviewcreatedbad'] = '�ӥ塼�κ����˼��Ԥ��ޤ�����';
	$lang['strconfdropview'] = '�����˥ӥ塼��%s�פ��˴����ޤ���?';
	$lang['strviewdropped'] = '�ӥ塼���˴����ޤ�����';
	$lang['strviewdroppedbad'] = '�ӥ塼���˴��˼��Ԥ��ޤ�����';
	$lang['strviewupdated'] = '�ӥ塼�򹹿����ޤ�����';
	$lang['strviewupdatedbad'] = '�ӥ塼�ι����˼��Ԥ��ޤ�����';
	$lang['strviewlink'] = '��󥯤�������';
	$lang['strviewconditions'] = '�ɲþ��';
	$lang['strcreateviewwiz'] = '���������ɤǥӥ塼���������';
	$lang['strrenamedupfields']  =  '��ʣ���ܤ�̾�����ѹ�����';
	$lang['strdropdupfields']  =  '��ʣ���ܤ��˴�����';
	$lang['strerrordupfields']  =  '��ʣ���ܤΥ��顼�Ǥ�';
	$lang['strviewaltered']  =  '�ӥ塼���ѹ����ޤ�����';
	$lang['strviewalteredbad']  =  '�ӥ塼���ѹ��˼��Ԥ��ޤ�����';
	$lang['strspecifyviewtodrop']  =  '�ӥ塼���˴�����ˤϾ��ʤ��Ȥ� 1 �Ļ��ꤷ�ʤ���Фʤ�ޤ���';

	// Sequences
	$lang['strsequence'] = '��������';
	$lang['strsequences'] = '��������';
	$lang['strshowallsequences'] = '���٤ƤΥ������󥹤�ɽ������';
	$lang['strnosequence'] = '�������󥹤�����ޤ���';
	$lang['strnosequences'] = '�������󥹤����Ĥ���ޤ���';
	$lang['strcreatesequence'] = '�������󥹤��������';
	$lang['strlastvalue'] = '�ǽ���';
	$lang['strincrementby'] = '���ÿ�';	
	$lang['strstartvalue'] = '������';
	$lang['strmaxvalue'] = '������';
	$lang['strminvalue'] = '�Ǿ���';
	$lang['strcachevalue'] = '����å�����';
	$lang['strlogcount'] = '���������';
$lang['strcancycle']  =  'Can cycle?';
$lang['striscalled']  =  'Will increment last value before returning next value (is_called)?';
	$lang['strsequenceneedsname'] = '��������̾����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strsequencecreated'] = '�������󥹤�������ޤ�����';
	$lang['strsequencecreatedbad'] = '�������󥹤κ����˼��Ԥ��ޤ�����'; 
	$lang['strconfdropsequence'] = '�����˥������󥹡�%s�פ��˴����ޤ���?';
	$lang['strsequencedropped'] = '�������󥹤��˴����ޤ�����';
	$lang['strsequencedroppedbad'] = '�������󥹤��˴��˼��Ԥ��ޤ�����';
	$lang['strsequencereset'] = '�������󥹥ꥻ�åȤ�Ԥ��ޤ�����';
	$lang['strsequenceresetbad'] = '�������󥹤Υꥻ�åȤ˼��Ԥ��ޤ�����'; 
	$lang['strsequencealtered']  =  '�������󥹤��ѹ����ޤ�����';
	$lang['strsequencealteredbad']  =  '�������󥹤��ѹ��˼��Ԥ��ޤ�����';
	$lang['strsetval']  =  '�ͤ����ꤹ��';
	$lang['strsequencesetval']  =  '���������ͤ����ꤷ�ޤ�����';
	$lang['strsequencesetvalbad']  =  '���������ͤ�����˼��Ԥ��ޤ�����';
	$lang['strnextval']  =  '�ͤ����ä���';
	$lang['strsequencenextval']  =  '�ͤ����ä��ޤ�����';
	$lang['strsequencenextvalbad']  =  '�ͤ����ä˼��Ԥ��ޤ�����';
	$lang['strspecifysequencetodrop']  =  '�������󥹤��˴�����ˤϾ��ʤ��Ȥ� 1 �Ļ��ꤷ�ʤ���Фʤ�ޤ���';

	// Indexes
	$lang['strindex'] = '����ǥå���';
	$lang['strindexes'] = '����ǥå���';
	$lang['strindexname'] = '����ǥå���̾';
	$lang['strshowallindexes'] = '���٤ƤΥ���ǥå�����ɽ������';
	$lang['strnoindex'] = '����ǥå���������ޤ���';
	$lang['strnoindexes'] = '����ǥå��������Ĥ���ޤ���';
	$lang['strcreateindex'] = '����ǥå������������';
	$lang['strtabname'] = '����̾';
	$lang['strcolumnname'] = '�����̾';
	$lang['strindexneedsname'] = 'ͭ���ʥ���ǥå���̾����ꤷ�ʤ���Ф����ޤ���';
	$lang['strindexneedscols'] = 'ͭ���ʥ���������ꤷ�ʤ���Ф����ޤ���';
	$lang['strindexcreated'] = '����ǥå�����������ޤ�����';
	$lang['strindexcreatedbad'] = '����ǥå����κ����˼��Ԥ��ޤ�����';
	$lang['strconfdropindex'] = '�����˥���ǥå�����%s�פ��˴����ޤ���?';
	$lang['strindexdropped'] = '����ǥå������˴����ޤ�����';
	$lang['strindexdroppedbad'] = '����ǥå������˴��˼��Ԥ��ޤ�����';
	$lang['strkeyname'] = '����̾';
	$lang['struniquekey'] = '��ˡ�������';
	$lang['strprimarykey'] = '�ץ饤�ޥꥭ��';
	$lang['strindextype'] = '����ǥå���������';
	$lang['strtablecolumnlist'] = '�ơ��֥���Υ����';
	$lang['strindexcolumnlist'] = '����ǥå�����Υ����';
	$lang['strconfcluster'] = '�����ˡ�%s�פ򥯥饹�����ˤ��ޤ���?';
	$lang['strclusteredgood'] = '���饹������λ�Ǥ���';
	$lang['strclusteredbad'] = '���饹�����˼��Ԥ��ޤ�����';

	// Rules
	$lang['strrules'] = '�롼��';
	$lang['strrule'] = '�롼��';
	$lang['strshowallrules'] = '���٤ƤΥ롼���ɽ������';
	$lang['strnorule'] = '�롼�뤬����ޤ���';
	$lang['strnorules'] = '�롼�뤬���Ĥ���ޤ���';
	$lang['strcreaterule'] = '�롼����������';
	$lang['strrulename'] = '�롼��̾';
	$lang['strruleneedsname'] = '�롼��̾����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strrulecreated'] = '�롼���������ޤ�����';
	$lang['strrulecreatedbad'] = '�롼��κ����˼��Ԥ��ޤ�����';
	$lang['strconfdroprule'] = '�����˥롼���%s�פ�ǡ����١�����%s�פ����˴����ޤ���?';
	$lang['strruledropped'] = '�롼����˴����ޤ�����';
	$lang['strruledroppedbad'] = '�롼����˴��˼��Ԥ��ޤ�����';

	// Constraints
	$lang['strconstraint'] = '��������';
	$lang['strconstraints'] = '��������';
	$lang['strshowallconstraints'] = '���٤Ƥθ��������ɽ������';
	$lang['strnoconstraints'] = '�������󤬤���ޤ���';
	$lang['strcreateconstraint'] = '����������������';
	$lang['strconstraintcreated'] = '���������������ޤ�����';
	$lang['strconstraintcreatedbad'] = '��������κ����˼��Ԥ��ޤ�����';
	$lang['strconfdropconstraint'] = '�����˸��������%s�פ�ǡ����١�����%s�פ����˴����ޤ���?';
	$lang['strconstraintdropped'] = '����������˴����ޤ�����';
	$lang['strconstraintdroppedbad'] = '����������˴��˼��Ԥ��ޤ�����';
	$lang['straddcheck'] = '�������ɲä���';
	$lang['strcheckneedsdefinition'] = '��������ˤ������ɬ�פǤ���';
	$lang['strcheckadded'] = '����������ɲä��ޤ�����';
	$lang['strcheckaddedbad'] = '����������ɲä˼��Ԥ��ޤ�����';
	$lang['straddpk'] = '�ץ饤�ޥꥭ�����ɲä���';
	$lang['strpkneedscols'] = '�ץ饤�ޥꥭ���Ͼ��ʤ��Ȥ�쥫����ɬ�פȤ��ޤ���';
	$lang['strpkadded'] = '�ץ饤�ޥꥭ�����ɲä��ޤ�����';
	$lang['strpkaddedbad'] = '�ץ饤�ޥꥭ�����ɲä˼��Ԥ��ޤ�����';
	$lang['stradduniq'] = '��ˡ����������ɲä���';
	$lang['struniqneedscols'] = '��ˡ��������Ͼ��ʤ��Ȥ�쥫����ɬ�פȤ��ޤ���';
	$lang['struniqadded'] = '��ˡ����������ɲä��ޤ�����';
	$lang['struniqaddedbad'] = '��ˡ����������ɲä˼��Ԥ��ޤ�����';
	$lang['straddfk'] = '�����������ɲä���';
	$lang['strfkneedscols'] = '���������Ͼ��ʤ��Ȥ�쥫����ɬ�פȤ��ޤ���';
	$lang['strfkneedstarget'] = '���������ϥ������åȥơ��֥��ɬ�פȤ��ޤ���';
	$lang['strfkadded'] = '�����������ɲä��ޤ�����';
	$lang['strfkaddedbad'] = '�����������ɲä˼��Ԥ��ޤ�����';
	$lang['strfktarget'] = '�оݥơ��֥�';
	$lang['strfkcolumnlist'] = '������Υ����';
	$lang['strondelete'] = 'ON DELETE';
	$lang['stronupdate'] = 'ON UPDATE';	

	// Functions
	$lang['strfunction'] = '�ؿ�';
	$lang['strfunctions'] = '�ؿ�';
	$lang['strshowallfunctions'] = '���٤ƴؿ���ɽ������';
	$lang['strnofunction'] = '�ؿ�������ޤ���';
	$lang['strnofunctions'] = '�ؿ������Ĥ���ޤ���';
	$lang['strcreateplfunction'] = 'SQL/PL �ؿ����������';
	$lang['strcreateinternalfunction'] = '�����ؿ����������';
	$lang['strcreatecfunction'] = 'C �ؿ����������';
	$lang['strfunctionname'] = '�ؿ�̾';
	$lang['strreturns'] = '�֤���';
	$lang['strproglanguage'] = '�ץ���ߥ󥰸���';
	$lang['strfunctionneedsname'] = '�ؿ�̾����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strfunctionneedsdef'] = '�ؿ�������򤷤ʤ���Фʤꤢ����';
	$lang['strfunctioncreated'] = '�ؿ���������ޤ�����';
	$lang['strfunctioncreatedbad'] = '�ؿ��κ����˼��Ԥ��ޤ�����';
	$lang['strconfdropfunction'] = '�����˴ؿ���%s�פ��˴����ޤ���?';
	$lang['strfunctiondropped'] = '�ؿ����˴����ޤ�����';
	$lang['strfunctiondroppedbad'] = '�ؿ����˴��˼��Ԥ��ޤ�����';
	$lang['strfunctionupdated'] = '�ؿ��򹹿����ޤ�����';
	$lang['strfunctionupdatedbad'] = '�ؿ��ι����˼��Ԥ��ޤ�����';
	$lang['strobjectfile'] = '���֥������ȥե�����';
	$lang['strlinksymbol'] = '��󥯥���ܥ�';
	$lang['strarguments']  =  '����';
	$lang['strargmode']  =  '�⡼��';
	$lang['strargtype']  =  '����';
	$lang['strargadd']  =  '¾�ΰ������ɲä���';
	$lang['strargremove']  =  '���ΰ�����������';
	$lang['strargnoargs']  =  '���δؿ��Ϥ����Ĥ��ΰ�������ʤǤ��礦��';
$lang['strargenableargs']  =  'Enable arguments being passed to this function.';
	$lang['strargnorowabove']  =  '���ιԤξ�˹Ԥ�ɬ�פǤ���';
	$lang['strargnorowbelow']  =  '���ιԤβ��˹Ԥ�ɬ�פǤ���';
	$lang['strargraise']  =  '��˰�ư���ޤ���';
	$lang['strarglower']  =  '���˰�ư���ޤ���';
	$lang['strargremoveconfirm']  =  '�����ˤ��ΰ����������ޤ���? ������᤹���Ȥ��Ǥ��ޤ���This CANNOT be undone��';
$lang['strfunctioncosting']  =  'Function Costing';
$lang['strresultrows']  =  'Result Rows';
$lang['strexecutioncost']  =  'Execution Cost';
	$lang['strspecifyfunctiontodrop']  =  '�ؿ����˴�����ˤϾ��ʤ��Ȥ� 1 �Ļ��ꤷ�ʤ���Фʤ�ޤ���';

	// Triggers
	$lang['strtrigger'] = '�ȥꥬ��';
	$lang['strtriggers'] = '�ȥꥬ��';
	$lang['strshowalltriggers'] = '���٤ƤΥȥꥬ����ɽ������';
	$lang['strnotrigger'] = '�ȥꥬ��������ޤ���';
	$lang['strnotriggers'] = '�ȥꥬ�������Ĥ���ޤ���';
	$lang['strcreatetrigger'] = '�ȥꥬ�����������';
	$lang['strtriggerneedsname'] = '�ȥꥬ��̾����ꤹ��ɬ�פ�����ޤ���';
	$lang['strtriggerneedsfunc'] = '�ȥꥬ���Τ���δؿ�����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strtriggercreated'] = '�ȥꥬ����������ޤ�����';
	$lang['strtriggercreatedbad'] = '�ȥꥬ���κ����˼��Ԥ��ޤ�����';
	$lang['strconfdroptrigger'] = '�����˥ȥꥬ����%s�פ�ǡ����١�����%s�פ����˴����ޤ���?';
	$lang['strconfenabletrigger']  =  '�����ˡ�%2$s�פΥȥꥬ����%1$s�פ�ͭ���ˤ��ޤ���?';
	$lang['strconfdisabletrigger']  =  '�����ˡ�%2$s�פΥȥꥬ����%1$s�פ�̵���ˤ��ޤ���?';
	$lang['strtriggerdropped'] = '�ȥꥬ�����˴����ޤ�����';
	$lang['strtriggerdroppedbad'] = '�ȥꥬ�����˴��˼��Ԥ��ޤ�����';
	$lang['strtriggerenabled']  =  '�ȥꥬ����ͭ���ˤ��ޤ�����';
	$lang['strtriggerenabledbad']  =  '�ȥꥬ����ͭ�����˼��Ԥ��ޤ�����';
	$lang['strtriggerdisabled']  =  '�ȥꥬ����̵���ˤ��ޤ�����';
	$lang['strtriggerdisabledbad']  =  '�ȥꥬ����̵�����˼��Ԥ��ޤ�����';
	$lang['strtriggeraltered'] = '�ȥꥬ�����ѹ����ޤ�����';
	$lang['strtriggeralteredbad'] = '�ȥꥬ�����ѹ��˼��Ԥ��ޤ�����';
$lang['strforeach']  =  'For each';

	// Types
	$lang['strtype'] = '�ǡ�����';
	$lang['strtypes'] = '�ǡ�����';
	$lang['strshowalltypes'] = '���٤ƤΥǡ�������ɽ������';
	$lang['strnotype'] = '�ǡ�����������ޤ���';
	$lang['strnotypes'] = '�ǡ����������Ĥ���ޤ���Ǥ�����';
	$lang['strcreatetype'] = '�ǡ��������������';
	$lang['strcreatecomptype'] = 'ʣ�緿���������';
$lang['strcreateenumtype']  =  'Create enum type';
	$lang['strtypeneedsfield'] = '���ʤ��Ȥ� 1 �ĤΥե�����ɤ���ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strtypeneedsvalue']  =  '���ʤ��Ȥ� 1 �Ĥ��ͤ���ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strtypeneedscols'] = 'ͭ���ʥե�����ɤο�����ꤷ�ʤ���Фʤ�ޤ���';
$lang['strtypeneedsvals']  =  'You must specify a valid number of values.';
	$lang['strinputfn'] = '���ϴؿ�';
	$lang['stroutputfn'] = '���ϴؿ�';
$lang['strpassbyval'] = 'Passed by val?';
	$lang['stralignment'] = '���饤����';
	$lang['strelement'] = '����';
	$lang['strdelimiter'] = '�ǥߥ꥿';
	$lang['strstorage'] = '���ȥ졼��';
	$lang['strfield'] = '�ե������';
$lang['strvalue']  =  'Value';
$lang['strvalue']  =  'Value';
	$lang['strnumfields'] = '�ե�����ɿ�';
$lang['strnumvalues']  =  'Num. of values';
	$lang['strtypeneedsname'] = '��̾����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strtypeneedslen'] = '�ǡ�������Ĺ������ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strtypecreated'] = '�ǡ�������������ޤ�����';
	$lang['strtypecreatedbad'] = '�ǡ������κ����˼��Ԥ��ޤ�����';
	$lang['strconfdroptype'] = '�����˥ǡ�������%s�פ��˴����ޤ���?';
	$lang['strtypedropped'] = '�ǡ��������˴����ޤ�����';
	$lang['strtypedroppedbad'] = '�ǡ��������˴��˼��Ԥ��ޤ�����';
	$lang['strflavor'] = '����';
	$lang['strbasetype'] = '����';
	$lang['strcompositetype'] = 'ʣ�緿';
	$lang['strpseudotype'] = '�����ǡ���';
$lang['strenum']  =  'Enum';
$lang['strenumvalues']  =  'Enum Values';

	// Schemas
	$lang['strschema'] = '��������';
	$lang['strschemas'] = '��������';
	$lang['strshowallschemas'] = '���٤ƤΥ������ޤ�ɽ������';
	$lang['strnoschema'] = '�������ޤ�����ޤ���';
	$lang['strnoschemas'] = '�������ޤ����Ĥ���ޤ���';
	$lang['strcreateschema'] = '�������ޤ��������';
	$lang['strschemaname'] = '��������̾';
	$lang['strschemaneedsname'] = '��������̾����ꤹ��ɬ�פ�����ޤ���';
	$lang['strschemacreated'] = '�������ޤ�������ޤ�����';
	$lang['strschemacreatedbad'] = '�������ޤκ����˼��Ԥ��ޤ�����';
	$lang['strconfdropschema'] = '�����˥������ޡ�%s�פ��˴����ޤ���?';
	$lang['strschemadropped'] = '�������ޤ��˴����ޤ�����';
	$lang['strschemadroppedbad'] = '�������ޤ��˴��˼��Ԥ��ޤ�����';
	$lang['strschemaaltered'] = '�������ޤ��ѹ����ޤ�����';
	$lang['strschemaalteredbad'] = '�������ޤ��ѹ��˼��Ԥ��ޤ�����';
	$lang['strsearchpath'] = '�������޸����ѥ�';
	$lang['strspecifyschematodrop']  =  '�������ޤ��˴�����ˤϾ��ʤ��Ȥ� 1 �Ļ��ꤷ�ʤ���Фʤ�ޤ���';

	// Reports
	$lang['strreport'] = '��ݡ���';
	$lang['strreports'] = '��ݡ���';
	$lang['strshowallreports'] = '���٤ƤΥ�ݡ��Ȥ�ɽ������';
	$lang['strnoreports'] = '��ݡ��Ȥ����Ĥ���ޤ���';
	$lang['strcreatereport'] = '��ݡ��Ȥ��������';
	$lang['strreportdropped'] = '��ݡ��Ȥ��˴����ޤ�����';
	$lang['strreportdroppedbad'] = '��ݡ��Ȥ��˴��˼��Ԥ��ޤ�����';
	$lang['strconfdropreport'] = '�����˥�ݡ��ȡ�%s�פ��˴����ޤ���?';
	$lang['strreportneedsname'] = '��ݡ���̾����ꤹ��ɬ�פ�����ޤ���';
	$lang['strreportneedsdef'] = '��ݡ����Ѥ�SQL����ꤹ��ɬ�פ�����ޤ���';
	$lang['strreportcreated'] = '��ݡ��Ȥ���¸�򤷤ޤ�����';
	$lang['strreportcreatedbad'] = '��ݡ��Ȥ���¸�˼��Ԥ��ޤ�����';

	// Domains
	$lang['strdomain'] = '�ɥᥤ��';
	$lang['strdomains'] = '�ɥᥤ��';
	$lang['strshowalldomains'] = '���٤ƤΥɥᥤ���ɽ������';
	$lang['strnodomains'] = '�ɥᥤ�󤬤���ޤ���';
	$lang['strcreatedomain'] = '�ɥᥤ�����';
	$lang['strdomaindropped'] = '�ɥᥤ����˴����ޤ�����';
	$lang['strdomaindroppedbad'] = '�ɥᥤ����˴��˼��Ԥ��ޤ�����';
	$lang['strconfdropdomain'] = '�����˥ɥᥤ���%s�פ��˴����ޤ���?';
	$lang['strdomainneedsname'] = '�ɥᥤ��̾����ꤹ��ɬ�פ�����ޤ���';
	$lang['strdomaincreated'] = '�ɥᥤ���������ޤ�����';
	$lang['strdomaincreatedbad'] = '�ɥᥤ��κ����˼��Ԥ��ޤ�����';	
	$lang['strdomainaltered'] = '�ɥᥤ����ѹ����ޤ�����';
	$lang['strdomainalteredbad'] = '�ɥᥤ����ѹ��˼��Ԥ��ޤ�����';	

	// Operators
	$lang['stroperator'] = '�黻��';
	$lang['stroperators'] = '�黻��';
	$lang['strshowalloperators'] = '���٤Ƥα黻�Ҥ�ɽ������';
	$lang['strnooperator'] = '�黻�Ҥ����Ĥ���ޤ���';
	$lang['strnooperators'] = '�黻�ҥ��饹�����Ĥ���ޤ���';
	$lang['strcreateoperator'] = '�黻�Ҥ�������ޤ�����';
	$lang['strleftarg'] = '������������';
	$lang['strrightarg'] = '������������';
	$lang['strcommutator'] = '����';
	$lang['strnegator'] = '����';
	$lang['strrestrict'] = '����';
	$lang['strjoin'] = '���';
	$lang['strhashes'] = '�ϥå���';
	$lang['strmerges'] = 'ʻ��';
	$lang['strleftsort'] = '��������';
	$lang['strrightsort'] = '��������';
	$lang['strlessthan'] = '̤��';
	$lang['strgreaterthan'] = '�ʾ�';
	$lang['stroperatorneedsname'] = '�黻��̾����ꤹ��ɬ�פ�����ޤ���';
	$lang['stroperatorcreated'] = '�黻�Ҥ�������ޤ�����';
	$lang['stroperatorcreatedbad'] = '�黻�Ҥκ����˼��Ԥ��ޤ�����';
	$lang['strconfdropoperator'] = '�����˱黻�ҡ�%s�פ��˴����ޤ���?';
	$lang['stroperatordropped'] = '�黻�Ҥ��˴����ޤ�����';
	$lang['stroperatordroppedbad'] = '�黻�Ҥ��˴��˼��Ԥ��ޤ�����';

	// Casts
	$lang['strcasts'] = '���㥹��';
	$lang['strnocasts'] = '���㥹�Ȥ����Ĥ���ޤ���';
	$lang['strsourcetype'] = '������������';
	$lang['strtargettype'] = '�������åȥ�����';
	$lang['strimplicit'] = '����';
$lang['strinassignment'] = 'In assignment';
	$lang['strbinarycompat'] = '(�Х��ʥ꡼�ߴ�)';
	
	// Conversions
	$lang['strconversions'] = '�Ѵ�';
	$lang['strnoconversions'] = '�Ѵ������Ĥ���ޤ���';
	$lang['strsourceencoding'] = '�Ѵ������󥳡���';
	$lang['strtargetencoding'] = '�Ѵ��襨�󥳡���';
	
	// Languages
	$lang['strlanguages'] = '����';
	$lang['strnolanguages'] = '���줬¸�ߤ��ޤ���';
$lang['strtrusted'] = 'Trusted';
	
	// Info
	$lang['strnoinfo'] = 'ͭ���ʾ��󤬤���ޤ���';
	$lang['strreferringtables'] = '���ȥơ��֥�';
	$lang['strparenttables'] = '�ƥơ��֥�';
	$lang['strchildtables'] = '�ҥơ��֥�';

	// Aggregates
	$lang['straggregate']  =  '����';
	$lang['straggregates'] = '����';
	$lang['strnoaggregates'] = '���פ�����ޤ���';
	$lang['stralltypes'] = '(���٤Ƥμ���)';
	$lang['strcreateaggregate']  =  '���פ��������';
	$lang['straggrbasetype']  =  '���ϥǡ����μ���';
	$lang['straggrsfunc']  =  '�������ܴؿ�';
	$lang['straggrstype']  =  '���֥ǡ����μ���';
	$lang['straggrffunc']  =  '��λ�ؿ�';
	$lang['straggrinitcond']  =  '�������';
	$lang['straggrsortop']  =  '���������';
	$lang['strconfdropaggregate']  =  '�����˽��ס�%s�פ��˴����ޤ���?';
	$lang['straggregatedropped']  =  '���פ��˴����ޤ�����';
	$lang['straggregatedroppedbad']  =  '���פ��˴��˼��Ԥ��ޤ�����';
	$lang['straggraltered']  =  '���פ��ѹ����ޤ�����';
	$lang['straggralteredbad']  =  '���פ��ѹ��˼��Ԥ��ޤ�����';
	$lang['straggrneedsname']  =  '���פ�̾������ꤷ�ʤ���Фʤ�ޤ���';
	$lang['straggrneedsbasetype']  =  '���פ����ϥǡ����μ������ꤷ�ʤ���Фʤ�ޤ���';
	$lang['straggrneedssfunc']  =  '���פϾ������ܴؿ���̾������ꤷ�ʤ���Фʤ�ޤ���';
	$lang['straggrneedsstype']  =  '���פξ����ͤΥǡ����μ������ꤷ�ʤ���Фʤ�ޤ���';
	$lang['straggrcreated']  =  '���פ�������ޤ�����';
	$lang['straggrcreatedbad']  =  '���פκ����˼��Ԥ��ޤ�����';
	$lang['straggrshowall']  =  '���٤Ƥν��פ�ɽ������';

	// Operator Classes
	$lang['stropclasses'] = '�黻�ҥ��饹';
	$lang['strnoopclasses'] = '�黻�ҥ��饹�����Ĥ���ޤ���';
	$lang['straccessmethod'] = '����������ˡ';

	// Stats and performance
	$lang['strrowperf'] = '�ԥѥե����ޥ�';
	$lang['strioperf'] = 'I/O �ѥե����ޥ�';
	$lang['stridxrowperf'] = '����ǥå����ԥѥե����ޥ�';
	$lang['stridxioperf'] = '����ǥå��� I/O �ѥե����ޥ�';
	$lang['strpercent'] = '%';
	$lang['strsequential'] = '�������󥷥��';
	$lang['strscan'] = '����';
	$lang['strread'] = '�ɹ�';
	$lang['strfetch'] = '����';
	$lang['strheap'] = '�ҡ���';
	$lang['strtoast'] = 'TOAST';
	$lang['strtoastindex'] = 'TOAST ����ǥå���';
	$lang['strcache'] = '����å���';
	$lang['strdisk'] = '�ǥ�����';
	$lang['strrows2'] = '��';

	// Tablespaces
	$lang['strtablespace'] = '�ơ��֥����';
	$lang['strtablespaces']  =  '�ơ��֥����';
	$lang['strshowalltablespaces'] = '���٤ƤΥơ��֥륹�ڡ�����ɽ������';
	$lang['strnotablespaces'] = '�ơ��֥���֤����Ĥ���ޤ���';
	$lang['strcreatetablespace'] = '�ơ��֥���֤��������';
	$lang['strlocation'] = '���������';
	$lang['strtablespaceneedsname'] = '�ơ��֥����̾����ꤹ��ɬ�פ�����ޤ���';
	$lang['strtablespaceneedsloc'] = '�ơ��֥���ֺ����򤹤�ǥ��쥯�ȥ����ꤹ��ɬ�פ�����ޤ���';
	$lang['strtablespacecreated'] = '�ơ��֥���֤�������ޤ�����';
	$lang['strtablespacecreatedbad'] = '�ơ��֥���֤κ����˼��Ԥ��ޤ�����';
	$lang['strconfdroptablespace'] = '�����˥ơ��֥���֡�%s�פ��˴����ޤ���?';
	$lang['strtablespacedropped'] = '�ơ��֥���֤��˴����ޤ�����';
	$lang['strtablespacedroppedbad'] = '�ơ��֥���֤��˴��˼��Ԥ��ޤ�����';
	$lang['strtablespacealtered'] = '�ơ��֥���֤��ѹ����ޤ�����';
	$lang['strtablespacealteredbad'] = '�ơ��֥���֤��ѹ��˼��Ԥ��ޤ�����';

	// Slony clusters
	$lang['strcluster']  =  '���饹����';
	$lang['strnoclusters']  =  '���饹���������Ĥ���ޤ���';
	$lang['strconfdropcluster']  =  '�����˥��饹������%s�פ��˴����ޤ���?';
	$lang['strclusterdropped']  =  '���饹�������˴����ޤ�����';
	$lang['strclusterdroppedbad']  =  '���饹�������˴��˼��Ԥ��ޤ�����';
	$lang['strinitcluster']  =  '���饹��������������';
	$lang['strclustercreated']  =  '���饹�������������ޤ�����';
	$lang['strclustercreatedbad']  =  '���饹�����ν�����˼��Ԥ��ޤ�����';
	$lang['strclusterneedsname']  =  '���饹������̾����Ϳ����ɬ�פ�����ޤ���';
	$lang['strclusterneedsnodeid']  =  '������Ρ��ɤ� ID ��Ϳ����ɬ�פ�����ޤ���';
	
	// Slony nodes
	$lang['strnodes']  =  '�Ρ���';
	$lang['strnonodes']  =  '�Ρ��ɤ����Ĥ���ޤ���';
	$lang['strcreatenode']  =  '�Ρ��ɤ��������';
	$lang['strid']  =  'ID';
	$lang['stractive']  =  '�����ƥ���';
	$lang['strnodecreated']  =  '�Ρ��ɤ�������ޤ�����';
	$lang['strnodecreatedbad']  =  '�Ρ��ɤκ����˼��Ԥ��ޤ�����';
	$lang['strconfdropnode']  =  '�����˥Ρ��ɡ�%s�פ��˴����ޤ���?';
	$lang['strnodedropped']  =  '�Ρ��ɤ��˴����ޤ�����';
	$lang['strnodedroppedbad']  =  '�Ρ��ɤ��˴��˼��Ԥ��ޤ�����';
	$lang['strfailover']  =  '�ե����륪���С�����';
	$lang['strnodefailedover']  =  '�Ρ��ɤ�ե����륪���С����ޤ�����';
	$lang['strnodefailedoverbad']  =  '�Ρ��ɤΥե����륪���С��˼��Ԥ��ޤ�����';
	$lang['strstatus']  =  '����';
$lang['strhealthy']  =  'Healthy';
$lang['stroutofsync']  =  'Out of Sync';
	$lang['strunknown']  =  '����';	

	// Slony paths	
	$lang['strpaths']  =  '�ѥ�';
	$lang['strnopaths']  =  '�ѥ������Ĥ���ޤ���';
	$lang['strcreatepath']  =  '�ѥ����������';
	$lang['strnodename']  =  '�Ρ���̾';
	$lang['strnodeid']  =  '�Ρ��� ID';
	$lang['strconninfo']  =  '��³ʸ����';
	$lang['strconnretry']  =  '��³�κƼ¹ԤޤǤ��ÿ�';
	$lang['strpathneedsconninfo']  =  '�ѥ�����³ʸ�����Ϳ����ɬ�פ�����ޤ���';
	$lang['strpathneedsconnretry']  =  '��³�κƼ¹ԤޤǤ��ÿ���Ϳ����ɬ�פ�����ޤ���';
	$lang['strpathcreated']  =  '�ѥ���������ޤ�����';
	$lang['strpathcreatedbad']  =  '�ѥ��κ����˼��Ԥ��ޤ�����';
	$lang['strconfdroppath']  =  '�����˥ѥ���%s�פ��˴����ޤ���?';
	$lang['strpathdropped']  =  '�ѥ����˴����ޤ�����';
	$lang['strpathdroppedbad']  =  '�ѥ����˴��˼��Ԥ��ޤ�����';

	// Slony listens
	$lang['strlistens']  =  '��å���';
	$lang['strnolistens']  =  '��å��󤬸��Ĥ���ޤ���';
	$lang['strcreatelisten']  =  '��å�����������';
	$lang['strlistencreated']  =  '��å����������ޤ�����';
	$lang['strlistencreatedbad']  =  '��å���κ����˼��Ԥ��ޤ�����';
	$lang['strconfdroplisten']  =  '�����˥�å����%s�פ��˴����ޤ���?';
	$lang['strlistendropped']  =  '��å�����˴����ޤ�����';
	$lang['strlistendroppedbad']  =  '��å�����˴��˼��Ԥ��ޤ�����';

	// Slony replication sets
	$lang['strrepsets']  =  '��ץꥱ������󥻥å�';
	$lang['strnorepsets']  =  '��ץꥱ������󥻥åȤ����Ĥ���ޤ���';
	$lang['strcreaterepset']  =  '��ץꥱ������󥻥åȤ��������';
	$lang['strrepsetcreated']  =  '��ץꥱ������󥻥åȤ�������ޤ�����';
	$lang['strrepsetcreatedbad']  =  '��ץꥱ������󥻥åȤκ����˼��Ԥ��ޤ�����';
	$lang['strconfdroprepset']  =  '�����˥�ץꥱ������󥻥åȡ�%s�פ��˴����ޤ���?';
	$lang['strrepsetdropped']  =  '��ץꥱ������󥻥åȤ��˴����ޤ�����';
	$lang['strrepsetdroppedbad']  =  '��ץꥱ������󥻥åȤ��˴��˼��Ԥ��ޤ�����';
	$lang['strmerge']  =  '���礹��';
	$lang['strmergeinto']  =  '������';
	$lang['strrepsetmerged']  =  '��ץꥱ������󥻥åȤ����礷�ޤ�����';
	$lang['strrepsetmergedbad']  =  '��ץꥱ������󥻥åȤ�����˼��Ԥ��ޤ�����';
	$lang['strmove']  =  '��ư����';
	$lang['strneworigin']  =  '�������ꥸ��';
	$lang['strrepsetmoved']  =  '��ץꥱ������󥻥åȤ��ư���ޤ�����';
	$lang['strrepsetmovedbad']  =  '��ץꥱ������󥻥åȤΰ�ư�˼��Ԥ��ޤ�����';
	$lang['strnewrepset']  =  '������ץꥱ������󥻥å�';
	$lang['strlock']  =  '��å�';
	$lang['strlocked']  =  '��å���';
	$lang['strunlock']  =  '��å����';
	$lang['strconflockrepset']  =  '�����˥�ץꥱ������󥻥åȡ�%s�פ��å����ޤ���?';
	$lang['strrepsetlocked']  =  '��ץꥱ������󥻥åȤ��å����ޤ�����';
	$lang['strrepsetlockedbad']  =  '��ץꥱ������󥻥åȤΥ�å��˼��Ԥ��ޤ�����';
	$lang['strconfunlockrepset']  =  '�����˥�ץꥱ������󥻥åȡ�%s�פΥ�å��������ޤ���?';
	$lang['strrepsetunlocked']  =  '��ץꥱ������󥻥åȤ������ޤ�����';
	$lang['strrepsetunlockedbad']  =  '��ץꥱ������󥻥åȤβ���˼��Ԥ��ޤ�����';
	$lang['stronlyonnode']  =  '�Ρ��ɤǤΤ�';
	$lang['strddlscript']  =  'DDL ������ץ�';
	$lang['strscriptneedsbody']  =  '���٤ƤΥΡ��ɾ�Ǽ¹Ԥ���륹����ץȤ��󶡤��ʤ���Фʤ�ޤ���';
	$lang['strscriptexecuted']  =  '��ץꥱ������󥻥åȤ� DDL ������ץȤ�¹Ԥ��ޤ�����';
	$lang['strscriptexecutedbad']  =  '��ץꥱ������󥻥åȤǤ� DDL ������ץȤμ¹Ԥ˼��Ԥ��ޤ�����';
	$lang['strtabletriggerstoretain']  =  '���Υȥꥬ���� Slony �ˤ��̵���ˤʤ�ʤ��Ǥ��礦:';

	// Slony tables in replication sets
	$lang['straddtable']  =  '�ơ��֥���ɲä���';
	$lang['strtableneedsuniquekey']  =  '�ɲä����ơ��֥�ϥץ饤�ޥ꤫��ˡ����������׵ᤷ�ޤ���';
	$lang['strtableaddedtorepset']  =  '��ץꥱ������󥻥åȤ˥ơ��֥���ɲä��ޤ�����';
	$lang['strtableaddedtorepsetbad']  =  '��ץꥱ������󥻥åȤؤΥơ��֥��ɲä˼��Ԥ��ޤ�����';
	$lang['strconfremovetablefromrepset']  =  '�����˥�ץꥱ������󥻥åȡ�%s�פ���ơ��֥��%s�פ������ޤ���?';
	$lang['strtableremovedfromrepset']  =  '��ץꥱ������󥻥åȤ���ơ��֥�������ޤ�����';
	$lang['strtableremovedfromrepsetbad']  =  '��ץꥱ������󥻥åȤ���ơ��֥�κ���˼��Ԥ��ޤ�����';

	// Slony sequences in replication sets
	$lang['straddsequence']  =  '�������󥹤��ɲä���';
	$lang['strsequenceaddedtorepset']  =  '��ץꥱ������󥻥åȤ˥������󥹤��ɲä��ޤ�����';
	$lang['strsequenceaddedtorepsetbad']  =  '��ץꥱ������󥻥åȤؤΥ������󥹤��ɲä˼��Ԥ��ޤ�����';
	$lang['strconfremovesequencefromrepset']  =  '�����˥�ץꥱ������󥻥åȡ�%s�פ��饷�����󥹡�%s�פ������ޤ���?';
	$lang['strsequenceremovedfromrepset']  =  '��ץꥱ������󥻥åȤ��饷�����󥹤������ޤ�����';
	$lang['strsequenceremovedfromrepsetbad']  =  '��ץꥱ������󥻥åȤ��饷�����󥹤κ���˼��Ԥ��ޤ�����';

	// Slony subscriptions
	$lang['strsubscriptions']  =  '���֥�����ץ����';
	$lang['strnosubscriptions']  =  '���֥�����ץ���󤬸��Ĥ���ޤ���';

	// Miscellaneous
	$lang['strtopbar'] = '�����С� %2$s �Υݡ����ֹ� %3$s �Ǽ¹���� %1$s ����³�� -- �桼������%4$s�פȤ��ƥ�������';
	$lang['strtimefmt'] = 'Y ǯ n �� j �� G:i';
	$lang['strhelp'] = '�إ��';
	$lang['strhelpicon'] = '?';
	$lang['strhelppagebrowser']  =  '�إ�ץڡ����֥饦����';
	$lang['strselecthelppage']  =  '�إ�ץڡ���������Ǥ�������';
	$lang['strinvalidhelppage']  =  '̵���ʥإ�ץڡ����Ǥ���';
	$lang['strlogintitle'] = '%s �˥�����';
	$lang['strlogoutmsg'] = '%s ��������Ȥ��ޤ�����';
	$lang['strloading'] = '�ɤ߹�����...';
	$lang['strerrorloading'] = '�ɤ߹�����Υ��顼�Ǥ���';
	$lang['strclicktoreload'] = '����å��Ǻ��ɤ߹���';

	// Autovacuum
	$lang['strautovacuum']  =  '�����ȥХ��塼��'; 
	$lang['strturnedon']  =  '����ˤ���'; 
	$lang['strturnedoff']  =  '���դˤ���'; 
$lang['strenabled']  =  'Enabled'; 
	$lang['strvacuumbasethreshold']  =  '���ͤ˴�Ť����Х��塼��'; 
$lang['strvacuumscalefactor']  =  'Vacuum Scale Factor';  
	$lang['stranalybasethreshold']  =  '���ͤ˴�Ť�������';  
$lang['stranalyzescalefactor']  =  'Analyze Scale Factor'; 
$lang['strvacuumcostdelay']  =  'Vacuum Cost Delay'; 
$lang['strvacuumcostlimit']  =  'Vacuum Cost Limit';  

	// Table-level Locks
	$lang['strlocks']  =  '��å�';
	$lang['strtransaction']  =  '�ȥ�󥶥������ ID';
	$lang['strvirtualtransaction']  =  '���ۥȥ�󥶥������ ID';
	$lang['strprocessid']  =  '�ץ��� ID';
	$lang['strmode']  =  '��å��⡼��';
$lang['strislockheld']  =  'Is lock held?';

	// Prepared transactions
	$lang['strpreparedxacts']  =  '�ץ�ڥ����Ѥ����ȥ�󥶥������';
	$lang['strxactid']  =  '�ȥ�󥶥������ ID';
	$lang['strgid']  =  '���� ID';
	
	// Fulltext search
	$lang['strfulltext']  =  '��ʸ�ƥ����ȸ���';
	$lang['strftsconfig']  =  'FTS ����';
    $lang['strftsconfigs']  =  '����';
	$lang['strftscreateconfig']  =  'FTS ����κ���';
	$lang['strftscreatedict']  =  '������������';
	$lang['strftscreatedicttemplate']  =  '����Υƥ�ץ졼�Ȥ��������';
	$lang['strftscreateparser']  =  '�ѡ��������������';
	$lang['strftsnoconfigs']  =  'FTS ���꤬���Ĥ���ޤ���';
	$lang['strftsconfigdropped']  =  'FTS ������˴����ޤ�����';
	$lang['strftsconfigdroppedbad']  =  'FTS ������˴��˼��Ԥ��ޤ�����';
	$lang['strconfdropftsconfig']  =  '������ FTS �����%s�פ��˴����ޤ���?';
	$lang['strconfdropftsdict']  =  '������ FTS �����%s�פ��˴����ޤ���?';
	$lang['strconfdropftsmapping']  =  '������ FTS �����%s�פΥޥåס�%s�פ��˴����ޤ���?';
	$lang['strftstemplate']  =  '�ƥ�ץ졼��';
	$lang['strftsparser']  =  '�ѡ�����';
	$lang['strftsconfigneedsname']  =  'FTS ����ˤ�̾������ꤹ��ɬ�פ�����ޤ���';
	$lang['strftsconfigcreated']  =  'FTS �����������ޤ�����';
	$lang['strftsconfigcreatedbad']  =  'FTS ����κ����˼��Ԥ��ޤ�����';
$lang['strftsmapping']  =  'Mapping';
	$lang['strftsdicts']  =  '����';
	$lang['strftsdict']  =  '����';
	$lang['strftsemptymap']  =  'FTS ����ޥåפ����Ǥ���';
$lang['strftswithmap']  =  'With map';
$lang['strftsmakedefault']  =  'Make default for given locale';
	$lang['strftsconfigaltered']  =  'FTS ������ѹ����ޤ�����';
	$lang['strftsconfigalteredbad']  =  'FTS ������ѹ��˼��Ԥ��ޤ�����';
	$lang['strftsconfigmap']  =  'FTS ����ޥå�';
	$lang['strftsparsers']  =  'FTS �ѡ�����';
	$lang['strftsnoparsers']  =  '���ѤǤ��� FTS �ѡ�����������ޤ���';
	$lang['strftsnodicts']  =  '���ѤǤ��� FTS ���񤬤���ޤ���';
	$lang['strftsdictcreated']  =  'FTS �����������ޤ�����';
	$lang['strftsdictcreatedbad']  =  'FTS ����κ����˼��Ԥ��ޤ���';
$lang['strftslexize']  =  'Lexize';
$lang['strftsinit']  =  'Init';
	$lang['strftsoptionsvalues']  =  '���ץ�������';
	$lang['strftsdictneedsname']  =  'FTS �����̾������ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strftsdictdropped']  =  'FTS ������˴����ޤ�����';
	$lang['strftsdictdroppedbad']  =  'FTS ������˴��˼��Ԥ��ޤ�����';
	$lang['strftsdictaltered']  =  'FTS ������ѹ����ޤ�����';
	$lang['strftsdictalteredbad']  =  'FTS ������ѹ��˼��Ԥ��ޤ�����';
	$lang['strftsaddmapping']  =  '�����ޥåפ��ɲä���';
	$lang['strftsspecifymappingtodrop']  =  '�ޥåפ��˴��򤹤�ˤϾ��ʤ��Ȥ� 1 �Ļ��ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strftsspecifyconfigtoalter']  =  'FTS ������ѹ�����ˤϻ��ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strftsmappingdropped']  =  'FTS �ޥåפ��˴����ޤ�����';
	$lang['strftsmappingdroppedbad']  =  'FTS �ޥåפ��˴��˼��Ԥ��ޤ�����';
	$lang['strftsnodictionaries']  =  '���񤬸��Ĥ���ޤ���';
	$lang['strftsmappingaltered']  =  'FTS �ޥåפ��ѹ����ޤ�����';
	$lang['strftsmappingalteredbad']  =  'FTS �ޥåפ��ѹ��˼��Ԥ��ޤ�����';
	$lang['strftsmappingadded']  =  'FTS �ޥåפ��ɲä��ޤ�����';
	$lang['strftsmappingaddedbad']  =  'FTS �ޥåפ��ɲä˼��Ԥ��ޤ�����';
	$lang['strftsmappingdropped']  =  'FTS �ޥåפ��˴����ޤ�����';
	$lang['strftsmappingdroppedbad']  =  'FTS �ޥåפ��˴��˼��Ԥ��ޤ�����';
	$lang['strftstabconfigs']  =  '����';
	$lang['strftstabdicts']  =  '����';
	$lang['strftstabparsers']  =  '�ѡ�����';
    
    
?>
