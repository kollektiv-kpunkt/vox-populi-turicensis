<p>Salut {{$supporter->data["fname"]}}</p>
<p>Merci d'avoir signé notre lettre. Merci de confirmer ton adresse e-mail afin que nous puissions nous assurer que tu es bien un être humain et non un robot.</p>
<div class="my-4">
    <a href="{{__("vpt.site.url")}}/verify/{{$supporter->email_verification_token}}?id={{$supporter->id}}" class="sr-button">Confirmer l'adresse e-mail</a>
</div>
<p>Si tu ne sais pas pourquoi tu as reçu cet e-mail, tu peux simplement l'ignorer.</p>
<p>Merci encore pour ton soutien !</p>
<p>
    Le comité «Rammstein-Konzerte absagen» <br />
    <a href="{{__("vpt.site.url")}}">{{__("vpt.site.url")}}</a>
</p>

<p style="margin-top: 3rem">
    Si tu ne peux pas cliquer sur le lien, copie-le ici et colle-le dans ton navigateur : {{__("vpt.site.url")}}/verify/{{$supporter->email_verification_token}}?id={{$supporter->id}}
</p>
