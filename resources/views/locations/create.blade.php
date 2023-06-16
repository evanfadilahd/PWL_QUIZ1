<html>
<head>
    <title>Create Location</title>
</head>

<body>
    <h1>Add Location</h1>

                <hr>
                    <form action="{{ route('locations.store') }}" method="post">
                        @csrf
                        
                        <label for="lat">Latitude:</label>
                        <input type="text" name="lat" id="lat" required>

                        <label for="lng">Longitude:</label>
                         <input type="text" name="lng" id="lng" required>

                        <div class="form-group">
                            <label for="nama_tempat">Nama Tempat</label>
                            <input type="text" class="form-control" name="nama_tempat">
                        </div>

                        <div class="form-group">
                            <label for="namapem_tempat">Nama Pemilik</label>
                            <input type="text" class="form-control" name="namapem_tempat">
                        </div>

                        <div class="form-group">
                            <label for="jalan_tempat">Jalan </label>
                            <input type="text" class="form-control" name="jalan_tempat">
                        </div>

                        <div class="form-group">
                            <label for="asalkot_tempat">Asal Kota </label>
                            <input type="text" class="form-control" name="asalkot_tempat">
                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori Tempat</label>
                            <select class="form-control" name="kategori" id="kategori">
                                <option value="">--Kategori Tempat--</option>
                                <option value="peternakan hewan besar">Peternakan Ruminansia</option>
                                <option value="peternakan unggas">Peternakan Unggas</option>
                                <option value="perikanan tawar">Perikanan Tawar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" name="keterangan" cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Add</button>
                        </div>
                    </form>
             
</body>