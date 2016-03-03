<?php

namespace LasseHaslev\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\ArrayInput;

/**
 * Class EightBall
 * @author Lasse S. Haslev
 */
class EightBall extends Command
{

    // This is all the posible answers of the 8 ball
    protected $availableAnswers = [

        // Positive
        "It is certain",
        "Without a doubt",
        "Yes, definitely",
        "It is decidedly so",

        // Half positive
        "Yes",
        "Most likely",
        "Outlook good",
        "As I see it, yes",
        "Signs point to yes",
        "You may rely on it",

        // Neutral
        "Ask again later",
        "Cannot predict now",
        "Reply hazy try again",
        "Better not tell you now",
        "Concentrate and ask again",

        // Negative
        "Don't count on it",
        "My reply is no",
        "My sources say no",
        "Outlook not so good",
        "Very doubtful",
    ];

    /**
     * Set up the settings for this command
     *
     * @return void
     */
    public function configure()
    {
        $this->setName( '8ball' )
            ->setDescription( 'If you are ever in doubt, ask the 8ball..' );
    }

    /**
     * Excute the command
     *
     * @return void
     */
    public function execute( InputInterface $input, OutputInterface $output )
    {

        // Get the Choose Command
        $chooseCommand = $this->getApplication()->find( 'choose' );

        // Insert the array inside the command
        $arguments = [
            'command'=>'choose',
            'items'=>$this->availableAnswers,
        ];

        // Create the input object
        $chooseInput = new ArrayInput( $arguments );

        // Run the command with the array
        $returnCode = $chooseCommand->run( $chooseInput, $output );

    }

}
