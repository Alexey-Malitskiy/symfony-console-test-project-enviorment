<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UserRolesCommand extends Command
{
    protected function configure()
    {
        $this->setName('skill:user')
            ->addArgument('skill_user');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output) : int
    {
        $roles = new Roles();
        $user = new UserRoles($roles);
        $skills = $user->getUserRoles($input->getArgument('skill_user'));
        if (!empty($skills)) {
            foreach ($skills as $skill) {
                $output->writeln("<info>$skill</info>");
            }
        } else {
            $output->writeln("<error>Please enter a valid value.</error>");
        }

        return Command::SUCCESS;
    }
}
