
    <input type="hidden" name="id" value="{{Crypt::encrypt($footer->id_footer)}}" class="form-control" id="recipient-name1" required/>
    
    <div class="mb-3">
        <label for="recipient-name" class="mb-2">{{ $footer->nama }} :</label>
        <input type="file" accept="image/png" name="image" class="form-control" id="recipient-name1" required/>
    </div>
        <div class="mb-3">
        <label for="recipient-name" class="mb-2">Link :</label>
        <input type="text" name="link" value="{{ $footer->link }}" class="form-control" id="recipient-name1"/>
    </div>