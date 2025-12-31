
    <input type="hidden" name="id" value="{{Crypt::encrypt($beranda->id_beranda)}}" class="form-control" id="recipient-name1" required/>

    <div class="mb-3">
        <label for="recipient-name" class="mb-2">{{ $beranda->nama }} :</label>
        <input type="file" accept="image/png" name="image" class="form-control" id="recipient-name1" required/>
    </div>
    <div class="mb-3">
        <label for="recipient-name" class="mb-2">Link :</label>
        <input type="text" name="link" value="{{ $beranda->link }}" class="form-control" id="recipient-name1"/>
    </div>
