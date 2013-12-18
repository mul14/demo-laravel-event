<?php

// File ini bisa dipanggil karena sudah diregistrasi
// di file composer.json, dibawah classmap, "app/events"

class KegiatanEvent {

    public function makan() {
        echo 'Makan<br/>';
    }

    public function minum() {
        echo 'Minum<br/>';
    }

    public function subscribe($event) {
        $event->listen('kegiatan.makan', 'KegiatanEvent@makan');
        $event->listen('kegiatan.minum', 'KegiatanEvent@minum');
    }

}
