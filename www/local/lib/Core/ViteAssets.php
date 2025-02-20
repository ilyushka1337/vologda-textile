<?php
namespace Placestart\Core;

class ViteAssets
{
    private $distPath = "";
    private $manifestPath = "";
    private $assets = [];
    private static $instances = [];

    private function __construct(string $distPath)
    {
        $this->distPath = $distPath;
        $this->manifestPath = $_SERVER["DOCUMENT_ROOT"] . $this->distPath . "/.vite/manifest.json";
    }

    private function loadManifest()
    {
        if ($this->assets)
            return;

        $file = file_get_contents($this->manifestPath);
        if (!$file) {
            throw new \Exception('Не удалось прочитать манифест');
        }

        $assets = json_decode($file, true);
        if (!$assets) {
            throw new \Exception('Не удалось декодировать json');
        }

        $this->assets = $assets;
    }

    private static function getInsance(string $distPath): ViteAssets
    {
        if (!isset(self::$instances[$distPath])) {
            self::$instances[$distPath] = new self($distPath);
        }

        return self::$instances[$distPath];
    }

    private function loadFromManifest()
    {
        $this->loadManifest();
        $assets = $this->assets;
        $distPath = $this->distPath;

        if (!isset($assets["app.js"])) {
            throw new \Exception("Нет app.js");
        }

        $result = '<script defer type="module" src="' . $distPath . "/" . $assets["app.js"]["file"] . '"></script>';

        if (isset($assets["app.js"]["css"])) {
            foreach ($assets["app.js"]["css"] as $src) {
                $result .= '<link rel="stylesheet" href="' . $distPath . "/" . $src . '">';
            }
        }

        return $result;
    }

    private function loadForDevelopment()
    {
        return '
    <script type="module" src="http://localhost:5173/@vite/client"></script>
    <script type="module" src="http://localhost:5173/app.js"></script>';
    }

    public static function loadFrontend(string $distPath = "/local/assets/dist")
    {
        if (getenv("PROJECT_ENV") == "development")
            echo self::getInsance($distPath)->loadForDevelopment();
        else
            echo self::getInsance($distPath)->loadFromManifest();
    }
}
