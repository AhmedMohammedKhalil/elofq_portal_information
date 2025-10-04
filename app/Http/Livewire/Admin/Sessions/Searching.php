<?php

namespace App\Http\Livewire\Admin\Sessions;

use App\Models\Session;
use Livewire\Component;

class Searching extends Component
{
    public $sessions;
    public $flag = false;

    protected $listeners = [
        'showSessions',
        'showFullSessions'
    ];


    public function showSessions($sessions) {
        $this->flag = true;
        if($sessions) {
            $ids = [];
            foreach($sessions as $session) {
                $ids[] = $session['id'];
            }
            $this->sessions = Session::find($ids);
        } else {
            $this->sessions = '';
        }

    }


    public function showFullSessions() {
        $this->flag = true;
        $this->sessions = Session::where('date','>=',date('d-m-Y'))->get();
    }

    public function render()
    {
        $this->sessions = $this->flag == true ? $this->sessions : Session::where('date','>=',date('d-m-Y'))->get();
        return view('livewire.admin.sessions.searching');
    }
}
