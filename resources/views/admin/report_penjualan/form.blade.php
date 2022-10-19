@extends('layouts.appadmin')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tambah Device</h1>    

<div class="card m-b-20">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table card-table table-center text-nowrap table-primary" width="100%">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th class="text-white" width="200">Nama Produk</th>
                                        <th class="text-white" width="140">Kode</th>
                                        <th class="text-white" width="100">satuan</th>
                                        <th class="text-white" width="90">qty</th>
                                        <th class="text-white" width="160">harga</th>
                                        <th class="text-white" width="90">diskon %</th>
                                        <th class="text-white" width="150">Pajak</th>
                                        {{-- <th class="text-white" width="110">Pajak type</th>--}}
                                        <th class="text-white" width="200">Total</th>
                                        {{-- <th class="text-white" width="200">Total pajak</th>--}}
                                        <th class="text-white">Action</th>


                                    </tr>
                                </thead>
                                <tbody class="addMoreProduct">
                                    <tr>
                                        <td>
                                            <select name="produk_id[]" id="produk_id" class="form-control produk_id">
                                                {{-- <option value="">--pilih--</option>
                                                @foreach ($produk as $produks)
                                                <option data-harga="{{$produks->harga_beli}}" data-produk="{{$produks->kode_produk}}" data-satuan="{{$produks->satuan->satuan_produk ?? ''}}" value="{{$produks->id}}">{{$produks->nama_produk}}</option>

                                                @endforeach --}}
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" name="kode_produk[]" id="kode_produk" readonly class="form-control kode_produk" style="font-size: 12px">
                                        </td>
                                        <td>
                                            <input type="text" name="satuan[]" readonly id="satuan" class="form-control satuan" style="font-size: 12px">
                                        </td>
                                        <td>
                                            <input type="text" name="kuantitas[]" id="qty" class="form-control qty" style="font-size: 12px">
                                        </td>
                                        <td>
                                            <input type="text" name="harga_produk[]" id="harga" class="form-control harga" style="font-size: 12px">
                                        </td>
                                        <td>
                                            <input type="text" name="diskon[]" id="diskon" class="form-control diskon" style="font-size: 12px">

                                        </td>
                                        <td>
                                            <select id="pajak" name="pajak[]" class="form-control pajak" style="font-size: 12px">
                                                {{-- <option value="0" data-paj="0">0</option>
                                                @foreach($pajak as $p)
                                                <option value="{{$p->id}}" data-paj="{{$p->tarif_persentase}}" data-pajak="{{$p->pemotongan}}">{{$p->nama_pajak}}</option>
                                                @endforeach --}}
                                            </select>
                                            {{-- <input type="number" name="pajak[]" id="pajak" class="form-control pajak">--}}

                                        </td>
                                        <td hidden>
                                            <input type="number" name="total_pajak[]" id="total_pajak" readonly hidden class="form-control total_pajak" style="font-size: 12px">
                                        </td>
                                        <td hidden>
                                            <input type="number" name="total_pajak_pph[]" id="total_pajak_pph" readonly hidden class="form-control total_pajak_pph" style="font-size: 12px">
                                        </td>
                                        <td hidden>
                                            <input type="number" hidden name="pajaktype[]" id="pajaktype" class="form-control pajaktype" style="font-size: 12px">
                                        </td>

                                        <td>
                                            <input type="number" name="total_amount[]" id="total" readonly class="form-control total_amount" style="font-size: 12px">
                                        </td>
                                        <td hidden>
                                            <input type="number" name="total_amount_all[]" id="total_amount_all" readonly class="form-control total_amount_all" style="font-size: 12px" hidden>
                                        </td>

                                        <td hidden>
                                            <input type="number" name="total_sub[]" id="total_sub" hidden readonly class="form-control total_sub" style="font-size: 12px">
                                        </td>
                                        <td hidden>
                                            <input type="number" name="total_disk[]" id="total_disk" readonly class="form-control total_disk" style="font-size: 12px">
                                        </td>

                                        <td>
                                            <a href="#" class="btn btn-sm btn-danger rounded-circle delete"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>

                                <tr>
                                    <td class="bg-white"><button type="button" class="btn btn-sm btn-success add_more">Tambah
                                            Barang</button></td>
                                    <td class="bg-white"></td>
                                    <td class="bg-white"></td>
                                    <td class="bg-white"></td>
                                    <td class="bg-white"></td>
                                    <td class="bg-white" style="text-align:right;">Subtotal</td>
                                    <td class="bg-white"></td>

                                    <td class="bg-white">
                                        <input type="number" hidden name="subtotal" readonly class="form-control total_subtotal_text" style="border: 0;font-size: 14px;font-weight: bold;text-align: right" id="total_subtotal_text">
                                        {{-- <input  type="text"--}}
                                        {{-- readonly  class="form-control total_subtotal_text1" style="border: 0;font-size: 14px;font-weight: bold;text-align: right" id="total_subtotal_text1">--}}
                                        <b class="total_subtotal_text1 bg-white" style="font-size: 14px;font-weight: bold;text-align: right;float: right">0</b>

                                        {{-- <input  type="number" name="subtotal_produk_view"--}}
                                        {{-- readonly  class="form-control total_subtotal_view" style="border: 0;font-size: 14px;font-weight: bold;text-align: right">--}}
                                    <td class="bg-white"></td>
                                    <td class="bg-white"></td>

                                </tr>
                                <tr>
                                    <td colspan="5" class="bg-white"></td>

                                    <td class="bg-white">Diskon Per Item</td>
                                    <td class="bg-white"></td>

                                    <td class="bg-white">
                                        <input type="number" name="diskon_per_item" id="diskon_per_item" hidden readonly class="form-control" style="border: 0;font-size: 14px;font-weight: bold;text-align: right">
                                        <b class="diskon_per_item1 bg-white" style="font-size: 14px;font-weight: bold;text-align: right;float: right">0</b>
                                        {{-- <input type="text"  id="diskon_per_item1"--}}
                                        {{-- readonly  class="form-control" style="border: 0;font-size: 14px;font-weight: bold;text-align: right">--}}
                                    </td>
                                    <td class="bg-white"></td>
                                    <td class="bg-white"></td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="bg-white"></td>

                                    <td class="bg-white">
                                        <div class="form-group" style="margin-left: 10px">
                                            {{-- <label for="">Diskon</label>--}}
                                            <label class="switch">
                                                <input type="checkbox" data-size="sm" id="diskon2" name="diskon2" data-toggle="toggle" data-on="Diskon %" data-off="Diskon RP" data-onstyle="success" data-offstyle="dark" checked>
                                                {{-- <span class="slider round" for="diskon2"--}}
                                                {{-- ></span>--}}
                                            </label>
                                            <input type="text" id="diskon_seluruh" name="tipediskon" hidden>
                                        </div>

                                        {{-- <input type="checkbox" id="togglepajak"  data-toggle="toggle" data-on="On" data-off="Off" data-onstyle="success" data-offstyle="dark">--}}
                                    </td>
                                    <td class="bg-white">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <input type="text" name="diskon_seluruhpersen" id="diskontotal" class="form-control" value=0>
                                                <input type="text" name="diskon_seluruh" id="diskontotalpersen" class="form-control diskontotalpersen" value=0>
                                            </div>
                                            {{-- <div class="col-md-3"><span for="diskon2" id="diskon2label">&nbsp;&nbsp;%</span>--}}
                                        </div>
                        </div>
                        </td>
                        <td class="bg-white" style="text-align: right;">
                            <input type="number" hidden readonly id="diskontotalpersen1" class="form-control" style="border: 0;font-size: 14px;font-weight: bold;text-align: right;">
                            <div class="" style="margin-left: 50px">
                                {{-- <input type="number" readonly id="diskontotalpersen2_value" class="form-control" style="border: 0;font-size: 14px;font-weight: bold;"> --}}
                                <b class="diskontotalpersen1_value bg-white" style="font-size: 14px;font-weight: bold;text-align: right;float: right">0</b>
                                <input type="number" name="diskon_calculate" class="form-control diskontotalpersen2_value" hidden>
                            </div>
                            <input type="number" readonly id="diskontotal1" class="form-control" style="border: 0;font-size: 14px;font-weight: bold;text-align: right">

                        </td>
                        <td class="bg-white"></td>
                        <td class="bg-white"></td>

                        </tr>

                        <input type="text" id="subtotal" hidden>

                        <tr>
                            <td colspan="5" class="bg-white"></td>

                            <td class="bg-white" style="text-align:right;">PPN</td>
                            <td class="bg-white"></td>

                            <td class="bg-white">
                                <input type="number" name="ppn" id="ppn" readonly class="form-control" style="border: 0;font-size: 14px;font-weight: bold;text-align: right" hidden>
                                {{-- <b class="ppn_value bg-white"  style="font-size: 14px;font-weight: bold;text-align: right;float: right">0</b>--}}
                                <span class="ppn_value bg-white" style="font-size: 14px;font-weight: bold;text-align: right;float: right">0</span>

                                {{-- <input type="text" id="ppn_value"--}}
                                {{-- readonly  class="form-control" style="border: 0;font-size: 14px;font-weight: bold;text-align: right">--}}
                            </td>
                            <td class="bg-white"></td>
                            <td class="bg-white"></td>

                        </tr>

                        <tr>
                            <td colspan="5" class="bg-white"></td>

                            <td class="bg-white" style="text-align:right;">PPH</td>
                            <td class="bg-white"></td>

                            <td class="bg-white" style="text-align: right;">
                                <input type="number" name="pph" id="pph" hidden readonly class="form-control" style="border: 0;font-size: 14px;font-weight: bold;text-align: right">
                                (<span class="pph_value bg-white" style="font-size: 14px;font-weight: bold;text-align: right;">0</span>)
                            </td>
                            <td class="bg-white"></td>
                            <td class="bg-white"></td>

                        </tr>



                        <tr>
                            <td colspan="5" class="bg-white"></td>

                            <td class="bg-white">Biaya Pengiriman</td>
                            <td class="bg-white"></td>

                            <td class="bg-white" style="float: right">
                                <input type="text" name="biaya_pengiriman" id="paid_amount" hidden class="form-control" style="border: 0;font-size: 14px;font-weight: bold;text-align: right">
                                <input type="text" id="paid_amount_value" class="form-control" style="font-size: 14px;font-weight: bold;text-align: right">
                            </td>
                            <td class="bg-white"></td>
                            <td class="bg-white"></td>

                        </tr>

                        <tr>
                            <td colspan="5" class="bg-white"></td>
                            <td class="bg-white" style="text-align:right;">Total</td>
                            <td class="bg-white"></td>

                            <td class="bg-white">
                                <b class="total"></b>
                                <input type="number" name="total_balance" id="balance" readonly class="form-control" hidden>
                                <input type="number" id="totalgrand" readonly class="form-control" hidden>
                                <input type="text" class="total1 form-control" name="jumlah_tagihan" readonly hidden style="border: 0;font-size: 14px;font-weight: bold;text-align: right">
                                <span class="total1_value bg-white" style="font-size: 14px;font-weight: bold;text-align: right;float: right">0</span>
                                <br>
                                <br>
                                <input type="text" class="total1_back" hidden>
                            </td>
                            <td class="bg-white"></td>
                            <td class="bg-white"></td>
                        </tr>

                        </table>
                    </div>

                    <div class="float-right">
                        <a href="" class="btn btn-danger">Batal</a>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>

@endsection
