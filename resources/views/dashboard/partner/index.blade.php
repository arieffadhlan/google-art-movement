<x-dashboard-layout title="Partner">
    <div class="d-flex justify-content-between align-items-center">
        <h2>Partner</h2>
    </div>
    <div class="col-12">
        <div class="card border border-1 mt-4 shadow">
            <div class="card-header fs-5 fw-bold text-primary">
                <div class="d-flex justify-content-between align-items-center">
                    Data Partner
                    <a class="btn btn-primary" href="{{ route('partner.create') }}" role="button">
                        Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body">
                @if ($partners->isNotEmpty())
                    <div class="entitySection">
                        <table class="table table-hover table-striped table-bordered" id="tablePartner">
                            <thead class="text-center">
                                <tr class="table-primary">
                                    <th>Name</th>
                                    <th>Detail</th>
                                    <th>Riwayat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($partners as $partner)
                                    <tr class="text-center">
                                        <td class="text-wrap">{{ $partner->name }}</td>
                                        <td class="text-wrap">{{ $partner->location }}</td>
                                        <td class="text-wrap">{!! nl2br(Str::limit($partner->detail, 30)) !!}</td>
                                        <td>
                                            <div class="d-flex flex-row justify-content-center">
                                                <a class="badge bg-success border-0 text-white fw-normal me-1" style="font-size: 14px;" href="{{ route('partner.edit', $partner->id) }}" role="button">
                                                    Ubah
                                                </a>

                                                <form action="{{ route('partner.destroy', $partner->id) }}" method="post">
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
                            Data partner kosong.
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-dashboard-layout>