<x-dashboard-layout title="Gerakan Seni">
    <section class="vh-lg-500 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">
                        <h1 class="h3 mb-4">Edit Data Asset</h1>
                        <form action="{{ route('asset.update', $assets->id) }}" method="POST">
                            <!-- Form -->
                            @method('put')
                            @csrf
                            <div class="mb-4">
                                <label for="title">judul</label>
                                <div class="input-group">
                                    <input type="text" value="{{ old('title', $assets->title) }}" class="form-control" placeholder="judul asset" name="title" id="title" required>
                                </div>  
                            </div>

                            <div class="form-group mb-4">
                                <label for="year">Tahun</label>
                                <input type="text" value="{{ old('year', $assets->year) }}" placeholder="tahun" class="form-control" name="year" id="year" required>
                            </div>

                            <div class="mb-4">
                                <label class="my-1 me-2" for="entites_id">Entity</label>
                                    <select class="form-select" name="entites_id" id="entites_id" aria-label="Default select example">
                                          <option selected>Open this select menu</option>
                                          @foreach ($entities as $entity)
                                          @if($assets->entites_id == $entity->id)
                                              <option value="{{ $assets->entites_id }}" selected>{{ $entity->name }}</option>
                                          @else
                                              <option value="{{ $entity->id }}">{{ $entity->name }}</option>
                                          @endif
                                      @endforeach
                                    </select>
                            </div>

                            <div class="mb-4">
                                <label class="my-1 me-2" for="partner_id">Partner</label>
                                    <select class="form-select" name="partner_id" id="partner_id" aria-label="Default select example">
                                        @foreach ($partners as $partner)
                                            @if($assets->partner_id == $partner->id)
                                                <option value="{{ $assets->partner_id }}" selected>{{ $partner->name }}</option>
                                            @else
                                                <option value="{{ $partner->id }}">{{ $partner->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                            </div>

                            <div class="mb-4">
                              <label class="my-1 me-2" for="artist_id">Artist</label>
                                    <select class="form-select" name="artist_id" id="artist_id" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        @foreach ($artists as $artist)
                                            @if($assets->artist_id == $artist->id)
                                                <option value="{{ $assets->artist_id }}" selected>{{ $artist->name }}</option>
                                            @else
                                                <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                            </div>

                            <div class="form-group mb-4">
                                <label for="textarea">Deskripsi</label>
                                <textarea class="form-control" value="{{ old('desc', $assets->desc) }}" placeholder="detail..." id="desc" name="desc" rows="4">{{ $assets->desc }}</textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label for="textarea">Detail</label>
                                <textarea class="form-control" value="{{ old('detail', $assets->detail) }}" placeholder="detail..." id="detail" name="detail" rows="4">{{ $assets->detail }}</textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label for="image">Image</label>
                                <input type="text" value="{{ old('image', $assets->image) }} placeholder="link gambar" class="form-control" name="image" id="image" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800">Ubah Data</button>
                            </div>
                        </form>
                    </div>
                </div>                
            </div>
        </div>
    </section>
</x-dashboard-layout>