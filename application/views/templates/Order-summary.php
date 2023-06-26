<?php


$prodId = $this->session->userdata('id');
$quantity = $this->session->userdata('quantity');
$dataProd = array();
foreach ($prodId as $id) {
    $dataProd[] = $this->Model_Produk->select_where('produk_id', $id)->result_array();
}

$data[] = $dataProd;
// var_dump($data[0][0][0]['harga']);
// die;
$harga = $data[0][0][0]['harga'];
$pajak = $harga * 0.13;
$total = $harga + 30000 + $pajak;
// var_dump($harga, $pajak, $total);
// die;

?>

<div class="col-lg-3">
    <div id="order-summary" class="card">
        <div class="card-header">
            <h3 class="mt-4 mb-4">Order summary</h3>
        </div>
        <div class="card-body">
            <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Order subtotal</td>
                            <th>Rp.<?= $data[0][0][0]['harga']; ?></th>
                        </tr>
                        <tr>
                            <td>Shipping and handling</td>
                            <th>Rp.30000</th>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <th>Rp.<?= $pajak; ?></th>
                        </tr>
                        <tr class="total">
                            <td>Total</td>
                            <th>Rp.<?= $total; ?></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.col-lg-3-->
</div>
</div>
</div>
</div>