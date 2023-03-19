<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artikel extends Controller
{
    public function tampil()
    {

        $artikel01 = new \stdClass();
        $artikel01->judul = "8 ciri penyakit tipes";
        $artikel01->isi = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias sit, atque omnis laboriosam totam repellendus sint aliquid ipsam deleniti impedit. Earum voluptatibus veniam accusantium. Dignissimos, ullam? Ea quas libero nulla velit architecto veritatis itaque officiis vitae nemo et fuga doloremque officia assumenda eaque a mollitia aspernatur, porro enim? Id, totam.";

        $artikel02 = new \stdClass();
        $artikel02->judul = "bahaya demam";
        $artikel02->isi = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, expedita. Dolores rerum doloribus tenetur dicta, earum perferendis alias nisi voluptas, repellat sed consequuntur accusantium totam! Consequatur iusto nam dignissimos magni rerum, sunt dolor illum, suscipit laudantium provident ut? Esse voluptatem quibusdam hic eius doloremque adipisci eveniet ratione ad itaque velit aspernatur dignissimos odit beatae quo quas inventore, facere sapiente aliquam!";

        $artikel03 = new \stdClass();
        $artikel03->judul = "remeja masuk rumah sakit karena maag";
        $artikel03->isi = "Lorem ipsum dolor sit amet consectetur adipisicing elit. A officia eum dolores, iste ipsam molestiae eius odio quibusdam ipsa corrupti delectus eligendi at minima similique quam quos omnis debitis, doloremque beatae. Officia veniam delectus quod cupiditate et dolorum cumque facilis non similique tempora. Quos, magni dignissimos doloremque odit reiciendis nisi illum doloribus culpa iste necessitatibus repellat harum velit expedita deserunt iure totam rem quibusdam! Eveniet sint velit esse quos dignissimos!";

        $artikel04 = new \stdClass();
        $artikel04->judul = "apakah pilek berbahaya?";
        $artikel04->isi = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora hic eos eveniet, beatae necessitatibus rem. Libero expedita ad quaerat doloremque ullam. Labore maxime exercitationem atque fugit veniam dolorem quia ut?";

        $artikel = collect([$artikel01, $artikel02, $artikel03, $artikel04]);

        $judul = $artikel->pluck('judul');
        $isi =  $artikel->pluck('isi');

        return view('eklinik', ['judul' => $judul]);
    }
    public function art()
    {
        $artikel01 = new \stdClass();
        $artikel01->judul = "8 ciri penyakit tipes";
        $artikel01->isi = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias sit, atque omnis laboriosam totam repellendus sint aliquid ipsam deleniti impedit. Earum voluptatibus veniam accusantium. Dignissimos, ullam? Ea quas libero nulla velit architecto veritatis itaque officiis vitae nemo et fuga doloremque officia assumenda eaque a mollitia aspernatur, porro enim? Id, totam.";

        $artikel02 = new \stdClass();
        $artikel02->judul = "bahaya demam";
        $artikel02->isi = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, expedita. Dolores rerum doloribus tenetur dicta, earum perferendis alias nisi voluptas, repellat sed consequuntur accusantium totam! Consequatur iusto nam dignissimos magni rerum, sunt dolor illum, suscipit laudantium provident ut? Esse voluptatem quibusdam hic eius doloremque adipisci eveniet ratione ad itaque velit aspernatur dignissimos odit beatae quo quas inventore, facere sapiente aliquam!";

        $artikel03 = new \stdClass();
        $artikel03->judul = "remeja masuk rumah sakit karena maag";
        $artikel03->isi = "Lorem ipsum dolor sit amet consectetur adipisicing elit. A officia eum dolores, iste ipsam molestiae eius odio quibusdam ipsa corrupti delectus eligendi at minima similique quam quos omnis debitis, doloremque beatae. Officia veniam delectus quod cupiditate et dolorum cumque facilis non similique tempora. Quos, magni dignissimos doloremque odit reiciendis nisi illum doloribus culpa iste necessitatibus repellat harum velit expedita deserunt iure totam rem quibusdam! Eveniet sint velit esse quos dignissimos!";

        $artikel04 = new \stdClass();
        $artikel04->judul = "apakah pilek berbahaya?";
        $artikel04->isi = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora hic eos eveniet, beatae necessitatibus rem. Libero expedita ad quaerat doloremque ullam. Labore maxime exercitationem atque fugit veniam dolorem quia ut?";

        $artikel = collect([$artikel01, $artikel02, $artikel03, $artikel04]);

        $judul = $artikel->pluck('judul');
        $isi =  $artikel->pluck('isi');

        // $artikel = [
        //     [
        //         'judul' => "8 ciri penyakit tipes",
        //         'isi' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. A officia eum dolores, iste ipsam molestiae eius odio quibusdam ipsa corrupti delectus eligendi at minima similique quam quos omnis debitis, doloremque beatae. Officia veniam delectus quod cupiditate et dolorum cumque facilis non similique tempora. Quos, magni dignissimos doloremque odit reiciendis nisi illum doloribus culpa iste necessitatibus repellat harum velit expedita deserunt iure totam rem quibusdam! Eveniet sint velit esse quos dignissimos!"
        //     ],
        //     [
        //         'judul2' => "bahaya demam",
        //         'isi2' => "Lorem ipsum dolor sit amet"
        //     ]
        // ];

        // echo $artikel[0]['judul'];
    }
}
