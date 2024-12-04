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
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Placestart\Import\XlsxProductTable;
use Symfony\Component\Console\Formatter\OutputFormatter;

class StartImportCommand extends Command
{
    protected function configure(): void
    {
        $this
            ->setName('placestart:start-import')
            ->setDescription('Запускает импорт товаров из xlsx таблицы');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Импорт товаров начат');

        $offersIblockId = Utils::locateIblock('offers');

        $importer = new Importer(
            Application::getDocumentRoot() . '/local/import/files/',
            new XlsxHelper(Application::getDocumentRoot() . '/local/import/Номенклатура.xlsx'),
            new CatalogHelper(
                new SectionHelper(),
                new SymbolCodeHelper(),
                new HighloadHelper($offersIblockId, 'SIZE'),
                new HighloadHelper($offersIblockId, 'PILLOWSLIP_SIZE'),
                new HighloadHelper($offersIblockId, 'COLOR'),
                new HighloadHelper($offersIblockId, 'BEDSHEET_SIZE'),
                new HighloadHelper($offersIblockId, 'BLANKET_SIZE')
            )
        );
        $importer->startImport();

        $output->writeln('Импорт товаров закончен');

        return Command::SUCCESS;
    }
}