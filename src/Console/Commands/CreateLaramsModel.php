<?php

namespace Jefte\Larams\Console\Commands;

use Illuminate\Console\GeneratorCommand as Command;

class CreateLaramsModel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'larams:model';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates new Larams CMS Model';


    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Model';

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Models';
    }


    /**
     * Build the class with the given name.
     *
     * Remove the base controller import if we are already in the base namespace.
     *
     * @param  string  $name
     * @return string
     */
    protected function buildClass($name)
    {
        $controllerNamespace = $this->getNamespace($name);

        $replace = [];

        $replace["use {$controllerNamespace};\n"] = '';

        return str_replace(
            array_keys($replace), array_values($replace), parent::buildClass($name)
        );
    }

    public function getStub()
    {
        return __DIR__ . '/stubs/models/model.plain.stub';
    }
}
