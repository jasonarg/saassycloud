<?php

namespace App\Model\Core\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * One to One inverse relationship to contact
     * @return \App\Model\Core\Entities\Contact
     */
    public function contact(){
        return $this->belongsTo('\App\Model\Core\Entities\Contact', 'contact_id', 'id');
    }

    /**
     * Many to many relationship with Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function customers(){
        return $this->belongsToMany('\App\Model\Core\Entities\Customer', 'customer_user');
    }

    public function getProfilePicPath(){
        $this->contact->load('profileImages');
        try{
            $profileImageGroup = $this->contact->profileImages->first();
            if(is_null($profileImageGroup)){
                throw new \Exception('No image group associated to user\'s contact');
            }
            $profileImageGroup->load('defaultImage');
            $profileImage = $profileImageGroup->defaultImage[0];
            $profileImagePath = storage_path().'/app/protected/user/'.$profileImageGroup->id.'/'.$profileImage->fileName.'.'.$profileImage->type;
       }
       catch(\Exception $e){
           $profileImagePath = base_path().'/public/i/defaultProfile.png';

       }
          return $profileImagePath;

    }

}


