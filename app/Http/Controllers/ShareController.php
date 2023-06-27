<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\TrackerProvider;

class ShareController extends Controller
{

    public function share($platform) {
        if (!in_array($platform, ["facebook", "twitter", "whatsapp", "email"])) {
            return redirect("/");
        }
        $tracker = new TrackerProvider();
        $tracker->doTrackEvent("Share", "Share", $platform);
        $shareUrl = urlencode(request()->fullUrl());
        $shareTitle = urlencode(__("vpt.share.sharetitle"));
        $shareTitleEmail = str_replace("+", "%20", $shareTitle);
        $shareText = urlencode(__("vpt.share.text"));
        $shareTweet = urlencode(__("vpt.share.tweet"));
        $shareTextEmail = str_replace("+", "%20", $shareText);
        $sep = urlencode("\n");
        switch ($platform) :
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
        return redirect($sharerUrl);
    }
}
