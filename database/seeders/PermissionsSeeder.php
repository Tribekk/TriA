<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name'=>'Изменение клиентов']);
        Permission::create(['name'=>'Удаление клиентов']);
        Permission::create(['name'=>'Добавление категорий']);
        Permission::create(['name'=>'Обновление категорий']);
        Permission::create(['name'=>'Удаление категорий']);
        Permission::create(['name'=>'Добавление продукции']);
        Permission::create(['name'=>'Обновление продукции']);
        Permission::create(['name'=>'Удаление продукции']);
        Permission::create(['name'=>'Ответ на заявки']);
        Permission::create(['name'=>'Просмотр заявки']);
        Permission::create(['name'=>'Удаление заявки']);
        Permission::create(['name'=>'Изменение сотрудника']);
        Permission::create(['name'=>'Удаление сотрудника']);
    }
}
