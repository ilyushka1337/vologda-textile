<?php
namespace Placestart\Import\Console;

use Bitrix\Main\Application;
use Placestart\Import\Importer;
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
        $importer = new Importer(
            Application::getDocumentRoot() . '/local/import/Номенклатура.xlsx',
            Application::getDocumentRoot() . '/local/import/files/',
        );

        $importer->startImport();

        return Command::SUCCESS;
    }
}