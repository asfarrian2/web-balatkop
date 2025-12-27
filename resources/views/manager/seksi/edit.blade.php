
    <input type="hidden" name="id" value="{{ Crypt::encrypt($seksi->id_seksi)}}" class="form-control" id="recipient-name1" required/>
    
    <div class="mb-3">
        <label for="recipient-name" class="">Seksi :</label>
        <input type="text" name="nama" value="{{ $seksi->seksi}}" class="form-control" id="recipient-name1" required/>
    </div>