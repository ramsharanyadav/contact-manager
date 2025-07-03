<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    const TABLE = 'contacts';

	const ID              = 'id';
	const Name            = 'name';
	const Phone           = 'phone';
	const CreatedAt       = 'created_at';
	const UpdatedAt       = 'updated_at';

	/** @var string */
	protected $table = self::TABLE;

    protected $fillable = [
        self::Name,
        self::Phone
    ];

    protected $casts = [
        self::CreatedAt => 'datetime',
        self::UpdatedAt => 'datetime',
    ];

	/** @var bool */
	public $timestamps = false;
}
