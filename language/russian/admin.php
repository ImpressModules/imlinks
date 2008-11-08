<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: language/russian/admin.php
*
* @copyright		http://www.xoops.org/ The XOOPS Project
* @copyright		XOOPS_copyrights.txt
* @copyright		http://www.impresscms.org/ The ImpressCMS Project
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since			1.03
* @author		John N
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since			1.03b and 1.03c
* @author		McDonald
* ----------------------------------------------------------------------------------------------------------
* @package		imLinks
* @since			1.00
* @author		McDonald
* @version		$Id$ Russian translation. Charset: utf-8 (without BOM)
*/
 
define( "_AM_IMLINKS_WARNINSTALL1", "<b>ПРЕДУПРЕЖДЕНИЕ:</b> <u>Каталог</u> %s имеется на Вашем сервере. <br />Из соображений безопасности, пожалуйста, удалите этот каталог." );
define( "_AM_IMLINKS_WARNINSTALL2", "<b>ПРЕДУПРЕЖДЕНИЕ:</b> <u>Файл</u> %s имеется на Вашем сервере. <br />Из соображений безопасности, пожалуйста, удалите этот файл." );
define( "_AM_IMLINKS_WARNINSTALL3", "<b>ПРЕДУПРЕЖДЕНИЕ:</b> <u>Каталога</u> %s нет на Вашем сервере. <br />Этот каталог требуется для imLinks." );

define( "_AM_IMLINKS_MODULE_NAME", "imLinks" );

define( "_AM_IMLINKS_BMODIFY", "Редактировать" );
define( "_AM_IMLINKS_BDELETE", "Удалить" );
define( "_AM_IMLINKS_BCREATE", "Создать" );
define( "_AM_IMLINKS_BADD", "Добавить" );
define( "_AM_IMLINKS_BAPPROVE", "Одобрить" );
define( "_AM_IMLINKS_BIGNORE", "Игнорировать" );
define( "_AM_IMLINKS_BCANCEL", "Отменить" );
define( "_AM_IMLINKS_BSAVE", "Сохранить" );
define( "_AM_IMLINKS_BRESET", "Сбросить" );
define( "_AM_IMLINKS_BMOVE", "Переместить ссылку" );
define( "_AM_IMLINKS_BUPLOAD", "Загрузить" );
define( "_AM_IMLINKS_BDELETEIMAGE", "Удалить выбранную картинку" );
define( "_AM_IMLINKS_BRETURN", "Вернитесь туда, где Вы были!" );
define( "_AM_IMLINKS_DBERROR", "Ошибка доступа к базе данных: Please report this error to the [url=http://community.impresscms.org/modules/newbb/viewforum.php?forum=9]ImpressCMS Community Forum - Module Support[/url] forum." );
// Other Options
define( "_AM_IMLINKS_TEXTOPTIONS", "Опции текста:" );
define( "_AM_IMLINKS_DISABLEHTML", " Отключить HTML тэги" );
define( "_AM_IMLINKS_DISABLESMILEY", " Отключить смайлики" );
define( "_AM_IMLINKS_DISABLEXCODE", " Отключить BBCodes" );
define( "_AM_IMLINKS_DISABLEIMAGES", " Отключить картинки" );
define( "_AM_IMLINKS_DISABLEBREAK", " Использовать ICMS конверсию разрыва строк?" );
define( "_AM_IMLINKS_UPLOADFILE", "Ссылка загружена" );
define( "_AM_IMLINKS_NOMENUITEMS", "Отсутствуют пункты меню" );
// Admin Bread crumb
define( "_AM_IMLINKS_PREFS", "Настройки" );
define( "_AM_IMLINKS_BUPDATE", "Обновление" );
define( "_AM_IMLINKS_BINDEX", "Индекс" );
define( "_AM_IMLINKS_BPERMISSIONS", "Права доступа" );
// define( "_AM_IMLINKS_BLOCKADMIN", "Блоки" );
define( "_AM_IMLINKS_BLOCKADMIN", "Установки блоков" );
define( "_AM_IMLINKS_GOMODULE", "В модуль" );
define( "_AM_IMLINKS_ABOUT", "О модуле" );
// Admin Summary
define( "_AM_IMLINKS_SCATEGORY", "Категории: " );
define( "_AM_IMLINKS_SFILES", "Ссылки: " );
define( "_AM_IMLINKS_SNEWFILESVAL", "Размещенные: " );
define( "_AM_IMLINKS_SMODREQUEST", "Редактированные: " );
define( "_AM_IMLINKS_SREVIEWS", "Просмотренные: " );

// Admin Main Menu
define( "_AM_IMLINKS_MCATEGORY", "Управление категориями" );
define( "_AM_IMLINKS_MLINKS", "Управление ссылками" );
define( "_AM_IMLINKS_MLISTBROKEN", "Список сбойных ссылок" );
define( "_AM_IMLINKS_MLISTPINGTIMES", "Отклик ссылок" );
define( "_AM_IMLINKS_INDEXPAGE", "Управление индексной страницей" );
define( "_AM_IMLINKS_MCOMMENTS", "Комментарии" );
define( "_AM_IMLINKS_MVOTEDATA", "Данные голосования" );
define( "_AM_IMLINKS_MUPLOADS", "Загрузка изображений" );

