
    <input type="hidden" name="id" value="{{ Crypt::encrypt($penulis->id_penulis)}}" class="form-control" id="recipient-name1" required/>
    
    <div class="mb-3">
        <label for="recipient-name" class="">Nama Panggilan :</label>
        <input type="text" name="nama" value="{{ $penulis->nickname}}" class="form-control" id="recipient-name1" required/>
    </div>
    <div class="mb-3">
        <label for="recipient-name" class="">Username :</label>
        <input type="text" name="username" value="{{ $penulis->username}}" class="form-control" id="recipient-name1" required/>
    </div>
    <div class="mb-3">
        <label for="recipient-name" class="">Password :</label>
        <input type="text" name="password" value="" class="form-control" id="recipient-name1"/>
    </div>