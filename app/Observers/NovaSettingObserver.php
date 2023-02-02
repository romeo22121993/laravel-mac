<?php

namespace App\Observers;

use App\Models\NovaSetting;

class NovaSettingObserver
{
    public function creating(NovaSetting $novaSetting) {
        $novaSetting->lang = $novaSetting->settings['language'];

        return $novaSetting;
    }

    public function updating(NovaSetting $novaSetting) {
        $novaSetting->lang = $novaSetting->settings['language'];

        return $novaSetting;
    }
}
