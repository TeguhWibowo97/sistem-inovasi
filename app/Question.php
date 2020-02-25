<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['keterangan','dokumen','avatar'];
    
    public function getAvatar()
    {
        if(!$this->avatar){
            return asset('/assetAdmin/img/cancel.png');
        }
        return asset('/assetAdmin/img/download.png');
    }
    public function getDocument()
    {
        if(!$this->dokumen){
            return asset('/assetAdmin/img/cancel.png');
        }
        return asset('/assetAdmin/img/download.png');
    }
    public function getKeterangan()
    {
        if(!$this->keterangan){
            return asset('/assetAdmin/img/cancel.png');
        }
        return asset('/assetAdmin/img/oke.png');
    }
}
