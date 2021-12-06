<x-dashboard-layout title="Gerakan Seni">
    <div class="d-flex justify-content-between align-items-center">
        <h2>Entity</h2>
    </div>
    <div class="col-12">
        <div class="card border border-1 mt-4 shadow">
            <div class="card-header fs-5 fw-bold text-primary">
                <div class="d-flex justify-content-between align-items-center">
                    Data Entity
                    <a class="btn btn-primary" href="#" role="button">
                        Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body">
                @if ($entities->isNotEmpty())
                    <div class="entitySection">
                        <table class="table table-hover table-striped table-bordered" id="tableEntity">
                            <thead class="text-center">
                                <tr class="table-secondary">
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Year</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($entities as $entity)
                                    <tr class="text-center">
                                        <td>{{ $entity->name }}</td>
                                        <td>{!! nl2br(Str::limit($entity->desc, 50)) !!}</td>
                                        <td>{{ $entity->year }}</td>
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
                                                    {{ $entity->id }}
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
                            Data stok kosong.
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-dashboard-layout>