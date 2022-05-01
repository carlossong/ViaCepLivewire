<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Viacep extends Component
{
    public $cep;
    public $logradouro;
    public $complemento;
    public $bairro;
    public $localidade;
    public $uf;

    public function getCep($cep)
    {
        $response = Http::get('https://viacep.com.br/ws/'.$cep.'/json/');

        $data = $response->json();

        if(!empty($data['erro'])){
            session()->flash('message', 'CEP não encontrado.');
            return redirect()->route('dashboard');
        }else{
            $this->logradouro = $data['logradouro'];
            $this->complemento = $data['complemento'];
            $this->bairro = $data['bairro'];
            $this->localidade = $data['localidade'];
            $this->uf = $data['uf'];
        }
    }

    public function render()
    {
        return view('livewire.viacep');
    }
}
