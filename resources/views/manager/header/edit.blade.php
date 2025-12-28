
    <input type="hidden" name="id" value="{{ Crypt::encrypt($jabatan->id_jabatan)}}" class="form-control" id="recipient-name1" required/>
    
    <div class="mb-3">
        <label for="recipient-name" class="">Jabatan :</label>
        <input type="text" name="nama" value="{{ $jabatan->jabatan}}" class="form-control" id="recipient-name1" required/>
    </div>
        <div class="mb-3">
        <label for="recipient-name" class="">Kelas :</label>
        <input type="text" name="kelas" value="{{ $jabatan->kelas}}" class="form-control" id="recipient-name1" required/>
    </div>