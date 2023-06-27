<div class="vpt-social-share mt-12">
    <div class="mt-4 vpt-social-share__grid grid md:grid-cols-2 gap-2 md:gap-3">
        @foreach (__("vpt.share.buttons") as $medium => $button)
        <a href="/share/{{$medium}}" target="_blank" class="vpt-social-share__button vpt-button @if($loop->last) md:col-span-2 @endif" data-share-type="{{$medium}}">
            {{$button}}
        </a>
        @endforeach
    </div>
</div>
