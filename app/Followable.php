<?php


namespace App;


trait Followable
{

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function toggleFollow(User $user)
    {
        // Tip: You can also use the toggle() method.
        //      We'll cover this in the next episode.
        //      $this->follows())->toggle($user);

        // instead use a toggle() method
        /*if ($this->following($user)) { // replaced all of auth()->user() to $this
            return $this->unfollow($user);
        }
        return $this->follow($user);*/

        $this->follows()->toggle($user);


/*        if ($this->following($user)) { // replaced all of auth()->user() to $this
            $this->unfollow($user);
        } else {
            $this->follow($user);
        }*/
    }

    public function following(User $user)
    {
//        return $this->follows->contains($user);
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }
}
