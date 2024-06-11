<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class permission_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //roles
        $admin = Role::create(['name' => 'admin']);
        $super_admin = Role::create(['name' => 'super admin']);
        $user = Role::create(['name' => 'user']);
        $reseller = Role::create(['name' => 'reseller']);
        $customer = Role::create(['name' => 'customer']);
        //create permission
        $user_create = Permission::create(['name' => 'user create']);
        $product_create = Permission::create(['name' => 'product create']);
        $order_create = Permission::create(['name' => 'order create']);
        $factor_create = Permission::create(['name' => 'factor create']);
        $lable_create = Permission::create(['name' => 'lable create']);
        $message_create = Permission::create(['name' => 'message create']);
        $note_create = Permission::create(['name' => 'note create']);
        $task_create = Permission::create(['name' => 'task create']);
        $ticket_create = Permission::create(['name' => 'ticket create']);
        $team_create = Permission::create(['name' => 'team create']);
        $warranty_create = Permission::create(['name' => 'warranty create']);
        $profile_create = Permission::create(['name' => 'profile create']);
        $product_image_create = Permission::create(['name' => 'product image create']);
        $order_factor_pdf_create = Permission::create(['name' => 'order factor pdf create']);
        $attach_media = Permission::create(['name' => 'attach media']);
        //edit permission
        $user_edit = Permission::create(['name' => 'user edit']);
        $product_edit = Permission::create(['name' => 'product edit']);
        $order_edit = Permission::create(['name' => 'order edit']);
        $factor_edit = Permission::create(['name' => 'factor edit']);
        $lable_edit = Permission::create(['name' => 'lable edit']);
        $message_edit = Permission::create(['name' => 'message edit']);
        $note_edit = Permission::create(['name' => 'note edit']);
        $task_edit = Permission::create(['name' => 'task edit']);
        $ticket_edit = Permission::create(['name' => 'ticket edit']);
        $team_edit = Permission::create(['name' => 'team edit']);
        $warranty_edit = Permission::create(['name' => 'warranty edit']);
        //index permission
        $user_index = Permission::create(['name' => 'user index']);
        $product_index = Permission::create(['name' => 'product index']);
        $order_index = Permission::create(['name' => 'order index']);
        $factor_index = Permission::create(['name' => 'factor index']);
        $lable_index = Permission::create(['name' => 'lable index']);
        $message_index = Permission::create(['name' => 'message index']);
        $note_index = Permission::create(['name' => 'note index']);
        $task_index = Permission::create(['name' => 'task index']);
        $ticket_index = Permission::create(['name' => 'ticket index']);
        $team_index = Permission::create(['name' => 'team index']);
        $warranty_index = Permission::create(['name' => 'warranty index']);
        //delete permission
        $user_delete = Permission::create(['name' => 'user delete']);
        $product_delete = Permission::create(['name' => 'product delete']);
        $order_delete = Permission::create(['name' => 'order delete']);
        $factor_delete = Permission::create(['name' => 'factor delete']);
        $lable_delete = Permission::create(['name' => 'lable delete']);
        $message_delete = Permission::create(['name' => 'message delete']);
        $note_delete = Permission::create(['name' => 'note delete']);
        $task_delete = Permission::create(['name' => 'task delete']);
        $ticket_delete = Permission::create(['name' => 'ticket delete']);
        $team_delete = Permission::create(['name' => 'team delete']);
        $warranty_delete = Permission::create(['name' => 'warranty delete']);
        $profile_delete = Permission::create(['name' => 'profile delete']);
        $product_image_delete = Permission::create(['name' => 'product image delete']);
        $order_factor_pdf_delete = Permission::create(['name' => 'order factor pdf delete']);
        $detach_media = Permission::create(['name' => 'detach media']);
        //get permission to roles
        $super_admin->givePermissionTo($user_create,$user_edit, $user_index,$user_delete,
            $product_create,$product_index, $product_edit,$product_delete,
            $order_create,$order_delete,$order_edit,$order_index,
            $factor_create,$factor_delete,$factor_edit, $factor_index,
            $lable_create,$lable_delete,$lable_edit,$lable_index,
            $message_create,$message_delete,$message_edit,$message_index,
            $note_create,$note_delete,$note_edit,$note_index,
            $task_create,$task_delete,$task_edit,$task_index,
            $team_create,$team_delete,$team_edit,$team_index,
            $ticket_create,$ticket_delete,$ticket_edit,$ticket_index,
            $warranty_create,$warranty_delete,$warranty_edit,$warranty_index,
            $profile_create,$profile_delete,
            $order_factor_pdf_create,$order_factor_pdf_delete,
            $product_image_create,$product_image_delete,
            $detach_media,$attach_media
        );
        $admin->givePermissionTo($user_create,$user_edit,$user_index,$user_delete,
            $product_create,$product_index,$product_edit,$product_delete,
            $order_create,$order_delete,$order_edit,$order_index,
            $factor_create,$factor_delete,$factor_edit,$factor_index,
            $lable_create,$lable_delete,$lable_edit,$lable_index,
            $message_create,$message_delete,$message_edit,$message_index,
            $note_create,$note_delete,$note_edit,$note_index,
            $task_create,$task_delete,$task_edit,$task_index,
            $team_create,$team_delete,$team_edit,$team_index,
            $ticket_create,$ticket_delete,$ticket_edit,$ticket_index,
            $warranty_create,$warranty_delete,$warranty_edit,$warranty_index,
            $profile_create,$profile_delete,
            $product_image_create,$product_image_delete,
            $detach_media,$attach_media
        );
        $user->givePermissionTo($product_index,
            $order_create,$order_delete,$order_edit,$order_index,
            $factor_index,
            $lable_create,$lable_delete,$lable_edit,$lable_index,
            $message_create,$message_delete,$message_edit,$message_index,
            $note_create,$note_delete,$note_edit,$note_index,
            $task_index,
            $ticket_create,$ticket_delete,$ticket_index,$ticket_edit,
            $team_index,
            $warranty_index,
            $profile_create,$profile_delete,
            $detach_media,$attach_media
        );
        $customer->givePermissionTo($product_create,$product_delete,$product_edit,$product_index,
            $lable_create,$lable_delete,$lable_edit,$lable_index,
            $message_create,$message_delete,$message_edit,$message_index,
            $task_index,
            $profile_create,$profile_delete,
            $product_image_create,$product_image_delete,
            $detach_media,$attach_media
        );
        // $reseller->givePermissionTo();
    }
}
