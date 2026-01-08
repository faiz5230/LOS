@extends('layouts.master')

@section('title')
    Data Debitur Pensiun
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Debitur Pensiun
        @endslot
        @slot('title')
            Data Debitur Pensiun
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Data Debitur Pensiun</h4>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Nasabah</th>
                                    <th>Jumlah Permohonan</th>
                                    <th>Jangka Waktu</th>
                                    <th>Account Officer</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $index => $item)
                                    <tr>
                                        <td>{{ $data->firstItem() + $index }}</td>
                                        <td>{{ $item->nama_pensiun }}</td>
                                        <td>Rp {{ number_format($item->jumlah_permohonan_kredit, 0, ',', '.') }}</td>
                                        <td>{{ $item->jangka_waktu }} Bulan</td>
                                        <td>{{ $item->account_officer }}</td>
                                        <td>
                                            <a href="{{ route('debitur-pensiun.show', $item->id) }}" class="btn btn-sm btn-info">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="{{ route('debitur-pensiun.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a href="{{ route('debitur-pensiun.export', $item->id) }}" class="btn btn-sm btn-success">
                                                <i class="ri-download-line"></i>
                                            </a>
                                            <form action="{{ route('debitur-pensiun.destroy', $item->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Tidak ada data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-end mt-3">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
