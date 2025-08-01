<?php

namespace App\Livewire\StudentCourses;

use App\Models\Education;
use App\Models\Enrolled;
use App\Models\Lesson;
use App\Models\Technology;
use App\Models\Tutorial;
use Livewire\Component;
use Carbon\Carbon;

class Website extends Component
{


    public $title;
    // public $youtubeUrl = "https://youtu.be/5fZibE1aVIg?si=fnVAUfnKM3wicLLV";
    public $embedUrl;
    public $tutorials;
    public $currentIndex = 0;
    public $currentVideo;
    public $chooseEnd = false;
    public $tutorialBegin;
    public $endSelected;
    public $alltech;
    public $techSelected = false;
    public $techId;
    public $pathId = 1;
    public $enrolledId;
    public $newLesson;
    public $enrolledUser;
    public $watchedVideoCount;
    public $activeTechnologyId = null;
    public $progress;


    public function mount()
{
    $this->tutorials = collect();
    $this->getProgressProperty();

    $this->enrolledUser = Enrolled::where('user_id', auth()->id())
        ->with(['lesson' => function ($query) {
            $query->latest();
        }])
        ->first();

    $lastVideoId = $this->enrolledUser?->lesson->first()?->last_watched_video_id;

    if ($lastVideoId) {
        $lastVideo = Tutorial::find($lastVideoId);
        $this->currentVideo = $lastVideo;

        // 👇 Important: Load the full video collection based on the video's context
        if ($lastVideo->technology_id) {
            $this->tutorials = Tutorial::where('technology_id', $lastVideo->technology_id)->orderBy('id')->get();
        } elseif ($lastVideo->course_id) {
            $this->tutorials = Tutorial::where('course_id', $lastVideo->course_id)->orderBy('id')->get();
        } elseif ($lastVideo->path_id) {
            $this->tutorials = Tutorial::where('path_id', $lastVideo->path_id)->whereNull('course_id')->orderBy('id')->get();
        }

        // Set current index so "Next" works properly
        $this->currentIndex = $this->tutorials->pluck('id')->search($lastVideoId) ?? 0;

        $this->currentVideo->youtube_url = str_replace("youtu.be/", "www.youtube.com/embed/", $this->currentVideo->youtube_url);
    } else {
        // No history: start from the beginning of path
        $this->currentIndex = 0;

        $this->tutorials = Tutorial::where('path_id', 1)
            ->whereNull('course_id')
            ->orderBy('id')->get();

        $this->currentVideo = $this->tutorials[$this->currentIndex] ?? null;

        if ($this->currentVideo) {
            $this->currentVideo->youtube_url = str_replace("youtu.be/", "www.youtube.com/embed/", $this->currentVideo->youtube_url);
        }
    }
}

    public function render()
    {

        // $this->embedUrl= str_replace("youtu.be/", "www.youtube.com/embed/", $this->youtubeUrl);



        return view('livewire.student-courses.website',
        // [             'currentTutorial' => $this->currentVideo        ]
        )->layout('components.dashboard');
    }

