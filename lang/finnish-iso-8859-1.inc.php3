<?php
/* $Id$ */

/*
 * Finnish language file by Visa Kopu, visa@visakopu.net
 */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('tavua', 'kt', 'Mt', 'Gt');

$day_of_week = array('Su', 'Ma', 'Ti', 'Ke', 'To', 'Pe', 'La');
$month = array('Tammi', 'Helmi', 'Maalis', 'Huhti', 'Touko', 'Kes�', 'Hein�', 'Elo', 'Syys', 'Loka', 'Marras', 'Joulu');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%m.%Y klo %H:%M';

$strAPrimaryKey = 'Sarakkeelle %s on lis�tty ensisijainen avain';
$strAccessDenied = 'P��sy kielletty';
$strAction = 'Toiminto';
$strAddDeleteColumn = 'Lis��/poista sarakkeita';
$strAddDeleteRow = 'Lis��/poista hakuehtoja';
$strAddNewField = 'Lis�� sarake';
$strAddPriv = 'Lis�� k�ytt�oikeus';
$strAddPrivMessage = 'Olet lis�nnyt uuden k�ytt�oikeuden.';
$strAddSearchConditions = 'Lis�� hakuehtoja ("where"-lauseen sis�lt�):';
$strAddToIndex = 'Lis�� indeksi �%s�sarakkeisiin';
$strAddUser = 'Lis�� uusi k�ytt�j�';
$strAddUserMessage = 'Olet lis�nnyt uuden k�ytt�j�n.';
$strAffectedRows = 'Rivej�:';
$strAfter = 'J�lkeen sarakkeen %s';
$strAfterInsertBack = 'Takaisin';
$strAfterInsertNewInsert = 'Lis�� uusi rivi';
$strAll = 'Kaikki';
$strAllTableSameWidth = 'N�yt� kaikki taulut samanlevyisin�?';
$strAlterOrderBy = 'J�rjest� taulu';
$strAnIndex = 'Sarakkeelle %s on lis�tty indeksi';
$strAnalyzeTable = 'Analysoi taulu';
$strAnd = 'Ja';
$strAny = 'Mik� tahansa';
$strAnyColumn = 'Mik� tahansa sarake';
$strAnyDatabase = 'Mik� tahansa tietokanta';
$strAnyHost = 'Mik� tahansa palvelin';
$strAnyTable = 'Mik� tahansa taulu';
$strAnyUser = 'Mik� tahansa k�ytt�j�';
$strAscending = 'Nouseva';
$strAtBeginningOfTable = 'Taulun alkuun';
$strAtEndOfTable = 'Taulun loppuun';
$strAttr = 'Attribuutit';

$strBack = 'Takaisin';
$strBeginCut = 'ALOITA CUT';
$strBeginRaw = 'ALOITA RAW';
$strBinary = 'Bin��ridata';
$strBinaryDoNotEdit = 'Bin��ridataa - �l� muokkaa';
$strBookmarkDeleted = 'Tallennettu SQL-lause on poistettu.';
$strBookmarkLabel = 'Tunniste';
$strBookmarkQuery = 'Tallennettu SQL-lause';
$strBookmarkThis = 'Tallenna SQL-lause';
$strBookmarkView = 'N�yt�';
$strBrowse = 'Selaa';
$strBzip = '"bzip-pakattu"';

