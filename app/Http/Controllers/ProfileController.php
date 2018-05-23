<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Post;


class ProfileController extends Controller
{


    /**
     * Fetch user
     * (You can extract this to repository method).
     * @param $username
     *
     * @return mixed
     */

    public function getUserByUsername($username)
    {
        return User::with('profile')->wherename($username)->firstOrFail();
    }


    
    public function show($username)
    {
        try {
            $user = $this->getUserByUsername($username);
        } catch (ModelNotFoundException $exception) {
            abort(404);
        }
        // $currentTheme = Theme::find($user->profile->theme_id);
        $data = [
            'user'         => $user,
            // 'currentTheme' => $currentTheme,
        ];
        $posts = Post::all();

        // return view('posts.index', compact('posts');
        return view('profile.show' , compact('posts'))->with($data);
    }


		    /**
		 * Follow the user.
		 *
		 * @param $userid
		 *
		 */
	public function followUser(int $userid)
	{
		  $user = User::find($userid);
		  if(! $user) {
		    
		     return redirect()->back()->with('error', 'User does not exist.'); 
		 }


		$user->followers()->attach(auth()->user()->id);

		return redirect()->back()->with('success', 'Successfully followed the user.');

	}


			/**
		 * Follow the user.
		 *
		 * @param $userid
		 *
		 */
		public function unFollowUser(int $userid)
		{
		  $user = User::find($userid);
		  if(! $user) {
		    
		     return redirect()->back()->with('error', 'User does not exist.'); 
		 }

		$user->followers()->detach(auth()->user()->id);

		return redirect()->back()->with('success', 'Successfully unfollowed the user.');

		}


				/**
		 * Show the user details page.
		 * @param int $userId
		 *
		 */
		public function showfollow($username)
		{
		    $user = User::find($username);
		    try {
            $user = $this->getUserByUsername($username);
        } catch (ModelNotFoundException $exception) {
            abort(404);
        }
		    $followers = $user->followers;
		    $followings = $user->followings;

		    return view('profile.showfollow', compact('user', 'followers' , 'followings'));
		}


}