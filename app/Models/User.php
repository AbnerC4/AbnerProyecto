<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $nombre_pila
 * @property string $password
 * 
 * @property Collection|Venta[] $ventas
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'email',
		'nombre_pila',
		'password'
	];

	public function ventas()
	{
		return $this->hasMany(Venta::class, 'users_id');
	}
}
