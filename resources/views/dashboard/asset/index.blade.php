<x-dashboard-layout title="Asset">
    <div class="d-flex justify-content-between align-items-center">
        <h2>Asset</h2>
    </div>
    <div class="col-12">
        <div class="card border border-1 mt-4 shadow">
            <div class="card-header fs-5 fw-bold text-primary">
                <div class="d-flex justify-content-between align-items-center">
                    Data Asset
                    <a class="btn btn-primary" href="{{ route('asset.create') }}" role="button">
                        Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body">
                @if ($assets->isNotEmpty())
                    <div class="entitySection">
                        <table class="table table-hover table-striped table-bordered" id="tableAsset">
                            <thead class="text-center">
                                <tr class="table-primary">
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Detail</th>
                                    <th>Year</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($assets as $asset)
                                    <tr class="text-center">
                                        <td class="text-wrap">{{ $asset->title }}</td>
                                        <td class="text-wrap">{!! nl2br(Str::limit($asset->desc, 30)) !!}</td>
                                        <td class="text-wrap">{!! nl2br(Str::limit($asset->detail, 30)) !!}</td>
                                        <td>{{ $asset->year }}</td>
                                        <td>
                                            <div class="d-flex flex-row justify-content-center">
                                                <a class="badge bg-success border-0 text-white fw-normal me-1" style="font-size: 14px;" href="{{ route('asset.edit', $asset->id) }}" role="button">
                                                    Ubah
                                                </a>
                                                
                                                <form action="{{ route('asset.destroy', $asset->id) }}" method="post">
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
                            Data asset kosong.
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-dashboard-layout>