<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Order::factory(10)->create()->each(function ($order) {
            OrderDetail::factory(rand(1, 3))->create([
                'order_id' => $order->id
            ]);
        });
    }
}
