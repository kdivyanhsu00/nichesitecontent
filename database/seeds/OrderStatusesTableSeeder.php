<?php

use Illuminate\Database\Seeder;
use App\OrderStatus;

class OrderStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderStatus::insert([
        	['name' => 'New', 'badge' => 'badge-primary'],
        	['name' => 'In progress', 'badge' => 'badge-info'],
            ['name' => 'Submitted for approval', 'badge' => 'badge-info'],
            ['name' => 'Requested for revision', 'badge' => 'badge-warning'],
        	['name' => 'Completed', 'badge' => 'badge-success'],
        	['name' => 'On hold', 'badge' => 'badge-secondary'],
        	['name' => 'Canceled', 'badge' => 'badge-dark'],
            ['name' => 'Refunded', 'badge' => 'badge-danger'],       
            
        ]);
    }
}
