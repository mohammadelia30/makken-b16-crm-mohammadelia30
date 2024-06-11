<?php

namespace Database\Seeders;

use App\Models\Factor;
use App\Models\Label;
use App\Models\Lable;
use App\Models\Message;
use App\Models\Note;
use App\Models\Order;
use App\Models\Product;
use App\Models\Task;
use App\Models\Team;
use App\Models\Ticket;
use App\Models\User;
use App\Models\Warranty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Factory_seeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $supur_admin = User::factory(["first_name" => 'mohammad',
            "last_name" => 'eliasy',
            'phone_number'=>'09022219431',
            "password"=>'wwww1234',
            "status" =>'ویژه',
            'email' =>'mohammadelia30@gmail.com',
            "gender" =>'آقا'])->create();
        $supur_admin->assignRole('super admin');
        $users = User::factory()
            ->has(Order::factory()->has(Product::factory()
                ->has(Warranty::factory()->count(2))
                ->count(3))
                ->hasFactor()
                ->count(2))
            ->count(10)
            ->create();
        $labels = Label::factory()->has(User::factory())->has(Team::factory())->has(Product::factory())->count(5)->create();
        $tasks = Task::factory()->has(User::factory())->count(2)->has(Team::factory())->create();
        $tickets = Ticket::factory()->has(User::factory())->has(Message::factory())->count(5)->create();
        $note = Note::factory()->has(User::factory())->count(5)->create();
    }
}
