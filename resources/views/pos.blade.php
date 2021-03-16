<!DOCTYPE html>
<html>
    <head>
        <title>pos</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header bg-warning">Pilih Barang</div>
                        <div class="card-body">
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th >Nama Barang</th>
                                            <th >Harga</th>
                                            <th >Stok tersisa</th>
                                            <th >beli</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($produk as $key => $value)
                                            <td> {{ $value->nama }} </td>
                                            <td> {{ $value->nama }} </td>
                                            <td> {{ $value->stok }} </td>
                                            <td> 
                                                <form action="pos/{{  }}" method="post">
                                                    @csrf
                                        @endforeach
                                    </tbody>
                                </table>

                                <input type="hidden" name="item_id" id="itemId">
        
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" id="itemName" class="form-control" placeholder="Pilih barang..." readonly>
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#pilihBarang">Pilih</button>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="modal fade" id="pilihBarang">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Pilih Barang</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table table-striped">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nama Barang</th>
                                                            <th scope="col">Kategori</th>
                                                            <th scope="col">Foto</th>
                                                            <th scope="col">Harga</th>
                                                            <th scope="col">Stok</th>
                                                            <th scope="col">Opsi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" value="1" class="form-control" name="quantity" id="itemQty" placeholder="Masukkan jumlah..." required>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Unit</span>
                                        </div>
                                    </div>
                                </div>
        
                                <button type="submit" class="btn btn-primary float-right">Tambah</button>
        
                            </form>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-8 mb-4">
                    <div class="card">
                        <div class="card-header bg-success ">Pembayaran</div>
        
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
        
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Total Harga</label>
        
                                    <div class="input-group col-sm-10">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                        </div>
                                        <input type="number" class="form-control" name="total"
                                               value="10"
                                               placeholder="0" readonly required>
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Total Bayar</label>
                                    <div class="input-group col-sm-10">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                        </div>
                                        <input type="number" class="form-control" name="pay_total"
                                               min="0"
                                               placeholder="0" required>
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="input-group col-sm-10">
                                        <input class="form-control" type="text"
                                               value="{{date('d - m - Y')}}" readonly>
                                    </div>
                                </div>
        
                                <button type="submit" class="btn btn-primary float-right">Bayar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Opsi</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        
    </body>
</html>