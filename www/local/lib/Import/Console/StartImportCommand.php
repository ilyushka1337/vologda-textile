<?php
namespace Placestart\Import\Console;

use Bitrix\Main\Application;
use Placestart\Core\Utils;
use Placestart\Import\CatalogHelper;
use Placestart\Import\HighloadHelper;
use Placestart\Import\Importer;
use Placestart\Import\SectionHelper;
use Placestart\Import\SymbolCodeHelper;
use Placestart\Import\XlsxHelper;
use Placestart\Import\PhotoDownloader;
use Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBody;
use Placestart\WildberriesApi\WildberriesFactory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Formatter\OutputFormatter;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpKernel\HttpCache\Store;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;

class StartImportCommand extends Command
{
    protected function configure(): void
    {
        $this
            ->setName('placestart:start-import')
            ->setDescription('Запускает импорт товаров из xlsx таблицы');
    }

    protected function test()
    {
        $a = new PhotoDownloader(
            Application::getDocumentRoot() . '/local/import/files/',
            Application::getDocumentRoot() . '/local/import/cache/',
            HttpClient::create()
        );

        $a->get('https://basket-15.wbbasket.ru/vol2315/part231552/231552197/images/big/2.webp');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Импорт товаров начат');

        // $offersIblockId = Utils::locateIblock('offers');

        // $importer = new Importer(
        //     new XlsxHelper(
        //         Application::getDocumentRoot() . '/local/import/Номенклатура.xlsx'
        //     ),
        //     new CatalogHelper(
        //         new SectionHelper(),
        //         new SymbolCodeHelper(),
        //         new PhotoDownloader(
        //             Application::getDocumentRoot() . '/local/import/files/',
        //             HttpClient::create()
        //         ),
        //         new HighloadHelper($offersIblockId, 'SIZE'),
        //         new HighloadHelper($offersIblockId, 'PILLOWSLIP_SIZE'),
        //         new HighloadHelper($offersIblockId, 'COLOR'),
        //         new HighloadHelper($offersIblockId, 'BEDSHEET_SIZE'),
        //         new HighloadHelper($offersIblockId, 'BLANKET_SIZE')
        //     ),
        //     WildberriesFactory::create('eyJhbGciOiJFUzI1NiIsImtpZCI6IjIwMjQxMTE4djEiLCJ0eXAiOiJKV1QifQ.eyJlbnQiOjEsImV4cCI6MTc0OTA5NjM3NywiaWQiOiIwMTkzOTI2Yy0xNmI4LTc5MGYtYWVjYS0yY2I4MTg5YjA5MDciLCJpaWQiOjYyMDIwMTkzLCJvaWQiOjMwNDgwLCJzIjo3OTM0LCJzaWQiOiIxNmM0MzZhNy01YTM0LTVlZGQtYmI5ZC1mNDdkNDI1NjI4ZDUiLCJ0IjpmYWxzZSwidWlkIjo2MjAyMDE5M30.Rm7c60DRVEPVbEgPkkoVaEeDIWl9v4TsSs0rQh7aJb2M9fFyjaVq2CInKlqBY-cHGV-Qq_wquedGzQaKcM4bgg')
        // );
        // $importer->startImport(true);

        $this->test();

        $output->writeln('Импорт товаров закончен');

        return Command::SUCCESS;
    }
}