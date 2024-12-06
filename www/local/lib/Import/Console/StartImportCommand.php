<?php
namespace Placestart\Import\Console;

use Placestart\Import\ImporterFactory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
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

        $importer = ImporterFactory::create();
        $importer->startImport();

        $output->writeln('Импорт товаров закончен');

        return Command::SUCCESS;
    }
}