<div class="vpt-social-share mt-12 md:mt-20">
    <h2 class="text-xl md:text-3xl font-bold mb-4">{{__("vpt.share.title")}}</h2>
    <div class="mt-4 vpt-social-share__grid grid md:grid-cols-2 gap-2 md:gap-3">
        @php
            $shareUrl = urlencode(request()->fullUrl());
            $shareTitle = urlencode(__("vpt.share.sharetitle"));
            $shareTitleEmail = str_replace("+", "%20", $shareTitle);
            $shareText = urlencode(__("vpt.share.text"));
            $shareTweet = urlencode(__("vpt.share.tweet"));
            $shareTextEmail = str_replace("+", "%20", $shareText);
            $sep = urlencode("\n");
        @endphp
        @foreach (__("vpt.share.buttons") as $medium => $button)
        @php
            switch ($medium) :
                case "facebook":
                    $sharerUrl = "https://www.facebook.com/sharer/sharer.php?u={$shareUrl}";
                    break;
                case "twitter":
                    $sharerUrl = "https://twitter.com/intent/tweet?text={$shareTweet}";
                    break;
                case "whatsapp":
                    $sharerUrl = "https://api.whatsapp.com/send?text={$shareText}";
                    break;
                case "telegram":
                    $sharerUrl = "https://t.me/share/url?url={$shareUrl}&text={$shareText}";
                    break;
                case "email":
                    $sharerUrl = "mailto:?subject={$shareTitleEmail}&body={$shareTextEmail}";
                    break;
            endswitch;
        @endphp
        <a href="{{$sharerUrl}}" target="_blank" class="vpt-social-share__button vpt-button @if($loop->last) md:col-span-2 @endif" data-share-type="{{$medium}}">
            {{$button}}
        </a>
        @endforeach
    </div>
</div>