$strCantLoadMySQL = 'MySQL-laajennusta ei voitu ladata,<br />tarkista PHP:n asetukset.';
$strCantLoadRecodeIconv = 'Merkist�n konvertointiin tarvittavaa iconv- tai recode-laajennusta ei voitu ladata. Muokkaa PHP:n asetuksia ja salli n�iden laajennusten k�ytt� tai muuta phpMyAdminin asetuksia niin ettei konvertointia suoriteta.';
$strCantRenameIdxToPrimary = 'Indeksi� ei voi muuttaa PRIMARY-nimiseksi!';
$strCantUseRecodeIconv = 'iconv-, libiconv- tai recode_string-funktioita ei voitu k�ytt��. Tarkista PHP:n asetukset.';
$strCardinality = 'Kardinaliteetti';
$strCarriage = 'CR-rivinvaihto: \\r';
$strChange = 'Muokkaa';
$strChangeDisplay = 'Valitse n�ytett�v� sarake';
$strChangePassword = 'Vaihda salasanaa';
$strCharsetOfFile = 'Tiedoston merkist�:';
$strCheckAll = 'Valitse kaikki';
$strCheckDbPriv = 'Tarkista tietokannan k�ytt�oikeudet';
$strCheckTable = 'Tarkista taulu';
$strChoosePage = 'Valitse muokattava sivu';
$strColComFeat = 'Sarakkeiden kommentit n�kyviss�';
$strColumn = 'Sarake';
$strColumnNames = 'Sarakkeiden nimet';
$strComments = 'Kommentit';
$strCompleteInserts = 'T�ydelliset insert-lauseet';
$strConfigFileError = 'phpMyAdmin ei pysty lukemaan asetustiedostoa.<br />T�m� saattaa johtua virheest�, jonka PHP l�ysi tiedostosta tai tiedoston puuttumisesta.<br />Voit avata tiedoston allaolevasta linkist� ja lukea mahdolliset PHP-virheilmoituikset. Todenn�k�isimmin joltain rivilt� puuttuu lainausmerkki tai puolipiste.<br />Jos linkist� avautuva sivu on tyhj�, asetustiedostosta ei l�ytynyt virhett�.';
$strConfigureTableCoord = 'M��rittele koordinaatit taululle %s';
$strConfirm = 'Oletko varma, ett� haluat tehd� t�m�n?';
$strCookiesRequired = 'Selaimessa pit�� olla cookietuki p��ll� t�st� eteenp�in.';
$strCopyTable = 'Kopioi taulu (tietokanta<b>.</b>taulu):';
$strCopyTableOK = 'Taulu %s on kopioitu nimelle %s.';
$strCreate = 'Luo';
$strCreateIndex = 'Luo sarakkeista indeksi';
$strCreateIndexTopic = 'Luo uusi indeksi';
$strCreateNewDatabase = 'Luo uusi tietokanta';
$strCreateNewTable = 'Luo uusi taulu tietokantaan %s';
$strCreatePage = 'Luo uusi sivu';
$strCreatePdfFeat = 'PDF-tiedostojen luonti';
$strCriteria = 'Hakuehdot';

$strData = 'Data';
$strDataOnly = 'Vain data';
$strDatabase = 'Tietokanta ';
$strDatabaseHasBeenDropped = 'Tietokanta %s on pudotettu.';
$strDatabaseWildcard = 'Tietokanta (voit k�ytt�� jokerimerkkej�):';
$strDatabases = 'tietokantaa';
$strDatabasesStats = 'Tietokantastatistiikka';
$strDefault = 'Oletusarvo';
$strDelete = 'Poista';
$strDeleteFailed = 'Poistaminen ep�onnistui!';
$strDeleteUserMessage = 'K�ytt�j� %s on poistettu.';
$strDeleted = 'Rivi on poistettu';
$strDeletedRows = 'Poistetut rivit:';
$strDescending = 'Laskeva';
$strDisabled = 'Pois p��lt�';
$strDisplay = 'N�yt�';
$strDisplayFeat = 'Ulkoasun asetukset';
$strDisplayOrder = 'Lajitteluj�rjestys:';
$strDisplayPDF = 'N�yt� PDF-kaavio';
$strDoAQuery = 'Suorita "esimerkin mukainen haku" (jokerimerkki: "%")';
$strDoYouReally = 'Oletko varma ett� haluat ';
$strDocu = 'Ohjeet';
$strDrop = 'Pudota';
$strDropDB = 'Pudota tietokanta %s';
$strDropTable = 'Pudota taulu';
$strDumpXRows = 'Tee vedos %s rivist�, alkaen rivist� %s.';
$strDumpingData = 'Vedostan dataa taulusta';
$strDynamic = 'dynaaminen';

$strEdit = 'Muokkaa';
$strEditPDFPages = 'Muokkaa PDF-sivuja';
$strEditPrivileges = 'Muokkaa k�ytt�oikeuksia';
$strEffective = 'Varsinainen';
$strEmpty = 'Tyhjenn�';
$strEmptyResultSet = 'MySQL palautti tyhj�n vastauksen (ts. nolla rivi�).';
$strEnabled = 'P��ll�';
$strEnd = 'Loppu';
$strEndCut = 'LOPETA CUT';
$strEndRaw = 'LOPETA RAW';
$strEnglishPrivileges = ' Huom. MySQL-k�ytt�oikeuksien nimet ovat englanniksi ';
$strError = 'Virhe';
$strExplain = 'Selit� SQL-lause';
$strExport = 'Tulosta tiedostoksi/ruudulle';
$strExportToXML = 'Rakenne ja data XML-muodossa';
$strExtendedInserts = 'Yhteinen insert-lause';
$strExtra = 'Lis�tiedot';

