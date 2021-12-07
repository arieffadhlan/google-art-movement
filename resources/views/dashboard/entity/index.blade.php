<x-dashboard-layout title="Entity">
    <div class="d-flex justify-content-between align-items-center">
        <h2>Entity</h2>
    </div>
    <div class="col-12">
        <div class="card border border-1 mt-4 shadow">
            <div class="card-header fs-5 fw-bold text-primary">
                <div class="d-flex justify-content-between align-items-center">
                    Data Entity
                    <a class="btn btn-primary" href="{{ route('entity.create') }}" role="button">
                        Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body">
                @if ($entities->isNotEmpty())
                    <div class="entitySection table-responsive">
                        <table class="table table-hover table-striped table-bordered" id="tableEntity">
                            <thead class="text-center">
                                <tr class="table-primary">
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
                                        <td>{!! nl2br(Str::limit($entity->desc, 30)) !!}</td>
                                        <td>{{ $entity->year }}</td>
                                        <td>
                                            <div class="d-flex flex-row justify-content-center">
                                                <a class="badge bg-success border-0 text-white fw-normal me-1" style="font-size: 14px;" href="{{ route('entity.edit', $entity->id) }}" role="button">
                                                    Ubah
                                                </a>
                                                
                                                <form action="{{ route('entity.destroy', $entity->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')                                                
                                                    <button type="submit" class="badge bg-danger border-0 text-white fw-normal" style="font-size: 14px;">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="col-12">
                        <div class="alert alert-primary">
                            Data entity kosong.
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-dashboard-layout>