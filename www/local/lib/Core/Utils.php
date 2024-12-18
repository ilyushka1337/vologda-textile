<?php
namespace Placestart\Core;

use Bitrix\Iblock\IblockTable;
use Bitrix\Main\Config\Option;
use Bitrix\Main\Loader;

Loader::includeModule('iblock');

class Utils
{
    /**
     * Оборачивает все выражения взятые в #решетки# переданным тегом
     *
     * Пример: wrapGroup(<span>$1<span>, "test #test#")
     * @return string
     */
    public static function wrapGroup($wrap, $string)
    {
        $pattern = '/#(.*?)#/i';
        return preg_replace($pattern, $wrap, $string);
    }

    /**
     * Получает id видео из youtube по ссылке на видео
     *
     * Надежно работает только со ссылками на страницу видео - https://www.youtube.com/watch?v=oixYsnsZuog&feature=emb_imp_woyt.
     * Есть и другие форматы ссылок.
     *
     * @param string $video_link Ссылка на видео
     */
    public static function parseYoutubeID($video_link)
    {
        $matches = [];

        // https://www.youtube.com/watch?v=oixYsnsZuog&feature=emb_imp_woyt
        $pattern = '/\?v=([[:alnum:]\-\_]*).*/i';
        preg_match($pattern, $video_link, $matches);
        if (isset($matches[1]))
            return $matches[1];

        // https://www.youtube.com/embed/oixYsnsZuog?start=1
        $pattern = '/embed\/(.+)\?/i';
        preg_match($pattern, $video_link, $matches);
        if (isset($matches[1]))
            return $matches[1];

        // https://youtu.be/oixYsnsZuog
        $pattern = '/youtu\.be\/(.+)/i';
        preg_match($pattern, $video_link, $matches);
        if (isset($matches[1]))
            return $matches[1];

        return false;
    }

    /**
     * Возвращает ссылку на youtube видео для iframe
     *
     * Надежно работает только со ссылками на страницу видео - https://www.youtube.com/watch?v=oixYsnsZuog&feature=emb_imp_woyt.
     * Есть и другие форматы ссылок.
     *
     * @param string $video_link Ссылка на видео
     * @return string
     */
    public static function getYoutubeIframeSrc($video_link)
    {
        $id = Utils::parseYoutubeID($video_link);
        return 'https://www.youtube.com/embed/' . $id;
    }


    /**
     * Возвращает ссылки на превью youtube видео
     *
     * Надежно работает только со ссылками на страницу видео - https://www.youtube.com/watch?v=oixYsnsZuog&feature=emb_imp_woyt.
     * Есть и другие форматы ссылок.
     *
     * @param string $video_link Ссылка на видео
     * @return array{
     *  LARGE: string,
     *  SMALL: string,
     * }
     */
    public static function getYoutubeIframePreview($video_link)
    {
        $id = Utils::parseYoutubeID($video_link);
        return [
            'LARGE' => "https://i.ytimg.com/vi/$id/maxresdefault.jpg",
            'SMALL' => "https://i.ytimg.com/vi/$id/hqdefault.jpg"
        ];
    }

    /**
     * Получает информацию о читаемые размер и тип файла
     *
     * @param string $content_type Тип файла
     * @param int $size Размер файла в байтах
     * @return array{
     *  size: string,
     *  mime: string
     * }
     */
    public static function getFileInfo($content_type, $size)
    {
        $mime_types = array(
            'application/msword' => 'doc',
            'image/jpeg' => 'jpg',
            'application/pdf' => 'pdf',
            'image/png' => 'png',
            'application/vnd.ms-powerpoint' => 'ppt',
            'application/x-rar-compressed' => 'rar',
            'image/tiff' => 'tiff',
            'text/plain' => 'txt',
            'application/vnd.ms-excel' => 'xls',
            'application/zip' => 'zip',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => 'docx',
            'application/vnd.openxmlformats-officedocument.presentationml.presentation' => 'pptx',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' => 'xlsx',
        );

        $file_size = ['b', 'kb', 'Mb'];
        $file_info_output = [];
        $file_info_output['size'] = $size;

        $file_info_output['mime'] = $mime_types[$content_type];

        $i = 0;
        while ($file_info_output['size'] > 1024) {
            $file_info_output['size'] = $file_info_output['size'] / 1024;
            $i++;
        }
        $file_info_output['size'] = round($file_info_output['size'], 2) . " " . $file_size[$i]; // Размер файла

        return $file_info_output;
    }

    /**
     * Выводит навигационную цепочку
     *
     * @param string $template Шаблон компонента
     * @return void
     */
    public static function ShowNavChain($template = '.default')
    {
        global $APPLICATION;
        self::IncludeComponent(
            'bitrix:breadcrumb',
            [
                "PATH" => "",
                "SITE_ID" => "s1",
                "START_FROM" => "0"
            ],
            $template
        );
    }

    /**
     * Подключает компонент
     *
     * @param string $component Название компонента
     * @param array $params Параметры компонента
     * @param string $template Шаблон компонента
     * @return void
     */
    public static function IncludeComponent($component, $params, $template = '.default')
    {
        global $APPLICATION;
        $APPLICATION->IncludeComponent(
            $component,
            $template,
            $params,
        );
    }

