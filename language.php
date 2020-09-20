<?php
/**
 * Browsersprache cashen
 *
 * @param array allowed languages
 * @param string default language
 * @param mixed requested language (null = server default)
 * @param bool strict mode (default true)
 * @return string result language
 */
function lang_getfrombrowser ($allowed_languages, $default_language, $lang_variable = null, $strict_mode = true) {
// $_SERVER['HTTP_ACCEPT_LANGUAGE'] verwenden, wenn keine Sprachvariable mitgegeben wurde
    if ($lang_variable === null) {
        $lang_variable = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    }

// wurde irgendwelche Information mitgeschickt?
    if (empty($lang_variable)) {
// Nein? => Standardsprache zurückgeben
        return $default_language;
    }

// Den Header auftrennen
    $accepted_languages = preg_split('/,\s*/', $lang_variable);

// Die Standardwerte einstellen
    $current_lang = $default_language;
    $current_q = 0;

// Nun alle mitgegebenen Sprachen abarbeiten
    foreach ($accepted_languages as $accepted_language) {
// Alle Infos über diese Sprache rausholen
        $res = preg_match (
            '/^([a-z]{1,8}(?:-[a-z]{1,8})*)(?:;\s*q=(0(?:\.[0-9]{1,3})?|1(?:\.0{1,3})?))?$/i',
            $accepted_language,
            $matches
        );

// Syntax??
        if (!$res) {
// Nein? Dann ignorieren
            continue;
        }

// Sprache cashen und dann sofort in die Einzelteile trennen
        $lang_code = explode ('-', $matches[1]);

// Wurde eine Qualität mitgegeben?
        if (isset($matches[2])) {
// die Qualität benutzen
            $lang_quality = (float)$matches[2];
        } else {
// Kompabilitätsmodus: Qualität 1 annehmen
            $lang_quality = 1.0;
        }

// Bis der Sprachcode leer ist...
        while (count ($lang_code)) {
// mal sehen, ob der Sprachcode angeboten wird
            if (in_array (strtolower (join ('-', $lang_code)), $allowed_languages)) {
// Qualität anschauen
                if ($lang_quality > $current_q) {
// diese Sprache verwenden
                    $current_lang = strtolower (join ('-', $lang_code));
                    $current_q = $lang_quality;
// Hier die innere while-Schleife verlassen
                    break;
                }
            }
// bei Privatem Modus
            if ($strict_mode) {
// innere While-Schleife aufbrechen
                break;
            }
// den rechteste Teil des Sprachcodes abschneiden
            array_pop ($lang_code);
        }
    }

// return der gefundenen Sprache
    return $current_lang;
}

$allowed_langs = array ('de', 'en', 'ru');
$lang = lang_getfrombrowser ($allowed_langs, 'de', null, false);

require_once "languages/" . $lang. ".php";
