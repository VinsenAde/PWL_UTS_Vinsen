<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'id' => '1',
            'name' => 'Indomie',
            'description' => 'Makanan',
            'price' => '2500',
            'stock' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Product::create([
            'id' => '02',
            'name' => 'Fanta',
            'description' => 'Minuman',
            'price' => '7000',
            'stock' => '81',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
             
        ]);
        Product::create([
            'id' => '03',
            'name' => 'Momogi',
            'description' => 'Snack',
            'price' => '2000',
            'stock' => '29',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Product::create([
            'id' => '4',
            'name' => 'Paramex',
            'description' => 'Obat',
            'price' => '15000',
            'stock' => '48',  
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
            
            
            
        ]);
        Product::create([
            'id' => '5',
            'name' => 'Green Sand',
            'description' => 'Minuman',
            'price' => '6000',
            'stock' => '33',    
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Product::create([
            'id' => '6',
            'name' => 'Tebs',
            'description' => 'Minuman',
            'price' => '5000',
           'stock' => '40',
           'created_at' => date('Y-m-d H:i:s', time()),
           'updated_at' => date('Y-m-d H:i:s', time())    
        ]);
        Product::create([
            'id' => '7',
            'name' => 'Sari Roti',
            'description' => 'Makanan',
            'price' => '11000',
            'stock' => '70',    
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Product::create([
            'id' => '8',
            'name' => 'Mixagrip',
            'description' => 'Obat',
            'price' => '1500',
            'stock' => '69',  
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Product::create([
            'id' => '9',
            'name' => 'Chocolatos',
            'description' => 'Snack',
            'price' => '2900',
            'stock' => '104',   
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Product::create([
            'id' => '10',
            'name' => 'Alpenlibel',
            'description' => 'Snack',
            'price' => '2850',
            'stock' => '104',    
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Product::create([
            'id' => '11',
            'name' => 'Doritos',
            'description' => 'Makanan',
            'price' => '15000',
            'stock' => '12',    
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Product::create([
            'id' => '12',
            'name' => 'Onigiri',
            'description' => 'Makanan',
            'price' => '20000',
            'stock' => '23',  
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Product::create([
            'id' => '13',
            'name' => 'Paracetamol',
            'description' => 'Obat',
            'price' => '9500',
            'stock' => '45', 
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Product::create([
            'id' => '14',
            'name' => 'Coca Cola',
            'description' => 'Minuman',
            'price' => '8000',
            'stock' => '30',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Product::create([
            'id' => '15',
            'name' => 'Shin Ramyun',
            'description' => 'Makanan',
            'price' => '16000',
            'stock' => '8',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Product::create([
            'id' => '16',
            'name' => 'Mi Sedaap',
            'description' => 'Makanan',
            'price' => '4500',
            'stock' => '21',  
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Product::create([
            'id' => '17',
            'name' => 'Happy Tos',
            'description' => 'Snack',
            'price' => '7850',
            'stock' => '122',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Product::create([
            'id' => '18',
            'name' => 'Strawberry Jam',
            'description' => 'Snack',
            'price' => '15000',
            'stock' => '5',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Product::create([
            'id' => '19',
            'name' => 'Promag',
            'description' => 'Obat',
            'price' => '3500',
            'stock' => '41',  
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Product::create([
            'id' => '20',
            'name' => 'Hemaviton',
            'description' => 'Obat',
            'price' => '6500',
            'stock' => '49',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
    }
}
