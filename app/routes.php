<?php

// Event::subscribe ada didalam app/observers.php

Route::get('/', function(){

    // Event ini tidak langsung dijalankan
    // Ceritanya kita tunda dulu makannya
    Event::queue('kegiatan.makan');

    // Proses lain
    echo 'Ngemodus<br/>';
    echo 'Ngobrol<br/>';

    // Event ini tidak langsung dijalankan
    // Ceritanya kita tunda dulu minumnya
    Event::queue('kegiatan.minum');

    // Proses lain
    echo 'Ke WC<br/>';
    echo 'Pegang perut karena mulai lapar<br/>';

    // Saatnya jalankan event ini karena sudah lapar
    Event::flush('kegiatan.makan');
    Event::flush('kegiatan.minum');

});
