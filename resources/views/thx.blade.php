<?php
$parser = new Illuminate\Support\Str;
?>
<x-app-layout title="Danke für deine Unterschrift">
    <div class="vpt-container vpt-container__md">
        <x-app-logo class="w-32 m-auto mb-8 block"/>
        <h1 class="text-2xl md:text-3xl lg:text-5xl text-center vpt-adieu mb-6">Danke für deine Unterschrift, {{$supporter->data["fname"]}}!</h1>
        <p class="text-lg"><b>Danke, dass du unseren Brief unterschrieben hast, {{$supporter->data["fname"]}}!</b> Zusammen können wir es schaffen, Druck auf den Gewerbeverband und die Arbeitgebervereinigung aufzubauen.</p>
        <p>Damit wir möglichst viele Menschen erreichen, sind wir auf deine Hilfe angewiesen! <b>Kannst du unseren Brief in deinem Umfeld teilen?</b> Danke für deine Hilfe!</p>
        <x-social-share/>
        <p class="underline mt-8"><em><a href="/">Zurück zur Startseite</a></em></p>
    </div>
</x-app-layout>
