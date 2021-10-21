<?php

namespace App\Http\Livewire;
use App\Models\Course;
use Livewire\Component;

class CoursesComents extends Component
{
    public $course_id;

    public function mount(Course $course){
        $this->course_id =$course->id;

    }

    public function render()
    {
        $course = Course::find($this->course_id);

        return view('livewire.courses-coments', compact('course'));
    }

    public funcion store(){
        $course= Course::find($this->course_id);
        $course->reviews()->create([
            'comment' => $this->comment,
            'use_id' => auth()->user()->id
        ]);
    }
}
