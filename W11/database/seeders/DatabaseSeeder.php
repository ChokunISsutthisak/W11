<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@smartcafe.test'],
            [
                'name' => 'Smart Cafe Admin',
                'password' => Hash::make('password'),
            ]
        );

        $products = [
            ['name'=>'Americano','category'=>'Coffee','description'=>'กาแฟอเมริกาโน','price'=>55,'stock'=>50,'status'=>'available'],
            ['name'=>'Latte','category'=>'Coffee','description'=>'กาแฟลาเต้','price'=>65,'stock'=>40,'status'=>'available'],
            ['name'=>'Cappuccino','category'=>'Coffee','description'=>'กาแฟคาปูชิโน','price'=>65,'stock'=>35,'status'=>'available'],
            ['name'=>'Matcha Latte','category'=>'Tea','description'=>'มัทฉะลาเต้','price'=>70,'stock'=>30,'status'=>'available'],
            ['name'=>'Chocolate','category'=>'Non-Coffee','description'=>'ช็อกโกแลตเย็น','price'=>60,'stock'=>25,'status'=>'available'],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(['name'=>$product['name']], $product);
        }

        $customer = Customer::updateOrCreate(
            ['email'=>'customer@smartcafe.test'],
            ['name'=>'Demo Customer','phone'=>'0800000000','status'=>'active']
        );

        $product = Product::where('name','Americano')->first();

        Order::updateOrCreate(
            ['customer_id'=>$customer->id,'product_id'=>$product->id],
            [
                'quantity'=>2,
                'total_price'=>110,
                'order_date'=>now(),
                'status'=>'completed'
            ]
        );
    }
}
