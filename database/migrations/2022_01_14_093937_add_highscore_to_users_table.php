<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHighscoreToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('highscore');
        });
        
        $ranking = DB::select("SELECT name,stagechecks.highscore
                               FROM users
                               INNER JOIN stagechecks
                               ON users.id = stagechecks.user_id
                               ORDER BY highscore DESC");
                               
        $userCount = count($ranking);
        
        for($i = 0 ; $i<=$userCount-1 ; $i++){
            $highScoreM = $ranking[$i]->name;

            $highScoreData = DB::select("SELECT name,users.highscore
                            FROM users
                            WHERE users.name = '$highScoreM'
                            ");

            $test = DB::select("SELECT name,stagechecks.highscore
                               FROM users
                               INNER JOIN stagechecks
                               ON users.id = stagechecks.user_id
                               WHERE users.name = '$highScoreM'
                                ");
            
            DB::table("users")->where('name', $test[0]->name)->update(['highscore' => $test[0]->highscore]);

        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table ->dropColumn('highscore');
        });
    }
}
