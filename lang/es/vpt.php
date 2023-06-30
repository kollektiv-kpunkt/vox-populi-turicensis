<?php

return [

    /**
     * Language Lines for «Volksentscheide respektieren» petition
     *
     */

    "site" => [
        "title" => "¡Firma nuestra carta de protesta!",
        "masthead" => "¡RESPETEN EL RESULTADO DEL REFERÉNDUM!",
        "url" => "https://www.volksentscheide-respektieren.ch",
        "description" => "A associação comercial e a associação patronal não aceitam os resultados: Querem atrasar a introdução do salário mínimo através de recursos infundados e inúteis. E isto apesar de um claro SIM nas urnas! Por isso, acabei de assinar uma carta. Também queres assinar?",
    ],
    "landing" => [
        "title" => "¡RESPETEN EL RESULTADO DEL REFERÉNDUM!",
        "teaser" => [
            "title" => "¡Acepten las decisiones democráticas, señora Barandun y señor Anwander!",
            "content" => "Hemos votado. Y los votantes han tomado una decisión. Pero la Asociación de Comerciantes y la patronal no quieren aceptar el resultado del referéndum. Mediante recursos infundados, intentan retrasar durante años la introducción del salario mínimo en Zúrich y Winterthur. <b>¡Así no es como funciona nuestra democracia!</b> Por la presente, les instamos a aceptar su derrota y no seguir abusando de los derechos democráticos."
        ]
    ],
    "form" => [
        "title" => "Füge deinen Namen hinzu!",
        "defaultPrivacy" => "Ich bin einverstanden, dass mich das Komitee auf dem Laufenden hält. <a class=\"underline\" href=\"/privacy\">Mehr dazu in unseren Datenschutzbestimmungen</a>.",
        "fields" => [
            [
                "type" => "text",
                "name" => "data[fname]",
                "label" => "NOMBRE",
                "required" => true
            ],
            [
                "type" => "text",
                "name" => "data[lname]",
                "label" => "APELLIDOS",
                "required" => true
            ],
            [
                "type" => "email",
                "name" => "email",
                "label" => "DIRECCIÓN DE CORREO ELECTRÓNICO",
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
                "label" => "Mi nombre puede publicarse en el sitio web.",
                "required" => false,
                "checked" => true,
                "class" => "fullwidth"
            ],
        ],
        "open" => "Jetzt unterschreiben!",
        "close" => "Schliessen",
        "submit" => "Firmar",
        "successmessage" => "Vielen Dank für deine Unterschrift! Du erhältst in Kürze eine E-Mail mit einem Bestätigungslink. Bitte klicke auf diesen Link, um deine Unterschrift zu bestätigen.",
        "errormessage" => "Es ist ein Fehler aufgetreten. Bitte versuche es nochmals!"
    ],
    "letter" => [
        "addressants" => [
            [
                "upperline" => "A la presidenta de la Asociación de Comerciantes de la ciudad de Zúrich",
                "person" => "Nicole Barandun-Gross"
            ],
            [
                "upperline" => "A los presidentes de la Cámara de Comercio y la patronal de Winterthur",
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
        "title" => "Gracias por tu firma, [fname]!",
        "content" => [
            "<b>Muchas gracias por firmar nuestra carta, [fname]!</b> Juntos podemos lograr presionar al gremio ya la patronal.",
            "Necesitamos tu ayuda para llegar al mayor número de personas posible. <b>¿Puede compartir nuestra carta con quienes le rodean?</b> ¡Gracias por tu ayuda!"
        ],
        "home" => "Volver a la página principal"
    ],
    "email" => [
        "from" => [
            "name" => "Comité «Respetar los referendos»",
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
        "text" => "Olá👋\nA associação comercial e a associação patronal não aceitam os resultados: Querem atrasar a introdução do salário mínimo através de recursos infundados e inúteis. E isto apesar de um claro SIM nas urnas! Por isso, acabei de assinar uma carta. Também queres assinar?📝\n👉 https://volksentscheide-respektieren.ch",
        "tweet" => "Die Rechten können es nicht lassen: Mit haltlosen Rekursen wollen sie die Einführung des Mindestlohns verzögern. Und das trotz klarem JA Resultat! Ich habe deshalb gerade einen Brief unterschrieben. Machst du auch mit?📝\n#DemokratieRespektieren 👉 https://volksentscheide-respektieren.ch",
        "buttons" => [
            "whatsapp" => "Compartir por WhatsApp",
            "telegram" => "Compartir por Telegram",
            "facebook" => "Compartir en Facebook",
            "twitter" => "Compartir en Twitter",
            "email" => "Compartir por correo electrónico",
        ]
    ]
];
