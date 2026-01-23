
    <input type="hidden" name="id" value="{{ Crypt::encrypt($pegawai->id_pegawai)}}" class="form-control" id="recipient-name1" required/>
    
    <div class="mb-3">
        <label for="recipient-name" class="">Nama :</label>
        <input type="text" name="pegawai" value="{{ $pegawai->nama}}" class="form-control" id="recipient-name1" required/>
    </div>
    <div class="mb-3">
        <label for="recipient-name" class="">NIP :</label>
        <input type="text" name="nip" value="{{ $pegawai->nip}}" class="form-control" id="recipient-name1" required/>
    </div>
    <div class="mb-3">
        <label for="recipient-name" class="">Golongan :</label>
        <input type="text" name="golongan" value="{{ $pegawai->golongan}}" class="form-control" id="recipient-name1" required/>
    </div>
    <div class="mb-3">
        <label for="recipient-name" class="">Jabatan :</label>
        <select name="jabatan" class="form-select" required>
        <option value="">-Pilih Jabatan-</option>
        @foreach ($jabatan as $d)
            <option {{ $pegawai->id_jabatan == $d->id_jabatan ? 'selected' : '' }}
            value="{{ Crypt::encrypt($d->id_jabatan) }}">{{$d->jabatan }}</option>
        @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="recipient-name" class="">Seksi :</label>
        <select name="seksi" class="form-select" required>
        <option value="">-Pilih Seksi-</option>
        @foreach ($seksi as $d)
            <option {{ $pegawai->id_seksi == $d->id_seksi ? 'selected' : '' }}
            value="{{ Crypt::encrypt($d->id_seksi) }}">{{$d->seksi }}</option>
        @endforeach
        </select>
    </div>
        <div class="mb-3">
        <label for="recipient-name" class="">Foto :</label>
        <input type="file" accept="image/png" name="image" class="form-control" id="recipient-name1"/>
    </div>