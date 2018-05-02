<?php

namespace App;

use Faker\Provider\Image;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Photo extends Model
{

    protected $table = 'banner_photos';
    protected $fillable= ['path','name','thumbnail_path'];
    protected $baseDir = 'images/photos';
    public function Banner()
    {
        return $this->belongsTo(Banner::class);
    }

    public static function named($name)
    {
        $photo = new static;
        $photo->saveAs($name);
        // $name = time() . $file->getClientOriginalName();
       // $photo->path = $photo->baseDir.DIRECTORY_SEPARATOR .$name;
        return $photo;
    }
    public function saveAs($name)
    {
        $this->name          = sprintf("%s-%s", time(),$name);
        $this->path           = sprintf("%s/%s", $this->baseDir, $this->name);
        $this->thumbnail_path = sprintf("%s/tn-%s", $this->baseDir,$this->name);
    }
    public function move(UploadedFile $file)
    {
        $file->move($this->baseDir, $this->name);
        $this->makeThumbnail();
        return $this;
    }





    public function makeThumbnail()
    {
        Image::make($this->path)->fit(200)->save($this->thumbnail_path);
        return $this;
    }
}
