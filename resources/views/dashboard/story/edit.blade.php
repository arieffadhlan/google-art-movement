<x-dashboard-layout title="Gerakan Seni">
    <section class="vh-lg-500 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">
                        <h1 class="h3 mb-4">Edit Data Story</h1>
                        <form action="{{ route('story.update', $stories->id) }}" method="POST">
                            <!-- Form -->
                            @method('put')
                            @csrf
                            <div class="mb-4">
                                <label for="title">judul</label>
                                <div class="input-group">
                                    <input type="text" value="{{ old('title', $stories->title) }}" class="form-control" placeholder="judul asset" name="title" id="title" required>
                                </div>  
                            </div>

                            <div class="mb-4">
                                <label class="my-1 me-2" for="entites_id">Entity</label>
                                      <select class="form-select" name="entites_id" id="entites_id" aria-label="Default select example">
                                          <option selected>Open this select menu</option>
                                          @foreach ($entities as $entity)
                                            @if($stories->entites_id == $entity->id)
                                                <option value="{{ $stories->entites_id }}" selected>{{ $entity->name }}</option>
                                            @else
                                                <option value="{{ $entity->id }}">{{ $entity->name }}</option>
                                            @endif
                                          @endforeach
                                      </select>
                            </div>

                            <div class="mb-4">
                                <label class="my-1 me-2" for="partner_id">Partner</label>
                                      <select class="form-select" name="partner_id" id="partner_id" aria-label="Default select example">
                                          <option selected>Open this select menu</option>
                                          @foreach ($partners as $partner)
                                            @if($stories->partner_id == $partner->id)
                                                <option value="{{ $stories->partner_id }}" selected>{{ $partner->name }}</option>
                                            @else
                                                <option value="{{ $partner->id }}">{{ $partner->name }}</option>
                                            @endif
                                          @endforeach
                                      </select>
                              </div>

                            <div class="form-group mb-4">
                                <label for="textarea">Detail</label>
                                <textarea class="form-control" value="{{ old('title', $stories->detail) }} placeholder="detail..." id="detail" name="detail" rows="4">{{ $stories->detail }}</textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label for="image">Image</label>
                                <input type="text" value="{{ old('title', $stories->image) }}" placeholder="link gambar" class="form-control" name="image" id="image" required>
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