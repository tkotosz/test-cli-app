<?php

namespace Tkotosz\TestCliApp\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Tkotosz\TestCliApp\Service\HelloWorldMessageProvider;

class HelloWorldCommand extends Command
{
    /**
     * @var HelloWorldMessageProvider
     */
    private $messageProvider;
    
    /**
     * @param HelloWorldMessageProvider $messageProvider
     */
    public function __construct(HelloWorldMessageProvider $messageProvider)
    {
        $this->messageProvider = $messageProvider;

        parent::__construct();
    }
    
    protected function configure()
    {
        $this->setName('hello:world')
            ->setDescription('hello world command');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->messageProvider->get());
    }
}
