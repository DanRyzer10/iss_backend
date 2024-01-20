<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Account;

class CreateAccountCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'account:create {--factory= : The number of accounts to create}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new account';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $factoryCount = $this->option('factory');

        if($factoryCount){
            Account::factory()->count($factoryCount)->create();
            $this->info('Se crearon '.$factoryCount.' cuentas satisfactoriamente');

        }else{
            $name = $this->ask('Cual es el nombre de tu empresa');
            $industry = $this->choice('Cual es la industria de tu empresa', [
                'Medicina','Veterinaria','Agencia de Marketing','Asesorías y Cursos',
                'Tienda de ropa y accesorios','Centros de belleza','Tienda de cosméticos',
                'Juguetería','Supermercado','Restaurante','Pastelerías y panaderías',
                'Tienda de electrodomésticos','Librería','Concesionarios','Otros'
            ]);
            $fullname = $this->ask('Cual es tu nombre completo');

            $account = Account::create([
                'businessName' => $name,
                'industry' => $industry,
                'fullname' => $fullname,
            ]);

            $this->info('La cuenta ha sido creada satisfactoriamente');
        }
        return 0;
        //
    }
}
