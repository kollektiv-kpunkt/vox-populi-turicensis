<?php

use App\Models\Supporter;

/**
 * Get a subset of active supporters
 */

function supporters($number = 0)
{
    if ($number === 0) {
        return Supporter::getActiveSupporters(Supporter::query()->orderBy("created_at", "ASC")->where("public", true));
    } else {
        return Supporter::getActiveSupporters(Supporter::query()->take($number)->orderBy("created_at", "ASC")->where("public", true));
    }
}

/**
 * Get count of all supporters, public or not
 */
function supporterCount()
{
    $count = Supporter::getActiveSupporters(Supporter::query())->count();
    if ($count < 40) {
        return 37;
    }
    return Supporter::getActiveSupporters(Supporter::query())->count();
}

/**
 * Get privacy text if is set from Cookies else get default
 */
function supporterPrivacyText()
{
    if (!isset($_COOKIE['vpt_source'])) {
        $privacyText = config('vpt.privacyStatements.default.' . App::getLocale());
    } else {
        $privacyText = config('vpt.privacyStatements.' . $_COOKIE['sr_source'] . '.' . App::getLocale());
        if ($privacyText === null) {
            $privacyText = config('vpt.privacyStatements.default.' . App::getLocale());
        }
    }
    return $privacyText;
}
