
    <input type="hidden" name="id" value="{{ Crypt::encrypt($agenda->id_agenda)}}" class="form-control" id="recipient-name1" required/>
    
    <div class="mb-3">
        <label for="recipient-name" class="">Judul :</label>
        <input type="text" name="agenda" value="{{ $agenda->judul}}" class="form-control" id="recipient-name1" required/>
    </div>
    <div class="mb-3">
        <label for="recipient-name" class="">Deskripsi :</label>
        <input type="text" name="nip" value="{{ $agenda->deskripsi}}" class="form-control" id="recipient-name1" required/>
    </div>
    <div class="mb-3">
        <label for="recipient-name" class="">Tanggal Awal :</label>
        <input type="text" name="golongan" value="{{ $agenda->tgl_awal}}" class="form-control" id="recipient-name1" required/>
    </div>
    <div class="mb-3">
        <label for="recipient-name" class="">Tanggal Akhir :</label>
        <input type="text" name="golongan" value="{{ $agenda->tgl_akhir}}" class="form-control" id="recipient-name1" required/>
    </div>
    <div class="mb-3">
        <label for="recipient-name" class="">Kategori :</label>
        <select name="kategori" class="form-select" required>
        <option value="">-Pilih Kategori-</option>
        @foreach ($kategori as $d)
            <option {{ $agenda->id_kategori == $d->id_kategori ? 'selected' : '' }}
            value="{{ Crypt::encrypt($d->id_kategori) }}">{{$d->kategori }}</option>
        @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="recipient-name" class="">Foto :</label>
        <input type="file" accept="image/png" name="image" class="form-control" id="recipient-name1"/>
    </div>