<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 2.4 on the 18.12.4023
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/indonesian/modules/system/
* use: language file for system module
*
* © copyright 07-2023, noRiddle
             ____
            |    |       |     | |
  __   ___  |____/ °  ___|  ___| |  ___
|/  | |   | |   \  | |   | |   | | |___|
|   n |___o |    R i |___d |__ d l |__e

* Edit by JorisK Reqser.com 08-2023

***********************************************************/
define('MODULE_SYSTEM_REQSER_TITLE', 'Terjemahan DeepL otomatis melalui <i>Reqser</i>.com, versi modul %s<br />- dibangun untuk <i>Reqser</i>.com -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;"> noRiddle </a> dan &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;"> Reqser.com </a> (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> Modul sistem untuk aktivasi dan konfigurasi terjemahan melalui <i><a href="https://reqser.com/" target="_blank"> reqser.com</i></a>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Pengaturan dasar</h2>Mengaktifkan modul?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Kunci API Reqser');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Anda dapat memasukkan kunci API dari <i>Reqser.com</i> di sini. Ditampilkan saat menghubungkan ke Modified di Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Tautan langsung di sini </a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Token keamanan sementara');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Token keamanan sementara untuk pertanyaan eksternal ke toko.<br /><span  class="alrt"> Ditetapkan secara otomatis! </span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Validitas token keamanan sementara');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Token keamanan sementara berlaku hingga (lihat di bawah).<br />Jika sudah kedaluwarsa, token yang baru akan dibuat berdasarkan permintaan dari sumber eksternal dan akan ditampilkan di sini.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Tabel bahasa</h2>Berikan akses Reqser.com ke semua kolom dari tabel bersama ?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Ya" memberikan akses kepada Reqser ke semua entri kolom dari tabel yang dirilis, "Tidak" dapat menyebabkan kesalahan pada versi toko yang lama atau ketika menggunakan templat yang tidak standar.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Tabel basis data');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Tabel basis data standar yang akan diterjemahkan.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Tabel basis data lebih lanjut');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Pilih tabel basis data lebih lanjut yang akan diterjemahkan di sini');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Tabel basis data lainnya (tidak tersedia untuk pilihan di atas)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Masukkan tabel basis data lebih lanjut yang akan diterjemahkan di sini, dipisahkan dengan koma.<br />(Untuk ekstensi dengan tabel "standar yang tidak dimodifikasi" yang baru)');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Mengecualikan tabel');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Masukkan tabel yang akan dikecualikan dari terjemahan di sini, dipisahkan dengan koma.<br />(Hanya diperlukan jika semua tabel standar dipilih di atas dan beberapa di antaranya akan dikecualikan).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'Menerjemahkan dari bahasa apa?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'Dari bahasa apa yang harus diterjemahkan?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'Bahasa apa saja yang bisa saya terjemahkan? ' . draw_tooltip('Bahasa tambahan dapat ditambahkan di <i><a href="https://reqser.com/" target="_blank"> reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'Bahasa apa saja yang harus diterjemahkan?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'Bahasa Inggris digunakan sebagai Bahasa Inggris AS secara default');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Apakah Anda lebih suka ejaan Inggris?<br />Ya = Inggris / Tidak = Amerika Serikat');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Pengaturan lebih lanjut</h2>Haruskah bahasa baru diizinkan untuk ditambahkan ke <i><a href="https://reqser.com/" target="_blank"> reqser.com</i></a>?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Dengan pengaturan ini diatur ke "Ya", bahasa baru dapat ditambahkan ke <i><a href="https://reqser.com/" target="_blank"> reqser.com</i></a>.<br />Dengan "Tidak", bahasa harus sudah ada di sistem toko dan bahasa tersebut harus diaktifkan di modul ini.<br />Membuat bahasa di toko: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Buat bahasa di toko ?</a> &nbsp;&nbsp;<span class="alrt">!! Bahasa baru hanya tersedia di toko setelah 24-48 jam. !!</span><br />Kemudian tandai di sini sebagai bahasa yang akan diterjemahkan');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', 'Menerjemahkan file bahasa di server?' . draw_tooltip('Semua file di server ditanyakan dan diterjemahkan </br> Hal ini juga berlaku untuk file bahasa modul dan ekstensi. Semua file bahasa dibuat ulang, termasuk bahasa yang sudah ada.<br />Secara default, teks bahasa asing yang ada di Reqser diadopsi dan tidak diterjemahkan secara baru, tetapi ini dapat diubah dalam pengaturan Reqser.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Tanpa file bahasa, tidak ada bahasa asing yang berfungsi di toko dan ada halaman "putih"!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Mentransfer file bahasa secara otomatis?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Haruskah file bahasa yang telah diterjemahkan ditransfer secara otomatis ke toko Anda atau haruskah setiap file bahasa dipilih secara manual di Reqser?<br />Ya = transfer file bahasa secara otomatis / Tidak = transfer secara manual');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Keamanan</h2>Akses API log?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Haruskah akses API dicatat?<br />(Catatan dapat ditemukan di <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Menguji di browser?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Menguji di browser tanpa mengirim header?<br /><span class="alrt">!!! Harus dinonaktifkan dalam operasi langsung API !!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', '"Kunci API Reqser" yang disimpan di sini dalam modul tidak sama dengan yang disimpan di <i>reqser.com</i>.<br />Silakan masuk ke <i>reqser</i>.com dan periksa kunci API atau, jika perlu, ambil lagi dan simpan di sini.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'Kunci API berhasil disimpan');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'Tidak ada kunci API yang dimasukkan! Silakan masuk ke <i>reqser.com</i> dan dapatkan kunci API untuk situs web ini dan simpan di sini dalam modul.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'CURL ERROR:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Tidak ada bahasa yang akan diterjemahkan ke dalam bahasa yang dipilih!');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Terjemahkan ke bahasa apa?" tidak boleh berisi bahasa yang telah dipilih di "Terjemahkan dari bahasa apa?".');