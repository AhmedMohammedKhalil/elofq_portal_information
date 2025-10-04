<?php

namespace App\Http\Livewire\Admin\Sessions;

use App\Models\Session;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Admin\Sessions\Searching;

class Search extends Component
{
    public $start_at,$end_at,$sessions;

    public function mount() {
        $this->start_at = null;
        $this->end_at = null;
        $this->sessions = Session::where('date','>=',date('d-m-Y'))->get();
    }


    protected $messages = [
        'after_or_equal' => 'يجب ان يكون التاريخ اكبر او يساوى من تاريخ البداية',
    ];



    public function updatedEndAt() {
        if($this->end_at != null &&  $this->start_at != null) {
            $validatedata = $this->validate(
            ['end_at' => ['after_or_equal:'.Carbon::parse($this->start_at)->toDateString()]]
            );
        }

    }

    public function makeSearch() {
        $this->updatedEndAt();
        $query = Session::query();
        if($this->start_at != null && $this->start_at != '') {
            $start_at = Carbon::parse($this->start_at)->format('d-m-Y');
            $query = $query->where('date','>=',$start_at);
        }
        if($this->end_at != null && $this->end_at != '') {
            $end_at = Carbon::parse($this->end_at)->format('d-m-Y');
            $query = $query->where('date','<=',$end_at);
        }
        $this->sessions = $query->get();
        if(($this->start_at == null || $this->start_at == '') && ($this->end_at == null || $this->end_at == '')) {
            $this->emitTo(Searching::class,'showFullSessions');
        } else {
            $this->emitTo(Searching::class,'showSessions',$this->sessions);
        }

    }

    public function render()
    {
        return view('livewire.admin.sessions.search');
    }
}
