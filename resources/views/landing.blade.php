<?php
$parser = new Illuminate\Support\Str;
?>
<x-app-layout :title="__('vpt.site.masthead')">
    <div class="vpt-container vpt-container__md">
        <x-app-logo class="w-32 m-auto mb-8 block"/>
        @if (request()->session()->get('success') === true)
            <div class="vpt-page-heroine__alert--success bg-green-200 border-green-700 border text-green-700 font-bold p-4 mb-6 sticky top-0 z-50">
                <p>{{__("vpt.form.successmessage")}}</p>
            </div>
        @endif
        @if($errors->any())
        <div class="vpt-page-heroine__alert--error bg-red-200 border-red-700 border text-red-700 font-bold p-4 mb-6 sticky top-0 z-50">
            <p>{{__("vpt.form.errormessage")}}</p>
        </div>
        @endif
        <h1 class="text-2xl md:text-4xl lg:text-5xl text-center vpt-adieu mb-4">Volksentscheide respektieren!</h1>
        <div class="vpt-card my-12">
            <h2 class="text-2xl font-bold mb-4">Akzeptieren Sie demokratische Entscheide, Frau Barandun und Herr Anwander!</h2>
            <p class="mb-4">Wir haben abgestimmt. Und die Stimmbevölkerung hat sich entschieden. Doch der Gewerbeverband und die Arbeitgebervereinigung wollen die Volksentscheide nicht akzeptieren. Mit haltlosen Rekursen versuchen sie die Einführung der Mindestlöhne in Zürich und Winterthur um Jahre zu verzögern. <b>So funktioniert unsere Demokratie nicht!</b> Mit diesem Brief fordern wir sie dazu auf, ihre Niederlage zu akzeptieren und demokratische Rechte nicht weiter zu missbrauchen.</p>
            <x-form />
        </div>
        <div class="vpt-addressants flex gap-x-12 gap-y-3 md:flex-nowrap flex-wrap mb-8">
            <div class="vpt-addressant md:w-1/2 w-full">
                <p class="text-xs">An die Präsidentin des Gewerbeverbandes der Stadt Zürich</p>
                <p class="mt-1"><b>Nicole Barandun-Gross</b></p>
            </div>
            <div class="vpt-addressant md:w-1/2 w-full">
                <p class="text-xs">An den Präsidenten der Handelskammer und Arbeitgebervereinigung Winterthur</p>
                <p class="mt-1"><b>Thomas Anwander</b></p>
            </div>
        </div>
        <div class="vpt-letter mb-8">
            @php
                $letter = file_get_contents(resource_path('markdown/letter.md'));
                echo $parser->markdown($letter);
            @endphp
        </div>
        <x-initial-signer />
        @if (supporterCount() > 10)
            <div class="vpt-all-signers mt-4 mb-12" x-data="{open: false}">
                <p class="underline cursor-pointer" x-on:click="open = ! open">und {{ number_format(supporterCount(),0,".","'" ) }} weitere Unterzeichnende</p>
                <div class="vpt-signers-list mt-4" x-show="open">
                    @foreach (supporters() as $supporter)
                        <span class="cpt-signer">
                            {{ ucfirst($supporter->data["fname"]) . " " . ucfirst($supporter->data["lname"]) }}@if (!$loop->last),@endif
                        </span>
                    @endforeach
                </div>
            </div>
        @endif
        <x-social-share/>
    </div>
</x-app-layout>
