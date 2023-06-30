<?php
$parser = new Illuminate\Support\Str;
?>
<x-app-layout title="Danke für deine Unterschrift">
    <div class="vpt-container vpt-container__md">
        <x-app-logo class="w-32 m-auto mb-8 block"/>
        <h1 class="text-2xl md:text-3xl lg:text-5xl text-center vpt-adieu mb-6">{{str_replace("[fname]", $supporter->data["fname"], __("vpt.thx.title"))}}</h1>
        <p class="text-lg">{!! str_replace("[fname]", $supporter->data["fname"], __("vpt.thx.content")[0])!!}</p>
        <p>{!! str_replace("[fname]", $supporter->data["fname"], __("vpt.thx.content")[1])!!}</p>
        <x-social-share/>
        <p class="underline mt-8"><em><a href="/">{{__("vpt.thx.home")}}</a></em></p>
    </div>
</x-app-layout>
