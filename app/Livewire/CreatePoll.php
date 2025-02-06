<?php

namespace App\Livewire;

use App\Models\Poll;
use Illuminate\Http\Request;
use Livewire\Component;

class CreatePoll extends Component
{

    public $title;

    public $options = [];

    public function render()
    {

        /* $this->title ile property ye erişilir */


        return view('livewire.create-poll');
    }

    public function addText(){

        $this->options[] = '';

    }

    public function deleteText($index){

        unset($this->options[$index]);
        $this->options = array_values($this->options);

        // fonksiyon çalıştığında array güncellenir ve array public olduğu için view'de de güncellenmiş oluyor

    }

    public function savePoll(){

        $poll = Poll::create([
            'title' => $this->title
        ])->options()->createMany(
            collect($this->options)
            ->map(fn($option)=>['name'=>$option])
            ->all()
        );



   /*      foreach($this->options as $option){
            $poll->options()->create([
                'name' => $option
            ]);
        } */

        $this->reset(['title','options']);

    }

}
