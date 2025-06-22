<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('box-notif', function ($user) {
    return true; // Bisa tambahkan validasi user jika perlu
});