$strField = 'Sarake';
$strFieldHasBeenDropped = 'Sarake %s on pudotettu';
$strFields = 'Sarakkeet';
$strFieldsEmpty = ' Sarakkeiden lukum��r� on nolla! ';
$strFieldsEnclosedBy = 'Sarakkeiden ymp�r�intimerkki';
$strFieldsEscapedBy = 'Koodinvaihtomerkki (escape)';
$strFieldsTerminatedBy = 'Sarakkeiden erotinmerkki';
$strFixed = 'kiinte�';
$strFlushTable = 'Tyhjenn� taulun v�limuisti ("FLUSH")';
$strFormEmpty = 'Tarvittava tieto puuttuu lomakkeesta!';
$strFormat = 'Muoto';
$strFullText = 'Koko tekstit';
$strFunction = 'Funktio';

$strGenBy = 'Generoinut:';
$strGenTime = 'Luontiaika';
$strGeneralRelationFeat = 'Yleiset relaatio-ominaisuudet';
$strGo = 'Suorita';
$strGrants = 'Luvat';
$strGzip = '"gzip-pakattu"';

$strHasBeenAltered = 'on muutettu.';
$strHasBeenCreated = 'on luotu.';
$strHaveToShow = 'Valitse v�hint��n yksi sarake';
$strHome = 'Etusivu';
$strHomepageOfficial = 'phpMyAdminin viralliset sivut';
$strHomepageSourceforge = 'phpMyAdminin sivut SourceForge-palvelussa';
$strHost = 'Palvelin';
$strHostEmpty = 'Palvelimen nimi puuttuu!';

$strIdxFulltext = 'Koko teksti';
$strIfYouWish = 'Jos haluat hakea vain osan taulun sarakkeista, sy�t� pilkuilla erotettu lista sarakkeiden nimist�.';
$strIgnore = 'J�t� huomiotta';
$strInUse = 'k�yt�ss�';
$strIndex = 'Indeksi';
$strIndexHasBeenDropped = 'Indeksi %s on pudotettu';
$strIndexName = 'Indeksin nimi:';
$strIndexType = 'Indeksin tyyppi:';
$strIndexes = 'Indeksit';
$strInsecureMySQL = 'Asetustiedostosi k�ytt�� asetuksia, jotka viittaavat MySQL:n oletusarvoiseen k�ytt�j��n (root ilman salasanaa). T�llaisilla asetuksilla k�ytett�ess� MySQL-palvelin on arka hy�kk�yksille. T�m� tietoturvariski olisi syyt� korjata pikimmiten!';
$strInsert = 'Lis�� rivi';
$strInsertAsNewRow = 'Lis�� uutena rivin�';
$strInsertNewRow = 'Lis�� uusi rivi';
$strInsertTextfiles = 'Sy�t� tekstitiedosto tauluun';
$strInsertedRows = 'Lis�tyt rivit:';
$strInstructions = 'komentoa';
$strInvalidName = '"%s" on varattu sana eik� sit� voi k�ytt�� tietokannan, taulun tai sarakkeen nimen�.';

$strKeepPass = '�l� vaihda salasanaa';
$strKeyname = 'Avaimen nimi';
$strKill = 'Tapa';

$strLength = 'Pituus';
$strLengthSet = 'Pituus/Arvot*';
$strLimitNumRows = 'Rivej�/sivu';
$strLineFeed = 'LF-rivinvaihto: \\n';
$strLines = 'Rivit';
$strLinesTerminatedBy = 'Rivien erotinmerkki';
$strLinkNotFound = 'Linkki� ei l�ydy';
$strLinksTo = 'Linkitys sarakkeeseen:';
$strLocationTextfile = 'Tiedoston sijainti';
$strLogPassword = 'Salasana:';
$strLogUsername = 'K�ytt�j�tunnus:';
$strLogin = 'Kirjaudu sis��n';
$strLogout = 'Poistu';

