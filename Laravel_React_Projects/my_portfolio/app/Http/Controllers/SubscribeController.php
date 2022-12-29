<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Subscriber;
use App\Notifications\Subscribe;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Symfony\Contracts\Service\Attribute\Required;
use Exception;
use Illuminate\Validation\ValidationException;

class SubscribeController extends Controller
{
    public function sendSubscribers()
    {

        $users = Subscriber::all();
        $sluglink = Post::all()->last()->slug;
        $slink = str_replace('%20', ' ', $sluglink);
        $sendSubscribers = [
            'subject' => Post::all()->last()->title,
            'excerpt' => Post::all()->last()->excerpt,
            'btn' => 'Keep Reading...',
            'url' => 'https://www.webxazim.com/blog/posts/' . $slink,
        ];
        foreach ($users as $user) {
            $user->notify(new Subscribe($sendSubscribers));
            // Notification::send($user, new Subscribe($sendSubscribers));
        }

        return redirect('/blog');
    }




    public function subscribe(Request $request)
    {

        $request->validate([
            'email' => 'required|max:225'
        ]);


        try {
            Subscriber::create([
                'email' => $request->input('email'),
            ]);
        } catch (Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'Invalid email or already added.'
            ]);
        }

        return redirect('/blog')
            ->with('success', 'Subscribed successfully, ThankQ!');
    }
}
