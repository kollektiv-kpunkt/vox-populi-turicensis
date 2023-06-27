<?php

return [

    /**
     * Language Lines for «Volksentscheide respektieren» petition
     *
     */

    "site" => [
        "title" => "Unterschreibe unsere Petition",
        "masthead" => "Volksentscheide müssen akzeptiert werden",
        "url" => "https://www.volksentscheide-respektieren.ch",
        "description" => "Die Rechten können es nicht lassen: Mit haltlosen Rekursen wollen sie die Einführung des Mindeslohns verhindern. Und das trotz klarem JA Resultat! Ich habe deshalb gerade einen Brief unterschrieben. Machst du auch mit?",
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
            ]
        ],
        "open" => "Jetzt unterschreiben!",
        "close" => "Schliessen",
        "submit" => "Unterschreiben",
        "successmessage" => "Vielen Dank für deine Unterschrift! Du erhältst in Kürze eine E-Mail mit einem Bestätigungslink. Bitte klicke auf diesen Link, um deine Unterschrift zu bestätigen.",
        "errormessage" => "Es ist ein Fehler aufgetreten. Bitte versuche es nochmals!"
    ],
    "email" => [
        "subject" => "Bitte bestätige deine E-Mail Adresse.",
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
        "text" => "Hoi👋\nDer Gewerbeverband und die Arbeitgebervereinigung können es nicht lassen: Mit haltlosen und unnützen Rekursen wollen sie die Einführung des Mindeslohns verhindern. Und das trotz klarem JA Resultat! Ich habe deshalb gerade einen Brief unterschrieben. Machst du auch mit?📝\n👉 https://volksentscheide-respektieren.ch",
        "tweet" => "Die Rechten können es nicht lassen: Mit haltlosen Rekursen wollen sie die Einführung des Mindeslohns verhindern. Und das trotz klarem JA Resultat! Ich habe deshalb gerade einen Brief unterschrieben. Machst du auch mit?📝\n#DemokratieRespektieren 👉 https://volksentscheide-respektieren.ch",
        "buttons" => [
            "whatsapp" => "Auf WhatsApp teilen",
            "telegram" => "Auf Telegram teilen",
            "facebook" => "Auf Facebook teilen",
            "twitter" => "Auf Twitter teilen",
            "email" => "Per E-Mail teilen"
        ]
    ]
];
