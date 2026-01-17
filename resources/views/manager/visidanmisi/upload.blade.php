
    <input type="hidden" name="id" value="{{Crypt::encrypt($visimisi->id_visimisi)}}" class="form-control" id="recipient-name1" required/>
    
    <div class="mb-3">
        <label for="recipient-name" class="mb-2">{{ $visimisi->nama }} :</label>
        <input type="file" accept="image/png" name="image" class="form-control" id="recipient-name1" required/>
    </div>