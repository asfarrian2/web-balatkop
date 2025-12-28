    <input type="hidden" name="id" value="{{ Crypt::encrypt($kategori->id_kategori)}}" class="form-control" id="recipient-name1" required/>
    
    <div class="mb-3">
        <label for="recipient-name" class="">kategori :</label>
        <input type="text" name="nama" value="{{ $kategori->kategori}}" class="form-control" id="recipient-name1" required/>
    </div>