    public function next()
    {
        $this->dispatch('refreshComponent');


        if ($this->currentVideo) {



        if(($this->currentVideo->technology_id ?? null) === ($this->enrolledUser?->lesson->last()?->technology_id ?? null)){

            $this->watchedVideoCount =$this->enrolledUser?->lesson->last()?->watched_video_count;
            $this->watchedVideoCount++;


                if($this->newLesson){
            $this->newLesson->update([
                'last_watched_video_id' => $this->currentVideo->id,
                'watched_video_count' => $this->watchedVideoCount
            ]);
        }}
        }


        if ($this->currentIndex < $this->tutorials->count() - 1) {
            $this->currentIndex++;

            $this->currentVideo = $this->tutorials[$this->currentIndex]; // Update current video
            // Convert URL to embeddable format
        $this->currentVideo->youtube_url = str_replace("youtu.be/", "www.youtube.com/embed/", $this->currentVideo->youtube_url);




        // Convert collection to an array to use array_key_last()
        $tutorialsArray = $this->tutorials->toArray();
        $lastIndex = array_key_last($tutorialsArray);



            if($this->currentIndex === $lastIndex && $this->currentVideo->path_id === 1){

                $this->chooseEnd = true;
            }elseif($this->currentIndex === $lastIndex && $this->currentVideo->course_id === 'Frontend') {

                $this->loadTechnologyVideos(1);

         }elseif($this->currentIndex === $lastIndex && $this->currentVideo->technology_id === 1){

                // $this->loadTest('HTML5');
            $this->loadTechnologyVideos(2);

         }elseif($this->currentIndex === $lastIndex && $this->currentVideo->technology_id === 2){

            $this->loadTechnologyVideos(3);

         }elseif($this->currentIndex === $lastIndex && $this->currentVideo->technology_id === 3){

            $this->loadTechnologyVideos(4);

         }elseif($this->currentIndex === $lastIndex && $this->currentVideo->technology_id === 4){

            $this->loadTechnologyVideos(5);

         }elseif($this->currentIndex === $lastIndex && $this->currentVideo->technology_id === 5){

            $this->loadTechnologyVideos(6);
         }elseif($this->currentIndex === $lastIndex && $this->currentVideo->technology_id === 6){

            $this->loadTechnologyVideos(7);
         }elseif($this->currentIndex === $lastIndex && $this->currentVideo->technology_id === 7){

            $this->loadTechnologyVideos(8);
         }elseif($this->currentIndex === $lastIndex && $this->currentVideo->technology_id === 8){

            $this->chooseCourse();
         }


        } else {
            // Call function when last item is reached
            $this->chooseCourse();
    }

    }



    public function chooseCourse()
    {
        $today= Carbon::today();
        $currentMonth = $today->month;
        $currentYear = $today->year;

        $batchGroup = match (true) {
            $currentMonth >= 10 || $currentMonth <= 2 => $currentYear . '_A',
            $currentMonth >= 3 && $currentMonth <= 6 => $currentYear . '_B',
            $currentMonth >= 7 && $currentMonth <= 9 => $currentYear . '_C',
            default => 'Unknown'
        };



        $validatedData = $this->validate([
            'endSelected' => 'required']);

            if($validatedData){


               $this->enrolledId = Enrolled::firstOrCreate([
                    'user_id'=> auth()->id(),
                    'path_id' => $this->pathId,
                    'course_id' =>$validatedData['endSelected']

                ], [
                    'batch' => $batchGroup, // Only set batch if new record is created
                ]);

        $this->currentIndex = 0; // Reset index
        $this->tutorials = Tutorial::where('path_id', 1)
            ->where('course_id', $validatedData['endSelected'])->get();

        if($this->tutorials){


            $this->chooseEnd = false;
        $this->currentVideo = $this->tutorials->isNotEmpty() ? $this->tutorials[$this->currentIndex] : null;

        $this->currentVideo->youtube_url = str_replace("youtu.be/", "www.youtube.com/embed/", $this->currentVideo->youtube_url);

        }else{
            $this->emit('alert', 'Sorry, Courses are not yet available. Please check back later');
        }

        $this->techSelected = true;


    }
    }


    public function loadTechnologyVideos($technologyName)
{
    $this->techSelected = true;
    $this->activeTechnologyId = $technologyName;

    $technology = Technology::where('id', $technologyName)->first();



    //create a lesson
   $this->newLesson= Lesson::firstOrCreate([
        'technology_id' => $technology->id,
           'enrolled_id' =>$this->enrolledId->id,
           'last_watched_video_id' => $this->currentVideo->id
    ]);


    if ($technology) {
        $this->tutorials = Tutorial::where('technology_id', $technology->id)->get();
        $this->currentIndex = 0;
        $this->currentVideo = $this->tutorials->first();
    } else {
        $this->emit('alert', 'No videos found for this technology.');
    }
}


public function loadExam($technologyName){
    //
}


// progress bar
public function getProgressProperty()
{

    // watched_video_count
    $watchedVideos = $this->enrolledUser?->lesson->first()?->watched_video_count;

    $totalVideos = Tutorial::where('technology_id', $this->activeTechnologyId)->count();


    return $totalVideos > 0 ? ($watchedVideos?:0 / $totalVideos) * 100 : 0;


}

protected function convertToEmbedUrl($url)
{
    // Match YouTube video ID
    preg_match("/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/watch\?v=|youtu\.be\/)([^\s&]+)/", $url, $matches);

    if (isset($matches[1])) {
        return "https://www.youtube.com/embed/" . $matches[1];
    }

    return null; // or a fallback video
}


}
