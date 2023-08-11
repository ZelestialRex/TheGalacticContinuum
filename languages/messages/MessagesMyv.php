<?php
/** Erzya (эрзянь)
 *
 * @file
 * @ingroup Languages
 *
 * @author Amdf
 * @author Botuzhaleny-sodamo
 * @author Erzianj jurnalist
 * @author Kaganer
 * @author MF-Warburg
 * @author Spacebirdy
 * @author Sura
 * @author Tupikovs
 * @author Urhixidur
 * @author Игорь Бродский
 */

$fallback = 'mdf, ru';

$namespaceNames = [
	NS_MEDIA            => 'Медия',
	NS_SPECIAL          => 'Башка_тевень',
	NS_TALK             => 'Кортамо',
	NS_USER             => 'Теиця',
	NS_USER_TALK        => 'Теицянь_кортамось',
	NS_PROJECT_TALK     => '$1_кортамось',
	NS_FILE             => 'Артовкс',
	NS_FILE_TALK        => 'Артовксто_кортамось',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki-нь_кортамось',
	NS_TEMPLATE         => 'ЛопаПарцун',
	NS_TEMPLATE_TALK    => 'ЛопаПарцундо_кортамось',
	NS_HELP             => 'Лезкс',
	NS_HELP_TALK        => 'Лезкстэ_кортамось',
	NS_CATEGORY         => 'Категория',
	NS_CATEGORY_TALK    => 'Категориядо_кортамось',
];

// Remove Russian aliases
$namespaceGenderAliases = [];

/** @phpcs-require-sorted-array */
$specialPageAliases = [
	'Allmessages'               => [ 'ВесеПачтямнэть' ],
	'Allpages'                  => [ 'ВесеЛопат' ],
	'Ancientpages'              => [ 'ТюштяПингеньЛопат' ],
	'Blankpage'                 => [ 'ЧавоЛопа' ],
	'Block'                     => [ 'СаймасСаемсIP' ],
	'Booksources'               => [ 'КнигаЛисьмапрят' ],
	'BrokenRedirects'           => [ 'СинденьЛиявНевтемат' ],
	'Categories'                => [ 'Категорият' ],
	'ChangePassword'            => [ 'СовамоВалоньПолавтома' ],
	'Contributions'             => [ 'Поладкст' ],
	'CreateAccount'             => [ 'ТеемсШкамсСовамоТарка' ],
	'Deadendpages'              => [ 'ЛисемаСюлмавомаПевтемеЛопат' ],
	'DoubleRedirects'           => [ 'КавтоньКирданьЛиявНевтемат' ],
	'ExpandTemplates'           => [ 'ПоладомсЛопаПарцунт' ],
	'Export'                    => [ 'Экспортировамс' ],
	'Fewestrevisions'           => [ 'ВесемедеАламокстьЛиякстомтозь' ],
	'Filepath'                  => [ 'ФайланьКи' ],
	'Import'                    => [ 'Импортировамс' ],
	'Listfiles'                 => [ 'АртовксКерькс' ],
	'Lockdb'                    => [ 'СёлгомсДБ' ],
	'Lonelypages'               => [ 'СькамнестЛопат', 'УрозЛопат' ],
	'Longpages'                 => [ 'КувакаЛопат' ],
	'MIMEsearch'                => [ 'MIMEВешнема' ],
	'Mostcategories'            => [ 'ВесемедеЛамоКатегорияМарто' ],
	'Mostimages'                => [ 'ВесемедеЛамоАртовксМарто' ],
	'Mostlinked'                => [ 'СехтеЛамоСюлмавомаПеМартот' ],
	'Mostlinkedcategories'      => [ 'СехтеЛамоСюлмавомаПеМартоКатегорият' ],
	'Mostlinkedtemplates'       => [ 'СехтеЛамоСюлмавомаПеМартоЛопаПарцунт' ],
	'Mostrevisions'             => [ 'ВесемедеЛамокстьЛиякстомтозь' ],
	'Movepage'                  => [ 'ПечтевтемсЛопа' ],
	'Mycontributions'           => [ 'МонМезеТеинь' ],
	'MyLanguage'                => [ 'Келем' ],
	'Mypage'                    => [ 'МоньЛопам' ],
	'Mytalk'                    => [ 'МоньКортамом' ],
	'Newimages'                 => [ 'ОдАртовкст' ],
	'Newpages'                  => [ 'ОдЛопат' ],
	'Protectedpages'            => [ 'ВанстоньЛопат' ],
	'Protectedtitles'           => [ 'ВанстоньКонякст' ],
	'Randompage'                => [ 'КодамоПонгсьЛопа' ],
	'Recentchanges'             => [ 'ЧыяконьПолавтомат' ],
	'Recentchangeslinked'       => [ 'МалавиксПолавтомат' ],
	'Revisiondelete'            => [ 'ЛиякстомтоманьНардамо' ],
	'Search'                    => [ 'Вешнемс' ],
	'Shortpages'                => [ 'НурькинеЛопат' ],
	'Specialpages'              => [ 'БашкаТевеньЛопат' ],
	'Statistics'                => [ 'Статистика' ],
	'Uncategorizedcategories'   => [ 'КатегориясАпакСовавтоСатегорият' ],
	'Uncategorizedimages'       => [ 'КатегориявтомоАртовкст' ],
	'Uncategorizedpages'        => [ 'КатегориявтомоЛопат' ],
	'Uncategorizedtemplates'    => [ 'КатегориявтомоЛопаПарцунт' ],
	'Undelete'                  => [ 'Вельмевтемс' ],
	'Unlockdb'                  => [ 'ПанжомсДБ' ],
	'Unusedcategories'          => [ 'ТевсАНолдавицяКатегорият' ],
	'Unusedimages'              => [ 'ТевсАНолдавицяАртовкст' ],
	'Unusedtemplates'           => [ 'ТевсАпакНолдаЛопаПарцунт' ],
	'Unwatchedpages'            => [ 'ВанстнемавтомоЛопат' ],
	'Upload'                    => [ 'Ёвкстамо' ],
	'Userlogin'                 => [ 'ТеицяСовамо' ],
	'Userlogout'                => [ 'ТеицяЛисема' ],
	'Userrights'                => [ 'ТеицяньВидечыть' ],
	'Version'                   => [ 'Версия' ],
	'Wantedcategories'          => [ 'ВешезьКатегорият' ],
	'Wantedfiles'               => [ 'ВешезьФайлат' ],
	'Wantedpages'               => [ 'ВешезьЛопат' ],
	'Wantedtemplates'           => [ 'ВешезьЛопапарцунт' ],
	'Watchlist'                 => [ 'ВанстнемаКерькс' ],
	'Whatlinkshere'             => [ 'ТезэньКодамтСюлмавомаПеть' ],
];

