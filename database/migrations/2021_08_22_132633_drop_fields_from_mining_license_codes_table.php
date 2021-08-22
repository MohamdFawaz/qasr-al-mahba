<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropFieldsFromMiningLicenseCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mining_license_codes', function (Blueprint $table) {
            $table->dropColumn(['link','lat','lng']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mining_license_codes', function (Blueprint $table) {
            $table->text('link');
            $table->decimal('lat', 10, 7);
            $table->decimal('lng', 10, 7);
        });
    }
}
