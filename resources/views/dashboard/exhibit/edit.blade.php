<x-dashboard-layout title="Gerakan Seni">
    <section class="h-100 mt-5 mb-5 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">
                        <h1 class="h3 mb-4">Edit Data Exhibit</h1>
                        <form action="{{ route('exhibit.update', $exhibits->id) }}" method="POST">
                            <!-- Form -->
                            @method('put')
                            @csrf
                            <div class="mb-4">
                                <label for="title">judul</label>
                                <div class="input-group">
                                    <input type="text" value="{{ old('title', $exhibits->title) }}" class="form-control" placeholder="judul exhibit" name="title" id="title" required>
                                </div>  
                            </div>

                            <div class="form-group mb-4">
                                <label for="date">Waktu</label>
                                <input type="text" value="{{ old('date', $exhibits->date) }}" placeholder="waktu" class="form-control" name="date" id="date" required>
                            </div>

                            <div class="mb-4">
                              <label class="my-1 me-2" for="entites_id">Entity</label>
                                    <select class="form-select" name="entites_id" id="entites_id" aria-label="Default select example">
                                        @foreach ($entities as $entity)
                                            @if($exhibits->entites_id == $entity->id)
                                                <option value="{{ $exhibits->entites_id }}" selected>{{ $entity->name }}</option>
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
                                            @if($exhibits->partner_id == $partner->id)
                                                <option value="{{ $exhibits->partner_id }}" selected>{{ $partner->name }}</option>
                                            @else
                                                <option value="{{ $partner->id }}">{{ $partner->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                            </div>

                            <div class="form-group mb-4">
                                <label for="textarea">Detail</label>
                                <textarea class="form-control" value="{{ old('detail', $exhibits->detail) }}" placeholder="detail..." id="detail" name="detail" rows="4">{{ ($exhibits->detail) }}</textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label for="image">Image</label>
                                <input type="text" value="{{ old('image', $exhibits->image) }}" placeholder="link gambar" class="form-control" name="image" id="image" required>
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