<?php

namespace App\Http\Controllers\Api;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NotificationAddRequest;

class NotificationController extends Controller
{
    //Create a new notification
    public function create(NotificationAddRequest $notificationAddRequest)
    {
        $user = auth()->user();

        $content = $notificationAddRequest->validated();

        if ($user->role === "author") {
            $notification = Notification::create([
                "title" => $content["title"],
                "content" => $content["content"],
                "author" => $user->id,
            ]);

            return response()->json(["notification" => $notification], 201);
        }

        return response()->json(['message' => 'Access denied'], 403);
    }

    public function show()
    {
        $notifications = Notification::all();

        return response()->json([
            "notifications" => $notifications
        ], 200);
    }
}
