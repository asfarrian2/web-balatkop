
    <input type="hidden" name="id" value="{{Crypt::encrypt($sto->id_sto)}}" class="form-control" id="recipient-name1" required/>
    
    <div class="mb-3">
        <label for="recipient-name" class="mb-2">{{ $sto->nama }} :</label>
        <input type="file" accept="image/png" name="image" class="form-control" id="recipient-name1" required/>
    </div>