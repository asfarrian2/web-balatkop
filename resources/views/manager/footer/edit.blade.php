
    <input type="hidden" name="id" value="{{Crypt::encrypt($footer->id_footer)}}" class="form-control" id="recipient-name1" required/>
    
    <div class="mb-3">
        <label for="recipient-name" class="mb-2">{{ $footer->nama }}, Caption :</label>
        <textarea name="keterangan" class="form-control" id="recipient-name1" required>{{ $footer->keterangan }}</textarea>
    </div>
        <div class="mb-3">
        <label for="recipient-name" class="mb-2">Link :</label>
        <input type="text" name="link" value="{{ $footer->link }}" class="form-control" id="recipient-name1"/>
    </div>