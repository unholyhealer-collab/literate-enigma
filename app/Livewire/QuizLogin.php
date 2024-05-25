<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Http;

class QuizLogin extends Component
{
    #[Validate('required')]
    public $secret = '';

    #[Validate('required')]
    public $access_code = '';

    public function send()
    {
        // // 01HYKCFKSEG2NQHJRHJ8N8H85E
        // $this->validate();
        // $response = Http::withHeaders([
        //     'Content-Type' => 'application/json',
        //     'Accept' => 'application/json'
        // ])->post('http://127.0.0.1:8000/api/v1/auth', [
        //     'secret' => $this->secret,
        //     'access_code' => $this->access_code
        // ]);
        // $user_token = explode("|", $response->json()["token"])[1];
        // // $this->quiz_data =  $response->json()["data"];
        // // return dd($this->quiz_data);
        // // $response->withCookie(cookie()->forever('user_token', encrypt($user_token)));
        // return dd($response->json());
        $this->redirect('/account'); 
    }
    public function render()
    {
        return view('livewire.quiz-login');
    }
}
