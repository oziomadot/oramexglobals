<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function verify(Request $request)
    {
        $token = env('VERIFY_TOKEN');

        if (
            $request->input('hub_mode') == 'subscribe' &&
            $request->input('hub_verify_token') == $token
        ) {
            return response($request->input('hub_challenge'), 200);
        } else {
            return response()->json(['error' => 'Invalid verification request'], 400);
        }
    }

    public function handle(Request $request)
    {
        $token = env('WHATSAPP_TOKEN');

        if ($request->input('hub.mode') == 'subscribe' && $request->input('hub.verify_token') == $token) {
            return response($request->input('hub.challenge'), 200);
        } else {
            return response()->json(['error' => 'Invalid verification request'], 400);
        }
    }



    public function handleWebhook(Request $request)
    {
        $body = json_decode($request->getContent(), true);

        if ($body['field'] !== 'messages') {
            // not from the messages webhook so don't process
            return response()->json([], 400);
        }

        foreach ($body['value']['messages'] as $message) {
            $review = new Whatsapp();
            $review->phonenumber = $message['from'];
            $review->review = $message['text']['body'];
            $review->save();
        }

        // return 200 code once all reviews have been written to the database
        return response()->json(['success' => true], 200);
    }
}
