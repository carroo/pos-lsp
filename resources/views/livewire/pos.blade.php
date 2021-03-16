<div>
    <div class="row justify-content-center">
        <div class="col-md-5 mb-4">
            <div class="card">
                <div class="card-header bg-warning">Pilih Barang</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Stok tersisa</th>
                                <th>beli</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produk as $key => $value)
                                <tr>
                                    <td> {{ $value->nama }} </td>
                                    <td> {{ $value->harga }} </td>
                                    <td> {{ $barang[$value->id] }} </td>
                                    <td>
                                        <input type="number" wire:model='jb.{{ $value->id }}' min="0"
                                            max="{{ $value->stok }}">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-7 mb-4">
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
                                <input type="number" class="form-control" name="total" value="{{ $tharga }}"
                                    placeholder="0" readonly required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Total Bayar</label>
                            <div class="input-group col-sm-10">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="number" class="form-control" name="pay_total" min="{{ $tharga }}"
                                    placeholder="0" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="input-group col-sm-10">
                                <input class="form-control" type="text" value="{{ date('d - m - Y') }}" readonly>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary float-right">Bayar</button>
                    </form>
                    <button wire:click='cek' class="btn btn-primary float-right">cek</button>
                </div>
            </div>
        </div>
    </div>
</div>
