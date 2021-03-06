<?php

namespace ripnet\EvoBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Finder\Finder;
use ripnet\EvoBundle\Entity\XMLFile;

/**
 * Import XML definitions into database.
 *
 * @author Tom Young <ripnet@gmail.com>
 */
class ImportCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('evo:import')
            ->setDescription('Import definitions into database.')
            ->addArgument('directory', InputArgument::REQUIRED, 'Directory that contains XML definitons.')
        ;

    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $finder = new Finder();
        $finder->files()->in($input->getArgument('directory'))->name('*.xml');
        foreach ($finder as $file)
        {
            $output->writeln('Parsing file: ' . $file);

            // TODO: everything
        }
    }
}
