<x-dashboard-layout title="Gerakan Seni">
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">
                        <h1 class="h3 mb-4">Tambah Data Exhibit</h1>
                        <form action="{{ route('exhibit.store') }}" method="POST">
                            <!-- Form -->
                            @csrf
                            <div class="mb-4">
                                <label for="title">judul</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="judul exhibit" name="title" id="title" required>
                                </div>  
                            </div>

                            <div class="form-group mb-4">
                                <label for="date">Waktu</label>
                                <input type="text" placeholder="waktu" class="form-control" name="date" id="date" required>
                            </div>

                            <div class="mb-4">
                              <label class="my-1 me-2" for="entites_id">Entity</label>
                                    <select class="form-select" name="entites_id" id="entites_id" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        @foreach ($entities as $entity)
                                            <option value="{{ $entity->id }}">{{ $entity->name }}</option>
                                        @endforeach
                                    </select>
                            </div>

                            <div class="mb-4">
                              <label class="my-1 me-2" for="partner_id">Partner</label>
                                    <select class="form-select" name="partner_id" id="partner_id" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        @foreach ($partners as $partner)
                                            <option value="{{ $partner->id }}">{{ $partner->name }}</option>
                                        @endforeach
                                    </select>
                            </div>

                            <div class="form-group mb-4">
                                <label for="textarea">Detail</label>
                                <textarea class="form-control" placeholder="detail..." id="detail" name="detail" rows="4"></textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label for="image">Image</label>
                                <input type="text" placeholder="link gambar" class="form-control" name="image" id="image" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800">Tambah Data</button>
                            </div>
                        </form>
                    </div>
                </div>                
            </div>
        </div>
    </section>
</x-dashboard-layout>