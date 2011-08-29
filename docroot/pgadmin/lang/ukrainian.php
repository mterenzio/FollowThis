<?php

        /**
         * Ukrainian KOI8-U language file for phpPgAdmin. 
         * @maintainer Alex Rootoff [rootoff{AT}pisem.net]
         *
         *
         */

        // Language and character set
        $lang['applang'] = '����������';
        $lang['appcharset'] = 'KOI8-R';
        $lang['applocale'] = 'uk_UA';
          $lang['appdbencoding'] = 'KOI8';

        // Welcome  
        $lang['strintro'] = '������� ��� � phpPgAdmin.';
        $lang['strppahome'] = 'phpPgAdmin - ������� ���Ҧ���';
        $lang['strpgsqlhome'] = 'PostgreSQL - ������� ���Ҧ���';
        $lang['strpgsqlhome_url'] = 'http://www.postgresql.org/';
        $lang['strlocaldocs'] = 'PostgreSQL - ���������æ� (��������)';
        $lang['strreportbug'] = '�צ� ��� �������';
        $lang['strviewfaq'] = '�������� ������ FAQ';
        $lang['strviewfaq_url'] = 'http://phppgadmin.sourceforge.net/?page=faq';
        
        // Basic strings
        $lang['strlogin'] = '��Ǧ�';
        $lang['strloginfailed'] = '������������ ������';
        $lang['strlogindisallowed'] = '��Ǧ� ������������ �� ͦ������� �������';
        $lang['strserver'] = '������';
        $lang['strlogout'] = '�����Ť����æ�';
        $lang['strowner'] = '����������';
        $lang['straction'] = '��';
        $lang['stractions'] = '䦧';
        $lang['strname'] = '��"�';
        $lang['strdefinition'] = '����������';
        $lang['strproperties'] = '���������Ԧ';
        $lang['strbrowse'] = '�����������';
        $lang['strdrop'] = '��������';
        $lang['strdropped'] = '��������';
        $lang['strnull'] = 'Null';
        $lang['strnotnull'] = 'Not Null';
        $lang['strprev'] = '< �������.';
        $lang['strnext'] = '����. >';
        $lang['strfirst'] = '<< ������';
        $lang['strlast'] = '�����. >>';
        $lang['strfailed'] = '���������';
        $lang['strcreate'] = '��������';
        $lang['strcreated'] = '��������';
        $lang['strcomment'] = '��������';
        $lang['strlength'] = '�������';
        $lang['strdefault'] = '�� ������������';
        $lang['stralter'] = '�ͦ����';
        $lang['strok'] = '������';
        $lang['strcancel'] = '���ͦ����';
        $lang['strsave'] = '��������';
        $lang['strreset'] = '�������';
        $lang['strinsert'] = '��������';
        $lang['strselect'] = '�������';
        $lang['strdelete'] = '��������';
        $lang['strupdate'] = '�������';
        $lang['strreferences'] = '���������';
        $lang['stryes'] = '���';
        $lang['strno'] = '�';
        $lang['strtrue'] = '������';
        $lang['strfalse'] = '�����';
        $lang['stredit'] = '����������';
        $lang['strcolumns'] = '��������';
        $lang['strrows'] = '�����(�/��)';
        $lang['strrowsaff'] = '�����(�/��) �����������.';
        $lang['strobjects'] = '��"���(�/��)';
        $lang['strexample'] = '� �.�.';
        $lang['strback'] = '�����';         
        $lang['strqueryresults'] = '���������� ������';
        $lang['strshow'] = '��������';
        $lang['strempty'] = '��������';
        $lang['strlanguage'] = '����';
        $lang['strencoding'] = '���������';
        $lang['strvalue'] = '��������';
        $lang['strunique'] = '�Φ�������';
        $lang['strprimary'] = '���������';
        $lang['strexport'] = '�������';
        $lang['strimport'] = '������';
        $lang['strsql'] = 'SQL';
        $lang['strgo'] = '��������';
        $lang['stradmin'] = '�����̦���';
        $lang['strvacuum'] = '������������';
        $lang['stranalyze'] = '���̦������';
        $lang['strclusterindex'] = '��������������';
        $lang['strclustered'] = '��������������?';
        $lang['strreindex'] = '������������ ������';
        $lang['strrun'] = '��������';
        $lang['stradd'] = '������';
        $lang['strevent'] = '��Ħ�';
        $lang['strwhere'] = '��';
        $lang['strinstead'] = '������ ��ͦ���';
        $lang['strwhen'] = '����';
        $lang['strformat'] = '������';
        $lang['strdata'] = '���Φ';
        $lang['strconfirm'] = '����������';
        $lang['strexpression'] = '�����';
        $lang['strellipsis'] = '...';
        $lang['strexpand'] = '���������';
        $lang['strcollapse'] = '��������';
        $lang['strexplain'] = '��������';
        $lang['strexplainanalyze'] = '�������� ���̦�';
        $lang['strfind'] = '������';
        $lang['stroptions'] = '��æ�';
        $lang['strrefresh'] = '�������';
        $lang['strdownload'] = '�����������';
        $lang['strdownloadgzipped'] = '����������� ��Ȧ� gzip';
        $lang['strinfo'] = '�������Ԧ';
        $lang['stroids'] = 'OIDs';
        $lang['stradvanced'] = '���������';
        $lang['strvariables'] = '�ͦ�Φ';
        $lang['strprocess'] = '������';
        $lang['strprocesses'] = '�������';
        $lang['strsetting'] = '������������';
        $lang['streditsql'] = '���������� SQL';
        $lang['strruntime'] = '��� ���������: %s ����';
        $lang['strpaginate'] = '���������� ���Ҧ��� � ������������';
        $lang['struploadscript'] = '�� ����������� SQL-������:';
        $lang['strstarttime'] = '��� �������';
        $lang['strfile'] = '����';
        $lang['strfileimported'] = '���� �����������.';

        // Error handling
        $lang['strbadconfig'] = '��� config.inc.php �����Ҧ�. ��� ����Ȧ��� ������� ���� �� config.inc.php-dist.';
        $lang['strnotloaded'] = '���� �������æ� PHP �� Ц�����դ PostgreSQL. ��� ����Ȧ��� �������Ц������ PHP, ������������ �������� --with-pgsql ��� configure.';
        $lang['strbadschema'] = '�������� ����������� �����.';
        $lang['strbadencoding'] = '��������� ���������� ���� ��������� � ��ڦ �����.';
        $lang['strsqlerror'] = '������� SQL:';
        $lang['strinstatement'] = '� �������Ҧ:';
        $lang['strinvalidparam'] = '������������ �������� �������.';
        $lang['strnodata'] = '����� �� ��������.';
        $lang['strnoobjects'] = '��"��Ԧ� �� ��������.';
        $lang['strrownotunique'] = '����� �Φ�������� ������Ʀ������ ��� ����� ������.';
         $lang['strnoreportsdb'] = '�� �� �������� ���� ����� �צԦ�. ������� ��������� � ���̦ INSTALL.';
        $lang['strnouploads'] = '������������ ����� ���������.';
        $lang['strimporterror'] = '������� ��� ����������Φ.';
        $lang['strimporterrorline'] = '������� ������ ��� �������צ %s.';

        // Tables
        $lang['strtable'] = '�������';
        $lang['strtables'] = '�����æ';
        $lang['strshowalltables'] = '�������� �Ӧ �����æ';
        $lang['strnotables'] = '������� �� ��������.';
        $lang['strnotable'] = ' ������� �� ��������.';
        $lang['strcreatetable'] = '�������� �������';
        $lang['strtablename'] = '��"� �����æ';
        $lang['strtableneedsname'] = '��� ����Ȧ��� ��������� ��"� �����æ.';
        $lang['strtableneedsfield'] = '��� ����Ȧ��� ��������� ���������� ���� ����.';
        $lang['strtableneedscols'] = '��� ����Ȧ��� ������� ��������� ����� ������Ԧ�.';
        $lang['strtablecreated'] = '������� ��������.';
        $lang['strtablecreatedbad'] = '��������� �����æ ���������.';
        $lang['strconfdroptable'] = '�� ������Φ, �� ������� �������� ������� "%s"?';
        $lang['strtabledropped'] = '������� ��������.';
        $lang['strtabledroppedbad'] = '��������� �����æ ���������.';
        $lang['strconfemptytable'] = '�� ������Φ, �� ������� �������� ������� "%s"?';
        $lang['strtableemptied'] = '������� �������.';
        $lang['strtableemptiedbad'] = '�������� �����æ ���������.';
        $lang['strinsertrow'] = '������ �����';
        $lang['strrowinserted'] = '����� ������.';
        $lang['strrowinsertedbad'] = '��������� ������ ���������.';
        $lang['streditrow'] = '���������� �����';
        $lang['strrowupdated'] = '����� ��������.';
        $lang['strrowupdatedbad'] = '��������� ������ ���������.';
        $lang['strdeleterow'] = '�������� �����';
        $lang['strconfdeleterow'] = '�� ������Φ, �� ������� �������� �����?';
        $lang['strrowdeleted'] = '����� ��������.';
        $lang['strrowdeletedbad'] = '��������� ������ ���������.';
        $lang['strsaveandrepeat'] = '�������� � ���������';
        $lang['strfield'] = '����';
        $lang['strfields'] = '����';
        $lang['strnumfields'] = '�-�� ��̦�';
        $lang['strfieldneedsname'] = '��� ����Ȧ��� ������� ����';
        $lang['strselectallfields'] = '������� �Ӧ ����';
        $lang['strselectneedscol'] = '��� ����Ȧ��� ������� ���������� ���� �������';
        $lang['strselectunary'] = '������� �������� �� ����� ���� ��������.';
        $lang['straltercolumn'] = '�ͦ���� �������';
        $lang['strcolumnaltered'] = '������� �ͦ����.';
        $lang['strcolumnalteredbad'] = '�ͦ�� �������� ���������.';
        $lang['strconfdropcolumn'] = '�� ������Φ, �� ������� �������� ������� "%s" �����æ "%s"?';
        $lang['strcolumndropped'] = '������� ��������.';
        $lang['strcolumndroppedbad'] = '��������� �������� ���������.';
        $lang['straddcolumn'] = '������ �������';
        $lang['strcolumnadded'] = '������� ������.';
        $lang['strcolumnaddedbad'] = '��������� �������� ���������.';
        $lang['strdataonly'] = '������ ��Φ';
        $lang['strcascade'] = '��������';
        $lang['strtablealtered'] = '������� �ͦ����.';
        $lang['strtablealteredbad'] = '�ͦ�� �����æ ���������.';
        $lang['strdataonly'] = '���� ��Φ';
        $lang['strstructureonly'] = '���� ���������';
        $lang['strstructureanddata'] = '��������� � ��Φ';
        $lang['strtabbed'] = '����� ������æ�';
        $lang['strauto'] = '����';

        // Users
        $lang['struser'] = '����������';
        $lang['strusers'] = '���������ަ';
        $lang['strusername'] = '��"� �����������';
        $lang['strpassword'] = '������';
        $lang['strsuper'] = '���������������?';
        $lang['strcreatedb'] = '�������� ���� �����?';
        $lang['strexpires'] = '���ͦ� Ħ�';
        $lang['strsessiondefaults'] = '��æ� ������ �� �������������';
        $lang['strnousers'] = '����� ����� ���������ަ�.';
        $lang['struserupdated'] = '����������� ��������.';
        $lang['struserupdatedbad'] = '��������� ����������� ���������.';
        $lang['strshowallusers'] = '�������� �Ӧ� ���������ަ�';
        $lang['strcreateuser'] = '�������� �����������';
        $lang['struserneedsname'] = '�� �����Φ ������ ��"� �����������.';
        $lang['strusercreated'] = '����������� ��������.';
        $lang['strusercreatedbad'] = '��������� ����������� ���������.';
        $lang['strconfdropuser'] = '�� ������Φ, �� ������� �������� ����������� "%s"?';
        $lang['struserdropped'] = '����������� ��������.';
        $lang['struserdroppedbad'] = '��������� ����������� ���������.';
        $lang['straccount'] = '��̦����� �����';
        $lang['strchangepassword'] = '�ͦ���� ������';
        $lang['strpasswordchanged'] = '������ �ͦ����.';
        $lang['strpasswordchangedbad'] = '�ͦ�� ������ ���������.';
        $lang['strpasswordshort'] = '������ ����������.';
        $lang['strpasswordconfirm'] = '������ �� צ���צ��� Ц�����������.';

        // Groups
        $lang['strgroup'] = '�����';
        $lang['strgroups'] = '�����';
        $lang['strnogroup'] = '����� �� ��������.';
        $lang['strnogroups'] = '����ϧ ����� �� ��������.';
        $lang['strcreategroup'] = '�������� �����';
        $lang['strshowallgroups'] = '�������� �Ӧ �����';
        $lang['strgroupneedsname'] = '��� ����Ȧ��� ������� ����� �����.';
        $lang['strgroupcreated'] = '����� ��������.';
        $lang['strgroupcreatedbad'] = '��������� ����� ���������.';
        $lang['strconfdropgroup'] = '�� �������Φ, �� ������� �������� ����� "%s"?';
        $lang['strgroupdropped'] = '����� ��������.';
        $lang['strgroupdroppedbad'] = '��������� ����� ���������.';
        $lang['strmembers'] = '������˦�';
        $lang['straddmember'] = '������ ��������';
        $lang['strmemberadded'] = '�������� ������.';
        $lang['strmemberaddedbad'] = '��������� �������� ���������.';
        $lang['strdropmember'] = '�������� ��������';
        $lang['strconfdropmember'] = '�� �������Φ, �� ������� �������� �������� "%s" �� ����� "%s"?';
        $lang['strmemberdropped'] = '�������� ��������.';
        $lang['strmemberdroppedbad'] = '��������� �������� ���������.';

        // Privileges
        $lang['strprivilege'] = '���צ���';
        $lang['strprivileges'] = '���צ�ŧ';
        $lang['strnoprivileges'] = '��"��� �� ����Ħ� ���צ�����.';
        $lang['strgrant'] = '��������';
        $lang['strrevoke'] = '���������';
        $lang['strgranted'] = '���צ�ŧ �ͦ����.';
        $lang['strgrantfailed'] = '�ͦ�� ���צ�ŧ� ���������.';
        $lang['strgrantbad'] = '��� ����Ȧ��� ������� ���������� ������ ����������� �� ����� � ���������� ���� ���צ���.';
        $lang['stralterprivs'] = '�ͦ���� ���צ�ŧ';
        $lang['strgrantor'] = '�����';
        $lang['strasterisk'] = '*';

        // Databases
        $lang['strdatabase'] = '���� �����';
        $lang['strdatabases'] = '���� �����';
        $lang['strshowalldatabases'] = '�������� �Ӧ ���� �����';
        $lang['strnodatabase'] = '���� ����� �� ��������.';
        $lang['strnodatabases'] = '����ϧ ���� ����� �� ��������.';
        $lang['strcreatedatabase'] = '�������� ���� �����';
        $lang['strdatabasename'] = '��"� ���� �����';
        $lang['strdatabaseneedsname'] = '��� ����Ȧ��� �����ϧ�� ��"� ��ۦ� ��ڦ �����.';
        $lang['strdatabasecreated'] = '���� ����� ��������.';
        $lang['strdatabasecreatedbad'] = '��������� ���� ����� ���������.';
        $lang['strconfdropdatabase'] = '�� �������Φ, �� ������� �������� ���� ����� "%s"?';
        $lang['strdatabasedropped'] = ' ���� ����� ��������.';
        $lang['strdatabasedroppedbad'] = '��������� ���� ����� ���������.';
        $lang['strentersql'] = '���Ħ�� SQL-�����:';
        $lang['strsqlexecuted'] = 'SQL-����� ��������.';
        $lang['strvacuumgood'] = '�����æ� ���������� ���������.';
        $lang['strvacuumbad'] = '�����æ� ���������� ���������.';
        $lang['stranalyzegood'] = ' �����æ� ���̦�� ���������.';
        $lang['stranalyzebad'] = ' �����æ� ���̦�� ���������.';
        $lang['strreindexgood'] = '���Ŧ������æ� ���������.';
        $lang['strreindexbad'] = '���Ŧ������æ� ���������.';
        $lang['strfull'] = '���Φ���';
        $lang['strfreeze'] = '����������';
        $lang['strforce'] = '���������';

        // Views
        $lang['strview'] = '�����';
        $lang['strviews'] = '������';
        $lang['strshowallviews'] = '����������� �Ӧ ������';
        $lang['strnoview'] = '������ �� ��������.';
        $lang['strnoviews'] = '������� ������ �� ��������.';
        $lang['strcreateview'] = '�������� �����';
        $lang['strviewname'] = '��"� ������';
        $lang['strviewneedsname'] = '��� ����Ȧ��� ������� ��"� ������.';
        $lang['strviewneedsdef'] = '��� ����Ȧ��� ��������� �������� ������.';
        $lang['strviewneedsfields'] = '��� ����Ȧ��� ��������� �������� ��� ��¦��� � ��� �����.';
        $lang['strviewcreated'] = '����� ��������.';
        $lang['strviewcreatedbad'] = '��������� ������ ���������.';
        $lang['strconfdropview'] = '�� ������Φ, �� ������� �������� ����� "%s"?';
        $lang['strviewdropped'] = '����� ��������.';
        $lang['strviewdroppedbad'] = '��������� ������ ���������.';
        $lang['strviewupdated'] = '����� ��������.';
        $lang['strviewupdatedbad'] = '��������� ������ ���������.';
        $lang['strviewlink'] = '���"���Φ ���ަ';
        $lang['strviewconditions'] = '�������צ �����';
        $lang['strcreateviewwiz'] = '�������� �����, ������������� ��������';

        // Sequences
        $lang['strsequence'] = '���̦���Φ���';
        $lang['strsequences'] = ' ���̦������Ԧ';
        $lang['strshowallsequences'] = '�������� �Ӧ ���̦������Ԧ';
        $lang['strnosequence'] = '���̦���Φ��� �� ��������.';
        $lang['strnosequences'] = '����ϧ ���̦������Ԧ �� ��������.';
        $lang['strcreatesequence'] = '�������� ���̦���Φ���';
        $lang['strlastvalue'] = '�����Τ ��������';
        $lang['strincrementby'] = '�¦������� ��';
        $lang['strstartvalue'] = '��������� ��������';
        $lang['strmaxvalue'] = '����. ��������';
        $lang['strminvalue'] = '��. ��������';
        $lang['strcachevalue'] = '���ͦ� ����';
        $lang['strlogcount'] = 'Log Count';
        $lang['striscycled'] = '���������?';
        $lang['strsequenceneedsname'] = '��� ����Ȧ��� ������� ��"� ���̦������Ԧ.';
        $lang['strsequencecreated'] = '���̦���Φ��� ��������.';
        $lang['strsequencecreatedbad'] = '��������� ���̦������Ԧ ���������.';
        $lang['strconfdropsequence'] = '�� ������Φ, �� ������� �������� ���̦���Φ��� "%s"?';
        $lang['strsequencedropped'] = '���̦���Φ��� ��������.';
        $lang['strsequencedroppedbad'] = '��������� ���̦������Ԧ ���������.';
        $lang['strsequencereset'] = '���̦���Φ��� �������.';
        $lang['strsequenceresetbad'] = '�������� ���̦������Ԧ ���������.'; 

        // Indexes
        $lang['strindex'] = '������';
        $lang['strindexes'] = '�������';
        $lang['strindexname'] = '��"� �������';
        $lang['strshowallindexes'] = '�������� �Ӧ �������';
        $lang['strnoindex'] = '������ �� ��������.';
        $lang['strnoindexes'] = '������� ������� �� ��������.';
        $lang['strcreateindex'] = '�������� ������';
        $lang['strtabname'] = '��"� �����æ';
        $lang['strcolumnname'] = '��"� ��������';
        $lang['strindexneedsname'] = '��� ����Ȧ��� ������� ��"� �������';
        $lang['strindexneedscols'] = '��� ����Ȧ��� ������� ������� ˦��˦��� ������Ԧ�.';
        $lang['strindexcreated'] = '������ ��������.';
        $lang['strindexcreatedbad'] = '��������� ������� ���������.';
        $lang['strconfdropindex'] = '�� ������Φ, �� ������� �������� ������ "%s"?';
        $lang['strindexdropped'] = '������ ��������.';
        $lang['strindexdroppedbad'] = '��������� ������� ���������.';
        $lang['strkeyname'] = '��"� �����';
        $lang['struniquekey'] = '�Φ������� ����';
        $lang['strprimarykey'] = '��������� ����';
        $lang['strindextype'] = '��� �������';
        $lang['strindexname'] = '��"� �������';
        $lang['strtablecolumnlist'] = '������Ԧ� � �����æ';
        $lang['strindexcolumnlist'] = '������Ԧ� � �����Ӧ';
        $lang['strconfcluster'] = '�� ������Φ, �� ������� �������������� "%s"?';
        $lang['strclusteredgood'] = '����������æ� ���������.';
        $lang['strclusteredbad'] = '����������æ� ���������.';

        // Rules
        $lang['strrules'] = '�������';
        $lang['strrule'] = '�������';
        $lang['strshowallrules'] = '�������� �Ӧ �������';
        $lang['strnorule'] = '������� �� ��������.';
        $lang['strnorules'] = '������� ������� �� ��������.';
        $lang['strcreaterule'] = '�������� �������';
        $lang['strrulename'] = '��"� �������';
        $lang['strruleneedsname'] = '��� ����Ȧ��� ������� ��"� �������.';
        $lang['strrulecreated'] = '������� ��������.';
        $lang['strrulecreatedbad'] = '��������� ������� ���������.';
        $lang['strconfdroprule'] = '�� ������Φ, �� ������� �������� ������� "%s" � "%s"?';
        $lang['strruledropped'] = '������� ��������.';
        $lang['strruledroppedbad'] = '��������� ������� ���������.';

        // Constraints
        $lang['strconstraints'] = '���������';
        $lang['strshowallconstraints'] = '�������� �Ӧ ���������';
        $lang['strnoconstraints'] = '������� ��������� �� ��������.';
        $lang['strcreateconstraint'] = '�������� ���������';
        $lang['strconstraintcreated'] = '��������� ��������.';
        $lang['strconstraintcreatedbad'] = '��������� ��������� ���������.';
        $lang['strconfdropconstraint'] = '�� ������Φ, �� ������� �������� ��������� "%s" � "%s"?';
        $lang['strconstraintdropped'] = '��������� ��������.';
        $lang['strconstraintdroppedbad'] = '��������� ��������� ���������.';
        $lang['straddcheck'] = '������ ����צ���';
        $lang['strcheckneedsdefinition'] = '��������� ����צ��� ������դ ����������.';
        $lang['strcheckadded'] = '��������� ����צ��� ������.';
        $lang['strcheckaddedbad'] = '��������� ��������� ����צ��� ���������.';
        $lang['straddpk'] = '������ ��������� ����';
        $lang['strpkneedscols'] = '��������� ���� ������� ͦ����� ���� � ���� �������.';
        $lang['strpkadded'] = '��������� ���� ������.';
        $lang['strpkaddedbad'] = '��������� ���������� ����� ���������.';
        $lang['stradduniq'] = '������ �Φ������� ����';
        $lang['struniqneedscols'] = '�Φ������� ���� ������� ͦ����� ���� � ���� �������.';
        $lang['struniqadded'] = '�Φ������� ���� ������.';
        $lang['struniqaddedbad'] = '��������� �Φ�������� ����� ���������.';
        $lang['straddfk'] = '������ ���Φ�Φ� ����';
        $lang['strfkneedscols'] = '���Φ�Φ� ���� ������� ͦ����� ���� � ���� �������.';
        $lang['strfkneedstarget'] = '���Φ������ �����צ ����Ȧ��� ������� æ����� �������.';
        $lang['strfkadded'] = '���Φ�Φ� ���� ������.';
        $lang['strfkaddedbad'] = '��������� ���Φ������ ����� ���������.';
        $lang['strfktarget'] = '������ �������';
        $lang['strfkcolumnlist'] = '�������� � ���ަ';
        $lang['strondelete'] = 'ON DELETE';
        $lang['stronupdate'] = 'ON UPDATE';        

        // Functions
        $lang['strfunction'] = '����æ�';
        $lang['strfunctions'] = ' ����æ�';
        $lang['strshowallfunctions'] = '�������� �Ӧ ����æ�';
        $lang['strnofunction'] = '����æ� �� ��������.';
        $lang['strnofunctions'] = '����ϧ ����æ� �� ��������.';
        $lang['strcreatefunction'] = '�������� ����æ�';
        $lang['strfunctionname'] = '��"� ����æ�';
        $lang['strreturns'] = '���������, �� ��������';
        $lang['strarguments'] = '���������';
        $lang['strproglanguage'] = '���� �������������';
        $lang['strproglanguage'] = '����';
        $lang['strfunctionneedsname'] = '��� ����Ȧ��� ������� ��"� ����æ�.';
        $lang['strfunctionneedsdef'] = '��� ����Ȧ��� ��������� ����æ�.';
        $lang['strfunctioncreated'] = '����æ� ��������.';
        $lang['strfunctioncreatedbad'] = '��������� ����æ� ���������.';
        $lang['strconfdropfunction'] = '�� ������Φ, �� ������� �������� ����æ� "%s"?';
        $lang['strfunctiondropped'] = '����æ� ��������.';
        $lang['strfunctiondroppedbad'] = '��������� ����æ� ���������.';
        $lang['strfunctionupdated'] = '����æ� ��������.';
        $lang['strfunctionupdatedbad'] = '��������� ����æ� ���������.';

        // Triggers
        $lang['strtrigger'] = '�Ҧ���';
        $lang['strtriggers'] = ' �Ҧ����';
        $lang['strshowalltriggers'] = '�������� �Ӧ �Ҧ����';
        $lang['strnotrigger'] = '�Ҧ��� �� ��������.';
        $lang['strnotriggers'] = '������� �Ҧ���� �� ��������.';
        $lang['strcreatetrigger'] = '�������� �Ҧ���';
        $lang['strtriggerneedsname'] = '��� ����Ȧ��� ������� ��"� �Ҧ����.';
        $lang['strtriggerneedsfunc'] = '��� ����Ȧ��� ��������� ����æ� �Ҧ����.';
        $lang['strtriggercreated'] = '�Ҧ��� ��������.';
        $lang['strtriggercreatedbad'] = '��������� �Ҧ���� ���������.';
        $lang['strconfdroptrigger'] = '�� ������Φ, �� �������� �������� �Ҧ��� "%s" �� "%s"?';
        $lang['strtriggerdropped'] = '�Ҧ��� ��������.';
        $lang['strtriggerdroppedbad'] = '��������� �Ҧ���� ���������.';
        $lang['strtriggeraltered'] = '�Ҧ��� �ͦ����.';
        $lang['strtriggeralteredbad'] = '�ͦ�� �Ҧ���� ���������.';

        // Types
        $lang['strtype'] = '��� �����';
        $lang['strtypes'] = '���� �����';
        $lang['strshowalltypes'] = '�������� �Ӧ ���� �����';
        $lang['strnotype'] = '��� ����� �� ��������.';
        $lang['strnotypes'] = '������� ���� ����� �� ��������.';
        $lang['strcreatetype'] = '�������� ��� �����';
        $lang['strtypename'] = '��"� ���� �����';
        $lang['strinputfn'] = '����æ� �����';
        $lang['stroutputfn'] = '����æ� ������';
        $lang['strpassbyval'] = '�������� �� ���������?';
        $lang['stralignment'] = '��Ҧ��������';
        $lang['strelement'] = '�������';
        $lang['strdelimiter'] = '���Ħ�����';
        $lang['strstorage'] = '���Ҧ�����';
        $lang['strtypeneedsname'] = '��� ����Ȧ��� ������� ��"� ���� �����.';
        $lang['strtypeneedslen'] = '��� ����Ȧ��� ������� ���ͦ� ��� ���� �����.';
        $lang['strtypecreated'] = '��� ����� ��������.';
        $lang['strtypecreatedbad'] = '��������� ���� ����� ���������.';
        $lang['strconfdroptype'] = '�� ������Φ, �� ������� �������� ��� ����� "%s"?';
        $lang['strtypedropped'] = '��� ����� ��������.';
        $lang['strtypedroppedbad'] = '��������� ���� ����� ���������.';

        // Schemas
        $lang['strschema'] = '�����';
        $lang['strschemas'] = '�����';
        $lang['strshowallschemas'] = '�������� �Ӧ �����';
        $lang['strnoschema'] = '����� �� ��������.';
        $lang['strnoschemas'] = '����ϧ ����� �� ��������.';
        $lang['strcreateschema'] = '�������� �����';
        $lang['strschemaname'] = '��"� �����';
        $lang['strschemaneedsname'] = '��� ����Ȧ��� ������� ��"� �����.';
        $lang['strschemacreated'] = '����� ��������.';
        $lang['strschemacreatedbad'] = '��������� ����� ���������.';
        $lang['strconfdropschema'] = '�� ������Φ, �� ������� �������� ����� "%s"?';
        $lang['strschemadropped'] = '����� ��������.';
        $lang['strschemadroppedbad'] = '��������� ����� ���������.';
        $lang['strschemaaltered'] = '����� ��������.';
        $lang['strschemaalteredbad'] = '��������� ����� ���������.';

        // Reports
        $lang['strreport'] = '�צ�';
        $lang['strreports'] = '�צ��';
        $lang['strshowallreports'] = '�������� �Ӧ �צ��';
        $lang['strnoreports'] = '�צԦ� �����.';
        $lang['strcreatereport'] = '�������� �צ�';
        $lang['strreportdropped'] = '�צ� ��������.';
        $lang['strreportdroppedbad'] = '��������� �צ�� ���������.';
        $lang['strconfdropreport'] = '�� ������Φ, �� �������� �������� �צ� "%s"?';
        $lang['strreportneedsname'] = '��� ����Ȧ��� ������� ��"� �צ��.';
        $lang['strreportneedsdef'] = '��� ����Ȧ��� ������� SQL-����� ��� ������ �צ��.';
        $lang['strreportcreated'] = '�צ� ���������.';
        $lang['strreportcreatedbad'] = '���������� �צ�� ���������.';

        // Domains
        $lang['strdomain'] = '�����';
        $lang['strdomains'] = '������';
        $lang['strshowalldomains'] = '�������� �Ӧ ������';
        $lang['strnodomains'] = '������� ������ �� ��������.';
        $lang['strcreatedomain'] = '�������� �����';
        $lang['strdomaindropped'] = '����� ��������.';
        $lang['strdomaindroppedbad'] = '��������� ������ ���������.';
        $lang['strconfdropdomain'] = '�� ������Φ, �� ������� �������� ����� "%s"?';
        $lang['strdomainneedsname'] = '��� ����Ȧ��� ������� ��"� ������.';
        $lang['strdomaincreated'] = '����� ��������.';
        $lang['strdomaincreatedbad'] = '��������� ������ ���������.';        
        $lang['strdomainaltered'] = '����� �ͦ����.';
        $lang['strdomainalteredbad'] = '�ͦ�� ������ ���������.';        

        // Operators
        $lang['stroperator'] = '��������';
        $lang['stroperators'] = '���������';
        $lang['strshowalloperators'] = '�������� �Ӧ ���������';
        $lang['strnooperator'] = '�������� �� ��������.';
        $lang['strnooperators'] = '�������Ҧ� �� ��������.';
        $lang['strcreateoperator'] = '�������� ��������';
        $lang['strleftarg'] = '��� ̦���� ���������';
        $lang['strrightarg'] = '��� ������� ���������';
        $lang['strcommutator'] = '������������';
        $lang['strnegator'] = '�����������';
        $lang['strrestrict'] = '�����������';
        $lang['strjoin'] = '��"�������';
        $lang['strhashes'] = '���������';
        $lang['strmerges'] = '��"�������';
        $lang['strleftsort'] = '���������� �� ̦���';
        $lang['strrightsort'] = '���������� �� ������';
        $lang['strlessthan'] = '�����';
        $lang['strgreaterthan'] = '�����';
        $lang['stroperatorneedsname'] = '��� ����Ȧ��� ������� ����� ���������.';
        $lang['stroperatorcreated'] = '�������� ��������';
        $lang['stroperatorcreatedbad'] = '��������� ��������� ���������.';
        $lang['strconfdropoperator'] = '�� ������Φ, �� �������� �������� �������� "%s"?';
        $lang['stroperatordropped'] = '�������� ��������.';
        $lang['stroperatordroppedbad'] = '��������� ��������� ���������.';

        // Casts
        $lang['strcasts'] = '�ڦ�æ';
        $lang['strnocasts'] = '�ڦ�æ� �� ��������.';
        $lang['strsourcetype'] = '��� �������';
        $lang['strtargettype'] = '��� ��������';
        $lang['strimplicit'] = '�������';
        $lang['strinassignment'] = '� ���������Φ';
        $lang['strbinarycompat'] = '(�צ����� ��ͦ����)';
        
        // Conversions
        $lang['strconversions'] = '������������';
        $lang['strnoconversions'] = '����������� �� ��������.';
        $lang['strsourceencoding'] = '��������� �������';
        $lang['strtargetencoding'] = '��������� ��������';
        
        // Languages
        $lang['strlanguages'] = '����';
        $lang['strnolanguages'] = '��� �� ��������.';
        $lang['strtrusted'] = '����צ����';
        
        // Info
        $lang['strnoinfo'] = '����� �������ϧ �������æ�.';
        $lang['strreferringtables'] = '�����æ, �� �����������';
        $lang['strparenttables'] = '����˦���˦ �����æ';
        $lang['strchildtables'] = '��ަ�Φ �����æ';

        // Aggregates
        $lang['straggregates'] = '�������Φ ������';
        $lang['strnoaggregates'] = '���������� ����ڦ� �� ��������.';
        $lang['stralltypes'] = '(�Ӧ ����)';

        // Operator Classes
        $lang['stropclasses'] = '����� �������Ҧ�';
        $lang['strnoopclasses'] = '���Ӧ� �������Ҧ� �� ��������.';
        $lang['straccessmethod'] = '����� �������';

        // Stats and performance
        $lang['strrowperf'] = '����� ������';
        $lang['strioperf'] = '����� �����/������';
        $lang['stridxrowperf'] = '����� ������� ������';
        $lang['stridxioperf'] = '����� ������� �����/������';
        $lang['strpercent'] = '%';
        $lang['strsequential'] = '���̦������';
        $lang['strscan'] = '���������';
        $lang['strread'] = '������';
        $lang['strfetch'] = '���������';
        $lang['strheap'] = '�ͦ���';
        $lang['strtoast'] = 'TOAST';
        $lang['strtoastindex'] = 'TOAST ������';
        $lang['strcache'] = '���';
        $lang['strdisk'] = '����';
        $lang['strrows2'] = '������';

        // Miscellaneous
        $lang['strtopbar'] = '%s �����դ���� �� %s:%s -- �� ���Ť���������� �� "%s"';
        $lang['strtimefmt'] = ' j-m-Y  g:i';
        $lang['strhelp'] = '��������';

?>
