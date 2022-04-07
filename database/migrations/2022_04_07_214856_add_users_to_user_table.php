<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.co.uk',
            'password' => Hash::make('admin123'),
        ]);
        User::create([
            'name' => 'User 1',
            'email' => 'user1@user.co.uk',
            'password' => Hash::make('user123'),
        ]);
        User::create([
            'name' => 'User 2',
            'email' => 'user2@user.co.uk',
            'password' => Hash::make('user123'),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            //
        });
    }
};
