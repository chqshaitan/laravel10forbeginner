<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAvatarRequest;
use http\Env\Response;
use Illuminate\Http\Request;

class AvatarController extends Controller
{

    public function update(UpdateAvatarRequest $request)
    {
        $path = $request->file('avatar')->store('avatars','public');

        auth()->user()->update(['avatar' => $path]);

        return back()->with('message','Avatar is updated');
    }
}
