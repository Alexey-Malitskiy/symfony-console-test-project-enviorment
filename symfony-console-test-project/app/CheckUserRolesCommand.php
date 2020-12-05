<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CheckUserRolesCommand extends Command
{
    protected function configure()
    {
        $this->setName('can:user')
            ->addArgument('profession')
            ->addArgument('skill');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output) : int
    {
        $skill = str_replace('_', ' ', $input->getArgument('skill'));
        $profession = $input->getArgument('profession');
        $roles = new Roles();
        $checkUserRoles = new CheckUserRoles($roles);
        $result = $checkUserRoles->checkUserRole($profession, $skill);
        $output_result = $result == 'true' ? "<info>$result</info>" : "<error>$result</error>";
        $output->writeln($output_result);

        return Command::SUCCESS;
    }
}