$strMissingBracket = 'Hakasulku puuttuu';
$strModifications = 'Muutokset tallennettu';
$strModify = 'Muokkaa';
$strModifyIndexTopic = 'Muokkaa indeksi�';
$strMoveTable = 'Siirr� taulu (tietokanta<b>.</b>taulu):';
$strMoveTableOK = 'Taulu %s on siirretty %s.';
$strMySQLCharset = 'MySQL:n merkist�';
$strMySQLReloaded = 'MySQL uudelleenladattu.';
$strMySQLSaid = 'MySQL ilmoittaa: ';
$strMySQLServerProcess = 'MySQL %pma_s1% palvelimella %pma_s2% k�ytt�j�n� %pma_s3%';
$strMySQLShowProcess = 'N�yt� prosessit';
$strMySQLShowStatus = 'N�yt� MySQL:n ajonaikaiset tiedot';
$strMySQLShowVars = 'N�yt� MySQL:n j�rjestelm�muuttujat';

$strName = 'Nimi';
$strNext = 'Seuraava';
$strNo = 'Ei';
$strNoDatabases = 'Ei tietokantoja';
$strNoDescription = 'ei selityst�';
$strNoDropDatabases = '"DROP DATABASE"-lauseiden k�ytt� on estetty.';
$strNoExplain = '�l� selit� SQL-lausetta';
$strNoFrames = 'phpMyAdmin toimii parhaiten <b>kehyksi�</b> tukevalla selaimella.';
$strNoIndex = 'Indeksi� ei ole m��ritelty!';
$strNoIndexPartsDefined = 'Indeksin osia ei ole m��ritelty!';
$strNoModification = 'Ei muutoksia';
$strNoPassword = 'Ei salasanaa';
$strNoPhp = 'Piilota PHP-koodi';
$strNoPrivileges = 'Ei k�ytt�oikeuksia';
$strNoQuery = 'Ei SQL lausetta!';
$strNoRights = 'Sinulla ei ole tarpeeksi oikeuksia!';
$strNoTablesFound = 'Tietokannasta ei l�ytynyt yht��n taulua.';
$strNoUsersFound = 'K�ytt�ji� ei l�ytynyt.';
$strNoValidateSQL = '�l� tarkista SQL-lausetta';
$strNone = 'Ei mit��n';
$strNotNumber = 'T�m� ei ole numero!';
$strNotOK = 'Ei kunnossa';
$strNotSet = '<b>%s</b>-taulua ei l�ytynyt tai sit� ei ole m��ritelty %s-tiedostossa';
$strNotValidNumber = ' ei ole hyv�ksytt�v� rivin numero!';
$strNull = 'Tyhj�';
$strNumSearchResultsInTable = '%s hakutulosta taulussa <i>%s</i>';
$strNumSearchResultsTotal = '<b>Yhteens�:</b> <i>%s</i> hakutulosta';

$strOK = 'Kunnossa';
$strOftenQuotation = 'Yleens� lainausmerkki. "Valinnaisesti" tarkoittaa, ett� vain char- ja varchar-tyyppiset sarakkeet ymp�r�id��n annetulla ymp�r�intimerkill�.';
$strOperations = 'Toiminnot';
$strOptimizeTable = 'Optimoi taulu';
$strOptionalControls = 'Valinnainen. Ohjaa erikoismerkkien lukua ja kirjoitusta.';
$strOptionally = 'Valinnaisesti';
$strOptions = 'Lis�valinnat';
$strOr = 'Tai';
$strOverhead = 'K�ytt�m�t�n';

$strPHPVersion = 'PHP:n versio';
$strPageNumber = 'Sivunnumero:';
$strPartialText = 'Osittaiset tekstit';
$strPassword = 'Salasana';
$strPasswordEmpty = 'Salasana puuttuu!';
$strPasswordNotSame = 'Salasanat eiv�t ole samat!';
$strPdfDbSchema = 'Kaavio tietokannasta "%s" - Sivu %s';
$strPdfInvalidPageNum = 'PDF:n sivunumeroa ei ole m��ritelty!';
$strPdfInvalidTblName = 'Taulua "%s" ei l�ydy!';
$strPdfNoTables = 'Ei tauluja';
$strPhp = 'N�yt� PHP-koodi';
$strPmaDocumentation = 'phpMyAdminin dokumentaatio';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> t�ytyy m��ritell� asetustiedostossa!';
$strPos1 = 'Alku';
$strPrevious = 'Edellinen';
$strPrimary = 'Ensisijainen';
$strPrimaryKey = 'Ensisijainen avain';
$strPrimaryKeyHasBeenDropped = 'Ensisijainen avain on pudotettu';
$strPrimaryKeyName = 'Ensisijaisen avaimen nimen� pit�� olla PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" saa olla <b>vain ja ainoastaan</b>ensisijaisen avaimen nimen�!)';
$strPrintView = 'Tulostusversio';
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivileges = 'K�ytt�oikeudet';
$strProperties = 'Asetukset';
$strPutColNames = 'Laita sarakkeiden nimet ensimm�iselle riville';

