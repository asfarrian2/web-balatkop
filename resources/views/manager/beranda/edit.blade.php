
    <input type="hidden" name="id" value="{{Crypt::encrypt($beranda->id_beranda)}}" class="form-control" id="recipient-name1" required/>

    <div class="mb-3">
        <label for="recipient-name" class="mb-2">{{ $beranda->nama }}, Caption :</label>
        <input type="text" name="caption" value="{{ $beranda->keterangan_1 }}" class="form-control" id="recipient-name1" required/>
    <div class="mb-3">
        <label for="recipient-name" class="mb-2">Keterangan :</label>
        <input type="text" name="keterangan2" value="{{ $beranda->keterangan_2 }}" class="form-control" id="recipient-name1"/>
    </div>
    <div class="mb-3">
        <label for="recipient-name" class="mb-2">Link :</label>
        <input type="text" name="link" value="{{ $beranda->link }}" class="form-control" id="recipient-name1"/>
    </div>