/** @phpcs-require-sorted-array */
$magicWords = [
	'currentday'                => [ '1', 'МОЛИЦЯЧЫ', 'ТЕКУЩИЙ_ДЕНЬ', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'МОЛИЦЯЧЫ2', 'ТЕКУЩИЙ_ДЕНЬ_2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'МОЛИЦЯЧЫЛЕМ', 'НАЗВАНИЕ_ТЕКУЩЕГО_ДНЯ', 'CURRENTDAYNAME' ],
	'currentdow'                => [ '1', 'МОЛИЦЯ_ЧИ', 'ТЕКУЩИЙ_ДЕНЬ_НЕДЕЛИ', 'CURRENTDOW' ],
	'currenthour'               => [ '1', 'МОЛИЦЯЦЯС', 'ТЕКУЩИЙ_ЧАС', 'CURRENTHOUR' ],
	'currentmonth'              => [ '1', 'МОЛИЦЯКОВ', 'ТЕКУЩИЙ_МЕСЯЦ', 'ТЕКУЩИЙ_МЕСЯЦ_2', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonthabbrev'        => [ '1', 'МОЛИЦЯКОВКИРЬТЯНЬХВОРМА', 'НАЗВАНИЕ_ТЕКУЩЕГО_МЕСЯЦА_АБР', 'CURRENTMONTHABBREV' ],
	'currentmonthname'          => [ '1', 'МОЛИЦЯКОВЛЕМ', 'НАЗВАНИЕ_ТЕКУЩЕГО_МЕСЯЦА', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'МОЛИЦЯКОВЛЕМГЕН', 'НАЗВАНИЕ_ТЕКУЩЕГО_МЕСЯЦА_РОД', 'CURRENTMONTHNAMEGEN' ],
	'currenttime'               => [ '1', 'МОЛИЦЯШКА', 'ТЕКУЩЕЕ_ВРЕМЯ', 'CURRENTTIME' ],
	'currentversion'            => [ '1', 'ТЕВАТЕВЕРСИЯ', 'ТЕКУЩАЯ_ВЕРСИЯ', 'CURRENTVERSION' ],
	'currentweek'               => [ '1', 'МОЛИЦЯ_ТАРГО', 'ТЕКУЩАЯ_НЕДЕЛЯ', 'CURRENTWEEK' ],
	'currentyear'               => [ '1', 'МОЛИЦЯИЕ', 'ТЕКУЩИЙ_ГОД', 'CURRENTYEAR' ],
	'displaytitle'              => [ '1', 'НЕВТЕМС_КОНЯКС', 'ПОКАЗАТЬ_ЗАГОЛОВОК', 'DISPLAYTITLE' ],
	'filepath'                  => [ '0', 'ФАЙЛАНЬКИ', 'ПУТЬ_К_ФАЙЛУ:', 'FILEPATH:' ],
	'fullpagename'              => [ '1', 'ЛОПАЛЕМКУВАКАСТО', 'ПОЛНОЕ_НАЗВАНИЕ_СТРАНИЦЫ', 'FULLPAGENAME' ],
	'gender'                    => [ '0', 'СЫМЕ:', 'ПОЛ:', 'GENDER:' ],
	'img_bottom'                => [ '1', 'алкс', 'снизу', 'bottom' ],
	'img_center'                => [ '1', 'куншкасо', 'центр', 'center', 'centre' ],
	'img_framed'                => [ '1', 'кундсо', 'обрамить', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'кундовтомо', 'безрамки', 'frameless' ],
	'img_left'                  => [ '1', 'керш_кедь', 'слева', 'left' ],
	'img_middle'                => [ '1', 'куншка', 'посередине', 'middle' ],
	'img_none'                  => [ '1', 'вейкеяк_арась', 'без', 'none' ],
	'img_page'                  => [ '1', 'лопа=$1', 'лопа_$1', 'страница=$1', 'страница_$1', 'страница $1', 'page=$1', 'page $1' ],
	'img_right'                 => [ '1', 'вить_кедь', 'справа', 'right' ],
	'img_text_bottom'           => [ '1', 'текст-алкс', 'текст-снизу', 'text-bottom' ],
	'img_text_top'              => [ '1', 'текст-верькс', 'текст-сверху', 'text-top' ],
	'img_thumbnail'             => [ '1', 'кенжешка', 'мини', 'миниатюра', 'thumb', 'thumbnail' ],
	'img_top'                   => [ '1', 'верькс', 'сверху', 'top' ],
	'language'                  => [ '0', '#КЕЛЕСЬ:', '#ЯЗЫК:', '#LANGUAGE:' ],
	'lc'                        => [ '0', 'ВИШКА_ТЕШТЬКЕСЭ:', 'МАЛЕНЬКИМИ_БУКВАМИ:', 'LC:' ],
	'lcfirst'                   => [ '0', 'ВАСЕНЦЕ_ТЕШТЬКЕСЬ_ВИШКИНЕ:', 'ПЕРВАЯ_БУКВА_МАЛЕНЬКАЯ:', 'LCFIRST:' ],
	'localday'                  => [ '1', 'ТЕСКЭНЬЧЫ', 'МЕСТНЫЙ_ДЕНЬ', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'ТЕСКЭНЬЧЫ2', 'МЕСТНЫЙ_ДЕНЬ_2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'ТЕСКЭНЬЧЫЛЕМ', 'НАЗВАНИЕ_МЕСТНОГО_ДНЯ', 'LOCALDAYNAME' ],
	'localhour'                 => [ '1', 'ТЕСКЭНЬЦЯС', 'МЕСТНЫЙ_ЧАС', 'LOCALHOUR' ],
	'localmonth'                => [ '1', 'ТЕСКЭНЬКОВ', 'МЕСТНЫЙ_МЕСЯЦ', 'МЕСТНЫЙ_МЕСЯЦ_2', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonthabbrev'          => [ '1', 'ТЕСКЭНЬКОВКИРЬТЯНЬХВОРМА', 'НАЗВАНИЕ_МЕСТНОГО_МЕСЯЦА_АБР', 'LOCALMONTHABBREV' ],
	'localmonthname'            => [ '1', 'ТЕСКЭНЬКОВЛЕМ', 'НАЗВАНИЕ_МЕСТНОГО_МЕСЯЦА', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'ТЕСКЭНЬКОВЛЕМГЕН', 'НАЗВАНИЕ_МЕСТНОГО_МЕСЯЦА_РОД', 'LOCALMONTHNAMEGEN' ],
	'localtime'                 => [ '1', 'ТЕСКЭНЬШКА', 'МЕСТНОЕ_ВРЕМЯ', 'LOCALTIME' ],
	'localweek'                 => [ '1', 'ТЕСКЭНЬТАРГО', 'МЕСТНАЯ_НЕДЕЛЯ', 'LOCALWEEK' ],
	'localyear'                 => [ '1', 'ТЕСКЭНЬИЕ', 'МЕСТНЫЙ_ГОД', 'LOCALYEAR' ],
	'msg'                       => [ '0', 'ПАЧТЯМНЭ:', 'СООБЩЕНИЕ:', 'СООБЩ:', 'MSG:' ],
	'namespace'                 => [ '1', 'ЛЕМПОТМО', 'ПРОСТРАНСТВО_ИМЁН', 'NAMESPACE' ],
	'numberofadmins'            => [ '1', 'ЗЯРОАДМИНТНЭДЕ', 'КОЛИЧЕСТВО_АДМИНИСТРАТОРОВ', 'NUMBEROFADMINS' ],
	'numberofarticles'          => [ '1', 'ЗЯРОСЁРМАДОВКСТ', 'КОЛИЧЕСТВО_СТАТЕЙ', 'NUMBEROFARTICLES' ],
	'numberofedits'             => [ '1', 'ЗЯРОВИТНЕМАТПЕТНЕМАТ', 'КОЛИЧЕСТВО_ПРАВОК', 'NUMBEROFEDITS' ],
	'numberoffiles'             => [ '1', 'ЗЯРОФАЙЛАТ', 'КОЛИЧЕСТВО_ФАЙЛОВ', 'NUMBEROFFILES' ],
	'numberofpages'             => [ '1', 'ЗЯРОЛОПАТ', 'КОЛИЧЕСТВО_СТРАНИЦ', 'NUMBEROFPAGES' ],
	'numberofusers'             => [ '1', 'ЗЯРОТЕИЦЯТ', 'КОЛИЧЕСТВО_УЧАСТНИКОВ', 'NUMBEROFUSERS' ],
	'pagename'                  => [ '1', 'ЛОПАЛЕМ', 'НАЗВАНИЕ_СТРАНИЦЫ', 'PAGENAME' ],
	'pagesize'                  => [ '1', 'ЛОПАКУВАЛМО', 'РАЗМЕР_СТРАНИЦЫ', 'PAGESIZE' ],
	'plural'                    => [ '0', 'ЛАМОНЬЧИСЛА', 'МНОЖЕСТВЕННОЕ_ЧИСЛО:', 'PLURAL:' ],
	'raw'                       => [ '0', 'ВЕРЕКСТЭ', 'НЕОБРАБ:', 'RAW:' ],
	'revisionday'               => [ '1', 'ЛИЯКСТОМТОМАЧЫ', 'ДЕНЬ_ВЕРСИИ', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'ЛИЯКСТОМТОМАЧЫ2', 'ДЕНЬ_ВЕРСИИ_2', 'REVISIONDAY2' ],
	'revisionid'                => [ '1', 'ЛИЯКСТОМТОМАID', 'ИД_ВЕРСИИ', 'REVISIONID' ],
	'revisionmonth'             => [ '1', 'ЛИЯКСТОМТОМАКОВ', 'МЕСЯЦ_ВЕРСИИ', 'REVISIONMONTH' ],
	'revisionyear'              => [ '1', 'ЛИЯКСТОМТОМАИЕ', 'ГОД_ВЕРСИИ', 'REVISIONYEAR' ],
	'sitename'                  => [ '1', 'САЙТЛЕМ', 'НАЗВАНИЕ_САЙТА', 'SITENAME' ],
	'special'                   => [ '0', 'башка_тевень', 'служебная', 'special' ],
	'talkpagename'              => [ '1', 'КОРТАМОЛОПАЛЕМ', 'НАЗВАНИЕ_СТРАНИЦЫ_ОБСУЖДЕНИЯ', 'TALKPAGENAME' ],
	'talkspace'                 => [ '1', 'КОРТАМОПОТМО', 'ПРОСТРАНСТВО_ОБСУЖДЕНИЙ', 'TALKSPACE' ],
	'uc'                        => [ '0', 'ПОШК_ТЕШТЬКЕСЭ:', 'БОЛЬШИМИ_БУКВАМИ:', 'UC:' ],
	'ucfirst'                   => [ '0', 'ВАСЕНЦЕ_ТЕШТЬКЕСЬ_ПОКШ:', 'ПЕРВАЯ_БУКВА_БОЛЬШАЯ:', 'UCFIRST:' ],
	'url_path'                  => [ '0', 'ЯН', 'ПУТЬ', 'PATH' ],
	'url_wiki'                  => [ '0', 'ВИКИ', 'WIKI' ],
];
