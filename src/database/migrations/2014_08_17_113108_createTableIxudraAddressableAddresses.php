<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIxudraAddressableAddresses extends Migration {

    public function up()
    {
        Schema::create('addresses', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('reference_id')->nullable()->default(null);
            $table->string('reference_type')->nullable()->default(null);
            $table->string('street_1', 256)->nullable()->default(null);
            $table->string('street_2', 256)->nullable()->default(null);
            $table->integer('number')->nullable()->default(null);
            $table->string('box', 16)->nullable()->default(null);
            $table->string('district', 128)->nullable()->default(null);
            $table->string('postal_code', 32)->nullable()->default(null);
            $table->string('city', 128)->nullable()->default(null);
            $table->string('country', 32)->nullable()->default(null);
            $table->string('latitude', 16)->nullable()->default(null);
            $table->string('longitude', 16)->nullable()->default(null);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('addresses');
    }

}
