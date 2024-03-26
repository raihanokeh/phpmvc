<?php
 
class About {
    public function index($nama= 'raihannur', $pekerjaan = 'Siswa')
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }

        public function page()
        {
            echo 'About/page';
        }
    }