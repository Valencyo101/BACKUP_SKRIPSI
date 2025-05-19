<!-- FOOTER -->
{{-- <footer id="footer" style="background-color: #000; color: #fff; padding: 40px 0; {{ route('about') ? 'margin-top : 0 !important' : '' }}"> --}}
<footer id="footer"
    style="background-color: #000; color: #fff; padding: 40px 0; {{ Route::is('blog') ? 'margin-top: 0;' : '' }}">
    <div class="container">
        <div class="row">

            <!-- Bagian Kiri: Logo -->
            <div class="col-md-6">
                <div class="footer-widget">
                    <div style="margin-top: 10px;">
                        <a href="#"><img src="{{ asset('public/frontend/img/logo-kopi.png') }}"
                                alt="Penghargaan Merek" style="width: 80px;"></a>
                        <a href="#"><img src="{{ asset('public/frontend/img/halal.png') }}" alt="Halal"
                                style="width: 80px; margin-left: 10px;"></a>
                    </div>
                    <br>
                    <p style="margin-top: 10px;">©2024 KSU SRIKANDI, All RIghts Reserved</p>
                </div>

                <!-- Bagian Hubungi Kami - Disesuaikan untuk Spasi Lebih Baik -->
                <div class="footer-widget" style="margin-top: 60px;">
                    <h3 class="footer-title">SARAN & KOMPLAIN</h3>
                    <p> <a href="https://wa.me/+62895630488200?text=Halo%20KSU%20SRIKANDI!%20Saya%20ingin%20bertanya%20tentang%20produk%20anda."
                            target="_blank" style="color: #fff;">
                            <i class="fa fa-whatsapp"></i> 0895630488200</a> (Chat Whatsapp Only)
                    </p>
                    <br>
                    <h3 class="footer-title">Consumer Complaints Service Contact Information
                    </h3>
                    <p>Directorate General of Consumer Protection and Trade Compliance, Ministry of Trade of the
                        Republic of Indonesia <br> Whatsapp Diktjen PKTN: 0853-1111-1010</p>
                </div>
            </div>

            <!-- Bagian Kanan: Peta -->
            <div class="col-md-6">
                <div class="footer-widget">
                    <h3 class="footer-title">LOKASI KAMI</h3>
                    <p>Dusun sidorejo, Ngarip, Kec. Ulubelu, Kabupaten Tanggamus, Lampung 35387</p>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4556735376567!2d104.5527725!3d-5.3126415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f15cdd97f111%3A0xdea5a94df4c3f32d!2sKSU%20Srikandi!5e0!3m2!1sen!2sid!4v1633353349957!5m2!1sen!2sid&markers=color:red%7C-5.3126415,104.5527725"
                        width="100%" height="300" style="border:0; border-radius: 10px;" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>
            </div>

        </div>
    </div>
</footer>
