<?php

namespace App\Models;

class Content
{
    protected static function getFilePath(): string
    {
        return storage_path('content.json');
    }

    /**
     * Get content data from storage
     */
    public static function get(): array
    {
        $file = self::getFilePath();
        if (!file_exists($file)) {
            self::initDefault();
        }
        $json = @file_get_contents($file);
        $data = json_decode($json, true);
        return is_array($data) ? $data : self::getDefaults();
    }

    /**
     * Update content data in storage
     */
    public static function update(array $newData): bool
    {
        $current = self::get();
        $allowedKeys = array_keys(self::getDefaults());
        
        foreach ($allowedKeys as $key) {
            if (isset($newData[$key])) {
                $current[$key] = $newData[$key];
            }
        }

        $dir = dirname(self::getFilePath());
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        return file_put_contents(self::getFilePath(), json_encode($current, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)) !== false;
    }

    /**
     * Default content structure
     */
    public static function getDefaults(): array
    {
        return [
            'hero_title' => 'UKKI UNNES',
            'hero_subtitle' => 'KABINET SATU SIMFONI',
            'hero_desc' => 'UKKI UNNES (Unit Kegiatan Kerohanian Islam UNNES) adalah Lembaga Dakwah Kampus tingkat universitas yang berkedudukan di Universitas Negeri Semarang dengan sekretariat di Kompleks Masjid Ulul Albab.'
        ];
    }

    /**
     * Initialize default content file if missing
     */
    protected static function initDefault(): void
    {
        $dir = dirname(self::getFilePath());
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
        file_put_contents(self::getFilePath(), json_encode(self::getDefaults(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
}
