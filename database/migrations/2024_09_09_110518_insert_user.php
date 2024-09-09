<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    $user = new User([
      "name" => 'Super Admin',
      "email" => 'super.admin@email.com',
      "password" => Hash::make("123456789")
    ]);

    $user->save();

    $user->assignRole('Super Admin');
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    //
  }
};
