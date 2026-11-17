<?php
namespace App\Core;

class PrayerTime {
    /**
     * Jadwal 5 waktu sholat utama (sesuai tampilan kartu)
     */
    public static function getFivePrayers(): array {
        return [
            'Subuh'   => '04:15',
            'Dzuhur'  => '11:45',
            'Ashar'   => '15:05',
            'Maghrib' => '17:55',
            'Isya'    => '19:05'
        ];
    }

    /**
     * Alias jadwal sholat
     */
    public static function getSchedule(): array {
        return self::getFivePrayers();
    }

    /**
     * Tanggal terformat bahasa Indonesia (e.g. Selasa, 17 Nov 2026)
     */
    public static function getFormattedDate(): string {
        date_default_timezone_set('Asia/Jakarta');
        $days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        $months = ['', 'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
        
        $dayName = $days[(int)date('w')];
        $dayNum = date('j');
        $monthName = $months[(int)date('n')];
        $year = date('Y');

        return "{$dayName}, {$dayNum} {$monthName} {$year}";
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
