<?= $this->extend('user/layout/templateDetail'); ?>
<?= $this->section('content'); ?>

<div class="konfirmasi">
    <div class="card" style="background-color: #512E02;">
        <h1>Terima Kasih Telah Membeli Produk Kami!</h1>
        <img src="<?= base_url('img/tanda.png'); ?>" alt="Thank You" class="thank-you-image" style="max-height: 50px;max-width: 50px;">
        <p style="margin-bottom: 10px;color:white">Pesanan Anda telah berhasil diproses.</p>
        <p style="color:white">Silakan tunggu konfirmasi dari kami.</p>
    </div>
</div>

<?= $this->endSection() ?>