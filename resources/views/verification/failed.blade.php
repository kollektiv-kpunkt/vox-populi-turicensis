<x-app-layout>
    <div class="min-h-screen bg-secondary flex justify-center items-center">
        <div class="vpt-container vpt-container__sm" class="w-full text-center">
            <h1 class="text-xl md:text-3xl font-bold mb-4">
                {{__("vpt.verification.failed.title")}}
            </h1>
            <p class="mt-4">
                {{__("vpt.verification.failed.text")}}
            </p>
            <a href="/" class="vpt-button mt-4 inline-block">{{__("vpt.verification.failed.tohome")}}</a>
        </div>
    </div>
</x-app-layout>
