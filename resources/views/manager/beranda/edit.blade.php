
    <input type="hidden" name="id" value="{{Crypt::encrypt($header->id_header)}}" class="form-control" id="recipient-name1" required/>
    
    <div class="mb-3">
        <label for="recipient-name" class="mb-2">{{ $header->nama }}, Caption :</label>
        <input type="text" name="keterangan" value="{{ $header->keterangan }}" class="form-control" id="recipient-name1" required/>
    </div>
        <div class="mb-3">
        <label for="recipient-name" class="mb-2">Link :</label>
        <input type="text" name="link" value="{{ $header->link }}" class="form-control" id="recipient-name1"/>
    </div>