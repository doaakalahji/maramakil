<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        // dd($request->user()->with("profile")->first());
        return view('profile.edit', [
            'user' => $request->user()->with("profile")->first(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function updateProfile(Request $request){
      $profile = Profile::where("user_id" , $request->user()->id)->first();
        //   dd($request->user()->profile);
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);
        // dd($validated['password']);

        // $request->user()->update([
        //     'password' => Hash::make($validated['password']),
        // ]);
        if ($request->hasFile('image')) {
            // dd("iame");
            $image          = $request->file('image');
            $newImageName   = $image->getClientOriginalExtension();
            $location       = public_path('/img');
            $OldImage       = public_path('img/'.$profile->image); //new
            $image->move($location, $newImageName);
           if($profile->image){
                unlink($OldImage); //new
           }
        }else {
            // dd("dddddd");
            $newImageName   = $request->image;
        }
    //   dd($newImageName);
        $request->user()->fill([
            'name' => $request->name,
            'email' => $request->user()->email,
            'password' => Hash::make($validated['password']),
       ]);

       $request->user()->profile->fill([
        'username' => $request->name,
        'bio' => $request->bio,
        'facebook' => $request->facebook,
        'whatsup' => $request->whatsup,
        'instagram' => $request->instagram,
        "image" => $newImageName,
     ]);
      if ($request->user()->isDirty('email')) {
          $request->user()->email_verified_at = null;
      }

      $request->user()->save();
      $request->user()->profile->save();

      return Redirect::route('profile.edit')->with('status', 'profile-updated');

    }
}
