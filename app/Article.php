<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
    	'title',
    	'body',
    	'published_at',
        'user_id'
    ];

    protected $dates = [
    	'published_at'
    ];

    //setNameAttribute
    public function setPublishedAtAttribute($date)
    {
    	//$this->attributes['published_at'] =  Carbon::createFromFormat('Y-m-d', $date);
    	
    	$myDate = Carbon::createFromFormat('Y-m-d', $date);
    	if($myDate > Carbon::now()){
    		$this->attributes['published_at'] =  Carbon::parse($date);
    	}else{
    		$this->attributes['published_at'] =  Carbon::createFromFormat('Y-m-d', $date);	
    	}
    	
    	//$this->attributes['published_at'] =  Carbon::parse($date);
    }


    //
    public function scopePublished($query)
    {
    	$query->where('published_at','<=', Carbon::now());
    }


    //
    public function scopeUnpublished($query)
    {
    	$query->where('published_at','>', Carbon::now());
    }

    
    //
    public function user(){
        return $this->belongsTo('App\User');
    }

}
