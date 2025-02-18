<?
namespace Placestart\Import;

use Bitrix\Main\Application;
use Placestart\Core\Utils;
use Placestart\Import\CatalogHelper;
use Placestart\Import\HighloadHelper;
use Placestart\Import\SectionHelper;
use Placestart\Import\SymbolCodeHelper;
use Placestart\Import\XlsxHelper;
use Placestart\Import\PhotoDownloader;
use Placestart\WildberriesApi\WildberriesFactory;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpKernel\HttpCache\Store;
use Symfony\Component\HttpClient\CachingHttpClient;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerInterface;

class ImporterFactory
{
    private function __construct()
    {
    }

    public static function create(): Importer
    {
        $offersIblockId = Utils::locateIblock('offers');
        $photoHttpClient = new CachingHttpClient(
            HttpClient::create(),
            new Store(Application::getDocumentRoot() . '/upload/import/cache/')
        );

        $importer = new Importer(
            new XlsxHelper(
                Application::getDocumentRoot() . '/upload/Номенклатура.xlsx'
            ),
            new CatalogHelper(
                new SectionHelper(),
                new SymbolCodeHelper(),
                new PhotoDownloader(
                    Application::getDocumentRoot() . '/upload/import/files/',
                    $photoHttpClient
                ),
                new HighloadHelper($offersIblockId, 'SIZE'),
                new HighloadHelper($offersIblockId, 'PILLOWSLIP_SIZE'),
                new HighloadHelper($offersIblockId, 'COLOR'),
                new HighloadHelper($offersIblockId, 'BEDSHEET_SIZE'),
                new HighloadHelper($offersIblockId, 'BLANKET_SIZE')
            ),
            WildberriesFactory::create('123123')
        );

        return $importer;
    }
}