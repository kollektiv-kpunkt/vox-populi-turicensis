<?php
$parser = new Illuminate\Support\Str;
?>
<x-app-layout :title="__('vpt.site.masthead')">
    <div class="vpt-container vpt-container__md">
        <div class="vpt-lang-switcher flex flex-wrap gap-2 text-sm underline justify-center mb-6 opacity-50">
            <span><a href="/de">DE</a></span>
            <span><a href="/es">ES</a></span>
            <span><a href="/it">IT</a></span>
            <span><a href="/pt">PT</a></span>
        </div>
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
        <h1 class="text-2xl md:text-4xl lg:text-5xl text-center vpt-adieu mb-4">{{__("vpt.landing.title")}}</h1>
        <div class="vpt-card my-12">
            <h2 class="text-2xl font-bold mb-4">{{__("vpt.landing.teaser.title")}}</h2>
            <p class="mb-4">{!! __("vpt.landing.teaser.content") !!}</p>
            <x-form />
        </div>
        <div class="vpt-addressants flex gap-x-12 gap-y-3 md:flex-nowrap flex-wrap mb-8">
            @foreach (__("vpt.letter.addressants") as $address)
                <div class="vpt-addressant md:w-1/2 w-full">
                    <p class="text-xs">{{ $address["upperline"] }}</p>
                    <p class="mt-1"><b>{{ $address["person"] }}</b></p>
                </div>
            @endforeach
        </div>
        <div class="vpt-letter mb-8">
            @php
                $letter = file_get_contents(resource_path('markdown/letter-' . app()->getLocale() . '.md'));
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
                            @php
                                $firstnames = explode(" ", $supporter->data["fname"]);
                                $lastnames = explode(" ", $supporter->data["lname"]);
                                foreach ($firstnames as $key => $firstname) {
                                    $firstnames[$key] = ucfirst(strtolower($firstname));
                                }
                                foreach ($lastnames as $key => $lastname) {
                                    $lastnames[$key] = ucfirst(strtolower($lastname));
                                }
                                $formattedName = implode(" ", $firstnames) . " " . implode(" ", $lastnames);
                            @endphp
                            {{ $formattedName}}@if (!$loop->last),@endif
                        </span>
                    @endforeach
                </div>
            </div>
        @endif
        <x-social-share/>
    </div>
</x-app-layout>
