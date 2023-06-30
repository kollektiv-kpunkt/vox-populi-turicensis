<?php

return [

    /**
     * Language Lines for «Volksentscheide respektieren» petition
     *
     */

    "site" => [
        "title" => "Firma la nostra lettera di protesta!",
        "masthead" => "i referendom popolari si rispettano!",
        "url" => "https://www.volksentscheide-respektieren.ch",
        "description" => "L'associazione di categoria e l'associazione dei datori di lavoro non possono lasciar perdere: Vogliono ritardare l'introduzione del salario minimo con ricorsi infondati e inutili. E questo nonostante un chiaro risultato di SI! Per questo ho appena firmato una lettera. Partecipa anche tu?",
    ],
    "landing" => [
        "title" => "i referendom popolari si rispettano!",
        "teaser" => [
            "title" => "Signora Barandun, Signor Anwander, prendete atto delle decisioni democratiche!",
            "content" => "Abbiamo votato. E l’elettorato ha deciso. Eppure l’associazione di categoria e il sindacato padronale non vogliono accettare i referendum popolari. Presentando ricorsi privi di ogni fondamento, tentano di ritardare l’introduzione dei salari minimi a Zurigo e Winterthur. <b>Non è così che funziona la nostra democrazia!</b> Con questa lettera vi esortiamo ad accettare la vostra sconfitta e a smettere di violare i diritti democratici."
        ]
    ],
    "form" => [
        "title" => "Füge deinen Namen hinzu!",
        "defaultPrivacy" => "Ich bin einverstanden, dass mich das Komitee auf dem Laufenden hält. <a class=\"underline\" href=\"/privacy\">Mehr dazu in unseren Datenschutzbestimmungen</a>.",
        "fields" => [
            [
                "type" => "text",
                "name" => "data[fname]",
                "label" => "NOME",
                "required" => true
            ],
            [
                "type" => "text",
                "name" => "data[lname]",
                "label" => "Cognome",
                "required" => true
            ],
            [
                "type" => "email",
                "name" => "email",
                "label" => "INDIRIZZO E-MAIL",
                "required" => true,
                "class" => "fullwidth"
            ],
            [
                "type" => "checkbox",
                "name" => "optin",
                "label" => supporterPrivacyText(),
                "required" => false,
                "checked" => true,
                "class" => "fullwidth"
            ],
            [
                "type" => "checkbox",
                "name" => "public",
                "label" => "Acconsento alla pubblicazione del mio nome sul sito web.",
                "required" => false,
                "checked" => true,
                "class" => "fullwidth"
            ],
        ],
        "open" => "Jetzt unterschreiben!",
        "close" => "Schliessen",
        "submit" => "Firmare",
        "successmessage" => "Vielen Dank für deine Unterschrift! Du erhältst in Kürze eine E-Mail mit einem Bestätigungslink. Bitte klicke auf diesen Link, um deine Unterschrift zu bestätigen.",
        "errormessage" => "Es ist ein Fehler aufgetreten. Bitte versuche es nochmals!"
    ],
    "letter" => [
        "addressants" => [
            [
                "upperline" => "An die Präsidentin des Gewerbeverbandes der Stadt Zürich",
                "person" => "Nicole Barandun-Gross"
            ],
            [
                "upperline" => "An den Präsidenten der Handelskammer und Arbeitgebervereinigung Winterthur",
                "person" => "Thomas Anwander"
            ],
        ],
        "initialSigners" => [
            "Hannah Pfalzgraf" => "Co-Präsidentin GBKZ",
            "Serge Gnos" => "Co-Geschäftsleiter Unia Zürich-Schaffhausen",
            "Adriana Santos" => "Reinigungsangestellte",
            "Susanna Bosshard" => "Zeitungsverträgerin",
            "Montserrat Puertas" => "Reinigungsangestellte",
            "Angela Siciliano" => "Hilfsköchin",
            "Francisca Castro" => "Reinigungsangestellte",
            "Maria Filomena da Cruz" => "Raumpflegerin",
            "Carmela Simonato" => "Platzanweiserin",
            "Gabrielly Sirino" => "Reinigungsangestellte",
            "Isabel Vargas" => "Reinigungsangestellte"
        ]
    ],
    "thx" => [
        "title" => "Grazie per la firma, [fname]!",
        "content" => [
            "<b>Grazie per aver firmato la nostra lettera, [fname]!</b> Insieme possiamo riuscire a fare pressione sull'associazione di categoria e sull'associazione dei datori di lavoro.",
            "Abbiamo bisogno del vostro aiuto per raggiungere il maggior numero di persone possibile! <b>Potete condividere la nostra lettera con chi vi circonda?</b> Grazie per il tuo aiuto!"
        ],
        "home" => "Torna alla homepage"
    ],
    "email" => [
        "from" => [
            "name" => "Comitato «i referendom popolari si rispettano!»",
            "address" => env('MAIL_FROM_ADDRESS')
        ]
    ],
    "verification" => [
        "verified" => [
            "title" => "Vielen Dank!",
            "text" => "Deine E-Mail Adresse wurde erfolgreich bestätigt.",
            "tohome" => "Zur Startseite"
        ],
        "failed" => [
            "title" => "Es ist etwas schief gelaufen :(",
            "text" => "Deine E-Mail Adresse konnte nicht bestätigt werden. Bitte versuche es später noch einmal oder kontaktiere uns!",
            "tohome" => "Zur Startseite"
        ]
    ],
    "share" => [
        "title" => "Hilf mit und teile unseren Brief!",
        "sharetitle" => "Volksentscheide müssen akzeptiert werden: Unterschreibe jetzt unseren offenen Brief! ",
        "text" => "Ciao👋\nL'associazione di categoria e l'associazione dei datori di lavoro non possono lasciar perdere: Vogliono ritardare l'introduzione del salario minimo con ricorsi infondati e inutili. E questo nonostante un chiaro risultato di SI! Per questo ho appena firmato una lettera. Partecipa anche tu?📝\n👉 https://volksentscheide-respektieren.ch",
        "tweet" => "Die Rechten können es nicht lassen: Mit haltlosen Rekursen wollen sie die Einführung des Mindestlohns verzögern. Und das trotz klarem JA Resultat! Ich habe deshalb gerade einen Brief unterschrieben. Machst du auch mit?📝\n#DemokratieRespektieren 👉 https://volksentscheide-respektieren.ch",
        "buttons" => [
            "whatsapp" => "Condividi su WhatsApp",
            "telegram" => "Condividi su Telegram",
            "facebook" => "Condividi su Facebook",
            "twitter" => "Condividi su Twitter",
            "email" => "Condividi per e-mail",
        ]
    ]
];