$strQBE = 'Esimerkin mukainen haku';
$strQBEDel = 'Poista';
$strQBEIns = 'Lis��';
$strQueryOnDb = 'Suorita SQL-lause tietokannassa <b>%s</b>:';
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';

$strReType = 'Kirjoita uudelleen';
$strRecords = 'rivi�';
$strReferentialIntegrity = 'Tarkista viitteiden eheys:';
$strRelationNotWorking = 'Relaatioihin ja linkitettyihin tauluihin liittyv�t lis�ominaisuudet ovat pois p��lt�. Katso %st��lt�%s lis�tietoja.';
$strRelationView = 'Relaation�kym�';
$strReloadFailed = 'MySQL:n uudelleenlataus ep�onnistui.';
$strReloadMySQL = 'Lataa MySQL uudelleen';
$strRememberReload = 'Muista k�ynnist�� palvelin uudestaan.';
$strRenameTable = 'Nime� taulu uudelleen';
$strRenameTableOK = 'Taulun %s nimi on nyt %s';
$strRepairTable = 'Korjaa taulu';
$strReplace = 'Korvaa';
$strReplaceTable = 'Korvaa taulun nykyiset rivit tiedostolla';
$strReset = 'Tyhjenn�';
$strRevoke = 'Mit�t�i';
$strRevokeGrant = 'Mit�t�i lupa';
$strRevokeGrantMessage = 'Olet peruuttanut k�ytt�j�n %s GRANT-oikeuden';
$strRevokeMessage = 'Olet peruuttanut k�ytt�j�n %s k�ytt�oikeudet';
$strRevokePriv = 'Mit�t�i k�ytt�oikeudet';
$strRowLength = 'Rivin pituus';
$strRowSize = ' Rivin koko ';
$strRows = 'rivi�';
$strRowsFrom = 'rivi� alkaen rivist�';
$strRowsModeHorizontal = 'vaakasuora';
$strRowsModeOptions = '%ssti, otsikoita toistetaan %s:n rivin v�lein';
$strRowsModeVertical = 'pystysuora';
$strRowsStatistic = 'Rivistatistiikka';
$strRunQuery = 'Suorita';
$strRunSQLQuery = 'Suorita SQL-lauseita tietokannassa %s';
$strRunning = 'palvelimella %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Olet mahdollisesti l�yt�nyt ohjelmointivirheen SQL-parserista. Tarkista SQL-lauseesi, erityisesti lainausmerkit merkkijonojen alusta ja lopusta. Toinen mahdollinen virheen aiheuttaja on se, ett� olet siirt�m�ss� tiedostoa, jossa on bin��ridataa lainausmerkkien ulkopuolella. Jos mahdollista, kokeile SQL-lausettasi suoraan komentorivilt�. MySQL:n antama virheilmoitus n�kyy alla, jos serveri sellaisen antoi. Jos lause toimi komentorivill�, mutta ei phpMyAdminissa, kokeile etsi� se rivi, joka virheilmoituksen aiheutti ja l�het� meille bugiraportti, johon liit�t alla olevan koodin:';
$strSQLParserUserError = 'SQL-lauseessasi oli virhe. There seems to be an error in your SQL query. MySQL:n antama virheilmoitus n�kyy alla, jos serveri sellaisen antoi';
$strSQLQuery = 'SQL-lause';
$strSQLResult = 'SQL-lauseen tulos';
$strSQPBugInvalidIdentifer = 'Ep�kelpo tunniste';
$strSQPBugUnclosedQuote = 'Toinen lainausmerkki puuttuu merkkijonon lopusta';
$strSQPBugUnknownPunctuation = 'Tuntematon v�limerkki';
$strSave = 'Tallenna';
$strScaleFactorSmall = 'Kaavio ei mahdu yhdelle sivulle t�ll� skaalauksella';
$strSearch = 'Hae';
$strSearchFormTitle = 'Hae tietokannassa';
$strSearchInTables = 'Tauluista:';
$strSearchNeedle = 'Haettavat sanat tai arvot (%-merkki� voi k�ytt�� jokerimerkkin�):';
$strSearchOption1 = 'v�hint��n yksi sanoista';
$strSearchOption2 = 'kaikki sanat';
$strSearchOption3 = 'koko lause';
$strSearchOption4 = 'regexp-haku';
$strSearchResultsFor = 'Tulokset hakusanalla "<i>%s</i>" %s:';
$strSearchType = 'Hae:';
$strSelect = 'Hae';
$strSelectADb = 'Valitse tietokanta';
$strSelectAll = 'Valitse kaikki';
$strSelectFields = 'Valitse sarakkeet (v�hint��n yksi):';
$strSelectNumRows = 'lauseessa';
$strSelectTables = 'Valitse taulut';
$strSend = 'Tallenna tiedostoksi';
$strServer = 'Palvelin %s';
$strServerChoice = 'Valitse palvelin';
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVersion = 'Palvelimen versio';
$strSetEnumVal = 'Jos sarakkeen tietotyyppi on "enum" tai "set", sy�t� vaaditut arvot t�ss� muodossa: \'a\',\'b\',\'c\'...<br />Jos tarvitset arvoissa kenoviivaa ("\") tai heittomerkki� ("\'"), laita merkin eteen kenoviiva (esim. \'\\\\xyz\' tai \'a\\\'b\').';
$strShow = 'N�yt�';
$strShowAll = 'N�yt� kaikki';
$strShowColor = 'N�yt� v�rit';
$strShowCols = 'N�yt� sarakkeet';
$strShowGrid = 'N�yt� ruudukko';
$strShowPHPInfo = 'N�yt� tietoja PHP:n asetuksista';
$strShowTableDimension = 'N�yt� taulujen ulottuvuus';
$strShowTables = 'N�yt� taulut';
$strShowThisQuery = ' N�yt� lause uudelleen ';
$strShowingRecords = 'N�kyvill� rivit ';
$strSingly = '(yksitellen)';
$strSize = 'Koko';
$strSort = 'J�rjestys';
$strSpaceUsage = 'Levytilan k�ytt�';
$strSplitWordsWithSpace = 'Sanat erotellaan v�lily�nnill�.';
$strStatement = 'Tieto';
$strStrucCSV = 'CSV-muotoinen data';
$strStrucData = 'Rakenne ja data';
$strStrucDrop = 'Lis�� \'DROP TABLE\'-rivit';
$strStrucExcelCSV = 'CSV-muoto MS Exceli� varten';
$strStrucOnly = 'Vain rakenne';
$strStructPropose = 'Ehdota taulun rakennetta';
$strStructure = 'Rakenne';
$strSubmit = 'L�het�';
$strSuccess = 'SQL-lause on suoritettu';
$strSum = 'Summa';

