<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userside.user_pages.profile_form');
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request->all());
        $profile = $request->validate([

            'address' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'postal_code' => 'required',
        ]);
        $profile['user_id'] = auth()->id();
// if(UserProfile::exist())
// {
//     Redirect::back()->withErrors(['msg' => 'Profile already exist']);

// }else{
//     UserProfile::create($profile);

// }

$user = UserProfile::where('user_id', '=', auth()->id())->first();
if ($user === null) {
    UserProfile::create($profile);
    return redirect(route('user.dashboard'));
    
} else {
    return back()->with(['alert' => 'Profile already exist']);
}

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfile $userProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProfile $userProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProfile $userProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfile $userProfile)
    {
        //
    }
}
