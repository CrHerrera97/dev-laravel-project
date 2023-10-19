<?php

namespace App\Console\Commands; // Corregir la ubicación del namespace y la carpeta
use Illuminate\Console\Command; // Corregir el namespace y agregar "Command"
use Illuminate\Support\Facades\File;


class MakeViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {view}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new blade template.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $view = $this->argument('view');
        $path = $this->viewPath($view);
        $this->createDir($path);
        if (File::exists($path))
        {
            $this->error("File {$path} already exists!");
            return;
        }
        File::put($path, ''); // Corregir el segundo argumento de File::put
        $this->info("File {$path} created.");
    }

    /**
     * Get the view full path.
     *
     * @param string $view
     *
     * @return string
     */
    public function viewPath($view)
    {
        $view = str_replace('.', '/', $view) . '.blade.php';
        $path = resource_path("views/{$view}"); // Usar resource_path para obtener la ruta
        return $path;
    }

    /**
     * Create a view directory if it does not exist.
     *
     * @param $path
     */
    public function createDir($path)
    {
        $dir = dirname($path);
        if (!file_exists($dir))
        {
            mkdir($dir, 0777, true);
        }
    }
}