$strTable = 'Taulu';
$strTableComments = 'Kommentoi taulua';
$strTableEmpty = 'Taulun nimi puuttuu!';
$strTableHasBeenDropped = 'Taulu %s on pudotettu';
$strTableHasBeenEmptied = 'Taulu %s on tyhjennetty';
$strTableHasBeenFlushed = 'Taulun %s v�limuisti on tyhjennetty';
$strTableMaintenance = 'Taulun huolto';
$strTableStructure = 'Rakenne taululle';
$strTableType = 'Taulun muoto';
$strTables = '%s taulu(a)';
$strTextAreaLength = ' Pituudestaan johtuen<br /> t�t� saraketta ei ehk� voi muokata ';
$strTheContent = 'Tiedoston sis�lt� on sy�tetty.';
$strTheContents = 'Tiedoston sis�lt� korvaa valitusta taulusta ne rivit, joissa on sama ensisijainen (primary) tai yksik�sitteinen (unique) avain kuin tiedoston riveiss�.';
$strTheTerminator = 'Sarakkeiden erotin.';
$strTotal = 'yhteens�';
$strType = 'Tyyppi';

$strUncheckAll = 'Poista valinta kaikista';
$strUnique = 'Uniikki';
$strUnselectAll = 'Poista valinta kaikista';
$strUpdatePrivMessage = 'K�ytt�j�n %s k�ytt�oikeudet on p�ivitetty.';
$strUpdateProfile = 'P�ivit� profiili:';
$strUpdateProfileMessage = 'Profiili on p�ivitetty.';
$strUpdateQuery = 'P�ivit� lause';
$strUsage = 'Tila';
$strUseBackquotes = 'Laita taulujen ja sarakkeiden nimet lainausmerkkeihin';
$strUseTables = 'K�yt� tauluja';
$strUser = 'K�ytt�j�';
$strUserEmpty = 'K�ytt�j�n nimi puuttuu!';
$strUserName = 'K�ytt�j�nimi';
$strUsers = 'K�ytt�j�t';

