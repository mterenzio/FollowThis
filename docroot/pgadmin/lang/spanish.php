<?php

    /**
     * Spanish language file for phpPgAdmin.
     * @maintainer 2003-2006 Mart�n Marqu�s (martin@bugs.unl.edu.ar)
     * @maintainer 2006-2010 xzilla
     * @maintainer 2010 Miguel Useche (migueluseche@skatox.com)
     *
     */

	// Language and character set
	$lang['applang'] = 'Spanish';
	$lang['appcharset'] = 'ISO-8859-1';
	$lang['applocale'] = 'es_ES';
	$lang['appdbencoding'] = 'LATIN1';
	$lang['applangdir'] = 'ltr';

	// Bienvenido
	$lang['strintro'] = 'Bienvenido a phpPgAdmin.';
	$lang['strppahome'] = 'P�gina web de phpPgAdmin';
	$lang['strpgsqlhome'] = 'P�gina web de PostgreSQL';
	$lang['strpgsqlhome_url'] = 'http://www.postgresql.org/';
	$lang['strlocaldocs'] = 'Documentaci�n de PostgreSQL (local)';
	$lang['strreportbug'] = 'Reportar problemas';
	$lang['strviewfaq'] = 'Ver las Preguntas Frecuentes';
	$lang['strviewfaq_url'] = 'http://phppgadmin.sourceforge.net/?page=faq';

	// Basic strings
	$lang['strlogin'] = 'Autenticar';
	$lang['strloginfailed'] = 'Fall� la autenticaci�n';
	$lang['strlogindisallowed'] = 'Ingreso no autorizado';
	$lang['strserver'] = 'Servidor';
	$lang['strservers']  =  'Servidores';
	$lang['strgroupservers'] = 'Servidores en el grupo "%s"';
	$lang['strallservers'] = 'Todo los servidores';
	$lang['strintroduction']  =  'Introducci�n';
	$lang['strhost']  =  'Host';
	$lang['strport']  =  'Puerto';
	$lang['strlogout'] = 'Cerrar sesi�n';
	$lang['strowner'] = 'Due�o';
	$lang['straction'] = 'Acci�n';
	$lang['stractions'] = 'Acciones';
	$lang['strname'] = 'Nombre';
	$lang['strdefinition'] = 'Definici�n';
	$lang['strproperties'] = 'Propiedades';
	$lang['strbrowse'] = 'Examinar';
	$lang['strenable']  =  'Activar';
	$lang['strdisable']  =  'Desactivar';
	$lang['strdrop'] = 'Eliminar';
	$lang['strdropped'] = 'Eliminado';
	$lang['strnull'] = 'Nulo';
	$lang['strnotnull'] = 'No Nulo';
	$lang['strprev'] = 'Previo';
	$lang['strnext'] = 'Siguiente';
	$lang['strfirst'] = '<< Principio';
	$lang['strlast'] = 'Fin >>';
	$lang['strfailed'] = 'Fall�';
	$lang['strcreate'] = 'Crear';
	$lang['strcreated'] = 'Creado';
	$lang['strcomment'] = 'Comentario';
	$lang['strlength'] = 'Longitud';
	$lang['strdefault'] = 'Predeterminado';
	$lang['stralter'] = 'Modificar';
	$lang['strok'] = 'Aceptar';
	$lang['strcancel'] = 'Cancelar';
	$lang['strkill'] = 'Terminar';
	$lang['strac'] = 'Activar AutoCompletado';
	$lang['strsave'] = 'Guardar';
	$lang['strreset'] = 'Reestablecer';
	$lang['strrestart'] = 'Reiniciar';
	$lang['strinsert'] = 'Insertar';
	$lang['strselect'] = 'Seleccionar';
	$lang['strdelete'] = 'Eliminar';
	$lang['strupdate'] = 'Actualizar';
	$lang['strreferences'] = 'Referencia';
	$lang['stryes'] = 'Si';
	$lang['strno'] = 'No';
	$lang['strtrue'] = 'VERDADERO';
	$lang['strfalse'] = 'FALSO';
	$lang['stredit'] = 'Editar';
	$lang['strcolumn']  =  'Columna';
	$lang['strcolumns'] = 'Columnas';
	$lang['strrows'] = 'fila(s)';
	$lang['strrowsaff'] = 'fila(s) afectadas.';
	$lang['strobjects'] = 'objeto(s)';
	$lang['strback'] = 'Atr�s';
	$lang['strqueryresults'] = 'Resultado de la consulta';
	$lang['strshow'] = 'Mostrar';
	$lang['strempty'] = 'Vaciar';
	$lang['strlanguage'] = 'Idioma';
	$lang['strencoding'] = 'Codificaci�n';
	$lang['strvalue'] = 'Valor';
	$lang['strunique'] = '�nico';
	$lang['strprimary'] = 'Primaria';
	$lang['strexport'] = 'Exportar';
	$lang['strimport'] = 'Importar';
	$lang['strallowednulls']  =  'Permitir valores nulos (NULL)';
	$lang['strbackslashn']  =  '\N';
	$lang['stremptystring']  =  'Cadena o campo vacio';
	$lang['strsql'] = 'SQL';
	$lang['stradmin'] = 'Admin';
	$lang['strvacuum'] = 'Limpiar';
	$lang['stranalyze'] = 'Analizar';
	$lang['strclusterindex'] = 'Ordenar tabla';
	$lang['strclustered'] = '�Tabla Ordenada?';
	$lang['strreindex'] = 'Actualizar �ndices';
	$lang['strexecute'] = 'Ejecutar';
	$lang['stradd'] = 'Agregar';
	$lang['strevent'] = 'Evento';
	$lang['strwhere'] = 'D�nde';
	$lang['strinstead'] = 'Hacer en su lugar';
	$lang['strwhen'] = 'Cu�ndo';
	$lang['strformat'] = 'Formato';
	$lang['strdata'] = 'Dato';
	$lang['strconfirm'] = 'Confirmar';
	$lang['strexpression'] = 'Expresi�n';
	$lang['strellipsis'] = '?';
	$lang['strseparator']  =  ': ';
	$lang['strexpand'] = 'Expandir';
	$lang['strcollapse'] = 'Colapsar';
	$lang['strfind'] = 'Buscar';
	$lang['stroptions'] = 'Opciones';
	$lang['strrefresh'] = 'Refrescar';
	$lang['strdownload'] = 'Bajar';
	$lang['strdownloadgzipped'] = 'Bajar comprimido con gzip';
	$lang['strinfo'] = 'Informaci�n';
	$lang['stroids'] = 'OIDs';
	$lang['stradvanced'] = 'Avanzado';
	$lang['strvariables'] = 'Variables';
	$lang['strprocess'] = 'Proceso';
	$lang['strprocesses'] = 'Procesos';
	$lang['strsetting'] = 'Configuraci�n';
	$lang['streditsql'] = 'Editar SQL';
	$lang['strruntime'] = 'Tiempo total de ejecuci�n: %s ms';
	$lang['strpaginate'] = 'Paginar resultados';
	$lang['struploadscript'] = 'o subir un script SQL:';
	$lang['strstarttime'] = 'Hora de comienzo';
	$lang['strfile'] = 'Archivo';
	$lang['strfileimported'] = 'Archivo importado.';
	$lang['strtrycred']  =  'Usar el mismo par de usuario/contrase�a para todos los servidores';
	$lang['strconfdropcred'] = 'Por razones de seguridad, al desconectar se destruir� tu informaci�n compartida. �Est�s seguro que desea desconectarse?';
	$lang['stractionsonmultiplelines'] = 'Acciones m�ltiples';
	$lang['strselectall'] = 'Seleccionar todos';
	$lang['strunselectall'] = 'Seleccionar ninguno';
	$lang['strlocale'] = 'Localizaci�n';
	$lang['strcollation'] = 'Colaci�n';
	$lang['strctype'] = 'Tipo de caracter';
	$lang['strdefaultvalues'] = 'Valores por defecto';
	$lang['strnewvalues'] = 'Nuevos valores';
	$lang['strstart'] = 'Iniciar';
	$lang['strstop'] = 'Detener';
	$lang['strgotoppage'] = 'regresar al inicio';
	$lang['strtheme'] = 'Tema';

	// Admin
	$lang['stradminondatabase'] = 'Las siguientes tareas administrativas aplican a toda la base de datos %s.';
	$lang['stradminontable'] = 'Las siguientes tareas administrativas aplican a la tabla %s.';

	// User-supplied SQL history
	$lang['strhistory'] = 'Historial';
	$lang['strnohistory'] = 'Sin historial.';
	$lang['strclearhistory'] = 'Borrar historial';
	$lang['strdelhistory'] = 'Borrar del historial';
	$lang['strconfdelhistory'] = '�Desea borrar esta solicitud del historial?';
	$lang['strconfclearhistory'] = '�Desea borrar el historial?';
	$lang['strnodatabaseselected'] = 'Por favor, seleccione una base de datos.';

	// Database sizes
	$lang['strnoaccess'] = 'Sin acceso';
	$lang['strsize'] = 'Tama�o';
	$lang['strbytes'] = 'bytes';
	$lang['strkb'] = 'kB';
	$lang['strmb'] = 'MB';
	$lang['strgb'] = 'GB';
	$lang['strtb'] = 'TB';

	// Error handling
	$lang['strnoframes']  =  'Esta aplicaci�n funciona mejor con un navegador con soporte para marcos, pero puede usarse sin marcos siguiendo el link de abajo.';
	$lang['strnoframeslink']  =  'Usar sin marcos';
	$lang['strbadconfig'] = 'Su archivo config.inc.php est� desactualizado. Deber� regenerarlo a partir del nuevo archivo config.inc.php-dist.';
	$lang['strnotloaded'] = 'Su versi�n de PHP no tiene el soporte correcto de bases de datos.';
	$lang['strpostgresqlversionnotsupported']  =  'Su versi�n de PostgreSQL no est� soportado. Por favor actualice a la versi�n %s o m�s reciente.';
	$lang['strbadschema'] = 'El esquema especificado no es v�lido.';
	$lang['strbadencoding'] = 'No se pudo configurar la codificaci�n del cliente en la base de datos.';
	$lang['strsqlerror'] = 'Error de SQL:';
	$lang['strinstatement'] = 'En la declaraci�n:';
	$lang['strinvalidparam'] = 'Par�metros de script no v�lidos.';
	$lang['strnodata'] = 'No se encontraron filas.';
	$lang['strnoobjects'] = 'No se encontraron objetos.';
	$lang['strrownotunique'] = 'No existe un identificador �nico para este registro.';
	$lang['strnoreportsdb'] = 'A�n no se ha creado  la base de datos para los reportes. Lea las instrucciones del archivo INSTALL.';
	$lang['strnouploads'] = 'Est� deshabilitada la subida de archivos.';
	$lang['strimporterror'] = 'Error de importaci�n.';
	$lang['strimporterror-fileformat']  =  'Error de importacion de datos: Fall� al intentar determinar el formato del archivo.';
	$lang['strimporterrorline'] = 'Error de importaci�n en la l�nea %s.';
	$lang['strimporterrorline-badcolumnnum']  =  'Error de importaci�n en la l�nea %s:  La l�nea no posee la cantidad de columnas correctas.';
	$lang['strimporterror-uploadedfile']  =  'Error de importaci�n: No se ha podido subir el archivo al servidor';
	$lang['strcannotdumponwindows']  =  'El volcado de datos de tablas y esquemas con nombres complejos  no esta soportado en Windows.';
	$lang['strinvalidserverparam'] = 'Intento de conexi�n con un par�metro inv�lido del servidor. Posiblemente alguien est� intentando atacar tu sistema.';
	$lang['strnoserversupplied'] = 'No se suministr� un servidor';
	$lang['strbadpgdumppath'] = 'Error de exportaci�n: Fall� la ejecuci�n de execute pg_dump (seg�n la ruta dada en conf/config.inc.php : %s). Por favor, arregla esta ruta en tu configuraci�n y vuelve a iniciar sesi�n.';
	$lang['strbadpgdumpallpath'] = 'Error de exportaci�n: Fall� la ejecuci�n de pg_dumpall (seg�n la ruta dada en conf/config.inc.php : %s). Por favor, arregla esta ruta en tu configuraci�n y vuelve a iniciar sesi�n.';
	$lang['strconnectionfail'] = 'No se puede conectar al servidor.';

	// Tables
	$lang['strtable'] = 'Tabla';
	$lang['strtables'] = 'Tablas';
	$lang['strshowalltables'] = 'Mostrar todas las tablas';
	$lang['strnotables'] = 'No se encontraron tablas.';
	$lang['strnotable'] = 'No se encontr� la tabla.';
	$lang['strcreatetable'] = 'Crear tabla';
	$lang['strcreatetablelike'] = 'Crear una tabla a partir de una existente';
	$lang['strcreatetablelikeparent'] = 'Tabla de origen';
	$lang['strcreatelikewithdefaults'] = 'incluir valores por defecto';
	$lang['strcreatelikewithconstraints'] = 'incluir restricciones';
	$lang['strcreatelikewithindexes'] = 'incluir �ndices';
	$lang['strtablename'] = 'Nombre de la tabla';
	$lang['strtableneedsname'] = 'Debe darle un nombre a la tabla.';
	$lang['strtablelikeneedslike'] = 'Debes especificar una tabla para copiar sus propiedades.';
	$lang['strtableneedsfield'] = 'Debe especificar al menos un campo.';
	$lang['strtableneedscols'] = 'Debe especificar un n�mero v�lido de columnas.';
	$lang['strtablecreated'] = 'Tabla creada.';
	$lang['strtablecreatedbad'] = 'Fall� al tratar de crear la tabla.';
	$lang['strconfdroptable'] = '�Est�s seguro que desea eliminar la tabla "%s"?';
	$lang['strtabledropped'] = 'Tabla eliminada.';
	$lang['strtabledroppedbad'] = 'Fall� al tratar de eliminar la tabla.';
	$lang['strconfemptytable'] = '�Est�s seguro que desea vaciar la tabla "%s"?';
	$lang['strtableemptied'] = 'Tabla vaciada.';
	$lang['strtableemptiedbad'] = 'Fall� el vaciado de la tabla.';
	$lang['strinsertrow'] = 'Insertar Fila';
	$lang['strrowinserted'] = 'Fila insertada.';
	$lang['strrowinsertedbad'] = 'Fall� la inserci�n de fila.';
	$lang['strnofkref'] = 'No se hay un valor coincidente en la clave for�nea %s.';
	$lang['strrowduplicate']  =  'Fall� la inserci�n de fila , intentado hacer una duplicaci�n de inserci�n.';
	$lang['streditrow'] = 'Editar fila';
	$lang['strrowupdated'] = 'Fila actualizada.';
	$lang['strrowupdatedbad'] = 'Fall� al intentar actualizar la fila.';
	$lang['strdeleterow'] = 'Eliminar Fila';
	$lang['strconfdeleterow'] = '�Est�s seguro que quiere eliminar esta fila?';
	$lang['strrowdeleted'] = 'Fila eliminada.';
	$lang['strrowdeletedbad'] = 'Fall� la eliminaci�n de fila.';
	$lang['strinsertandrepeat']  =  'Insertar y Repite';
	$lang['strnumcols']  =  'Cantidad de columnas';
	$lang['strcolneedsname']  =  'Debe especificar un nombre para la columna';
	$lang['strselectallfields'] = 'Seleccionar todos los campos.';
	$lang['strselectneedscol'] = 'Debe elegir al menos una columna';
	$lang['strselectunary'] = 'Las operaciones unitarias no pueden tener valores.';
	$lang['strcolumnaltered'] = 'Columna Modificada.';
	$lang['strcolumnalteredbad'] = 'Fall� la modificaci�n de columna.';
	$lang['strconfdropcolumn'] = '�Est�s seguro que quiere eliminar la columna "%s" de la tabla "%s"?';
	$lang['strcolumndropped'] = 'Columna eliminada.';
	$lang['strcolumndroppedbad'] = 'Fall� la eliminaci�n de columna.';
	$lang['straddcolumn'] = 'Agregar Columna';
	$lang['strcolumnadded'] = 'Columna agregada.';
	$lang['strcolumnaddedbad'] = 'Fall� el agregado de columna.';
	$lang['strcascade'] = 'EN CASCADA';
	$lang['strtablealtered'] = 'Tabla modificada.';
	$lang['strtablealteredbad'] = 'Fall� la modificaci�n  de la Tabla.';
	$lang['strdataonly'] = 'Solamente datos';
	$lang['strstructureonly'] = 'Solo la estructura';
	$lang['strstructureanddata'] = 'Estructura y datos';
	$lang['strtabbed'] = 'Tabulado';
	$lang['strauto'] = 'Autom�tico';
	$lang['strconfvacuumtable']  =  '�Est�s seguro que quiere limpiar "%s"?';
	$lang['strconfanalyzetable'] = '�Est�s seguro que quiere analizar "%s"?';
	$lang['strconfreindextable'] = '�Est�s seguro que quiere actualizar los �ndices "%s"?';
	$lang['strconfclustertable'] = '�Est�s seguro que quiere ordenar "%s"?';
	$lang['strestimatedrowcount'] = 'Cantidad de filas';
	$lang['strspecifytabletoanalyze'] = 'Debe especificar al menos una tabla para analizar.';
	$lang['strspecifytabletoempty'] = 'Debe especificar al menos una tabla para vaciar.';
	$lang['strspecifytabletodrop'] = 'Debe especificar al menos una tabla para eliminar.';
	$lang['strspecifytabletovacuum'] = 'Debe especificar al menos una tabla para limpiar.';
	$lang['strspecifytabletoreindex'] = 'Debe especificar al menos una tabla para actualizar sus �ndices.';
	$lang['strspecifytabletocluster'] = 'Debe especificar al menos una tabla para ordenar.';
	$lang['strnofieldsforinsert'] = 'No puedes insertar en la tabla una fila sin columnas.';

	// Columns
	$lang['strcolprop'] = 'Propiedades de la Columna';
	$lang['strnotableprovided'] = '�No se suministr� al menos una tabla!';

	// Users
	$lang['struser'] = 'Usuario';
	$lang['strusers'] = 'Usuarios';
	$lang['strusername'] = 'Nombre de usuario';
	$lang['strpassword'] = 'Contrase�a';
	$lang['strsuper'] = '�Superusuario?';
	$lang['strcreatedb'] = '�Puede crear BD?';
	$lang['strexpires'] = 'Expira';
	$lang['strsessiondefaults'] = 'Valores predeterminados de la sesi�n.';
	$lang['strnousers'] = 'No se encontraron usuarios.';
	$lang['struserupdated'] = 'Usuario actualizado.';
	$lang['struserupdatedbad'] = 'Fall� la actualizaci�n del usuario.';
	$lang['strshowallusers'] = 'Mostrar todos los usuarios';
	$lang['strcreateuser'] = 'Crear usuario';
	$lang['struserneedsname'] = 'Debe dar un nombre a su usuario.';
	$lang['strusercreated'] = 'Usuario creado.';
	$lang['strusercreatedbad'] = 'Fall� al crear usuario.';
	$lang['strconfdropuser'] = '�Est�s seguro que quiere eliminar el usuario "%s"?';
	$lang['struserdropped'] = 'Usuario eliminado.';
	$lang['struserdroppedbad'] = 'Fall� al eliminar el usuario.';
	$lang['straccount'] = 'Cuenta';
	$lang['strchangepassword'] = 'Cambiar Contrase�a';
	$lang['strpasswordchanged'] = 'Contrase�a modificada.';
	$lang['strpasswordchangedbad'] = 'Fall� al modificar contrase�a.';
	$lang['strpasswordshort'] = 'La contrase�a es muy corta.';
	$lang['strpasswordconfirm'] = 'Las contrase�as no coinciden.';

	// Groups
	$lang['strgroup'] = 'Grupo';
	$lang['strgroups']  =  'Grupos';
	$lang['strshowallgroups'] = 'Mostrar todos los grupos';
	$lang['strnogroup'] = 'Grupo no encontrado.';
	$lang['strnogroups'] = 'No se encontraron grupos.';
	$lang['strcreategroup'] = 'Crear Grupo';
	$lang['strgroupneedsname'] = 'Debe darle un nombre al grupo.';
	$lang['strgroupcreated'] = 'Grupo creado.';
	$lang['strgroupcreatedbad'] = 'Fall� la creaci�n del grupo.';
	$lang['strconfdropgroup'] = '�Est�s seguro que quiere eliminar el grupo "%s"?';
	$lang['strgroupdropped'] = 'Grupo eliminado.';
	$lang['strgroupdroppedbad'] = 'Fall� la eliminaci�n del grupo.';
	$lang['strmembers'] = 'Miembros';
	$lang['strmemberof']  =  'Miembro de';
	$lang['stradminmembers']  =  'Miembros Admin ';
	$lang['straddmember'] = 'Agregar un miembro';
	$lang['strmemberadded'] = 'Miembro agregado.';
	$lang['strmemberaddedbad'] = 'Fall� al intentar agregar nuevo miembro.';
	$lang['strdropmember'] = 'Retirar miembro';
	$lang['strconfdropmember'] = '�Est�s seguro que quiere retirar el miembro "%s" del grupo "%s"?';
	$lang['strmemberdropped'] = 'Miembro eliminado.';
	$lang['strmemberdroppedbad'] = 'Fall� al intentar sacar un miembro.';

	// Roles
	$lang['strrole']  =  'Rol';
	$lang['strroles']  =  'Roles';
	$lang['strshowallroles'] = 'Mostrar todas los roles';
	$lang['strnoroles'] = 'No se encontraron roles.';
	$lang['strinheritsprivs']  =  '�Hereda Privilegios?';
	$lang['strcreaterole']  =  'Crear Rol';
	$lang['strcancreaterole']  =  '�Puede crear roles?';
	$lang['strrolecreated']  =  'Rol creado.';
	$lang['strrolecreatedbad']  =  'Fall� al crear rol.';
	$lang['strrolealtered'] = 'Rol modificado.';
	$lang['strrolealteredbad'] = 'Fall� la modificaci�n del rol.';
	$lang['strcanlogin']  =  '�Puede iniciar sesi�n?';
	$lang['strconnlimit']  =  'L�mite de conexi�n';
	$lang['strdroprole']  =  'Eliminar rol';
	$lang['strconfdroprole']  =  '�Est�s seguro de que desea eliminar el rol "%s"?';
	$lang['strroledropped']  =  'Usuario eliminado.';
	$lang['strroledroppedbad']  =  'No puedo eliminar el rol.';
	$lang['strnolimit']  =  'Sin l�mite';
	$lang['strnever']  =  'Nunca';
	$lang['strroleneedsname']  =  'Debe darle un nombre al rol.';

	// Privileges
	$lang['strprivilege'] = 'Privilegio';
	$lang['strprivileges'] = 'Privilegios';
	$lang['strnoprivileges'] = 'Por defecto, este objeto tiene privilegios de usuario.';
	$lang['strgrant'] = 'Otorgar';
	$lang['strrevoke'] = 'Revocar';
	$lang['strgranted'] = 'Privilegios otorgados/revocados.';
	$lang['strgrantfailed'] = 'Fall� al intentar otorgar privilegios.';
	$lang['strgrantbad'] = 'Debe especificar al menos un usuario o grupo y al menos un privilegio.';
	$lang['strgrantor']  =  'Cedente';
	$lang['strasterisk']  =  '*';

	// Databases
	$lang['strdatabase'] = 'Base de Datos';
	$lang['strdatabases'] = 'Bases de Datos';
	$lang['strshowalldatabases'] = 'Mostrar todas las bases de datos';
	$lang['strnodatabases'] = 'No se encontraron bases de datos.';
	$lang['strcreatedatabase'] = 'Crear base de datos';
	$lang['strdatabasename'] = 'Nombre de la base de datos';
	$lang['strdatabaseneedsname'] = 'Debe darle un nombre a la base de datos.';
	$lang['strdatabasecreated'] = 'Base de datos creada.';
	$lang['strdatabasecreatedbad'] = 'Fall� la creaci�n de la base de datos.';    
	$lang['strconfdropdatabase'] = '�Est�s seguro que quiere eliminar la base de datos "%s"?';
	$lang['strdatabasedropped'] = 'Base de datos eliminada.';
	$lang['strdatabasedroppedbad'] = 'Fall� al eliminar la base de datos.';
	$lang['strentersql'] = 'Ingrese la sentencia de SQL para ejecutar:';
	$lang['strsqlexecuted'] = 'SQL ejecutada.';
	$lang['strvacuumgood'] = 'Limpieza completada.';
	$lang['strvacuumbad'] = 'Fall� al intentar limpiar.';
	$lang['stranalyzegood'] = 'An�lisis completado.';
	$lang['stranalyzebad'] = 'Fall� al intentar analizar.';
	$lang['strreindexgood'] = 'Actualizaci�n de �ndices completada.';
	$lang['strreindexbad'] = 'Fall� la actualizaci�n de �ndices.';
	$lang['strfull'] = 'Full';
	$lang['strfreeze'] = 'Freeze';
	$lang['strforce'] = 'Force';
	$lang['strsignalsent']  =  'Se�al enviada.';
	$lang['strsignalsentbad']  =  'Fall� el env�o de la se�al.';
	$lang['strallobjects']  =  'Todos los objetos';
	$lang['strdatabasealtered']  =  'Base de Datos modificada.';
	$lang['strdatabasealteredbad']  =  'Fall� al intentar modificar la base de datos.';
	$lang['strspecifydatabasetodrop'] = 'Debe especificar al menos una base de datos para eliminar.';
	$lang['strtemplatedb'] = 'Plantilla';
	$lang['strconfanalyzedatabase'] = '�Est�s seguro que desea analizar todas las tablas en la base de datos "%s"?';
	$lang['strconfvacuumdatabase'] = '�Est�s seguro que desea limpiar todas las tablas en la base de datos "%s"?';
	$lang['strconfreindexdatabase'] = '�Est�s seguro que desea actualizar los �ndices de  todas las tablas en la base de datos "%s"?';
	$lang['strconfclusterdatabase'] = '�Est�s seguro que desea ordenar todas las tablas en la base de datos  "%s"?';

	// Views
	$lang['strview'] = 'Vista';
	$lang['strviews'] = 'Vistas';
	$lang['strshowallviews'] = 'Mostrar todas las vistas';
	$lang['strnoview'] = 'No se encontr� la vista.';
	$lang['strnoviews'] = 'No se encontraron vistas.';
	$lang['strcreateview'] = 'Crear Vista';
	$lang['strviewname'] = 'Nombre de la Vista';
	$lang['strviewneedsname'] = 'Debe darle un nombre a la vista.';
	$lang['strviewneedsdef'] = 'Debe darle una definici�n a su vista.';
	$lang['strviewneedsfields'] = 'Seleccione por favor los campos que desea en su vista.';
	$lang['strviewcreated'] = 'Vista creada.';
	$lang['strviewcreatedbad'] = 'Fall� al crear la vista.';
	$lang['strconfdropview'] = '�Est�s seguro que quiere eliminar la vista "%s"?';
	$lang['strviewdropped'] = 'Vista eliminada.';
	$lang['strviewdroppedbad'] = 'Fall� al intentar eliminar la vista.';
	$lang['strviewupdated'] = 'Vista actualizada.';
	$lang['strviewupdatedbad'] = 'Fall� al actualizar la vista.';
	$lang['strviewlink'] = 'Claves for�neas';
	$lang['strviewconditions'] = 'Condiciones adicionales';
	$lang['strcreateviewwiz'] = 'Crear vista usando el asistente';
	$lang['strrenamedupfields'] = 'Renombrar campos duplicados';
	$lang['strdropdupfields'] = 'Eliminar campos duplicados';
	$lang['strerrordupfields'] = 'Error en campos duplicados';
	$lang['strviewaltered'] = 'Vista modificada.';
	$lang['strviewalteredbad'] = 'Fall� la modificaci�n de la vista.';
	$lang['strspecifyviewtodrop'] = 'Debe especificar al menos una vista a eliminar.';

	// Sequences
	$lang['strsequence'] = 'Secuencia';
	$lang['strsequences'] = 'Secuencias';
	$lang['strshowallsequences'] = 'Mostrar todas las secuencias';
	$lang['strnosequence'] = 'No se encontr� la secuencia.';
	$lang['strnosequences'] = 'No se encontraron secuencias.';
	$lang['strcreatesequence'] = 'Crear secuencia';
	$lang['strlastvalue'] = '�ltimo Valor';
	$lang['strincrementby'] = 'Incremento';    
	$lang['strstartvalue'] = 'Valor inicial';
	$lang['strrestartvalue'] = 'Reiniciar valor';
	$lang['strmaxvalue'] = 'Valor m�ximo';
	$lang['strminvalue'] = 'Valor m�nimo';
	$lang['strcachevalue'] = 'Valor de la  cach�';
	$lang['strlogcount'] = 'Registrar cuenta';
	$lang['strcancycle'] = '�C�clica?';
	$lang['striscalled'] = '�Incrementar� el �ltimo valor antes de ser llamado (is_called)?';
	$lang['strsequenceneedsname'] = 'Debe darle un nombre a la secuencia.';
	$lang['strsequencecreated'] = 'Secuencia creada.';
	$lang['strsequencecreatedbad'] = 'Fall� la creaci�n de la secuencia.'; 
	$lang['strconfdropsequence'] = '�Est�s seguro que quiere eliminar la secuencia "%s"?';
	$lang['strsequencedropped'] = 'Secuencia eliminada.';
	$lang['strsequencedroppedbad'] = 'Fall� la eliminaci�n de la secuencia.';
	$lang['strsequencerestart'] = 'Secuencia restablecida.';
	$lang['strsequencerestartbad'] = 'Fall� al restablecer la secuencia.';
	$lang['strsequencereset'] = 'Secuencia reiniciada.';
	$lang['strsequenceresetbad'] = 'Fall� al intentar reiniciar la secuencia.'; 
	$lang['strsequencealtered'] = 'Secuencia modificada.';
	$lang['strsequencealteredbad'] = 'Fall� la modificaci�n de la secuencia.';
	$lang['strsetval']  =  'Fijar el valor';
	$lang['strsequencesetval'] = 'Fijar el valor de la secuencia.';
	$lang['strsequencesetvalbad'] = 'Fall� al fijar el valor de la secuencia.';
	$lang['strnextval'] = 'Valor de incremento';
	$lang['strsequencenextval'] = 'Secuencia incrementada.';
	$lang['strsequencenextvalbad'] = 'Fall� el incremento de la secuencia.';
	$lang['strspecifysequencetodrop'] = 'Debe especificar al menos una secuencia a eliminar.';

	// Indexes
	$lang['strindex'] = '�ndice';
	$lang['strindexes'] = '�ndices';
	$lang['strindexname'] = 'Nombre del �ndice';
	$lang['strshowallindexes'] = 'Mostrar Todos los �ndices';
	$lang['strnoindex'] = 'No se encontr� el �ndice.';
	$lang['strnoindexes'] = 'No se encontraron �ndices.';
	$lang['strcreateindex'] = 'Crear �ndice';
	$lang['strtabname'] = 'Tab Name';
	$lang['strcolumnname'] = 'Nombre de Columna';
	$lang['strindexneedsname'] = 'Debe darle un nombre al �ndice';
	$lang['strindexneedscols'] = 'Los �ndices requieren un n�mero v�lido de columnas.';
	$lang['strindexcreated'] = '�ndice creado';
	$lang['strindexcreatedbad'] = 'Fall� al crear el �ndice.';
	$lang['strconfdropindex'] = '�Est�s seguro que quiere eliminar el �ndice "%s"?';
	$lang['strindexdropped'] = '�ndice eliminado.';
	$lang['strindexdroppedbad'] = 'Fall� al eliminar el �ndice.';
	$lang['strkeyname'] = 'Nombre de la clave';
	$lang['struniquekey'] = 'Clave �nica';
	$lang['strprimarykey'] = 'Clave primaria';
	$lang['strindextype'] = 'Tipo de �ndice';
	$lang['strtablecolumnlist'] = 'Columnas en Tabla';
	$lang['strindexcolumnlist'] = 'Columnas en el �ndice';
	$lang['strclusteredgood'] = 'Ordenado completo.';
	$lang['strclusteredbad'] = 'Fall� al ordenar tabla.';
	$lang['strconcurrently'] = 'Concurrente';
	$lang['strnoclusteravailable'] = 'Tabla no ordenada en un �ndice.';

	// Rules
	$lang['strrules'] = 'Reglas';
	$lang['strrule'] = 'Regla';
	$lang['strshowallrules'] = 'Mostrar todas las reglas';
	$lang['strnorule'] = 'No se encontr� la regla.';
	$lang['strnorules'] = 'No se encontraron reglas.';
	$lang['strcreaterule'] = 'Crear regla';
	$lang['strrulename'] = 'Nombre de regla';
	$lang['strruleneedsname'] = 'Debe darle un nombre a la regla.';
	$lang['strrulecreated'] = 'Regla creada.';
	$lang['strrulecreatedbad'] = 'Fall� al crear la regla.';
	$lang['strconfdroprule'] = '�Est�s seguro que quiere eliminar la regla "%s" en "%s"?';
	$lang['strruledropped'] = 'Regla eliminada.';
	$lang['strruledroppedbad'] = 'Fall� al eliminar la regla.';

	// Constraints
	$lang['strconstraint']  =  'Restricci�n';
	$lang['strconstraints'] = 'Restricciones';
	$lang['strshowallconstraints'] = 'Mostrar todas las restricciones';
	$lang['strnoconstraints'] = 'No se encontraron restricciones.';
	$lang['strcreateconstraint'] = 'Crear Restricci�n';
	$lang['strconstraintcreated'] = 'Restricci�n creada.';
	$lang['strconstraintcreatedbad'] = 'Fall� al crear la Restricci�n.';
	$lang['strconfdropconstraint'] = '�Est�s seguro que quiere eliminar la restricci�n "%s" de "%s"?';
	$lang['strconstraintdropped'] = 'Restricci�n eliminada.';
	$lang['strconstraintdroppedbad'] = 'Fall� al eliminar la restricci�n.';
	$lang['straddcheck'] = 'Agregar chequeo';
	$lang['strcheckneedsdefinition'] = 'Restricci�n de chequeo necesita una definici�n.';
	$lang['strcheckadded'] = 'Restricci�n de chequeo agregada.';
	$lang['strcheckaddedbad'] = 'Fall� al intentar agregar restricci�n de chequeo.';
	$lang['straddpk'] = 'Agregar clave primaria';
	$lang['strpkneedscols'] = 'La clave primaria necesita al menos un campo.';
	$lang['strpkadded'] = 'Clave primaria agregada.';
	$lang['strpkaddedbad'] = 'Fall� al intentar crear la clave primaria.';
	$lang['stradduniq'] = 'Agregar clave �nica';
	$lang['struniqneedscols'] = 'La clave �nica necesita al menos un campo.';
	$lang['struniqadded'] = 'Agregar clave �nica.';
	$lang['struniqaddedbad'] = 'Fall� al intentar agregar la clave �nica.';
	$lang['straddfk'] = 'Agregar referencia';
	$lang['strfkneedscols'] = 'La referencia necesita al menos un campo.';
	$lang['strfkneedstarget'] = 'La referencia necesita una tabla para referenciar.';
	$lang['strfkadded'] = 'Referencia agregada.';
	$lang['strfkaddedbad'] = 'Fall� al agregar la referencia.';
	$lang['strfktarget'] = 'Tabla de destino';
	$lang['strfkcolumnlist'] = 'Campos en la clave';
	$lang['strondelete'] = 'AL ELIMINAR';
	$lang['stronupdate'] = 'AL ACTUALIZAR';

	// Functions
	$lang['strfunction'] = 'Funci�n';
	$lang['strfunctions'] = 'Funciones';
	$lang['strshowallfunctions'] = 'Mostrar todas las funciones';
	$lang['strnofunction'] = 'No se encontr� la funci�n.';
	$lang['strnofunctions'] = 'No se encontraron funciones.';
	$lang['strcreateplfunction']  =  'Crear funci�n SQL/PL';
	$lang['strcreateinternalfunction']  =  'Crear funci�n interna';
	$lang['strcreatecfunction']  =  'Crear funci�n en C';
	$lang['strfunctionname'] = 'Nombre de la funci�n';
	$lang['strreturns'] = 'Devuelve';
	$lang['strproglanguage'] = 'Lenguaje de programaci�n';
	$lang['strfunctionneedsname'] = 'Debe darle un nombre a la funci�n.';
	$lang['strfunctionneedsdef'] = 'Debe darle una definici�n a la funci�n.';
	$lang['strfunctioncreated'] = 'Funci�n creada.';
	$lang['strfunctioncreatedbad'] = 'Fall� la creaci�n de la funci�n.';
	$lang['strconfdropfunction'] = '�Est�s seguro que quiere eliminar la funci�n "%s"?';
	$lang['strfunctiondropped'] = 'Funci�n eliminada.';
	$lang['strfunctiondroppedbad'] = 'Fall� al eliminar la funci�n.';
	$lang['strfunctionupdated'] = 'Funci�n actualizada.';
	$lang['strfunctionupdatedbad'] = 'Fall� al actualizar la funci�n.';
	$lang['strobjectfile']  =  'Archivo de objeto';
	$lang['strlinksymbol']  =  'Vinculo simb�lico';
	$lang['strarguments']  =  'Argumentos';
	$lang['strargmode']  =  'Modo';
	$lang['strargtype']  =  'Tipo';
	$lang['strargadd']  =  'Agregar otro argumento';
	$lang['strargremove']  =  'Eliminar este argumento';
	$lang['strargnoargs']  =  'Esta funci�n no tendr� argumentos.';
	$lang['strargenableargs']  =  'Habilitar argumentos pasados a esta funci�n.';
	$lang['strargnorowabove'] = 'Debe existir una fila por encima de esta fila.';
	$lang['strargnorowbelow'] = 'Debe exisitr una fila por debajo de esta fila.';
	$lang['strargraise']  =  'Mover arriba.';
	$lang['strarglower']  =  'Mover abajo.';
	$lang['strargremoveconfirm']  =  '�Esta seguro que quiere eliminar este argumento? Esto NO se puede deshacer.';
	$lang['strfunctioncosting'] = 'Costo de la funci�n';
	$lang['strresultrows'] = 'Filas en el resultado';
	$lang['strexecutioncost'] = 'Costo de ejecuci�n';
	$lang['strspecifyfunctiontodrop'] = 'Debe especificar al menos una funci�n a eliminar.';

	// Triggers
	$lang['strtrigger'] = 'Disparador';
	$lang['strtriggers'] = 'Disparadores';
	$lang['strshowalltriggers'] = 'Mostrar todos los disparadores';
	$lang['strnotrigger'] = 'No se encontr� el disparador.';
	$lang['strnotriggers'] = 'No se encontraron disparadores.';
	$lang['strcreatetrigger'] = 'Crear Disparador';
	$lang['strtriggerneedsname'] = 'Debe darle un nombre al disparador.';
	$lang['strtriggerneedsfunc'] = 'Debe especificar una funci�n para el disparador.';
	$lang['strtriggercreated'] = 'Disparador creado.';
	$lang['strtriggercreatedbad'] = 'Fall� la creaci�n del disparador.';
	$lang['strconfdroptrigger'] = '�Est�s seguro que quiere eliminar el disparador "%s" en "%s"?';
	$lang['strconfenabletrigger'] = '�Est�s seguro que desea activar el disparador "%s" en "%s"?';
	$lang['strconfdisabletrigger'] = '�Est�s seguro que desea desactivar el disparador "%s" en "%s"?';
	$lang['strtriggerdropped'] = 'Disparador eliminado.';
	$lang['strtriggerdroppedbad'] = 'Fall� al eliminar el disparador.';
	$lang['strtriggerenabled'] = 'Disparador activado.';
	$lang['strtriggerenabledbad'] = 'Fall� la activaci�n del disparador.';
	$lang['strtriggerdisabled'] = 'Disparador desactivado.';
	$lang['strtriggerdisabledbad'] = 'Fall� la desactivaci�n del disparador.';
	$lang['strtriggeraltered'] = 'Disparador modificado.';
	$lang['strtriggeralteredbad'] = 'Fall� la modificaci�n del disparador.';
	$lang['strforeach']  =  'Para cada uno';

	// Types
	$lang['strtype'] = 'Tipo de dato';
	$lang['strtypes'] = 'Tipos de datos';
	$lang['strshowalltypes'] = 'Mostrar todos los tipos';
	$lang['strnotype'] = 'No se encontr� el tipo.';
	$lang['strnotypes'] = 'No se encontraron tipos.';
	$lang['strcreatetype'] = 'Crear Tipo';
	$lang['strcreatecomptype']  =  'Crear tipo compuesto';
	$lang['strcreateenumtype'] = 'Crear tipo enumerado';
	$lang['strtypeneedsfield']  =  'Debe especificar al menos un campo.';
	$lang['strtypeneedsvalue'] = 'Debe especificar al menos un valor.';
	$lang['strtypeneedscols']  =  'Tipos compuestos requieren de un n�mero v�lido de columnas.';
	$lang['strtypeneedsvals'] = 'Debe especificar un n�mero v�lido de valores.';
	$lang['strinputfn'] = 'Funci�n de entrada';
	$lang['stroutputfn'] = 'Funci�n de salida';
	$lang['strpassbyval'] = '�Pasar valor?';
	$lang['stralignment'] = 'Alineamiento';
	$lang['strelement'] = 'Elemento';
	$lang['strdelimiter'] = 'Delimitador';
	$lang['strstorage'] = 'Almacenamiento';
	$lang['strfield']  =  'Campo';
	$lang['strnumfields']  =  'N�mero de campos';
	$lang['strnumvalues'] = 'N�mero de valores';
	$lang['strtypeneedsname'] = 'Debe especificar un nombre para el tipo.';
	$lang['strtypeneedslen'] = 'Debe especificar una longitud para el tipo.';
	$lang['strtypecreated'] = 'Tipo creado';
	$lang['strtypecreatedbad'] = 'Fall� al crear el tipo.';
	$lang['strconfdroptype'] = '�Est�s seguro que quiere eliminar el tipo "%s"?';
	$lang['strtypedropped'] = 'Tipo eliminado.';
	$lang['strtypedroppedbad'] = 'Fall� al eliminar el tipo.';
	$lang['strflavor']  =  'Tipo';
	$lang['strbasetype']  =  'Base';
	$lang['strcompositetype']  =  'Compuesto';
	$lang['strpseudotype']  =  'Seudo';
	$lang['strenum']  =  'Enumerado';
	$lang['strenumvalues'] = 'Valores enumerados';

	// Schemas
	$lang['strschema'] = 'Esquema';
	$lang['strschemas'] = 'Esquemas';
	$lang['strshowallschemas'] = 'Mostrar Todos los Esquemas';
	$lang['strnoschema'] = 'No se encontr� el esquema.';
	$lang['strnoschemas'] = 'No se encontraron esquemas.';
	$lang['strcreateschema'] = 'Crear Esquema';
	$lang['strschemaname'] = 'Nombre del esquema';
	$lang['strschemaneedsname'] = 'Debe especificar un nombre para el esquema.';
	$lang['strschemacreated'] = 'Esquema creado';
	$lang['strschemacreatedbad'] = 'Fall� al crear el esquema.';
	$lang['strconfdropschema'] = '�Est�s seguro que quiere eliminar el esquema "%s"?';
	$lang['strschemadropped'] = 'Esquema eliminado.';
	$lang['strschemadroppedbad'] = 'Fall� al eliminar el esquema.';
	$lang['strschemaaltered'] = 'Esquema modificado.';
	$lang['strschemaalteredbad'] = 'La modificaci�n del esquema fall�.';
	$lang['strsearchpath']  =  'Orden de b�squeda en los esquemas';
	$lang['strspecifyschematodrop'] = 'Debe especificar al menos un esquemaa eliminar.';

	// Reports
	$lang['strreport'] = 'Reporte';
	$lang['strreports'] = 'Reportes';
	$lang['strshowallreports'] = 'Mostrar todos los reportes';
	$lang['strnoreports'] = 'No se encontr� el reporte.';
	$lang['strcreatereport'] = 'Crear Reporte';
	$lang['strreportdropped'] = 'Reporte eliminado.';
	$lang['strreportdroppedbad'] = 'Fall� al eliminar el Reporte.';
	$lang['strconfdropreport'] = '�Est�s seguro que quiere eliminar el reporte "%s"?';
	$lang['strreportneedsname'] = 'Debe especificar un nombre para el reporte.';
	$lang['strreportneedsdef'] = 'Debe especificar un SQL para el reporte.';
	$lang['strreportcreated'] = 'Reporte guardado.';
	$lang['strreportcreatedbad'] = 'Fall� al guardar el reporte.';

	//Domains
	$lang['strdomain'] = 'Dominio';
	$lang['strdomains'] = 'Dominios';
	$lang['strshowalldomains'] = 'Mostrar todos los dominios';
	$lang['strnodomains'] = 'No se encontraron dominios.';
	$lang['strcreatedomain'] = 'Crear dominio';
	$lang['strdomaindropped'] = 'Dominio eliminado.';
	$lang['strdomaindroppedbad'] = 'Fall� al intentar eliminar el dominio.';
	$lang['strconfdropdomain'] = '�Esta seguro que quiere eliminar el dominio "%s"?';
	$lang['strdomainneedsname'] = 'Debe dar un nombre para el dominio.';
	$lang['strdomaincreated'] = 'Dominio creado.';
	$lang['strdomaincreatedbad'] = 'Fall� al intentar crear el dominio.';
	$lang['strdomainaltered'] = 'Dominio modificado.';
	$lang['strdomainalteredbad'] = 'Fall� al intentar modificar el dominio.';

	// Operators
	$lang['stroperator'] = 'Operador';
	$lang['stroperators'] = 'Operadores';
	$lang['strshowalloperators'] = 'Mostrar todos los operadores';
	$lang['strnooperator'] = 'No se encontr� el operador.';
	$lang['strnooperators'] = 'No se encontraron operadores.';
	$lang['strcreateoperator'] = 'Crear Operador';
	$lang['strleftarg'] = 'Tipo de datos del arg. izquierdo';
	$lang['strrightarg'] = 'Tipo de datos del arg. derecho';
	$lang['strcommutator'] = 'Conmutador';
	$lang['strnegator'] = 'Negaci�n';
	$lang['strrestrict'] = 'Restringir';
	$lang['strjoin'] = 'Uni�n';
	$lang['strhashes'] = 'Llaves (Hash)';
	$lang['strmerges'] = 'Fusiones';
	$lang['strleftsort'] = 'Ordenado izquierdo';
	$lang['strrightsort'] = 'Ordenado derecho';
	$lang['strlessthan'] = 'Menor que';
	$lang['strgreaterthan'] = 'Mayor que';
	$lang['stroperatorneedsname'] = 'Debe darle un nombre al operador.';
	$lang['stroperatorcreated'] = 'Operador creado';
	$lang['stroperatorcreatedbad'] = 'Fall� al intentar crear el operador.';
	$lang['strconfdropoperator'] = '�Est�s seguro que quiere eliminar el operador "%s"?';
	$lang['stroperatordropped'] = 'Operador eliminado.';
	$lang['stroperatordroppedbad'] = 'Fall� al intentar eliminar el operador.';

	// Casts
	$lang['strcasts'] = 'Conversi�n de tipos';
	$lang['strnocasts'] = 'No se encontraron conversiones.';
	$lang['strsourcetype'] = 'Tipo inicial';
	$lang['strtargettype'] = 'Tipo final';
	$lang['strimplicit'] = 'Impl�cito';
	$lang['strinassignment'] = 'En asignaci�n';
	$lang['strbinarycompat'] = '(Compatible con binario)';

	// Conversions
	$lang['strconversions'] = 'Conversiones';
	$lang['strnoconversions'] = 'No se encontraron conversiones.';
	$lang['strsourceencoding'] = 'Codificaci�n de la fuente';
	$lang['strtargetencoding'] = 'Codificaci�n del destino';

	// Languages
	$lang['strlanguages'] = 'Lenguajes';
	$lang['strnolanguages'] = 'No se encontraron lenguajes.';
	$lang['strtrusted'] = 'Confiable';

	// Info
	$lang['strnoinfo'] = 'No hay informaci�n disponible.';
	$lang['strreferringtables'] = 'Tablas referenciales';
	$lang['strparenttables'] = 'Tablas padre';
	$lang['strchildtables'] = 'Tablas hija';

	// Aggregates
	$lang['straggregate']  =  'Agregaci�n';
	$lang['straggregates'] = 'Agregaciones';
	$lang['strnoaggregates'] = 'No se encontraron agregaciones.';
	$lang['stralltypes'] = '(Todos los tipos)';
	$lang['strcreateaggregate']  =  'Crear Agregaci�n';
	$lang['straggrbasetype'] = 'Tipo del dato de entrada';
	$lang['straggrsfunc'] = 'Funci�n de transici�n de estado';
	$lang['straggrstype'] = 'Tipo de dato para el valor de estado';
	$lang['straggrffunc'] = 'Funci�n final';
	$lang['straggrinitcond'] = 'Condici�n inicial';
	$lang['straggrsortop'] = 'Operador de ordenamiento';
	$lang['strconfdropaggregate'] = '�Est�s seguro que desea eliminar la agregaci�n "%s"?';
	$lang['straggregatedropped']  =  'Agregaci�n eliminada.';
	$lang['straggregatedroppedbad'] = 'Fall� al intentar eliminar agregaci�n.';
	$lang['straggraltered']  =  'Agregaci�n modificada.';
	$lang['straggralteredbad']  =  'Fall� la modificaci�n de la agregaci�n.';
	$lang['straggrneedsname'] = 'Debe especificar un nombre para la agregaci�n.';
	$lang['straggrneedsbasetype'] = 'Debe especificar un tipo de dato de entrada para la agregaci�n.';
	$lang['straggrneedssfunc'] = 'Debe especificar el nombre de la funci�n de transici�n de estado de la agregaci�n.';
	$lang['straggrneedsstype'] = 'Debe especificar el tipo de dato para la el valor de estado de la agregaci�n.';
	$lang['straggrcreated']  =  'Agregaci�n creada.';
	$lang['straggrcreatedbad']  =  'Fall� la creaci�n de la agregaci�n.';
	$lang['straggrshowall']  =  'Mostrar todas las agregaciones';

	// Operator Classes
	$lang['stropclasses'] = 'Clases de operadores';
	$lang['strnoopclasses'] = 'No se encontraron clases de operadores.';
	$lang['straccessmethod'] = 'M�todo de acceso';

	// Stats and performance
	$lang['strrowperf'] = 'Rendimiento de fila';
	$lang['strioperf'] = 'Rentimiento de E/S (I/O)';
	$lang['stridxrowperf'] = 'Rendimiento de �ndice de la fila';
	$lang['stridxioperf'] = 'Rentimiento de E/S (I/O)';
	$lang['strpercent'] = '%';
	$lang['strsequential'] = 'Secuencial';
	$lang['strscan'] = 'Escanear';
	$lang['strread'] = 'Leer';
	$lang['strfetch'] = 'Extraer';
	$lang['strheap'] = 'Salto';
	$lang['strtoast'] = 'TOAST';
	$lang['strtoastindex'] = 'Indice TOAST';
	$lang['strcache'] = 'Cach�';
	$lang['strdisk'] = 'Disco';
	$lang['strrows2'] = 'Filas';

	// Tablespaces
	$lang['strtablespace']  =  'Tablespace';
	$lang['strtablespaces']  =  'Tablespaces';
	$lang['strshowalltablespaces']  =  'Mostrar todos los tablespaces';
	$lang['strnotablespaces']  =  'No se encontraron tablespaces.';
	$lang['strcreatetablespace']  =  'Crear tablespace';
	$lang['strlocation']  =  'Ubicaci�n';
	$lang['strtablespaceneedsname']  =  'Debe darle un nombre al tablespace.';
	$lang['strtablespaceneedsloc']  =  'Debe dar un directorio en donde crear el tablespace.';
	$lang['strtablespacecreated']  =  'Tablespace creado.';
	$lang['strtablespacecreatedbad']  =  'Fall� la creaci�n del tablespace.';
	$lang['strconfdroptablespace']  =  '�Esta seguro que quiere eliminar el tablespace "%s"?';
	$lang['strtablespacedropped']  =  'Tablespace eliminado.';
	$lang['strtablespacedroppedbad']  =  'Fall� al intenta eliminar el tablespace.';
	$lang['strtablespacealtered']  =  'Tablespace modificado.';
	$lang['strtablespacealteredbad']  =  'Fall� la modificaci�n del Tablespace.';

	// Slony clusters
	$lang['strcluster'] = 'Cl�ster';
	$lang['strnoclusters'] = 'No se encontraron cl�steres.';
	$lang['strconfdropcluster'] = '�Est�s seguro que desea eliminar el cl�ster "%s"?';
	$lang['strclusterdropped'] = 'Cl�ster eliminado.';
	$lang['strclusterdroppedbad'] = 'Fall� la eliminaci�n del cl�ster.';
	$lang['strinitcluster'] = 'Inicializar cl�ster';
	$lang['strclustercreated'] = 'Cl�ster inicializado.';
	$lang['strclustercreatedbad'] = 'Fall� la inicializaci�n del cl�ster.';
	$lang['strclusterneedsname'] = 'Debe especificar un nombre para el cl�ster.';
	$lang['strclusterneedsnodeid'] = 'Debe especificar un ID para el nodo local.';

	// Slony nodes
	$lang['strnodes']  =  'Nodos';
	$lang['strnonodes'] = 'No se encontraron los nodos.';
	$lang['strcreatenode']  =  'Crear nodo';
	$lang['strid']  =  'ID';
	$lang['stractive'] = 'Activo';
	$lang['strnodecreated'] = 'Nodo creado.';
	$lang['strnodecreatedbad'] = 'Fall� la creaci�n del nodo.';
	$lang['strconfdropnode'] = '�Est�s seguro que desea eliminar el nodo "%s"?';
	$lang['strnodedropped'] = 'Nodo eliminado.';
	$lang['strnodedroppedbad'] = 'Fall� la eliminaci�n del nodo.';
	$lang['strfailover'] = 'Conmutaci�n por error';
	$lang['strnodefailedover'] = 'Conmutaci�n por error del nodo.';
	$lang['strnodefailedoverbad'] = 'Fall� la conmutaci�n por error del nodo.';
	$lang['strstatus'] = 'Estado';
	$lang['strhealthy'] = 'Estable';
	$lang['stroutofsync'] = 'Fuera de sincronizaci�n';
	$lang['strunknown'] = 'Desconocido';

	// Slony paths    
	$lang['strpaths']  =  'Rutas';
	$lang['strnopaths'] = 'No se encontraron rutas.';
	$lang['strcreatepath']  =  'Crear ruta';
	$lang['strnodename'] = 'Nombre del nodo';
	$lang['strnodeid'] = 'ID del nodo';
	$lang['strconninfo'] = 'Cadena de conexi�n';
	$lang['strconnretry'] = 'Segundos de espera para reintentar la conexi�n';
	$lang['strpathneedsconninfo'] = 'Debe suministrar una cadena de conexi�n para la ruta.';
	$lang['strpathneedsconnretry'] = 'Debe suministrar el n�mero de segundos de espera para reintentar la conexi�n.';
	$lang['strpathcreated'] = 'Ruta creada.';
	$lang['strpathcreatedbad'] = 'Fall� la creaci�n de la ruta.';
	$lang['strconfdroppath'] = 'Est� seguro que desea eliminar la ruta "%s"?';
	$lang['strpathdropped'] = 'Ruta eliminada.';
	$lang['strpathdroppedbad'] = 'Fall� la eliminaci�n de la ruta.';

	// Slony listens
	$lang['strlistens'] = 'Listens';
	$lang['strnolistens'] = 'No se encontraron listens.';
	$lang['strcreatelisten'] = 'Crear listen';
	$lang['strlistencreated'] = 'Listen creado.';
	$lang['strlistencreatedbad'] = 'Fall� la creaci�n del listen.';
	$lang['strconfdroplisten'] = '�Esta seguro de eliminar el listen "%s"?';
	$lang['strlistendropped'] = 'Listen eliminado.';
	$lang['strlistendroppedbad'] = 'Fall� la eliminaci�n del listen.';

	// Slony replication sets
	$lang['strrepsets']  =  'Conjuntos de Replicaci�n';
	$lang['strnorepsets'] = 'No se encontraron conjuntos de replicaci�n.';
	$lang['strcreaterepset']  =  'Crear un conjunto de replicaci�n';
	$lang['strrepsetcreated'] = 'Conjunto de replicaci�n creada.';
	$lang['strrepsetcreatedbad'] = 'Fall� la creaci�n del conjunto de replicaci�n.';
	$lang['strconfdroprepset'] = '�Est�s seguro que desea eliminar el conjunto de replicaci�n "%s"?';
	$lang['strrepsetdropped'] = 'Conjunto de replicaci�n eliminado.';
	$lang['strrepsetdroppedbad'] = 'Fall� la eliminaci�n del conjunto de replicaci�n.';
	$lang['strmerge']  =  'Unir';
	$lang['strmergeinto'] = 'Unir a';
	$lang['strrepsetmerged'] = 'Conjuntos de replicaci�n unidos.';
	$lang['strrepsetmergedbad'] = 'Fall� la union de los conjuntos de replicaci�n.';
	$lang['strmove']  =  'Mover';
	$lang['strneworigin']  =  'Origen Nuevo';
	$lang['strrepsetmoved'] = 'Mover el conjunto de replicaci�n.';
	$lang['strrepsetmovedbad'] = 'Fall� al mover el conjunto de replicaci�n.';
	$lang['strnewrepset']  =  'Nuevo conjunto de replicaci�n';
	$lang['strlock'] = 'Bloquear';
	$lang['strlocked'] = 'Bloqueado';
	$lang['strunlock'] = 'Desbloquear';
	$lang['strconflockrepset'] = '�Est�s seguro que desea bloquear el conjunto de replicaci�n "%s"?';
	$lang['strrepsetlocked'] = 'Conjunto de replicaci�n bloqueado.';
	$lang['strrepsetlockedbad'] = 'Fall� el bloqueo del conjunto de replicaci�n.';
	$lang['strconfunlockrepset'] = '�Est�s seguro que desea desbloquear el conjunto de replicaci�n "%s"?';
	$lang['strrepsetunlocked'] = 'Conjunto de replicaci�n desbloqueado.';
	$lang['strrepsetunlockedbad'] = 'Fall� el desbloqueo del conjunto de replicaci�n.';
	$lang['stronlyonnode'] = 'S�lo en el nodo';
	$lang['strddlscript'] = 'Script DDL';
	$lang['strscriptneedsbody'] = 'Debe suministrar un script para aplicar en los nodos.';
	$lang['strscriptexecuted'] = 'Ejecutado el script  DDL  del conjunto de replicaci�n.';
	$lang['strscriptexecutedbad'] = 'Fall� la ejecuci�n del script  DDL  del conjunto de replicaci�n.';
	$lang['strtabletriggerstoretain'] = 'Los siguientes disparadores no ser�n desactivados por Slony:';

	// Slony tables in replication sets
	$lang['straddtable'] = 'Agregar tabla';
	$lang['strtableneedsuniquekey'] = 'La tabla a agregar requiere una clave primaria o �nica.';
	$lang['strtableaddedtorepset'] = 'Tabla agregada al conjunto de replicaci�n.';
	$lang['strtableaddedtorepsetbad'] = 'Fall� al agregar la tabla al conjunto de replicaci�n.';
	$lang['strconfremovetablefromrepset'] = '�Est�s seguro de eliminar la tabla "%s" del conjunto de replicaci�n "%s"?';
	$lang['strtableremovedfromrepset'] = 'Tabla eliminada del conjunto de replicaci�n.';
	$lang['strtableremovedfromrepsetbad'] = 'Fall� la eliminaci�n de la tabla del conjunto de replicaci�n.';

	// Slony sequences in replication sets
	$lang['straddsequence'] = 'Agregar secuencia';
	$lang['strsequenceaddedtorepset'] = 'Agregar secuencia al conjunto de replicaci�n.';
	$lang['strsequenceaddedtorepsetbad'] = 'Fall� al agregar la secuencia al conjunto de replicaci�n.';
	$lang['strconfremovesequencefromrepset'] = '�Este seguro que desea eliminar la secuencia "%s" del conjunto de replicaci�n "%s"?';
	$lang['strsequenceremovedfromrepset'] = 'Secuencia eliminada del conjunto de replicaci�n.';
	$lang['strsequenceremovedfromrepsetbad'] = 'Fall� la eliminaci�n de la secuencia del conjunto de replicaci�n.';

	// Slony subscriptions
	$lang['strsubscriptions']  =  'Suscripciones';
	$lang['strnosubscriptions']  =  'No se encontraron suscripciones.';

	// Miscellaneous
	$lang['strtopbar'] = '%s corriendo en %s:%s -- Usted ha iniciado sesi�n con el usuario "%s"';
	$lang['strtimefmt'] = 'd/m/Y, G:i:s';
	$lang['strhelp'] = 'Ayuda';
	$lang['strhelpicon']  =  '?';
	$lang['strhelppagebrowser'] = 'Buscador de la  p�gina de ay�da';
	$lang['strselecthelppage'] = 'Seleccione una p�gina de ayuda';
	$lang['strinvalidhelppage'] = 'P�gina de ayuda inv�lida.';
	$lang['strlogintitle']  =  'Iniciar sesi�n en %s';
	$lang['strlogoutmsg']  =  'Saliendo de %s';
	$lang['strloading']  =  'Cargando...';
	$lang['strerrorloading']  =  'Error al cargar';
	$lang['strclicktoreload']  =  'Clic para recargar';

	// Autovacuum
	$lang['strautovacuum']  =  'Autolimpiado';
	$lang['strturnedon'] = 'Encendido';
	$lang['strturnedoff'] = 'Apagado';
	$lang['strenabled']  =  'Habilitado'; 
	$lang['strnovacuumconf'] = 'No se encontr� configuraci�n para autolimpiar.';
	$lang['strvacuumbasethreshold']  =  'Umbral de limpiar';
	$lang['strvacuumscalefactor'] = 'Factor de escala de limpiado';
	$lang['stranalybasethreshold'] = 'Analizar umbral base';
	$lang['stranalyzescalefactor'] = 'Analizar Facor de Escala';
	$lang['strvacuumcostdelay']  =  'Tiempo de retraso para limpiar';
	$lang['strvacuumcostlimit'] = 'Limite del costo de limpiar';
	$lang['strvacuumpertable'] = 'Configuraci�n de autolimpiar de cada tabla';
	$lang['straddvacuumtable'] = 'Agregar configuraci�n de autolimpiar a una tabla';
	$lang['streditvacuumtable'] = 'Editar configuraci�n de autolimpiar para la tabla %s';
	$lang['strdelvacuumtable'] = '�Eliminar configuraci�n de autolimpiar para la tabla %s ?';
	$lang['strvacuumtablereset'] = 'Reiniciar configuraci�n de autolimpiar para la tabla  %s ';
	$lang['strdelvacuumtablefail'] = 'Fall� al remover la configuraci�n de autolimpiar para la tabla %s';
	$lang['strsetvacuumtablesaved'] = 'Configuraci�n de autolimpiar %s guardada.';
	$lang['strsetvacuumtablefail'] = 'Fall� la configuraci�n de autolimpiar para la tabla %s.';
	$lang['strspecifydelvacuumtable'] = 'Debe especificar la tabla a la que deseas removerle los par�metros de autolimpiar.';
	$lang['strspecifyeditvacuumtable'] = 'Debe especificar la tabla a la que deseeas editarle los par�metros de autolimpiar.';
	$lang['strnotdefaultinred'] = 'Los valores en rojo no son los valores por defecto.';

	// Table-level Locks
	$lang['strlocks']  =  'Bloqueos';
	$lang['strtransaction']  =  'ID de la transacci�n';
	$lang['strvirtualtransaction'] = 'ID de la transacci�n virtual';
	$lang['strprocessid']  =  'ID de proceso';
	$lang['strmode']  =  'Modo de bloqueo';
	$lang['strislockheld'] = '�Se mantiene el bloqueo?';

	// Prepared transactions
	$lang['strpreparedxacts']  =  'Transacciones preparadas';
	$lang['strxactid']  =  'ID de la Transacci�n';
	$lang['strgid']  =  'ID Global';

	// Fulltext search
	$lang['strfulltext'] = 'B�squeda de texto completo';
	$lang['strftsconfig'] = 'Configuraci�n de BTC';
	$lang['strftsconfigs'] = 'Configuraciones';
	$lang['strftscreateconfig'] = 'Crear configuraci�n de BTC';
	$lang['strftscreatedict'] = 'Crear diccionario';
	$lang['strftscreatedicttemplate'] = 'Crear plantilla de dicionario';
	$lang['strftscreateparser'] = 'Crear analizador';
	$lang['strftsnoconfigs'] = 'No se encontr� configuraci�n de b�squeda de texto completo.';
	$lang['strftsconfigdropped'] = 'Configuraci�n de b�squeda de texto completo eliminada.';
	$lang['strftsconfigdroppedbad'] = 'Fall� la eliminaci�n de la configuraci�n de b�squeda de texto completo.';
	$lang['strconfdropftsconfig'] = '�Est�s seguro de eliminar la configuraci�n de b�squeda de texto completo "%s"?';
	$lang['strconfdropftsdict'] = '�Est�s seguro eliminar el diccionario de BTC "%s"?';
	$lang['strconfdropftsmapping'] = '�Est�s seguro de eliminar la asignaci�n "%s" de la configuraci�n de BTC "%s"?';
	$lang['strftstemplate'] = 'Plantilla';
	$lang['strftsparser'] = 'Analizador';
	$lang['strftsconfigneedsname'] = 'Debe suministrar un nombre para la configuraci�n de la BTC.';
	$lang['strftsconfigcreated'] = 'Configuraci�n de BTC creada.';
	$lang['strftsconfigcreatedbad'] = 'Fall� la creaci�n de BTC.';
	$lang['strftsmapping'] = 'Asignaci�n';
	$lang['strftsdicts'] = 'Diccionarios';
	$lang['strftsdict'] = 'Diccionario';
	$lang['strftsemptymap'] = 'Configuraci�n vac�a de la asignaci�n de BTC .';
	$lang['strftsconfigaltered'] = 'Configuraci�n de BTC modificada.';
	$lang['strftsconfigalteredbad'] = 'Fall� la modificaci�n de la configuraci�n de BTC.';
	$lang['strftsconfigmap'] = 'Configuraci�n de asignaci�n de BTC';
	$lang['strftsparsers'] = 'Analizadores de BTC';
	$lang['strftsnoparsers'] = 'No hay analizadores de BTC disponibles.';
	$lang['strftsnodicts'] = 'No hay diccionarios de BTC disponibles.';
	$lang['strftsdictcreated'] = 'Diccionario de BTC creado.';
	$lang['strftsdictcreatedbad'] = 'Fall� la creaci�n del diccionario BTC.';
	$lang['strftslexize'] = 'Analizar l�xicamente';
	$lang['strftsinit'] = 'Iniciar';
	$lang['strftsoptionsvalues'] = 'Opciones y valores';
	$lang['strftsdictneedsname'] = 'Debe suministrar un nombre para el diccionario de BTC.';
	$lang['strftsdictdropped'] = 'Diccionario de BTC eliminado.';
	$lang['strftsdictdroppedbad'] = 'Fall� la eliminaci�n del diccionario de BTC.';
	$lang['strftsdictaltered'] = 'Diccionario de BTC modificado.';
	$lang['strftsdictalteredbad'] = 'Fall� la modificaci�n del diccionario de BTC.';
	$lang['strftsaddmapping'] = 'Agregar nueva asignaci�n';
	$lang['strftsspecifymappingtodrop'] = 'Debe especificar al menos una asignaci�n a eliminar.';
	$lang['strftsspecifyconfigtoalter'] = 'Debe especificar una configuraci�n de BTC a modificar';
	$lang['strftsmappingdropped'] = 'Asignaci�n de BTC eliminada.';
	$lang['strftsmappingdroppedbad'] = 'Fall� la eliminaci�n de la asignaci�n de BTC.';
	$lang['strftsnodictionaries'] = 'No se encontrar�n diccionarios.';
	$lang['strftsmappingaltered'] = 'Asignaci�n de BTC modificada.';
	$lang['strftsmappingalteredbad'] = 'Fall� la modificaci�n de la asignaci�n de BTC.';
	$lang['strftsmappingadded'] = 'Asignaci�n de BTC agregada.';
	$lang['strftsmappingaddedbad'] = 'Fall� la asignaci�n de BTC.';
	$lang['strftstabconfigs'] = 'Configuraciones';
	$lang['strftstabdicts'] = 'Diccionarios';
	$lang['strftstabparsers'] = 'Analizadores';
	$lang['strftscantparsercopy'] = 'No se puede especificar tanto el analizador como la plantilla durante la creaci�n de la configuraci�n de la b�squeda de texto.';
?>
