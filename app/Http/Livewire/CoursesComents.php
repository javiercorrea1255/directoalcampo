<?php

namespace App\Http\Livewire;
use App\Models\Course;
use Livewire\Component;

class CoursesComents extends Component
{
    public $course_id, $comment;

    public function mount(Course $course){
        $this->course_id =$course->id;

    }

    public function render()
    {
        $course = Course::find($this->course_id);

        return view('livewire.courses-coments', compact('course'));
    }

    public function store(){
        $course = Course::find($this->course_id);

        $course->comments()->create([
            'comment' => $this->comment,
            'user_id'=> auth()->user()->id
        ]);
    }
    
}