$strValidateSQL = 'Tarkista SQL-lause';
$strValidatorError = 'SQL-validaattoria ei voitu k�ynnist��. Tarkista, ett� olet asentanut tarpeelliset PHP-laajennukset. Lis�� tietoa l�ytyy %sdokumentaatiosta%s.';
$strValue = 'Arvo';
$strViewDump = 'Tee vedos (dump) taulusta';
$strViewDumpDB = 'Tee vedos (dump) tietokannasta';

$strWebServerUploadDirectory = 'palvelimen hakemisto tiedostojen siirtoa varten';
$strWebServerUploadDirectoryError = 'Valitsemaasi hakemistoa ei voitu k�ytt�� tiedostojen siirt�miseen';
$strWelcome = 'Tervetuloa, toivottaa %s';
$strWithChecked = 'Valitut:';
$strWrongUser = 'V��r� k�ytt�j�tunnus tai salasana. P��sy kielletty.';

$strYes = 'Kyll�';

$strZip = '"zip-pakattu"';
// To translate
$timespanfmt = '%s days, %s hours, %s minutes and %s seconds'; //to translate

$strAbortedClients = 'Aborted'; //to translate
$strAdministration = 'Administration'; //to translate

$strBzError = 'phpMyAdmin was unable to compress the dump because of a broken Bz2 extension in this php version. It is strongly recommended to set the <code>$cfg[\'BZipDump\']</code> directive in your phpMyAdmin configuration file to <code>FALSE</code>. If you want to use the Bz2 compression features, you should upgrade to a later php version. See php bug report %s for details.'; //to translate

$strCannotLogin = 'Cannot login to MySQL server';  //to translate
$strCommand = 'Command'; //to translate
$strCompression = 'Compression'; //to translate
$strConnections = 'Connections'; //to translate
$strCouldNotKill = 'phpMyAdmin was unable to kill thread %s. It probably has already been closed.'; //to translate

$strDataDict = 'Data Dictionary';  //to translate
$strDeleteAndFlush = 'Delete the users and reload the privileges afterwards.'; //to translate
$strDeleteAndFlushDescr = 'This is the cleanest way, but reloading the privileges may take a while.'; //to translate
$strDeleting = 'Deleting %s'; //to translate

$strFailedAttempts = 'Failed attempts'; //to translate
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate

$strGlobalPrivileges = 'Global privileges'; //to translate
$strGlobalValue = 'Global value'; //to translate
$strGrantOption = 'Grant'; //to translate

$strId = 'ID'; //to translate
$strImportDocSQL = 'Import docSQL Files';  //to translate

$strJustDelete = 'Just delete the users from the privilege tables.'; //to translate
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate

$strLaTeX = 'LaTeX';  //to translate
$strLandscape = 'Landscape';  //to translate

$strMoreStatusVars = 'More status variables'; //to translate

$strNumTables = 'Tables'; //to translate


$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';  //to translate
$strPasswordChanged = 'The Password for %s was changed successfully.'; // to translate
$strPerHour = 'per hour'; //to translate
$strPortrait = 'Portrait';  //to translate
$strPrint = 'Print';  //to translate
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.'; //to translate
$strPrivDescAlter = 'Allows altering the structure of existing tables.'; //to translate
$strPrivDescCreateDb = 'Allows creating new databases and tables.'; //to translate
$strPrivDescCreateTbl = 'Allows creating new tables.'; //to translate
$strPrivDescCreateTmpTable = 'Allows creating temporary tables.'; //to translate
$strPrivDescDelete = 'Allows deleting data.'; //to translate
$strPrivDescDropDb = 'Allows dropping databases and tables.'; //to translate
$strPrivDescDropTbl = 'Allows dropping tables.'; //to translate
$strPrivDescExecute = 'Allows running stored procedures; Has no effect in this MySQL version.'; //to translate
$strPrivDescFile = 'Allows importing data from and exporting data into files.'; //to translate
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege tables.'; //to translate
$strPrivDescIndex = 'Allows creating and dropping indexes.'; //to translate
$strPrivDescInsert = 'Allows inserting and replacing data.'; //to translate
$strPrivDescLockTables = 'Allows locking tables for the current thread.'; //to translate
$strPrivDescProcess3 = 'Allows killing processes of other users.'; //to translate
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.'; //to translate
$strPrivDescReferences = 'Has no effect in this MySQL version.'; //to translate
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; //to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescSelect = 'Allows reading data.'; //to translate
$strPrivDescShowDb = 'Gives access to the complete list of databases.'; //to translate
$strPrivDescShutdown = 'Allows shutting down the server.'; //to translate
$strPrivDescSuper = 'Allows connectiong, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strPrivDescUpdate = 'Allows changing data.'; //to translate
$strPrivDescUsage = 'No privileges.'; //to translate
$strPrivilegesReloaded = 'The privileges were reloaded successfully.'; //to translate
$strProcesslist = 'Process list'; //to translate

