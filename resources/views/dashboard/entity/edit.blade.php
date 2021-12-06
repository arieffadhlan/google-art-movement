<x-dashboard-layout title="Gerakan Seni">
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">
                        <h1 class="h3 mb-4">Edit Data Entity</h1>
                        <form action="{{ route('entity.update', $entities->id) }}" method="POST">
                            <!-- Form -->
                            @method('put')
                            @csrf
                            <div class="mb-4">
                                <label for="name">Nama</label>
                                <div class="input-group">
                                    <input type="text" value="{{ old('name', $entities->name) }}" class="form-control" placeholder="nama kategori" name="name" id="name" required>
                                </div>  
                            </div>

                            <div class="form-group mb-4">
                                <label for="year">Tahun</label>
                                <input type="text" value="{{ old('year', $entities->year) }}" placeholder="tahun" class="form-control" name="year" id="year" required>
                            </div>

                            <div class="form-group mb-4">
                                <label for="textarea">Deskripsi</label>
                                <textarea class="form-control" value="{{ old('desc', $entities->desc) }}" placeholder="deskripsi..." id="desc" name="desc" rows="4">{{ old('desc', $entities->desc) }}</textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label for="image">Gambar</label>
                                <input type="text" value="{{ old('image', $entities->image) }}" placeholder="link gambar" class="form-control" name="image" id="image" required>
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