<?php

namespace LasseHaslev\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Choose
 * @author Lasse S. Haslev
 */
class Choose extends Command
{
    /**
     * Set up the settings for this command
     *
     * @return void
     */
    public function configure()
    {
        $this->setName( 'choose' )
            ->setDescription( 'Helps you choose between seperate questions.' )
            ->addArgument( 'items', InputArgument::IS_ARRAY, 'Optional: Insert what items you want to choose from. ( Seperated by space )' )
            ->addOption( 'question-input', 'i', InputOption::VALUE_OPTIONAL, 'Insert your question' );
    }

    /**
     * Excute the command
     *
     * @return void
     */
    public function execute( InputInterface $input, OutputInterface $output )
    {

        // Get the array with items to choose from
        $items = $input->getArgument( 'items' );

        // Check if we should print the question
        $question = $input->getOption( 'question-input' );
        if ( $question ) {
            $output->writeln( $question );
        }

        // Check if we got some items to choose from
        if ( $items ) {

            // Get random index from the array
            $index = rand( 0, count( $items ) - 1 );

            // Output new line
            $output->writeln( $items[$index] );

            // Reutrn to prevent the function for keep running
            return;

        }

        // Else output YES or NO
        $output->writeln( rand( 0, 1 ) ? 'YES' : 'NO' );

    }

}
