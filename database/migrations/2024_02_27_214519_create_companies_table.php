<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->timestamps();
        });

        // Menambahkan data
        DB::table('companies')->insert([
            [
                'name' => 'Wood Company',
                'email' => 'woodcompany@example.com',
                'address' => 'Aceh',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Stone Company',
                'email' => 'stonecompany@example.com',
                'address' => 'Sumatera Utara',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Glass Company',
                'email' => 'glasscompany@example.com',
                'address' => 'Sumatera Barat',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Iron Company',
                'email' => 'ironcompany@example.com',
                'address' => 'Riau',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Plastic Company',
                'email' => 'plasticcompany@example.com',
                'address' => 'Jambi',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Textile Company',
                'email' => 'textilecompany@example.com',
                'address' => 'Sumatera Selatan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Electronics Company',
                'email' => 'electronicscompany@example.com',
                'address' => 'Bengkulu',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Food Company',
                'email' => 'foodcompany@example.com',
                'address' => 'Lampung',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Oil Company',
                'email' => 'oilcompany@example.com',
                'address' => 'Kepulauan Bangka Belitung',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pharmaceutical Company',
                'email' => 'pharmaceuticalcompany@example.com',
                'address' => 'Kepulauan Riau',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
