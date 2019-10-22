<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->user();
        $this->dummyProduct();
    }

    public function user(){
        $payload = [
            'name'      => 'Emul',
            'email'     => 'emul@email.com',
            'password'  => bcrypt('secret'),
            'role'      => 'admin',
        ];

        User::firstOrCreate($payload);

        $payload = [
            'name'      => 'Opik',
            'email'     => 'opik@email.com',
            'password'  => bcrypt('secret'),
            'role'      => 'stockis',
        ];

        User::firstOrCreate($payload);

        $payload = [
            'name'      => 'Imas',
            'email'     => 'imas@email.com',
            'password'  => bcrypt('secret'),
            'role'      => 'sales',
        ];

        User::firstOrCreate($payload);

        $payload = [
            'name'      => 'Endang',
            'email'     => 'endang@email.com',
            'password'  => bcrypt('secret'),
            'role'      => 'executive',
        ];

        User::firstOrCreate($payload);

    }

    function dummyProduct(){
        $payload = [
            'title'         => 'Sample Product 1 ',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim doloremque soluta error est, voluptatem nemo odit harum vero voluptas similique?',
            'price'         => 200,
            'created_by'    => 1
        ];

        Product::firstOrCreate($payload);

        $payload = [
            'title'         => 'Sample Product 2 ',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim doloremque soluta error est, voluptatem nemo odit harum vero voluptas similique?',
            'price'         => 300,
            'created_by'    => 2
        ];

        Product::firstOrCreate($payload);


    }
}
