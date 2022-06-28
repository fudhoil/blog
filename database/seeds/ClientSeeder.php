<?php

use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = ['BlwXHOvTq0lT99ubJY992fJrmPDfSSA8imRGhjXp.png', 'cY0OMXdPcpyhghPwfdOg27JMM261CtFDonto9tI7.png', 'gkLodgb8BK83zKGYIVCuab0ElNx5bw9Vyb66Y1wj.png', 'Hr9DMbtqZA7jzAN0VppqCpNxGEXiqFN25maf33i8.png', 'JjPFLGxIBaLY0hr5rK7MINzP9hnVSfeiwxauO7iR.png', 'jQ4Ox9gEHYCn9hSg38zRyRhLMYUFa6DKVGH26bIX.png', 'kBpq0xTdq6LVVmoZd5CVuUxHr2gSdyv9O70aMQ7g.png', 'Nl4MzJOXthY0deQEQrK30PmAbbCqcRKvZbOFADjs.png'];


        foreach ($datas as $data) {
            Client::create([
                'nama_perusahaan' => '',
                'description' => '',
                'image' => 'gambar/client' . $data
            ]);
        }
    }
}
