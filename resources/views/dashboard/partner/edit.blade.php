<x-dashboard-layout title="Gerakan Seni">
    <section class="h-100 mt-5 mb-5 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">
                        <h1 class="h3 mb-4">Edit Data Partner</h1>
                        <form action="{{ route('partner.update', $partners->id) }}" method="POST">
                            <!-- Form -->
                            @method('put')
                            @csrf
                            <div class="mb-4">
                                <label for="name">Nama</label>
                                <div class="input-group">
                                    <input type="text" value="{{ old('name', $partners->name) }}" class="form-control" placeholder="nama partner" name="name" id="name" required>
                                </div>  
                            </div>

                            <div class="form-group mb-4">
                                <label for="location">Lokasi</label>
                                <input type="text" value="{{ old('location', $partners->location) }}"  placeholder="lokasi" class="form-control" name="location" id="location" required>
                            </div>

                            <div class="form-group mb-4">
                                <label for="textarea">Detail</label>
                                <textarea class="form-control" value="{{ old('detail', $partners->detail) }}"  placeholder="detail..." id="detail" name="detail" rows="4">{{ old('detail', $partners->detail) }}</textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label for="logo">Logo</label>
                                <input type="text" value="{{ old('logo', $partners->logo) }}"  placeholder="link logo" class="form-control" name="logo" id="image" required>
                            </div>

                            <div class="form-group mb-4">
                                <label for="image">Image</label>
                                <input type="text" value="{{ old('image', $partners->image) }}" placeholder="link gambar" class="form-control" name="image" id="image" required>
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