    /**
     * Получает информацию о файле по его ID
     *
     * @param int $ID ID файла в системе битрикса
     * @return array|false Возвращает false если файла нет
     */
    public static function getFileByID($ID)
    {
        $arFile = \CFile::GetFileArray($ID);
        if (!$arFile)
            return false;

        $info = self::getFileInfo($arFile['CONTENT_TYPE'], $arFile['FILE_SIZE']);

        return [
            'SRC' => $arFile['SRC'],
            'FILE_NAME' => $arFile['FILE_NAME'],
            'ORIGINAL_NAME' => $arFile['ORIGINAL_NAME'],
            'SIZE' => $info['size'],
            'MIME' => $info['mime']
        ];
    }

    /**
     * Создает уменьшенную копию изображения. Работает на основе CFile::ResizeImageGet
     * Подробнее в документации битрикса - https://dev.1c-bitrix.ru/api_help/main/reference/cfile/resizeimageget.php
     *
     * @param int $ID ID файла в системе битрикса
     * @param int $width Ширина нового изображения
     * @param int $height Высота нового изображения
     * @param string $type Тип ресайза. Может быть exact, proportional, alt.
     */
    public static function resizeImage($ID, $width, $height, $type = 'exact', $quality = 95)
    {
        $arFile = \CFile::GetFileArray($ID);
        if (!$arFile)
            return false;
        $info = self::getFileInfo($arFile['CONTENT_TYPE'], $arFile['FILE_SIZE']);

        $types = [
            'exact' => BX_RESIZE_IMAGE_EXACT,
            'proportional' => BX_RESIZE_IMAGE_PROPORTIONAL,
            'alt' => BX_RESIZE_IMAGE_PROPORTIONAL_ALT
        ];

        $image = \CFile::ResizeImageGet(
            \CFile::GetFileArray($ID),
            [
                'width' => $width,
                'height' => $height
            ],
            $types[$type],
            true,
            false,
            false,
            $quality
        );

        return [
            'SRC' => $image['src'],
            'FILE_NAME' => $arFile['FILE_NAME'],
            'ORIGINAL_NAME' => $arFile['ORIGINAL_NAME'],
            'SIZE' => $info['size'],
            'MIME' => $info['mime'],
        ];
    }

    /**
     * Разбивает число по разрядам
     * @param int $number_str
     * @return string
     */
    public static function formatNumber($number_str)
    {
        return preg_replace('/(\d)(?=(\d{3})+([^\d]|$))/i', '$1 ', $number_str);
    }

    /**
     * Создает многоуровневый массив в виде дерева родительских и их дочерних элементов
     * @param array $input arResult компонента bitirx.menu
     * @param string $indexName Имя индекса для поиска дочерних элементов
     * @param int $start Начальный индекс для поиска
     * @param int $level Уровень вложенности, по умолчанию 0
     * @return array
     */
    public static function makeTreeArray($input, $indexName, &$start = 0, $level = 0)
    {
        $childs = [];

        if (!$level) {
            $lastDepthLevel = 1;
            if (is_array($input)) {
                foreach ($input as $i => $arItem) {
                    if ($arItem[$indexName] > $lastDepthLevel) {
                        if ($i > 0) {
                            $input[$i - 1]["IS_PARENT"] = true;
                        }
                    }
                    $lastDepthLevel = $arItem[$indexName];
                }
            }
        }

        for ($i = $start, $count = count($input); $i < $count; ++$i) {
            $item = $input[$i];
            if ($level > $item[$indexName] - 1) {
                break;
            } elseif (!empty($item['IS_PARENT'])) {
                ++$i;
                $item['CHILD'] = self::makeTreeArray($input, $indexName, $i, $level + 1);
                --$i;
            }
            $childs[] = $item;
        }

        $start = $i;

        return $childs;
    }
    /**
     * Склоняет существительное в зависимости от переданного числа.
     *
     * @param integer $number Число, на основе которого определяется склонение соответствующего существительного.
     * @param array|string $titles Массив из трех форм слова для разных склонений или строка с формами, разделенными запятыми.
     * @param bool $show_number Флаг необходимости отображения числа перед словом. По умолчанию: true (показывать).
     *
     * @return string Склоненное слово с опциональным отображением числа перед ним.
     *
     * Пример использования:
     * Для русских названий автомобиля в разных склонениях: "машина, машины, машин",
     * где "машина" используется после 1, "машины" - после 2, 3, 4 и "машин" - после 5-20, 21...
     * $titles может быть передана как строка "машина, машины, машин" или как массив ["машина", "машины", "машин"].
     */
    public static function num_decline($number, $titles, $show_number = true)
    {
        if (is_string($titles)) {
            $titles = preg_split('/, */', $titles);
        }
        // когда указано 2 элемента
        if (empty($titles[2])) {
            $titles[2] = $titles[1];
        }
        $cases = [2, 0, 1, 1, 1, 2];
        $intnum = abs((int) strip_tags($number));
        $title_index = ($intnum % 100 > 4 && $intnum % 100 < 20)
            ? 2
            : $cases[min($intnum % 10, 5)];
        return ($show_number ? "$number " : '') . $titles[$title_index];
    }

    /**
     * Ищет инфоблок по символьному коду API
     * @param string $apiCode символьный код API
     * @return int|null id инфоблока, null - инфоблок не найден
     */
    public static function locateIblock(string $apiCode): int|null
    {
        $q = (IblockTable::query())
            ->setSelect(['ID'])
            ->setFilter([
                'API_CODE' => $apiCode
            ]);

        $result = $q->fetch();
        if (!$result)
            return null;

        return (int) $result['ID'];
    }
}
