<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; //Mendefinisikan nama tabel yang digunakan oleh model ini  
    protected $primaryKey = 'user_id'; //Mendefinisikan primary key dari tabel yang digunakan oleh model ini
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    // protected $fillable = ['level_id', 'username', 'nama', 'password']; //Mendefinisikan kolom yang dapat diisi oleh model ini
    protected $fillable = ['level_id', 'username', 'nama', 'password' ];

    public function level()
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id'); //Mendefinisikan relasi antara model ini dengan model LevelModel
    }
}
