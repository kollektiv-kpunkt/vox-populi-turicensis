<p>Hallo {{$supporter->data["fname"]}}</p>
<p>Danke, dass du unseren Brief unterschrieben hast. Bitte bestätige deine E-Mail Adresse indem du auf den folgenden Link klickst, damit wir sicherstellen können, dass du ein Mensch und kein Roboter bist.</p>
<div class="my-4">
    <a href="{{__("vpt.site.url")}}/verify/{{$supporter->email_verification_token}}?id={{$supporter->id}}" class="sr-button">E-Mail Adresse bestätigen</a>
</div>
<p>Wenn du nicht weißt, warum du diese E-Mail erhalten hast, kannst du sie einfach ignorieren.</p>
<p>Nochmals vielen Dank für deine Unterstützung!</p>
<p>
    Das Komitee «Volksentscheide akzeptieren» <br />
    <a href="{{__("vpt.site.url")}}">{{__("vpt.site.url")}}</a>
</p>

<p style="margin-top: 3rem">
    Falls du nicht auf den Link klicken kannst, kopiere ihn hier und füge ihn in deinen Browser ein: {{__("vpt.site.url")}}/verify/{{$supporter->email_verification_token}}?id={{$supporter->id}}
</p>
