<?php

return [

    /**
     * Language Lines for «Volksentscheide respektieren» petition
     *
     */

    "site" => [
        "title" => "Unterschreibe unseren Protestbrief!",
        "masthead" => "Volksentscheide müssen akzeptiert werden",
        "url" => "https://www.volksentscheide-respektieren.ch",
        "description" => "Die Rechten können es nicht lassen: Mit haltlosen Rekursen wollen sie die Einführung des Mindeslohns verhindern. Und das trotz klarem JA Resultat! Ich habe deshalb gerade einen Brief unterschrieben. Machst du auch mit?",
    ],
    "landing" => [
        "title" => "Volksentscheide respektieren!",
        "teaser" => [
            "title" => "Akzeptieren Sie demokratische Entscheide, Frau Barandun und Herr Anwander!",
            "content" => "Wir haben abgestimmt. Und die Stimmbevölkerung hat sich entschieden. Doch der Gewerbeverband und die Arbeitgebervereinigung wollen die Volksentscheide nicht akzeptieren. Mit haltlosen Rekursen versuchen sie die Einführung der Mindestlöhne in Zürich und Winterthur um Jahre zu verzögern. <b>So funktioniert unsere Demokratie nicht!</b> Mit diesem Brief fordern wir sie dazu auf, ihre Niederlage zu akzeptieren und demokratische Rechte nicht weiter zu missbrauchen."
        ]
    ],
    "form" => [
        "title" => "Füge deinen Namen hinzu!",
        "defaultPrivacy" => "Ich bin einverstanden, dass mich das Komitee auf dem Laufenden hält. <a class=\"underline\" href=\"/privacy\">Mehr dazu in unseren Datenschutzbestimmungen</a>.",
        "fields" => [
            [
                "type" => "text",
                "name" => "data[fname]",
                "label" => "Vorname",
                "required" => true
            ],
            [
                "type" => "text",
                "name" => "data[lname]",
                "label" => "Nachname",
                "required" => true
            ],
            [
                "type" => "email",
                "name" => "email",
                "label" => "E-Mail Adresse",
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
                "label" => "Mein Name darf auf der Webseite veröffentlicht werden.",
                "required" => false,
                "checked" => true,
                "class" => "fullwidth"
            ],
        ],
        "open" => "Jetzt unterschreiben!",
        "close" => "Schliessen",
        "submit" => "Unterschreiben",
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
        "title" => "Danke für deine Unterschrift, [fname]!",
        "content" => [
            "<b>Danke, dass du unseren Brief unterschrieben hast, [fname]!</b> Zusammen können wir es schaffen, Druck auf den Gewerbeverband und die Arbeitgebervereinigung aufzubauen.",
            "Damit wir möglichst viele Menschen erreichen, sind wir auf deine Hilfe angewiesen! <b>Kannst du unseren Brief in deinem Umfeld teilen?</b> Danke für deine Hilfe!"
        ],
        "home" => "Zurück zur Startseite"
    ],
    "email" => [
        "from" => [
            "name" => "Komitee «Volksentscheide akzeptieren!»",
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
        "text" => "Hoi👋\nDer Gewerbeverband und die Arbeitgebervereinigung können es nicht lassen: Mit haltlosen und unnützen Rekursen wollen sie die Einführung des Mindestlohns verzögern. Und das trotz klarem JA Resultat! Ich habe deshalb gerade einen Brief unterschrieben. Machst du auch mit?📝\n👉 https://volksentscheide-respektieren.ch",
        "tweet" => "Die Rechten können es nicht lassen: Mit haltlosen Rekursen wollen sie die Einführung des Mindestlohns verzögern. Und das trotz klarem JA Resultat! Ich habe deshalb gerade einen Brief unterschrieben. Machst du auch mit?📝\n#DemokratieRespektieren 👉 https://volksentscheide-respektieren.ch",
        "buttons" => [
            "whatsapp" => "Auf WhatsApp teilen",
            "telegram" => "Auf Telegram teilen",
            "facebook" => "Auf Facebook teilen",
            "twitter" => "Auf Twitter teilen",
            "email" => "Per E-Mail teilen"
        ]
    ]
];
