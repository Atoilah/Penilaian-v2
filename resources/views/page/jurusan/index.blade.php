@extends('layouts.app')
@section('title', 'Jurusan')
@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($jurusan->count())
                        @foreach ($jurusan as $g)
                            <tr>
                                <th scope="row">
                                    {{ $g->JurusanId }}
                                </th>
                                <td>
                                    {{ $g->Kode }}
                                </td>
                                <td>
                                    {{ $g->JurusanNama }}
                                </td>
                                <td>
                                    <a>Edit</a>
                                    <a>Remove</a>
                                    {{-- @include('jurusan.edit') --}}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td align="center" class="py-4 px-6" colspan="5">Data tidak ditemukan</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
