@extends('layouts.main')

@section('container')

<div class="mt-3">
    <h1>Latihan</h1>
    <p>Ini adalah halaman latihan</p>
    
    <div class="progress rounded" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: 25%"></div>
      </div>
    <div class="row">
        
        <div class="col-8 p-2">
            <div class="card shadow">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <b>Soal No. --</b>
                        </div>
                        <div class="col text-end">
                            <b><i class="bi bi-clock text-end"></i> 00:00:00</b>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit vel laborum repellendus suscipit.</p>
                    <ol class="mt-4" type="a">
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                    </ol>
                </div>
               
            </div>
            
            <div class="row">
                <div class="col-4">
                    <button class="btn btn-primary mt-3"><i class="bi bi-chevron-double-left"></i> Sebelumnya </button>
                </div>
                <div class="col-4 text-center">
                    <button class="btn btn-warning mt-3">Ragu</button> 
                </div>
                <div class="col-4 text-end">
                    <button class="btn btn-primary mt-3">Selanjutnya <i class="bi bi-chevron-double-right"></i></button>
                </div>
            </div>
        </div>
        <div class="col-4 p-2">
            <div class="card shadow">
                <div class="card-header">
                    Soal
                </div>
                <div class="card-header">
                    <table class="table">
                        <tr class="text-center">
                            <td class="btn bg-success bg-secondary-subtle">1</td>
                            <td class="btn bg-secondary-subtle">2</td>
                            <td class="btn bg-success bg-secondary-subtle">3</td>
                            <td class="btn bg-secondary-subtle">4</td>
                            <td class="btn bg-secondary-subtle">5</td>
                        </tr>
                    </table>
                </div>
                <div class="card-body text-sm">
                    <p class="m-0 card-text">Hijau = Sudah dijawab</p>
                    <p class="m-0 card-text">Orange = Ragu-ragu</p>
                    <p class="m-0 card-text">Abu-abu = Belum dijawab</p>
                </div>
            </div>
            <div class="card shadow">
                <div class="row">
                    <div class="col text-center">
                        <button class="btn btn-danger m-2">Selesai</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection