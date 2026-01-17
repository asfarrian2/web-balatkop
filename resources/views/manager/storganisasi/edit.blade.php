
    <input type="hidden" name="id" value="{{Crypt::encrypt($sto->id_sto)}}" class="form-control" id="recipient-name1" required/>
    
    <div class="mb-3">
        <label for="recipient-name" class="mb-2">Caption :</label>
        <textarea name="keterangan" class="form-control" id="recipient-name1" required>{{ $sto->keterangan }}</textarea>
    </div>