// Catgeory defines
define( "_AM_IMLINKS_CCATEGORY_CREATENEW", "Создание новой категории" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY", "Редактирование категории" );
define( "_AM_IMLINKS_CCATEGORY_MOVE", "Перемещение категории ссылок" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_TITLE", "Заголовок категории:" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_FAILED", "Неудачное перемещение ссылок: Невозможно переместить в эту категорию" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_FAILEDT", "Неудачное перемещение ссылок: Невозможно найти эту категорию" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_MOVED", "Ссылки перемещены и база данных обновлена" );
define( "_AM_IMLINKS_CCATEGORY_CREATED", "Новая категория создана и база данных обновлена" );
define( "_AM_IMLINKS_CCATEGORY_MODIFIED", "Выбранная категория отредактирована и база данных обновлена" );
define( "_AM_IMLINKS_CCATEGORY_DELETED", "Выбранная категория удалена и база данных обновлена" );
define( "_AM_IMLINKS_CCATEGORY_AREUSURE", "ПРЕДУПРЕЖДЕНИЕ: Вы действительно желаете удалить эту категорию и ВСЕ ссылки и комментарии, связанные с ней?" );
define( "_AM_IMLINKS_CCATEGORY_NOEXISTS", "Прежде чем добавлять новую ссылку, Вам нужно создать категорию" );
define( "_AM_IMLINKS_FCATEGORY_GROUPPROMPT", "Права доступа к категории:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Выбор группы, пользователи которой могут иметь доступ к этой категории.</span></div>" );
define( "_AM_IMLINKS_FCATEGORY_SUBGROUPPROMPT", "Права на размещение в категории:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Выбор группы, пользователи которой могут иметь доступ на размещение новых ссылок в этой категории.</span></div>" );
define( "_AM_IMLINKS_FCATEGORY_MODGROUPPROMPT", "Права на модерацию категории:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Выбор группы, пользователи которой могут иметь права модерации этой категории.</span></div>" );

define( "_AM_IMLINKS_FCATEGORY_TITLE", "Заголовок категории:" );
define( "_AM_IMLINKS_FCATEGORY_WEIGHT", "Вес категории:" );
define( "_AM_IMLINKS_FCATEGORY_SUBCATEGORY", "Родительская категория:" );
define( "_AM_IMLINKS_FCATEGORY_CIMAGE", "Выбор картинки категории:" );
define( "_AM_IMLINKS_FCATEGORY_DESCRIPTION", "Описание категории:" );
define( "_AM_IMLINKS_FCATEGORY_SUMMARY", "Резюме категории:" );
/**
 * Index page Defines
 */
define( "_AM_IMLINKS_IPAGE_UPDATED", "Индексная страница отредактирована и база данных обновлена" );
define( "_AM_IMLINKS_IPAGE_INFORMATION", "Информация об индексной странице" );
define( "_AM_IMLINKS_IPAGE_MODIFY", "Редактирование индексной страницы" );
define( "_AM_IMLINKS_IPAGE_CIMAGE", "Выбор картинки для индексной страницы:" );
define( "_AM_IMLINKS_IPAGE_CTITLE", "Заголовок на индексной странице:" );
define( "_AM_IMLINKS_IPAGE_CHEADING", "Тэг header индексной страницы:" );
define( "_AM_IMLINKS_IPAGE_CHEADINGA", "Расположение заголовка:" );
define( "_AM_IMLINKS_IPAGE_CFOOTER", "Подпись на индексной странице:" );
define( "_AM_IMLINKS_IPAGE_CFOOTERA", "Расположение подписи:" );
define( "_AM_IMLINKS_IPAGE_CLEFT", "Влево" );
define( "_AM_IMLINKS_IPAGE_CCENTER", "По центру" );
define( "_AM_IMLINKS_IPAGE_CRIGHT", "Вправо" );
/**
 * Permissions defines
 */
define( "_AM_IMLINKS_PERM_MANAGEMENT", "Управление правами доступа" );
define( "_AM_IMLINKS_PERM_PERMSNOTE", "<div><b>ВНИМАНИЕ:</b> Please be aware that even if you've set correct viewing permissions here, a group might not see the articles or blocks if you don't also grant that group permissions to access the module. To do that, go to <b>System admin > Groups</b>, choose the appropriate group and click the checkboxes to grant its members the access.</div>" );
define( "_AM_IMLINKS_PERM_CPERMISSIONS", "Права доступа к категории" );
define( "_AM_IMLINKS_PERM_CSELECTPERMISSIONS", "Выбор категорий, просмотр которых разрешен каждой группе пользователей" );
define( "_AM_IMLINKS_PERM_CNOCATEGORY", "Невозможно установить права доступа: Ни одной категории не создано!" );
define( "_AM_IMLINKS_PERM_FPERMISSIONS", "Права доступа к ссылкам" );
define( "_AM_IMLINKS_PERM_FNOFILES", "Невозможно установить права доступа: Ни одной ссылки не создано!" );
define( "_AM_IMLINKS_PERM_FSELECTPERMISSIONS", "Выбор ссылок, просмотр которых разрешен каждой группе пользователей" );
/**
 * Upload defines
 */
define( "_AM_IMLINKS_LINK_IMAGEUPLOAD", "Картинка загружена на сервер" );
define( "_AM_IMLINKS_LINK_NOIMAGEEXIST", "Ошибка: Ссылка для загрузки не выбрана. Пожалуйста, повторите снова!" );
define( "_AM_IMLINKS_LINK_IMAGEEXIST", "Картинка уже существует в области загрузок!" );
define( "_AM_IMLINKS_LINK_FILEDELETED", "Ссылка удалена." );
define( "_AM_IMLINKS_LINK_FILEERRORDELETE", "Ошибка во время удаления ссылки: Ссылка на сервере не найдена." );
define( "_AM_IMLINKS_LINK_NOFILEERROR", "Ошибка во время удаления ссылки: Не выбрана ссылка для удаления." );
define( "_AM_IMLINKS_LINK_DELETEFILE", "ПРЕДУПРЕЖДЕНИЕ: Вы действительно желаете удалить эту картинку ссылки?" );
define( "_AM_IMLINKS_LINK_IMAGEINFO", "Статусы сервера" );
define( "_AM_IMLINKS_LINK_SPHPINI", "<b>Информация взята из PHP ini:</b>" );
define( "_AM_IMLINKS_LINK_SAFEMODESTATUS", "Статус Safe Mode: " );
define( "_AM_IMLINKS_LINK_REGISTERGLOBALS", "Статус Register Globals: " );
define( "_AM_IMLINKS_LINK_SERVERUPLOADSTATUS", "Статус Server Uploads: " );
define( "_AM_IMLINKS_LINK_MAXUPLOADSIZE", "Макс. разрешенный размер загрузки: " );
define( "_AM_IMLINKS_LINK_MAXPOSTSIZE", "Макс. разрешенный размер сообщения: " );
define( "_AM_IMLINKS_LINK_SAFEMODEPROBLEMS", " (Это может быть проблемой)" );
define( "_AM_IMLINKS_LINK_GDLIBSTATUS", "Поддержка GD библиотеки: " );
define( "_AM_IMLINKS_LINK_GDLIBVERSION", "Версия GD библиотеки: " );
define( "_AM_IMLINKS_LINK_GDON", "<b>Включено</b> (контрольки доступны)" );
define( "_AM_IMLINKS_LINK_GDOFF", "<b>Отключено</b> (контрольки не доступны)" );
define( "_AM_IMLINKS_LINK_OFF", "<b>Откл</b>" );
define( "_AM_IMLINKS_LINK_ON", "<b>Вкл</b>" );
define( "_AM_IMLINKS_LINK_CATIMAGE", "Картинки категории" );
define( "_AM_IMLINKS_LINK_SCREENSHOTS", "Образы экрана" );
define( "_AM_IMLINKS_LINK_MAINIMAGEDIR", "Основные картинки" );
define( "_AM_IMLINKS_LINK_FCATIMAGE", "Путь к картинкам категорий" );
define( "_AM_IMLINKS_LINK_FSCREENSHOTS", "Путь к образам экрана" );
define( "_AM_IMLINKS_LINK_FMAINIMAGEDIR", "Основной путь" );
define( "_AM_IMLINKS_LINK_FUPLOADIMAGETO", "Загрузка картинки" );
define( "_AM_IMLINKS_LINK_FUPLOADPATH", "Путь для загрузки: " );
define( "_AM_IMLINKS_LINK_FUPLOADURL", "URL картинки: " );
define( "_AM_IMLINKS_LINK_FOLDERSELECTION", "Выбор пункта назначения загрузки:" );
define( "_AM_IMLINKS_LINK_FSHOWSELECTEDIMAGE", "Показать выбранную картинку:" );
define( "_AM_IMLINKS_LINK_FUPLOADIMAGE", "Загрузить новую картинку по выбранному назначению:" );

// Main Index defines
define( "_AM_IMLINKS_MINDEX_LINKSUMMARY", "Резюме модуля" );
define( "_AM_IMLINKS_MINDEX_PUBLISHEDLINK", "Опубликованные ссылки:" );
define( "_AM_IMLINKS_MINDEX_AUTOPUBLISHEDLINK", "Автоматически опубликованные ссылки:" );
define( "_AM_IMLINKS_MINDEX_AUTOEXPIRE", "Автоматически устаревшие ссылки:" );
define( "_AM_IMLINKS_MINDEX_EXPIRED", "Устаревшие ссылки:" );
define( "_AM_IMLINKS_MINDEX_OFFLINELINK", "Временно отключенные ссылки:" );
define( "_AM_IMLINKS_MINDEX_ID", "ID" );
define( "_AM_IMLINKS_MINDEX_TITLE", "Заголовок ссылки" );
define( "_AM_IMLINKS_MINDEX_POSTER", "Отправитель" );
define( "_AM_IMLINKS_MINDEX_ONLINE", "Статус" );
define( "_AM_IMLINKS_MINDEX_ONLINESTATUS", "Статус включения" );
define( "_AM_IMLINKS_MINDEX_PUBLISH", "Опубликовано" );
define( "_AM_IMLINKS_MINDEX_PUBLISHED", "Опубликовано" );
define( "_AM_IMLINKS_MINDEX_EXPIRE", "Устарело" );
define( "_AM_IMLINKS_MINDEX_NOTSET", "Дата не установлена" );
define( "_AM_IMLINKS_MINDEX_SUBMITTED", "Дата размещения" );

define( "_AM_IMLINKS_MINDEX_ACTION", "Действие" );
define( "_AM_IMLINKS_MINDEX_NOLINKSFOUND", "СООБЩЕНИЕ: Нет ссылок, соответствующих этому критерию" );
define( "_AM_IMLINKS_MINDEX_PAGE", "<b>Страница:<b> " );
define( '_AM_IMLINKS_MINDEX_PAGEINFOTXT', '<ul><li>Подробности главной страницы imLinks.</li><li>Вы можете просто изменить логотип, заголовок, шапку и подпись на индексной странице по своему желанию</li></ul><br />Внимание: Выбранный логотип будет использован во всем модуле imLinks.' );
define( "_AM_IMLINKS_MINDEX_RESPONSE", "Время отклика" );
// Submitted Links
define( "_AM_IMLINKS_SUB_SUBMITTEDFILES", "Размещенные ссылки" );
define( "_AM_IMLINKS_SUB_FILESWAITINGINFO", "Ожидание информации о ссылках" );
define( "_AM_IMLINKS_SUB_FILESWAITINGVALIDATION", "Ожидание проверки достоверности ссылок: " );
define( "_AM_IMLINKS_SUB_APPROVEWAITINGFILE", "<b>Одобрить</b> информацию о новой ссылке без валидации (проверки достоверности)." );
define( "_AM_IMLINKS_SUB_EDITWAITINGFILE", "<b>Редактировать</b> информацию о новой ссылке и затем одобрить." );
define( "_AM_IMLINKS_SUB_DELETEWAITINGFILE", "<b>Удалить</b> информацию о новой ссылке." );
define( "_AM_IMLINKS_SUB_NOFILESWAITING", "Нет ссылок, соответствующих этому критерию" );
define( "_AM_IMLINKS_SUB_NEWFILECREATED", "Данные о новой ссылке созданы и база данных обновлена" );
// Vote Information
define( "_AM_IMLINKS_VOTE_RATINGINFOMATION", "Голосование" );
define( "_AM_IMLINKS_VOTE_TOTALVOTES", "Всего голосов: " );
define( "_AM_IMLINKS_VOTE_REGUSERVOTES", "Голосов пользователей: %s" );
define( "_AM_IMLINKS_VOTE_ANONUSERVOTES", "Голосов гостей: %s" );
define( "_AM_IMLINKS_VOTE_USER", "Пользователь" );
define( "_AM_IMLINKS_VOTE_IP", "IP адрес" );
define( "_AM_IMLINKS_VOTE_DATE", "Размещено" );
define( "_AM_IMLINKS_VOTE_RATING", "Оценка" );
define( "_AM_IMLINKS_VOTE_NOREGVOTES", "Нет голосов зарегистрированных пользователей" );
define( "_AM_IMLINKS_VOTE_NOUNREGVOTES", "Нет голосов незарегистрированных пользователей" );
define( "_AM_IMLINKS_VOTE_VOTEDELETED", "Данные голосования удалены." );
define( "_AM_IMLINKS_VOTE_ID", "ID" );
define( "_AM_IMLINKS_VOTE_FILETITLE", "Заголовок ссылки" );
define( "_AM_IMLINKS_VOTE_DISPLAYVOTES", "Данные голосования" );
define( "_AM_IMLINKS_VOTE_NOVOTES", "Нет голосов для показа" );
define( "_AM_IMLINKS_VOTE_DELETE", "Нет голосов для показа" );
define( "_AM_IMLINKS_VOTE_DELETEDSC", "<b>Удаление</b> выбранной информации о голосовании из базы данных." );
define( "_AM_IMLINKS_VOTEDELETED", "Выбранные голоса удалены и база данных обновлена" );

define( "_AM_IMLINKS_VOTE_USERAVG", "Средняя оценка" );
define( "_AM_IMLINKS_VOTE_TOTALRATE", "Всего голосов" );
define( "_AM_IMLINKS_VOTE_MAXRATE", "Макс. Item голосования" );
define( "_AM_IMLINKS_VOTE_MINRATE", "Мин. Item голосования" );
define( "_AM_IMLINKS_VOTE_MOSTVOTEDTITLE", "Наибольшее кол-во голосов за" );
define( "_AM_IMLINKS_VOTE_LEASTVOTEDTITLE", "Наименьшее кол-во голосов за" );
define( "_AM_IMLINKS_VOTE_MOSTVOTERSUID", "Наиболее активный голосующий" );
define( "_AM_IMLINKS_VOTE_REGISTERED", "Голоса пользователей" );
define( "_AM_IMLINKS_VOTE_NONREGISTERED", "Голоса гостей" );
// Modifications
define( "_AM_IMLINKS_MOD_TOTMODREQUESTS", "Всего запросов на модификацию: " );
define( "_AM_IMLINKS_MOD_MODREQUESTS", "Модифицированные ссылки" );
define( "_AM_IMLINKS_MOD_MODREQUESTSINFO", "Информация о модифицированных ссылках" );
define( "_AM_IMLINKS_MOD_MODID", "ID" );
define( "_AM_IMLINKS_MOD_MODTITLE", "Заголовок" );
define( "_AM_IMLINKS_MOD_MODPOSTER", "Первоначальный отправитель: " );
define( "_AM_IMLINKS_MOD_DATE", "Размещено" );
define( "_AM_IMLINKS_MOD_NOMODREQUEST", "Нет запросов, удовлетворяющих этому критерию" );
define( "_AM_IMLINKS_MOD_TITLE", "Заголовок ссылки: " );
define( "_AM_IMLINKS_MOD_LID", "ID ссылки: " );
define( "_AM_IMLINKS_MOD_CID", "Категория: " );
define( "_AM_IMLINKS_MOD_URL", "Url ссылки: " );
define( "_AM_IMLINKS_MOD_PUBLISHER", "Издатель: " );
define( "_AM_IMLINKS_MOD_FORUMID", "Форум: " );
define( "_AM_IMLINKS_MOD_SCREENSHOT", "Образ экрана: " );
define( "_AM_IMLINKS_MOD_HOMEPAGE", "Главная страница: " );
define( "_AM_IMLINKS_MOD_HOMEPAGETITLE", "Заголовок главной страницы: " );
define( "_AM_IMLINKS_MOD_SHOTIMAGE", "Образ экрана: " );
define( "_AM_IMLINKS_MOD_DESCRIPTION", "Описание: " );
define( "_AM_IMLINKS_MOD_MODIFYSUBMITTER", "Кто разместил: " );
define( "_AM_IMLINKS_MOD_MODIFYSUBMIT", "Кто разместил" );
define( "_AM_IMLINKS_MOD_PROPOSED", "Подробности предложенной ссылки" );
define( "_AM_IMLINKS_MOD_ORIGINAL", "Подробности оригинальной ссылки" );
define( "_AM_IMLINKS_MOD_REQDELETED", "Запрос на редактирование удален из базы данных" );
define( "_AM_IMLINKS_MOD_REQUPDATED", "Выбранная ссылка отредактирована и база данных обновлена" );
define( '_AM_IMLINKS_MOD_VIEW', 'Просмотр' );
// Link management
define( "_AM_IMLINKS_LINK_ID", "ID ссылки: " );
define( "_AM_IMLINKS_LINK_IP", "IP адрес разместившего: " );
define( "_AM_IMLINKS_LINK_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Разрешенные административные расширения</b>:</div>" );
define( "_AM_IMLINKS_LINK_MODIFYFILE", "Редактировать информацию о ссылке" );
define( "_AM_IMLINKS_LINK_CREATENEWFILE", "Создание новой ссылки" );
define( "_AM_IMLINKS_LINK_TITLE", "Заголовок ссылки: " );
define( "_AM_IMLINKS_LINK_DLURL", "URL ссылки: " );
define( "_AM_IMLINKS_LINK_DIRCA", " Оценка Internet-контента: " );
define( "_AM_IMLINKS_LINK_DESCRIPTION", "Описание ссылки: " );
define( "_AM_IMLINKS_LINK_CATEGORY", "Основная категория ссылки: " );
define( "_AM_IMLINKS_LINK_FILESSTATUS", " Перевести ссылку в автономный режим?<br /><br /><span style='font-weight: normal;'>ссылка не будет видна всем пользователям.</span>" );
define( "_AM_IMLINKS_LINK_SETASUPDATED", " Установить статус ссылки как обновленный?<br /><br /><span style='font-weight: normal;'>будет показана иконка обновления.</span>" );
define( "_AM_IMLINKS_LINK_SHOTIMAGE", "Образ экрана ссылки: " );
define( "_AM_IMLINKS_LINK_DISCUSSINFORUM", "Добавить дискуссию на этом форуме?" );
define( "_AM_IMLINKS_LINK_PUBLISHDATE", "Дата публикации ссылки:" );
define( "_AM_IMLINKS_LINK_EXPIREDATE", "Дата устаревания ссылки:" );
define( "_AM_IMLINKS_LINK_CLEARPUBLISHDATE", "<br /><br />Перемещение даты публикации:" );
define( "_AM_IMLINKS_LINK_CLEAREXPIREDATE", "<br /><br />Перемещение даты устаревания:" );
define( "_AM_IMLINKS_LINK_PUBLISHDATESET", " Установлена дата публикации: " );
define( "_AM_IMLINKS_LINK_SETDATETIMEPUBLISH", " Установить дату/время публикации" );
define( "_AM_IMLINKS_LINK_SETDATETIMEEXPIRE", " Установить дату/время устаревания" );
define( "_AM_IMLINKS_LINK_SETPUBLISHDATE", "<b>Дата публикации: </b>" );
define( "_AM_IMLINKS_LINK_SETNEWPUBLISHDATE", "<b>Установка новой даты публикации: </b><br />Опубликовано:" );
define( "_AM_IMLINKS_LINK_SETPUBDATESETS", "<b>Установка даты публикации: </b><br />Опубликовать на дату:" );
define( "_AM_IMLINKS_LINK_EXPIREDATESET", " Установка даты устаревания: " );
define( "_AM_IMLINKS_LINK_SETEXPIREDATE", "<b>Установка даты устаревания: </b>" );
define( "_AM_IMLINKS_LINK_DELEDITMESS", "Удалить сообщение о сбойных ссылках?<br /><br /><span style='font-weight: normal;'>When you choose <b>ДА</b> the Broken Report will automatically deleted and you confirm that the link now works again.</span>" );
define( "_AM_IMLINKS_LINK_MUSTBEVALID", "Screenshot image must be a valid image link under %s directory (например: shot.gif). Leave it blank if there is no image link." );
define( "_AM_IMLINKS_LINK_EDITAPPROVE", "Одобрение ссылки:" );
define( "_AM_IMLINKS_LINK_NEWFILEUPLOAD", "Новая ссылка создана и база данных обновлена" );
define( "_AM_IMLINKS_LINK_FILEMODIFIEDUPDATE", "Выбранная ссылка отредактирована и база данных обновлена" );
define( "_AM_IMLINKS_LINK_REALLYDELETEDTHIS", "Действительно удалить выбранную ссылку?" );
define( "_AM_IMLINKS_LINK_FILEWASDELETED", "Ссылка %s удалена из базы данных!" );
define( "_AM_IMLINKS_LINK_FILEAPPROVED", "Ссылка одобрена и база данных обновлена" );
define( "_AM_IMLINKS_LINK_CREATENEWSSTORY", "<b>Создать новостийное сообщение из ссылки</b>" );
define( "_AM_IMLINKS_LINK_SUBMITNEWS", "Разместить новую ссылку как запись новостей?" );
define( "_AM_IMLINKS_LINK_NEWSCATEGORY", "Выбор категории новостей для размещения новости:" );
define( "_AM_IMLINKS_LINK_NEWSTITLE", "Заголовок новости:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Оставьте пустым, чтобы использовать заголовок ссылки</span></div>" );
define( "_AM_IMLINKS_LINK_PUBLISHER", "Имя издателя ссылки: " );

/**
 * Broken links defines
 */
define( "_AM_IMLINKS_SBROKENSUBMIT", "Сбойные: " );
define( "_AM_IMLINKS_BROKEN_FILE", "Отчет о сбойных" );
define( "_AM_IMLINKS_BROKEN_FILEIGNORED", "Отчет о сбойных ссылках удален из базы данных!" );
define( "_AM_IMLINKS_BROKEN_NOWACK", "Авторитетный статус изменен и база данных обновлена!" );
define( "_AM_IMLINKS_BROKEN_NOWCON", "Подтверждающий статус изменн и база данных обновлена!" );
define( "_AM_IMLINKS_BROKEN_REPORTINFO", "Информационный отчет о сбойных ссылках" );
define( "_AM_IMLINKS_BROKEN_REPORTSNO", "Ожидание отчета о сбойных ссылках:" );
define( "_AM_IMLINKS_BROKEN_IGNOREDESC", "<b>Игнорировать</b> the report and only deletes the broken link report." );
define( "_AM_IMLINKS_BROKEN_DELETEDESC", "<b>Удалить</b> the reported link data and broken link reports for the link." );
define( "_AM_IMLINKS_BROKEN_EDITDESC", "<b>Редактировать</b> ссылку для разрешения проблемы." );
define( "_AM_IMLINKS_BROKEN_ACKDESC", "<b>Авторитетный</b> Set Acknowledged state of broken file report." );
define( "_AM_IMLINKS_BROKEN_CONFIRMDESC", "<b>Подтвержденный</b> Set confirmed state of broken link report." );
define( "_AM_IMLINKS_BROKEN_ACKNOWLEDGED", "Авторитетный" );
define( "_AM_IMLINKS_BROKEN_DCONFIRMED", "Подтвержденный" );

define( "_AM_IMLINKS_BROKEN_ID", "ID" );
define( "_AM_IMLINKS_BROKEN_TITLE", "Заголовок" );
define( "_AM_IMLINKS_BROKEN_REPORTER", "Докладчик" );
define( "_AM_IMLINKS_BROKEN_FILESUBMITTER", "Кто разместил" );
define( "_AM_IMLINKS_BROKEN_DATESUBMITTED", "Дата размещения" );
define( "_AM_IMLINKS_BROKEN_ACTION", "Действие" );
define( "_AM_IMLINKS_BROKEN_NOFILEMATCH", "There are no Broken reports that match this critera" );
define( "_AM_IMLINKS_BROKENFILEDELETED", "Сбойная ссылка и отчет о ней удалены из базы данных" );
/**
 * About defines
 */
define( "_AM_IMLINKS_BY", " " );
// block defines
define( "_AM_IMLINKS_BADMIN", "Управление блоками" );
define( "_AM_IMLINKS_BLKDESC", "Описание" );
define( "_AM_IMLINKS_TITLE", "Заголовок" );
define( "_AM_IMLINKS_SIDE", "Выравнивание" );
define( "_AM_IMLINKS_WEIGHT", "Вес" );
define( "_AM_IMLINKS_VISIBLE", "Видимость" );
define( "_AM_IMLINKS_ACTION", "Действие" );
define( "_AM_IMLINKS_SBLEFT", "Влево" );
define( "_AM_IMLINKS_SBRIGHT", "Вправо" );
define( "_AM_IMLINKS_CBLEFT", "По центру влево" );
define( "_AM_IMLINKS_CBRIGHT", "По центру вправо" );
define( "_AM_IMLINKS_CBCENTER", "По центру посередине" );
define( "_AM_IMLINKS_ACTIVERIGHTS", "Активация" );
define( "_AM_IMLINKS_ACCESSRIGHTS", "Доступ" );
// image admin icon
define( "_AM_IMLINKS_ICO_EDIT", "Редактировать" );
define( "_AM_IMLINKS_ICO_DELETE", "Удалить" );
define( "_AM_IMLINKS_ICO_RESOURCE", "Редактировать этот ресурс" );

define( "_AM_IMLINKS_ICO_ONLINE", "Вкл" );
define( "_AM_IMLINKS_ICO_OFFLINE", "Откл" );
define( "_AM_IMLINKS_ICO_APPROVED", "Одобрено" );
define( "_AM_IMLINKS_ICO_NOTAPPROVED", "Не одобрено" );

define( "_AM_IMLINKS_ICO_LINK", "Связанная ссылка" );
define( "_AM_IMLINKS_ICO_URL", "Добавить связанный URL" );
define( "_AM_IMLINKS_ICO_ADD", "Добавить" );
define( "_AM_IMLINKS_ICO_APPROVE", "Одобрить" );
define( "_AM_IMLINKS_ICO_STATS", "Статистика" );
define( "_AM_IMLINKS_ICO_VIEW", "Просмотр" );

define( "_AM_IMLINKS_ICO_IGNORE", "Игнорировать" );
define( "_AM_IMLINKS_ICO_ACK", "Broken Report Acknowledged" );
define( "_AM_IMLINKS_ICO_REPORT", "Acknowledge Broken Report?" );
define( "_AM_IMLINKS_ICO_CONFIRM", "Broken Report Confirmed" );
define( "_AM_IMLINKS_ICO_CONBROKEN", "Confirm Broken Report?" );
define( "_AM_IMLINKS_ICO_RES", "Edit Resources/Links for this Item" );
define( "_AM_IMLINKS_MOD_URLRATING", "Оценка Interent-контента:" );
// Alternate category
define( "_AM_IMLINKS_ALTCAT_CREATEF", "Добавить альтенативную категорию" );
define( "_AM_IMLINKS_MALTCAT", "Управление альтернативной категорией" );
define( "_AM_IMLINKS_ALTCAT_MODIFYF", "Управление альтернативной категорией" );
define( "_AM_IMLINKS_ALTCAT_INFOTEXT", "<ul><li>Альтернативные категории могут быть созданы и сохранены через эту форму.</li></ul>" );
define( '_AM_IMLINKS_ALTCAT_CREATED', 'Альтернативные категори сохранены' );

define( "_AM_IMLINKS_MRESOURCES", "Управление ресурсами" );
define( "_AM_IMLINKS_RES_CREATED", "Управление ресурсами" );
define( "_AM_IMLINKS_RES_ID", "ID" );
define( "_AM_IMLINKS_RES_DESC", "Описание" );
define( "_AM_IMLINKS_RES_NAME", "Наименование ресурса" );
define( "_AM_IMLINKS_RES_TYPE", "Тип ресурса" );
define( "_AM_IMLINKS_RES_USER", "Пользователь" );
define( "_AM_IMLINKS_RES_CREATEF", "Добавить ресурс" );
define( "_AM_IMLINKS_RES_MODIFYF", "Добавить ресурс" );
define( "_AM_IMLINKS_RES_NAMEF", "Наименование ресурса:" );
define( "_AM_IMLINKS_RES_DESCF", "Описание ресурса:" );
define( "_AM_IMLINKS_RES_URLF", "URL ресурса:" );
define( "_AM_IMLINKS_RES_ITEMIDF", "Resource Item ID:" );
define( "_AM_IMLINKS_RES_INFOTEXT", "<ul><li>New resources can be added, edited or removed easily via this form.</li>
	<li>List all resources linked to a link</li>
	<li>Modify resource name and description</li></ul>
	" );
define( "_AM_IMLINKS_LISTBROKEN", "Показаны ссылки, которые, возможно, являются сбойными. ВНИМАНИЕ: Этот результат может быть не совсем правильным.<br /><br />Пожалуйста, до принятия каких-либо действий проверьте ссылку на существование.<br /><br />" );
define( "_AM_IMLINKS_PINGTIMES", "Показано время отклика на первый ping для каждой ссылки.<br /><br />ВНИМАНИЕ: Этот результат может быть не совсем правильным.<br /><br />" );

define( "_AM_IMLINKS_NO_FORUM", "Форум не выбран" );

define( "_AM_IMLINKS_PERM_RATEPERMISSIONS", "Права доступа к оценке" );
define( "_AM_IMLINKS_PERM_RATEPERMISSIONS_TEXT", "Select the groups that can rate a link in the selected categories." );

define( "_AM_IMLINKS_PERM_AUTOPERMISSIONS", "Автоодобрение ссылок" );
define( "_AM_IMLINKS_PERM_AUTOPERMISSIONS_TEXT", "Select the groups that will have new links auto approved without admin intervention." );

define( "_AM_IMLINKS_PERM_SPERMISSIONS", "Submitter Permissions" );
define( "_AM_IMLINKS_PERM_SPERMISSIONS_TEXT", "Select the groups who can submit new links to selected categories." );

define( "_AM_IMLINKS_PERM_APERMISSIONS", "Группы модераторов" );
define( "_AM_IMLINKS_PERM_APERMISSIONS_TEXT", "Select the groups who have moderator privligages for the selected categories." );

// added by McDonald
define( "_AM_IMLINKS_COUNTRY", "Страна:" );
define( "_AM_IMLINKS_KEYWORDS", "Ключевые слова:" );
define( "_AM_IMLINKS_KEYWORDS_NOTE", "Ключевые слова должны быть разделены запятыми (keyword1, keyword2, keyword3, ..)" );
define( "_AM_IMLINKS_CHECKURL", "Проверка URL" );
define( "_AM_IMLINKS_CATTITLE", "Категория" );
define( "_AM_IMLINKS_LINK_GOOGLEMAP", "Google Maps" );
define( "_AM_IMLINKS_LINK_YAHOOMAP", "Yahoo Maps" );
define( "_AM_IMLINKS_LINK_MULTIMAP", "Multimap" );
define( "_AM_IMLINKS_LINK_CHECKMAP", "Check map" );
define( "_AM_IMLINKS_STREET1", "Улица 1" );
define( "_AM_IMLINKS_STREET2", "Улица 2 (опционально)" );
define( "_AM_IMLINKS_TOWN", "Город" );
define( "_AM_IMLINKS_STATE", "Область" );
define( "_AM_IMLINKS_ZIPCODE", "Почтовый индекс" );
define( "_AM_IMLINKS_TELEPHONE", "Телефон" );
define( "_AM_IMLINKS_FAX", "Факс" );

// Version 1.05 RC2
define( "_AM_IMLINKS_WARNINSTALL4", "<b>ПРЕДУПРЕЖДЕНИЕ:</b> <u>Folder</u> %s is not writeable. <br />This folder needs to be writeable (CHMOD 777) for imLinks." );
// Version 1.05 RC5
define( "_AM_IMLINKS_VOIP", "VoIP" );
define( "_AM_IMLINKS_LINK_SUBMITTER", "Имя разместившего ссылку: " );
define( "_AM_IMLINKS_MOBILE", "Мобильный" );
define( "_AM_IMLINKS_CATSPONSOR", "Выбор спонсора категории:" );
define( "_AM_IMLINKS_CATSPONSORDSC", "If you select a Client the banner id from the form below will not be saved!" );
define( "_AM_IMLINKS_BANNER", "Баннер" );
define( "_AM_IMLINKS_FBANNER", "Баннер" );
define( "_AM_IMLINKS_BANNERID", "Выбор ID баннера:" );
define( "_AM_IMLINKS_BANNERIDDSC", "If you have selected a Client in the form above the banner id will not be saved!" );

// Version 1.05 RC6
define( "_AM_IMLINKS_VAT", "Регистрационный номер VAT" );
define( "_AM_IMLINKS_VATWIKI", "Подробнее смотрите на <a href='http://en.wikipedia.org/wiki/Value_added_tax_identification_number' target='_blank'>Wikipedia</a>" );
define( "_AM_IMLINKS_EMAIL", "E-Mail" );
define( "_AM_IMLINKS_ICO_EXPIRE", "Устарело" );
define( "_AM_IMLINKS_LINK_NORESPONSE", 'Нет отклика' );
define( "_AM_IMLINKS_LINK_CREATEADDRESS", '&nbsp;<b>Об адресе ссылки</b>' );
define( "_AM_IMLINKS_LINK_MISCLINKSETTINGS", '&nbsp;<b>Прочие установки ссылки</b>' );

// Version 1.06 RC1
define( "_AM_IMLINKS_READWRITEERROR", "You either did not choose a file to upload or the server has insufficient read/writes to upload this file!" );
define( "_AM_IMLINKS_INVALIDFILESIZE", "Неверный размер файла" );
define( "_AM_IMLINKS_FILENAMEEMPTY", "Имя файла не указано" );
define( "_AM_IMLINKS_NOFILEUPLOAD", "Файл не загружен, это ошибка" );
define( "_AM_IMLINKS_UPLOADERRORZERO", "Проблема при загрузке. Ошибка: 0" );
define( "_AM_IMLINKS_UPLOADERRORONE", "Файл для загрузки слишком большой. Ошибка: 1" );
define( "_AM_IMLINKS_UPLOADERRORTWO", "Файл для загрузки слишком большой. Ошибка: 2" );
define( "_AM_IMLINKS_UPLOADERRORTHREE", "The file you are trying upload was only partially uploaded. Ошибка: 3" );
define( "_AM_IMLINKS_UPLOADERRORFOUR", "Файл для загрузки не выбран. Ошибка: 4" );
define( "_AM_IMLINKS_UPLOADERRORFIVE", "Файл для загрузки не выбран. Ошибка: 5" );
define( "_AM_IMLINKS_NOUPLOADDIR", "Не установлен каталог для загрузки" );
define( "_AM_IMLINKS_FAILOPENDIR", "Ошибка при открытии каталога: " );
define( "_AM_IMLINKS_FAILOPENDIRWRITEPERM", "Ошибка при открытии каталога с правами на запись: " );
define( "_AM_IMLINKS_FILESIZEMAXSIZE", "File Size: %u. Maximum Size Allowed: %u" );
define( "_AM_IMLINKS_FILESIZEMAXWIDTH", "File width: %u. Maximum width allowed: %u" );
define( "_AM_IMLINKS_FILESIZEMAXHEIGHT", "File height: %u. Maximum height allowed: %u" );
define( "_AM_IMLINKS_MIMENOTALLOW", "Неразрешенный MIME-тип: " );
define( "_AM_IMLINKS_FAILEDUPLOADING", "Сбой при загрузке файла: " );
define( "_AM_IMLINKS_FILE", "Файл " );
define( "_AM_IMLINKS_ALREADYEXISTTRYAGAIN", " already exists on the server. Please rename this file and try again.<br />" );
define( "_AM_IMLINKS_ERRORSRETURNUPLOAD", "<h4>Errors Returned While Uploading</h4>" );
define( "_AM_IMLINKS_DOESNOTEXIST", " не существует!" );
define( "_AM_IMLINKS_INFORMATION", "Информация о ссылке" );
define( "_AM_IMLINKS_HITS", "Обращений: " );
define( "_AM_IMLINKS_PAGERANK", "PageRank™: ");
define( "_AM_IMLINKS_ERROR_CATISCAT", "You can NOT set a category as a sub-category of itself!" );
define( "_AM_IMLINKS_MOD_COUNTRY", "Страна:" );
define( "_AM_IMLINKS_MOD_KEYWORDS", "Ключевые слова:" );
define( "_AM_IMLINKS_MOD_ITEM_TAG", "Тэги:" );
define( "_AM_IMLINKS_MOD_GOOGLEMAP", "Google Maps:" );
define( "_AM_IMLINKS_MOD_YAHOOMAP", "Yahoo Maps:" );
define( "_AM_IMLINKS_MOD_MULTIMAP", "Multimap:" );
define( "_AM_IMLINKS_MOD_STREET1", "Улица 1:" );
define( "_AM_IMLINKS_MOD_STREET2", "Улица 2 (опционально):" );
define( "_AM_IMLINKS_MOD_TOWN", "Город:" );
define( "_AM_IMLINKS_MOD_STATE", "Область:" );
define( "_AM_IMLINKS_MOD_ZIP", "Почтовый индекс:" );
define( "_AM_IMLINKS_MOD_TEL", "Телефон:" );
define( "_AM_IMLINKS_MOD_FAX", "Факс:" );
define( "_AM_IMLINKS_MOD_VOIP", "VoIP:" );
define( "_AM_IMLINKS_MOD_MOBILE", "Мобильный:" );
define( "_AM_IMLINKS_MOD_EMAIL", "E-Mail:" );
define( "_AM_IMLINKS_MOD_VAT", "VAT:" );

// version 1.06 RC-2
define( "_AM_IMLINKS_IPAGE_SHOWLATEST", "Показать последние ссылки?" );
define( "_AM_IMLINKS_IPAGE_LATESTTOTAL", "Сколько ссылок показывать?" );
define( "_AM_IMLINKS_IPAGE_LATESTTOTAL_DSC", "0 Отключение опции." );

//version 1.06 Final
define( "_AM_IMLINKS_DOCUMENTATION", "Документация(англ.)" );
define( "_AM_IMLINKS_SHOWNOIMAGE", "Нет картинок" );
define( "_AM_IMLINKS_NOSELECTION", "Не выбрано" );
define( "_AM_IMLINKS_NOFILESELECT", "Файл не выбран" );
?>