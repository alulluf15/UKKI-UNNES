<?php
namespace App\Core;

class PrayerTime {
    /**
     * Jadwal sholat harian referensi Kota Semarang (WIB)
     */
    public static function getSchedule(): array {
        return [
            'Imsak'   => '04:05',
            'Subuh'   => '04:15',
            'Terbit'  => '05:30',
            'Dzuhur'  => '11:45',
            'Ashar'   => '15:05',
            'Maghrib' => '17:55',
            'Isya'    => '19:05'
        ];
    }

    /**
     * Dapatkan sholat berikutnya berdasarkan jam saat ini
     */
    public static function getNextPrayer(): array {
        date_default_timezone_set('Asia/Jakarta');
        $nowMinutes = (int)date('H') * 60 + (int)date('i');

        // Subuh: 04:15 (255)
        // Dzuhur: 11:45 (705)
        // Ashar: 15:05 (905)
        // Maghrib: 17:55 (1075)
        // Isya: 19:05 (1145)
        if ($nowMinutes <= 255) {
            return ['name' => 'Subuh', 'time' => '04:15', 'status' => 'Menuju Subuh'];
        } elseif ($nowMinutes <= 705) {
            return ['name' => 'Dzuhur', 'time' => '11:45', 'status' => 'Menuju Dzuhur'];
        } elseif ($nowMinutes <= 905) {
            return ['name' => 'Ashar', 'time' => '15:05', 'status' => 'Menuju Ashar'];
        } elseif ($nowMinutes <= 1075) {
            return ['name' => 'Maghrib', 'time' => '17:55', 'status' => 'Menuju Maghrib'];
        } elseif ($nowMinutes <= 1145) {
            return ['name' => 'Isya', 'time' => '19:05', 'status' => 'Menuju Isya'];
        } else {
            return ['name' => 'Subuh', 'time' => '04:15', 'status' => 'Menuju Subuh'];
        }
    }
}
