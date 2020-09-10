<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddThumbnailToHangHoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hang_hoa', function (Blueprint $table) {
            $table->string('thumbnail')->before('hinh');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hang_hoa', function (Blueprint $table) {
            $table->dropColumn('thumbnail');
        });
    }
}
