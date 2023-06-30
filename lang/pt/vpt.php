<?php

return [

    /**
     * Language Lines for «Volksentscheide respektieren» petition
     *
     */

    "site" => [
        "title" => "Unterschreibe unseren Protestbrief!",
        "masthead" => "Os referendos devem ser aceites",
        "url" => "https://www.volksentscheide-respektieren.ch",
        "description" => "A associação comercial e a associação patronal não aceitam os resultados: Querem atrasar a introdução do salário mínimo através de recursos infundados e inúteis. E isto apesar de um claro SIM nas urnas! Por isso, acabei de assinar uma carta. Também queres assinar?",
    ],
    "landing" => [
        "title" => "RESPEITEM OS REFERENDOS!",
        "teaser" => [
            "title" => "Aceitem as decisões democráticas, senhora Barandun e senhor Anwander!",
            "content" => "Nós votámos. E os eleitores já decidiram. Mesmo assim, a Associação Comercial e a Associação de Empregadores não querem aceitar os resultados dos referendos. Com recursos infundados, estão a tentar atrasar durante anos a introdução dos salários mínimos em Zurique e Winterthur. <b>Assim a nossa democracia não funciona!</b> Com esta carta, pedimos-lhes que aceitem a derrota e deixem de abusar dos direitos democráticos."
        ]
    ],
    "form" => [
        "title" => "Füge deinen Namen hinzu!",
        "defaultPrivacy" => "Ich bin einverstanden, dass mich das Komitee auf dem Laufenden hält. <a class=\"underline\" href=\"/privacy\">Mehr dazu in unseren Datenschutzbestimmungen</a>.",
        "fields" => [
            [
                "type" => "text",
                "name" => "data[fname]",
                "label" => "NOME PRÓPRIO",
                "required" => true
            ],
            [
                "type" => "text",
                "name" => "data[lname]",
                "label" => "APELIDO",
                "required" => true
            ],
            [
                "type" => "email",
                "name" => "email",
                "label" => "ENDEREÇO DE E-MAIL",
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
                "label" => "O meu nome pode ser publicado na página web.",
                "required" => false,
                "checked" => true,
                "class" => "fullwidth"
            ],
        ],
        "open" => "ASSINAR !",
        "close" => "Schliessen",
        "submit" => "ASSINAR ",
        "successmessage" => "Vielen Dank für deine Unterschrift! Du erhältst in Kürze eine E-Mail mit einem Bestätigungslink. Bitte klicke auf diesen Link, um deine Unterschrift zu bestätigen.",
        "errormessage" => "Es ist ein Fehler aufgetreten. Bitte versuche es nochmals!"
    ],
    "letter" => [
        "addressants" => [
            [
                "upperline" => "À Presidente da Associação Comercial da cidade de Zurique",
                "person" => "Nicole Barandun-Gross"
            ],
            [
                "upperline" => "Ao Presidente da Câmara de Comércio e da Associação de Empregadores de Winterthur",
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
        "title" => "Obrigado pela sua assinatura, [fname]!",
        "content" => [
            "<b>Obrigado por assinar a nossa carta, [fname]!</b> Em conjunto, podemos conseguir exercer pressão sobre a associação profissional e a associação patronal.",
            "Precisamos da sua ajuda para chegar ao maior número possível de pessoas! <b>Pode partilhar a nossa carta com as pessoas que o rodeiam?</b> Obrigado pela vossa ajuda!"
        ],
        "home" => "Voltar à página inicial"
    ],
    "email" => [
        "from" => [
            "name" => "Comité «Respeitem os referendos!»",
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
        "text" => "Olá 👋\nA associação comercial e a associação patronal não aceitam os resultados: Querem atrasar a introdução do salário mínimo através de recursos infundados e inúteis. E isto apesar de um claro SIM nas urnas! Por isso, acabei de assinar uma carta. Também queres assinar?📝\n👉 https://volksentscheide-respektieren.ch/pt",
        "tweet" => "Die Rechten können es nicht lassen: Mit haltlosen Rekursen wollen sie die Einführung des Mindestlohns verzögern. Und das trotz klarem JA Resultat! Ich habe deshalb gerade einen Brief unterschrieben. Machst du auch mit?📝\n#DemokratieRespektieren 👉 https://volksentscheide-respektieren.ch",
        "buttons" => [
            "whatsapp" => "Partilhar no WhatsApp",
            "telegram" => "Partilhar no Telegram",
            "facebook" => "Partilhar no Facebook",
            "twitter" => "Partilhar no Twitter",
            "email" => "Partilhar por e-mail",
        ]
    ]
];