$strQueryType = 'Query type'; //to translate

$strReceived = 'Received'; //to translate
$strRelationalSchema = 'Relational schema';  //to translate
$strReloadingThePrivileges = 'Reloading the privileges'; //to translate
$strRemoveSelectedUsers = 'Remove selected users'; //to translate
$strResourceLimits = 'Resource limits'; //to translate
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.'; //to translate
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.'; //to translate

$strSent = 'Sent'; //to translate
$strServerStatus = 'Runtime Information'; //to translate
$strServerStatusUptime = 'This MySQL server has been running for %s. It started up on %s.'; //to translate
$strServerTabProcesslist = 'Processes'; //to translate
$strServerTabVariables = 'Variables'; //to translate
$strServerVars = 'Server variables and settings'; //to translate
$strSessionValue = 'Session value'; //to translate
$strShowDatadictAs = 'Data Dictionary Format';  //to translate
$strStatus = 'Status'; //to translate

$strTableOfContents = 'Table of contents';  //to translate
$strThreadSuccessfullyKilled = 'Thread %s was successfully killed.'; //to translate
$strTime = 'Time'; //to translate
$strTotalUC = 'Total'; //to translate
$strTraffic = 'Traffic'; //to translate

$strUserOverview = 'User overview'; //to translate
$strUsersDeleted = 'The selected users have been deleted successfully.'; //to translate

$strVar = 'Variable'; //to translate

$strZeroRemovesTheLimit = 'Note: Setting these options to 0 (zero) removes the limit.'; //to translate

$strAddPrivilegesOnDb = 'Add privileges on the following database'; //to translate
$strAddPrivilegesOnTbl = 'Add privileges on the following table'; //to translate
$strColumnPrivileges = 'Column-specific privileges'; //to translate
$strDbPrivileges = 'Database-specific privileges'; //to translate
$strLocalhost = 'Local';
$strLoginInformation = 'Login Information'; //to translate
$strTblPrivileges = 'Table-specific privileges'; //to translate
$strThisHost = 'This Host'; //to translate
$strUserNotFound = 'The selected user was not found in the privilege table.'; //to translate
$strUserAlreadyExists = 'The user %s already exists!'; //to translate
$strUseTextField = 'Use text field'; //to translate

$strNoUsersSelected = 'No users selected.'; //to translate
$strDropUsersDb = 'Drop the databases that have the same names as the users.'; //to translate
$strAddedColumnComment = 'Added comment for column';  //to translate
$strWritingCommentNotPossible = 'Writing of comment not possible';  //to translate
$strAddedColumnRelation = 'Added relation for column';  //to translate
$strWritingRelationNotPossible = 'Writing of relation not possible';  //to translate
$strImportFinished = 'Import finished';  //to translate
$strFileCouldNotBeRead = 'File could not be read';  //to translate
$strIgnoringFile = 'Ignoring file %s';  //to translate
$strThisNotDirectory = 'This was not a directory';  //to translate
$strAbsolutePathToDocSqlDir = 'Please enter the absolute path on webserver to docSQL directory';  //to translate
$strImportFiles = 'Import files';  //to translate
$strDBGModule = 'Module';  //to translate
$strDBGLine = 'Line';  //to translate
$strDBGHits = 'Hits';  //to translate
$strDBGTimePerHitMs = 'Time/Hit, ms';  //to translate
$strDBGTotalTimeMs = 'Total time, ms';  //to translate
$strDBGMinTimeMs = 'Min time, ms';  //to translate
$strDBGMaxTimeMs = 'Max time, ms';  //to translate
$strDBGContextID = 'Context ID';  //to translate
$strDBGContext = 'Context';  //to translate
$strCantLoad = 'cannot load %s extension,<br />please check PHP Configuration';  //to translate
$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a';  //to translate
?>
