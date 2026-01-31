
    <input type="hidden" name="id" value="{{ Crypt::encrypt($fasilitas->id_fasilitas)}}" class="form-control" id="recipient-name1" required/>
    
    <div class="mb-3">
        <label for="recipient-name" class="">Nama Fasilitas :</label>
        <input type="text" name="nama" value="{{ $fasilitas->fasilitas}}" class="form-control" id="recipient-name1" required/>
    </div>
    <div class="mb-3">
        <label for="recipient-name" class="">Keterangan :</label>
        <textarea name="keterangan" class="form-control" id="recipient-name1" required>{{ $fasilitas->keterangan }}</textarea>
    </div>
    <div class="mb-3">
        <label for="recipient-name" class="mb-2">Gambar :</label>
        <input type="file" accept="image/png" name="image" class="form-control" id="recipient-name1"/>
    </div>