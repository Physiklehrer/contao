<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * Core translations are managed using Transifex. To create a new translation
 * or to help to maintain an existing one, please register at transifex.com.
 * 
 * @link http://help.transifex.com/intro/translating.html
 * @link https://www.transifex.com/projects/p/contao/language/it/
 * 
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'][0] = 'Titolo del sito';
$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'][1] = 'Inserisci il titolo del sito.';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][0] = 'Indirizzo e-mail dell\'amministratore di sistema';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][1] = 'I messaggi generati automaticamente, come ad esempio conferma iscrizione via e-mail, saranno inviate a questo indirizzo.';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][0] = 'Formato data';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][1] = 'Inserisci il formato per la data come utilizzato dalla funzione PHP date().';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][0] = 'Formato ora';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][1] = 'Inserisci un formato ora come utilizzato dalla funzione PHP date().';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][0] = 'Formato data e ora';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][1] = 'Inserisci un formato data e ora come utilizzato dalla funzione PHP date().';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][0] = 'Fuso orario';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][1] = 'Seleziona il tuo fuso orario.';
$GLOBALS['TL_LANG']['tl_settings']['websitePath'][0] = 'Percorso relativo della cartella di Contao';
$GLOBALS['TL_LANG']['tl_settings']['websitePath'][1] = 'Inserisci il percorso relativo della cartella che contiene i file di Contao (es: se entri nel backend di Contao dall\'indirizzo <em>www.tuodominio.com/tuositoweb/contao</em> il percorso relativo sarà <em>/tuositoweb</em>).';
$GLOBALS['TL_LANG']['tl_settings']['characterSet'][0] = 'Charset';
$GLOBALS['TL_LANG']['tl_settings']['characterSet'][1] = 'Inserisci il charset. Si raccomanda di utilizzare UTF-8 per assicurarsi che i caratteri particolari siano visualizzati correttamente. Non modificare il charset a meno che non riscontri errori di visualizzazione.';
$GLOBALS['TL_LANG']['tl_settings']['customSections'][0] = 'Sezioni personalizzate di layout';
$GLOBALS['TL_LANG']['tl_settings']['customSections'][1] = 'Qui è possibile inserire una lista separata da virgole delle sezioni personalizzate di layout. E\' possibile utilizzare queste sezioni nel modulo <em>layout di pagina</em> in aggiunta a <em>header</em>, <em>left</em>, <em>main</em>, <em>right</em> e <em>footer</em>.';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][0] = 'Disabilita il comando di scheduler';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][1] = 'Disabilita il comando scheduler periodico ed esegui lo script cron.php tramite un un reale cron job (occorre impostare manualmente il job)';
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'][0] = 'Minimizza il codice html';
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'][1] = 'Minimizza il codice HTML prima che la pagina venga inviata al browser (richiede la presenza dell\'estensione tidy di PHP).';
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'][0] = 'Compressione degli script';
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'][1] = 'Crea una versione compressa dei file CSS e JavaScript. Occorre adeguare il file .htaccess';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][0] = 'Numero di risultati per pagina';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][1] = 'Il numero di risultati per pagina è utilizzato per limitare i risultati delle query nel backend e non si applica al motore di ricerca.';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][0] = 'Numero massimo di elementi per pagina';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][1] = 'Questo limite viene utilizzato quando l\'utente sceglie l\'opzione "mostra tutti i record"';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][0] = 'Non chiudere gli elementi';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][1] = 'Non chiudere gli elementi e le altre risorse una volta visti in anteprima nel backend.';
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'][0] = 'Suffisso URL';
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'][1] = 'Il suffisso dell\'URL è un\'estensione dei file che si aggiunge all\'indirizzo per simulare un documento statico. Il suffisso di default è <em>.html</em>. Nota che un suffisso diverso da quello di default, potrebbe non essere ben accettato dai motori di ricerca.';
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'][0] = 'Modalità cache';
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'][1] = 'Selezionare la modalità cache';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'][0] = 'Rendi anonimi gli indirizzi IP';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'][1] = 'Rendi anonnimi gli indirizzi IP memorizzati nel database, fatta eccezione per la tabella tl_session (gli IP sono collegati alla sessione come misura di sicurezza)';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'][0] = 'Rendi anonimo Google Analytics';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'][1] = 'Rendi anonimi gli IP che vengono inviati a Google Analytics';
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'][0] = 'URL Rewrite';
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'][1] = 'Con questa opzione permetti a Contao di generare URL statici senza "index.php" (es: <em>alias.html</em> invece di <em>index.php/alias.html</em>). Questa caratteristica richiede il modulo Apache <em>mod_rewrite</em>!';
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'][0] = 'Aggiungi la lingua all\'URL';
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'][1] = 'Aggiungi la lingua come primo parametro degli URL (e.g. <em>http://domain.tld/it/</em>).';
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'][0] = 'Non reindirizzare gli URL vuoti';
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'][1] = 'In caso un URL sia vuoto mostra il sito invece di effettuare il reindirizzamento alla pagina root della lingua (non raccomandato)';
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'][0] = 'Utilizza il parametro auto_item';
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'][1] = 'Non inserire <em>items/</em> o <em>events/</em> negli URL e rileva automaticamente il tipo di elemento basandosi sul parametro <em>auto_item</em>';
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'][0] = 'Disabilita gli alias di pagina';
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'][1] = 'Se scegli questa opzione Contao userà gli ID di pagina invece degli alias di pagina per generare gli URLs (es: <em>12.html</em> invece di <em>home.html</em>).';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][0] = 'Tag html consentiti';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][1] = 'Inserisci una lista dei tag consentiti. Gli altri tag verranno rimossi dall\'input utente';
$GLOBALS['TL_LANG']['tl_settings']['debugMode'][0] = 'Modalità Debug';
$GLOBALS['TL_LANG']['tl_settings']['debugMode'][1] = 'Se selezioni questa opzione alcune informazioni di runtime (es: database queries) verranno visualizzate sullo schermo. Questa opzione è raccomandata solo per modifiche al sistema!';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][0] = 'Disabilita il token';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][1] = 'Seleziona questa opzione se si vuole disabilitare il controllo del token della richiesta. Attenzione: Questo potrebbe essere un potenziale rischio di sicurezza.';
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'][0] = 'Tempo di attesa in caso di blocco account';
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'][1] = 'Inserisci il tempo che un utente deve attendere prima che gli sia concesso di ritentare il login per un account bloccato (default: 5 minuti = 300 secondi). Si presume che questa caratteristica scoraggi gli attacchi brute-force.';
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'][0] = 'Mostra messaggi di errore';
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'][1] = 'Se selezioni questa opzione i messaggi di errore saranno visualizzati sullo schermo. Questa opzione è raccomandata solo per modifiche al sistema!';
$GLOBALS['TL_LANG']['tl_settings']['logErrors'][0] = 'Registra i messaggi di errore';
$GLOBALS['TL_LANG']['tl_settings']['logErrors'][1] = 'Scrive i messaggi di errore nel file di log (<em>system/logs/error.log</em>)';
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'][0] = 'Esegui Contao in safe mode';
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'][1] = 'Consenti solo il caricamento dei moduli principali di Contao.';
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'][0] = 'Disabilita controllo IP';
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'][1] = 'Questa opzione permette di non effettuare il controllo dell\'IP. Disabilitando questo controllo si mette a rischio la sicurezza del sito!';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][0] = 'Estensioni file download';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][1] = 'Inserisci una lista separata da virgole delle estensioni dei file che è possibile scaricare. Per motivi di sicurezza lo scaricamento dei file è limitato alla cartella dei files e alle sottocartelle.';
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'][0] = 'Estensoni file immagine';
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'][1] = 'Inserisci una lista separata da virgole delle estensioni delle immagini supportate. Non includere tipi di file che non possono essere gestiti da Contao o da tuoi script.';
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'][0] = 'Tipi di file modificabili';
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'][1] = 'Inserire una lista separata da virgole delle estensioni dei tipi di file che possono essere modificati tramite l\'editor interno di Contao';
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'][0] = 'Tipo file per i template';
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'][1] = 'Qui è possibile inserire la lista delle estensioni, separati da virgola, utilizzati per i file template.';
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'][0] = 'Massima larghezza immagini';
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'][1] = 'E\' possibile definire la larghezza massima delle immagini e dei file multimediali. Se la larghezza dell\'elemento contenuto eccede questo valore verrà ridotta automaticamente.';
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'][0] = 'Qualità delle miniature';
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'][1] = 'Inserire la qualità delle miniature in percentuale (si applica solo alle immagini di tipo jpeg)';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][0] = 'Larghezza massima immagini per libreria GD';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][1] = 'Inserire la larghezza massima dell\'immagine che la libreria GD deve cercare di gestire.';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][0] = 'Altezza massima immagini per libreria GD';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][1] = 'Inserire l\'altezza massima dell\'immagine che la libreria GD deve cercare di gestire.';
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'][0] = 'Cartella dei file';
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'][1] = 'Inserisci il percorso relativo alla cartella dei file (default: tl_files).';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][0] = 'Tipo di file validi per l\'upload';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][1] = 'Inserisci una lista separata da virgole delle estensioni dei file che è possibile caricare sul server';
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'][0] = 'Numero di upload simultanei';
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'][1] = 'Inserisci il massimo numero di upload simultanei.';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][0] = 'Massima dimensione di un file in upload';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][1] = 'Inserisci la dimensione massima di un file in upload espressa in bytes (default: 2 MB = 2048 KB = 2048000 bytes).';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][0] = 'Massima larghezza delle immagini';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][1] = 'Inserisci la massima larghezza per le immagini caricate espressa in pixels.';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][0] = 'Massima altezza delle immagini';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][1] = 'Inserisci la massima altezza per le immagini caricate espressa in pixels.';
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'][0] = 'Abilita motore di ricerca interno';
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'][1] = 'Indicizza in modo automatico le pagine di frontend in modo che siano trovate durante la ricerca interna';
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'][0] = 'Indicizza pagine protette';
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'][1] = 'Utilizza questa opzione con attenzione. Comunque si suggerisce di escludere sempre le pagine personali dall\'indicizzazione';
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'][0] = 'Usa SMTP per inviare e-mail';
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'][1] = 'Di default Contao utilizza la funzione PHP <em>mail()</em> per inviare e-mail. Qui è invece possibile scegliere di utilizzare un server SMTP.';
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'][0] = 'Hostname SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'][1] = 'Inserisci l\' hostname del tuo server SMTP (default: localhost).';
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'][0] = 'Username SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'][1] = 'Se il tuo server SMTP necessita l\'autenticazione, inserisci un username.';
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'][0] = 'Password SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'][1] = 'Se il tuo server SMTP necessita l\'autenticazione, inserisci la password.';
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'][0] = 'Metodo di crittografia SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'][1] = 'Seleziona un metodo di crittografia (SSL oppure TLS)';
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'][0] = 'Numero di porta SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'][1] = 'Inserisci il numero di porta del tuo serve SMTP (default: 25 oppure 465 per SSL).';
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'][0] = 'Moduli Back-end disattivati';
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'][1] = 'E\' possibile disattivare moduli backend non necessari.';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'][0] = 'Arco di tempo in cui vengono memorizzati i livelli di annullamento';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'][1] = 'Inserisci l\'arco di tempo in cui vengono memorizzati i livelli di annullamento in secondi (default: 24 ore = 86400 secondi).';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'][0] = 'Arco di tempo in cui vengono memorizzate le diverse versioni';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'][1] = 'Inserisci l\'arco di tempo in cui vengono memorizzate le diverse versioni in secondi (default: 90 giorni = 7776000 secondi).';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'][0] = 'Arco di tempo in cui vengono memorizzati i logs';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'][1] = 'Inserisci Arco di tempo in cui vengono memorizzati i dati di log in secondi (default: 14 giorni = 1209600 secondi).';
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'][0] = 'Durata sessione';
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'][1] = 'Inserisci la durata massima di una sessione in secondi (default: 60 minuti = 3600 secondi). Se non c\'è alcun input dall\'utente per più secondi di quelli indicati la sessione attuale verrà cancellata e l\'utente dovrà rifare il login.';
$GLOBALS['TL_LANG']['tl_settings']['autologin'][0] = 'Scadenza login automatico';
$GLOBALS['TL_LANG']['tl_settings']['autologin'][1] = 'Seleziona la scadenza per il login automatico (90 giorni = 7776000 secondi)';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][0] = 'Utente di default';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][1] = 'Una pagina appartiene allo stesso utente della pagina genitore. Tuttavia se non è stato assegnato nessun utente il proprietario della pagina diverrà l\'utente di default. Se non è stato assegnato un utente e non esiste un utente di default non ci saranno restrizioni di accesso!';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][0] = 'Gruppo di pagine di default';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][1] = 'Una pagina appartiene allo stesso gruppo della pagina genitore. Tuttavia se non è stato assegnato alcun gruppo verrà utilizzato il gruppo di default. Se non c\'è nè gruppo assegnato, nè gruppo di default non ci saranno restrizioni di accesso!';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][0] = 'Permessi pagina di default';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][1] = 'Una pagina utilizza gli stessi permessi della pagina genitore. Tuttavia se non è stato definito alcun permesso verranno utilizzati questi permessi di default.';
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'][0] = 'Live Update Url';
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'][1] = 'Inserisci l\'url del Live Update';
$GLOBALS['TL_LANG']['tl_settings']['title_legend'] = 'Titolo sito web';
$GLOBALS['TL_LANG']['tl_settings']['date_legend'] = 'Data e ora';
$GLOBALS['TL_LANG']['tl_settings']['global_legend'] = 'Configurazione generale';
$GLOBALS['TL_LANG']['tl_settings']['backend_legend'] = 'Configurazione backend';
$GLOBALS['TL_LANG']['tl_settings']['frontend_legend'] = 'Configurazione frontend';
$GLOBALS['TL_LANG']['tl_settings']['privacy_legend'] = 'Impostazioni Privacy';
$GLOBALS['TL_LANG']['tl_settings']['security_legend'] = 'Configurazione di sicurezza';
$GLOBALS['TL_LANG']['tl_settings']['files_legend'] = 'File ed immagini';
$GLOBALS['TL_LANG']['tl_settings']['uploads_legend'] = 'Impostazioni upload';
$GLOBALS['TL_LANG']['tl_settings']['search_legend'] = 'Impostazione motore di ricerca interno';
$GLOBALS['TL_LANG']['tl_settings']['smtp_legend'] = 'Configurazione SMTP';
$GLOBALS['TL_LANG']['tl_settings']['ftp_legend'] = 'Safe Mode Hack';
$GLOBALS['TL_LANG']['tl_settings']['modules_legend'] = 'Moduli disattivati';
$GLOBALS['TL_LANG']['tl_settings']['timeout_legend'] = 'Valori di timeout';
$GLOBALS['TL_LANG']['tl_settings']['chmod_legend'] = 'Diritti di accesso predefiniti';
$GLOBALS['TL_LANG']['tl_settings']['update_legend'] = 'Live Update (aggiornamento automatico)';
$GLOBALS['TL_LANG']['tl_settings']['static_legend'] = 'Risorse statiche';
$GLOBALS['TL_LANG']['tl_settings']['edit'] = 'Modifica la configurazione locale';
$GLOBALS['TL_LANG']['tl_settings']['both'] = 'Usa sia la cache del server che quella del browser';
$GLOBALS['TL_LANG']['tl_settings']['server'] = 'Usa solo la cache del server';
$GLOBALS['TL_LANG']['tl_settings']['browser'] = 'Usa solo la cache del browser';
$GLOBALS['TL_LANG']['tl_settings']['none'] = 'Disabilita caching';
