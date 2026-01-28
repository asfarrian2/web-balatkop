
    <input type="hidden" name="id" value="{{Crypt::encrypt($tentang->id_tentang)}}" class="form-control" id="recipient-name1" required/>
    
    <div class="mb-3">
        <label for="recipient-name" class="mb-2">Caption :</label>
        <textarea name="keterangan" rows="5" class="form-control" id="recipient-name1" required>{{ $tentang->keterangan }}</textarea>
    </div>