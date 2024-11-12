<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EbookGallery extends Model
{
    protected $fillable = [
        'ebook_id',
        'image_path',
    ];

    public function ebook()
    {
        return $this->belongsTo(Ebook::class);
    }
}
