<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Pos extends Component
{
    public $jb;
    public $barang;
    public $tharga , $bayar;
    public function mount()
    {
        $produk = DB::table("produk")->get();
        foreach ($produk as $key => $value) {
            $this->barang[$value->id] = $value->stok;
            $this->jb[$value->id] = 0;
        }
    }
    public function render()
    {
        $produk = DB::table("produk")->get();
        $th = 0;
        foreach ($produk as $key => $value) {
            $this->barang[$value->id] = $value->stok;
            if($this->jb[$value->id] > 0){
                $this->barang[$value->id] = $this->barang[$value->id] - $this->jb[$value->id];
                $th += $this->jb[$value->id] * $value->harga;
            }
        }
        $this->tharga = $th;
        return view('livewire.pos',[
            "produk" => DB::table("produk")->get()
        ]);
    }
    public function cek(){
        dd($this->jb);
    }
}
