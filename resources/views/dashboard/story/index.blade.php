<x-dashboard-layout title="Story">
    <div class="d-flex justify-content-between align-items-center">
        <h2>Story</h2>
    </div>
    <div class="col-12">
        <div class="card border border-1 mt-4 shadow">
            <div class="card-header fs-5 fw-bold text-primary">
                <div class="d-flex justify-content-between align-items-center">
                    Data Story
                    <a class="btn btn-primary" href="{{ route('story.create') }}" role="button">
                        Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body">
                @if ($stories->isNotEmpty())
                    <div class="entitySection">
                        <table class="table table-hover table-striped table-bordered" id="tableStory">
                            <thead class="text-center">
                                <tr class="table-primary">
                                    <th>Title</th>
                                    <th>Detail</th>
                                    <th>Kategori</th>
                                    <th>Partner</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stories as $story)
                                    <tr class="text-center">
                                        <td class="text-wrap">{{ $story->story_title }}</td>
                                        <td class="text-wrap">{!! nl2br(Str::limit($story->story_detail, 30)) !!}</td>
                                        <td class="text-wrap">{{ $story->kategori }}</td>
                                        <td class="text-wrap">{{ $story->partner }}</td>
                                        <td>
                                            <div class="d-flex flex-row justify-content-center">
                                                <a class="badge bg-success border-0 text-white fw-normal me-1" style="font-size: 14px;" href="{{ route('story.edit', $story->story_id) }}" role="button">
                                                    Ubah
                                                </a>
                                                
                                                <form action="{{ route('story.destroy', $story->story_id) }}" method="post">
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
                            Data story kosong.
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-dashboard-layout>