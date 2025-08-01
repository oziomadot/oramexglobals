<?php

namespace App\Livewire\Lesson;

use App\Models\Course;
use Livewire\Component;
use App\Models\Lesson;
use App\Models\Path;
use App\Models\Technology;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use App\Models\Education;
use Google_Client;
use Google_Service_YouTube;
use Google_Service_YouTube_Video;
use Google_Service_YouTube_VideoSnippet;
use Google_Service_YouTube_VideoStatus;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\YouTubeService;
use App\Models\Title;
use App\Models\Tutorial;

class AddLesson extends Component
{

    use WithFileUploads; // ✅ Required for file uploads

    public $course1;
    public $lessons;
    public $video;
    public $titles = [];
    public $title_id;
    public $new_title;
    public $description;

    // public $technology;
    // public $course;
    public $extras;

    public $selectedTechnology;
    public $attachment;
public $photo;
public $film;

public $paths;
public $selectedPath;
public $courses =[];
public $selectedCourse;
public $technologies = [];
public $technology1;

    public function mount()
    {
        $this->lessons = Lesson::where('id', Auth::id())->get();
        $this->titles = Title::all() ?? collect();
        $this->paths = Path::with(['courses.technologies.lessons'])->get();

    }

    public function updatedSelectedPath($pathId)
    {

        $this->courses = Course::whereHas('paths', function ($query) use ($pathId) {
            $query->where('paths.id', $pathId);
        })->get();
    }

    public function updatedSelectedCourse($courseId)
    {
        $this->technologies = Course::find($courseId)?->technologies ?? [];
    }

    public function render()
    {

        return view('livewire.lesson.add-lesson')->layout('components.dashboard');
    }

    public function rules()
    {
        return [
            'video' => 'required|string',
            'description' => 'nullable|string',
            'selectedPath' => 'required|exists:paths,id',
            'selectedTechnology' => 'nullable|exists:technologies,id',
            'selectedCourse' => 'nullable|exists:courses,id',
            'extras'=>'nullable|string',
            'title_id' => 'nullable|exists:titles,id',
            'new_title' => 'nullable|string|max:255|unique:titles,name',



        ];



    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

    }

    public function addlesson()
    {


        $validateData = $this->validate($this->rules());

        // 'video' => 'required|file|mimes:mp4,mov,avi|max:102400',mimes:mp4,mov,avi|file|
        //     'title' => 'required|string|max:255',
        //     'description' => 'required|string'


        if ($this->new_title) {
            $title = Title::create(['name' => $this->new_title]);
            $this->title_id = $title->id;
        }


        $title = $validateData['title_id']?: $this->title_id;

            Tutorial::create([
                'title_id' => $validateData['title_id'],
                'description' => $validateData['description'],
                'path_id' => $validateData['selectedPath'],
                'technology_id' => $validateData['selectedTechnology'],
                'course_id' => $validateData['selectedCourse'],
                'youtube_url' => $validateData['video'],
            ]);

            // return response()->json(['message' => 'Video uploaded successfully!'], 200);


            session()->flash('status', 'Tutorial successful uploaded! Please continue with the next action');

        // Reset form
        $this->reset();
        // }

        // return response()->json(['error' => 'Upload failed'], 500);
    }

    public function editlesson()
    {
        //
    }






    }



