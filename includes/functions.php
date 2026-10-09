<?php
/**
 * functions.php
 * Kumpulan fungsi bantu (helper) dipakai di seluruh halaman.
 */

/**
 * e() — escape string sebelum dicetak ke HTML.
 * Cegah serangan XSS (kalau ada data dari user/DB mengandung tag <script>).
 */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
