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
        <h1 class="text-3xl md:text-4xl lg:text-5xl text-center vpt-adieu mb-4">Volksentscheide respektieren!</h1>
        <div class="vpt-addressants flex gap-12 md:flex-nowrap flex-wrap mb-8">
            <div class="vpt-addressant w-1/2">
                <p>
                    <p class="text-xs">An die Präsidentin des Gewerbeverbandes der Stadt Zürich</p>
                    <p class="mt-1"><b>Nicole Barandun-Gross</b></p>
                </p>
            </div>
            <div class="vpt-addressant w-1/2">
                <p>
                    <p class="text-xs">An den Präsidenten der Handelskammer und Arbeitgebervereinigung Winterthur</p>
                    <p class="mt-1"><b>Thomas Anwander</b></p>
                </p>
            </div>
        </div>
        <div class="vpt-letter mb-8">
            @php
                $letter = file_get_contents(resource_path('markdown/letter.md'));
                echo $parser->markdown($letter);
            @endphp
        </div>
        <x-initial-signer />
        <p id="show-all-signers" class="underline cursor-pointer mt-4 mb-12">und {{ supporterCount() - 10 }} weitere Unterzeichner*innen</p>
        <x-logos />
        <x-form />
        <x-social-share/>
    </div>
</x-app-layout>
