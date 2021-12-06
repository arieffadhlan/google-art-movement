<x-dashboard-layout title="Artist">
    <div class="d-flex justify-content-between align-items-center">
        <h2>Artist</h2>
    </div>
    <div class="col-12">
        <div class="card border border-1 mt-4 shadow">
            <div class="card-header fs-5 fw-bold text-primary">
                <div class="d-flex justify-content-between align-items-center">
                    Data Artist
                    <a class="btn btn-primary" href="#" role="button">
                        Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body">
                @if ($artists->isNotEmpty())
                    <div class="entitySection">
                        <table class="table table-hover table-striped table-bordered" id="tableArtist">
                            <thead class="text-center">
                                <tr class="table-primary">
                                    <th>Name</th>
                                    <th>Detail</th>
                                    <th>Riwayat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($artists as $artist)
                                    <tr class="text-center">
                                        <td class="text-wrap">{{ $artist->name }}</td>
                                        <td class="text-wrap">{!! nl2br(Str::limit($artist->detail, 30)) !!}</td>
                                        <td>{{ $artist->riwayat }}</td>
                                        <td>
                                            <a class="badge bg-success border-0 text-white fw-normal" style="font-size: 14px;" href="#" role="button">
                                                Ubah
                                            </a>
                                            <button type="button" class="badge bg-danger border-0 fw-normal" style="font-size: 14px;" data-bs-toggle="modal"
                                                data-bs-target="#modalDelete">
                                                Hapus
                                            </button>
                                            {{-- <x-modal-delete-stock>
                                                <x-slot name="stock_id">
                                                    {{ $artist->id }}
                                                </x-slot>
                                            </x-modal-delete-stock> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="col-12">
                        <div class="alert alert-primary">
                            Data artist kosong.
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-dashboard-layout>