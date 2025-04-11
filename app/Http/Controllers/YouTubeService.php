<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google_Client;
use Google_Service_YouTube;
use Google_Service_YouTube_Video;
use Google_Service_YouTube_VideoSnippet;
use Google_Service_YouTube_VideoStatus;

class YouTubeService extends Controller
{
    protected $client;
    public function __construct()
        {
            $this->client = new Google_Client();
            $this->client->setAuthConfig(storage_path('app/google/client_secret.json'));
            $this->client->setScopes([
                Google_Service_YouTube::YOUTUBE_UPLOAD,
            ]);
            $this->client->setAccessType('offline');
            $this->client->setPrompt('select_account consent');

            if (session()->has('youtube_access_token')) {
                $this->client->setAccessToken(session('youtube_access_token'));
            }
        }

        public function authenticate()
        {
            if (!$this->client->getAccessToken()) {
                return redirect($this->client->createAuthUrl());
            }
        }

        public function uploadVideo($filePath, $title, $description)
        {
            $youtube = new Google_Service_YouTube($this->client);

            $video = new Google_Service_YouTube_Video();
            $videoSnippet = new Google_Service_YouTube_VideoSnippet();
            $videoSnippet->setTitle($title);
            $videoSnippet->setDescription($description);
            $videoSnippet->setTags(["Laravel", "API", "YouTube"]);
            $videoSnippet->setCategoryId("22"); // Category: People & Blogs

            $videoStatus = new Google_Service_YouTube_VideoStatus();
            $videoStatus->setPrivacyStatus("public"); // public, private, unlisted

            $video->setSnippet($videoSnippet);
            $video->setStatus($videoStatus);

            $chunkSizeBytes = 1 * 1024 * 1024; // 1MB
            $this->client->setDefer(true);
            $request = $youtube->videos->insert("status,snippet", $video);

            $media = new \Google_Http_MediaFileUpload(
                $this->client,
                $request,
                'video/*',
                null,
                true,
                $chunkSizeBytes
            );
            $media->setFileSize(filesize($filePath));

            $status = false;
            $handle = fopen($filePath, "rb");
            while (!$status && !feof($handle)) {
                $chunk = fread($handle, $chunkSizeBytes);
                $status = $media->nextChunk($chunk);
            }
            fclose($handle);

            if ($status) {
                return $status['id']; // YouTube Video ID
            }
            return null;
        }
}
