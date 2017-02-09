<?php

namespace Deadpool\APIBundle\Command;

use Deadpool\APIBundle\Builder\UserBuilder;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class DeadpoolUserCreateCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('deadpool:user:create')
            ->setDescription('Create a User with username and password')
            ->addOption('username', null, InputOption::VALUE_REQUIRED, 'Your desired username')
            ->addOption('password', null, InputOption::VALUE_REQUIRED, 'Your desired password')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $username = $input->getOption('username');
        $password = $input->getOption('password');

        if ($username != '' && $password != '') {
            $this->getContainer()->get('deadpool.user_service')->createUser($username, $password);
            $output->writeln('User is successfully created');
            return;
        }

        $output->writeln('Please provide valid username and password');
    }

}
